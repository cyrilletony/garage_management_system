<?php

$receiver = $_POST['receiver'];
$body = $_POST['body'];
$altbody = $body;
$name = "Hermit Garage Help Desk";
$subject = $_POST['subject'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function mailer($body,$altbody,$sendermail,$sender,$subject){
	try {
	$mail = new PHPMailer(true);
	//$mail->SMTPDebug = 2;									
	$mail->isSMTP();
	$mail->SMTPOptions = array(
	'ssl' => array(
	'verify_peer' => false,
	'verify_peer_name' => false,
	'allow_self_signed' => true
	)
	);											
	$mail->Host	 = 'smtp.mail.yahoo.com;';	
	$mail->Port	 = 587;				
	$mail->SMTPAuth = true;	
	$mail->SMTPSecure = 'tls';							
	$mail->Username = 'mutai.tony@yahoo.com';				
	$mail->Password = 'vwwc fyvz ajks einn';						
							
	

	$mail->setFrom('mutai.tony@yahoo.com', "$sender");		
	//$mail->addAddress("mutai.tony@yahoo.com","$name");
	$mail->addAddress("$sendermail", "$sender");
	
	$mail->isHTML(true);
	//$mail->AddEmbeddedImage("$file", "image", "$file");								
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AltBody = $altbody;
	$mail->send();
	
	header("Location: admin/appointments.php?appointment=success");
	
	} catch (Exception $e) {
		
		header("Location: admin/appointments.php?appointment=failed");
	}


};
mailer($body,$altbody,$receiver,$name,$subject);
?>