<!DOCTYPE html> 
<head> 
<meta charset="utf-8"> 
<title>Tour managment</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylee.css">
<link href="bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="C:\xampp\htdocs\New folder\css\bootstrap.min.css" rel='stylesheet' type='text/css'/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="index.js"> </script>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="index.js"> </script>
<style>
body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('o-TRAVEL-facebook.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>
</head> 

<body>
<!--java Script-->
<?php
  
  
  $con = mysqli_connect("localhost", "root", "","mca_proj");
  // Check for connection success
  
  if(!$con){
      die("connection to this database failed due to" . mysqli_connect_error());
  }
  else{   
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      $uname=$_POST['username'];
      $pass=$_POST['password'];
      $sql="Select  c_userid,c_email,c_password from customer where c_email = '$uname'";
 
      $result=mysqli_query($con,$sql);
      $rpass="";
      while($row=mysqli_fetch_array($result)){
        $rpass=$row['c_password'];
        $fname=$row['c_email'];
        $c_userid=$row['c_userid'];
      }
        if($rpass==$pass){
          session_start();
          $_SESSION['c_userid']=$c_userid;
          echo "<script>
        window.location.href = 'userprofile.php';
        </script>";
        }
        else{
         echo "<script> window.alert('password incorrect');</script>";
        }
    }
  }
?>
<!--end of script-->


<!--html login-->
    <div id="login">
        <h3 class="text-center text-white pt-5" style="Position:relative;top:100px;">User Login</h3>
        <div class="container ">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" onsubmit="return UserLogin1()" action="userlogin.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id=" password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Log In">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="registration.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>


</html>
