
<?php

if(isset($_POST['proceed'])){
          include 'actions/db.php';
           
 
            $uname=$_POST['uname'];
             $plan=$_POST['plan'];
             $email = $_POST['email'];
             $amount = $_POST['amountd'];
              
              $date= date('Y-m-d h:i:s');
              $status="pending";
               $loanid=uniqid();
               $loanbal=0;
               $lastloan=0;


    $sql = "INSERT INTO loanrequest (username,loanbal,lastloan,amount,plan,dateofrequest,statusofrequest,loanid,usdemail) VALUES ('$uname','$loanbal','$lastloan','$amount','$plan','$date','$status','$loanid','$email')";

	             mysqli_query($conn,$sql);

              $mailTo = "jp3050700@gmail.com";
              $header = "From: support@payedcapital.com";
              $sub = "You have recieved a deposit Request from your website";
              // $txt = "username:". $uid ."\n\n". "amount:" . $amount ."\n\n"."plan:". $plan.
              // "\n\n"."type:".$type;        
              
              $txt="Hello, you have a new deposit on your website login and check";
              
              mail($mailTo,$sub,$txt,$header);
              
     }
 ?>



<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Payed Capital- userdashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/xi.png" />
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">



  
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />
</head>

<body>
  <div class="loader"></div>
  
      <!-- Main Content -->
      <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="login-brand" style="color:083d6b">
            Loan Request Successful
            </div>
            <div class="card ">
              
              <div class="card-body">
                
                 
              <div class="form-group text-center">
              <?php
                             
                             if($plan == "Empowerment"){
                                $cal1 = 0.15 * $amount;

                                 echo " 

              <p class='text-align-center' style='text-align:center;color:black;'>Hello <b>".$uname ."</b> you requested a loan of <b>$". $amount . "</b>, and your request is being processed.
                                 </p>";
                        echo " <a href='userdashboard.php' class='btn btn-lg btn-round' style='background-color:#083d6b;color:white'>
                      Done
                    </a>";
                 echo "</div>";
              echo "</div>";
            echo "</div>";

                             }

            ?>
            <div class="simple-footer">
              Copyright &copy; Safetrade 2011-2021
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="components/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="components/bundles/apexcharts/apexcharts.min.js"></script>
  <script src="components/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/sweetalert.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="components/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="components/js/custom.js"></script>
</body>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/621236771ffac05b1d7ac876/1fsbi9hss';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>