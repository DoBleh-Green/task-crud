<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Background color */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            width: 20rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        }
        form {
            padding: 20px;
        }
        .btn-primary {
            background-color: #007BFF; /* Button background color */
            border-color: #007BFF; /* Button border color */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Button background color on hover */
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Login</h2>
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo '<div class="alert alert-danger">Login gagal</div>';
                } else if ($_GET['pesan'] == "Logout") {
                    echo '<div class="alert alert-success">Logout berhasil</div>';
                } else if ($_GET['pesan'] == "belum Login") {
                    echo '<div class="alert alert-warning">Anda belum login</div>';
                }
            }
            ?>

            <form action="cek_login.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                </div>
                <button class="btn btn-primary" type="submit">Login</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
