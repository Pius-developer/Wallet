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

  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />
 
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


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


        


        <ul class="navbar-nav navbar-right">
      
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell" style="color: orange;"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
                        fa-code"></i>
                  </span> <span class="dropdown-item-desc"> You Will be notified when something new appears.<span class="time">
                      </span>
                  </span>
                </a> 

              </div>
            
            </div>
          </li>




          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="components/img/profile1.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello <?php echo $uname?> </div>



              <a href="profile.php" class="dropdown-item has-icon"> <i class="far
                    fa-user"></i> Profile
              </a> 

              <a href="history.php" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> 

              <a href="kyc.php" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Verify
              </a>

              <div class="dropdown-divider"></div>

              <a href="#" class="dropdown-item has-icon text-danger"> 
               
              <form action="actions/loggout.php" method="POST"><button type="submit" style="color:red" class="btn" name="logout"><i data-feather="power"></i> Logout</button></form>
              </a>
            </div>
          </li>
        </ul>





        
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


        <div class="container">


        
      <div id="google_translate_element" style="font-size: 25px;"></div>


       <script type="text/javascript">
           function googleTranslateElementInit() {
           new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
    
          </div>


      <div class="main-content">
                 <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header" style="background-color:#000;color:orange;">
                  
          <span style="font-weight:bold; color: orange;"><i class="fas fa-credit-card"></i> Top up your wallets through Elite key Chain gateway</span>
    
            </div>
                <div class="card-body">
                 
                    
                <div class="row grace" >
                   
                    <div class="col-lg-12">
                    <!-- <img class="img-fluid" src="assets/img/credot.svg" width="45%" alt=> -->
                    <div class="card-body">
                    <form  method="POST" action="fund.php" class="needs-validation" novalidate="">
                    <div class="section-title" style="color:#fff"><i class="far fa-hand-point-down"></i> Choose Method of Funding</div>
                    <div class="custom-control custom-radio">
                      <input type="radio" name="trantype" value="btc" id="customRadio1" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio1" style="color:#fff"><i class="fas fa-chevron-right" style="color:black"></i> Fund Via Bitcoin</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" name="trantype" value="eth" id="customRadio4" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio4" style="color:#fff"><i class="fas fa-chevron-right" style="color:black"></i> Fund Via Ethereum </label>
                    </div>




                   <div class="custom-control custom-radio">
                      <input type="radio" name="trantype" value="lite" id="customRadio2" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio2" style="color:#fff"><i class="fas fa-chevron-right" style="color:black"></i> Fund Via Litecoin</label>
                    </div>


                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio3" name="trantype" value="bnb" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio3" style="color:#fff"><i class="fas fa-chevron-right" style="color:black"></i> Fund Via BNB</label>
                    </div>


                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio5" name="trantype" value="doge" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio5" style="color:#fff"><i class="fas fa-chevron-right" style="color:black"></i> Fund Via Dogecoin</label>
                    </div>


                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio6" name="trantype" value="bch" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio6" style="color:#fff"><i class="fas fa-chevron-right" style="color:black"></i> Fund Via Bitcion cash</label>
                    </div>


                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio8" name="trantype" value="shiba" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio8" style="color:#fff"><i class="fas fa-chevron-right" style="color:black"></i> Fund Via Shiba Inu</label>
                    </div>

                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio7" name="trantype" value="usdt" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio7" style="color:#fff"><i class="fas fa-chevron-right" style="color:black"></i> Fund Via USDT</label>
                    </div>


                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio11" name="trantype" value="sa" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio11" style="color:#fff"><i class="fas fa-chevron-right" style="color:black"></i> Fund Via Saitama</label>
                    </div>


                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio9" name="trantype" value="cada" name="customRadio" class="custom-control-input" required autofocus">
                      <label class="custom-control-label" for="customRadio9" style="color:#fff"><i class="fas fa-chevron-right" style="color:black"></i> Fund Via Cardono </label>
                    </div>

                    <div class="form-group">
               
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                    
                        </div>
    
    <input type="hidden" name="uname" value="<?php echo $uname;?>">
    <input type="hidden" name="btc" value="<?php echo $btc;?>">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <input type="hidden" name="totalbal" value="<?php echo $totalbal;?>">
                      </div>
                    </div>
                    
                   

                    <div class="form-group">
                    <div class="section-title" style="color:#fff"><i class="far fa-credit-card"></i> Enter Deposit Amount </div>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        
                        <input id="amount" type="number" name="amount" placeholder="Enter Amount" class="form-control" tabindex="1" required autofocus">
                        <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                        </div>
                      
                        <div class="invalid-feedback">
                      Please Enter a valid amount
                    </div>
                      
                      </div>
                    </div>
                  </div>
                </div>
                    </div><br>
                   <button type="submit" name="proceed" class="btn" style="background-color:orange;color:#000" tabindex="4"><i data-feather="credit-card"></i> Proceed</button>
              </form>
             
              </div>
            </div>
          </div>




                <div class="card author-box card-dark">
                  <div class="card-body">

                    <div class="author-box-details">
                      <div class="author-box-name">
                        <a href="#" style="color:black; background-color: orange; padding:10px;">Transaction Process</a>
                      </div>
                      
                      <div class="author-box-description">
                        <h3 style="color:#000;">Receiving cryptocurrency on your Elite Key Chain wallet is easy</h3>
                        <p>Simply select the crypto you want to receive,  then enter the amount you'll like to receive. Click on proceed to generate your wallet address. This process is simple and clear, but for support, contact our support chat for clearifications.</p>

                        <a href="#" >
                          <i data-feather="alert-triangle" style="color:orange; text-align: center; background-color:black; "></i>
                          </a>
                      </div>
                    

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