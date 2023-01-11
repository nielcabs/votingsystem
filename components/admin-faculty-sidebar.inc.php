<div class="sidebar position-fixed start-0 h-100 d-flex flex-column flex-shrink-0 py-4 px-3 text-white bg-red" style="min-width: 300px; max-width: 300px;">
    <a href="/versiontwo/user/" class="d-flex flex-column justify-content-center align-items-center mx-auto mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <img
        src="<?php echo $url; ?>img/dhvsu-logo.png"
        alt=""
        class="img-fluid"
        width="80px"
      />
      <span class="fs-4 fw-bold">Voting System</span>
    </a>
    <hr>
    <ul class="nav nav-pills mb-3 flex-column" id="pills-tab" role="tablist">

      <li class="nav-item" role="presentation">
        <button class="nav-link active w-100 text-start" id="pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#pills-dashboard" type="button" role="tab" aria-controls="pills-dashboard" aria-selected="true">
          <img
            src="<?php echo $url; ?>img/icon-dashboard.png"
            alt=""
            class="img-fluid mr-2"
            height="40px"
            width="40px"
          />
          Dashboard
        </button>
      </li>
      </li>

      <li class="nav-item" role="presentation">
        <button class="nav-link w-100 text-start" id="create-election-tab" data-bs-toggle="pill" data-bs-target="#create-election" type="button" role="tab" aria-controls="create-election" aria-selected="true">
          <img
            src="<?php echo $url; ?>img/icon-account.png"
            alt=""
            class="img-fluid mr-2"
            height="40px"
            width="40px"
          />
          Create Election
        </button>
      </li>

      <li class="nav-item" role="presentation">
        <button class="nav-link w-100 text-start" id="usc-tab" data-bs-toggle="pill" data-bs-target="#usc" type="button" role="tab" aria-controls="usc" aria-selected="true">
          <img
            src="<?php echo $url; ?>img/icon-account.png"
            alt=""
            class="img-fluid mr-2"
            height="40px"
            width="40px"
          />
          University Student Council
        </button>
      </li>


      <!-- <li class="nav-item" role="presentation">
        <h6 class="mt-4 mb-3">Register Candidates</h6>
        <hr>
        <button class="nav-link w-100 text-start" id="usc-tab" data-bs-toggle="pill" data-bs-target="#usc" type="button" role="tab" aria-controls="usc" aria-selected="true">
          <img
            src="../img/icon-usc.png"
            alt=""
            class="img-fluid mr-2"
            height="40px"
            width="40px"
          />
          University Student Council
        </button>
      </li>  -->

        <button class="nav-link w-100 text-start" id="pills-local-student-council-tab" data-bs-toggle="pill" data-bs-target="#pills-local-student-council" type="button" role="tab" aria-controls="pills-local-student-council" aria-selected="true">
          <img
            src="../img/icon-people.png"
            alt=""
            class="img-fluid mr-2"
            height="40px"
            width="40px"
          />
          Local Student Council
        </button>
        <button class="nav-link w-100 text-start" id="pills-local-faculty-election-tab" data-bs-toggle="pill" data-bs-target="#pills-local-faculty-election" type="button" role="tab" aria-controls="pills-local-faculty-election" aria-selected="true">
          <img
            src="../img/icon-people.png"
            alt=""
            class="img-fluid mr-2"
            height="40px"
            width="40px"
          />
          Faculty Election
        </button>
      </li>
    
      
    </ul>
    <a type="button" href="<?php echo $url; ?>logout" class="btn btn-lg text-white mt-auto">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
        <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
      </svg>
      Log out
      
  </a>
  
  </div>
