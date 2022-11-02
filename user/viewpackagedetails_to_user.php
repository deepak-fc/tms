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
  height:1000px;
  width: 100%;
  background-color:white;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  overflow-x:hidden;
   display:block;
  height:550px;
  overflow-y:auto;
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

.card-outer{
     display-inline:block;
     width: 100%;
     height:710px;
     box-shadow: 2px 2px 10px black;
     border-radius: 5px; 
     margin: 10px 1px;
    }




/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


.card-wrapper{
   
  max-width: 1100px;
    
  margin: 0 auto;
}
img{
    width: 100%;
    display: block;
}
.img-display{
    overflow: hidden;
    margin-left:5px;
    box-shadow:1px 2px 10px 5px black; 
    
}

 
.img-showcase{
    display: flex;
    width: 100%;
    transition: all 0.5s ease;
}


.product-content{
    padding: 5rem 1rem;
}
.product-title{
    font-size: 3rem;
    text-transform: capitalize;
    font-weight: 700;
    position: relative;
    color: #12263a;
    margin: 1rem 0;
}
.product-title::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 4px;
    width: 80px;
    background: #12263a;
}

.product-link:hover{
    opacity: 0.9;
}
.product-rating{
    color: #ffc107;
}
.product-rating span{
    font-weight: 600;
    color: #252525;
}
.product-price{
    margin: 1rem 0;
    font-size: 2rem;
    font-weight: 700;
}
.product-price span{
    font-weight: 400;
}
.last-price span{
    color: #f64749;
    text-decoration: line-through;
}
.new-price span{
    color: #256eff;
}
.product-detail h2{
    text-transform: capitalize;
    color: #12263a;
    padding-bottom: 0.6rem;
}
.product-detail p{
    font-size: 0.9rem;
    padding: 0.3rem;
    opacity: 0.8;
}
.product-detail ul{
    margin: 1rem 0;
    font-size: 0.9rem;
}
.product-detail ul li{
    margin: 0;
    list-style: none;
    background: url(shoes_images/checked.png) left center no-repeat;
    background-size: 18px;
    padding-left: 1.7rem;
    margin: 0.4rem 0;
    font-weight: 600;
    opacity: 0.9;
}
.product-detail ul li span{
    font-weight: 400;
}
.purchase-info{
    margin-bottom:40px;
}
.form input[type=date]{
  height: 40px;font-size: 16px; border-radius: 5px;
               padding-left: 10px;
  }
.purchase-info input,
.purchase-info .btn{
    border: 1.5px solid #ddd;
    border-radius: 25px;
    text-align: center;
    padding: 0.45rem 0.8rem;
    outline: 0;
    margin-right: 0.2rem;
    margin-bottom: 1rem;
}
.purchase-info input{
  width:60px;
 }
 
.purchase-info .btn{
    cursor: pointer;
    color: #fff;
}


