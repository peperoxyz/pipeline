<?php
include "../pipeline/koneksi.php";
   
  $userID       = $_POST['userID'];  
  $foto         = $_FILES['foto']['name'];
  $ukuran_file  = $_FILES['foto']['size'];
  $tipe_file    = $_FILES['foto']['type'];
  $tmp_file     = $_FILES['foto']['tmp_name'];
  $path         = "image/".$foto;

  if ($tipe_file =="image/jpeg" || $tipe_file =="image/png") {
    if($ukuran_file<=1000000){
      if (move_uploaded_file($tmp_file, $path)) {
        $query  = "UPDATE user set foto ='$foto'where userID = '$userID'";       
        $sql   = mysqli_query($koneksi, $query);
        if ($sql) {
          //header (String)
          ?>
            <script language="JavaScript">
                alert('Photo has been added');
                document.location='../pipeline/profile_1.php';
            </script>
          <?php
        }else{
          ?>
            <script language="JavaScript">
                alert('Photo cannot be upload !');
                document.location='../pipeline/profile_1.php';
            </script>
          <?php
        }
      }//jika gambar gagal di upload
    }//jika ukuran lebih besar dari 1 MB
  }//jika tipe file buka jpe,jpe dan png.
?>