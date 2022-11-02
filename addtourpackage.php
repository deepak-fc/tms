<?php session_start() ?>
<!DOCTYPE html>
<style>
body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('o-TRAVEL-facebook.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.header {
    min-height: 32px;
    padding: 1.5em 0;
    position: fixed;
    z-index: 9999;
    width: 100%;
    clear: both;
    border-bottom: 0 solid rgba(128, 128, 128, 0.17);
    background: white;
    height: 80px;
}

.navbar-collapse ul {
    float: right;
    margin: 0.3em 0.1em 0 0;
}

.navbar-collapse ul li {
    display: inline-block;
    margin: 0 0.2em;
}

.navbar-collapse ul li a {
    color: #60B0E6;
    text-decoration: none;
    padding: 0.4em 1.5em;
    display: block;
    border: 1px solid #fff;
    font-size: 1.1em;
    font-weight: 400;
}

.navbar-collapse ul li.active a,
.navbar-collapse ul li a:hover,
#nav .current a {
    border: 1px solid #60B0E6;
}

.containert {
    position: absolute;
    left: 10px;
    top: 100px;
    max-width: 1000px;
    width: 100%;
    background-color: white;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    overflow-x: hidden;
    display: block;
    height: 520px;
    overflow-y: auto;

}




.containert .button input {
    color: white;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
    border-radius: 5px;
    border: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
    height: 45px;
    margin: 25px 0;
    width: 20%;


}