@media screen and (min-width: 992px){
    .card{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 1.5rem;
    }
    .card-wrapper{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .product-imgs{
        display: flex;
        flex-direction: column;
        
    }
    .product-content{
        padding-top: 0;
    }
}

 .containert description{
  position:relative;
  top:10px;
  left:10px;
   } 

.schedule{
 position:relative;
 left:20px; 
 margin-top:40px;
 min-height: 30px;
 border-top-left-radius: 15px;
 border-bottom-left-radius: 15px;
 height:30px;width:880px;
 background-color:#ccc;
 
}


.schedule .day_no{
  color:white;
  background-color:red;
  font-weight:bold;
  height:30px;width:30px;
  position: relative;
       left: 0;
       top: 0;
         line-height:30px;
       text-align: center;
       border-radius: 50%;
 }

.schedule .day_no::before{
   content: "Day";
   font-weight:bold;   
    position: absolute;
    font-size: 1.2rem;
    top: -20px;
    color: black;
    left: 4px;
    text-transform: uppercase;
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
<?php

if(isset($_GET['pid']))
{
  $con = mysqli_connect("localhost", "root", "", "mca_proj");

  // Check for connection success
  
  if(!$con){
      die("connection to this database failed due to" . mysqli_connect_error());
  }

  $p_id=$_GET['pid'];
  $sql="select  p_id,p_name,destination,days,nights,travel_mode,travel_cost,stay_cost,food_cost,total_price,details,img2,img3 from package where p_id='".$p_id."';";
  $result=mysqli_query($con,$sql);
  while($data=mysqli_fetch_array($result))
  {
    $pid=$data['p_id'];
    $_SESSION['p_id']=$pid;
echo"<div class='containert'>
<div class='card-outer'>
 <div class = 'card-wrapper'>
      
<div class = 'card'>
        
<!-- card left -->
        
  <div class = 'product-imgs' >
          
  
   <div class ='img-display' style=''>
 
      
      <div class='img-showcase'>    
      <img src='images/".$data['img2']."'height='350' width='300' >
      </div>     
   </div>
 


   <div class='img-display'>
     <div class='img-showcase'><img src='images/".$data['img3']."' height='300' width='300' >
      </div>
   
   </div>         
  
</div>";
        


//<!-- card right -->
        
echo'<div class = "product-content">
 
         
 <h2 class = "product-title">'.$data['p_id'].' - '.$data['p_name'].'</h2>
          
            
 <div class = "product-rating">
 
  '.$data['days'].' Days '.$data['nights'].' Nights<br>                     
          
 </div>

  
         
 <div class = "product-price">
  
  <p>Price Per-person:          
             
  <p class = "new-price"><span>'.$data['total_price'].'</span></p>
  <!--totAL PRICE-->
 
  <span style="font-size:14px;">Travel mode: By '.$data['travel_mode'].'</span><br>
  <span style="font-size:14px;">Travel Cost: '.$data['travel_cost'].' </span><br>
  <span style="font-size:14px;">Food Cost: '.$data['food_cost'].'</span><br> 
  <span style="font-size:14px;">Stay Cost: '.$data['stay_cost'].'</span><br>           
 </div>';

     
      
 
 echo'<div class = "product-detail">
            
   
  <p style="font-weight:bold;font-size:18px;">'.$data['details'].'</p> 
  
         
 </div>';

  
 




 
    
 
    echo'<a href="enter_booking_details.php"><button  class="btn btn-primary" type="button" style="font-color:white;background:linear-gradient(135deg, #71b7e6, #9b59b6);
                                                     border-radius: 5px;border: none;color: #fff;
                                                     font-size: 18px;font-weight: 500;letter-spacing: 1px;cursor: pointer;margin-top:100px;
                                                     height: 45px;width: 25%;">Book</button></a>';
           
 

 echo'</div>';
  }
 echo'</div>';
    
 echo'</div>';

  
     
 echo'</div>';



 echo'<p>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"
          style="font-color:white;background:linear-gradient(135deg, #71b7e6, #9b59b6);;border-radius: 5px;border: none;color: #fff;
                                                     font-size: 14px;font-weight: 500;letter-spacing: 1px;cursor: pointer;
                                                     height: 40px;width: 25%; ">
   Click to display Schedule
  </button>';


  /*echo'<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"
          style="font-color:white;background:linear-gradient(135deg, #71b7e6, #9b59b6);;border-radius: 5px;border: none;color: #fff;
                                                     font-size: 14px;font-weight: 500;letter-spacing: 1px;cursor: pointer;
                                                     height: 40px;width: 25%; ">
   Click to display Hotels
  </button>';*/
  
  
echo'</p>';
$p_id=$_GET['pid'];
$sql1="select day_1,day_2,day_3,day_4,day_5,days from package,schedule where package.p_id=schedule.p_id and package.p_id='".$p_id."';";
$result1=mysqli_query($con,$sql1);
while($data=mysqli_fetch_array($result1))
{
  $days=$data['days'];

$q=array("$data[day_1]","$data[day_2]","$data[day_3]","$data[day_4]","$data[day_5]");
for($i=0;$i<$days;$i++)
{
  //<!--tour-schedule-->
 
echo'<div class="collapse multi-collapse" id="collapseExample1">';
echo '<div class="card card-body">';

/*echo '<table class="table" style="border-radius:12px 12px 0 0;  
                            box-shadow:0 12px 5px rgba(32,32,32,0.3);position:relative;top:20px;margin-bottom:30px;">';
echo '<tr style="background:linear-gradient(135deg, #71b7e6, #9b59b6);">';

for($j=1;$j<=$days;$j++){
 echo '<td style="padding:12px 20px;">Day'."$j</td>";
 }
echo "<tr>";
for($x=0;$x<$days;$x++){
  echo "<td style='padding:12px 20px;'>$q[$x]</td>";
  }
  
  echo '</tr>';
  echo '</table>';*/


  for($j=0;$j<$days;$j++){
    $i=$j+1;
 echo" <div class='schedule' > 
  <div class='day_no'>
    $i<p style='position:absolute;top:0;left:35px;bottom:5px;color:black;font-size:16px;'></p>";
    echo"</div>";
    echo " ".$q[$j];
   echo" </div><br>";

  }




  

 echo '</div>';
 echo'</div>';  //<!--END SCHEDULE--><!--endofcollapse1-->
}
}


//<!--hotel-info-->
/*
echo'<div class="collapse multi-collapse" id="collapseExample2">
  <br>
  <div class="card card-body">
   <h3>Hotels available or Similar</h3><br>';
   
  echo'<table class="table" style="border-radius:12px 12px 0 0;  
                            box-shadow:0 12px 5px rgba(32,32,32,0.3);position:relative;top:20px;margin-bottom:30px;">

     <tr style="background:linear-gradient(135deg, #71b7e6, #9b59b6); ">
      <th style="padding:12px 15px;">Place</th>
      <th style="padding:12px 15px;">Name</th>
      <th style="padding:12px 15px;">Nights</th>
     
     </tr>';
     $p_id=$_GET['pid'];
     $sql2="select h_name,h_place,stay_period from hotel,package,pack_hotel where hotel.h_id=pack_hotel.h_id and package.p_id=pack_hotel.p_id and package.p_id='".$p_id."';";
     $result2=pg_query($con,$sql2);
     while($data=pg_fetch_array($result2))
     {
     echo'<tr>
      <td style="padding:12px 20px;"><a href="viewuserdetails.php">'.$data['h_place'].'</a></td>
      <td style="padding:12px 20px;">'.$data['h_name'].'</td>
      <td style="padding:12px 20px;">'.$data['stay_period'].'</td>
     
     </tr>';
     }
  echo' </table>';
    
 echo' </div>
   Note : Under unavoidable circumtances Hotels are subject to change, in such condition substitute hotel of similar category is provided.
</div>
</div>';*/
    }
?>

</header>
 
</body>
</html>






