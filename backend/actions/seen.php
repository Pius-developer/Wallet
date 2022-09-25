<?php
	
	  session_start();
	 include 'db.php';

	  // $walletbal = $_SESSION['walletbal'];
	   // $username = $_SESSION['usd'];
   // $useremail = $_SESSION['email'];

	  if(isset($_POST["seen"])){

	  $depositid =mysqli_real_escape_string($conn,$_POST['depid']);

	  $sql = "SELECT * FROM depositrequests WHERE depositid='$depositid' ";
	$result= mysqli_query($conn,$sql);
	$result_checker= mysqli_num_rows($result);

	if($result_checker > 0){

		while($data = mysqli_fetch_assoc($result)){

      $usd = $data['username'];
      echo $usd; 
			$amount = $data['amount'];
			$dateofdep = $data['dateofdep'];
			$statusofdep = $data['statusofdep'];
			$usdemail = $data['usdemail'];
			$depositid = $data['depositid'];
			$walletbal = $data['totalbal'];

			// $fn = $data['firstname'];
			// $ln = $data['lastname'];

			
			
			$latestranstactstatus="Approved";

			// CALACULATE DEPOSIT PLUS CURRENT BALANCE
			// $walletbal = $data['walletbal'];

			$currentwalletbalance=$walletbal+$amount;

			$refbonusfirst = 0.1 * $amount;


			// UPDATE TRANSACTION STATUS
			 $sql = "UPDATE depositrequests

        SET statusofdep='$latestranstactstatus', totalbal='$currentwalletbalance'

        WHERE depositid='$depositid'

        ";




$to = $usdemail;
$subject = 'Credit Alert';
$from = 'support@elitekeychain.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message


$message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>ELITE KEY</span>CHAIN WALLET</h3>";
// LOGO HERE
$message.=  "<img src='https://www.elitekeychain.com/logo-dark.png' alt='logo' width='100' height='65'>";

$message.=  "<h4 style='padding: 1px;'>Dear ". $usd .",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p><strong>Your Deposit of $".$amount." has been confirmed. </strong></p>";


$message.="<p>Please, log into your dashboard to comfirm.</p>";

$message.="<p>Thanks for chosing Elite key chain wallet.</p>";



$message.= "</div> ";
$message .=  "<p style='text-align:center;'>elitekeychain © 2021 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);









		$currentwalletbal =  $walletbal + $amount;


         mysqli_query($conn,$sql);


          $sql = "UPDATE users

        SET totalbal='$currentwalletbal'

        WHERE username='$usd'

        ";
         mysqli_query($conn,$sql);


         // INSERTING INTO CROB JOB

         // $count = 0;
         // $statusofinvest = "Processing";
         // $profit=0;

         // $sql ="INSERT INTO cronjob (usd,plan,amount,statusofdep,depositid,usdemail,count,profit) VALUES ('$usd','$plan','$amount','$statusofinvest','$depositid','$usdemail','$count',$profit)";

         //  mysqli_query($conn,$sql);



         $sql = "SELECT * FROM reftable WHERE username='$usd' ";
                            $result = mysqli_query($conn,$sql);
                             $result_check = mysqli_num_rows($result);

                              if($result_checker > 0){

                              	while($data = mysqli_fetch_assoc($result)){


                              		$linkrefid = $data['linkrefid'];
                                      // $lnr= $data['lastname'];
                                      //  $emailr= $data['email'];



                             $sql = "SELECT * FROM users WHERE username='$linkrefid' ";
                            $result = mysqli_query($conn,$sql);
                             $result_check = mysqli_num_rows($result);

                              if($result_checker > 0){

                              	while($data = mysqli_fetch_assoc($result)){

                              		$usdd = $data['username'];
                              		$walletbal = $data['totalbal'];
                                      $emailr= $data['email'];
                                        $refpaid = $data['refpaid'];

                                        $fname= $data['fullname'];
                                       

                                       if($refpaid == 1){


                                       }else{

                                         $sql = "UPDATE reftable

                                          SET amountpaid='$refbonusfirst'

                                            WHERE username='$usd'

                                                 ";

                                            mysqli_query($conn,$sql);

                                       	$refbonusadding = $walletbal + $refbonusfirst;
                                       	$refstatus = 1;


          $sql = "UPDATE users

        SET totalbal='$refbonusadding',refpaid='$refstatus'

        WHERE username='$usdd'

        ";






$to = $emailr;
$subject = 'Referral Bonus';
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
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#ffc000'><span style='color:white'>ELIET KEY</span>CHAIN WALLET</h3>";
// LOGO HERE
$message.=  "<img src='https://www.elitekeychain.com/logo-dark.png' alt='mars-asset' width='100' height='65'>";
// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
$message.=  "<h4 style='padding: 1px;'>Hello ".$fname." ". $usdd. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p><strong>You have successfully received a referral bonus of $</strong>  ".$refbonusfirst."  from  ".$usd." Deposit.</p>";


$message.="<p>Refer and earn more!</p>";


$message.="<p>Thank you for partnering with us.</p>";


//$message.="<p>from CRYPT BLOCK PAY</p>";

$message.= "</div> ";
$message .=  "<p style='text-align:center;'>elitekeychain ©2021 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);
         mysqli_query($conn,$sql);










                                       }



                              	}



                              }






                              	}







                              }

          













        header ("Location:../admindepositrequest.php?suc");
        exit();








		}


	}


	  }else{
	  	header ("Location:../admindepositrequest.php?error");
        exit();
	  }