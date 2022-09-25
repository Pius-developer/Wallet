
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
            
             $current= $data['current'];

            
                



        }

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

  <!--begining of new css-->
  <link rel="stylesheet" href="asset/css/app.min.css">
  <link rel="stylesheet" href="asset/bundles/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="asset/bundles/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="asset/bundles/owlcarousel2/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="asset/bundles/summernote/summernote-bs4.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="asset/css/custom.css">

  <!--end of new css-->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/bundles/prism/prism.css">
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">




  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />

 
  <link href="vendorz/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script type="text/javascript">
                        

                        function checkamountbal_with(){
                               
                               // var getamountbalance = document.getElementById("get_amoutbal").innerHTML;
           
                                var walletbals = document.forms['withdrawal']['walletbal'].value;
           
                                 var amounwith = document.forms['withdrawal']['amount'].value;
           
                                 var amountinvestnumber = parseInt(amounwith,10);
           
                               // alert(getamountdeposit);
           
                               if(amountinvestnumber > walletbals){
           
                                   alert("insufficient fund");
           
                                   // getamountdeposit.focus();
           
                                   return false;
           
                               }
           
                               return true;
                       }
           
           
           
           
           
                           </script>
       

</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                  <h6 style="color:#083d6b"><?php date_default_timezone_set('Africa/lagos');
           $date= date('Y-m-d h:i:s');
           echo $date;
           
           ?><br>Your Account Today</h6>
           
          </ul>
        </div>
        
      </nav>
      <div class="main-sidebar sidebar-style-2 " style="background-color:#083d6b">
        <aside id="sidebar-wrapper ">
          <div class="sidebar-brand">
            <a href="#"> <img alt="image" src="components/img/profile1.png" class="header-logo" /> <span class="logo-name" style="color:white;font-size:14px"><?php echo $uname;?></span>
            </a>
          </div>
          <ul class="sidebar-menu ">
        
            <li class="dropdown ">
              <a href="userdashboard.php" class="nav-link" style="color:white"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="deposit.php" class="nav-link" style="color:white"><i
                  data-feather="credit-card"></i><span>Deposit</span></a>
              
            </li>
            <li class="dropdown">
              <a href="dephistory.php" class="nav-link" style="color:white"><i data-feather="refresh-cw"></i><span>Deposit History</span></a>
            </li>
            <li class="dropdown">
              <a href="invest.php" class="nav-link" style="color:white"><i data-feather="bar-chart"></i><span>Investment</span></a>
            </li>
            
            <li class="dropdown">
              <a href="loanrequest.php" class="nav-link" style="color:white"><i data-feather="activity"></i><span>Loan Request</span></a>
            </li>

            <li class="dropdown">
              <a href="investhistory.php" class="nav-link" style="color:white"><i data-feather="refresh-cw"></i><span>
                  Investment History</span></a>
             
            </li>
            <li class="dropdown">
              <a href="requestwith.php" class="nav-link" style="color:white"><i
                  data-feather="layers"></i><span>Request Withdrawal</span></a>
            
            </li>
            <li><a class="nav-link" href="withdrawlhist.php" style="color:white"><i data-feather="refresh-cw"></i><span>Withdrawal History</span></a></li>
            
            <li>
              <a href="profile.php" class="nav-link" style="color:white"><i data-feather="user"></i><span>My Profile</span></a>
             
            </li>
            <li>
              <a href="kyc.php" class="nav-link" style="color:white"><i data-feather="upload-cloud"></i><span>Kyc Verification</span></a>
             
            </li>
            <li>
              <a href="proof.php" class="nav-link" style="color:white"><i data-feather="send"></i><span>Confirm deposit</span></a>
             
            </li>
            <li class="nav-link">
             
              <form action="actions/loggout.php" method="POST"><button type="submit" style="color:red" class="btn" name="logout"><i data-feather="power"></i> Logout</button></form>
            </li>
            
          </ul>
        </aside>
      </div>

        <div class="container">


        
      <div id="google_translate_element" style="font-size: 25px;"></div>


       <script type="text/javascript">
           function googleTranslateElementInit() {
           new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
     }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
    
     </div>

      <!-- Main Content -->
      <div class="main-content">
      
      <?php

//$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//  if(strpos($url, '') == true){
   // echo "<p style='color:orange; text-align:center; font-size:15px;'><i class='fas fa-hourglass-end'></i> Your Starter Plan Investment Was Successful... </p>";
 // }

 // if(strpos($url, '') == true){

  //  echo "<p style='color:orange; text-align:center; font-size:15px;'><i class='fas fa-hourglass-end'></i> Your basic Plan Investment Was Successful....</p>";
 // }


?>
                 <div class="row">
                
            
              <div class="col-xl-3 col-lg-6">
                <div class="card" style="color:white">
                  <div class="card-bg" style="background-color:#083d6b">
                    <div class="p-t-20 d-flex justify-content-between">
                      <div class="col">
                      <h5 class="font-15">Empowerment Loan</h5>
                      <h2 class="mb-3 font-18">15% upfront payments</h2>
                      <h2 class="mb-3 font-18">Duration - 6 Months</h2>
                      <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal1">request</a>

                      </div>
                      
                      <i class="fas fa-chart-bar card-icon col-blue font-30 p-r-30"></i>
                      
                    </div>
                    <canvas id="cardChart3" height="80" class="col-purple"></canvas>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-6">
                <div class="card" style="color:white">
                  <div class="card-bg" style="background-color:#083d6b">
                    <div class="p-t-20 d-flex justify-content-between">
                      <div class="col">
                      <h5 class="font-15">Ultimate Loan</h5>
                      <h2 class="mb-3 font-18">10% upfront payment</h2>
                      <h2 class="mb-3 font-18">Duration - 1 Year</h2>
                      <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">request</a>
                     
                      </div>
                      
                      <i class="fas fa-chart-bar card-icon col-teal font-30 p-r-30"></i>
                    </div>
                    <canvas id="cardChart4" height="80" class="col-purple"></canvas>
                  </div>
                </div>
              </div>




