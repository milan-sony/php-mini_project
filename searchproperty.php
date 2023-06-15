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
    <title>Search Property | REAL ESTATE MANAGEMENT</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
    }
    .navmenu{
        width: 100%;
        height: 60px;
        background-color: #0d2d3e;
    }
    h1{
        position: absolute;
        float: left;
        margin-left: 20px;
        margin-top: 12px;
        font-family: 'Poppins', sans-serif;
        color: #c4d3dc;
        font-size: 25px;
    }
    ul{
        float: right;
        margin-top: 22px;
    }
    li{
        display: inline;
        padding: 40px;
    }
    a{
        color:#c4d3dc;
        font-family: 'Roboto', sans-serif;
        font-size: 15px;
    }
    li a:hover{
        color: #f77f00;
        transition: 0.5s;
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
    input[type="submit"] {
        width: 100px;
        height: 30px;
        margin-top: 20px;
        border: none;
        background-color: #49c1a2;
        color: white;
        font-size: 18px;
        font-family: 'Lato', sans-serif;
        border-radius: 5px;
    }
    .district{
    width: 225px;
    height: 20px;
    }
    .alert{
    padding: 20px;
    position: fixed;
    background-color: red;
    color: white;
    width: 410px;
    margin-left: 36%;
    margin-top: 80px
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
    .img{
        width: 200px;
        height: auto;
    }
    table{
        width: 1500px;
        height: auto;
        margin-top: 50px;
        background-color: whitesmoke;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    th{
        font-family: 'Roboto', sans-serif;
        color: #0d2d3e;
    }
    td{
        border: 1px solid lightgrey;
        font-family: 'Roboto', sans-serif;
    }
    td a{
        font-family: 'Roboto', sans-serif;
        color: #0d2d3e;
    }
    td a:hover{
        color: #49c1a2;
        transition: 0.5s;
    }
    .typebox{
        padding-top: 50px;
    }
    .title{
    width: 180px;
    height: 20px;
    }
    label{
        font-family: 'Roboto', sans-serif;

    }
</style>
<body>
<div class="navmenu">
    <h1>REAL ESTATE MANAGEMENT SYSTEM</h1>
        <nav>
            <ul>
                <li><a href="properties.php">BACK &nbsp;<i class="fas fa-arrow-left"></i></a></li>
            </ul>
        </nav>
</div>
    <center>
    <form method="REQUEST">
        <div class="box">
            <h3>Search the property</h3>
            <br><br>
            <div class="districtbox">
            <label>District &nbsp;</label>
            <select class="district" name="district" required autocomplete="off">
                <option>Select district</option>
                <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                <option value="Kollam">Kollam</option>
                <option value="Pattanamthitta">Pattanamthitta</option>
                <option value="Alappuzha">Alappuzha</option>                
                <option value="Kottayam">Kottayam</option>              
                <option value="Idukki">Idukki</option>
                <option value="Eranakulam">Eranakulam</option>
                <option value="Thrissur">Thrissur</option>
                <option value="Palakkad">Palakkad</option>
                <option value="Malappuram">Malappuram</option>
                <option value="Kozhikode">Kozhikode</option>
                <option value="Wayanad">Wayanad</option>
                <option value="Kannur">Kannur</option>
                <option value="Kasargod">Kasargod</option>
            </select>
            </div>
            <div class="typebox">
            <label>Property type &nbsp;</label>
            <select class="title" name="title" required autocomplete="off">
                <option>Choose a property type</option>
                <option value="Residential House">Residential House</option>
                <option value="Residential Villa">Residential Villa</option>
                <option value="Residential Appartment">Residential Appartment</option>
            </select><br><br>
            </div>
            <input type="submit" name="submit" value="Search">
        </div>

    </form>
    </center>
    <?php
    if(isset($_REQUEST['submit']))
    {
        $con=mysqli_connect("localhost","root","","realestatemanagement");
        $district = $_REQUEST['district'];
        $title = $_REQUEST['title'];     
        $q="select * from property where district='".$district."' and title='".$title."'";
        $result=mysqli_query($con,$q);
        if($result)
        $num=mysqli_num_rows($result);
        if($num>0)
        {
        while($row=mysqli_fetch_array($result))
        {
    ?>
    <center>
        <table align="center" border="0">
            <tr>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <th><h3>Property ID</h3></th>
                <th><h3>Image</h3></th>
                <th><h3>Property name</h3></th>
                <th><h3>District</h3></th>
                <th><h3>Price</h3></th>
            </tr>
            <tr>
                <th>&nbsp;</th>
            </tr>
    <tr>
        <td align="center"> REMSPID<?php echo $row[0]?> </td>
        <td align="center"> <?php echo "<img src='upload_image/".$row['image']."'class='img'>"?> </td>
        <td align="center"> <?php echo $row['title']?> </td>
        <td align="center"> <?php echo $row['district']?> </td>
        <td align="center"> <?php echo $row['price']?> /- </td>
        <td align="center"> <a href= "viewmoredetailscust.php? id=<?php echo $row[0];?>" >View more details</a> </td>
    </tr>
    <?php
        }  
    }else{
        ?>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>No properties found from this district</strong>
        </div>
        <?php
        }
}   
?>
    </table>
    </center>
</body>
</html>
