<?php
	session_start();
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$nohp = $_POST['nohp'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	$user_id = $_POST['user_id'];


	$pass_acak = password_hash($password, PASSWORD_DEFAULT);
	$input = mysqli_query($koneksi, "INSERT INTO tb_user (user_id, nama, email, nohp, username, password ) VALUES( '','$nama', '$email','$nohp','$username','$pass_acak')") or die(mysqli_error($koneksi));


	if ($input) 
	{ ?>
			<script language="JavaScript">
            alert('Selamat Data Berhasil Di tambahkan, Sekarang Silahkan Login Terlebih Dahulu');
            document.location='login.php';
        	</script>
		<?php
		// echo "Data berhasil disimpan";
		// header("location: ../transaksi.html");
		// header("location: logindaydream.php");
		
	} else
		{
		?>
			<script language="JavaScript">
            alert('Maaf Data Yang Anda Masukkan Kurang Lengkap, Silahkan Lengkapi Terlebih Dahulu');
            document.location='register.php';
        	</script>
	<?php
		}
?>