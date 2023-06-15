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
    <title>Edit Profile</title>
</head>
<style>
    *{
      margin: 0;
      padding: 0;
      text-decoration: none;
      list-style-type: none;
    }
    .box{
        width:505px;
        height: 220px;;
        background-color:whitesmoke;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-left:450px;
        margin-top:60px;
        padding-top: 20px;
    }
    table{
        width: 10px;
        background-color: white;
        margin-top: 20px;
        margin-left: 10px;
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    td{
        padding: 20px;
        text-align: center;
        font-size: 15px;

    }
    td a{
        color: #0d2d3e;
        font-family: 'Lato', sans-serif;
        transition: 0.5s ease;
    }
    td a:hover{
        color: #49c1a2;
    }
    h1{
        color:#0d2d3e;
        font-family: 'Poppins', sans-serif;
        text-align: center;
    }
    p{
        font-size:15px;
        padding: 20px;
    }
    a{
    color: #0d2d3e;
    font-family: 'Poppins', sans-serif;
    }
    a:hover{
    color:#49c1a2;
    transition: 0.5 ease;
    }

</style>
<body>
        <div class="box">
            <h1><i class="fas fa-user-edit"></i>&nbsp;Edit profile</h1>
            <table border="0">
                <tr>
                    <td><a href="editusername.php"target="usermain"><i class="fas fa-user"></i>Username</a></td> 
                    <td><a href="editemail.php"target="usermain"><i class="fas fa-at"></i>Email</a></td> 
                    <td><a href="editcontact.php"target="usermain"><i class="fas fa-phone-alt"></i>Contact</a></td> 
                    <td><a href="editaddress.php"target="usermain"><i class="fas fa-address-book"></i>Address</a></td>
                    <td><a href="editpassword.php"target="usermain"><i class="fas fa-lock"></i>Password</a></td> 
                </tr>
            </table>
            <center>
                <p> <b> <a href="profile.php">View profile</a> </b> </p>
            </center>
        </div>
</body>
</html>