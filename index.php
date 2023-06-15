<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;600;700&family=Roboto+Mono:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>REAL ESTATE MANAGEMENT SYSTEM</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
        box-sizing: border-box;
    }
    body{
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(0,0,0,0.80),rgba(0,0,0,0.80)),url("indexpageimage.jpg");
        background-size: cover;
        background-position: center;
    }
    .title{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    .title h4{
        color:white;
        font-size: 30px;
        font-family: 'Poppins', sans-serif;
    }
    .button{
        position: absolute;
        top: 65%;
        left: 50%;
        transform: translate(-50%,-50%);  
    }
    .btn{
        border: 1px solid white;
        padding: 10px 30px;
        color: white;
        font-family: 'Roboto', sans-serif;
        transition: 0.6s ease;
    }
    .btn:hover{
        background-color:#c4d3dc;
        color:#0d2d3e;
    }
</style>
<body>
    <?php include("indexpage_navmenu.php")?>
    <div class="title">
        <h4>Whether you’re buying or selling the property,<br> we can help you to move forward.</h4>
    </div>
    <div class="button">
        <a href="signup.php" class="btn">SIGNUP</a>
        <a href="login.php" class="btn">LOGIN</a>
    </div>
</body>
</html>