<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","realestatemanagement");
$q="select * from property where pid='".$id."' ";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
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
    <title></title>
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
        height: 720px;
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
      width: 150px;
      height: 35px;
      border: none;
      background-color: #5cb85c;
      color: white;
      font-family: 'Lato', sans-serif;
    }
    .button{
        width: 100px;
      height: 35px;
      border: none;
      background-color: #d9534f;
      font-family: 'Lato', sans-serif;   
    }
    .anchor{
        color: white;

    }
    table{
        padding-top: 20px;
    }
    tr td{
        padding-left: 50px;
    }
</style>
<body>
    <div class="box">
        <div class="content">
            <form method="POST">

                <h1>Update property details</h1>
                <div class="section1">
                    <label>Property type</label>&nbsp;&nbsp;
                    <select class="title" type="text" name="title" required autocomplete="off">
                    <option><?php echo $row['title'];?></option>
                    <option value="Residential House">Residential House</option>
                    <option value="Residential Villa">Residential Villa</option>
                    <option value="Residential Appartment">Residential Appartment</option>
                    </select><br><br>
                </div>

                <h3 class="subtitle">Other details</h3><br>
                <div class="section2">
                    <label>Floors</label> &nbsp; &nbsp;
                    <input class="details"type="text" name="floor" value="<?php echo $row['floor'];?>" required autocomplete="off">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                    <label>Bedrooms</label> &nbsp; &nbsp;
                    <input class="details" type="text" name="bed" value="<?php echo $row['bedroom'];?>" required autocomplete="off">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                    <label>Bathrooms</label> &nbsp; &nbsp;
                    <input class="details" type="text" name="bath" value="<?php echo $row['bathroom'];?>" required autocomplete="off"> 
                </div>

                <h3 class="subtitle">Location details</h3>
                <div class="section3">
                    <label>District</label>&nbsp; &nbsp;
                    <select class="district" name="district"  required autocomplete="off">
                        <option><?php echo $row['district'];?></option>
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
                    <input type="text" name="locality" value="<?php echo $row['locality'];?>" required autocomplete="off"><br><br>
                    <label>Pin</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="text" name="pin" pattern="[0-9]{6}" value="<?php echo $row['pin'];?>" required autocomplete="off"><br><br><br>
                </div>

                <div class="section4">
                    <label>Expecting Selling Price</label>&nbsp;&nbsp;
                    <input class="price" type="text" name="price" value="<?php echo $row['price'];?>" placeholder="₹" required autocomplete="off">
                </div>

                <h3 class="subtitle">Property description</h3><br>
                <div class="section5">
                    <input type="textarea" class="description" name="description" value="<?php echo $row['description'];?>" placeholder="Describe about your property" required autocomplete="off"></textarea>
                </div>

                <div class="session7">
                    <table border="0">
                        <tr>
                            <td><input type="submit" name="submit" value="Save and change" onclick="alert('Your property details has been updated successfully')"</td>
                            <td><button class='button'><a class='anchor' href="viewuserproperty.php">Cancel</a></button></td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $id=$_REQUEST['id'];
    $title = $_POST['title'];
    $bath = $_POST['bath'];
    $bed = $_POST['bed'];
    $floor = $_POST['floor'];
    $district = $_POST['district'];
    $locality = $_POST['locality'];
    $pin = $_POST['pin'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $con=mysqli_connect("localhost","root","","realestatemanagement");
    $q="update property set title='".$title."',bathroom='".$bath."',bedroom='".$bed."',floor='".$floor."',district='".$district."',locality='".$locality."',pin='".$pin."',description='".$description."',price='".$price."' where pid='".$id."' ";
    $res=mysqli_query($con,$q);
    if($res){
        //echo "Updated";
    }
}
?>