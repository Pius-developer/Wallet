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





            $btc= $data['btc'];
            $eth= $data['eth'];
            $bnb= $data['bnb'];

            $lite= $data['lite'];
            $doge= $data['doge'];
            $usdt= $data['usdt'];


            $ada= $data['ada'];
            $solana= $data['solana'];
            $shiba= $data['shiba'];
           

            
                



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

         <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header" style="background-color: black;">
                    <h4 style="color: orange;">Wallet Balance</h4>
                  </div>
                  <div class="card-body" style="height: 100px;">
                    <ul class="list-inline text-center">
                      <li class="list-inline-item p-r-30"><i data-feather="arrow-up-circle" class="col-orange"></i>
                        <h5 class="m-b-0"> $<?php echo $totalbal;?></h5>
                        <p class="text-muted font-14 m-b-0" style="color: orange;">Elite Key Chain</p>
                      </li>
                     
                    </ul>
                    <div id="revenue"></div>
                  </div>
                </div>
              </div>
        <section class="section">
        <!--   <marquee style="color: orange;">Top up your wallet today and enjoy unlimited offers and ROI</marquee><br><br>
 -->


             <div class="col-md-12 col-lg-12 col-xl-12">
              <!-- Support tickets -->
              <div class="card">
                <div class="card-header" style="background-color: black;">
                  <h4 style="color: orange;">Wallet overview</h4>
                  <form class="card-header-form">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                  </form>
                </div>
                <div class="card-body">
                  <div class="support-ticket media pb-1 mb-3">
                    <img src="assets/img/users/btc.png" class="user-img mr-2" alt="">
                    <div class="media-body ml-3">
                      <div class="badge badge-pill badge-success mb-1 float-right">$<?php echo $btc;?>
                        

                      </div>
                      <span class="font-weight-bold">Bitcoin</span>
                      <!-- <a href="javascript:void(0)">Please add advance table</a>
                      <p class="my-1">Hi, can you please add new table for advan...</p> -->
                    <small class="text-muted">Elite key chain<span class="font-weight-bold font-13" style="color: green">....</span>
                        &nbsp;&nbsp; - your account today</small>
                    </div>

                  </div>


                    <hr style="width:300px;">

                  <div class="support-ticket media pb-1 mb-3">
                    <img src="assets/img/users/eth1.png" class="user-img mr-2" alt="">
                    <div class="media-body ml-3">
                      <div class="badge badge-pill badge-warning mb-1 float-right">$<?php echo $eth;?></div>
                      <span class="font-weight-bold">Etheruem</span>
                    <!--   <a href="javascript:void(0)">Select item not working</a>
                      <p class="my-1">please check select item in advance form not work...</p> -->
                      <small class="text-muted">Elite key chain<span class="font-weight-bold font-13" style="color: green">....</span>
                        &nbsp;&nbsp; - your account today</small>
                    </div>
                  </div>



                    <hr style="width:300px;">


                  <div class="support-ticket media pb-1 mb-3">
                    <img src="assets/img/users/usdt.png" class="user-img mr-2" alt="">
                    <div class="media-body ml-3">
                      <div class="badge badge-pill badge-primary mb-1 float-right">$<?php echo $usdt;?></div>
                      <span class="font-weight-bold">USDT</span>
                  <!--     <a href="javascript:void(0)">Are you provide template in Angular?</a>
                      <p class="my-1">can you provide template in latest angular 8.</p> -->
                      <small class="text-muted">Elite key chain<span class="font-weight-bold font-13" style="color: green">....</span>
                        &nbsp;&nbsp; - your account today</small>
                    </div>
                  </div>


                    <hr style="width:300px;">  


                  <div class="support-ticket media pb-1 mb-3">
                    <img src="assets/img/users/bnb.png" class="user-img mr-2" alt="">
                    <div class="media-body ml-3">
                      <div class="badge badge-pill badge-info mb-1 float-right">$<?php echo $bnb;?></div>
                      <span class="font-weight-bold">BNB</span>
                      <!-- <a href="javascript:void(0)">About template page load speed</a>
                      <p class="my-1">Hi, John, can you work on increase page speed of template...</p> -->
                      <small class="text-muted">Elite key chain<span class="font-weight-bold font-13" style="color: green">....</span>
                        &nbsp;&nbsp; - your account today</small>
                    </div>
                  </div>



                    <hr style="width:300px;">

                  <div class="support-ticket media pb-1 mb-3">
                    <img src="assets/img/users/lite.png" class="user-img mr-2" alt="">
                    <div class="media-body ml-3">
                      <div class="badge badge-pill badge-warning mb-1 float-right">$<?php echo $lite;?></div>
                      <span class="font-weight-bold">litecoin</span>
                    <!--   <a href="javascript:void(0)">Select item not working</a>
                      <p class="my-1">please check select item in advance form not work...</p> -->
                      <small class="text-muted">Elite key chain<span class="font-weight-bold font-13" style="color: green">....</span>
                        &nbsp;&nbsp; - your account today</small>
                    </div>
                  </div>



                    <hr style="width:300px;">


                  <div class="support-ticket media pb-1 mb-3">
                    <img src="assets/img/users/doge1.png" class="user-img mr-2" alt="">
                    <div class="media-body ml-3">
                      <div class="badge badge-pill badge-primary mb-1 float-right">$<?php echo $doge;?></div>
                      <span class="font-weight-bold">Doge</span>
                  <!--     <a href="javascript:void(0)">Are you provide template in Angular?</a>
                      <p class="my-1">can you provide template in latest angular 8.</p> -->
                     <small class="text-muted">Elite key chain<span class="font-weight-bold font-13" style="color: green">....</span>
                        &nbsp;&nbsp; - your account today</small>
                    </div>
                  </div>


                    <hr style="width:300px;">  



                  <div class="support-ticket media pb-1 mb-3">
                    <img src="assets/img/users/solana.png" class="user-img mr-2" alt="">
                    <div class="media-body ml-3">
                      <div class="badge badge-pill badge-primary mb-1 float-right">$<?php echo $solana;?></div>
                      <span class="font-weight-bold">Solana</span>
                  <!--     <a href="javascript:void(0)">Are you provide template in Angular?</a>
                      <p class="my-1">can you provide template in latest angular 8.</p> -->
                      <small class="text-muted">Elite key chain<span class="font-weight-bold font-13" style="color: green">....</span>
                        &nbsp;&nbsp; - your account today</small>
                    </div>
                  </div>


                    <hr style="width:300px;">


                  <div class="support-ticket media pb-1 mb-3">
                    <img src="assets/img/users/ada.png" class="user-img mr-2" alt="">
                    <div class="media-body ml-3">
                      <div class="badge badge-pill badge-info mb-1 float-right">$<?php echo $ada;?></div>
                      <span class="font-weight-bold">Ada Cadano</span>
                      <!-- <a href="javascript:void(0)">About template page load speed</a>
                      <p class="my-1">Hi, John, can you work on increase page speed of template...</p> -->
                      <small class="text-muted">Elite key chain<span class="font-weight-bold font-13" style="color: green">....</span>
                        &nbsp;&nbsp; - your account today</small>
                    </div>
                  </div>
                </div>
                </div>


              </div>


