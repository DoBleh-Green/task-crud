<?php
session_start();
if ($_SESSION['status']!="login") {
    header("Location:../login/index.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../image/ha_rbg.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">PT.Mosquito</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        <h2>Tambah Data Karyawan</h2>
        <a href="data_karyawan.php" class="btn btn-primary">Lihat Data</a>
        <br><br>
        <form method="POST" action="simpan.php" class="needs-validation" novalidate>
            <?php 
            include("koneksi.php");
            $id = $_GET["id"];
            $sql = mysqli_query($conn, "SELECT * FROM karyawan WHERE id='$id'");
            while ($a = mysqli_fetch_array($sql)) {
            ?>
            <div class="form-group">
                <input type="text" name="id" value="<?php echo $a['id']?>" hidden>
                <label>Nama Karyawan</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $a['nama']; ?>" >
            </div>
            <br>
            <div class="form-group">
                <label>Tanggal lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $a['tgl_lahir']; ?>" >
            </div>
            <br>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <?php $jk = $a['jenis_kelamin']; ?>
                <select class="custom-select" name="jenis_kelamin">
                    <option value="laki-laki" <?php echo $jk == 'laki-laki' ? 'selected="selected"' : '' ?>>laki-laki</option>
                    <option value="perempuan" <?php echo $jk == 'perempuan' ? 'selected="selected"' : '' ?>>perempuan</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label>alamat</label>
                <textarea class="form-control" type="text" name="alamat"><?php echo $a['alamat']; ?></textarea>
            </div>
            <br><br>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
    
    <script src="../js/script.js"></script>
</body>
</html>