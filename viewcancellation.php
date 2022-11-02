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
  left:110px;
  top:100px;
  max-width: 800px;
  width: 100%;
  background-color:white;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
    
}

.containert.table{
 
 }
 
 .table th,td{
  padding:12px 15px;
  font-family: "Times New Roman", Times, serif;
  text-transform:UPPERCASE;
   
 }


 

.containert input:focus,
.containert input:valid{
  border-color: #9b59b6;
}

.containert .button input{
  font-color:white;background:linear-gradient(135deg, #71b7e6, #9b59b6);
                                                     border-radius: 5px;border: none;color: #fff;
                                                     font-size: 18px;font-weight: 500;letter-spacing: 1px;cursor: pointer;
                                                     height: 45px;margin: 35px 0;width: 25%;position:relative;
                                                     left:270px;
 
}

.containert input:focus,
.containert input:valid{
  border-color: #9b59b6;
}

 .containert .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
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
<body style="">
<header class="header">
  <nav class="navbar navbar-style">
   <div class="container">
    <div class="navbar-header">
    <a href="" ><img class="logo" src="TWlogo.jpg" style="height:40px;padding:3px 10px;"></a> 
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
    <li class="nav-item dropdown">
                                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Bookings
                                                    </a>
                                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                  <a class="dropdown-item" href="viewbookingdetails.php">View Bookings</a>
                                                  <a class="dropdown-item" href="viewcancellations.php">Cancellations</a> 
    
    </li>
    <li><a href="viewtotalusers.php">Users</a></li>

     <li class="nav-item dropdown">
                                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

<div class="containert">
 <h3 style="position:relative;left:250px;font-family:Times New Roman", Times, serif;">Cancellation Requests</h3>
 <?php
 
echo'<table class="table" style="border-radius:12px 12px 0 0;  
                            box-shadow:0 12px 5px rgba(32,32,32,0.3);position:relative;top:30px;
                            ">

 <tr style="background: linear-gradient(135deg, #71b7e6, #9b59b6); ">
     <th style="padding:12px 15px;text-align:center;">B_id</th>
     <th style="padding:12px 15px;text-align:center;">User Name</th>
     <th style="padding:12px 15px;text-align:center;">Cancellation</th>
     
 </tr>';
 $con = mysqli_connect("localhost", "root", "", "mca_proj");
 
// Check for connection success

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
 $sql="select cancellation.b_id,c_name from cancellation,booking,customer where booking.b_id=cancellation.b_id and booking.c_userid=customer.c_userid;"; 
 $result=mysqli_query($con,$sql);
 while($data=mysqli_fetch_array($result))
  {
echo" <tr>
     <td style='padding:12px 20px;text-align:center;'><a href='viewuserdetails.php'>'.$data[b_id].'</a></td>
     <td style='padding:12px 20px;text-align:center;'>'.$data[c_name].'</td>
     <td style='padding:12px 20px;text-align:center;'><a href='deletebooking.php?b_id=$data[b_id]'><button>Cancel</button></a></td>
     
 </tr>";

  }

echo'</table>';

?>
 <!--<div class="button" >
          <input type="submit" value="Logout" style="" href="logout.php">
 </div>--> 
</div>
 
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