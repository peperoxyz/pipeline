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
                        

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/sadness.png" alt=""></a><a href="#" type="button" class="text-primary fw-bold "> Sadness </a></th>
                        
                        <td><h6>Another expression</h6></td>
                        <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable" >DONE</button></td>
                        <!-- Modal Dialog Scrollable -->
                            <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Task Details |<span> Characters </span></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                    <!-- Recent Activity -->
                                      <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title"> Characters <span>/ Sadness</span> </h5>
                                              <section class="section">
                                                <div class="row">
                                                  <div class="col-lg-6">

                                                    <div class="card">
                                                      <div class="card-body">
                                                        <div class="form-floating mb-0 mt-3">
                                                          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                                                          <label for="floatingTextarea">Add a comment</label>
                                                        </div>
                                                        
                                                      </div>
                                                      
                                                      <div class="card-body">
                                                        <div class="">
                                                          
                                                          <button type="button" class="btn btn-secondary float-end ms-2">Post a comment</button>
                                                        <div class="float-end mt-2">
                                                          <span class="badge rounded-pill bg-success pt-2 pb-2 pe-4 ps-4">DONE</span>
                                                          <a class="icon" href="#" data-bs-toggle="dropdown"> <i class="bi bi-chevron-down"></i></a>
                                                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                            <li class="dropdown-header text-start">
                                                              <h6>Status</h6>
                                                            </li>
                                                            <li style="background: #d9534f"><a class="dropdown-item" href="#">TODO</a></li>
                                                            <li style="background: #f0ad4e"><a class="dropdown-item" href="#">DOING</a></li>
                                                            <li style="background: #5cb85c"><a class="dropdown-item" href="#">DONE</a></li>
                                                          </ul>
                                                        </div>
                                                        
                                                        </div>
                                                        
                                                      </div>
                                                    </div>

                                                  </div>
                                                  <div class="col-lg-6">
                                                
                                                  <!-- Picture -->
                                                    <div class="">
                                                      <div class="">
                                                        <div class="row mb-2">
                                                          <label for="" class="">Attach Preview</label>
                                                          
                                                          <div class="col-sm-10">
                                                            <input class="form-control" type="file" id="formFile">
                                                          </div>
                                                          <div style="height:45px;" class="col-sm-2 card-icon rounded-circle align-items-center justify-content-center ">
                                                            <a href="#"> <i class="bi bi-eye fa-6x"></i></a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!-- End Picture -->

                                                  <!-- Comment -->
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h6 class=" card-title">
                                                          <img src="../pipeline/assets/img//profile-img.jpg" alt="Profile" style="width: 30px; height:auto" class="rounded-circle"> <?php echo $nama; ?>
                                                        </h6>
                                                          <h6>This is my final result for this task.</h6>
                                                      </div>
                                                    </div>
                                                    <!-- End Comment -->
 
                                                  </div>
                                                </div>
                                              </section>

                                            <div class="card">
                                              <div class="card-body">
                                                <h5 class="card-title">Log Status</h5>
                                                  <div class="activity">
                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">March 22 2022</div>
                                                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                                      <div class="activity-content">
                                                        <?php echo $nama; ?> has changed this task from <a href="#" class="fw-bold text-dark">DOING</a> to <a href="#" class="fw-bold text-dark">DONE</a>
                                                      </div>
                                                    </div><!-- End activity item-->
                                                    
                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">March 21 2022</div>
                                                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                                      <div class="activity-content">
                                                        <?php echo $nama; ?> has changed this task from <a href="#" class="fw-bold text-dark">TODO</a> to <a href="#" class="fw-bold text-dark">DOING</a>
                                                      </div>
                                                    </div><!-- End activity item-->
                                                  </div>
                                                </div>
                                              </div>
                                            </div><!-- End Recent Activity -->
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div><!-- End Modal Dialog Scrollable-->
                        <td><button type="button" class="btn btn-success">DONE</button></td>
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