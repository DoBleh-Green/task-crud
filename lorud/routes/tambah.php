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
    <title>Tambah Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../image/ha_rbg.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">PT.Mosquito
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="data_karyawan.php">Data Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_jabatan.php">Data Jabatan</a>
                    </li>
                </ul>
                <a class="nav-link" href="login/logout.php" class="form-inline my-2 my-lg-0">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Tambah Data Karyawan</h2>
        <a href="data_karyawan.php" class="btn btn-primary">Lihat Data</a>
        <br><br>
        <form method="POST" action="proseskaryawan.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="nama">Nama Karyawan</label>
                <input type="text" class="form-control" name="nama" id="validationCustom01" required>
                <div class="invalid-feedback">
                    Masukan Nama
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="validationCustom01">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" id="validationCustom01" required>
                <div class="invalid-feedback">
                    Masukan Tanggal lahir
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="validationCustom01">Jenis Kelamin</label>
                <select class="custom-select" name="jenis_kelamin" id="validationCustom01" required>
                    <option selected disabled value="">Pilih jenis kelamin...</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                <div class="invalid-feedback">
                    Pilih Jenis Kelamin
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="validationCustom01">Jabatan</label>
                <select class="custom-select" name="jabatan" id="validationCustom01" required>
                    <option selected disabled value="">Pilih Jabatan...</option>
                    <?php
                    include("koneksi.php");
                    $sql = mysqli_query($conn, "SELECT * FROM jabatan");
                    while ($jb = mysqli_fetch_array($sql)) {
                        ?>
                        <option value="<?php echo $jb['jabatan'] ?>"><?php echo $jb['jabatan']; ?></option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">
                    Pilih Jabatan
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="validationCustom01">Alamat</label>
                <textarea class="form-control" name="alamat" id="validationCustom01" required></textarea>
                <div class="invalid-feedback">
                    Masukan Alamat
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<script src="../js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
