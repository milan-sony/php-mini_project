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
  <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
    }
    .box{
      width: 700px;
      height: 500px;
      background-color: red;
    }
    table{
      margin-top: 50px;
      background-color: whitesmoke;
      width: 500px;
      height: 240px;
      border-radius: 5px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    td{
      text-align: center;
      font-family: 'Poppins', sans-serif;
      color:#0d2d3e;
      border: 1px solid lightgrey;
    }
    h3{
      font-size: 30px;
    }
    h4{
      font-size: 15px;
      font-weight: 50px;
    }
    h4 a{
      color: #0d2d3e;
    }
    h4 a:hover{
      color: #49c1a2;
    }
</style>
<body>
<?php
  $con = mysqli_connect("localhost","root","","realestatemanagement");
  $sql="SELECT * from sales";
  $res=mysqli_query($con,$sql);
  if($res){
    ?>
    <center>
  <table border="0">
    <tr>
      <td><h1>Total number of sales</h1></td>
    </tr>
    <tr>
      <td><h3><?php echo mysqli_num_rows($res);?></h3></td>
    </tr>
  </table>
  <?php
  }
?>
</center>
</body>
</html>
