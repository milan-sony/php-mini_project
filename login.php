<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;600;700&family=Roboto+Mono:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Login | REAL ESTATE MANAGEMENT</title>
  </head>
  <style>
    *{
      margin: 0;
      padding: 0;
      text-decoration: none;
      list-style-type: none;
    }
    .login-box {
      width: 360px;
      height: 320px;
      margin-top: 160px;
      margin-left: 1000px;
      border-radius: 3px;
      background-color: whitesmoke;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      position: fixed;
    }
    h1{
      text-align: center;
      color: #0d2d3e;
      padding-top: 15px;
      font-family: 'Poppins', sans-serif;
    }
    h4{
        text-align: center;
        color: #0d2d3e;
        font-size: 15px;
        padding-top: 10px;
        font-family: 'Lato', sans-serif;
    }
    form{
      width: 300px;
      margin-left: 20px;
    }
    form label{
      display: flex;
      color: #0d2d3e;
      margin-top: 20px;
      font-size: 18px;
      font-family: 'Roboto Mono', monospace;
    }
    form input{
      width: 100%;
      padding: 7px;
      border: none;
      border: 1px solid grey;
      border-radius: 6px;
      outline: none;
    }
    input[type="submit"]{
      width: 320px;
      height: 35px;
      margin-top: 20px;
      border: none;
      background-color: #49c1a2;
      color: white;
      font-size: 18px;
      font-family: 'Lato', sans-serif;
    }
    p{
      padding-left: 750px;
      padding-top: 20px;
      font-size: 15px;
    }
    .para-2{
      color: black;
      font-size: 15px;
      font-family: 'Roboto', sans-serif;
      position: fixed;
      margin-top: 480px;
      margin-left: 300px;
    }
    .para-2 a{
      color: #49c1a2;
    }
    .para-2 a:hover{
      color: #49c1a2;
    }
    img{
      position: fixed;
      width: auto;
      height: 600px;
      margin-top: 4%;
      margin-left: 200px;
    }
    body{
      background-color:white;
    }
    .alert{
    padding: 20px;
    position: fixed;
    background-color: #d9534f;
    color: white;
    width: 410px;
    margin-left: 560px;
    margin-top: 600px
    }     
    .closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
    }
    .closebtn:hover {
    color: black;
    }
    strong{
      font-family: 'Roboto', sans-serif;
    }
    a{
      color: black;
    }
    a:hover{
      color: #49c1a2;
    }
  </style>
  <body>
    <img src="login&signupimage.jpg" alt="login image">
    <div class="login-box">
      <h1>Login</h1>
      <h4>Real Estate Management System </h4>
      <form method="$_REQUEST">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" required autocomplete="off">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required autocomplete="off">
        <input type="submit" name="submit" value="Login">
      </form>
    </div>
    <p class="para-2">
      Don't have an account ? <a href="signup.php">Sign Up Here</a>
    </p>
  </body>
</html>

<?php
session_start();
error_reporting(0);
if(isset($_REQUEST['submit']))
{
  $username = $_REQUEST["username"];
  $password = $_REQUEST["password"];
  $connection = mysqli_connect("localhost","root","","realestatemanagement");
  $sql = "SELECT * FROM accounts WHERE username='".$username."' AND password='".$password."'";
  $result = mysqli_query($connection,$sql);
  $row = mysqli_fetch_assoc($result);
  $_SESSION['id']=$row['id'];
  if($row['type']==2)
  {
     header("location:adminside_indexpage.php");
  }
  else if($row['type']==1)
  {
    header("location:userside_indexpage.php");
  }
  else
  {
?>
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Please check your username and password <br> or contact the <a href="indexpage_contact.php">customer care</a> if needed </strong>
  </div>
  <?php
  }
}
mysqli_close($connection);
?>