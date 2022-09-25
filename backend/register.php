<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Elitekeychain| Register Now</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="components/css/app.min.css">
  <link rel="stylesheet" href="components/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="components/css/style.css">
  <link rel="stylesheet" href="components/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="components/css/custom.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bo.png" />
  
  
 
  
  <style>
  
  
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
  
}


.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
  overflow:scroll;
  height:400%
  
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
  
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
  
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
  
}
</style>

</head>

<body style="background:linear-gradient(rgba(0, 0, 0,0.9 ),rgba(0, 0, 0, 0.9)),url('assets/img/9.gif');background-position:center; background-repeat: no-repeat; background-size: cover;">
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-secondary">
              <div class="card-header " style="background-color:black">
                <p style="color: #fff;"> <span style="color: orange;">Elitekeychain Register</span><br> We are glad you choosed us, please note that Informations provided here are secured and not shared with 3rd Parties.</p>
              </div>
              <div class="card-body">
              <img alt="image" src="assets/img/bo.png" height="200px"  width="100%" class="header-logo" /><br><br>
              <form method="POST" action="actions/registrationaction.php" class="needs-validation" autocomplete="off"  novalidate="">
                  
                    <div class="form-group">
                    <?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if(strpos($url, 'signupempty') == true){

    echo "<p style='color:red; text-align:center; font-size:20px;'> Please fill out all fields. </p>";
  }

  if(strpos($url, 'uidtaken') == true){

    echo "<p style='color:red; text-align:center; font-size:10px;'> <i class=' fas fa-user-alt-slash'></i> Username has been taken.</p>";
  }



  if(strpos($url, 'signupsuc') == true){

    echo "<p style='color:green; text-align:center; font-size:22px;'> Registration Successful, Please <a href='userlogin.php' style='color:white;'>Login. </p>";
  }


?>

                    <label>Username</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-secondary">
                            <i class="fas fa-fas fa-user-lock"></i>
                          </div>
                        </div>
                        <input id="Uname" type="text" name="uname" class="form-control uname" tabindex="1" required autofocus>
                        <div class="invalid-feedback">
                      Please fill in your Username
                    </div>
                      </div>

                    <div class="form-group">
                    <label>Fullname</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-secondary">
                            <i class="fas fa-user"></i>
                          </div>
                        </div>
                        <input id="fullname" type="text" name="fname" class="form-control fname" tabindex="2" required autofocus>
                        <div class="invalid-feedback">
                      Please fill in your Fullname
                    </div>


                    </div>
                  
                  <div class="form-group">
                  <label>Email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-secondary">
                            <i class="fab fa-google"></i>
                          </div>
                        </div>
                        <input id="email" type="email" name="email" class="form-control email" tabindex="3" required autofocus>
                        <div class="invalid-feedback">
                      Please fill in your Email
                    </div>
                      </div>
              
                  
                    <div class="form-group">
                    <label>Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-secondary">
                            <i class="fas fa-lock"></i>
                          </div>
                        </div>
                        <input id="password" type="password" name="pwd" class="form-control password" tabindex="4" required autofocus>
                        <div class="invalid-feedback">
                      Please fill in your password
                    </div>
                      </div>



                    <div class="form-group">
                    <label>Comfirm Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-secondary">
                            <i class="fas fa-lock"></i>
                          </div>
                        </div>
                        <input id="password" type="password" name="cpwd" class="form-control password" tabindex="4" required autofocus>
                        <div class="invalid-feedback">
                      comfirm password
                    </div>
                      </div>
                   
                   
                    <div class="form-group">
                    <label>Country</label>
                      <div class="input-group ">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-secondary autocomplete">
                            <i class="fas fa-globe"></i>
                          </div>
                        </div>
                       
                        <input id="myInput" type="text" name="country" class="form-control country" tabindex="5" required autofocus> 

                        <input id="password" type="hidden" name="phone" value="+546863735" class="form-control password" tabindex="4" required autofocus>

                        <div class="invalid-feedback">
                      Please fill in your Country
                    </div>
                      </div><br>

    
                 

        
                   

                   <?php
                    $url="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
             // $url="https://xeolinvest.com/register.php?uchemelo100000";
           //   $url="https://www.bitraderx.com/register.php?uchejfifjkdbvvvjlbuvfujfkd.";
                    //collected the user and sliced it
                     $refname = substr($url,39);

                   // echo $refname;
                ?>  

                <input type="hidden" name="refidd" class="form-control" value="<?php echo $refname;?>"  placeholder="Enter Referral ID (optional)">

                  
                  <div class="form-group">
                    <button type="submit" name="register" class="btn btn-secondary btn-lg btn-block" tabindex="4" style="color:black; background-color: orange;">
                    <i class="fas fa-check"></i> Register
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="login.php">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>
  <!-- General JS Scripts -->
  <script src="components/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="components/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="components/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="components/js/page/auth-register.js"></script>
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