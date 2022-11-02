
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


.containerf{
  position:absolute;
  left:150px;
  top:100px;
  max-width: 700px;
  width: 100%;
  background-color:transperant;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}

.containerf .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
   color:white;
 
}

.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}

.containerf .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 630px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}

form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
  color:white;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}

form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }



form .button{
   height: 45px;
   margin: 35px 0;
    
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

.gender-details input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
form .gender-details .input-box{
  margin-bottom: 15px;
  width: 100%;
}

form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}


.gender-details input:focus,
.gender-details input:valid{
  border-color: #9b59b6;
}

sup{
 color:red;font-weight:bold;}

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
    <li><a href="">Home</a></li>
    <li><a href="">About</a></li>
    <li><a href="">Gallery</a></li>
    <li><a href="">Contact Us</a></li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Log In
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#">User Login</a>
      <a class="dropdown-item" href="#">Admin Login</a> </li>
   </ul>
   </div>
   </div>
  </nav>

    <!--Script-->
<?php
$insert=false;
$con = pg_connect("host=localhost dbname=management port=5432 user=postgres password=admin");

// Check for connection success

if(!$con){
    die("connection to this database failed due to" . pg_connect_error());
}

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $e_name=$_POST['e_name'];
  $e_password=$_POST['e_password'];
  $e_email=$_POST['e_email'];
  $e_contact=$_POST['e_contact'];
  $e_address=$_POST['e_address'];
  
  $psql="INSERT INTO employee(e_name,e_password,e_email,e_address,e_contact)
  VALUES('$e_name','$e_password','$e_email','$e_address','$e_contact');";

if(pg_query($con,$psql) == true){
  echo "<script>alert('You have successfully registered please login and continue..');window.location.href = 'userlogin.php';</script>";

  // Flag for successful insertion
  $insert = true;
}
else{
  echo "ERROR: $psql <br> $con->error";
}

}

?>
<!--End of Script-->

 <div class="containerf">
 
    <div class="title">Registration</div>
    <div class="content">
      <form onsubmit="return signup()" action="registration.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name<sup>*</sup></span>
            <input type="text" id="ename" name="e_name" placeholder="Enter your name" required>
          </div>
          
          <div class="input-box">
            <span class="details">Email<sup>*</sup></span>
            <input type="text" id="email" name="e_email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="ephone" name="e_contact" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password<sup>*</sup></span>
            <input type="password" id="pass" name="e_password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password<sup>*</sup></span>
            <input type="password" id="cpass" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
           <div class="input-box">
          <span class="details"> Address<sup>*</sup></span>
          <input type="text" id="address" name="e_address" placeholder="Enter Address" required >
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" style="font-color:white">
        </div>
      </form>
    </div>
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








