<?php
include("koneksi.php");

// Mengambil data yang dikirimkan melalui metode POST
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];

// Menjalankan perintah SQL untuk menyisipkan data ke dalam tabel 'karyawan'
$query = mysqli_query($conn, "INSERT INTO karyawan (id, nama, tgl_lahir, jenis_kelamin, jabatan, alamat) VALUES (NULL, '$nama', '$tgl_lahir', '$jenis_kelamin', '$jabatan', '$alamat')");

// Memeriksa apakah operasi penambahan data berhasil
if ($query) {
    header("location:data_karyawan.php"); // Mengarahkan ke halaman 'data_karyawan.php' jika berhasil
} else {
    echo mysqli_error($conn); // Menampilkan pesan kesalahan jika terjadi kesalahan saat menjalankan perintah SQL
}
?>