<?php
include 'koneksi.php';

// Mengambil nilai 'id' dari parameter URL
$id = $_GET['id'];

// Menghapus data dari tabel 'jabatan' berdasarkan ID yang diterima dari parameter 'id'
mysqli_query($conn, "DELETE FROM jabatan WHERE id='$id'");

// Mengarahkan pengguna kembali ke halaman 'data_jabatan.php'
header("location:data_jabatan.php");
?>
