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
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
    }
    .profile{
        width:470px;
        height:auto;
        background-color:whitesmoke;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-left:450px;
        margin-top:50px;
        padding-top: 50px;
    }
    h1{
        color:#0d2d3e;
        font-family: 'Poppins', sans-serif;
        text-align: center;
    }
    h1 i{
        padding: 10px;
         color:#0d2d3e;
    }
    table{
        width: 450px;
        height: auto;
        background-color: white;
        margin-top: 50px;
        margin-left: 10px;
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    td{
        border: 1px solid lightgrey;
        color:#0d2d3e;
        font-family: 'Roboto', sans-serif;
        padding: 10px;
    }
    p{
        padding: 20px;
        font-size: 15px;
    }
    a{

        color: #0d2d3e;
        font-family: 'Poppins', sans-serif;
    }
    a:hover{
        color:#49c1a2;
    }


</style>
<body>
    <?php
    error_reporting(0);
    session_start();
    $connection = mysqli_connect("localhost","root","","realestatemanagement");
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM accounts WHERE id ='".$id."'";
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($result);
    ?>
    <div class="profile">
    <h1><i class="fas fa-user-circle"></i>PROFILE</h1>
        <table border="0" align="center">
            <tr>
                <td>CustomerID</td>
                <td>REMSCID<?php echo $row['id'];?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo $row['username'];?></td>
            </tr>
            <tr>
                <td>Email-id</td>
                <td><?php echo $row['email'];?></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><?php echo $row['contact'];?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $row['address'];?></td>
            </tr>
        </table>
        <center>
        <p> <b> <a href="editprofile.php">Edit profile</a> </b> </p>
        </center>
    </div>
</body>
</html>