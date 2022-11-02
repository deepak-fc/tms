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
    left: 300px;
    top: 100px;
    max-width: 1000px;
    width: 100%;
    background-color: white;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    overflow-x: hidden;
    display: block;
    height: 550px;
    overflow-y: auto;

}

.containert .bg {
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
    border-radius: 5.2px 0px 0px 5.2px;
    height: 40px;
    width: 30px;
    position: absolute;
    left: 350.3px;
    top: 71.2px;


}

.containert.table {
    text-align: center;
    position: absolute;
    z-index: 2;
    left: 20px;
    top: 200px;
    transform: translate(-50%, -50%);
    width: 100%;
    max-width: 900px;
    height: 500px;



}

.table th,
td {
    padding: 12px 15px;
    font-family: "Times New Roman", Times, serif;
    text-transform: UPPERCASE;

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
    margin: 35px 0;
    width: 25%;
    position: relative;
    left: 200px;

}

.containert input:focus,
.containert input:valid {
    border-color: #9b59b6;
}

.containert .button input:hover {
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

 <body>
     <header class="header">
         <nav class="navbar navbar-style">
             <div class="container">
                 <div class="navbar-header">
                     <a href="admin.php"><img class="logo" src="TWlogo.jpg" style="height:40px;padding:2px 10px;"></a>
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
             <h3 style="position:relative;left:360px;font-family:Times New Roman" , Times, serif;">Hotels Available</h3>
             <form action="hotelsavailable.php" method="Post">
                 <input type="text" name="h_name" value="" placeholder="Enter Hotel Name" style="position:relative;left:320px;top:20px;height: 40px;font-size: 16px; border-radius: 5px;
               padding-left: 35px;">


                 <div class="bg">
                     <button
                         style="width:100%;height:100%;padding-right:20px;background: linear-gradient(135deg, #71b7e6, #9b59b6);border:none;border-radius:5px;">
                         <i class="fa fa-search" aria-hidden="true"></i>
                     </button>
                 </div>

                 &nbsp;&nbsp;

                 <input type="submit" name="submit" value="Search"
                     style="position:relative;left:320px;top:20px;border-color:gray;">
             </form>
             <?php
echo'<table class="table" style="border-radius:12px 12px 0 0;  
                            box-shadow:0 12px 5px rgba(32,32,32,0.3);position:relative;top:30px;
                            ">

 <tr style="background: linear-gradient(135deg, #71b7e6, #9b59b6); ">
     <th style="padding:12px 15px;">Hotel_id</th>
     <th style="padding:12px 15px;">Name</th>
     
     <th style="padding:12px 15px;">Place</th>
    
     <th style="padding:12px 15px;">Description</th>
    
 </tr>';
 $con = pg_connect("host=localhost dbname=management port=5432 user=postgres password=admin");

 // Check for connection success
 
 if(!$con){
     die("Connection to database failed");
 }
 
 {
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
  $h_name=$_POST['h_name'];
  $sql="select * from hotel where h_name='".$h_name."';"; 
  $result=pg_query($con,$sql);
  while($data=pg_fetch_array($result))
{

 echo'<tr>
     <td style="padding:12px 20px;">'.$data[0].'</td>
     <td style="padding:12px 20px;">'.$data[1].'</td>
     <td style="padding:12px 20px;">'.$data[2].'</td>
     <td style="padding:12px 20px;">'.$data[3].'</td>
     
   
 </tr>';
}

echo'</table>';
 }
else
{
  $sql="select * from hotel;"; 
  $result=pg_query($con,$sql);
  while($data=pg_fetch_array($result))
{

 echo'<tr>
     <td style="padding:12px 20px;">'.$data[0].'</td>
     <td style="padding:12px 20px;">'.$data[1].'</td>
     <td style="padding:12px 20px;">'.$data[2].'</td>
     <td style="padding:12px 20px;">'.$data[3].'</td>
     
   
 </tr>';
}

echo'</table>';
 }
}

?>

             <div class="button">

                 <a href="add_new_hotel.php"><input type="submit" value="Add Hotel" style=""></a>
                 <input type="submit" value="Logout">
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