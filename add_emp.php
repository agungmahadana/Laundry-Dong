<?php
    include_once("config.php");
    $username = $_GET['username'];
    $result = mysqli_query($mysqli, "UPDATE users SET tipe='1' WHERE username='$username'");
    header("Location: admin.php");
?>