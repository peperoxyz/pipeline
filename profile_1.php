<!-- template header -->
<?php include '../pipeline/templates/header.php'; ?>

<?php 
// session_start();
$userID      = $_SESSION['userID'];
$username    = $_SESSION['username'];
$nama        = $_SESSION['name'];
$email       = $_SESSION['email'];
$nohp        = $_SESSION['phone'];
$password    = $_SESSION['password'];
?>
<?php 

    @session_start();
    $username=$_SESSION['username'];

    // include "koneksi.php";
    include '../pipeline/auth/koneksi.php'; 

    if (@$_SESSION['username']) {     
 ?>

<!-- template sidebar -->
<?php include '../pipeline/templates/sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Your Profile Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <?php
              include "../pipeline/auth/koneksi.php";
              $no = 1;
              $userID       = $_SESSION['userID'];
              $query        = "SELECT * FROM user where userID = {$_SESSION['userID']}";
              $data_profile = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
              while($data   = mysqli_fetch_array($data_profile)){
            ?>               
              <img src="../pipeline/assets/img//profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2><?php echo $data['name']; ?></h2>
              <!-- <h3><?php echo $data['role']; ?></h3> -->
              <div class="social-links mt-2">
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">                  
                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $data['name']; ?></div>
                  </div>

                  <!--
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">Louis' Home Corp</div>
                  </div>

                 <div class="row">
                    <div class="col-lg-3 col-md-4 label">Role</div>
                    <div class="col-lg-9 col-md-8"><?php echo $data['role']; ?></div>
                  </div> -->

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $data['phone']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $data['email']; ?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                <?php
                  }
                ?>   

                    <div class="row mb-3">                                
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <form method="POST" action="upload.php">
                        <?php
                           include "../pipeline/auth/koneksi.php";
                           $no = 1;
                           $userID        = $_SESSION['userID'];
                           $query1        = "SELECT * FROM user where userID = {$_SESSION['userID']}";
                           $data_upload   = mysqli_query($koneksi, $query1) or die(mysqli_error($koneksi));
                           while($data    = mysqli_fetch_array($data_upload)){
                        ?>                                                
                        <div class="col-md-8 col-lg-9">
                          <img src="../pipeline/assets/img/profile-img.jpg" alt="Profile">
                          <div class="pt-2">
                            <input type="file" name="photo" class="btn btn-primary btn-sm" title="Upload new profile image">
                            <input type="submit" name="photo" class="btn btn-primary btn-sm" value="Upload">
                          </div>
                        </div>
                      </form>
                      <?php
                        }
                      ?>
                        </div>  

                  <!-- Profile Edit Form -->
                  <form action="proses_update_profile.php" method="POST">
                    <?php
                       include "../pipeline/auth/koneksi.php";
                       $no = 1;
                       $userID       = $_SESSION['userID'];
                       $query         = "SELECT * FROM user where userID = {$_SESSION['userID']}";
                       $data_profile  = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
                       while($data    = mysqli_fetch_array($data_profile)){
                    ?> 

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input class="form-control" name="userID" type="hidden" value="<?php echo $data['userID']; ?>"  required />
                        <input name="name" type="text" class="form-control" id="fullName" value="<?php echo $data['name']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Username</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="username" type="text" class="form-control" id="username" value="<?php echo $data['username']; ?>">
                      </div>
                    </div>                    

                    <!--
                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="company" value="Louis' Home Corp.">
                      </div>
                    </div> -->

                    <!--
                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Role</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="role" type="text" class="form-control" id="Job" value="<?php echo $data['role']; ?>">
                      </div>
                    </div> -->

                    <div class="row mb-3">
                      <label for="nohp" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $data['phone']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $data['email']; ?>">
                      </div>
                    </div>


                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
                  <?php
                    }
                  ?>
                 </div>


                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="proses_update_password.php" method="POST">
                    <?php
                       include "../pipeline/auth/koneksi.php";
                       $no = 1;
                       $userID        = $_SESSION['userID'];
                       $query         = "SELECT * FROM user where userID = {$_SESSION['userID']}";
                       $data_profile  = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
                       while($data    = mysqli_fetch_array($data_profile)){
                    ?>
                    <div class="row mb-3">
                      <!-- <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Old Password</label> -->
                      <div class="col-md-8 col-lg-9">
                        <input class="form-control" name="userID" type="hidden" value="<?php echo $data['userID']; ?>"  required />  
                        <input name="oldPassword" type="hidden" class="form-control" id="oldPassword" value="<?php echo $data['password']; ?>">
                        <div class="invalid-feedback">Please enter your old password!</div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newPassword" type="password" class="form-control" id="newPassword" >
                        <div class="invalid-feedback">Please enter your new password!</div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="confPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="confirmPassword" type="password" class="form-control" id="confirmPassword">
                        <div class="invalid-feedback">Please re-enter your new password!</div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->
                  <?php
                    }
                  ?>
                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include '../pipeline/templates/footer.php'; ?>

<?php 
}else{
        header("location:../dashboard.html");
        
}
?>