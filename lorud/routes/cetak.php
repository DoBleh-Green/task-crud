<?php
session_start();
if ($_SESSION['status']!="login"){
    header("Location:../login/index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
  body{
    background-image: url(../image/ha.png);
    border-radius: 25px;
    background-position: left top;
    background-repeat: repeat;
  }
  .center{
    float: right;
    margin-right: 20px;
  }
</style>

<div class="container">
    <center>
        <h2><b>Data Karyawan</b></h2>
        <br>
        <h3>PT.Mosquito</h3>
    </center>
    <br><br>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col" >No</th>
                <th scope="col" >Nama</th>
                <th scope="col" >Tanggal Lahir</th>
                <th scope="col" >Jenis Kelamin</th>
                <th scope="col" >Jabatan</th>
                <th scope="col" >Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include ('koneksi.php');
            $no = 1;
            $sql = mysqli_query($conn,"SELECT * FROM karyawan");
            while ($d = mysqli_fetch_array($sql)){
            ?>
            <tr>
                <th scope="row" ><?php echo $no++ ?></th>
                <td><?php echo $d ['nama']; ?></td>
                <td><?php echo $d ['tgl_lahir']; ?></td>
                <td><?php echo $d ['jenis_kelamin']; ?></td>
                <td><?php echo $d ['jabatan']; ?></td>
                <td><?php echo $d ['alamat']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><br><br><br><br>
    <hr>
    <center><p>&copy; Hikam aramdan</p></center>
</div>
</body>
</html>