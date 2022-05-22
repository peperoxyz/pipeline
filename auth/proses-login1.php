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
        ?>
        <script language="JavaScript">
        alert('Selamat Datang Di Aplikasi Animation Pipeline');
        document.location='../index.html';
        </script>
        <?php
    }
} else {
?>
    <script language="JavaScript">
        alert('Maaf, Akun Anda tidak terdeteksi di dalam data kami, silahkan coba lagi');
        document.location='../pages-login.html';
        </script>
<?php
}
?>

<?php

session_start();
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];


$data = mysqli_query($koneksi, "SELECT * FROM tb_user where username='$username'");
if (password_verify($password, $row['password'])) {
        
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['nohp'] = $data['nohp'];
        $_SESSION['role'] = $data['role'];
        ?>
        <script language="JavaScript">
        alert('Selamat Datang Di Aplikasi Animation Pipeline');
        document.location='../index.html'; // Di bikin file .php yang baru kemudian kita ubah menjadi sebuah config tapi config nya ngide sendiri gitu loh 

        </script>
        <?php
} else {
?>
    <script language="JavaScript">
        alert('Maaf, Akun Anda tidak terdeteksi di dalam data kami, silahkan coba lagi');
        document.location='../pages-login.html';
        </script>
<?php
}
?>

echo "<script>alert('Data berhasil Dihapus.');window.location=' ../pages/akun.php';</script>";