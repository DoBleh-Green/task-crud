<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("Location:../login/index.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi data karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../image/ha_rbg.png" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-top">PT.Mosquito</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_karyawan.php">Data Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_jabatan.php">Data Jabatan</a>
                    </li>
                </ul>
                <a class="nav-link" href="../login/logout.php" class="form-inline my-2 my-lg-0">Logout</a>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <h2>Tambah data Jabatan</h2>
        <a href="data_jabatan.php" class="btn btn-primary">Lihat Data</a>
        <br><br>
        <?php
        include("koneksi.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil data yang dikirim melalui form
            $id = $_POST['id'];
            $jabatan = $_POST['jabatan'];
            
            // Memeriksa apakah 'id' sudah ada dalam tabel 'jabatan'
            $check_query = "SELECT id FROM jabatan WHERE id = '$id'";
            $check_result = mysqli_query($conn, $check_query);
            
            if (mysqli_num_rows($check_result) > 0) {
                // 'id' sudah ada, lanjutkan dengan pernyataan UPDATE
                $update_query = "UPDATE jabatan SET jabatan = '$jabatan' WHERE id = '$id'";
                if (mysqli_query($conn, $update_query)) {
                    // Data berhasil diupdate
                    header("Location: data_jabatan.php");
                } else {
                    // Terjadi kesalahan saat UPDATE
                    echo '<div class="alert alert-danger" role="alert">Terjadi kesalahan saat mengupdate data.</div>';
                }
            } else {
                // 'id' tidak ditemukan, tampilkan pesan error atau lakukan tindakan yang sesuai
                echo '<div class="alert alert-danger" role="alert">ID tidak ditemukan dalam database.</div>';
            }
            
        }
        ?>
        <form method="POST" action="">
            <?php
            $id = $_GET['id'];
            $sql = mysqli_query($conn, "SELECT * FROM jabatan WHERE id = '$id'");
            while ($b = mysqli_fetch_array($sql)) {
                ?>
                <div class="form-group">
                    <input type="text" name="id" value="<?php echo $b['id'] ?>" hidden>
                    <label>Nama Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="<?php echo $b['jabatan']; ?> ">
                </div>
                <br>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>