<?php
include 'koneksi.php';

// Mengambil nilai 'id' dari parameter URL
$id = $_GET['id'];

// Menghapus data dari tabel 'karyawan' berdasarkan ID yang diterima dari parameter 'id'
mysqli_query($conn, "DELETE FROM karyawan WHERE id='$id'");

// Mengarahkan pengguna kembali ke halaman 'data_karyawan.php'
header("location:data_karyawan.php");
?>
