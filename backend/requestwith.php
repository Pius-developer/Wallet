
<?php
    session_start();

    include 'actions/db.php';


     $uname = $_SESSION['uid'];

      $ip = $_SERVER['REMOTE_ADDR'];

    $sql = "SELECT * FROM users WHERE username='$uname' ";
    $result= mysqli_query($conn,$sql);
    $result_checker= mysqli_num_rows($result);

    if($result_checker > 0){
        while($data = mysqli_fetch_assoc($result)){

            $name = $data['username'];
            $fname= $data['fullname'];
            $email= $data['email'];
            $pwd= $data['pwd'];

            $country= $data['country'];
            $btc= $data['btcaddr'];
            $totalbal= $data['totalbal'];
            $totalwith= $data['totalwith'];
            $lastdep= $data['lastdeposit'];             
            $earning= $data['earn'];
            $lastwith= $data['lastwith'];

             $date= $data['registerdate'];
            
           

            
                



        }

    }
?>

<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Elite Key Chain Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">
  
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />


  

    <style type="text/css">
    .grace{
      background-image: url(assets/img/a/14b.gif );
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }
  </style>

</head>
  



<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg" ></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky" style="background-color:black;">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                  collapse-btn"> <i data-feather="align-justify" style="color:orange;"></i></a></li>
                <!-- <img alt="image" src="assets/img/bo.png" height="60px"  width="20%" class="header-logo" />-->
           <h6 style="color:orange;"><?php date_default_timezone_set('Africa/lagos');
           $date= date('Y-m-d h:i:s');
           echo $date;
           
           ?><br>Your Account Today</h6>

          </ul>
        </div>
        
      </nav>
      <div class="main-sidebar sidebar-style-2 " style="background-color:black;">
        <aside id="sidebar-wrapper ">
          <div class="sidebar-brand">
            <a href="#"> <img alt="image" src="components/img/profile1.png" class="header-logo" /> <span class="logo-name" style="color:white;font-size:14px"><?php echo $uname;?></span>
            </a>
          </div>
          <ul class="sidebar-menu ">
        
            <li class="dropdown">
              <a href="userdashboard.php" class="nav-link" style="color:orange;"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="deposit.php" class="nav-link" style="color:orange;"><i
                  data-feather="credit-card"></i><span>My Wallet Deposit</span></a>
              
    

            <li class="dropdown">
              <a href="requestwith.php" class="nav-link" style="color:orange;"><i
                  data-feather="layers"></i><span>Request Withdrawal</span></a>
            
            </li>
            <li><a class="nav-link" href="history.php" style="color:orange;"><i data-feather="refresh-cw"></i><span>Transactions History</span></a></li>
            
            <li>
              <a href="profile.php" class="nav-link" style="color:orange;"><i data-feather="user"></i><span>My Profile</span></a>
             
            </li>

            <li>
              <a href="chart.php" class="nav-link" style="color:orange;"><i data-feather="bar-chart"></i><span>Crypto Charts</span></a>
             
            </li>

            <li>
              <a href="bonus.php" class="nav-link" style="color:orange;"><i data-feather="gift"></i><span> My Bonus</span></a>
             
            </li>

            <li>
              <a href="proof.php" class="nav-link" style="color:orange;"><i data-feather="send"></i><span>Confirm deposit</span></a>
             
            </li>
            <li class="nav-link">
             
              <form action="actions/loggout.php" method="POST"><button type="submit" style="color:white; background-color: red; padding: 5px; border-radius: 5px;" class="btn" name="logout"><i data-feather="power"></i> Logout</button></form>
            </li>
            
          </ul>
        </aside>
      </div>
      <!-- Main Content -->





      <div class="main-content">
                 <div class="row ">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
<!--               <script type="text/javascript">
             function checkamountbal_platinum(){
                     var walletbal = document.forms['investp']['earnings'].value;
                      var amound = document.forms['investp']['amountwith'].value;
                      var amountchk = parseInt(amound,10);
                    if( amountchk > walletbal){
                      swal('Insufficient Funds', 'Your withdrawl Request failed due to Insufficient Funds in your earning wallet!', 'error');
                      
                        return false;
                    }if(amountchk == walletbal ){
                      swal('Error', 'sorry you cant withdraw evrything from your account!', 'error');
                        
                      return false;
                   
                    }return true;
               }
                </script>
                </script> -->
                <div class="card-header" style="background:#000;color:white ">
                  
                  <span style="font-weight:bold; color: orange;">Request For a Withdrawal .</span>
    
            </div>
                <div class="card-body">
                <div class="col-lg-6">

                <?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if(strpos($url, 'withsuc') == true){
    echo "<p class='alert alert-primary text-center' style='color:white'><i class='fas fa-hourglass-end'></i> Your withdrawl request has been sent... </p>";
  }

  


