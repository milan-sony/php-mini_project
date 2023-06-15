<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;600;700&family=Roboto+Mono:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9cd98edc8b.js" crossorigin="anonymous"></script>
    <title>SideMenu</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        list-style-type: none;
        text-decoration: none;
        font-family: "Open Sans", sans-serif;
    }
    .sidebar {
        background: #c4d3dc;
        position: fixed;
        height: 100%;
        width: 250px;
    }
    .sidebar header {
        color:#c4d3dc;
        background: #3f7893;
        padding-left: 80px;
        line-height: 60px;
        font-size: 20px;
        font-family: 'Roboto', sans-serif;
    }
    .sidebar ul a {
        padding-left: 40px;
        line-height: 65px;
        transition: 0.4s;
        font-size: 15px;
        color: #0d2d3e;
        display: block;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    ul li:hover a {
        padding-left: 50px;
        color: #d62828;
    }
    .sidebar ul a i {
        margin-right: 16px;
    }
</style>
<body>
    <div class="sidebar">
        <header><b>MENU</b></header>
        <ul>
            <li>
                <a href="customerscount.php" target="adminmain"><i class="fas fa-eye"></i>Customers</a>
            </li>
            <li>
                <a href="propertiescount.php" target="adminmain"><i class="fas fa-eye"></i>Properties</a>
            </li>
            <li>
                <a href="salescount.php" target="adminmain"><i class="fas fa-chart-pie"></i>Sales Report</a>
            </li>
            <li>
                <a href="index.php" target="#"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </li>
        </ul>
    </div>
</body>
</html>