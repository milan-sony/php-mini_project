<?php
session_start();
if(isset($_POST['submit']))
{
    $target = "upload_image/".basename($_FILES["image"]["name"]);
    $connection = mysqli_connect("localhost","root","","realestatemanagement");
    $customer_id = $_SESSION['id'];
    $title = $_POST['title'];
    $bath = $_POST['bath'];
    $bed = $_POST['bed'];
    $floor = $_POST['floor'];
    $district = $_POST['district'];
    $locality = $_POST['locality'];
    $pin = $_POST['pin'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $sql = "INSERT INTO property (cust_id,title,bathroom,bedroom,floor,district,locality,pin,price,description,image) VALUES('".$customer_id."','".$title."','".$bath."','".$bed."','".$floor."','".$district."','".$locality."','".$pin."','".$price."','".$description."','".$image."')";
    $result = mysqli_query($connection,$sql); 
    if($result)
    {
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
        {
?>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong>Your property were successfully added</strong>
        </div>
       <?php
        }
        else
        {
        ?>
        <h4> <?php echo "Something went wrong";?></h4>
       <?php
        }
    }
}
//mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;600;700&family=Roboto+Mono:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Add Property | REAL ESTATE MANAGEMENT SYSTEM</title>
</head>
<style>
    *{
      margin: 0;
      padding: 0;
      text-decoration: none;
      list-style-type: none;
    }
    .box{
        background-color: whitesmoke;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        width: 505px;
        height: 775px;
        margin-left: 250px;
        margin-top: 20px;
    }
    .content{
        padding-left: 50px;
    }
    .content h1{
        text-align: center;
        color : #0d2d3e;
        font-family: 'Poppins', sans-serif;
    }
    .content h3{
        text-align: center;
        color: #0d2d3e;
    }
    .subtitle{
        margin-top: 30px;
        font-family: 'Lato', sans-serif;
    }
    .section1{
        padding-top: 30px;
        font-family: 'Roboto', sans-serif;
    }
    .section2{
        margin-top: 20px;
        display: flex;
        font-family: 'Roboto', sans-serif;
    }
    .section3{
        margin-top: 30px;
        font-family: 'Roboto', sans-serif;
    }
    .section4{
        font-family: 'Roboto', sans-serif;
    }
    .title{
        width: 304px;
    }
    .district{
        width: 175px;
    }
    .price{
        width: 230px;
    }
    .details{
        width: 30px;
        height: 20px;
    }
    .description{
        width: 410px;
        height: 100px;  
    }
    .section6{
        margin-top: 30px;
        font-family: 'Roboto', sans-serif;
    }
    input[type="submit"]{
      width: 410px;
      height: 35px;
      margin-top: 0.5px;
      border: none;
      background-color: #49c1a2;
      color: white;
      font-size: 18px;
      font-family: 'Lato', sans-serif;
    }
    .alert{
    padding: 20px;
    position: fixed;
    background-color: #5cb85c;
    color: white;
    width: 410px;
    margin-left: 830px;
    margin-top: 300px
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
    h4{
        color: red;
        font-size: 20px;
        position: fixed;
        margin-left: 800px;
        margin-top: 300px
    }
</style>
<body>
    <div class="box">
        <div class="content">
            <form method="POST" enctype='multipart/form-data'>

                <h1>Property details</h1>
                <div class="section1">
                    <label>Property type</label>&nbsp;&nbsp;
                    <select class="title" name="title" required autocomplete="off">
                        <option>Not added</option>
                        <option value="Residential House">Residential House</option>
                        <option value="Residential Villa">Residential Villa</option>
                        <option value="Residential Appartment">Residential Appartment</option>
                    </select><br><br>
                </div>

                <h3 class="subtitle">Other details</h3><br>
                <div class="section2">
                    <label>Floors</label> &nbsp; &nbsp;
                    <input class="details"type="text" name="floor" required autocomplete="off">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                    <label>Bedrooms</label> &nbsp; &nbsp;
                    <input class="details" type="text" name="bed" required autocomplete="off">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                    <label>Bathrooms</label> &nbsp; &nbsp;
                    <input class="details" type="text" name="bath" required autocomplete="off"> 
                </div>

                <h3 class="subtitle">Location details</h3>
                <div class="section3">
                    <label>District</label>&nbsp; &nbsp;
                    <select class="district" name="district" required autocomplete="off">
                        <option>Not added</option>
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
                    </select><br><br>
                    <label>Locality</label>&nbsp;&nbsp;
                    <input type="text" name="locality" required autocomplete="off"><br><br>
                    <label>Pin</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="text" name="pin" pattern="[0-9]{6}" required autocomplete="off"><br><br><br>
                </div>

                <div class="section4">
                    <label>Expecting Selling Price</label>&nbsp;&nbsp;
                    <input class="price" type="text" name="price" placeholder="₹" required autocomplete="off">
                </div>

                <h3 class="subtitle">Property description</h3><br>
                <div class="section5">
                    <textarea class="description" name="description" placeholder="Describe about your property (Include Sq.ft details)" required autocomplete="off"></textarea>
                </div>
                <div class="section6">
                    <label>Property image</label>
                    <input type="file" name="image" required autocomplete="off"><br><br>
                </div>
                <div class="session7">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
</body>
</html>
