<?php

if(isset($_POST['proceed'])){
          include 'actions/db.php';
           
             $trantype=$_POST['trantype'];
             $totalbal=$_POST['totalbal'];
            $uname=$_POST['uname'];
             $btc=$_POST['btc'];
             $email = $_POST['email'];
             $amount = $_POST['amount'];
              
              $date= date('Y-m-d h:i:s');
              $status="pending";
               $depositid=uniqid();

    $sql = "INSERT INTO depositrequests (username,amount,dateofdep,statusofdep,depositid,totalbal,usdemail,transtype) VALUES ('$uname','$amount','$date','$status','$depositid','$totalbal','$email','$trantype')";

	             mysqli_query($conn,$sql);

               $mailTo = "Kevinlewy4@gmail.com";

               $header = "From: support@elitekeychain.com";
              $sub = "You have recieved a deposit Request from your website";
              // $txt = "username:". $uid ."\n\n". "amount:" . $amount ."\n\n"."plan:". $plan.
              // "\n\n"."type:".$type;        
              
              $txt="Hello, you have a new deposit on your website login and check!";
              
              mail($mailTo,$sub,$txt,$header);
              
     }
 ?>



<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title> Elite Key Chain payment Gateway</title>
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
  

  <style type="text/css">
    .back{
      background-image: url(assets/img/a/14b.gif );
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }
  </style>
  

</head>

