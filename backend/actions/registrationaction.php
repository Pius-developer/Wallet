<?php
include 'db.php';

    if(isset($_POST["register"])){
        

        // GET THE DATA from user

        $uname=mysqli_real_escape_string($conn,$_POST['uname']);
        $fname=mysqli_real_escape_string($conn,$_POST['fname']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $country=mysqli_real_escape_string($conn,$_POST['country']);
        $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
        $cpwd=mysqli_real_escape_string($conn,$_POST['cpwd']);
        $btc=mysqli_real_escape_string($conn,$_POST['btc']);

         
        //this is the admin defined values
        $refidd=$_POST['refidd'];
        $amountpaid=0;
         $totalbal = 0;
        $totalwith  = 0;
        $lastdep=0;
        $earn = 0;
        $current= 0;
        $withdrawl  = 0;
        $bonus = 200;
        $refpay="not";
        $date=date("Y/m/d");



        // Coins to update

        $btc = 0;
        $eth = 0;
        $doge = 0;
        $ada = 0;
        $solana = 0;
        $bnb = 0;
        $lite = 0;
        $usdt = 0;
        $shiba = 0;


        // verificatio key
         $vkey = md5(time().$uname); 
    

         $verified = 0;

// comfirm password

if ($cpwd!=$pwd) {
   header ("Location:../register.php?signupempty");
    exit();
}

        
         //VALIDATE
 if (empty($uname)|| empty($fname)|| empty($email)|| empty($country) || empty($pwd)) {

                header ("Location:../register.php?signupempty");
                exit();
             
         }else{
           //VALIDATE EMAIL
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

                header ("Location:../register.php?invalidemail");
                exit();

            }else{

                $sql = "SELECT * FROM users WHERE username='$uname';";
                $result = mysqli_query($conn,$sql);
                $result_check = mysqli_num_rows($result);

                if($result_check > 0){

                    header ("Location:../register.php?uidtaken");
                    exit();

                }else{

                    //harsh the password
                   // $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

                    // unique reference id
                     // $refcode = uniqid($usd,true);

$sql = "INSERT INTO users(username,fullname,email,pwd,country,phone,btcaddr,totalbal,totalwith,lastdeposit,earn,lastwith,registerdate,refpaid,current,bonus,verified, vkey, btc, eth, bnb, doge, solana, lite, usdt, ada, shiba )



 VALUES ('$uname','$fname','$email','$pwd','$country','$phone','$btc','$totalbal','$totalwith','$lastdep','$earn','$withdrawl','$date','$refpay','$current','$bonus', '$verified', '$vkey', '$btc', '$eth', '$bnb', '$doge', '$solana', '$lite', '$usdt', '$ada','$shiba')";

//registeration email
$to = $email;
$subject = 'Elite Key Chain Email Verification';
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

$message = " <html><body style='width:100%;background: rgb(204, 225, 225);'>";
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:orange'><span style='color:orange;'>ELITE KEY </span>CHAIN</h3>";
// LOGO HERE
$message.=  "<img src='https://www.elitekeychain.com/logo-dark.png' alt='logo' width='100' height='65'>";

// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
$message.=  "<h4 style='padding: 1px;'>Hello ". $uname. ",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p style='color:orange;'><strong>WELCOME TO ELITE KEY CHAIN WALLET</strong></p>";


$message.="<p>Your registration was successful and we are glad you are part of us.</p>";


$message.="<p>Your username is:  ". $uname. " </p>";

$message.="<p>Your Password is:  ". $pwd. " </p>";

$message.="<h1 style='text-align:center; color:orange;' >Complete the Process</h1>";

$message.="<a href='https://www.elitekeychain.com/backend/actions/verifyscript.php?vkey=$vkey'  style='background-color:orange; color:orange; padding:10px; border-radius:4px; text-align:center;'> ACTIVATE ACCOUNT </a> ";

$message.="<p>To start immediately, first make a deposit into your wallet.</p>";
$message.="<p>Your financial growth is our outmost interest, follow our terms and conditions and your financial freedom is guaranted.</p>";
$message.="<p>Your details and informations are secured with our high level encription database. Keep them private and don't share with third party</p>";

$message.="<p>For complaints or futher clearification, visit our website: www.elitekeychain.com  and contact us .</p>";
$message.="<p> Start trading right away to enjoy our unlimited benefits!!.</p>";
$message.="<p> Thanks for chosing elite key chain wallet, we are happy to welcome you.</p>";

$message.="<p>You are receiving this emial because you created an Elite Key Chain Wallet account.</p>";
$message.= "</div> ";
$message .=  "<p style='text-align:center;'>elitekeychain © 2022 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);
 mysqli_query($conn,$sql);


                // WOEKING ON THE REFERENCE TABLE

             if($refidd == ''){

               }else{

                      $sql = "INSERT INTO reftable (username,email,fullname,phone,linkrefid,amountpaid) VALUES ('$uname','$email','$fname','$phone','$refidd','$amountpaid')";

                         mysqli_query($conn,$sql);



                         //sending referal mail notifications

                         if($refidd == ""){


                        }else{

                            $sql = "SELECT * FROM users WHERE username='$refidd' ";
                           $result = mysqli_query($conn,$sql);
                            $result_check = mysqli_num_rows($result);

                               if($result_check > 0){

                                      while($data = mysqli_fetch_assoc($result)){
                                        $fnr = $data['username'];
                                         $lnr= $data['fullname'];
                                            $emailr= $data['email'];


                                          // REFERAL EMAIL MSGE

 $to = $emailr;
 $subject = 'REFERAL NOTIFICATION';
 $from = 'support@elitekeychain.com';
 
 // To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
 $headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// // Compose a simple HTML email message


 $message = " <html><body style='width:100%;background: rgb(247, 247, 247);'>";
 $message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 150, 26);border-radius: 5px;'>";
 $message.=  "<div style='width:100%;'>";
 $message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>ELITE KEY</span>CHAIN</h3>";
 // LOGO HERE
 $message.=  "<img src='https://www.elitekeychain.com/logo-dark.png' alt='logo' width='100' height='65'>";

$message.=  "<h4 style='padding: 1px;'>Hello ".$fnr." </h4> ";
 $message.= " <br>";
 $message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

 $message.="<p>".$fname." ".$ln." "." Just registered using your Referral Link</p>";

 $message.= "</div> ";
 $message .=  "<p style='text-align:center;'>elitekeychain © 2021 All Rights Reserved</p> ";
 $message.=  " </div>";
 $message.=  "</div>";
 $message.=  "</body></html>";


 mail($to, $subject, $message, $headers);

  mysqli_query($conn,$sql);




         }
                            }

                         }




                     // END OF REFREAL LINL
                 }












             header ("Location:../login.php?signupsuc");
                 exit();


                }


            }



         }


        
    }else{
        header ("Location:../register.php?error");
        exit();
    }