<!-- Cryptocurrency Price Widget --><script>!function(){var e=document.getElementsByTagName("script"),t=e[e.length-1],n=document.createElement("script");function r(){var e=crCryptocoinPriceWidget.init({base:"USD,EUR,CNY,GBP",items:"BTC,ETH,LTC,XMR,DASH",backgroundColor:"FFFFFF",streaming:"1",rounded:"1",boxShadow:"1",border:"1"});t.parentNode.insertBefore(e,t)}n.src="https://co-in.io/widget/pricelist.js?items=BTC%2CETH%2CLTC%2CXMR%2CDASH",n.async=!0,n.readyState?n.onreadystatechange=function(){"loaded"!=n.readyState&&"complete"!=n.readyState||(n.onreadystatechange=null,r())}:n.onload=function(){r()},t.parentNode.insertBefore(n,null)}();</script><a href="https://currencyrate.today/" rel="noopener" target="_blank">CurrencyRate.Today</a><!-- /Cryptocurrency Price Widget -->



           <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">
            
                  <div class="card-header" style="background-color:#000; color: orange;">
                    <h4 style="color:orange;"><i class="fas fa-history" style="color:orange;"></i> Your Deposit History</h4>
                  </div>
                  <div class="card-body">
                  <div class="col-lg-6">
                <?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if(strpos($url, 'delsuc') == true){

    echo "<p class='alert alert-success text-center'><i class='fas fa-hourglass-end'></i> Deleted... </p>";
  }

  


