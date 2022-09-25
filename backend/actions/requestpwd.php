<?php
    // session_start();

    if(isset($_POST['send'])){

         include 'db.php';

         $uname = mysqli_real_escape_string($conn,$_POST['uname']);

         if(empty($uname)){

             header("Location:../forgot.php?inputempty");
            exit();


         }else{

             $sql = "SELECT * FROM users WHERE username='$uname'";
            $result = mysqli_query($conn,$sql);
            $result_check = mysqli_num_rows($result);

            if($result_check < 1){
                 header("Location:../forgot.php?invaliduid");
                exit();
            }else{
                while($data = mysqli_fetch_assoc($result)){
                    $usd =$data['username'];
                    $email =$data['email'];
                    $pwd =$data['pwd'];



                    // SEND MAIL FOR FORGETTEN PASSWORD

$to = $email;
$subject = 'Password';
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
$message.=  "<div style='width:90%; height: auto; margin: auto;margin-top: 20px;box-shadow: 0px 0px 3px rgb(253, 253, 253);border-radius: 5px;'>";
$message.=  "<div style='width:100%;'>";
$message.=  "<h3 style='padding: 1px;font-family: Georgia; color:#083d6b'><span style='color:#083d6b'>ELITE KEY</span>CHAIN</h3>";
// LOGO HERE
$message.=  "<img src='https://www.elitekeychain.com/logo-dark.png' alt='logo' width='100' height='65'>";

// LOGO HERE
// $message.=  "<img src='https://www.algrocryptofund.com/imgs/log.jpg'>";
$message.=  "<h4 style='padding: 1px;'>Dear ".$usd.",</h4> ";
$message.= " <br>";
$message.=  "<div style='width:100%;height: auto;box-shadow: 0px 0px 3px rgb(253, 150, 26);margin: auto;border-radius: 6px;'>";

$message.="<p> Your password is: ". $pwd." </p>";

$message.="<p> Your details and informations are secured with our high level encription database. Keep them private and don't share with third party</p>";

$message.= "</div> ";
$message .=  "<p style='text-align:center;'>elitekeychain © 2021 All Rights Reserved</p> ";
$message.=  " </div>";
$message.=  "</div>";
$message.=  "</body></html>";


mail($to, $subject, $message, $headers);








                    
                    header("Location:../login.php?mailforgottensentsuc");
                    exit();

                }
            }




         }









    }else{
          header("Location:../forgotpwd.php?loginempty");
            exit();
    }