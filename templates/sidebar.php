<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
  
    
  <?php 
    include '../pipeline/auth/koneksi.php';
    $query = mysqli_query($koneksi, "SELECT user.userID, user.username, role.roleID, role.level FROM 
             user, role WHERE user.userID = role.roleID");
    $data  = mysqli_fetch_array($query);

    if(isset($_SESSION['role']))
    {
        #jika rolenya Developer, Manager Project, Supervisor, Artist, Guest
        if($_SESSION['role'] == "1")
        {
            ?>
            <li class="nav-heading">Global</li>
             <li class="nav-item">
             <a class="nav-link collapsed" href="dashboard.php"> <!-- Nanti ini di bedakan menurut rolenya -->
             <i class="bi bi-grid"></i>
            <span>Dashboard</span>
             </a>
            </li>
            <!-- End Dashboard Nav -->
            <?php
        }else if($_SESSION['role'] == "4")
        {
            ?>
            <li class="nav-heading">Global</li>
             <li class="nav-item">
             <a class="nav-link collapsed" href="dashboard.php"> <!-- Nanti ini di bedakan menurut rolenya -->
             <i class="bi bi-grid"></i>
            <span>Dashboard</span>
             </a>
            </li>
            <!-- End Dashboard Nav -->
            <?php
        }else if($_SESSION['role'] == "3")
        {
            ?>
            <li class="nav-heading">Global</li>
            <li class="nav-item">
            <a class="nav-link collapsed" href="dashboard.php"> <!-- Nanti ini di bedakan menurut rolenya -->
            <i class="bi bi-grid"></i>
           <span>Dashboard</span>
            </a>
           </li>
           <!-- End Dashboard Nav -->
           <?php
        }else if($_SESSION['role'] == "2")
        {
            ?>
            <li class="nav-heading">Global</li>
            <li class="nav-item">
            <a class="nav-link collapsed" href="dashboard.php"> <!-- Nanti ini di bedakan menurut rolenya -->
            <i class="bi bi-grid"></i>
           <span>Dashboard</span>
            </a>
           </li>
           <!-- End Dashboard Nav -->
           <?php
        }
    }
?>
  <li class="nav-heading">Studio</li>
<?php 
    if(isset($_SESSION['role']))
    {
        #jika rolenya Developer, Manager Project, Supervisor, Artist, Guest
        if($_SESSION['role'] == "1")
        {
            ?>
      <li class="nav-item">
            <a class="nav-link collapsed" href="page_project1.php">
            <i class="bi bi-brush"></i>
            <span>Project</span>
            </a>
            </li>
            <!-- End Studio Nav -->
            <?php
        }else if($_SESSION['role'] == "5")
        {
            
            ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="page_project1.php">
            <i class="bi bi-brush"></i>
            <span>Project</span>
            </a>
            </li>
            <!-- End Studio Nav -->
            <?php
        }else if($_SESSION['role'] == "4")
        {
            ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="page_project1.php">
            <i class="bi bi-brush"></i>
            <span>Project</span>
            </a>
            </li>
            <!-- End Studio Nav -->
            <?php
        }else if($_SESSION['role'] == "3")
        {
            ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="page_project1.php">
            <i class="bi bi-brush"></i>
            <span>Project</span>
            </a>
           </li>
           <!-- End Studio Nav -->
           <?php
        }else if($_SESSION['role'] == "2")
        {
            ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="page_project1.php">
            <i class="bi bi-brush"></i>
            <span>Project</span>
            </a>
            </li>
           <!-- End Studio Nav -->
           <?php
        }
    }
?>
<?php 
    if(isset($_SESSION['role']))
    {
        #jika rolenya Developer, Manager Project, Supervisor, Artist, Guest
        if($_SESSION['role'] == "1")
        {
            ?>
              <a class="nav-link collapsed" href="page_people.php">
              <i class="bi bi-people-fill"></i>
              <span>People</span>
              </a>
              </li><!-- End Project Page Nav -->
            <?php
        }else if($_SESSION['role'] == "4")
        {
            ?>
              <a class="nav-link collapsed" href="page_people.php">
              <i class="bi bi-people-fill"></i>
              <span>People</span>
              </a>
              </li><!-- End Project Page Nav -->
           <?php
        }else if($_SESSION['role'] == "2")
        {
            ?>
              <a class="nav-link collapsed" href="page_people.php">
              <i class="bi bi-people-fill"></i>
              <span>People</span>
              </a>
              </li><!-- End Project Page Nav -->
           <?php
        }else if($_SESSION['role'] == "5")
        {
            ?>
              <a class="nav-link collapsed" href="page_people.php">
              <i class="bi bi-people-fill"></i>
              <span>People</span>
              </a>
              </li><!-- End Project Page Nav -->
           <?php
        }
    }
?>
    <li class="nav-heading">User</li>
<?php 
    if(isset($_SESSION['role']))
    {
        #jika rolenya Developer, Manager Project, Supervisor, Artist, Guest
        if($_SESSION['role'] == "1")
        {
            ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="profile_1.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
            </a>
            </li><!-- End Profile Page Nav -->
            <?php
        }else if($_SESSION['role'] == "5")
        {
            
            ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="profile_1.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
            </a>
            </li><!-- End Profile Page Nav -->
            <?php
        }else if($_SESSION['role'] == "4")
        {
            ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="profile_1.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
            </a>
            </li><!-- End Profile Page Nav -->
            <?php
        }else if($_SESSION['role'] == "3")
        {
            ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="profile_1.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
            </a>
            </li><!-- End Profile Page Nav -->
           <?php
        }else if($_SESSION['role'] == "2")
        {
            ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="profile_1.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
            </a>
            </li><!-- End Profile Page Nav -->
           <?php
        }
    }
?>    
  </ul>
  </aside>
  <!-- End Sidebar-->