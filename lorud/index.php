<?php
session_start();
if($_SESSION['status'] != "login"){
    header('location:login/index.php?pesan=belum_login');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="image/ha_rbg.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">PT.Mosquito</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="routes/data_karyawan.php">Data Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="routes/data_jabatan.php">Data Jabatan</a>
                    </li>
                </ul>
            </div>
            <a id="logoutLink" class="nav-link" href="login/logout.php" class="form-inline my-2 my-lg-0">Logout</a>
            <a id="loginLink" class="nav-link text-white rounded bg-primary" href="login/index.php">LogIn</a>
        </div>
    </nav>
    <br><br>
    <center>
        <img src="image/ha.jpeg" alt="1.png">
        <br><br>
        <h1>PT. Mosquito</h1>
    </center>

    <footer style="margin-top: 18rem; background-color: #333; color: #fff; text-align: center; padding: 20px;">
        <p>&copy; 2023 PT. Mosquito. All rights reserved. by.ilham</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/script.js"></script>
    <script src="js/login.js"></script>
</body>
</html>