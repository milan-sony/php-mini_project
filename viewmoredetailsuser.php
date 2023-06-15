<?php
$id = $_REQUEST['id'];
$con = mysqli_connect("localhost","root","","realestatemanagement");
$q = "SELECT pid,title,bathroom,bedroom,floor,district,locality,pin,price,description,image FROM property where pid='".$id."'";
$result = mysqli_query($con,$q);
if($result){
    while($row=mysqli_fetch_array($result)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;600;700&family=Roboto+Mono:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9cd98edc8b.js" crossorigin="anonymous"></script>
    <title>View Property | REAL ESTATE MANAGEMENT</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style-type: none;
}
.img{
    width: 500px;
    height: auto;
}
.box{
    width: 1000px;
    margin-left: 200px;
    margin-top: 50px;
    height: auto;
    background-color: whitesmoke;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
ul{
    padding: 40px;
    border: 1px solid lightgrey;
}
ul li{
    padding: 10px;
    font-family: 'Poppins', sans-serif;
}
h2{
    color:#0d2d3e;
}
.f1{
    padding-left: 310px;
}
.button{
        width: 100px;
        height: 40px;
        border: none;
        background-color: #f0ad4e;
        border-radius: 6px;
        }
    .button a:hover{
        color:black;
        transition: 0.5s;
    }
    .anchor{
        color: white;
    }
    .button2{
        width: 110px;
        height: 40px;
        border: none;
        background-color: #d9534f;
        border-radius: 6px;
        }
        .button2 a:hover{
        color:black;
        transition: 0.5s;
    }
    .anchor2{
        color: white;
    }
    td{
      padding: 50px;
    }
</style>
<script>
    function checkdelete(){
        return confirm('Do you want to delete this property?');
    }
</script> 
<body>
    <div class="box">
    <ul>
        <li><center><?php echo "<img src='upload_image/".$row['image']."'class='img'alt='property image'>"?></center></li>
    </ul>
    <ul>
        <li class="f1"><h2>Property ID<h2></li>
        <li class="f1">RMSPID<?php echo $row[0]?><li>
    </ul>
    <ul>
        <li class="f1"><h2>Property type<h2></li>
        <li class="f1"><?php echo $row['title']?><li>
    </ul>
        <ul>
            <li class="f1"><h2>Property features<h2></li>
            <li class="f1">Floors :&nbsp;&nbsp; <?php echo $row['floor']?></li>
            <li class="f1">Bedrooms :&nbsp;&nbsp; <?php echo $row['bedroom']?></li>
            <li class="f1">Bathrooms :&nbsp;&nbsp; <?php echo $row['bathroom']?></li>
        </ul>
    <ul>
        <li class="f1"><h2>Property description</h2></li>
        <li class="f1"><?php echo $row['description']?></li>
    </ul>
    <ul>
        <li class="f1"><h2>Location details</h2></li>
        <li class="f1">District :&nbsp;&nbsp; <?php echo $row['district']?></li>
        <li class="f1">locality :&nbsp;&nbsp; <?php echo $row['locality']?></li>
        <li class="f1">Pin :&nbsp&nbsp; <?php echo $row['pin']?></li>
    </ul>

    <ul>
        <li class="f1"><h2>Price details</h2></li>
        <li class="f1">Price :&nbsp;&nbsp; <?php echo $row['price']?>/-</li>
    </ul>
    </div>

    <center>
    <table>
      <tr>
        <td><?php echo "<center><button class='button'><a class='anchor' href=updateproperty.php?id=".$row['pid'].">Edit</a></button></center>"?></td>
        <td><?php echo "<center><button class='button2'><a class='anchor2' onclick='return checkdelete()' href=deleteproperty.php?id=".$row['pid'].">Delete</a></button></center>"?></td>
      </tr>
    </table>
    </center>

</body>
</html>
<?php
    }
}
else {
    echo "Something went wrong please contact the customer care if needed";
}
?>