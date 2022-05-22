<?php
// include database connection file
include 'koneksi.php';
 $nama=     $_POST['nama'];
 $email=    $_POST['email'];
 $nohp=     $_POST['nohp'];
 $username= $_POST['username'];
 $role=     $_POST['role'];
 $result = mysqli_query($koneksi, "UPDATE tb_user SET
email='$email',nohp='$nohp',username='$username',role='$role' WHERE user_id='$user_id'");
$result = mysqli_query($koneksi, $query);
if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                     " - ".mysqli_error($koneksi));
} else {
//tampil alert dan akan redirect ke halaman index.php
//silahkan ganti index.php sesuai halaman yang akan dituju

  echo "<script>alert('Data berhasil diubah.');window.location=' ../pipeline/member.php';</script>";
  
}

?>      