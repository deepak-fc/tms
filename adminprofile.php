 
<!DOCTYPE html>
<style>

 body{
  background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('o-TRAVEL-facebook.jpg');
   background-size:cover;
   background-repeat:no-repeat;
   background-attachment:fixed;
   }
 .header{
   min-height: 32px;
    padding: 1.5em 0;
    position: fixed;
    z-index: 9999;
    width: 100%;
    clear: both;
    border-bottom: 0 solid rgba(128, 128, 128, 0.17);
    background:white;height:80px;
  }

 .navbar-collapse ul{
    float: right;
    margin: 0.3em 0.1em 0 0;}
 
 .navbar-collapse ul li{
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

.containert{
  position:absolute;
  left:200px;
  top:100px;
  max-width: 600px;
  max-height:500px;
  width: 100%;
  background-color:Transperant;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
 
  
}

.containert .bg{
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
   border-radius:5.2px 0px 0px 5.2px;
   height:40px;width:30px;
   position:absolute;
   left:350.3px;top:71.2px;
  
  
 }



 .containert .button input{
  font-color:white;background:linear-gradient(135deg, #71b7e6, #9b59b6);
                                                     border-radius: 5px;border: none;color: #fff;
                                                     font-size: 18px;font-weight: 500;letter-spacing: 1px;cursor: pointer;
                                                     height: 45px;margin: 35px 0;width: 25%;position:relative;
                                                     left:200px;
 
}

.containert input:focus,
.containert input:valid{
  border-color: #9b59b6;
}

 .containert .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }



.wrapper{
  position: relative;
  top: 10px;
  
  
  max-width: 600px;
  display: flex;
  box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
}

.wrapper .left{
  width: 35%;
  background: linear-gradient(to right,#01a9ac,#01dbdf);
  padding: 30px 25px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  text-align: center;
  color: #fff;
}

.wrapper .left img{
  border-radius: 5px;
  margin-bottom: 10px;
}

.wrapper .left h4{
  margin-bottom: 10px;
}

.wrapper .left p{
  font-size: 12px;
}

.wrapper .right{
  width: 65%;
  background: #fff;
  padding: 30px 25px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.wrapper .right .info,
.wrapper .right .projects{
  margin-bottom: 25px;
}

.wrapper .right .info h3,
.wrapper .right .projects h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    color: #353c4e;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.wrapper .right .info_data,
.wrapper .right .projects_data{
  display: flex;
  justify-content: space-between;
  
}

.wrapper .right .info_data .data,
.wrapper .right .projects_data .data{
  width: 45%;
  
}

.wrapper .right .info_data .data h4,
.wrapper .right .projects_data .data h4{
    color: #353c4e;
    
    margin-bottom: 5px;
}

.wrapper .right .info_data .data p,
.wrapper .right .projects_data .data p{
  font-size: 13px;
  margin-bottom: 10px;
  
  color: #919aa3;
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
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylee.css">
</head> 
<body style="">
<header class="header">
  <nav class="navbar navbar-style">
   <div class="container">
    <div class="navbar-header">
    <a href="" ><img class="logo" src="TWlogo.jpg" style="height:40px;padding:2px 10px;"></a> 
    </div>
  <div class="collapse navbar-collapse" id="micon">
    <ul class="nav navbar-nav navbar-right">
    <li class="nav-item dropdown">
                                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  View Packages
                                                    </a>
                                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                  <a class="dropdown-item" href="packagesavailable.php">View Packages</a>
                                                  <a class="dropdown-item" href="packagedetails.php">View Schedules</a> 
    
    </li>
    <li><a href="addtourpackage.php">Add packages</a></li>
    <li><a href="viewtotalusers.php">View User Details</a></li>
	<li class="nav-item dropdown">
                                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Bookings
                                                    </a>
                                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                  <a class="dropdown-item" href="viewbookingdetails.php">View Bookings</a>
                                                  <a class="dropdown-item" href="viewcancellation.php">Cancellations</a> 
    
    </li>

     <li class="nav-item dropdown">
                                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Profile
                                                    </a>
                                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                  <a class="dropdown-item" href="adminprofile.php">My Profile</a>
                                                  <a class="dropdown-item" href="logout.php">Logout</a> </li>
    
   </ul>
   </div>
   </div>
  </nav>

<!--<div class="containert">
 <h3 style="color:white;position:relative;left:190px;font-family:Times New Roman", Times, serif;">MY PROFILE</h3>
 
   
   <div class="wrapper">
    <div class="left">
        <img src="img_avatar.png" alt="user" width="100">
        <h4>Abhishek jagtap</h4>
         
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p>jagtapabhishek227@gmail.com</p>
     
                    <h4>Address</h4>
                    <p>Shivane,NDA Road,Pune-411023</p>
                 </div>
                 <div class="data" style="margin-left:60px;">
                   <h4>Phone</h4>
                    <p>8745998761</p>
              
                   <h4>DOB</h4>
                   <p>15-12-2000</p>     
              </div>
            </div>
        </div>
      
      <div class="projects"> 
            <h3>Bookings</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Recent</h4>
                    <p>1.Kashmir Tour</p>
                    <p>2.Andhra Pradesh Tour</p>
                 </div>
                 <div class="data" style="float:right;">
                   <h4>Date</h4>
                    <p>12-12-2020</p>
                    <p>11-09-2020</p>
              </div>
            </div>
        </div>
      
       
    </div>
</div>



 


</div>-->

<?php

if(isset($_SESSION['adminuname']))
{
  
     $con = mysqli_connect("localhost", "root", "","mca_proj");
    // Check for connection success
    $e_id=$_SESSION['adminuname'];
    $sql="select e_id,e_name,e_email,e_address,e_contact from employee where e_id='".$e_id."';";
    $result=mysqli_query($con,$sql);
    while($data=mysqli_fetch_array($result))
    {
echo'<div class="containert">
 <h3 style="color:white;position:relative;left:190px;font-family:Times New Roman", Times, serif;>MY PROFILE</h3>
 
   
   <div class="wrapper">
    <div class="left">
        <img src="img_avatar.png" alt="user" width="100">
        <h4>'.$data['e_name'].'</h4>
         
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p>'.$data['e_email'].'</p>
     
                    <h4>Address</h4>
                    <p>'.$data['e_address'].'</p>
                 </div>
                 <div class="data" style="margin-left:90px;">
                   <h4>Phone</h4>
                    <p>'.$data['e_contact'].'</p>     
              </div>
            </div>
        </div>';
    }

            
       
  echo'  </div><br>
</div>

</div>';
}
?>
 
<div class="containermarq" style="
  position:fixed;
  bottom:5px;
  max-width: 1100px;
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








