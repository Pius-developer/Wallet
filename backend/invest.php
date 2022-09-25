
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
  <title>Payed Capital - userdashboard</title>
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
                  data-feather="layers"></i><span>Request Withdrawl</span></a>
            
            </li>
            <li><a class="nav-link" href="withdrawlhist.php" style="color:white"><i data-feather="refresh-cw"></i><span>Withdrawl History</span></a></li>
            
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
             
              <form action="actions/loggout.php" method="POST"><button type="submit" style="color:white" class="btn" name="logout"><i data-feather="power"></i> Logout</button></form>
            </li>
            
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
     
      <?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if(strpos($url, 'invsilversuc') == true){
    echo "<p style='color:orange; text-align:center; font-size:15px;'><i class='fas fa-hourglass-end'></i> Your Silver Plan Investment Was Successful... </p>";
  }

  if(strpos($url, 'invgoldsuc') == true){

    echo "<p style='color:orange; text-align:center; font-size:15px;'><i class='fas fa-hourglass-end'></i> Your Gold Plan Investment Was Successful....</p>";
  }



  if(strpos($url, 'invplasuc') == true){

    echo "<p style='color:orange; text-align:center; font-size:15px;'><i class='fas fa-hourglass-end'></i> Your Platinum Plan Investment Was Successful....</p>";
  }
  if(strpos($url, 'invplatinumsuc') == true){

    echo "<p style='color:orange; text-align:center; font-size:15px;'><i class='fas fa-hourglass-end'></i> Your yearly Plan Investment Was Successful....</p>";
  }


?>

  <div class="row" >
                 
              <div class="col-lg-3 col-md-6 col-sm-6 col-12" >
                <div class="card card-statistic-1" style="background-color:#083d6b;color:white">
                  <div class="card-icon bg-secondary">
                    <i class="fas fa-wallet" style="color:black"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0 " style="color:white">
                          <i class="ti-arrow-up text-success"></i> 
                          $<?php echo $totalbal;?>
                        </h3>
                        <span class="" style="color:orange">Wallet Balance</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                 <div class="col-xl-3 col-lg-6" >
                <div class="card" style="color:black">
                  <div class="card-bg" style="background-color:#083d6b;color:white">
                    <div class="p-t-20 d-flex justify-content-between">
                      <div class="col">
                      <h5 class="font-15">Silver Plan</h5>
                      <h2 class="mb-3 font-18">120% after 7 days</h2>
                      <a href="#" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal3">Invest</a>
                      <p class="mb-0"><span class="col-orange">$100</span> min. deposit</p>
                      <p class="mb-0"><span class="col-orange">$999</span> max. deposit</p>
                      </div>
                      
                      <i class="fas fa-chart-bar card-icon col-orange font-30 p-r-30"></i>
                    
                    </div>
                    <canvas id="cardChart1" height="80" class="col-purple"></canvas>
                  </div>
                </div>
              </div>
            
              <div class="col-xl-3 col-lg-6">
                <div class="card" style="color:black">
                  <div class="card-bg" style="background-color:#083d6b;color:white">
                    <div class="p-t-20 d-flex justify-content-between">
                      <div class="col">
                      <h5 class="font-15">Gold Plan</h5>
                      <h2 class="mb-3 font-18">150% after 7 days</h2>
                      <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal2">Invest</a>
                      <p class="mb-0"><span class="col-orange">$1000</span> min. deposit</p>
                      <p class="mb-0"><span class="col-orange">$10000</span> max. deposit</p>
                      </div>
                      
                      <i class="fas fa-chart-bar card-icon col-green font-30 p-r-30"></i>
                    </div>
                    <canvas id="cardChart2" height="80" class="col-purple"></canvas>
                  </div>
                </div>
              </div>
            
              <div class="col-xl-3 col-lg-6">
                <div class="card" style="color:black">
                  <div class="card-bg" style="background-color:#083d6b;color:white">
                    <div class="p-t-20 d-flex justify-content-between">
                      <div class="col">
                      <h5 class="font-15">Platinum Plan</h5>
                      <h2 class="mb-3 font-18">200% after 7 Days</h2>
                      <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal1">Invest</a>
                      <p class="mb-0"><span class="col-orange">$10000</span> min. deposit</p>
                      <p class="mb-0"><span class="col-orange">100000</span> max. deposit</p>
                      </div>
                      
                      <i class="fas fa-chart-bar card-icon col-blue font-30 p-r-30"></i>
                    </div>
                    <canvas id="cardChart3" height="80" class="col-purple"></canvas>
                  </div>
                </div>
              </div>

             <div class="col-xl-3 col-lg-6">
                <div class="card" style="color:black">
                  <div class="card-bg" style="background-color:#083d6b;color:white">
                    <div class="p-t-20 d-flex justify-content-between">
                      <div class="col">
                      <h5 class="font-15">Vip Plan</h5>
                      <h2 class="mb-3 font-18">200% after 7 Days</h2>
                      <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal1">Invest</a>
                      <p class="mb-0"><span class="col-orange">$100000</span> min. deposit</p>
                      <p class="mb-0"><span class="col-orange">Unlimited</span> max. deposit</p>
                      </div>
                      
                      <i class="fas fa-chart-bar card-icon col-blue font-30 p-r-30"></i>
                    </div>
                    <canvas id="cardChart3" height="80" class="col-purple"></canvas>
                  </div>
                </div>
              </div>

              




