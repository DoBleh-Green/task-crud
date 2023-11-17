<?php
include 'koneksi.php';

// Mengambil data yang dikirimkan melalui metode POST
$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Menjalankan perintah SQL untuk mengubah data dalam tabel 'karyawan'
mysqli_query($conn, "UPDATE karyawan SET nama = '$nama', tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat' WHERE id = '$id'");

// Mengarahkan pengguna kembali ke halaman 'data_karyawan.php'
header("location:data_karyawan.php");
?>
