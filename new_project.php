<!-- Template Header -->
<?php include '../pipeline/templates/header.php'; ?>

<!-- Template Sidebar -->
<?php include '../pipeline/templates/sidebar.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Project</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Add New Project</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

        <div class="card ">
            <div class="card-body">
              <!-- <h5 class="card-title"></h5> -->

              <!-- Multi Columns Form -->
              <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputName5" class="form-label mt-3">Give Your Project A Name</label>
                  <input type="text" class="form-control" id="inputName5">
                </div>
                <div class="col-md-4">
                  <label for="inputEmail5" class="form-label">FPS</label>
                  <input type="email" class="form-control" id="inputEmail5">
                </div>
                <div class="col-md-4">
                  <label for="inputRatio" class="form-label">Ratio</label>
                  <select id="inputRatio" class="form-select">
                    <option selected>16 : 9</option>
                    <option>16 : 10</option>
                    <option>3 : 4</option>
                    <option>5  : 6</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="inputResolution" class="form-label">Resolution</label>
                  <select id="inputResolution" class="form-select">
                    <option selected>1920 x 1080</option>
                    <option>1680 x 1050</option>
                    <option>1600 x 900</option>
                    <option>1366 x 768</option>
                    <option>1280 x 1024</option>
                    <option>1280 x 720</option>
                  </select>
                  </div>
                <div class="col-6">
                  <label for="inputStart" class="form-label">Start</label>
                  <input type="text" class="form-control" id="inputStart">
                </div>
                <div class="col-6">
                  <label for="inputEnd" class="form-label">Ended</label>
                  <input type="text" class="form-control" id="inputEnd">
                </div>
                <!-- <div class="col-md-4">
                  <label for="inputState" class="form-label">Select Asset Task Type</label>
                  <select id="inputState" class="form-select">
                    <option selected>CONCEPT</option>
                    <option>MODELING</option>
                    <option>RIGGING</option>
                    <option>SHADING</option>
                  </select>
                  </div> -->

                  <!-- <div class="col-md-4">
                  <label for="inputState" class="form-label">Select Shot Task Type</label>
                  <select id="inputState" class="form-select">
                    <option selected>ANIMATION</option>
                    <option>COMPOSITING</option>
                    <option>LAYOUT</option>
                    <option>RENDER</option>
                  </select>
                  </div> -->

                <!-- <div class="col-md-4">
                  <label for="inputState" class="form-label">Status Task Status</label>
                  <select id="inputState" class="form-select">
                    <option selected>TODO</option>
                    <option>DOING</option>
                    <option>DONE</option>
                  </select>
                </div> -->
                

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>
        </main>

<!-- template footer --> 
<?php include '../pipeline/templates/footer.php'; ?>