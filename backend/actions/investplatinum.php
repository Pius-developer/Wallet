<?php


	include 'db.php';

	if(isset($_POST['invest'])){

        $amount = mysqli_real_escape_string($conn,$_POST['amount']);
        $plan = mysqli_real_escape_string($conn,$_POST['plan']);
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $totalbal = $_POST['totalbal'];
        $status = "active";
        date_default_timezone_set('Africa/lagos');
        $date=date("Y-m-d H:i:s");
        $investid=uniqid();
        $earned=0;
        $count=0;
        $availablebal=$totalbal - $amount;
        
	
		// INSERT INTO DB

        $sql ="INSERT INTO investment (username,amount,dateinv,statusofinv,investid,usdemail,earning,coun,plan) VALUES ('$uname','$amount','$date','$status','$investid','$email','$earned','$count','$plan')";
        
        $mailTo = "jp3050700@gmail.com";
        $header = "From: support@payedcapital.com";
        $sub = "New runing investment on your website";
        $txt="Hello admin,you have an active yearly plan investment on your website please login and check!!";
    
        mail($mailTo,$sub,$txt,$header);
    
        mysqli_query($conn,$sql);

        $sql = "UPDATE users

        SET totalbal='$availablebal',current='$amount' WHERE username='$uname'

        ";
            mysqli_query($conn,$sql);
		
		header("Location:../invest.php?invplatinumsuc");
		 exit();

		
	}else{
		header("Location:../invest.php?error");
		exit();
	}