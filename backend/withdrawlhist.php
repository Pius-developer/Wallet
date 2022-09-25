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



<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Payed Capital- userdashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="components/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
 
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">
  
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />

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



                        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">
            
                  <div class="card-header" style="background-color:#083d6b">
                    <h4 class="col-white"><i class="fas fa-history"></i> Your Deposit History</h4>
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
                          echo "<td> <form method='POST' action='actions/deletedepo.php'><input type='hidden' name='depositid' value='$depid'> <button type='submit' name='delete' class='btn' style='background-color:#083d6b;color:white'><i class='fas fa-trash-alt'></i> Delete</button> </form></td>";
                                                                                       
                                        
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
                  <div class="card-header" style="background-color:#083d6b;color:white">
                    <h4 class="col-white"><i class="fas fa-history"></i> Your Withdrawl History</h4>
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
                          echo "<td> <form method='POST' action='actions/deletewith.php'><input type='hidden' name='withid' value='$depid'> <button type='submit' name='delete' class='btn' style='background-color:#083d6b;color:white'><i class='fas fa-trash-alt'></i> Delete</button> </form></td>";
                                                                                       
                                        
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