.containert .button input:hover {
    /* transform: scale(0.99); */
    background: linear-gradient(-135deg, #71b7e6, #9b59b6);
}


.containert input:focus,
.containert input:valid {
    border-color: #9b59b6;
}

.user-details p {
    font-size: 20px;
    font-family: "Times New Roman", Times, serif;
}

.user-details input[type=text] {
    margin-bottom: 15px;
    height: 45px;
    width: 50%;
    outline: none;
    font-size: 0.9em;
    border-radius: 5px;
    padding-left: 15px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
    border-color: #9b59b6;
}

.user-details textarea {
    margin-bottom: 15px;
    width: 50%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    padding-left: 15px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
    height: 100px;
    border-color: #9b59b6;
}





.file-upload {
    display: inline-flex;
    align-items: center;
    font-size: 15px;
}

.file-upload__input {
    display: none;
}

.file-upload__button {

    background: linear-gradient(135deg, #71b7e6, #9b59b6);
    border: none;
    border-radius: 5px;
    outline: none;
    font-size: 12px;
    cursor: pointer;
    height: 30px;
    width: 100px;
    margin-right: 15px;
    margin-left: 5px;
    color: white;

}

.file-upload__button:hover {
    background: linear-gradient(-135deg, #71b7e6, #9b59b6);
}

.file-upload__label {
    max-width: 250px;
    font-size: 14px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour managment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylee.css">
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-style">
            <div class="container">
                <div class="navbar-header">
                    <a href="admin.php"><img class="logo" src="TWlogo.jpg" style="height:40px;padding:2px 10px;"></a>
                </div>
                <div class="collapse navbar-collapse" id="micon">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                View Packages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="packagesavailable.php">View Packages</a>
                                <a class="dropdown-item" href="packagedetails.php">View Schedules</a>

                        </li>
                        <li><a href="addtourpackage.php">Add packages</a></li>
                        <!--<li><a href="hotelsavailable.php">View Hotels</a></li>-->
                        <!--<li><a href="viewbookingdetails.php">View Booking</a></li>-->
                        <li><a href="viewtotalusers.php">View User Details</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Bookings
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="viewbookingdetails.php">View Bookings</a>
                                <a class="dropdown-item" href="viewcancellation.php">Cancellations</a>

                        </li <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="adminprofile.php">My Profile</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                            </li>


                    </ul>
                </div>
            </div>
        </nav>

        <?php
$insert=false;
$con = mysqli_connect("localhost", "root", "", "mca_proj");
// Check for connection success

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $p_id=$_POST['p_id'];
  $destination=$_POST['destination'];
  $p_name=$_POST['p_name'];
  $days=$_POST['days'];
  $nights=$_POST['nights'];
  $details=$_POST['details'];
  $travel_mode=$_POST['travel_mode'];
  $travel_cost=$_POST['travel_cost'];
  $stay_cost=$_POST['stay_cost'];
  $food_cost=$_POST['food_cost'];
  $total_amount=$_POST['total_amount'];

 // image section 1
  $image1 = $_FILES["image1"]["name"];          
  $target1 = "user/images/".basename($image1);
  $image2 = $_FILES["image2"]["name"];          
  $target2 = "user/images/".basename($image2);
  $image3 = $_FILES["image3"]["name"];          
  $target3 = "user/images/".basename($image3);

  $psql="INSERT INTO package(p_id,destination,days,nights,travel_mode,stay_cost,food_cost,travel_cost,total_price,details,p_name,img1,img2,img3)
  VALUES($p_id,'$destination','$days','$nights','$travel_mode','$stay_cost','$food_cost','$travel_cost','$total_amount','$details','$p_name','$image1','$image2','$image3');";
 $result=mysqli_query($con,$psql);
 move_uploaded_file($_FILES["image1"]["tmp_name"],$target1);
 move_uploaded_file($_FILES["image2"]["tmp_name"],$target2);
 move_uploaded_file($_FILES["image3"]["tmp_name"],$target3);


 //iamge section 2
 /*$filename2 = $_FILES["myFile2"]["name"];          
 $tempname = $_FILES["myFile2"]["tmp_name"];
  $folder = "images/".$filename2;
 move_uploaded_file($tempname,$folder);
 echo $folder."<br>";

 //image section 3
 $filename3 = $_FILES["myFile3"]["name"];          
 $tempname = $_FILES["myFile3"]["tmp_name"];
  $folder = "images/".$filename3;
 move_uploaded_file($tempname,$folder);
 echo $folder."<br>";*/

   
 // $psql="INSERT INTO package(p_id,destination,days,nights,travel_mode,stay_cost,food_cost,travel_cost,total_price,details,p_name)
  //VALUES('$p_id','$destination','$days','$nights','$travel_mode','$stay_cost','$food_cost','$travel_cost','$total_amount','$details','$p_name');";

if($result == true){

  $sql="select * from package where p_name='".$p_name."';";
$r=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($r))
{
 $pid=$row["p_id"];
$_SESSION['p_id']=$pid;
 $days=$row["days"];
 $_SESSION['days']=$days;
}
  echo "<script>alert('You have successfully Added package..');window.location.href = 'addschedule.php';</script>";

  // Flag for successful insertion
  $insert = true;
}
else{
  echo "ERROR: $psql <br> $con->error";
}

}

?>


        <div class="containert">
            <h3 style="position:relative;left:360px;font-family:Times New Roman" , Times, serif;>Add Tour Package</h3>
            <br><br>
            <form action="addtourpackage.php" method="post" enctype="multipart/form-data">
                <div class="user-details">
                    <?php
  $con = mysqli_connect("localhost", "root", "", "mca_proj");
  // Check for connection success
  
  if(!$con){
      die("connection to this database failed due to" . mysqli_connect_error());
  }
  

  $p="select max(p_id) as max from package;";
  $r=mysqli_query($con,$p);
  while($data=mysqli_fetch_array($r))
  {
    $num=$data['max'];
    $n=$num+1;
  }
   ?>

                    <p>Package id:<input type="text" name="p_id" placeholder="" value="<?php echo $n;?>"
                            style="position:relative;left:72px;"></p><br><br>

                    <p>Destination:<input type="text" name="destination" placeholder="Enter Destination"
                            style="position:relative;left:100px;"></p><br>

                    <p>Package Name:<input type="text" name="p_name" placeholder="Enter Name"
                            style="position:relative;left:72px;"></p><br><br>

                    <p>Days:<input type="text" name="days" placeholder="Enter number of days"
                            style="position:relative;left:150px;"></p><br><br>

                    <p>Nights:<input type="text" name="nights" placeholder="Enter number of nights"
                            style="position:relative;left:138px;"></p><br><br>

                    <p>Details:<br><textarea name="details" rows="15" cols="25" placeholder="Enter Details"
                            style="position:relative;left:200px;"></textarea></p><br><br>

                    <p>Mode of Travelling:<input type="text" name="travel_mode" placeholder="Enter Mode of travelling"
                            style="position:relative;left:40px;"></p><br><br>

                    <p>Travel cost:<input type="text" name="travel_cost" placeholder="Enter Travel cost"
                            style="position:relative;left:107px;"></p><br><br>

                    <p>Stay cost:<input type="text" name="stay_cost" placeholder="Enter stay cost"
                            style="position:relative;left:120px;"></p><br><br>

                    <p>Food cost:<input type="text" name="food_cost" placeholder="Enter food cost"
                            style="position:relative;left:115px;"></p><br><br>

                    <p>Total amount:<input type="text" name="total_amount" placeholder="Enter amount"
                            style="position:relative;left:89px;"></p><br><br>




                    <p>Add Image:</p>
                    <div class="file-upload">
                        <input class="file-upload__input" type="file" name="image1" id="">
                        <input class="file-upload__input" type="file" name="image2" id="">
                        <input class="file-upload__input" type="file" name="image3" id="">
                        <span class="file-upload__label"></span>
                    </div>

                    <script>
                    Array.prototype.forEach.call(document.querySelectorAll(".file-upload__button").function(button) {
                        const hiddenInput = button.parentElement.querySelector(".file-upload__input");
                        const label = button.parentElement.querySelector(".file-upload__label");
                        const defaultLabelText = "No file(s) selected";

                        label.textContent = defaultLabelText;
                        label.title = defaultLabelText;

                        button.addEventListener("click", function() {
                            hiddenInput.click();
                        });

                        hiddenInput.addEventListener("change", function() {
                            const filenameList = Array.prototype.map.call(hiddenInput.files, function(
                                file) {
                                return file.name;
                            });
                            label.textContent = filenameList.join(", ") || defaultLabelText;
                            label.title = label.textContent;
                        });
                    });
                    </script>
                </div>
                <br><br>
                <div class="button">
                    <input type="submit" value="Add Schedule" style="position:relative;left:300px;">


                    <!--<div class="button" >
          <a href="addschedule.php"><input class="btn btn-primary" type="button" value="Add Schedule" style="position:absolute;left:200px;"></a>
 </div>-->

                    <!--<input class="btn btn-primary" type="button" value="Logout" style="position:relative;left:300px;">-->
                </div>
            </form>
        </div>

        <div class="containermarq" style="
  position:fixed;
  bottom:5px;
  left: 10px;
  max-width: 1000px;
  height:20px;
  width: 100%;
  background-color:white;
  border-radius: 15px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);">
            <marquee width="100%" direction="left" height="90%" style="font-family: Garamond, serif;font-weight:bold;">
                Welcome to go Travel & Tourism Ltd..!
            </marquee>

            <div>
    </header>

</body>

</html>