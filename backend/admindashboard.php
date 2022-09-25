<?php
	
	session_start();
	include 'actions/db.php';
?>

<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Elitekeychain| - Your investment management platform</title>
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
            <h6 class="col-black">Welcome to your dashboard Boss</h6>
           
          </ul>
        </div>
        
      </nav>
      <div class="main-sidebar sidebar-style-2 " style="background-color:black;">
        <aside id="sidebar-wrapper ">
          <div class="sidebar-brand">
            <a href="#"> <img alt="image" src="components/img/profile1.png" height="170px" class="header-logo" /> <span class="logo-name">Admin</span>
            </a>
          </div>
          <ul class="sidebar-menu ">
        
            <li class="dropdown">
              <a href="admindashboard.php" class="nav-link" style="color:orange;"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="admindepositrequest.php" class="nav-link" style="color:orange;"><i
                  data-feather="credit-card"></i><span>Deposit request</span></a>
              
            </li>
            <li class="dropdown">
              <a href="adminupdatecustomer.php" class="nav-link" style="color:orange;"><i
                  data-feather="activity"></i><span>Update Customers</span></a>
            </li>

  

            <li class="dropdown">
              <a href="adminwithdrawlrequest.php" class="nav-link" style="color:orange;"><i data-feather="refresh-cw"></i><span>withdrawl request</span></a>
            </li>
            <li class="dropdown">
              <a href="adminproof.php" class="nav-link" style="color:orange;"><i data-feather="video"></i><span>Check proof of payment</span></a>
            </li>

            <li class="dropdown">
              <a href="admincheckyc.php" class="nav-link" style="color:orange;"><i data-feather="video"></i><span>Check Kyc</span></a>
            </li>

            <li class="dropdown">
              <a href="adminmail.php" class="nav-link" style="color:orange;"><i data-feather="mail"></i><span>Send mail</span></a>
            </li> 
            
            <li class="nav-link">
              <form action="actions/adminloggout.php" method="POST"><button type="submit" class="btn btn-danger" name="adminlogout"><i data-feather="power"></i> Admin Logout</button></form>
            </li>
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
                 <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">
                  <div class="card-header bg-dark" style="color:orange;">
                    <h4 class="col-orange">All Registered Investors</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead >
                          <tr>
                            <th style="color:black">Fullame</th>
                            <th style="color:black">Username</th>
                            <th style="color:black">Country</th>
                            <th style="color:black">Email</th>
                            <th style="color:black">Phone</th>
                            <th style="color:black">Total Balance</th>
                            <th style="color:black">Total Withdrawl</th>
                            <th style="color:black">Earnings</th>
                            <th style="color:black">Current Investment</th>
                            <th style="color:black">Delete Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php

$sql = "SELECT * FROM  users";
$result= mysqli_query($conn,$sql);
$result_checker= mysqli_num_rows($result);
if($result_checker > 0){
    while($data = mysqli_fetch_assoc($result)){

      $uname= $data['username'];
            $fname= $data['fullname'];
            $country= $data['country'];
            $email= $data['email'];
            $phone= $data['phone'];
            $totalbal= $data['totalbal'];
            $totalwith= $data['totalwith'];
            $earn= $data['earn'];
            $current= $data['current'];


                            echo "<tr> ";
                                            
                                            
                                            echo '<td>'.$fname. '</td>'; 
                                            echo '<td>'.$uname. '</td>'; 
                                            echo '<td>'.$country. '</td>';
                                            echo '<td>'.$email. '</td>';
                                            echo '<td>'.$phone. '</td>';
                                            echo '<td>'.$totalbal. '</td>';
                                            echo '<td>'.$totalwith. '</td>';
                                            echo '<td>'.$earn. '</td>';
                                            echo '<td>'.$current. '</td>';
                                                                                       
                                            echo "<td> <form method='POST' action='actions/deleteinvestors.php'><input type='hidden' name='email' value='$email'> <button type='submit' name='delete' class='btn' style='background-color:red;color:white'><i class='fas fa-trash-alt'></i> Delete</button> </form></td>";
                                        
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
 
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>