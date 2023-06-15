<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;600;700&family=Roboto+Mono:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>SignUp | REAL ESTATE MANAGEMENT</title>
    <script type="text/Javascript">
    </script>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
    }
    .signup-box{
        width: 350px;
        height: 550px;
        margin-top: 80px;
        margin-left: 1000px;
        background-color: whitesmoke;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 3px;
        position: fixed;
    }
    h1{
        text-align: center;
        padding-top: 15px;
        color: #0d2d3e;
        font-family: 'Poppins', sans-serif;
    }
    h4{
        text-align: center;
        font-size: 15px;
        padding-top: 10px;
        color: #0d2d3e;
        font-family: 'Lato', sans-serif;
    }
    form{
        width:300px;
        margin-left: 20px;
    }
    form label{
        display: flex;
        margin-top: 20px;
        font-size: 18px;
        color: #0d2d3e;
        font-family: 'Roboto Mono', monospace;
    }
    form input{
        width: 100%;
        padding: 5px;
        border: none;
        border: 1px solid grey;
        border-radius: 6px;
        outline: none;
    }
    form textarea{
        width: 100%;
        padding: 5px;
        border: none;
        border: 1px solid gray;
        border-radius: 6px;
        font-family: 'Roboto Mono', monospace;
        outline: none;
    }
    input[type="submit"]
    {
        width: 310px;
        height: 35px;
        margin-top: 20px;
        border: none;
        background-color:#49c1a2;
        color: white;
        font-size: 18px;
        font-family: 'Lato', sans-serif;
    }
    .para-2{
        color: black;
        font-size: 15px;
        font-family: 'Roboto', sans-serif;
        margin-left: 1050px;
        position: fixed;
        margin-top: 650px;
    }
    .para-2 a{
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
</style>
<body>
    <img src="login&signupimage.jpg" alt="signup image">
    <div class="signup-box">
        <h1>Sign Up</h1>
        <h4>Real Estate Management System </h4>
        <form method="REQUEST">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username" required autocomplete="off">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" required autocomplete="off">
            <label>Contact Number</label>
            <input type="tel" name="contact" placeholder="Contact number" pattern="[0-9]{10}" required autocomplete="off">
            <label>Address</label>
            <textarea name="address" placeholder="Pemanent Address" required autocomplete="off"></textarea>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required autocomplete="off">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <p class="para-2">Already have an account ? <a href="login.php">Login here</a></p>
</body>
</html>
<?php
    error_reporting(0);
    $connection = mysqli_connect("localhost","root","","realestatemanagement");
    if(isset($_REQUEST['submit']))
    {
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $contact = $_REQUEST['contact'];
        $address = $_REQUEST['address'];
        $password = $_REQUEST['password'];
    

        if($_REQUEST['username'] && $_REQUEST['password'])
        {
            $sql = "INSERT INTO accounts (username, email, contact, address, password) VALUES('".$username."','".$email."','".$contact."','".$address."','".$password."')";
            $result = mysqli_query($connection,$sql);
            if($result)
            { 
                header("location:login.php");
            }
            else
            {
                echo("Failed to create account! Try Again");
            }

        }
    }   
    else
    {
        //echo "Data not stored";
    }
    mysqli_close($connection);
?>
