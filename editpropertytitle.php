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
        width: 25%;
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
      width: 100px;
      height: 35px;
      margin-top: 20px;
      border: none;
      background-color: #49c1a2;
      color: white;
      font-size: 18px;
      font-family: 'Lato', sans-serif;
    }
    form input{
        width: 60%;
        padding: 5px;
        font-family: 'Roboto Mono', monospace;
        border: none;
        border: 1px solid grey;
        border-radius: 6px;
        outline: none;
    }


</style>
<body>
<center>
        <div class="box">
            <h3>Edit property title</h3><br>
            <form>
                <input type="tel" name="new_contact" placeholder="Enter new title" required autocomplete="off"> 
                <br>
                <input type="submit" name="submit" value="Update">
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
