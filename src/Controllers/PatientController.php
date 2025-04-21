<?php

namespace App\Controllers;

use Smarty\Smarty;
use Config\Database; 
use PDO;

class PatientController
{
    private $smarty;
    private $pdo;

    public function __construct() {
        $this->smarty = new Smarty();
        $this->pdo = (new Database())->getConnection();
    }

    /**
     * Display the index page showing doctors and patients.
     */
    public function index(): void
    {
        // Retrieve and clear any error message from the session
        $error = $_SESSION["error"] ?? null;
        unset($_SESSION["error"]);

        // Retrieve and clear any success message from the session
        $success = $_SESSION["success"] ?? null;
        unset($_SESSION["success"]);

        // Fetch all doctors along with their department code
        $statement = $this->pdo->query("
            SELECT 
                do.firstname, 
                do.lastname, 
                do.speciality, 
                de.code, 
                do.photo 
            FROM doctors AS do 
            INNER JOIN departements AS de ON de.id = do.departement_id
        ");
        $doctors = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Fetch all patients with their related doctor and department details
        $statement = $this->pdo->query("
            SELECT 
                p.id, 
                p.firstname, 
                p.lastname, 
                p.mobile, 
                p.date, 
                p.photo, 
                do.firstname AS dfirstname, 
                do.lastname AS dlastname,
                de.code, 
                de.name 
            FROM patients AS p 
            INNER JOIN departements AS de ON de.id = p.departement_id 
            INNER JOIN doctors AS do ON do.id = p.doctor_id
        ");
        $patients = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Pass data to the Smarty template
        $this->smarty->assign('doctors', $doctors);
        $this->smarty->assign('patients', $patients);
        $this->smarty->assign('success', $success);
        $this->smarty->assign('error', $error);

        // Render the index view
        $this->smarty->display('../views/patients/index.tpl');
    }

    /**
     * Display the patient creation form.
     */
    public function create(): void
    {
        // Fetch all departments from the database
        $statement = $this->pdo->query("SELECT * FROM departements");
        $departements = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Fetch all doctors with limited fields
        $statement = $this->pdo->query("SELECT id, firstname, lastname, speciality FROM doctors");
        $doctors = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Retrieve and clear any error message stored in session
        $error = $_SESSION["error"] ?? null;
        unset($_SESSION["error"]);

        // Retrieve and clear any success message stored in session
        $success = $_SESSION["success"] ?? null;
        unset($_SESSION["success"]);

        // Assign data to Smarty template
        $this->smarty->assign('departements', $departements);
        $this->smarty->assign('doctors', $doctors);
        $this->smarty->assign('success', $success);
        $this->smarty->assign('error', $error);

        // Display the form
        $this->smarty->display('../views/patients/create.tpl');
    }

    /**
     * Create new patient.
     */
    public function store(): void
    {
        // Retrieve form data from POST
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $mobile = $_POST["mobile"];
        $doctor_id = $_POST["doctor"];
        $departement_id = $_POST["departement"];
        $date = $_POST["date"];

        // Set up file upload path
        $folder = "assets/patients/"; // Directory to store uploaded photos
        $filetype = basename($_FILES["photo"]["type"]); // e.g., jpeg, png
        $file = $folder . strtolower($firstname) . "_" . strtolower($lastname) . "." . $filetype;

        // Move the uploaded file to the destination folder
        if (!move_uploaded_file($_FILES["photo"]["tmp_name"], $file)) {
            $_SESSION['error'] = "Sorry, there was an error uploading your file.";
            header("Location: /patients/create");
            exit;
        }

        try {
            // Prepare SQL statement using named placeholders to prevent SQL injection
            $statement = $this->pdo->prepare("
                INSERT INTO patients 
                (firstname, lastname, mobile, doctor_id, departement_id, photo, date) 
                VALUES 
                (:firstname, :lastname, :mobile, :doctor_id, :departement_id, :photo, :date)
            ");

            // Bind actual values to the placeholders
            $statement->bindParam(":firstname", $firstname);
            $statement->bindParam(":lastname", $lastname);
            $statement->bindParam(":mobile", $mobile);
            $statement->bindParam(":doctor_id", $doctor_id);
            $statement->bindParam(":departement_id", $departement_id);
            $statement->bindParam(":photo", $file);
            $statement->bindParam(":date", $date);

            // Execute the query
            $statement->execute();

            // Store success message in session
            $_SESSION['success'] = "The patient is created successfully.";
        } catch (PDOException $e) {
            // If there's an error, store it in session and show it
            $_SESSION['error'] = "Database error: " . $e->getMessage();
        }

        // Redirect user back to the create page (POST-Redirect-GET pattern)
        header("Location: /patients/create");
    }

    /**
     * Display the details of a single patient.
     *
     * @param int $id The ID of the patient to retrieve.
     */
    public function show($id): void
    {
        // Prepare SQL query to retrieve the patient and their associated doctor and department
        $statement = $this->pdo->prepare("
            SELECT 
                p.id, p.firstname, p.lastname, p.mobile, p.photo, p.date,
                de.code, de.name,
                do.firstname AS dfirstname, do.lastname AS dlastname, do.speciality, do.photo AS dphoto
            FROM patients AS p
            INNER JOIN departements AS de ON de.id = p.departement_id
            INNER JOIN doctors AS do ON do.id = p.doctor_id
            WHERE p.id = :id
        ");

        // Bind the patient ID to the query
        $statement->bindParam(":id", $id);

        // Execute the query
        $statement->execute();

        // Fetch a single patient record
        $patient = $statement->fetch(PDO::FETCH_ASSOC);

        // If the patient does not exist
        if(empty($patient)){
            $_SESSION["error"] = "The patient does not exist.";
            header("Location: /");
            exit;
        }

        // Pass the patient data to the Smarty view
        $this->smarty->assign("patient", $patient);

        // Render the patient details page
        $this->smarty->display("../views/patients/show.tpl");
    }

    /**
     * Display the edit form for a patient.
     *
     * @param int $id The ID of the patient to edit.
     */
    public function edit($id): void
    {
        // Use prepared statement to prevent SQL injection
        $statement = $this->pdo->prepare("SELECT * FROM patients WHERE id = :id");
        $statement->bindParam(":id", $id, PDO::PARAM_INT);
        $statement->execute();
        $patient = $statement->fetch(PDO::FETCH_ASSOC); // use fetch() instead of fetchAll for one record

        // If the patient does not exist
        if(empty($patient)){
            $_SESSION["error"] = "The patient does not exist.";
            header("Location: /");
            exit;
        }

        // Fetch all departements
        $statement = $this->pdo->query("SELECT * FROM departements");
        $departements = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Fetch all doctors with limited fields
        $statement = $this->pdo->query("SELECT id, firstname, lastname, speciality FROM doctors");
        $doctors = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Handle flash messages (error/success)
        $error = $_SESSION["error"] ?? null;
        unset($_SESSION["error"]);

        $success = $_SESSION["success"] ?? null;
        unset($_SESSION["success"]);

        // Pass data to Smarty view
        $this->smarty->assign('departements', $departements);
        $this->smarty->assign('doctors', $doctors);
        $this->smarty->assign('patient', $patient); // already a single record
        $this->smarty->assign('error', $error);
        $this->smarty->assign('success', $success);

        // Display the edit form
        $this->smarty->display('../views/patients/edit.tpl');
    }

    /**
     * Update patient information.
     *
     * @param int $id The ID of the patient to update.
     */
    public function update($id): void
    {
        // Collect data from POST request
        $data = [
            "id" => $id,
            "firstname" => $_POST["firstname"],
            "lastname" => $_POST["lastname"],
            "mobile" => $_POST["mobile"],
            "doctor_id" => $_POST["doctor"],
            "departement_id" => $_POST["departement"],
            "date" => $_POST["date"]
        ];

        // Base SQL update query
        $sql = "UPDATE patients 
                SET firstname = :firstname, 
                    lastname = :lastname, 
                    mobile = :mobile, 
                    doctor_id = :doctor_id, 
                    departement_id = :departement_id, 
                    date = :date";

        // If a new photo was uploaded, process and add to query
        if (!empty($_FILES["photo"]["name"])) {
            $folder = "assets/patients/";
            $filetype = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION); // safer than type
            $filename = strtolower($data["firstname"]) . "_" . strtolower($data["lastname"]) . "." . $filetype;
            $filepath = $folder . $filename;

            // Move uploaded file
            if (!move_uploaded_file($_FILES["photo"]["tmp_name"], $filepath)) {
                $_SESSION['error'] = "Sorry, there was an error uploading the file.";
                header("Location: /patients/$id/edit");
                exit;
            }

            // Add to data and update SQL
            $data["photo"] = $filepath;
            $sql .= ", photo = :photo";
        }

        // Finalize query with WHERE condition
        $sql .= " WHERE id = :id";

        try {
            // Prepare and execute update statement
            $statement = $this->pdo->prepare($sql);
            $statement->execute($data);

            // Set success message
            $_SESSION['success'] = "The patient was updated successfully.";
        } catch (PDOException $e) {
            // Set error message
            $_SESSION['error'] = "Database error: " . $e->getMessage();
        }

        // Redirect to the edit page
        header("Location: /patients/$id/edit");
        exit;
    }

    /**
     * Delete a patient by ID.
     *
     * @param int $id The ID of the patient to delete.
     */
    public function delete($id): void
    {
        try {
            // Use a prepared statement to safely delete the patient
            $statement = $this->pdo->prepare("DELETE FROM patients WHERE id = :id");
            $statement->bindParam(":id", $id, PDO::PARAM_INT); // Explicitly set parameter type
            $statement->execute();

            // Set success message in session
            $_SESSION['success'] = "The patient was deleted successfully.";
        } catch (PDOException $e) {
            // Handle any database error gracefully
            $_SESSION['error'] = "Database error: " . $e->getMessage();
        }

        // Redirect to homepage or patient list after deletion
        header("Location: /");
        exit;
    }
}