<?php
    include_once("config.php");
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "UPDATE users SET tipe='0' WHERE id=$id");
    header("Location: admin.php");
?>