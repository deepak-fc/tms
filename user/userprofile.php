<?php session_start()?>
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
  max-width: 800px;
  max-height:500px;
  width: 100%;
  background-color:Transperant;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
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
                                                     left:360px;
 
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
  
  
  max-width: 800px;
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
    <li><a href="viewpackages_to_user.php">View Packages</a></li>
    
  
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="userprofile.php">My Profile</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
		  <?php
                
                if(isset($_SESSION['c_userid'])){ 

                echo '<li class="dropdown-item">
                        <a class="nav-link adv" href="logout.php" >Logout</a>
                    </li>';
            }
            else{
              echo '<li class="dropdown-item">
                        <a class="nav-link adv" href="userlogin.php">Login</a>
                    </li>';
            }
            
            ?>
        </div>
      </li>     
    
   </ul>
   </div>
   </div>
  </nav>

<?php

if(isset($_SESSION['c_userid']))
{
  
     $con = mysqli_connect("localhost", "root", "","mca_proj");
    // Check for connection success
    $c_userid=$_SESSION['c_userid'];
    $sql="select c_userid,c_name,c_email,c_address,c_contact from customer where c_userid='".$c_userid."';";
    $result=mysqli_query($con,$sql);
    while($data=mysqli_fetch_array($result))
    {
echo'<div class="containert">
 <h3 style="color:white;position:relative;left:190px;font-family:Times New Roman", Times, serif;>MY PROFILE</h3>
 
   
   <div class="wrapper">
    <div class="left">
        <img src="img_avatar.png" alt="user" width="100">
        <h4>'.$data['c_name'].'</h4>
         
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p>'.$data['c_email'].'</p>
     
                    <h4>Address</h4>
                    <p>'.$data['c_address'].'</p>
                 </div>
                 <div class="data" style="margin-left:90px;">
                   <h4>Phone</h4>
                    <p>'.$data['c_contact'].'</p>     
              </div>
            </div>
        </div>';
    }

      echo' 
            <h3>Bookings</h3>';

            echo'<table>
                    <tr style="text-align:right;padding-right:20px;"><th><h4>Name</h4></th>

                   <th style="text-align:left;"><h4>Date</h4></th>

                   <th style="text-align:center;"><h4>Cancellation</h4></th></tr>';
         

            $c_userid=$_SESSION['c_userid'];
            $psql="select b_id,p_name,b_date from package,booking,customer WHERE package.p_id=booking.p_id and customer.c_userid=booking.c_userid and  customer.c_userid='".$c_userid."';";
            $result1=mysqli_query($con,$psql);
            while($data=mysqli_fetch_array($result1))
            {
                echo' <tr>
                  
                   <td style="text-align:center;padding-right:20px;"> <p>'.$data['p_name'].'</p><br></td>

                   <td style="text-align:center;padding-right:20px;"> <p>'.$data['b_date'].'</p></td>';
                  echo" 
         
                   <td style='text-align:center;padding-right:20px;'><a href='add_cancellation.php?b_id=$data[b_id]'><button>Cancel</button></a></td></tr>
                   ";
            

            }
       
  echo'  </div><br>
</div>

</div>';
}
?>











 
<div class="containermarq" style="
  position:fixed;
  left:10px;
  bottom:5px;
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




























