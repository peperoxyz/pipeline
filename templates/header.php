<?php 
session_start();
$userID      = $_SESSION['userID'];
$username    = $_SESSION['username'];
$nama        = $_SESSION['name'];
?>
<?php 

    @session_start();
    $username=$_SESSION['username'];

    // include "koneksi.php";
    include '../pipeline/auth/koneksi.php'; 

    if (@$_SESSION['username']) {     
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pipeline Animation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../pipeline/assets/img/favicon.png" rel="icon">
  <link href="../pipeline/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Vendor CSS Files -->
  <link href="../pipeline/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../pipeline/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../pipeline/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../pipeline/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../pipeline/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../pipeline/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../pipeline/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../pipeline/assets/css/style.css" rel="stylesheet">
</head>

<body class>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="#" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" alt="">
      <span class="d-none d-lg-block">Pipeline Animation</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <!-- Coding bagian Search -->
  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div>

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <!-- notification icon lonceng -->
    <li class="nav-item dropdown">
      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">50+</span>
      </a><!-- End Notification Icon -->

      <!-- Dropdown Notification Icon Lonceng -->
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
          You have 4 new notifications
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="notification-item">
          <i class="bi bi-exclamation-circle text-warning"></i>
          <div>
            <h4>Lorem Ipsum</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>30 min. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="notification-item">
          <i class="bi bi-x-circle text-danger"></i>
          <div>
            <h4>Atque rerum nesciunt</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>1 hr. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="notification-item">
          <i class="bi bi-check-circle text-success"></i>
          <div>
            <h4>Sit rerum fuga</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>2 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="notification-item">
          <i class="bi bi-info-circle text-primary"></i>
          <div>
            <h4>Dicta reprehenderit</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>4 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="dropdown-footer">
          <a href="#">Show all notifications</a>
        </li>
      </ul><!-- End Notification icon lonceng Dropdown -->

    </li><!-- end notification icon lonceng -->




    <li class="nav-item dropdown">

      <!-- pesan Icon noticication -->
      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">99+</span>
      </a><!-- End Messages Icon -->

      <!-- Dropdown Notification Icon pesan -->
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
        <li class="dropdown-header">
          You have 3 new messages
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Maria Hudson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>4 hrs. ago</p>
            </div>
          </a>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Anna Nelson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>6 hrs. ago</p>
            </div>
          </a>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
            <div>
              <h4>David Muldon</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>8 hrs. ago</p>
            </div>
          </a>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="dropdown-footer">
          <a href="#">Show all messages</a>
        </li>
      </ul><!-- Dropdown Notification Icon Lonceng -->

    </li><!-- End Notification Icon Lonceng -->

    



    <!-- Dropdown Icon profile -->
    <li class="nav-item dropdown pe-3">
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
                    <?php
                       include "../pipeline/auth/koneksi.php";
                       $no = 1;
                       $userID        = $_SESSION['userID'];
                       $query         = "SELECT * FROM user where userID = {$_SESSION['userID']}";
                       $data_profile  = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
                       while($data    = mysqli_fetch_array($data_profile)){
                    ?>        
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $data['name']; ?></span>
      </a><!-- End Profile  Icon -->

      <!-- Dropdown Notification Icon profile -->
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo $nama; ?></h6>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="profile_1.php">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>
      </ul><!-- End Profile Dropdown Items -->

    </li><!-- End Profile Nav -->
    <?php
  }
  ?>

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<?php 
}else{
        header("location:../dashboard.html");
        
}
?>