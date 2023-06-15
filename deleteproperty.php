<?php
{
    $con = mysqli_connect("localhost","root","","realestatemanagement");
    $id=$_REQUEST['id'];
    $q="DELETE  FROM property WHERE pid=$id";
    mysqli_query($con,$q);
    header("location:viewuserproperty.php");
    mysqli_close($con);
}
?>