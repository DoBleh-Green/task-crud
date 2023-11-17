<?php
// Memulai atau mengaktifkan session PHP
session_start();

// Menghancurkan (mengakhiri) session yang sedang berjalan
session_destroy();

// Redirect ke halaman beranda dengan pesan "logout"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <script src="logout_popup.js"></script>
</head>
<body>

<script src="../js/script.js"></script>
<script>
    showLogoutPopup();
</script>
</body>
</html>