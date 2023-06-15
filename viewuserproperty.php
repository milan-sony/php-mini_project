<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
    }
    .img{
        width: 200px;
        height: auto;
    }
    table{
        width: 1200px;
        height: auto;
        margin-top: 50px;
        background-color: whitesmoke;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    th{
        font-family: 'Roboto', sans-serif;
        color: #0d2d3e;
    }
    td{
        border: 1px solid lightgrey;
        font-family: 'Roboto', sans-serif;
    }
    td a{
        font-family: 'Roboto', sans-serif;
        color: black;
    }
    td a:hover{
        color: #49c1a2;
        transition: 0.5s;
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
    p{
        font-size: 20px;
        padding-top: 300px;
        color: #0d2d3e;
    }
    a{
        color: #49c1a2;
    }
    .button3{
        width: 110px;
        height: 40px;
        border: none;
        background-color: #5bc0de;
        border-radius: 6px;
        }
        .button3 a:hover{
        color:black;
        transition: 0.5s;
    }
</style>
<script>
    function checkdelete(){
        return confirm('Do you want to delete this property from database ? \nBy clicking on the OK button your property will be deleted permanently');
    }
</script> 
<script>
    function checksold(){
        return confirm('Are you sure this property was sold?');
    }
</script> 

<body>
    <?php
    session_start();
    $id=$_SESSION['id'];
    $con = mysqli_connect("localhost","root","","realestatemanagement");
    $sql="SELECT * FROM property WHERE cust_id='".$id."'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            while($row=mysqli_fetch_array($result))
            {
    ?>
<center>
        <table align="center" border="0">
            <tr>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <th><h3>Property ID</h3></th>
                <th><h3>Property image</h3></th>
                <th><h3>Property type</h3></th>
                <th><h3>District</h3></th>
                <th><h3>Price</h3></th>
            </tr>
            <tr>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <td align="center">REMSPID<?php echo $row['pid']?> </td>
                <td align="center"> <?php echo "<img src='upload_image/".$row['image']."'class='img' alt='property image'>"?> </td>
                <td align="center"> <?php echo $row['title']?> </td>
                <td align="center"> <?php echo $row['district']?></td>
                <td align="center"> <?php echo $row['price']?>/-</td>
                <td align="center"> <a href= "viewmoredetailsuser.php? id=<?php echo $row[0];?>" >View more details</a> </td>
                <td> <?php echo "<center><button class='button'><a class='anchor' href=updateproperty.php?id=".$row['pid'].">Edit</a></button></center>"?></td>
                <td> <?php echo "<center><button class='button3'><a class='anchor' onclick='return checksold()' href=propertysold.php?id=".$row['pid'].">Property sold</a></button></center>"?></td>
                <td> <?php echo "<center><button class='button2'><a class='anchor2' onclick='return checkdelete()' href=deleteproperty.php?id=".$row['pid'].">Delete</a></button></center>"?></td>

            </tr>
            <?php
            }
        }
        else{
            ?>
            <center>
            <p>You have not added any properties <br>please contact the <a href="customerhelp.php"> Customer care</a> if needed </p>
            </center>
            <?php
        }
    }
    ?>
        </table>
</center>
</body>
</html>