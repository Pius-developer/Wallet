
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
  <title>Payed Capital - userdashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">



  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

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
             
              <form action="actions/loggout.php" method="POST"><button type="submit" style="color:red" class="btn" name="logout"><i data-feather="power"></i> Logout</button></form>
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
                             <div class="card-header" style="background-color:#083d6b">
                  
                  <span class="col-white" style="font-weight:bold">Verify your Account .</span>
    
            </div>
                <div class="card-body">
                <?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if(strpos($url, 'uploadsuc') == true){

    echo "<p class='col-green' style='font-size:15px;text-align:center'><i class='fas fa-video'></i> Your Proof of Identification has been sent </p>";
  }

  
?>

    <form  method="POST" action="actions/kycverify.php"  class="needs-validation" novalidate="" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-12">
                    <div class="card-body">
                     
                    <div class="form-group">
                    <form method="POST" action="actions/confirm.php" class="needs-validation" novalidate="" enctype="multipart/form-data">
                    <p class="alert alert-secondary">Please, upload the below documents to veify your account..</p>
                                      
                    <div class="form-group">
                    <label>Valid ID Card</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-chalkboard-teacher"></i></span>
                        </div>
                        <input type="hidden" name="uname" value="<?php echo $uname;?>">
                        <input type="hidden" name="email" value="<?php echo $email;?>">
       <input type="file" name="validid"  class="form-control img"tabindex="3" required autofocus">
                      <div class="invalid-feedback">
                      No file choosen
                    </div>
                      
                    </div>


                    <div class="form-group">
                    <label>Selfie</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-grin"></i></span>
                        </div>
                        <input type="hidden" name="uname" value="<?php echo $uname;?>">
       <input type="file" name="selfie"  class="form-control img"tabindex="3" required autofocus">
                      <div class="invalid-feedback">
                      No file choosen
                    </div>
                      
                    </div>
            
                      
                </div>
                <button name="upload" type="submit" class="btn" style="background-color:#083d6b;color:white" tabindex="4"><i class="fas fa-external-link-alt"></i> Upload</button>

                    </div>
                  </div>
               
                </div>
                
                    </div>
                   
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