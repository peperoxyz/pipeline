<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once '../pipeline/auth/koneksi.php';
  // membuat variabel untuk menampung data dari form 
  $userID       = $_POST['userID']; 
  $oldPassword  = $_POST['oldPassword']; 
  $newPassword  = $_POST['newPassword']; 
  $confirmPassword = $_POST['confirmPassword'];
  $pass_acak       = password_hash($newPassword, PASSWORD_DEFAULT);


      // periska query apakah ada error
      if($newPassword == $confirmPassword){
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = $koneksi->query("SELECT * FROM user where userID = '$userID' && password = '$oldPassword'");
      $valid  = $query->num_rows;
 
          if($valid > 0){
              $koneksi->query("UPDATE user SET password = '$pass_acak' WHERE userID = '$userID'") 
                    or die($koneksi->error());
              echo "<script>alert('Password updated')</script>";
              echo "<script>window.location = 'profile_1.php'</script>";
          }else{
            echo "<script>alert('Password does not match to old password')</script>";
            echo "<script>window.location = 'profile_1.php'</script>";
          }

      }else{
        echo "<script>alert('Password does not match')</script>";
        echo "<script>window.location = 'profile_1.php'</script>";
      }            

?>