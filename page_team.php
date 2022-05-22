<!-- template header2 -->
<?php include '../pipeline/templates/header.php'; ?>

<!-- template sidebar -->
<?php include '../pipeline/templates/sidebar.php'; ?>
  
<main id="main" class="main">

    <div class="pagetitle">
      <h1>TEAM</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Inside Out</li>
          <li class="breadcrumb-item"><a href="dashboard.php">This Project's Team Members</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Inside Out Project's Team Member</h5>
              <!-- <p><code>Add member to the team</code></p> -->

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. Hp</th>
                    <th scope="col">Username</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
              <!-- <th scope="col">Start Date</th> -->
                  </tr>
                </thead>
                <tbody>
                
                  <!-- <?php 
                    include '../pipeline/auth/koneksi.php';
                    $no=1;
                    $query       = "SELECT * FROM tb_user";
                    $data_profile = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
                      while($data  = mysqli_fetch_array($data_profile))
                    {
                      ?>
                  <tr>
                    <td><?=$no++?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><?php echo $data['nohp'];?></td>
                    <td><?php echo $data['username'];?></td>
                    <td><?php echo $data['role'];?></td>
                    <td>
                    <a class="btn btn-primary"  href="editmember.php?=<?php echo $data['nama'];?>">Action</a>
                    </td>
                  </tr>
                  <?php
                    }
                  ?> -->
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
  </main><!-- End #main -->

<?php include '../pipeline/templates/footer.php'; ?>