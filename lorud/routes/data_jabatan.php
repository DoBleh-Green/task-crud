<?php
session_start();
if($_SESSION['status'] != "login"){
    header('location:../login/index.php?pesan=belum_login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
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
        <h2>Data Jabatan</h2>
        <a href="tambah_jb.php" class="mx-3 btn btn-primary">+ Tambah Data</a>
        <br><br>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include("koneksi.php");
            $no = 1;
            $sql = mysqli_query($conn,"SELECT * FROM jabatan");
            while($j = mysqli_fetch_array($sql)){
            ?>
            <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td><?php echo $j['jabatan']; ?></td>
                <td>
                    <a href="edit_jb.php?id=<?php echo $j['id']; ?>" class="btn btn-primary">Edit</a> | <a href="delete_jb.php?id=<?php echo $j['id']; ?>" class="btn btn-danger">delete</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>  
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>