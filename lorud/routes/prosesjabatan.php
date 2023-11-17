<?php
include('koneksi.php');

// Mengambil data yang dikirimkan melalui metode POST
$jabatan = $_POST['jabatan'];

// Menjalankan perintah SQL untuk menyisipkan data ke dalam tabel 'jabatan'
$query = mysqli_query($conn, "INSERT INTO jabatan (id, jabatan) VALUES (NULL, '$jabatan')");

// Memeriksa apakah operasi penambahan data berhasil
if ($query) {
    header("location:data_jabatan.php"); // Mengarahkan ke halaman 'data_jabatan.php' jika berhasil
} else {
    echo mysqli_error($conn); // Menampilkan pesan kesalahan jika terjadi kesalahan saat menjalankan perintah SQL
}
?>
