<?php
include("db.php");
$name = $_POST['name'];
$email = $_POST['useremail'];
$issue = $_POST['issue'];
$model = $_POST['model'];
$phone = $_POST['phone'];
$description = $_POST['description'];
$date = date("Y-m-d");

$date2 = new DateTime(null, new DateTimeZone('Africa/Nairobi'));
$time = $date2->format('H:i:s');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$q = "INSERT INTO appointments(name,date,email,carmodel,phone,issue,time,image,description) VALUES('$name','$date','$email','$model','$phone','$issue','$time','$target_file','$description')";
$conn->query($q);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';



$subject1 = 'Hermit Garage Help Desk';
$subject2 = $name.' Needs Help';
$body1 = "<hr><p style='font-size:16px;'>Hello, $name,<br> Your issue: $issue about car model: $model, has been recieved here at Hermit Garage and we'll reach you as soon as possible</p><br><p style='font-size:16px;'>Your description: <i><p style='font-size:16px;'>\"$description\"</p></i></p>";
$altbody1 = "Hello, $name, my issue is: $issue about car model: $model, has been recieved at here Hermit Garage and we'll reach you as soon as possible. Your description: $description";
$body2 = "<hr><p style='font-size:16px;'>Hi, i am $name, My car model is: $model, has an issue : $issue and I would like to ask for some assistance.</p><hr><p>$description</p>";
$altbody2 = "Hi, i am $name, My car model is: $model, has an issue : $issue and I would like to ask for some assistance. $description";

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
	
	header("Location: appointment.php?appointment=success");
	
	} catch (Exception $e) {
		
		header("Location: appointment.php?appointment=failed");
	}


};

mailer($body1,$altbody1,$email,'Hermit Garage',$subject1);
mailer($body2,$altbody2,'mutai.tony@yahoo.com',$name,$subject2);
?>
