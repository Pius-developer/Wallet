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

            $uname = $data['username'];
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
            $invest= $data['refpaid'];
            $current= $data['current'];
            $bonus= $data['bonus'];
           

            
                



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
  <link rel="stylesheet" href="components/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="components/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
 
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />
 
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


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



      <div class="main-content grace">
        <section class="section">
          <h4 style="color: orange;">My Bonus Account</h4><br><br>
          <div class="row ">

          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon l-bg-purple">
                    <i class="fas fa-wallet"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0" style="color:#083d6b">
                          <i class="ti-arrow-up text-success"></i> 
                          $<?php echo  $bonus;?>
                        </h3>
                        <span class="col-purple" >Bonus Gift</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




            
              <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon l-bg-orange">
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0" style="color:#083d6b">
                          <i class="ti-arrow-up text-success"></i>
                          $<?php echo $current;?>
                        </h3>
                        <span class="" style="color:orange">last Investment</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <div class="card-icon l-bg-cyan">
                    <i class="fas fa-money-bill"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0" style="color:#083d6b">
                          <i class="ti-arrow-up text-success"></i>
                          <?php echo $invest;?>
                        </h3>
                        <span class="col-blue">Referrals</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <div class="card-icon l-bg-green">
                    <i class="fas fa-hand-holding-usd"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0" style="color:#083d6b">
                          <i class="ti-arrow-up text-success"></i>
                         
                        </h3>
                        <span class="col-green">   <a href="deposit.php" style="color:#fff; background-color: green; padding:10px; border-radius:5px;">Recieve</a><br><br></span>

                         <span class="col-green">   <a href="requestwith.php" style="color:#fff; background-color: red; padding:10px;padding-right: 20px; padding-left: 20px; border-radius:5px;">sell</a><br><br></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          </div>
          

    





          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">
                  <div class="card-header" style="background-color:#000; ">
                    <h4 style="color:orange;">Your Downlines <i data-feather="user-plus"></i></h4>
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label for="email"><marque><i class="fas fa-users"></i> Invite & Earn Using Your referral link </marque></label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <button type="button" id="clickcopy" onClick="mycopy()" class="input-group-text btn" style="background-color:#000;color:orange;"><i data-feather="copy"></i>copy</button>
                        <script type="text/javascript">
                            
                            function mycopy(){
                                var copyTxt = document.getElementById("copybtc");
                                copyTxt.select();
                                document.execCommand("copy");
                            }


                            </script>

                      </div>
                       <input type="text" class="form-control-plaintext" value="https://www.elitekeychain.com/register.php?<?php echo $uname;?>" id="copybtc" readonly="">
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th style="color:black">Username</th>
                            <th style="color:black">email</th>
                            <th style="color:black">Fullname</th>
                            <th style="color:black">Amount paid</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php

$sql = "SELECT * FROM reftable WHERE linkrefid ='$uname'";
$result= mysqli_query($conn,$sql);
$result_checker= mysqli_num_rows($result);

if($result_checker > 0){
    while($data = mysqli_fetch_assoc($result)){

            $username = $data['username'];
            $email= $data['email'];
            $fullname= $data['fullname'];
            $linkrefid= $data['linkrefid'];
            $amountpaid= $data['amountpaid'];



                            echo "<tr> ";
                                           
                                            echo '<td>'.$username. '</td>'; 
                                            echo '<td>'.$email. '</td>'; 
                                            echo '<td>'.$fullname. '</td>'; 
                                            echo '<td>'.$amountpaid. '</td>';

                                                                                       
                                        
                            echo '</tr>';
    }

}else{
    echo 'No Referrals yet';
}
?>


                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            
           
            
              </div>
            </div>







<!-- AAGGFHDHHDHFDHFDJHFDHFDJHJDFJHFJD -->








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
  <script src="components/bundles/datatables/datatables.min.js"></script>
  <script src="components/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="components/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/datatables.js"></script>
  
  
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