<body class="back" >
  <div class="loader"></div>
 
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="login-brand" style="color:orange;">
            Elite Key Chain Deposit Gateway
            </div>
            <div class="card ">
              
              <div class="card-body">
                
                 
              <div class="form-group text-center">
              <?php





                             
                             if($trantype == "btc"){


                              echo " 
                              <p class='tf' style='color:black'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                              to your Elite Key Chain Wallet via Bitcoin ,Please copy or scan the wallet address below and make a payment of $". $amount." and send exactly the amount to the generated address.
                          
                           
                          <br><br>
                           <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Payment Address</label>
                           <input type='text' class='form-control-plaintext' value='bc1q2uhlr9jrp0qc7y96xtzv3dp92835qmlzruja56' id='copybtc' readonly=''>
                           <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                           <a href='deposit.php' class='btn' style='background-color:orange;color:white'><i data-feather='corner-up-left'></i>Done</a>


                           <h4 style='color:orange;'>Payment Qr code generated</h4>
                           <img src='assets/scan/btc1.jpeg' style='height:230px; width:250px;'><br><br>



                          
                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy bitcoin from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Elite Key Chain wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied BTC address, and comfirm payment from your dashboard.</p>
                            <p> Crypto via: <a href='https://www.crypto.com' target'blank'>Crypto.com</a> to make payment to the copied BTC address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied BTC address, and comfirm payment from your dashboard.</p>
                          
                           </p>

                           ";





                                 echo "<br>";

                                
                             }else if($trantype == "bnb"){


                                 echo " 
                                 <p class='tf' style='color:black'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                                 to your Elite Key Chain Wallet via BNB ,Please copy or scan the wallet address below and make a payment of $". $amount." and send exactly the amount to the generated address.
                             
                              
                             <br><br>
                              <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Payment Address</label>
                              <input type='text' class='form-control-plaintext' value='bnb1pru6j2c46keutm5ytca7hsqynhkucsaqvmpgy8' id='copybtc' readonly=''>
                              <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                              <a href='deposit.php' class='btn' style='background-color:orange;color:white'><i data-feather='corner-up-left'></i>Done</a>


                           <h4 style='color:orange;'>Payment Qr code generated</h4>
                             <img src='assets/scan/bnb1.jpeg' style='height:230px; width:250px;'><br><br>


                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy BNB from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Elite Key Chain wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied BNB address, and comfirm payment from your dashboard.</p>
                            <p> Binance via: <a href='https://www.binance.com' target'blank'>Binance.com</a> to make payment to the copied BNB address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied BNB address, and comfirm payment from your dashboard.</p>

                              ";

                            
                                }else if($trantype == "eth"){
                                  echo " 
                                  <p class='tf' style='color:orange'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                                  to your Elite Key Chain Wallet via Ethereum ,Please copy or scan the wallet address below and make a payment of $". $amount."  and send exactly the amount to the generated address.
                              
                               
                              <br><br>
                               <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Ethereum address</label>
                               <input type='text' class='form-control-plaintext' value='0x00Fd63BA30bFE5E02F5aEDBd65639587e238E47e' id='copybtc' readonly=''>
                               <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                               <a href='deposit.php' class='btn' style='background-color:orange;color:black'><i data-feather='corner-up-left'></i>Done</a><br><br>
                            

                                <h4>Payment Qr code generated</h4>
                                 <img src='assets/scan/eth1.jpeg' style='height:230px; width:250px;'><br><br>



                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy Etherium from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Elite Key Chain wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied ETH address, and comfirm payment from your dashboard.</p>
                            <p> Crypto via: <a href='https://www.crypto.com' target'blank'>Crypto.com</a> to make payment to the copied ETH address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied ETH address, and comfirm payment from your dashboard.</p>


                               ";
 
                               
                                }else if($trantype == "lite"){


                                 echo " 
                                 <p class='tf' style='color:black'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                                 to your Elite Key Chain Wallet via Litecoin ,Please copy or scan the wallet address below and make a payment of $". $amount." 
                             
                              
                             <br><br>
                              <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Payment Address</label>
                              <input type='text' class='form-control-plaintext' value='ltc1qa4fy87sxkpt0xneynwkrngk7y7nk40aq4y6xvj' id='copybtc' readonly=''>
                              <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                              <a href='deposit.php' class='btn' style='background-color:orange;color:white'><i data-feather='corner-up-left'></i>Done</a>
                               
                               <h4>Payment Qr code generated</h4>
                              <img src='assets/scan/lite1.jpeg' style='height:230px; width:250px;'><br><br>


                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy Litecoin from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Elite Key Chain wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied LITECOIN address, and comfirm payment from your dashboard.</p>
                            <p> Binance via: <a href='https://www.binance.com' target'blank'>Binance.com</a> to make payment to the copied LITECOIN address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied LITECOIN
                             address, and comfirm payment from your dashboard.</p>

                              ";

                            
                                }else if($trantype == "doge"){


                                 echo " 
                                 <p class='tf' style='color:black'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                                 to your Elite Key Chain Wallet via Dogecoin ,Please copy or scan the wallet address below and make a payment of $". $amount." 
                             
                              
                             <br><br>
                              <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Payment Address</label>
                              <input type='text' class='form-control-plaintext' value='DQqVbUBLvh9r87W4f7KyXjtLPHi2YG4FF1' id='copybtc' readonly=''>
                              <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                              <a href='deposit.php' class='btn' style='background-color:orange;color:white'><i data-feather='corner-up-left'></i>Done</a>
                             
                              <h4>Payment Qr code generated</h4>
                               <img src='assets/scan/doge1.jpeg' style='height:230px; width:250px;'><br><br>



                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy Dogecoin from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Elite Key Chain wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied DOGE address, and comfirm payment from your dashboard.</p>
                            <p> Binance via: <a href='https://www.binance.com' target'blank'>Binance.com</a> to make payment to the copied DOGE address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied DOGE address, and comfirm payment from your dashboard.</p>

                              ";

                            
                                }else if($trantype == "bch"){


                                 echo " 
                                 <p class='tf' style='color:black'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                                 to your Elite Key Chain Wallet via Bitcoin cash ,Please copy or scan the wallet address below and make a payment of $". $amount." 
                             
                              
                             <br><br>
                              <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Payment Address</label>
                              <input type='text' class='form-control-plaintext' value='qrezrnwzvwzsdtm6u4gkgnhmswexhlmawsh2scjr0z' id='copybtc' readonly=''>
                              <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                              <a href='deposit.php' class='btn' style='background-color:orange;color:white'><i data-feather='corner-up-left'></i>Done</a>

                             <h4>Payment Qr code generated</h4>
                               <img src='assets/scan/bch1.jpeg' style='height:230px; width:250px;'><br><br>


                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy Bitcoin Cash from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Elite Key Chain wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied BCH address, and comfirm payment from your dashboard.</p>
                            <p> Binance via: <a href='https://www.binance.com' target'blank'>Binance.com</a> to make payment to the copied BCH address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied BCH address, and comfirm payment from your dashboard.</p>
                              ";

                            
                                }else if($trantype == "usdt"){


                                 echo " 
                                 <p class='tf' style='color:black'>Hello ".$uname .",You are about to complete a deposit of $". $amount . "
                                 to your Elite Key Chain Wallet via USDT ,Please copy or scan the wallet address below and make a payment of $". $amount." 
                             
                              
                             <br><br>
                              <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Payment Address</label>
                              <input type='text' class='form-control-plaintext' value='0x2fe0b9d700bca499e52abea2aa80c845c7c26ad5' id='copybtc' readonly=''>
                              <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:#green;color:white'><i data-feather='copy'></i>copy</button>
                              <a href='deposit.php' class='btn' style='background-color:orange;color:white'><i data-feather='corner-up-left'></i>Done</a>
                         

                                <h4>Payment Qr code generated</h4>
                                <img src='assets/scan/usdt1.jpeg' style='height:230px; width:250px;'><br><br>





                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy USDT from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Elite Key Chain wallet</p>

                          <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied USDT address, and comfirm payment from your dashboard.</p>
                            <p> Binance via: <a href='https://www.binance.com' target'blank'>Binance.com</a> to make payment to the copied USDT address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied USDT address, and comfirm payment from your dashboard.</p>



                              ";

                            
                                }else if($trantype == "shiba"){
                                  echo " 
                                  <p class='tf' style='color:orange'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                                  to your Elite Key Chain Wallet via shiba Inu,Please copy or scan the wallet address below and make a payment of $". $amount."  and send exactly the amount to the generated address.
                              
                               
                              <br><br>
                               <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Shiba address</label>
                               <input type='text' class='form-control-plaintext' value='0x00Fd63BA30bFE5E02F5aEDBd65639587e238E47e' id='copybtc' readonly=''>
                               <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                               <a href='deposit.php' class='btn' style='background-color:orange;color:black'><i data-feather='corner-up-left'></i>Done</a><br><br>
                            

                                <h4>Payment Qr code generated</h4>
                                 <img src='assets/scan/shiba1.jpeg' style='height:230px; width:250px;'><br><br>



                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy SHIBA INU from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Elite Key Chain wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied Shiba address, and comfirm payment from your dashboard.</p>
                            <p> Crypto via: <a href='https://www.crypto.com' target'blank'>Crypto.com</a> to make payment to the copied Shiba address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied Shiba address, and comfirm payment from your dashboard.</p>


                               ";
 
                               
                                }else if($trantype == "sa"){


                                 echo " 
                                 <p class='tf' style='color:black'>Hello ".$uname .",You are about to complete a deposit of $". $amount . "
                                 to your Elite Key Chain Wallet via Saitama ,Please copy or scan the wallet address below and make a payment of $". $amount." 
                             
                              
                             <br><br>
                              <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Payment Address</label>
                              <input type='text' class='form-control-plaintext' value='0x00Fd63BA30bFE5E02F5aEDBd65639587e238E47e' id='copybtc' readonly=''>
                              <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:#green;color:white'><i data-feather='copy'></i>copy</button>
                              <a href='deposit.php' class='btn' style='background-color:orange;color:white'><i data-feather='corner-up-left'></i>Done</a>
                         

                                <h4>Payment Qr code generated</h4>
                                <img src='assets/scan/sa1.jpeg' style='height:230px; width:250px;'><br><br>





                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy Saitama from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Elite Key Chain wallet</p>

                          <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied Saitama address, and comfirm payment from your dashboard.</p>
                            <p> Binance via: <a href='https://www.binance.com' target'blank'>Binance.com</a> to make payment to the copied Saitama address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied Saitama address, and comfirm payment from your dashboard.</p>



                              ";

                            
                                }else if($trantype == "cada"){
                                  echo " 
                                  <p class='tf' style='color:orange'>Hello ".$uname .", You are about to complete a deposit of $". $amount . "
                                  to your Elite Key Chain Wallet via Cardono,Please copy or scan the wallet address below and make a payment of $". $amount."  and send exactly the amount to the generated address.
                              
                               
                              <br><br>
                               <label style='color:orange'><i class='far fa-credit-card'></i>Generated Unique Cardono address</label>
                               <input type='text' class='form-control-plaintext' value='bnb1pru6j2c46keutm5ytca7hsqynhkucsaqvmpgy8' id='copybtc' readonly=''>
                               <button type='button' id='clickcopy' onClick='mycopy()' class='btn' style='background-color:green;color:white'><i data-feather='copy'></i>copy</button>
                               <a href='deposit.php' class='btn' style='background-color:orange;color:black'><i data-feather='corner-up-left'></i>Done</a><br><br>
                            

                                <h4>Payment Qr code generated</h4>
                                 <img src='assets/scan/cardono1.jpeg' style='height:230px; width:250px;'><br><br>



                          <h4 style='color:orange;'>FAQ</h4>
                          <p style='color:yellowgreen;'>Where do i buy Cardono from?</p>
                          <p>Copy your unique wallet address and visit either of these platforms to purchase bitcoin and store in your Elite Key Chain wallet</p>
                           <h5 style='color:orange;'>Platforms</h5>
                           <p> Trust wallet via: <a href='https://www.trustwallet.com' target'blank'>trustwallet.com</a> to make payment to the copied Cardono address, and comfirm payment from your dashboard.</p>
                            <p> Crypto via: <a href='https://www.crypto.com' target'blank'>Crypto.com</a> to make payment to the copied Cardono address, and comfirm payment from your dashboard.</p>
                            <p> Luno via: <a href='https://www.luno.com' target'blank'>Luno.com</a> to make payment to the copied Cardono address, and comfirm payment from your dashboard.</p>


                               ";
 
                               
                                }
                          
                          
                          
                          
                          
                          ?>
                        <script type="text/javascript">
                            
                            function mycopy(){
                                var copyTxt = document.getElementById("copybtc");
                                copyTxt.select();
                                document.execCommand("copy");
                            }


                            </script>

            <div class="simple-footer">
              Copyright &copy; Elite Key Chain 2021
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
</body>

</html>