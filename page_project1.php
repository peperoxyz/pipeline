<!-- template header -->
<?php include '../pipeline/templates/header.php'; ?>

<!-- template sidebar -->
<?php include '../pipeline/templates/sidebar.php'; ?>

<main id="main" class="main">
  <section>

    <div class="pagetitle">
      <h1>Project</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Your Running Projects</li>
        </nav>

          <!-- Add new project -->
            <!-- Vertically centered Modal -->
              
              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add a project </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- Start form -->
                      <form class="row g-3">
                          <div class="col-12">
                            <label for="projectName" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="projectName" />
                          </div>
                          <div class="col-4">
                            <select id="projectType" class="form-select">
                              <option selected>Tv Show</option>
                              <option>Movie</option>
                            </select>
                          </div>
                      <!-- End new project Form -->
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <a type="button" href="./page_project.php" class="btn btn-primary">Confirm</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Vertically centered Modal-->
    </div>

    <!-- End add new project -->
    <main>
    <div class="container">

      <section class="section error-404 d-flex flex-column align-items-center justify-content-center">
        <h2>You don't have any running project. Try to make a new one!</h2>
        <button type="button" class="btn btn-primary mb-2 " data-bs-toggle="modal" data-bs-target="#verticalycentered" ><i class="bi bi-plus-circle"> </i>Add New Project</button>
        <img src="assets/img/not-found.svg" class="img-fluid py-5" alt="Page Not Found">
        
      </section>

    </div>
  </main><!-- End #main -->
   
    <!-- End Project Card -->
    </section>

  </main><!-- End #main -->
  <!-- template footer -->
<?php include '../pipeline/templates/footer.php'; ?>