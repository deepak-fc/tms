<?php
$con = mysqli_connect("localhost", "root", "","mca_proj");

// Check for connection success

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

$b_id=$_GET['b_id'];
$sql="INSERT INTO cancellation(b_id) VALUES('$b_id');";
if($query=mysqli_query($con,$sql))
{
    echo "<script>alert('Request has been sent..');
    window.location.href = 'userprofile.php';
    </script>";
}

?>