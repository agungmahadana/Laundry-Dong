<?php
    include_once("config.php");
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "UPDATE transaksi SET status='1' WHERE id=$id");
    header("Location: employee.php");
?>