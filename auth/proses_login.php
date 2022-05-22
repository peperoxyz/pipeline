<?php

session_start();
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];


$data = mysqli_query($koneksi, "SELECT * FROM tb_user where username='$username'");
$row=mysqli_fetch_array($data);
if (password_verify($password, $row['password'])) {
    if (mysqli_num_rows($data)>0) {
        // echo "Login Berhasil";
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['nohp'] = $row['nohp'];
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['role'] = $row['role'];
        
        header('location: ../dashboard.php');
    }
} else {
?>
    <script language="JavaScript">
        alert('Maaf, Akun Anda tidak terdeteksi di dalam data kami, silahkan coba lagi');
        document.location='../eror-pages.php';
        </script>
<?php
}
?>