</div>
              <div class="row">
            


              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1" style="background-color:#083d6b">
                  <div class="card-icon l-bg-purple">
                    <i class="fas fa-wallet"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0 col-white">
                          <i class="ti-arrow-up text-success"></i> 
                          $<?php echo $totalbal;?>
                        </h3>
                        <span class="" style="color:white">Total Balance</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             
                     </div>
        </section>

<!-- silver plan modal -->


         <!-- Diamond plan modal -->
       <div class="modal fade " id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content " style="color:black">
              <div class="modal-header" style="background: ;">
                <h5 class="modal-title" id="formModal" style="color:#083d6b">Complete Loan Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="btn btn-danger">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <script type="text/javascript">
             function checkamountbal_diamond(){
              var walletbals = document.forms['investd']['loanbal'].value;
                      var amounwith = document.forms['investd']['amountd'].value;
                      var amountinv = parseInt(amounwith,10);
                 
                    if( amountinv > walletbals){
                      
                        swal('Error', 'you are currently ineligble for this loan plan!', 'error');
                      
                        return false;
                  
                    }return true;
            }
                </script>

             
                <form name="investd" method="POST" action="loanconfirm.php" onsubmit="return checkamountbal_diamond()" class="needs-validation" novalidate="">
                 
                    <!-- <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-wallet"></i>
                        </div>
                      </div>-->
                      <input type="hidden" class="form-control" value="Empowerment" name="plan" readonly="">
              <?php     
                      $sql = "SELECT * FROM investment WHERE username='$uname' ";
    $result= mysqli_query($conn,$sql);
    $result_checker= mysqli_num_rows($result);

    if($result_checker > 0){
        while($data = mysqli_fetch_assoc($result)){

            $loanbal = $data['loanbal'];
    }}

            ?>
                  <div class="form-group">
                    <label style="color:black">Loan Amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                   
                      <input type="hidden" name="uname" value="<?php echo $uname;?>">
                  <input type="hidden" name="email" value="<?php echo $email;?>">
                  <input type="hidden" name="loanbal" value="<?php echo $loanbal;?>">
                      <input type="number" class="form-control" placeholder="enter amount here..." name="amountd" tabindex="7" required autofocus">
                      <div class="invalid-feedback">
                      Please Enter a valid Investment Amount
                    </div>
                    </div>
                  </div>
                  
                  <button type="submit" name="proceed" class="btn m-t-15 waves-effect" tabindex="8" style="background:#083d6b;color:white "><i class="far fa-paper-plane"></i> proceed</button>                </form>
              </form>
                </div>
            </div>
          </div>
        </div>







       <!-- platinum plan modal -->
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="color:black">
              <div class="modal-header" style="">
              <h5 class="modal-title" id="formModal" style="color:#083d6b">Request Failed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="btn btn-danger">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <script type="text/javascript">
             function checkamountbal_platinum(){
                     var walletbal = document.forms['investp']['totalbal'].value;
                      var amound = document.forms['investp']['amountp'].value;
                      var amountchk = parseInt(amound,10);
                    if( amountchk > walletbal){
                        alert("you have insufficient wallet funds");
                        return false;
                    }if(amountchk < 15000){
                      alert("Amount you entered is below the minimum loan amount for this plan");
                        return false;
                   
                    }return true;
               }
                </script>

              <h6>Oops! Loan Plan Unavailable for now, check later</h6>
             
             <!-- <form name="investp" method="POST" action="loanconfirm1.php" onsubmit="return checkamountbal_platinum()" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label style="color:black">Loan Plan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-wallet"></i>
                        </div>
                      </div>-->
                      <input type="hidden" class="form-control" value="ultimate" name="plan" readonly="">
                   
                <!-- <div class="form-group">
                    <label style="color:black">Loan amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                
                      <input type="hidden" name="uname" value="<?php echo $uname;?>">
                  <input type="hidden" name="email" value="<?php echo $email;?>">
              
          <input type="number" class="form-control" placeholder="enter amount here..." name="amountp" tabindex="9" required autofocus">
                      <div class="invalid-feedback">
                      Please Enter a valid Investment Amount
                    </div>
                    </div>
                  </div>
              
                  <button type="submit" name="proceed" class="btn  m-t-15 waves-effect" tabindex="7" style="background: linear-gradient(45deg, #121045, #98258d);color:orange "><i class="far fa-paper-plane"></i>proceed</button>
                </form>
              </div>
            </div>
          </div>
        </div>-->




    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="components/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="components/bundles/apexcharts/apexcharts.min.js"></script>
  <script src="components/bundles/prism/prism.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="components/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="components/js/custom.js"></script>

  <script src="asset/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="asset/js/page/sweetalert.js"></script>
  <script src="asset/js/page/sweetalert.js"></script>
  
  <!-- JS Libraies -->
  <script src="asset/bundles/chartjs/chart.min.js"></script>
  <script src="asset/bundles/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="asset/bundles/summernote/summernote-bs4.js"></script>
  <!-- Page Specific JS File -->
  <script src="asset/js/page/widget-data.js"></script>
  <!-- Template JS File -->
  
  <!-- Custom JS File -->
  
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