<?php


	include 'db.php';

	if(isset($_POST['upload'])){

        $uname = mysqli_real_escape_string($conn,$_POST['uname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
		date_default_timezone_set('Africa/lagos');
        $date=date("Y-m-d H:i:s");
		$kycid=uniqid();
		// IMAGE 
        $selfie = $_FILES['selfie']['name'];
		$validid = $_FILES['validid']['name'];

        //path to file
        $target1 = "../kyc/".basename($_FILES['selfie']['name']);
        
        $target2 = "../kyc/".basename($_FILES['validid']['name']);

		// INSERT INTO DB

		$sql ="INSERT INTO kyc (dateup,idcard,Selfie,username,kid) VALUES ('$date','$validid','$selfie','$uname','$kycid')";

		move_uploaded_file($_FILES['validid']['tmp_name'], $target2);

		mysqli_query($conn,$sql);
        
                // send mail to admin..
      $mailTo = "kelvinlewy4@gmail.com";//change the email address
      $header = "From: support@elitekeychain.com";
      $sub = "New Verification Request from: ".$username;
      $txt = "Hello Admin, you have a new verification request from: "."\n\n"."Username: ".$username."\n\n"."Email: ".$useremail;
     
      mail($mailTo,$sub,$txt,$header);

        //registeration email
$to = $email;
$subject = 'Verification';
$from = 'support@elitekeychain.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
// <img src="http://www.yourserver.com/myimages/image1.jpg

$message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#ffc000'><span style='color:white'>KYC</span> VERIFICATION</h3>";
// LOGO HERE

$message.=  "<img src='https://www.elitekeychain.com/logo-dark.png' alt='logo' width='100' height='65'>";

// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
$message.=  "<h4 style='padding: 1px;'>Hello ". $uname. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p>Your kyc verification has been received and will be reviewed shortly</p>";

$message.= "</div> ";
$message .=  "<p style='text-align:center;'>elitekeychain © 2021 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);



		header("Location:../kyc.php?uploadsuc");
		 exit();

		
	}else{
		header("Location:../kyc.php?error");
		exit();
	}