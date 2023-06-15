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
            margin-top: 50px;
            width: 1200px;
            height: auto;
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
            color: white;
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
    </style>
    <script>
    function checkdelete(){
        return confirm('Do you want to delete this account?');
    }
</script> 
    <body>
        <center>
        <table align="center" border="0">
            <tr>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <th><h3>Customer ID</h3></th>
                <th><h3>Username</h3></th>
                <th><h3>Password</h3></th>
                <th><h3>Email</h3></th>
                <th><h3>Contact</h3></th>
                <th><h3>Address</h3></th>
            </tr>
            <tr>
                <th>&nbsp;</th>
            </tr>
            <?php
             $con = mysqli_connect("localhost","root","","realestatemanagement");
             $sql="SELECT * from accounts";
             $result=mysqli_query($con,$sql);
             while($row=mysqli_fetch_array($result))
             if($row['type']==2)
             {
                 continue;
             }
             else
             {
            ?>
            <tr>
                <td align="center"> REMSCID<?php echo $row[0]?> </td>
                <td align="center"> <?php echo $row['username']?> </td>
                <td align="center"> <?php echo $row['password']?></td>
                <td align="center"> <?php echo $row['email']?> </td>
                <td align="center"> <?php echo $row['contact']?></td>
                <td align="center"> <?php echo $row['address']?></td>
                <td> <?php echo "<center><button class='button'><a class='anchor' onclick='return checkdelete()' href=deletecustomer.php?id=".$row['id'].">Delete</a></button></center>"?></td>
            </tr>
            <?php
             }
            mysqli_close($con);
            ?>
        </table>
        </center>
    </body>
</html>