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
    <title>REAL ESTATE MANAGEMENT</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
    }
    .navmenu{
        background-color: #0d2d3e;
        width: 100%;
        height: 60px;
    }
    .navmenu h1{
        position: fixed;
        color: #c4d3dc;
        font-family: 'Poppins', sans-serif;
        font-size: 25px;
        padding-top: 12px;
        padding-left: 20px;
    }
    .menu ul{
        float: right;
        padding-top: 22px;
    }
    .menu ul li{
        display: inline;
    }
    .menu ul li a{
        padding: 30px;
        font-size: 15px;
        color:#c4d3dc;
        font-family: 'Roboto', sans-serif;
        transition: 0.5s ease;
    }
    .menu ul li a:hover{
        color: #f77f00;
    }
</style>
<body>
    <div class="navmenu">
        <h1>REAL ESTATE MANAGEMENT SYSTEM</h1>
        <div class="menu">
            <ul>
                <li><a href="indexpage.php">HOME</a></li>
                <li><a href="indexpage_about.php">ABOUT</a></li>
                <li><a href="indexpage_contact.php">CONTACT</a></li>
                <li><a href="login.php"> LOGIN <i class="fas fa-sign-in-alt"></i> &nbsp; </a></li>
            </ul>
        </div>
    </div>
</body>
</html>