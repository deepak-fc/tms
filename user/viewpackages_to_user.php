<?php session_start() ?>
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
  left:10px;
  top:100px;
  max-width: 1000px;
  height:800px;
  width: 100%;
  background-color:white;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  overflow-x:hidden;
   display:block;
  height:550px;
  overflow-y:auto;
  font-family: "Times New Roman", Times, serif;
  
}

.containert .bg{
   
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
   border-radius:5.2px 0px 0px 5.2px;
   height:40px;width:30px;
   position:absolute;
   left:350.3px;top:71.2px;
  
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
 
.containert .main{

 margin: 50px 10px;
 max-width:100%;
 height:1000px;
}

.card{
     width: 29%;
     
     display: inline-block;
     box-shadow: 2px 2px 10px black;
     border-radius: 2px; 
     margin: 2%;
    }

.image img{
  width: 100%;
  height:300px;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
   transform:scale(1);
  transition:0.3s ease-in-out;

 }

.image figure {
	overflow: hidden;
	margin: 0px;
}

.image:hover img{
  transform:scale(1.2);  
 }

.card .title{
 
  text-align: center;
  padding: 10px;
  
 }

.title h1{
  font-size: 20px;
 }

.card .des{
  text-align: center;
 
  padding-top: 5px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
.card button{
  margin-top: 20px;
  margin-bottom: 10px;
  background:linear-gradient(135deg, #71b7e6, #9b59b6);
  border: none;
  border-radius: 5px;
  padding:10px;
  font-color:white;
  
}

.card button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}

.card .prev, .next {
  cursor: pointer;
  
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  color:yellow;
}

.card .next{
 
 }

 .card .prev{
 
 }


/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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
        <a class="nav-link dropdown-toggle" href="userprofile.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="userprofile.php">My Profile</a>
		  
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
   </ul>
   </div>
   </div>
  </nav>

<div class="containert">
<form action="viewpackages_to_user.php" method="POST">
 <h3 style="position:relative;left:360px;font-family:Times New Roman", Times, serif;">Search Packages</h3>
 
 <input type="text" name="destination" value="" placeholder="Enter destination"
        style="position:relative;left:320px;top:20px;height: 40px;font-size: 16px; border-radius: 5px;
               padding-left: 32px;">

 <div class="bg" style="">
 <button style="width:100%;height:100%;padding-right:20px;background: linear-gradient(135deg, #71b7e6, #9b59b6);border:none;border-radius:5px;">
 <i class="fa fa-search" aria-hidden="true" style=""></i>
 <button>
 </div>

  &nbsp;&nbsp;
 
 <input type="submit" name="submit" value="Search" style="position:relative;left:320px;top:20px;border-color:gray;">
</form>


 <?php

$con = mysqli_connect("localhost", "root", "", "mca_proj");
 // Check for connection success
 
 if(!$con){
     die("connection to this database failed due to" . mysqli_connect_error());
 }

 if(isset($_SESSION['c_userid']))
 {
 if($_SERVER['REQUEST_METHOD']=='POST')
{
  echo'<div class="main">';
 $destination=$_POST['destination'];
 $psql="select * from package;";

  $sql="select p_id,p_name,details,total_price,img1 from package where destination='".$destination."';"; 
  $result=mysqli_query($con,$sql);
  while($data=mysqli_fetch_array($result))
  {
// <!--cards -->

$pid=$data['p_id'];
 echo" <div class='card'>
   <div class='image'>
      <figure>
      
       <a href='viewpackagedetails_to_user.php'>
       <img src='images/".$data['img1']."' >
       
       </a>
       </figure>
    </div>";     
  echo' <div class="title">';
   echo'<h1>'.$data['p_id'].'</h1>';
  
    echo'<h1>
    '.$data['p_name'].'
     </h1>
   </div>';
   echo'<div class="des">
    <p>'.$data['details'].'</p>
    <p>'.$data['total_price'].'</p>';

   echo'<a href="viewpackagedetails_to_user.php" ><button class="btn btn-primary">Read More...</button></a>
   </div>';
   echo'</div>';//<!--card end here-->
  }

echo'</div>';//<!--main ends here-->
  }
 

else{
  echo'<div class="main">';

  //$destination=$_POST['destination'];
   $sql="select p_id,p_name,details,total_price,img1 from package;"; 
   $result=mysqli_query($con,$sql);
   while($data=mysqli_fetch_array($result))
   {
 // <!--cards -->

 echo" <div class='card'>
 <div class='image'>
    <figure>
    
     <a href='viewpackagedetails_to_user.php'>
     <img src='images/".$data['img1']."' >
     
     </a>
     </figure>
  </div>";     
   echo' <div class="title">';
    echo'<h1>'.$data['p_id'].'</h1>';
   
     echo'<h1>
     '.$data['p_name'].'
      </h1>
    </div>';
    echo'<div class="des">
     <p>'.$data['details'].'</p>
     <p>'.$data['total_price'].'</p>';
 
    echo"<a href='viewpackagedetails_to_user.php?pid=$data[p_id]'><button class='btn btn-primary'>Read More...</button></a>
    </div>";
    echo'</div>';//<!--card end here-->
   }
 
  echo'</div>';//end

   }

  }
?>



 


</div>
 
<div class="containermarq" style="
  position:fixed;
  bottom:5px;
  left:10px;
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


<!----<a class="prev" onclick="plusSlides(-1)" style="position:absolute;left:361px;">&#10094;</a>
       <a class="next" onclick="plusSlides(1)" style=" right:361px;">&#10095;</a>>





