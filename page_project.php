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
              <button type="button" class="btn btn-primary mb-2 " data-bs-toggle="modal" data-bs-target="#verticalycentered" ><i class="bi bi-plus-circle"> </i>Add New Project</button>
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
                      <button type="button" class="btn btn-primary">Confirm</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Vertically centered Modal-->
    </div>

    <!-- End add new project -->
    
    <!-- Start Project Card -->
    <div class="tab-pane fade show active profile-overview" id="profile-overview">
      <div class="row">
      <div class="card col-lg-5 me-4">
        <div class="card-body">
        <a href="../pipeline/dashboard.php"><h5 class="card-title">Inside Out</h5></a> 
          <h6 class="card-subtitle mb-2 text-muted">Movie</h6>
          <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem quasi asperiores ipsam reprehenderit nisi? Quod nobis minima aliquam quam!</p>
          <a type="button" href="./dashboard.php" class="btn btn-success "><i class="bi bi-arrow-up-right-square"> </i>Details</a>
          
        </div>
      </div>
      
      <div class="card col-lg-5">
        <div class="card-body">
        <a href="../pipeline/dashboard.php"><h5 class="card-title">Family Guy</h5></a> 
          <h6 class="card-subtitle mb-2 text-muted">Tv Series</h6>
          <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem quasi asperiores ipsam reprehenderit nisi? Quod nobis minima aliquam quam!</p>
          <a type="button" href="#" class="btn btn-success "><i class="bi bi-arrow-up-right-square"> </i>Details</a>
          
        </div>
      </div>
      </div>
    </div>
    <!-- End Project Card -->
    
    <!-- Start Project Card -->
    <div class="tab-pane fade show active profile-overview" id="profile-overview">
      <div class="row">
      <div class="card col-lg-5 me-4">
        <div class="card-body">
        <a href="../pipeline/dashboard.php"><h5 class="card-title">American Dad</h5></a> 
          <h6 class="card-subtitle mb-2 text-muted">Tv Series</h6>
          <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem quasi asperiores ipsam reprehenderit nisi? Quod nobis minima aliquam quam!</p>
          <a type="button" href="#" class="btn btn-success "><i class="bi bi-arrow-up-right-square"> </i>Details</a>
          
        </div>
      </div>
      
      <div class="card col-lg-5">
        <div class="card-body">
        <a href="../pipeline/dashboard.php"><h5 class="card-title">The Simpsons</h5></a> 
          <h6 class="card-subtitle mb-2 text-muted">Tv Series</h6>
          <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem quasi asperiores ipsam reprehenderit nisi? Quod nobis minima aliquam quam!</p>
          <a type="button" href="#" class="btn btn-success "><i class="bi bi-arrow-up-right-square"> </i>Details</a>
          
        </div>
      </div>
      </div>
    </div>
    <!-- End Project Card -->
    </section>

  </main><!-- End #main -->
  <!-- template footer -->
<?php include '../pipeline/templates/footer.php'; ?>