<?php
{
    $con = mysqli_connect("localhost","root","","realestatemanagement");
    $id=$_REQUEST['id'];
    $q="DELETE  FROM accounts WHERE id=$id";
    mysqli_query($con,$q);
    header("location:viewallcustomer.php");
    mysqli_close($con);
}
?>