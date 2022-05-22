<!-- template header -->
<?php include '../pipeline/templates/header.php'; ?>

<!-- template sidebar -->
<?php include '../pipeline/templates/sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <button type="button" class="btn btn-primary float-end"><i class="bi bi-plus-circle "> </i>Add Shot</button>
      <h1>TASK</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Inside Out</a></li>
          <li class="breadcrumb-item active">Your Running TASK</li>
        </ol>
        <!-- <button type="button" class="btn btn-primary"><i class="bi bi-plus-circle"> </i> Add Task</button> -->
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col">
          
            </div><!-- End Revenue Card -->
            <!-- Tugas User -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <div class="card-body pb-0"> 
                  <h5 class="card-title">Your Tasks | SHOTS</h5> 
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
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/joy.png" alt=""></a></th>
                        <td class="text-primary fw-bold">
                        <a href="#" type="button" class="text-primary fw-bold "data-bs-toggle="modal" data-bs-target="#modalDialogScrollable" > EP01 </a></td>
                          
                        </td>
                        <td>
                        <button href="#" type="button" class="btn btn-danger "data-bs-toggle="modal" data-bs-target="#modalDialogScrollable" > TODO </button>  
                        <!-- <button type="button" class="btn btn-danger" data-bs-toggle=" modal" data-bs-target="#modalDialogScrollable ">TODO</button> -->
                      </td>
                        
                        <!-- Modal Dialog Scrollable -->
                            <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Animation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                    <!-- Recent Activity -->
                                      <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title"> JOY <span>| CHARACTER</span></h5>
                                              <section class="section">
                                                <div class="row">
                                                  <div class="col-lg-6">

                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h6 class="mt-4">Joy is the protagonist of Inside Out. She is the yellow Emotion and the main Emotion out of the five that live inside the mind of Riley Andersen with the others being Fear, Anger, Disgust and Sadness. She appears to be happy all the time and full of energy.</h6>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-6">

                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h6 class="mt-4">
                                                        </h6>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </section>

                                            <div class="card">
                                              <div class="card-body">
                                                <h5 class="card-title">Latest Update</h5>
                                                  <div class="activity">
                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">March 19 2022</div>
                                                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                                      <div class="activity-content">
                                                        Dea has changed this task from <a href="#" class="fw-bold text-dark">TODO</a> to <a href="#" class="fw-bold text-dark">DOING</a>
                                                      </div>
                                                    </div><!-- End activity item-->

                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">March 18 2022 </div>
                                                      <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                                      <div class="activity-content">
                                                        Voluptatem blanditiis blanditiis eveniet
                                                      </div>
                                                    </div><!-- End activity item-->

                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">March 15 2022</div>
                                                      <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                                      <div class="activity-content">
                                                        Voluptates corrupti molestias voluptatem
                                                      </div>
                                                    </div><!-- End activity item-->

                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">March 13 2022</div>
                                                      <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                                      <div class="activity-content">
                                                        Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                                                      </div>
                                                    </div><!-- End activity item-->

                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">March 10 2022</div>
                                                      <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                                      <div class="activity-content">
                                                        Est sit eum reiciendis exercitationem
                                                      </div>
                                                    </div><!-- End activity item-->

                                                    <div class="activity-item d-flex">
                                                      <div class="activite-label">March 7 2022</div>
                                                      <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                                      <div class="activity-content">
                                                        Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                                      </div>
                                                    </div><!-- End activity item-->
                                                  </div>
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

                        <td><button type="button" class="btn btn-success">DONE</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/sadness.png" alt=""></a></th>
                        <td class="text-primary fw-bold">EP02</td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-success">DONE</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/disgust.png" alt=""></a></th>
                        <td class="text-primary fw-bold">EP03</td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-success">DONE</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-success">DONE</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/anger.png" alt=""></a></th>
                        <td class="text-primary fw-bold">EP04</td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-warning">DOING</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                        <td><button type="button" class="btn btn-success">DONE</button></td>
                        <td><button type="button" class="btn btn-danger">TODO</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../pipeline/assets/img/fear.png" alt=""></a></th>
                        <td class="text-primary fw-bold">EP05</td>
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
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>

  </main><!-- End #main -->

<!-- template footer -->
<?php include '../pipeline/templates/footer.php'; ?>