?>
     </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th style="color:black">Amount</th>
                            <th style="color:black">Date Of Deposit</th>
                            <th style="color:black">Transaction Status</th>
                            <th style="color:black">Action</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                        <?php

$sql = "SELECT * FROM depositrequests WHERE username ='$uname' ORDER BY dateofdep";
$result= mysqli_query($conn,$sql);
$result_checker= mysqli_num_rows($result);

if($result_checker > 0){
    while($data = mysqli_fetch_assoc($result)){

        
      $date= $data['dateofdep'];
            $amount= $data['amount'];
            $statusofdep= $data['statusofdep'];
            $depid= $data['depositid'];



                            echo "<tr> ";
                                            
                                            echo '<td>'.$amount. '</td>'; 
                                            echo '<td>'.$date. '</td>'; 
                                            echo '<td>'.$statusofdep. '</td>';
                          echo "<td> <form method='POST' action='actions/deletedepo.php'><input type='hidden' name='depositid' value='$depid'> <button type='submit' name='delete' class='btn' style='background-color:red;color:white'><i class='fas fa-trash-alt'></i> Delete</button> </form></td>";
                                                                                       
                                        
                            echo '</tr>';
    }

}
?>




                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            
              </div>
            </div>




            <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">
                  <div class="card-header" style="background-color:#000;color:orange;">
                    <h4 style="color:orange;"><i class="fas fa-history" style="color:orange;"></i> Your Withdrawl History</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th style="color:black">Amount</th>
                            <th style="color:black">Date of request</th>
                            <th style="color:black">Withdrawl Status</th>
                            <th style="color:black">Payment Mode</th>
                            <th style="color:black">Action</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                        <?php

                      $sql = "SELECT * FROM withdawalrequest WHERE username ='$uname'";
                      $result= mysqli_query($conn,$sql);
                      $result_checker= mysqli_num_rows($result);

                      if($result_checker > 0){
                       while($data = mysqli_fetch_assoc($result)){

        
                       $amount= $data['amount'];
                       $dated= $data['dateofwith'];
                       $status= $data['statusofwith'];
                       $earn= $data['paytype'];
                      $depid= $data['withid'];



                            echo "<tr> ";
                                            
                                            
                                             
                                            echo '<td>'.$amount. '</td>'; 
                                            echo '<td>'.$dated. '</td>';
                                            echo '<td>'.$status. '</td>';
                                            echo '<td>'.$earn. '</td>';
                          echo "<td> <form method='POST' action='actions/deletewith.php'><input type='hidden' name='withid' value='$depid'> <button type='submit' name='delete' class='btn' style='background-color:red;color:white'><i class='fas fa-trash-alt'></i> Delete</button> </form></td>";
                                                                                       
                                        
                            echo '</tr>';
    }

}
?>


                        </tbody>
                      </table>
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
                       <input type="text" class="form-control-plaintext" value="https://www.elitekeychain.com/backend/register.php?<?php echo $uname;?>" id="copybtc" readonly="">
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