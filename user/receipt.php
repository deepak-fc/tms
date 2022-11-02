<?php session_start()?>
<html>
<head>
 <style>
 
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');

/* Global */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins';
}

body {
  background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('o-TRAVEL-facebook.jpg');
   background-size:cover;
   background-repeat:no-repeat;
   background-attachment:fixed;
  height: 100vh;
  background-color: #D3E1E1
}

/* The Receipt */
.receipt {
  width: 360px;
  height: 620px;
  background-color: white;
  border-radius: 30px;
  position: relative;
  top: 60%;
  left: 50%;
  margin-top: -360px; /* -half height and width to center */
  margin-left: -180px;
  box-shadow: 14px 14px 22px -18px;
  padding: 20px
}

/* Heading */
.name {
  text-transform: uppercase;
  text-align: center;
  color: #6c8b8e;
  letter-spacing: 10px;
  font-size: 1.8em;
  margin-top: 10px
}

/* Big thank */
.greeting {
  font-size: 21px;
  text-transform: capitalize;
  text-align: center;
  color: #6f8d90;
  margin: 10px 0;
  letter-spacing: 1.2px
}

/* booking info */
.booking p {
  font-size: 13px;
  color: #aaa;
  padding-left: 10px;
  letter-spacing: .7px
}

/* Our line */
hr {
  bbooking: .7px solid #ddd;
  margin: 15px 0;
}

/* booking details */
.details {
  padding-left: 10px;
  margin-bottom: 30px;
  overflow: hidden
}

.details h3 {
  font-weight: 400;
  color: #6c8b8e;
  font-size: 1.5em;
  margin-bottom: 10px
}

/* Image and the info of the booking */






 .package p{
  color: #6f8d90;
  font-weight: 100;
  text-transform: uppercase;
  margin-top: 5px;
  padding-left:2px;
}

.package .info p {
  font-size: 12px;
  color: #aaa;
}

/* Net price */
.details > p {
  color: #6f8d90;
  margin-top: 25px;
  font-size: 15px
}

/* Total price */
.totalprice p {
  padding-left: 10px
}

.totalprice .sub{
  font-size: 13px;
  color: #aaa
}

.totalprice span {
  float: right;
  margin-right: 17px
}

.totalprice .tot {
  color: #6f8d90;
  font-size: 15px
}



 </style>
 <script>
function myFunction()
{
window.print();
}
</script>

</head>
<?php
/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';

*/
$con = mysqli_connect("localhost", "root", "", "mca_proj");

// Check for connection success

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
/*
if(isset($_POST['confirmed'])){


  $mail = new PHPMailer(true);
  if(isset($_SESSION['b_id']))
{
  $b_id=$_SESSION['b_id'];
  $sql1="select c_name,c_email,b_id,b_date,package.p_name,destination,travellig_date,no_of_peoples,food_cost,travel_cost,stay_cost,total_price,(no_of_peoples * food_cost) as ftotal,(no_of_peoples * stay_cost) as stotal,(no_of_peoples * travel_cost) as ttotal,(no_of_peoples * total_price) as total from package,booking,customer where booking.p_id=package.p_id and customer.c_userid=booking.c_userid and booking.b_id='".$b_id."';";
$result1=mysqli_query($con,$sql1);
while($data=mysqli_fetch_array($result1))
{
  $output='<p>Payment Succesfull!<br>Your package Has Been Booked Succesfully!<br><br><b>Booking Details:</b><br>Booking Id: <b>'.$b_id.'</b><br>Booing Date: <b>'.$data['b_date'].'</b><br>Travel Date: <b>'.$data['travellig_date'].'</b><br>Total amount: <b>'.$data['total'].'</b><p>';
  
        $body = $output;
        $subject = "Package Booked!";
  
        $email_to = $data['c_email'];
  ;
      try{
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com"; // Enter your host here
        $mail->SMTPAuth = true;
        $mail->Username = "adityamzadekar2001@gmail.com"; // Enter your email here
        $mail->Password = "cahjekmgilbrwpmd"; //Enter your passwrod here
        $mail->Port = 587;
        $mail->IsHTML(true);
        $mail->From = "adityamzadekar2001@gmail.com";
        $mail->FromName = "Tour Management";
  
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($email_to);
        $mail->send();
             echo "<script>alert('Mail has been sent succesfully.');</script>";
      } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
    }
}
}*/
if(isset($_SESSION['b_id']))
{
  $b_id=$_SESSION['b_id'];
  $sql="select c_name,b_id,b_date,package.p_name,destination,travellig_date,no_of_peoples,food_cost,travel_cost,stay_cost,total_price,(no_of_peoples * food_cost) as ftotal,(no_of_peoples * stay_cost) as stotal,(no_of_peoples * travel_cost) as ttotal,(no_of_peoples * total_price) as total from package,booking,customer where booking.p_id=package.p_id and customer.c_userid=booking.c_userid and booking.b_id='".$b_id."';";
$result=mysqli_query($con,$sql);
while($data=mysqli_fetch_array($result))
{

echo'<body> <div class="receipt">

      <h2 class="name"> Go Travel & Tourism </h2>

      <p class="greeting"> Thank you for booking a trip! </p>

     
      <div class="booking">

        <p> Name:<span style="float:right;">'.$data['c_name'].'</span></p>
        <p> Booking Number :<span style="float:right;">'.$data['b_id'].'</span></p>
        <p> Date :  <span style="float:right;">'.$data['b_date'].'</span></p>

      </div>

      <hr>

      
      <div class="details">

        <h3> Details </h3>

        <div class="package">

          <p>Place: <span style="float:right;">'.$data['destination'].'</span></p>
          <p>Travelling Date: <span style="float:right;">'.$data['travellig_date'].'</span></p>
          <p>Package :<span style="float:right;">'.$data['p_name'].'</span></p>
          <p>Members :<span style="float:right;">'.$data['no_of_peoples'].'</span></p>
        </div>
      
      </div>

     
      <div class="totalprice">

        <p class="sub"> Food Cost: <span> '.$data['ftotal'].' </span></p>
        <p class="sub"> Stay Cost: <span>'.$data['stotal'].' </span></p>
        <p class="sub"> Travel Cost: <span> '.$data['ttotal'].' </span></p>
        <hr>

        <p class="tot"> Total <span> '.$data['total'].' </span> </p>

      </div>
      <button onclick="myFunction()" style="font-color:white;background:linear-gradient(135deg, #71b7e6, #9b59b6);
      border-radius: 5px;border: none;color: #fff;
      font-size: 18px;font-weight: 500;letter-spacing: 1px;cursor: pointer;
      height: 45px;margin: 50px 0;width: 20%;position:absolute;left:140px;
      font-family:Times New Roman", Times, serif;">Print </button>
	  
<a href="userprofile.php"><button style="font-color:white;background:linear-gradient(135deg, #71b7e6, #9b59b6);
      border-radius: 5px;border: none;color: #fff;
      font-size: 18px;font-weight: 500;letter-spacing: 1px;cursor: pointer;
      height: 45px;margin: 50px 0;width: 20%;position:absolute;left:140px;top:680px;
      font-family:Times New Roman", Times, serif;">Home </button></a>
    </div>';
}
}
?>
</body>
</html>