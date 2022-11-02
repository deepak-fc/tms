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

   overflow-x:hidden;
   display:block;
  height:520px;
  overflow-y:auto;
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



form .button .btn{
  
  font-color:white;background:linear-gradient(135deg, #71b7e6, #9b59b6);
                                                     border-radius: 5px;border: none;color: #fff;
                                                     font-size: 18px;font-weight: 500;letter-spacing: 1px;cursor: pointer;
                                                     height: 45px;margin: 35px 0;width: 25%;position:relative;
                                                     left:10px;
 }
form .button .btn{
   font-color:white; 
   height: 45px;
   margin: 35px 0;
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
 form .button .btn:hover{
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

.gender-details .gender,
  .gender-details .gender-title
  {color:white;}
 
form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
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
    <li><a href="viewpackages_to_user.php">View Packages</a></li>
       

     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="userprofile.php">My Profile</a>
		  <?php
                
                if(isset($_SESSION['adminuname'])){ 

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

<?php
$con = mysqli_connect("localhost", "root", "", "mca_proj");

// Check for connection success

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
if(isset($_SESSION['b_id']))
{
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $b_id=$_SESSION['b_id'];
  $t_name=$_POST['t_name'];
  $t_contact=$_POST['t_contact'];
  $addhar_no=$_POST['addhar_no'];
  $t_dob=$_POST['t_dob'];
  $t_gender=$_POST['t_gender'];
  $num=$_SESSION['no_of_peoples'];
  $i=1;
  $psql = "INSERT INTO tourist(t_name,t_contact,addhar_no,t_dob,t_gender,b_id) 
  VALUES ('$t_name','$t_contact','$addhar_no','$t_dob','$t_gender','$b_id');";

if(mysqli_query($con,$psql) == true){

  echo "<script>alert('You have successfully registered please login and continue..');</script>";

  // Flag for successful insertion
  $insert = true;
}
else{
  echo "ERROR: $psql <br> $con->error";
}

}
}

?>
 

 <div class="containerf">
 
 
    <div class="title">Member Details</div>
    <div class="content">
      <form action="touristdetails.php" onsubmit="return signup()" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name<sup>*</sup></span>
            <input type="text" name="t_name" placeholder="Enter your name" required>
          </div>
          
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="t_contact" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Aadhar Number<sup>*</sup></span>
            <input type="text" name="addhar_no" placeholder="Enter aadhar number" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Birth<sup>*</sup></span>
            <input type="date" name="t_dob" placeholder="Enter your password" required>
          </div>
          
        </div>
        <div class="gender-details">
            <input type="radio" name="t_gender" value="Male" id="dot-1">
            <input type="radio" name="t_gender" value="Female" id="dot-2">
            <input type="radio" name="t_gender" value="Others" id="dot-3">
            <span class="gender-title">Gender</span>
            <div class="category">
             <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender"name="t_gender" >Male</span>
             </label>
             <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender"name="t_gender">Female</span>
             </label>
            <label for="dot-3">
             <span class="dot three"></span>
             <span class="gender" name="t_gender">Other</span>
            </label>
          </div>  
        </div>

        
            <div class="button">
            <a href="touristdetails.php"><button class="btn btn-primary" type="submit" style="">Add</button></a>
             </div>
 <div class="button">
            <a href="userbookingpage.php"><button class="btn btn-primary" type="button" style="">Submit</button></a>
           </div>
 

      </form>
    </div>
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






























