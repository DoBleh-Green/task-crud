<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("Location: ../login/index.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../image/ha_rbg.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top"> PT.Mosquito
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_karyawan.php">Data Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_jabatan.php">Data Jabatan</a>
                    </li>
                </ul>
                <a class="nav-link" href="../login/logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h2>Tambah Data Karyawan</h2>
        <a href="tambah.php" class="btn btn-primary">+ Tambah Data</a>
        <br><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("koneksi.php");
                $no = 1;
                $sql = mysqli_query($conn,"SELECT * FROM karyawan");
                while($d = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['tgl_lahir']; ?></td>
                        <td><?php echo $d['jenis_kelamin']; ?></td>
                        <td><?php echo $d['jabatan']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-primary">Edit</a> |
                            <a href="delete.php?id=<?php echo $d['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
        <br><br>
        <a href="cetak.php" target="_blank" class="btn btn-info text-white">Cetak</a>
    </div>

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-pzjwU5q03dA5Jg5whQ5Y06bN9GFb5qdA2JCeFIfJw5SOBt1aP5EdBd/KtD2D6SbYB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+auP6Gm5BNU0pYBtZk6WjGp6v2H/KfQa8iKu8Onh3UyIiBm1" crossorigin="anonymous"></script>
</body>
</html>
