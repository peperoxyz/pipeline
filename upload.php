<?php
// Load file koneksi.php
include "../pipeline/auth/koneksi.php";

// Ambil Data yang Dikirim dari Form
$photo = $_FILES['photo']['name'];
$tmp   = $_FILES['photo']['tmp_name'];


// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;

// Set path folder tempat menyimpan fotonya
$path = "../pipeline/img/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $sql = $pdo->prepare("INSERT INTO user (pictures) VALUES ('$fotobaru')");
  $sql -> bindParam('$foto', $fotobaru);
  $sql -> execute(); // Eksekusi query insert
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: profile_1.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='profile_1.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='profile_1.php'>Kembali Ke Form</a>";
}

?>