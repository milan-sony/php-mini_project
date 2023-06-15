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
    <title>Properties | REAL ESTATE MANAGEMENT</title>
</head>
    <style>
        *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
        }
    .navmenu{
        width: 100%;
        height: 60px;
        background-color: #0d2d3e;
    }
    h1{
        position: absolute;
        float: left;
        margin-left: 20px;
        margin-top: 12px;
        font-family: 'Poppins', sans-serif;
        color: #c4d3dc;
        font-size: 25px;
    }
    ul{
        float: right;
        margin-top: 22px;
    }
    li{
        display: inline;
        padding: 40px;
    }
    header a{
        color:#c4d3dc;
        font-family: 'Roboto', sans-serif;
        font-size: 15px;
    }
    li a{
        color:#c4d3dc;
        font-family: 'Roboto', sans-serif;
    }
    li a:hover{
        color: #f77f00;
        transition: 0.5s;
    }
    .img{
        width: 200px;
        height: auto;
    }
    table{
        width: 1500px;
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
        color: #0d2d3e;
    }
    td a:hover{
        color: #49c1a2;
        transition: 0.5s;
    }
    .searchbox{
        margin-top: 50px;
    }
    .searchbox a{
        color: #0d2d3e;
        font-size: 20px;
        font-family: 'Roboto', sans-serif;
    }
    .searchbox a:hover{
        color: #49c1a2;
        transition: 0.5s;
    }
    p{
        font-size: 20px;
        padding-top: 300px;
        color: #0d2d3e;
    }
    p a{
        color: red;
    }
    p a:hover{
        color: black;
    }
    </style>
    <body>
    <div class="navmenu">
        <h1>REAL ESTATE MANAGEMENT SYSTEM</h1>
        <nav>
            <ul>
                <li><a href="userside_indexpage.php">BACK &nbsp;<i class="fas fa-arrow-left"></i></a></li>
            </ul>
        </nav>
    </div>
    <div class="searchbox">
            <header><center><a href="searchproperty.php">Click here to <i class="fas fa-search"></i> search a property</a></center></header>
    </div>

            <?php
             $con = mysqli_connect("localhost","root","","realestatemanagement");
             $sql="SELECT pid,title,district,price,image FROM property";
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
                <th><h3>Image</h3></th>
                <th><h3>Property type</h3></th>
                <th><h3>District</h3></th>
                <th><h3>Price</h3></th>
            </tr>
            <tr>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <td align="center"> REMSPID<?php echo $row[0]?> </td>
                <td align="center"> <?php echo "<img src='upload_image/".$row['image']."'class='img' alt='property image'>"?> </td>
                <td align="center"> <?php echo $row['title']?> </td>
                <td align="center"> <?php echo $row['district']?> </td>
                <td align="center"> <?php echo $row['price']?> /- </td>
                <td align="center"> <a href= "viewmoredetailscust.php? id=<?php echo $row[0];?>" >View more details</a> </td>
            </tr>
            <?php
            }
                 }else{
                    ?>
                    <center>
                    <p>Oops! there is no properties in here <br>Please contact the <a href="mailto:realestatemanahement@gmail.com"> Customer care</a> if needed </p>
                    </center>
                    <?php
                 }
                }
            ?>
        </table>
        </center>
    </body>
</html>