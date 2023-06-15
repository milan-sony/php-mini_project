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
        width: 110px;
        height: 40px;
        border: none;
        background-color: #d9534f;
        border-radius: 6px;
        }
    .button a:hover{
        color:black;
        transition: 0.5s;
    }
    .anchor{
        color: white;
    }
</style>
<script>
    function checkdelete(){
        return confirm('Do you want to delete this property?');
    }
</script> 
<body>
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
            <?php
            $con = mysqli_connect("localhost","root","","realestatemanagement");
            $sql="SELECT pid,title,district,price,image FROM property";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result))
            {
            ?>
            <tr>
                <td align="center"> RMSPID<?php echo $row[0]?> </td>
                <td align="center"> <?php echo "<img src='upload_image/".$row['image']."'class='img' alt='property image'>"?> </td>
                <td align="center"> <?php echo $row['title']?> </td>
                <td align="center"> <?php echo $row['district']?></td>
                <td align="center"> <?php echo $row['price']?>/-</td>
                <td align="center"> <a href= "viewmoredetailsadmin.php? id=<?php echo $row[0];?>" >View more details</a> </td>
                <td> <?php echo "<center><button class='button'><a class='anchor' onclick='return checkdelete()' href=deleteproperty.php?id=".$row['pid'].">Delete</a></button></center>"?></td>
            </tr>
            <?php
            }
            mysqli_close($con)
            ?>
        </table>
</center>

    
</body>
</html>