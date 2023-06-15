<?php
session_start();
$con = mysqli_connect("localhost","root","","realestatemanagement");
$customer_id=$_SESSION['id'];
$product_id=$_REQUEST['id'];
//echo $product_id,$Customer_id;
$query="DELETE  FROM cart WHERE pid='".$product_id."' AND cust_id='".$customer_id."'";
$result=mysqli_query($con,$query);
if($result)
{
    header("location:wishlistview.php"); 
}
else{
    echo "Property not deleted";
}
?>