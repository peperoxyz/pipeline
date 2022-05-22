<!-- template header -->
<?php include '../pipeline/templates/header.php'; ?>

<!-- template sidebar -->
<?php include '../pipeline/templates/sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col">
          <div class="row">

            <!-- Sales Card == shot card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Project <span>| Choosen</span></h5>
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown">Change <i class="bi bi-chevron-down"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Your Projects</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="#">Inside Out</a></li>
                      <li><a class="dropdown-item" href="#">Family Guy</a></li>
                      <li><a class="dropdown-item" href="#">American Dad</a></li>
                      <li><a class="dropdown-item" href="#">The Simpsons</a></li>
                    </ul>
                  </div>


                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-camera-reels"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Inside Out</h6>
                      <a href="./page_team.php"> <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Team</span> </a>

                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Task Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">


                <div class="card-body">
                  <h5 class="card-title">Tasks <span>| Choosen</span></h5>

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown">Change <i class="bi bi-chevron-down"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Your Tasks</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="./dashboard_asset.php">Asset</a></li>
                      <li><a class="dropdown-item" href="./dashboard.php">Shot</a></li>
                    </ul>
                  </div>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-puzzle"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Asset</h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Assets </span>

                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Task Detail Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">
              
              <a href="#"> 
                <div class="card-body">
                  <h5 class="card-title">Task Detail <span>| Choosen</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Character</h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Types</span>
                    </div>
                  </div>

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown">Change <i class="bi bi-chevron-down"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Characters</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="#">Characters</a></li>
                      <li><a class="dropdown-item" href="#">Environment</a></li>
                      <li><a class="dropdown-item" href="#">Fx</a></li>
                      <li><a class="dropdown-item" href="#">Props</a></li>
                      <li><a class="dropdown-item" href="#">Background</a></li>
                    </ul>
                  </div>

                </div>
              </a>
              </div>

            </div><!-- End Customers Card -->

            <!-- Tugas User -->
            <!-- SQ 2 -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <div class="card-body pb-0"> 
                  <h5 class="card-title">Characters</h5> 
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col" class="status">Name</th>
                        <th scope="col" class="status">Description</th>
                        <th scope="col" class="status">Concept</th>
                        <th scope="col" class="status">Shading</th>
                        <th scope="col" class="status">Rigging</th>
                        <th scope="col" class="status">Modelling</th>
                        <th scope="col" class="status">Rigging</th>
                        <th scope="col" class="status">Modelling</th>
                        
                        <!-- <th scope="col" style="background-color: greenyellow; text-align:center">Confirm</th> -->

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/sadness.png" alt=""></a><a href="#" type="button" class="text-primary fw-bold "data-bs-toggle="modal" data-bs-target="#modalDialogScrollable" > Sadness </a></th>
                        
                        <td><h6>Another expression</h6></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-success">DONE</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- End of SQ2 -->

          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>

  </main><!-- End #main -->

<!-- template footer -->
<?php include '../pipeline/templates/footer.php'; ?>