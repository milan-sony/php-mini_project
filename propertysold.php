<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Property sold | REAL ESTATE MANAGEMENT SYSTEM</title>
</head>
<body>
<?php
  session_start();
  $con = mysqli_connect("localhost","root","","realestatemanagement");
  $cust_id=$_SESSION['id'];
  $product_id=$_REQUEST['id'];
  if($product_id){
    $q="insert into sales(cust_id,product_id) values('".$cust_id."','".$product_id."')";
    $result=mysqli_query($con,$q);
    if($result){
      $q="delete  from property where pid='".$product_id."'";
      $result=mysqli_query($con,$q);
      if($result){
        header("location:viewuserproperty.php");
      }else{
        echo "Something went wrong";
      }
    }
  }
?>
</body>
</html>