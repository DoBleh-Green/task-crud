<?php
include 'koneksi.php';

// Mengambil data yang dikirimkan melalui metode POST
$id = $_POST['id'];
$jabatan = $_POST['jabatan'];

// Menjalankan perintah SQL untuk mengubah data dalam tabel 'jabatan'
mysqli_query($conn, "UPDATE jabatan SET jaabatan = '$jabatan' WHERE id = '$id'");

// Mengarahkan pengguna kembali ke halaman 'data_jabatan.php'
header("location:data_jabatan.php");
?>
