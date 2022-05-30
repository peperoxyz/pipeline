<!-- template header -->
<?php include '../pipeline/templates/header.php'; ?>

<!-- template sidebar -->
<?php include '../pipeline/templates/sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col">
          <div class="row">

                        <!-- Project Card -->
            <div class="col-lg-2 col-md-4">
              <div class="card info-card sales-card" style="padding-bottom: 0px">
                <div class="card-body" style="padding: 0 20px 0px 20px;">
                    <div class="card-title">Inside Out <a href="#" data-bs-toggle="dropdown"> <i class="bi bi-chevron-down"></i></a>
                        <!-- <a class="icon" href="#" data-bs-toggle="dropdown">Change <i class="bi bi-chevron-down"></i></a> -->
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li><a class="dropdown-item" href="#">Inside Out</a></li>
                        <li><a class="dropdown-item" href="#">Family Guy</a></li>
                        <li><a class="dropdown-item" href="#">American Dad</a></li>
                        <li><a class="dropdown-item" href="#">The Simpsons</a></li>
                        </ul>
                    </div>
                </div>
              </div>
            </div>

            <!-- divider Card -->
            <div class="col-1">
              <div class="card-title info-card  "style="padding-bottom: 0px">
                <div class="card-body" style="padding: 0 20px 0px 20px;">
                    <i class="bi bi-chevron-right"></i>
                </div>
              </div>
            </div>

            <!-- Task Card -->
            <div class="col-lg-2 col-md-4">
              <div class="card info-card sales-card "style="padding-bottom: 0px">
                <div class="card-body" style="padding: 0 20px 0px 20px;">
                    <div class="card-title">Shot <a href="#" data-bs-toggle="dropdown"> <i class="bi bi-chevron-down"></i></a>
                        <!-- <a class="icon" href="#" data-bs-toggle="dropdown">Change <i class="bi bi-chevron-down"></i></a> -->
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li><a class="dropdown-item" href="page_shot.php">Shot</a></li>
                        <li><a class="dropdown-item" href="page_asset.php">Asset</a></li>
                        <li><a class="dropdown-item" href="page_team.php">Team</a></li>
                        </ul>
                    </div>
                </div>
              </div>
            </div>
        
            <!-- divider Card -->
            <div class="col-1">
              <div class="card-title info-card  "style="padding-bottom: 0px">
                <div class="card-body" style="padding: 0 20px 0px 20px;">
                    <i class="bi bi-chevron-right"></i>
                </div>
              </div>
            </div>

            <!-- Task Detail Card -->
            <div class="col-lg-2 col-md-4">
              <div class="card info-card sales-card" style="padding-bottom: 0px">
                <div class="card-body" style="padding: 0 20px 0px 20px;">
                    <div class="card-title">Episodes <a href="#" data-bs-toggle="dropdown"> <i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li><a class="dropdown-item" href="#">Episode 1</a></li>
                        <li><a class="dropdown-item" href="#">Episode 2</a></li>
                        <li><a class="dropdown-item" href="#">Episode 3</a></li>
                        </ul>
                    </div>
                </div>
              </div>
            </div> 

            <!-- Tugas User -->
            <!-- Large Modal -->
              <div class="modal fade" id="addName" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add new shot in SQ01</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="card " >
                        <div class="card-body pt-3">

                          <!-- Default Tabs -->
                          <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                              <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">Episodes</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                              <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">Sequences</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                              <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="false">Shots</button>
                            </li>
                          </ul>
                          <div class="tab-content pt-2" id="myTabjustifiedContent">
                            <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                              <!-- List group with active and disabled items -->
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Episode 01</li>
                                  <li class="list-group-item">Episode 02</li>
                                </ul><!-- End Clean list group -->
                            </div>
                            <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                              <!-- List group with active and disabled items -->
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Sequence 01</li>
                                  <li class="list-group-item">Sequence 02</li>
                                </ul><!-- End Clean list group -->
                            </div>
                            <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
                              <!-- List group with active and disabled items -->
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Shot 01</li>
                                  <li class="list-group-item">Shot 02</li>
                                </ul><!-- End Clean list group -->
                            </div>
                          </div><!-- End Default Tabs -->

                        </div>
                      </div>

                      <!-- add shots -->
                      <div class="">
                      <nav>
                        <ol class="breadcrumb float-start mt-2 me-3">
                          <li class="breadcrumb-item active"><a href="#">EP01</a></li>
                          <li class="breadcrumb-item active"><a href="#">SQ01</a></li>
                          <li class="breadcrumb-item active">SH02</li>
                        </ol>
                      </nav>
                      <button type="button" class="btn btn-success mb-2 ms-1 " data-bs-toggle="modal" data-bs-target="#verticalycentered" ><i class="bi bi-plus-circle"> </i> Add shot</button>
                      </div>
                    </div>
                    
                    <div class="modal-footer">
                      
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Large Modal-->


            

            <!-- SQ1 -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <div class="card-body pb-0"> 
                  <h5 class="card-title">SQ01
                                  <button type="button" class="btn btn-primary mb-3 float-end" data-bs-toggle="modal" data-bs-target="#addName" ><i class="bi bi-plus-circle"> </i>Add New Shot</button>
                  </h5> 
                  
                  <table class="table table-borderless">
                    <thead>
                      <tr>
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
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/joy.png" alt=""></a><a href="#" type="button" class="text-primary fw-bold" > SH01 </a></th>

                        <!-- php -->
                        <?php 
                          $modals = array( 'modal1', 'modal2', 'modal3', 'modal4', 'modal5' );// Set the array
                          $i = 1; // Set the increment variable
                          foreach( $modals as $modal ):  

                          ?>

                        <td><button href="#" type="button" class="btn btn-danger "data-bs-toggle="modal" data-bs-target="#modalDialogScrollable" > TODO <?php echo $i;?> </button></td>
                        
                        <!-- Modal Dialog Scrollable -->
                            <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                              <div class="modal-dialog #modalDialogScrollable modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Task Details |<span> Animation </span></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                    <!-- Recent Activity -->
                                      <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title"> EP01 <span>/ SQ01 / SH01</span> </h5>
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
                            
                            <?php   $i++; // Increment the increment variable

                            endforeach; //End the loop ?>

                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/sadness.png" alt=""></a> <a href="#" type="button" class="text-primary fw-bold "data-bs-toggle="modal" data-bs-target="#modalDialogScrollable" > SH02 </a></th>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-success">DONE</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/disgust.png" alt=""></a><a href="#" type="button" class="text-primary fw-bold "data-bs-toggle="modal" data-bs-target="#modalDialogScrollable" > SH03 </a></th>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-success">DONE</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-success">DONE</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/anger.png" alt=""></a><a href="#" type="button" class="text-primary fw-bold "data-bs-toggle="modal" data-bs-target="#modalDialogScrollable" > SH01 </a></th>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-warning">DOING</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-success">DONE</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/fear.png" alt=""></a><a href="#" type="button" class="text-primary fw-bold "data-bs-toggle="modal" data-bs-target="#modalDialogScrollable" > SH01 </a></th>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
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
            <!-- End of SQ1 -->

          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>

  </main><!-- End #main -->

<!-- template footer -->
<?php include '../pipeline/templates/footer.php'; ?>