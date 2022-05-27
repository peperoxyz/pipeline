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
            <div class="col-lg-3 col-md-4">
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
            <div class="col-lg-3 col-md-4">
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
            <div class="col-lg-3 col-md-4 col-sm-4">
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
          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>
  </main>
  <!-- End #main -->

<!-- template footer -->
<?php include '../pipeline/templates/footer.php'; ?>