</div>
              <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header" style="background-color:#083d6b;color:white">
                  <h4 style="color:white"><i class="fab fa-btc"></i>itcoin Live Trading Chart</h4>
                  
                </div>
                <div class="card-body">
                  
                   
                    <iframe id="tradingview_dd6f1" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_dd6f1&amp;symbol=COINBASE%3ABTCUSD&amp;interval=D&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=Dark&amp;style=1&amp;timezone=Etc%2FUTC&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en&amp;utm_source=www.bitlunaroptions.com&amp;utm_medium=widget_new&amp;utm_campaign=chart&amp;utm_term=COINBASE%3ABTCUSD" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" allowtransparency="true" scrolling="no" allowfullscreen="" frameborder="0"></iframe>
                  
                    </div>
                   
                    </div>
                  </div>
                </div>

                
              </div>
            </div>
          </div>




              </div>
            </div>
          </div>
        </section>

<!-- silver plan modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="color:black">
              <div class="modal-header" style="">
                <h5 class="modal-title" id="formModal" style="color:#083d6b"><i class="material-icons">equalizer</i> Investment Panel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="btn btn-danger">&times;</span>
                </button>
              </div>
              <div class="modal-body">

              <script type="text/javascript">
             function checkamountbal_with(){
             
                     var walletbals = document.forms['invest']['totalbal'].value;
                      var amounwith = document.forms['invest']['amount'].value;
                      var amountinv = parseInt(amounwith,10);
                 
                    if( amountinv > walletbals){
                      swal('Insufficient Funds', 'Your Investment Request failed due to Insufficient Funds!', 'error');
                        
                        return false;
                    }if(amountinv < 50){
                      swal('Transaction failed', 'Amount you entered is below the minimum investment amount for this plan!', 'error');
                      
                        return false;
                    }if(amountinv > 200){
                      swal('Transaction failed', 'Amount you entered is above the maximum investment amount for this plan!', 'error');
                       
                        return false;
                    }return true;
            }
                </script>

<h5>Silver Plan</h5>
                
                <form name="invest" method="POST" action="actions/investsilver.php" onsubmit="return checkamountbal_with()" class="needs-validation" novalidate="">
                <!-- <div class="form-group">
                    <label style="color:black">Investment Plan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-wallet"></i>
                        </div>
                      </div>-->
                      <input type="hidden" class="form-control" value="silver" name="plan" >
                   
                  <input type="hidden" name="totalbal" value="<?php echo $totalbal;?>">
                  <input type="hidden" name="uname" value="<?php echo $uname;?>">
                  <input type="hidden" name="email" value="<?php echo $email;?>">
                  <input type="hidden" name="current" value="<?php echo $current;?>">
                  <div class="form-group">
                    <label style="color:black">Investment Amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                      <input type="number" class="form-control" placeholder="enter amount here..." name="amount" tabindex="1" required autofocus">
                      <div class="invalid-feedback">
                      Please Enter a valid Investment Amount
                    </div>
                    </div>
                  </div>
                  
                  <button type="submit" name='invest' class="btn m-t-15 waves-effect" tabindex="4" style="background:#083d6b;color:white "><i class="far fa-paper-plane"></i> proceed</button>
                  
                </form>
              </div>
            </div>
          </div>
        </div>


