<?php

$con = pg_connect("host=localhost dbname=management port=5432 user=postgres password=admin");
if(isset($_SESSION['b_id']))
{

   

   
    $no_of_pepoles=$_SESSION['no_of_peoples'];


    $b_id=$_SESSION['b_id'];
     $t_name=$_POST["t_name"];
     $t_contact=$_POST["t_contact"];
     $addhar_no=$_POST["addhar_no"];
     $t_bod=$_POST["t_bod"];
     $t_gender=$_POST["t_gender"];

  $query = "INSERT INTO tourist(t_name,t_contact,addhar_no,t_bod,t_gender) 
  VALUES ('$t_name','$t_contact','$addhar_no','$t_bod','$t_gender','$b_id');
  ";
  if($statement = pg_query($con,$query))
  {
      echo"<script><alert>details saved successfully...;window.location.href='touristdetails.php';</script>";
  }
  else
  {
    
        echo"<script><alert>details saved successfully...;window.location.href='userbookingpage.php';</script>";
    
  }

}
?>