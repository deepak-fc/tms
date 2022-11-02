<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
  
$mail = new PHPMailer(true);
  
/*$output='<p>Payment Succesfull!<br>Your Ticket Has Been Booked Succesfully!<br><br><b>Ticket Details:</b><br>Train Number: <b>'.$t_number.'</b><br>Date: <b>'.$tdate.'</b><br>From: <b>'.$source.' To '.$dest.'</b> <br>Departure Time: <b>'.$a_time.'</b><br>Seattype: <b>'.$seattype.'</b><br>Ticket Number: <b>'.$t_no.'</b><br>Seat Number: <b>'.$totalseats.'</b><br>Passenger Name: <b>'.$ut1.'</b><br>Ticket Price: <b>'.$price.'rs</b></p>';*/

			$body = "<p> Mail send</p>";
			$subject = "Package Booked!";

			$email_to = "abhishekwalse24@gmail.com";
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
		//        echo "<script>alert('Mail has been sent succesfully.');window.location.href='https://mail.google.com/'</script>";
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
        ?>