<!-- Gold plan modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="color:black">
              <div class="modal-header" style="">
              <h5 class="modal-title" id="formModal"style="color:#083d6b"><i class="material-icons">equalizer</i> Investment Panel</h5>                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="btn btn-danger">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <script type="text/javascript">
             function checkamountbal_gold(){
                     var walletbal = document.forms['invest1']['totalbal'].value;
                      var amounin = document.forms['invest1']['amount'].value;
                      var amountchk = parseInt(amounin,10);
                    if( amountchk > walletbal){
                      swal('Insufficient Funds', 'Your Investment Request failed due to Insufficient Funds!', 'error');
                        return false;
                    }if(amountchk < 200){
                      swal('Transaction failed', 'Amount you entered is below the minimum investment amount for this plan!', 'error');
                     
                        return false;
                      }if(amountchk > 1000){
                        swal('Transaction failed', 'Amount you entered is above the maximum investment amount for this plan!', 'error');
                     
                        return false;
                      
                    }return true;
               }
                </script>
   <h5>Gold Plan</h5>
                  <form name="invest1" method="POST" action="actions/investgold.php" onsubmit="return checkamountbal_gold()" class="needs-validation" novalidate="">
                 <!-- <div class="form-group">
                    <label style="color:black">Investment Plan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-wallet"></i>
                        </div>
                      </div>-->
                      <input type="hidden" class="form-control" value="gold" name="plan" readonly="">
                   
                  
                  <input type="hidden" name="totalbal" value="<?php echo $totalbal;?>">
                  <input type="hidden" name="uname" value="<?php echo $uname;?>">
                  <input type="hidden" name="email" value="<?php echo $email;?>">
                  <input type="hidden" name="current" value="<?php echo $current;?>">
                  <div class="form-group">
                    <label style="color:black">Investment Amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                      <input type="number" class="form-control" placeholder="enter amount here..." name="amount" tabindex="3" required autofocus">
                      <div class="invalid-feedback">
                      Please Enter a valid Investment Amount
                    </div>
                    </div>
                  </div>
                  
                  <button type="submit" name="invest" class="btn m-t-15 waves-effect" tabindex="5" style="background:#083d6b;color:white"><i class="far fa-paper-plane"></i>proceed</button>
                </form>
              </div>
            </div>
          </div>
        </div>


         <!-- Diamond plan modal -->
       <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="color:black">
              <div class="modal-header" style="">
                <h5 class="modal-title" id="formModal" style="color:#083d6b"><i class="material-icons">equalizer</i> Investment Panel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="btn btn-danger">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <script type="text/javascript">
             function checkamountbal_diamond(){
                     var walletbal = document.forms['investd']['totalbal'].value;
                      var amound = document.forms['investd']['amountd'].value;
                      var amountchk = parseInt(amound,10);
                    if( amountchk > walletbal){
                      swal('Insufficient Funds', 'Your Investment Request failed due to Insufficient Funds!', 'error');
                       
                      return false;
                    }if(amountchk < 1000){
                     
                      swal('Transaction failed', 'Amount you entered is below the minimum investment amount for this plan!', 'error');
                     
                      return false;
                    
                    }return true;
               }
                </script>

              <h5>Platinum Plan</h5>
             
                <form name="investd" method="POST" action="actions/investdiamond.php" onsubmit="return checkamountbal_diamond()" class="needs-validation" novalidate="">
                 <!-- <div class="form-group">
                    <label style="color:black">investment Plan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-wallet"></i>
                        </div>
                      </div>-->
                      <input type="hidden" class="form-control" value="platinum" name="plan" readonly="">
                    
                  <div class="form-group">
                    <label style="color:black">investment Amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                      <input type="hidden" name="totalbal" value="<?php echo $totalbal;?>">
                      <input type="hidden" name="uname" value="<?php echo $uname;?>">
                  <input type="hidden" name="email" value="<?php echo $email;?>">
                  <input type="hidden" name="current" value="<?php echo $current;?>">
                      <input type="number" class="form-control" placeholder="enter amount here..." name="amountd" tabindex="7" required autofocus">
                      <div class="invalid-feedback">
                      Please Enter a valid Investment Amount
                    </div>
                    </div>
                  </div>
                  
                  <button type="submit" name="invest" class="btn m-t-15 waves-effect" tabindex="8" style="background:#083d6b;color:white "><i class="far fa-paper-plane"></i>proceed</button>                </form>
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
              <div class="modal-header" style="background: linear-gradient(45deg, #121045, #98258d);">
              <h5 class="modal-title" id="formModal" style="color:orange"><i class="fas fa-signal"></i> Investment Panel</h5>
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
                      swal('Good Job', 'You clicked the button!', 'error');
                        return false;
                    }if(amountchk < 7000){
                     
                        return false;
                   
                    }return true;
               }
                </script>

              <h5>Yearly Plan</h5>
              <h6 class="text-danger">principal profit: 13%</h6>
                  <h6 class="">Duration: yearly</h6>
                  <p><b> <i class="fas fa-sign-out-alt"></i> Min Deposit</b>: $7000
                  <span><b><i class="fas fa-sign-out-alt"></i> Max Deposit</b>: Unlimited</p><span>
                <form name="investp" method="POST" action="actions/investplatinum.php" onsubmit="return checkamountbal_platinum()" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label style="color:black">investment Plan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-wallet"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" value="yearly" name="plan" readonly="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="color:black">investment amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                      <input type="hidden" name="totalbal" value="<?php echo $totalbal;?>">
                      <input type="hidden" name="uname" value="<?php echo $uname;?>">
                  <input type="hidden" name="email" value="<?php echo $email;?>">
                  <input type="hidden" name="current" value="<?php echo $current;?>">
          <input type="number" class="form-control" placeholder="enter amount here..." name="amountp" tabindex="9" required autofocus">
                      <div class="invalid-feedback">
                      Please Enter a valid Investment Amount
                    </div>
                    </div>
                  </div>
              
                  <button type="submit" name="invest" class="btn  m-t-15 waves-effect" tabindex="7" style="background: linear-gradient(45deg, #121045, #98258d);color:orange "><i class="far fa-paper-plane"></i>proceed with investment</button>
                </form>
              </div>
            </div>
          </div>
        </div>




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
  
  <!-- JS Libraies -->
  <script src="asset/bundles/chartjs/chart.min.js"></script>
  <script src="asset/bundles/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="asset/bundles/summernote/summernote-bs4.js"></script>
  <!-- Page Specific JS File -->
  <script src="asset/js/page/widget-data.js"></script>
  <script src="asset/js/page/sweetalert.js"></script>
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