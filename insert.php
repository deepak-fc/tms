<?php


if(isset($_POST["p_id"]))
{
  //session_start();
  //$_SESSION['p_name']='p_name';
    $con = pg_connect("host=localhost dbname=management port=5432 user=postgres password=admin");
    // Check for connection success
    //$p="Select p_id From package where p_name= '".$p_name."';";
    //$p_id= pg_query($con,$p);
 //$s_id = uniqid();
 for($count = 0; $count < count($_POST["p_id"]); $count++)
 {  
    $p_id=$_POST["p_id"][$count];
     $h_name=$_POST["h_name"][$count];
     $stay_period=$_POST["stay_period"][$count];
$h="select h_id from hotel where h_name='".$h_name."';";
$result=pg_query($con,$h);
$data=pg_fetch_array($result);

  $query = "INSERT INTO pack_hotel(p_id,h_id,stay_period) 
  VALUES ('$p_id','$data[h_id]','$stay_period');
  ";
  $statement = pg_query($con,$query);
  //echo "<script>alert('You have successfully  Add Hotels to package..');window.location.href = 'addschedule.php';</script>";

 if(isset($statement))
 {
   
  echo 'ok';
 }
}
}
?>