<?php
// Membuat koneksi ke database MySQL
$conn = mysqli_connect("localhost", "root", "", "users");

// Periksa apakah koneksi berhasil atau gagal
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
