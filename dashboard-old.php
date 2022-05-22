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
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Projects</span>

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
  
                      <li><a class="dropdown-item" href="#">Asset</a></li>
                      <li><a class="dropdown-item" href="#">Shot</a></li>
                    </ul>
                  </div>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-puzzle"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Shot</h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Shots </span>

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
                      <h6>E01</h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Episodes</span>
                    </div>
                  </div>

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown">Change <i class="bi bi-chevron-down"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Sequences</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="#">SQ01</a></li>
                      <li><a class="dropdown-item" href="#">SQ02</a></li>
                      <li><a class="dropdown-item" href="#">SQ03</a></li>
                      <li><a class="dropdown-item" href="#">SQ04</a></li>
                    </ul>
                  </div>

                </div>
              </a>
              </div>

            </div><!-- End Customers Card -->

            <!-- Tugas User -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Progress Task</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col" class="status">Preview</th>
                        <th scope="col" class="status">Name</th>
                        <th scope="col" class="status">Animation</th>
                        <th scope="col" class="status">Layout</th>
                        <th scope="col" class="status">Render</th>
                        <th scope="col" class="status">Sound</th>
                        <th scope="col" class="status">Ligthing</th>
                        <!-- <th scope="col" style="background-color: greenyellow; text-align:center">Confirm</th> -->

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/product-1.jpg" alt=""></a></th>
                        <td class="text-primary fw-bold">
                        <a href="#" class="text-primary fw-bold" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable"> Episode 1 </a></td>
                          <!-- Modal Dialog Scrollable -->
                            <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                              <div class="modal-dialog modal-dialog-scrollable modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Episode 01</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  
                                            <!-- Recent Activity -->
                                              <div class="card">
                                                <div class="filter">
                                                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                      <h6>Filter</h6>
                                                    </li>

                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                  </ul>
                                                </div>

                                                <div class="card-body">
                                                  <h5 class="card-title">Recent Activity</h5>

                                                  <div class="activity">

                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">1 December 2021</div>
                                                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                                      <div class="activity-content">
                                                        Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                                                      </div>
                                                    </div><!-- End activity item-->

                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">1 December 2021</div>
                                                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                                      <div class="activity-content">
                                                        Voluptatem blanditiis blanditiis eveniet
                                                      </div>
                                                    </div><!-- End activity item-->

                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">1 December 2021</div>
                                                      <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                                      <div class="activity-content">
                                                        Voluptates corrupti molestias voluptatem
                                                      </div>
                                                    </div><!-- End activity item-->

                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">1 December 2021</div>
                                                      <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                                      <div class="activity-content">
                                                        Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                                                      </div>
                                                    </div><!-- End activity item-->

                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">1 December 2021</div>
                                                      <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                                      <div class="activity-content">
                                                        Est sit eum reiciendis exercitationem
                                                      </div>
                                                      
                                                    </div><!-- End activity item-->

                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">1 December 2021 </div>
                                                      <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                                      <div class="activity-content">
                                                        Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                                      </div>
                                                    </div><!-- End activity item-->

                                                  </div>

                                                </div>
                                              </div><!-- End Recent Activity -->


                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div><!-- End Modal Dialog Scrollable-->

                        </td>
                        <td>
                          <button type="button" class="btn btn-success rounded-circle" data-bs-toggle="modal" data-bs-target="#modalBadge" ><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle">
                        
                          
                        </td>

                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/product-2.jpg" alt=""></a></th>
                        <td class="text-primary fw-bold">Episode 2</td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></i></button></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/product-3.jpg" alt=""></a></th>
                        <td class="text-primary fw-bold">Episode 3</td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></button></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/messages-2.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></i></button></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/messages-2.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                      </tr> 
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/product-4.jpg" alt=""></a></th>
                        <td class="text-primary fw-bold">Episode 1</td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/messages-2.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/messages-2.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></button></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/messages-2.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/messages-2.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></i></button></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/messages-2.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/product-5.jpg" alt=""></a></th>
                        <td class="text-primary fw-bold">Episode 1</td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                        <td><button type="button" class="btn btn-success rounded-circle"><i class="fa fa-check-circle-o green"></i></button>
                          <img src="../pipeline/assets/img/dea.jpg" alt="Profile" style="width: 26px; height:auto" class="rounded-circle"></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>

  </main><!-- End #main -->

<!-- template footer -->
<?php include '../pipeline/templates/footer.php'; ?>