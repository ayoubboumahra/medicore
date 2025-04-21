<?php

use App\Controllers\PatientController;

// Home
$collector->get('/', [PatientController::class, 'index']);

// Patient CRUD
$collector->get('/patients/create', [PatientController::class, 'create']);
$collector->post('/patients/store', [PatientController::class, 'store']);
$collector->get('/patients/{id}/edit', [PatientController::class, 'edit']);
$collector->post('/patients/{id}/update', [PatientController::class, 'update']);
$collector->get('/patients/{id}', [PatientController::class, 'show']);
$collector->post('/patients/{id}/delete', [PatientController::class, 'delete']);