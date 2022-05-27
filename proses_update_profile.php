<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include "../pipeline/auth/koneksi.php";
  // membuat variabel untuk menampung data dari form 
  $userID   = $_POST['userID']; 
  $username = $_POST['username']; 
  $nama     = $_POST['name'];
  $email    = $_POST['email'];
  $nohp     = $_POST['phone'];

      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE user set name='$nama', email='$email' , username='$username', phone='$nohp'
                where userID = $userID";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data changed successfully.');window.location='profile_1.php';</script>";
      }
?>      
