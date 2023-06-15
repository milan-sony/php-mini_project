<?php
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $title = $_POST['title'];
    $bath = $_POST['bath'];
    $bed = $_POST['bed'];
    $floor = $_POST['floor'];
    $district = $_POST['district'];
    $locality = $_POST['locality'];
    $pin = $_POST['pin'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $con=mysqli_connect("localhost","root","","realestatemanagement");
    $q="update property set title='".$title."',bathroom='".$bath."',bedroom='".$bed."',floor='".$floor."',district='".$district."',locality='".$locality."',pin='".$pin."',description='".$description."',price='".$price."' where pid='".$id."' ";
    $res=mysqli_query($con,$q);
    header('location:viewuserproperty.php');
}
?>