?>
</div>
    <form name="investp" method="POST" action="actions/withdrawlaction.php" onsubmit="return checkamountbal_platinum()" class="needs-validation" novalidate="">
                  <div class="row grace">
                  <div class="col-xl-3 col-lg-6">
                <div class="card">
                  <div class="card-body card-type-3" style="background:black;">
                    <div class="row">
                      <div class="col" >
                        <h6 class=" mb-0" style="color:orange;">Assets Balance</h6>
                        <span class="font-weight-bold mb-0">$<?php echo $earning;?></span>
                      </div>
                      <div class="col-auto">
                        <div class="card-circle l-bg-purple text-white">
                          <i class="fas fa-briefcase"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                      <span class="text-nowrap" style="color:orange;">Earning balance</span>
                    </p>
                  </div>
                </div>
              </div>
                    <div class="col-lg-12">
                    <div class="card-body">
              
                     
                    <div class="form-group">
                    <form name="withdraw" method="POST" action="actions/withdrawaction.php" onsubmit="return checkamountbal_withdraw()" class="needs-validation" novalidate="">
                    
                    <div class="custom-control custom-radio">
                      <input type="radio" name="trantype" value="btc" id="customRadio1" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio1" style="color:white"><i class="fas fa-chevron-right" style="color:black"></i> Withdraw Via Bitcoin</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" name="trantype" value="eth" id="customRadio4" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio4" style="color:white"><i class="fas fa-chevron-right" style="color:black"></i> Withdraw Via Ethereum</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio3" name="trantype" value="doge" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio3" style="color:white"><i class="fas fa-chevron-right" style="color:black"></i> Withdraw Via Dogecoin</label>
                    </div>
                 <!--     <div class="custom-control custom-radio">
                      <input type="radio" name="trantype" value="eth" id="customRadio2" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio2" style="color:white"><i class="fas fa-chevron-right" style="color:black"></i> Withdraw Via Litecoin</label>
                    </div> -->
                     <div class="custom-control custom-radio">
                      <input type="radio" name="trantype" value="eth" id="customRadio5" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio5" style="color:white"><i class="fas fa-chevron-right" style="color:black"></i> Withdraw Via Bitcoin Cash</label>
                    </div>
                  <!--    <div class="custom-control custom-radio">
                      <input type="radio" name="trantype" value="eth" id="customRadio6" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio6" style="color:white"><i class="fas fa-chevron-right" style="color:black"></i> Withdraw Via BUSD</label>
                    </div> -->
                     <div class="custom-control custom-radio">
                      <input type="radio" name="trantype" value="eth" id="customRadio7" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio7" style="color:white"><i class="fas fa-chevron-right" style="color:black"></i> Withdraw Via USDT</label>
                    </div><br>
                    <label style="color:orange;">Enter Wallet Address</label>
                    <div class="input-group mb-2">
                        
                        <div class="input-group-prepend">
                          
                          <div class="input-group-text"><i class="fas fa-wallet" style="color:orange;"></i></div>
                        </div>

                        <input type="text" class="form-control" name="btc" id="inlineFormInputGroup" placeholder="enter wallet address here.." required autofocus">
                        <div class="invalid-feedback">
                      Please Enter your wallet address
                    </div>
                      </div>
                    </div>
                   
                    <div class="form-group">
                    <label style="color:orange;">Amount to Withdraw</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="color:orange;">$</span>
                        </div>
                        <input type="hidden" name="earnings" value="<?php echo $earning;?>">
      
                        <input type="hidden" name="uname" value="<?php echo $uname;?>">
                        <input type="hidden" name="email" value="<?php echo $email;?>">
                        <input type="number" class="form-control" placeholder="enter amount here..." name="amountwith" tabindex="3" required autofocus">
                        <div class="invalid-feedback">
                      Please Enter an Amount
                    </div>
                      </div>
                    </div>
                  </div>
               
                </div>
                
                    </div>
                   <button name="proceed" type="submit" class="btn" style="background:orange;color:#000 " tabindex="4"><i class="far fa-credit-card"></i> Withdraw</button>
                   </form>
                  </div>
            </div>
          </div>
           
      
              </div>
            </div>
          </div>
        </section>
        
      
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="components/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="components/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="components/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="components/js/custom.js"></script>
  <script src="asset/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="asset/js/page/sweetalert.js"></script>
</body><!--Start of Tawk.to Script-->

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