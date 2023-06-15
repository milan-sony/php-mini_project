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
    .head{
        background-color: #0d2d3e;
        width: 100%;
        height: 60px;
    }
    .head h1{
        color: #c4d3dc;
        position: fixed;
        font-family: 'Poppins', sans-serif;
        font-size: 25px;
        margin-top: 12px;
        margin-left: 20px;
    }
    .menu ul{
        float: right;
        margin-top: 22px;
    }
    .menu ul li{
        display: inline;
    }
    .menu ul li a{
        color:#c4d3dc;
        padding: 40px;
        font-size: 15px;
        transition: 0.5s ease;
        font-family: 'Roboto', sans-serif;
    }
    .menu ul li a:hover{
        color: #f77f00;
    }
</style>
<body>
    <div class="head">
        <h1>REAL ESTATE MANAGEMENT SYSTEM</h1>
        <div class="menu">
            <ul>
                <li><a href="propertyadd.php" target="usermain"><i class="fas fa-plus"></i> &nbsp; ADD PROPERTY</a></li>
                <li><a href="properties.php" target="#">PROPERTIES</a></li>
                <li><a href="logout.php" target="#">LOGOUT&nbsp; <i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </div>  
    </div>
</body>
</html>