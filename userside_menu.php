
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
  <title>SideMenu</title>
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style-type: none;
  }
  .sidebar{
    background: #c4d3dc;
    position: fixed;
    height: 100%;
    width: 240px;
  }
  .sidebar header{
    color: #c4d3dc;
    background: #3f7893;
    padding-left: 80px;
    line-height: 60px;
    font-size: 20px;
    font-family: 'Roboto', sans-serif;
  }
  .sidemenu p{
    line-height: 65px;
  }
  ul p{
    color: #0d2d3e;
    padding-left: 20px;
    user-select: none;
    font-family: 'Lato', sans-serif;
  }
  .sidemenu li{
    padding-left: 60px;
  }
  .sidemenu li a{
    color: #0d2d3e;
    line-height: 30px;
    font-size: 15px;
    font-family: 'Roboto', sans-serif;
    transition: 0.3s ease;
  }
  .sidemenu li a:hover{
    color: #d62828;
  }
  .fixedmenu{
    padding-top: 10px;
  }
  .fixedmenu li{
    padding-left: 20px;

  }
  .fixedmenu li a{
    color: #0d2d3e;
    line-height: 50px;
    font-family: 'Roboto', sans-serif;
    transition: 0.3s ease;
  }
  .fixedmenu li a:hover{
    color: #d62828;

  }
  p i{
    padding: 6px;
  }
  li a i{
    padding: 6px;
  }
</style>
<body>
  <div class="sidebar">
    <header><b>MENU</b></header>
    <ul class="sidemenu">
      <p><b><i class="fas fa-user-circle"></i>My profile</b></p>
      <li><a href="profile.php"target="usermain"><i class="fas fa-user"></i>View profile</a></li>
      <li><a href="editprofile.php"target="usermain"><i class="fas fa-user-edit"></i>Edit profile</a></li>
      <li><a href="deleteprofile.php" onclick="return confirm(' Do you want to delete your account ? \n By clicking on the OK button your account will be permanentaly deleted')" target="#"><i class="fas fa-trash-alt"></i>Delete profile</a></li>
    </ul>
    <ul class="sidemenu">
      <p><b><i class="fas fa-user-tag"></i>My property</b></p>
      <li><a href="viewuserproperty.php"target="usermain"><i class="fas fa-eye"></i>View my property</a></li>
    </ul>
    <ul class="fixedmenu">
      <li><a href="wishlistview.php"target="#"><i class="fas fa-heart"></i>My wishlist</a></li>
    </ul>
    <ul class="fixedmenu">
      <li><a href="customerhelp.php"target="usermain"><i class="fas fa-comments"></i>Get help</a></li>
    </ul>

  </div>
</body>
</html>