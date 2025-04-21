{extends file="../layout.tpl"}
{block name="body"}
<h4>Patient Details</h4>
<div class="row">
  <!-- Patient Profile Card -->
  <div class="col-lg-8 col-12 mb-4">
    <div class="card p-4 border-0 shadow-sm">
      <div class="d-flex align-items-center">
        <img src="/{$patient.photo}" alt="Patient" class="rounded-circle me-4 shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
        <div>
          <h4 class="mb-1 fw-bold text-primary">{$patient.firstname} {$patient.lastname}</h4>
          <p class="mb-1 text-muted"><i class="bi bi-telephone me-1"></i> {$patient.mobile}</p>
          <p class="mb-0 text-muted"><i class="bi bi-calendar3 me-1"></i> {$patient.date}</p>
        </div>
      </div>

      <hr class="my-4" />

      <div class="d-flex">
        <a href="/patients/{$patient.id}/edit" class="btn btn-outline-primary me-3 px-4">
          <i class="bi bi-pencil me-1"></i> Edit
        </a>
        <form method="post" action="/patients/{$patient.id}/delete">
          <button type="submit" class="btn btn-outline-danger px-4">
            <i class="bi bi-trash me-1"></i> Delete
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Sidebar Info -->
  <div class="col-lg-4 col-12">
    <!-- Department Info -->
    <div class="card p-4 mb-3 border-0 shadow-sm">
      <h6 class="text-uppercase text-muted mb-2">Department</h6>
      <p class="mb-0 fs-6">
        <i class="bi bi-building me-1 text-secondary"></i>
        <strong>{$patient.name}</strong> <span class="text-muted">({$patient.code})</span>
      </p>
    </div>

    <!-- Doctor Info -->
    <div class="card p-4 border-0 shadow-sm">
      <h6 class="text-uppercase text-muted mb-3">Doctor</h6>
      <div class="d-flex align-items-center mb-3">
        <img src="/{$patient.dphoto}" alt="Doctor" class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
        <div>
          <p class="mb-1 fw-bold">Dr. {$patient.dfirstname} {$patient.dlastname}</p>
          <p class="mb-0 text-muted">{$patient.speciality}</p>
        </div>
      </div>
    </div>
  </div>
</div>

{/block}