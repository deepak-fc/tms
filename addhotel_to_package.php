<?php session_start() ?>
<!DOCTYPE html>
<html>
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
  left:300px;
  top:100px;
  max-width: 1000px;
  width: 100%;
  background-color:white;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  overflow-x:hidden;
   display:block;
  height:520px;
  overflow-y:auto;
    
}




 .containert .button input{
  font-color:white;background:linear-gradient(135deg, #71b7e6, #9b59b6);
                                                     border-radius: 5px;border: none;color: #fff;
                                                     font-size: 18px;font-weight: 500;letter-spacing: 1px;cursor: pointer;
                                                     height: 45px;margin: 25px 0;width: 20%;
                                                    

 } 

 .containert .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 

.containert input:focus,
.containert input:valid{
  border-color: #9b59b6;
}

 .user-details p{
  font-size:20px;
  font-family:"Times New Roman", Times, serif;
   }

.user-details input[type=text]{
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

 .user-details textarea{
  margin-bottom: 15px;
  width: 50%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
  height:100px;
  border-color: #9b59b6;
  } 





 .file-upload{
    display:inline-flex;
    align-items:center;
    font-size:15px;
    }

   .file-upload__input{
    display:none;
    }

    .file-upload__button{
    
     background:linear-gradient(135deg, #71b7e6, #9b59b6);
     border:none;border-radius:5px;outline:none;
     font-size: 12px;cursor: pointer;
     height: 30px;width:100px;
     margin-right:15px;margin-left:5px;
     color:white;
     
     }
    
    .file-upload__button:hover{
      background:linear-gradient(-135deg, #71b7e6, #9b59b6);
     }

    .file-upload__label{
     max-width:250px;
     font-size:14px;
     text-overflow:ellipsis;
     overflow:hidden;
     white-space:nowrap;
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
<script src="insert.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylee.css">
</head> 
<body style="">
<header class="header">
  <nav class="navbar navbar-style">
   <div class="container">
    <div class="navbar-header">
    <a href="admin.php" ><img class="logo" src="TWlogo.jpg" style="height:40px;padding:2px 10px;"></a> 
    </div>
  <div class="collapse navbar-collapse" id="micon">
    <ul class="nav navbar-nav navbar-right">
    <li><a href="packagesavailable.php">View Packages</a></li>
    <li><a href="addtourpackage.php">Add packages</a></li>
    <li><a href="hotelsavailable.php">View Hotels</a></li>
    <li><a href="viewbookingdetails.php">View Booking</a></li>
    <li><a href="viewtotalusers.php">View User Details</a></li>

    
   </ul>
   </div>
   
   </div>
  
  </nav>

  

<div class="containert">
 
 
<form method="post" id="insert_form">
 <h3 style="position:relative;left:360px;font-family:Times New Roman", Times, serif;>Add Hotel</h3>
 
 <br><br>

<div class="user-details">

<table class="table" style="border-radius:12px 12px 0 0; box-shadow:0 12px 5px rgba(32,32,32,0.3);position:relative;top:30px;" id="item_table">

 <tr style="background: linear-gradient(135deg, #71b7e6, #9b59b6); ">
     <th style="padding:12px 15px;">Package Id</th>
     <th style="padding:12px 15px;">Hotel Id</th>
     <th style="padding:12px 15px;">Stay Period</th>
     <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>     
 </tr>
</table>
<div class="button" >
          <input  class="btn btn-info" type="submit" name="submit" value="Insert" style="position:relative;left:350px;"/>
 </div>
 
 </form>
 <div class="button" >
         <a href="addschedule.php"> <input class="btn btn-primary" type="button" value="Add Schedule" style="position:absolute;left:200px;">
 </div>  
 <div class="button" >
          <input class="btn btn-primary" type="button" value="Logout" style="position:relative;left:500px;">
 </div>
 


 </div>  <!---end of containert-->
 
 

 
</header>
<div class="containermarq" style="
  position:fixed;
  bottom:5px;
  left: 200px;
  max-width: 1100px;
  height:20px;
  width: 100%;
  background-color:white;
  border-radius: 15px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);">
 <marquee width="100%" direction="left" height="90%" style="font-family: Garamond, serif;font-weight:bold;">
    Welcome to go Travel & Tourism Ltd..!
</marquee>

</div>
 
</body>
</html>