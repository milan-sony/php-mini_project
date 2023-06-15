<?php
$id=$_REQUEST['id'];
$con = mysqli_connect("localhost","root","","realestatemanagement");
$q="select id,username,email,contact from accounts,property where accounts.id=property.cust_id and pid='".$id."'";
$result = mysqli_query($con,$q);
$row = mysqli_fetch_array($result);
if($row){
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
    <title>Seller details | REAL ESTATE MANAGEMENT SYSTEM</title>
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
        color: #c53058;
        transition: 0.5s;
    }
    table{
        width: 600px;
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
        padding: 20px;
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
    .button2{
      margin-left: 990px;
      margin-top: 20px;
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
    h3{
      color: #0d2d3e;
      font-size: 30px;
      font-family: 'Poppins', sans-serif;
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
    <center>
        <table border="0" align="center">
            <tr>
                <td colspan="2" align="center"><h3><i class="fas fa-phone-alt"></i> &nbsp; Contact details</h3></td>
            </tr>
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
                <td><a href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?></a></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><a href="tel:<?php echo $row['contact'];?>"><?php echo $row['contact'];?></a></td>
            </tr>
        </table>
    </center>
    <button class="button2"><?php echo "<a class='anchor2' href=wishlistview.php?id=$row[0]>Cancel</a>"?></button>
  </body>
  </html>
<?php
}
?>