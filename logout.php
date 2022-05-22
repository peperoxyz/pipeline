<?php 
	session_start();
	session_unset();
	session_destroy();
	?>
			<script language="JavaScript">
            alert('Anda telah Keluar. Silakan masuk kembali.');
            document.location='../pipeline/auth/login.php';
        	</script>
			<?php
	header("location: index.php");
 ?>
