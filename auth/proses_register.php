<?php
	session_start();
	include 'koneksi.php';

	$userID 	= $_POST['userID'];
	$username 	= $_POST['username'];	
	$nama 		= $_POST['name'];
	$email 		= $_POST['email'];
	$password 	= $_POST['password'];	
	$nohp 		= $_POST['phone'];

	$pass_acak 	= password_hash($password, PASSWORD_DEFAULT);
	$input 		= mysqli_query($koneksi, "INSERT INTO user (userID, name, username, email, phone, password) 
				  VALUES( '', '$nama', '$username', '$email', '$nohp','$pass_acak')") or die(mysqli_error($koneksi));


	if ($input) { 
		?>
			<script language="JavaScript">
            alert('The data has been successfully added, now please login first');
            document.location='login.php';
        	</script>
		<?php
		
	} else {
		?>
			<script language="JavaScript">
            alert('The data is not complete . Please complete the data!');
            document.location='register.php';
        	</script>
	    <?php
		}
		?>

