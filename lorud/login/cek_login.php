<?php
// Memulai session untuk mengelola variabel sesi
session_start();

// Mengimpor file koneksi.php yang digunakan untuk menghubungkan ke database
include '../routes/koneksi.php';

// Mengambil data yang dikirim melalui metode POST dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];

// Melakukan query ke database untuk mencari data pengguna dengan username dan password yang sesuai
$query = "SELECT * FROM login where username='$username' and password='$password'";
$result = mysqli_query($conn, $query); // Menggunakan variabel $conn sebagai koneksi

// Memeriksa apakah data pengguna ditemukan
if ($result) {
    $cek = mysqli_num_rows($result);

    if ($cek > 0) {
        // Jika data ditemukan, maka sesi login akan diset
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
    
        // Redirect ke halaman beranda atau halaman lain yang sesuai
        header("Location:../index.php");
    } else {
        // Jika data tidak ditemukan, maka akan di-redirect kembali ke halaman login dengan pesan "gagal"
        header("Location:../index.php?pesan=gagal");
    }
} else {
    // Terdapat kesalahan dalam query, bisa menambahkan penanganan kesalahan di sini
    echo "Kesalahan dalam menjalankan query: " . mysqli_error($conn);
}

// Tutup koneksi database setelah selesai menggunakan
mysqli_close($conn);
?>
