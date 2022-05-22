<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
  
    
  <?php 
    include '../pipeline/auth/koneksi.php';

    if(isset($_SESSION['role']))
    {
        #jika rolenya Developer, Manager Project, Supervisor, Artist, Guest
        if($_SESSION['role'] == "Developer")
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
        }else if($_SESSION['role'] == "Manager Project")
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
        }else if($_SESSION['role'] == "Artist")
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
        }else if($_SESSION['role'] == "Supervisor")
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
        if($_SESSION['role'] == "Developer")
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
        }else if($_SESSION['role'] == "Guest")
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
        }else if($_SESSION['role'] == "Manager Project")
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
        }else if($_SESSION['role'] == "Artist")
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
        }else if($_SESSION['role'] == "Supervisor")
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
        if($_SESSION['role'] == "Developer")
        {
            ?>
              <a class="nav-link collapsed" href="page_people.php">
              <i class="bi bi-people-fill"></i>
              <span>People</span>
              </a>
              </li><!-- End Project Page Nav -->
            <?php
        }else if($_SESSION['role'] == "Manager Project")
        {
            ?>
              <a class="nav-link collapsed" href="page_people.php">
              <i class="bi bi-people-fill"></i>
              <span>People</span>
              </a>
              </li><!-- End Project Page Nav -->
           <?php
        }else if($_SESSION['role'] == "Supervisor")
        {
            ?>
              <a class="nav-link collapsed" href="page_people.php">
              <i class="bi bi-people-fill"></i>
              <span>People</span>
              </a>
              </li><!-- End Project Page Nav -->
           <?php
        }else if($_SESSION['role'] == "Guest")
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
        if($_SESSION['role'] == "Developer")
        {
            ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="profile_1.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
            </a>
            </li><!-- End Profile Page Nav -->
            <?php
        }else if($_SESSION['role'] == "Guest")
        {
            
            ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="profile_1.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
            </a>
            </li><!-- End Profile Page Nav -->
            <?php
        }else if($_SESSION['role'] == "Manager Project")
        {
            ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="profile_1.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
            </a>
            </li><!-- End Profile Page Nav -->
            <?php
        }else if($_SESSION['role'] == "Artist")
        {
            ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="profile_1.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
            </a>
            </li><!-- End Profile Page Nav -->
           <?php
        }else if($_SESSION['role'] == "Supervisor")
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