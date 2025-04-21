{extends file="../layout.tpl"}

{block name="body"}
  <a href="/patients/create" class="my-2 btn btn-info text-white">+ Create new Patient</a>
  <div class="row">
    <div class="col-xl-8 col-lg-12">
      <div class="card mb-3">
        <div class="m-3 d-flex flex-column flex-md-row justify-content-between align-items-center">
          <!-- Controls for Search, Filters, and Download -->
          <div class="d-flex flex-column flex-md-row align-items-center mb-3 mb-md-0">
              <div class="input-group me-md-5 mb-3 mb-md-0">
                  <span class="input-group-text bg-white border-end-0">
                      <i class="bi bi-search"></i>
                  </span>
                  <input type="text" class="form-control border-start-0" placeholder="Search here" />
              </div>
              <p class="my-0 me-md-5 d-flex flex-row align-items-center mb-3 mb-md-0">
                  <i class="bi bi-sliders2 me-3"></i><span>Filters</span>
              </p>
              <p class="my-0 d-flex flex-row align-items-center">
                  <i class="bi bi-arrow-bar-down me-3"></i><span>Download</span>
              </p>
          </div>
      
          <!-- Pagination Controls -->
          <div class="pagination-controls d-flex align-items-center flex-wrap justify-content-center justify-content-md-end">
              <button class="page-btn">
                  <i class="bi bi-chevron-left text-gray"></i>
              </button>
      
              <p class="mx-2 my-0">Page</p>
      
              <button class="page-btn text-gray">1</button>
      
              <p class="mx-2 my-0">of 2</p>
      
              <button class="page-btn">
                  <i class="bi bi-chevron-right text-gray"></i>
              </button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered m-0">
              <thead>
                  <tr>
                      <th></th>
                      <th>Name</th>
                      <th>Mob</th>
                      <th>Date</th>
                      <th>Doctor</th>
                      <th>Departement</th>
                  </tr>
              </thead>
              <tbody>
                {foreach $patients as $patient}
                  <tr>
                    <td><img src="{$patient.photo}" alt="{$patient.firstname} {$patient.lastname}"></td>
                    <td class="table-name"><a href="/patients/{$patient.id}">{$patient.firstname} {$patient.lastname}</a></td>
                    <td>{$patient.mobile}</td>
                    <td>{$patient.date}</td>
                    <td class="table-name">Dr. {$patient.dfirstname} {$patient.dlastname}</td>
                    <td>{$patient.name} ({$patient.code})</td>
                  </tr>
                {foreachelse}
                  <tr>
                    <td colspan="6" class="text-center fw-bold text-danger">There are not patient yet.</td>
                  </tr>
                {/foreach}
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
      <div class="col-lg-4 col-12 my-2">
      <div class="card py-4 card-patient">
        <div class="w-75 mx-auto d-flex flex-row align-items-center">
          <div class="me-3 icon-circle icon-bg-patient">
            <img src="/assets/cpatient.png" alt="Admit new patient" />
          </div>
          <div>
            <small class="label-text">ADMIT NEW</small>
            <h4 class="label-heading patient">PATIENT</h4>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-4 col-12 my-2">
      <div class="card py-4 card-emergency">
        <div class="w-75 mx-auto d-flex flex-row align-items-center">
          <div class="me-3 icon-circle icon-bg-emergency">
            <img src="/assets/croom.png" alt="Emergency Room" />
          </div>
          <div>
            <small class="label-text">EMERGENCY</small>
            <h4 class="label-heading emergency">ROOM</h4>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-4 col-12 my-2">
      <div class="card py-4 card-pharmacy">
        <div class="w-75 mx-auto d-flex flex-row align-items-center">
          <div class="me-3 icon-circle icon-bg-pharmacy">
            <img src="/assets/cdetails.png" alt="Pharmacy Details" />
          </div>
          <div>
            <small class="label-text">PHARMACY</small>
            <h4 class="label-heading pharmacy">DETAILS</h4>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-12">
      <div class="row">
        <div class="col-6 mb-4">
            <div class="card p-4 d-flex flex-row align-items-center">
              <div style="width: 50px; height: 50px; background-color: #E1FFFD; border-radius: 50%; margin-right: 10px">
                <img style="width: 40px; margin: 5px" src="/assets/appoinments.png" />
              </div>
              <div>
                <h3>140</h3>
                <small>Total Appoinments</small>
              </div>
            </div>
        </div>
        <div class="col-6 mb-4">
            <div class="card p-4 d-flex flex-row align-items-center">
              <div style="width: 50px; height: 50px; background-color: #E1FFFD; border-radius: 50%; margin-right: 10px">
                <img style="width: 40px; margin: 5px" src="/assets/patients.png" />
              </div>
              <div>
                <h3>370</h3>
                <small>Total Patients</small>
              </div>
            </div>
        </div>
        <div class="col-6 mb-4">
            <div class="card p-4 d-flex flex-row align-items-center">
              <div style="width: 50px; height: 50px; background-color: #E1FFFD; border-radius: 50%; margin-right: 10px">
                <img style="width: 40px; margin: 5px" src="/assets/cancellations.png" />
              </div>
              <div>
                <h3>070</h3>
                <small>Total Cancellations</small>
              </div>
            </div>
        </div>
        <div class="col-6 mb-4">
            <div class="card p-4 d-flex flex-row align-items-center">
              <div style="width: 50px; height: 50px; background-color: #E1FFFD; border-radius: 50%; margin-right: 10px">
                <img style="width: 40px; margin: 5px" src="/assets/avgdoctors.png" />
              </div>
              <div>
                <h3>120</h3>
                <small>Total Avg Per Doctor</small>
              </div>
            </div>
        </div>
      </div>
      <div class="card available">
        <div class="card-body">
          <div class="container">
            <h4 class="mb-3">Available Doctors</h4>
            <form class="mb-4">
              <div class="input-group">
                <span class="input-group-text bg-white border-end-0">
                  <i class="bi bi-search"></i> <!-- Bootstrap Icon -->
                </span>
                <input type="text" class="form-control border-start-0" placeholder="Search Here" />
              </div>
            </form>
            <div class="row">
              {foreach $doctors as $doctor}
                <div class="col-4 text-center my-3">
                  <img class="mb-2" src="{$doctor.photo}" alt="Dr. {$doctor.firstname} {$doctor.lastname}" />
                  <h6 style="color: #02A499">Dr. {$doctor.firstname} {$doctor.lastname}</h6>
                  <p style="color: #8B8B8B; font-size: 12px">{$doctor.speciality} ({$doctor.code})</p>
                </div>
              {/foreach}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{/block}