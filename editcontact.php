<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;600;700&family=Roboto+Mono:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Edit Username</title>
</head>
<style>
    *{
        margin: 0px;
        padding: 0px;
        text-decoration: none;
        list-style-type: none;
    }
    .box{
        background-color: whitesmoke;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-top: 50px;
        width: 50%;
        padding-bottom: 20px;
    }
    .box h3{
        font-size: 25px;
        color: #0d2d3e;
        padding-top: 20px;
        font-family: 'Poppins', sans-serif;
    }
    label{
        font-size: 20px;
    }
    input[type="submit"] {
      width: 150px;
      height: 40px;
      border: none;
      background-color: #5cb85c;
      color: white;
      font-family: 'Lato', sans-serif;
    }
    form input{
        width: 60%;
        padding: 10px;
        font-family: 'Roboto Mono', monospace;
        border: none;
        border: 1px solid grey;
        border-radius: 6px;
        outline: none;
    }
    .button3{
        width: 110px;
        height: 40px;
        border: none;
        background-color: #d9534f;
        border-radius: 6px;
        }
        .button3 a:hover{
        color:white;
        transition: 0.5s;
    }
    .anchor2{
        color: white;
    }
    td{
        padding: 50px;
    }


</style>
<body>
<center>
        <div class="box">
            <h3>Edit your contact number</h3><br>
            <form>
                <input type="tel" name="new_contact" placeholder="Enter your new contact number" pattern="[0-9]{10}" required autocomplete="off"> 
                <table>
                    <tr>
                        <td><input type="submit" name="submit" value="Save and change"></td>
                        <td><button class="button3"><?php echo "<a class='anchor2' href=editprofile.php>Cancel</a>"?></button>
                    </tr>
                </table>
            </form>
        </div>   
</center>
</body>
</html>
<?php
    session_start();
    error_reporting(0);
    $connection = mysqli_connect("localhost","root","","realestatemanagement");
    if(isset($_REQUEST["submit"]))
    {
        $newcontact = $_REQUEST['new_contact'];
        $id = $_SESSION['id'];
        $sql = "UPDATE accounts SET contact='".$newcontact."' WHERE id='".$id."'";
        $result = mysqli_query($connection,$sql);    
    }
    if($result)
    {
    echo "successfully connected";
    header("location:profile.php");
    }
    else
    {
    //echo "not updated";
    }
    mysqli_close($connection);
?>
