<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Elitekeychain| Login</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <link rel="stylesheet" href="components/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />
  

  
</head>

<body style="background:linear-gradient(rgba(0, 0, 0,0.1 ),rgba(0, 0, 0, 0.1)),url('assets/img/9.gi');background-position:center; background-repeat: no-repeat; background-size: cover;">
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card " style="margin-top:60px">
              <div class="card-header " style="background-color:black">
                <h6 style="color: orange;">Login Into your Elitekeychain account</h6>
              
              </div>
              <div class="card-body"> 
                <img alt="image" src="assets/img/bo.png" height="200px"  width="100%" class="header-logo" /><br><br>
              <?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


                   if(strpos($url, 'loginempty') == true){
                       echo "<p class='suc' style='color:red;font-size:18px;'>Please,fill out all inputs  </p>";
                   }

                   if(strpos($url, 'invaliduid') == true){
                       echo "<p class='text-danger' style='font-size:13px;'><i class='fas fa-user-alt-slash'></i> Sorry no such user found</p>";
                   }


                   if(strpos($url, 'verify') == true){
                       echo "<p class='suc' style='color:red;font-size:18px;'>Please verify your acount, check your email</p>";
                   }


                  if(strpos($url, 'verified') == true){
                       echo "<p class='suc' style='color:green;font-size:18px;'>Your Account is verified</p>";
                   }

                   if(strpos($url, 'veriferror') == true){
                       echo "<p class='text-error' style='font-size:13px;'><i class='fas fa-user-alt-slash'></i>Verification error, contact the live support for help</p>";
                   }


                    if(strpos($url, 'invalidpwd') == true){
                       echo "<p class='text-danger' style='font-size:13px;'><i class='fas fa-user-alt-slash'></i> Your password is incorect</p>";
                   }

                   if(strpos($url, 'logoutsuc') == true){
                    echo "<p  style=' color:green;font-size:13px;'><i class='fas fa-user-lock'></i> You are currently logged out</p>";
                 }

                   if(strpos($url, 'loginsuc') == true){
                       echo "<p class='suc' style='color:green;font-size:13px;'> Login successfull...Please wait..</p>";
                    }


                   if(strpos($url, 'mailforgottensentsuc') == true){
                       echo "<p class='text-success' style='font-size:13px;'><i class='fas fa-envelope'></i> your password has been sent to your Email, Confirm and Login..</p>";
                    }


       ?>
                <form method="POST" action="actions/login.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="Username" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your Username
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="forgot.php" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="pwd" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" name="login" class="btn btn-secondary btn-lg btn-block" tabindex="4" style="color:black; background-color: orange;">
                    <i class="fas fa-sign-in-alt"></i>  Login
                    </button>
                  </div>
                </form>
               
            
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="register.php">Create One</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="components/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
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