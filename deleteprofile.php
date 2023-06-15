<?php
    session_start();
    error_reporting(0);
    $connection = mysqli_connect("localhost","root","","realestatemanagement");
    $id = $_SESSION['id'];
    $sql = "DELETE FROM accounts WHERE id ='".$id."'";
    mysqli_query($connection,$sql);
    unset($_SESSION['id']);
    header("location:indexpage.php");
    mysqli_close($connection);
?>