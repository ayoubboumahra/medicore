{extends file="../layout.tpl"}
{block name="body"}
<div class="card p-3">
    <h5 class="fw-bold mb-3">Create new patient</h5>
    <form method="post" action="/patients/store" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group mb-3">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" class="form-control" required/>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group mb-3">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" class="form-control" required/>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="mobile">Mobile Phone</label>
            <input type="text" id="mobile" name="mobile" class="form-control" required />
        </div>

        <div class="form-group mb-3">
            <select class="form-select" name="doctor" required>
                <option selected hidden value="">Select a doctor</option>
                {foreach $doctors as $doctor}
                    <option value="{$doctor.id}">{$doctor.firstname} {$doctor.lastname} - {$doctor.speciality}</option>
                {/foreach}
            </select>
        </div>

        <div class="form-group mb-3">
            <select class="form-select" name="departement" required>
                <option selected hidden value="">Select a departement</option>
                {foreach $departements as $departement}
                    <option value="{$departement.id}">{$departement.name} ({$departement.code})</option>
                {/foreach}
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="date">Date</label>
            <input type="datetime-local" id="date" name="date" class="form-control" required/>
        </div>

        <div class="form-group mb-3">
            <label for="photo">Photo</label>
            <input type="file" id="photo" name="photo" class="form-control" accept="image/png, image/gif, image/jpeg, image/jpg" required/>
        </div>

        <button class="btn btn-success" type="submit">Create</button>
    </form>
</div>
{/block}