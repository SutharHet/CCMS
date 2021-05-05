<!--<?php
  require_once("../config/connection.php");
?> -->
<!DOCTYPE html>
<html>


<!-- Mirrored from demo.themefisher.com/themefisher/biztrox/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Feb 2019 09:27:22 GMT -->
<head>
  <meta charset="utf-8">
  <title>CCMS</title>
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- magnific popup -->
  <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- themify icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animate -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>
  

<!-- preloader start -->
<div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<section class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="signup">
                    <div class="row">
                        <div class="col-md-5 signup-greeting overlay" style="background-image: url(images/background/BG.jpeg);">
                            <h4>College Cmplaint<br>Management Syatem</h4>
                            <h4>Welcome! New User</h4>
                            <p>CCMS is a website designed to keep track of complaints uploaded by college students and staff</p>
                        </div>
                        <div class="col-md-7">
                            <div class="signup-form">
                                <form method="post" class="row">
                                    <div class="col-lg-12">
                                        <h4>Sign Up</h4>
                                        <p class="float-sm-right">Already Have Account?
                                            <a href="login.php">Log In</a>
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control" name="eno" placeholder="Enrollment Numer">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control" name="uname" placeholder="User Name">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="number"class="form-control" name="phno" placeholder="Phone Number">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="password" class="form-control" name="pass" placeholder="Password">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="password" class="form-control" name="cpass" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="btn btn-primary btn-sm" type="submit" name="sub" value="Sign Up">
                                    </div>
                                    
                                </form>
              <?php


                if($_SERVER["REQUEST_METHOD"]=="POST")
                {
                  if(isset($_POST["eno"]) && isset($_POST["uname"]) && isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["cpass"]))
                  {
                    
                    $eno=$_POST["eno"];
                    $uname=$_POST["uname"];
                    $email=$_POST["email"];
                    $phno=$_POST["phno"];
                    $pass=$_POST["pass"];
                    $cpass=$_POST["cpass"];
                    if($pass != $cpass)
                    {
                      echo "Password does not match...";die();
                    }
                    if($eno!='' && $uname!='' && $email!='' && $phno!= '' && $pass!='' && $cpass!='')
                    {
                      
                      $sql3="insert into user(en_no,user_name,email,ph_no,password)values('".$eno."','".$uname."','".$email."','".$phno."','".$pass."')";

                      $result3=mysqli_query($conn,$sql3);
                      if($result3)
                      {
                        echo "<meta http-equiv='refresh' content='3;url=index.php'>";
                      }
                    }
                  }
                  else
                  {
                    echo "value not set";
                  }
                }
              ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- magnific popup -->
<script src="plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- Google Map -->
<script src="../../../maps.googleapis.com/maps/api/js7402?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
<script  src="plugins/google-map/gmap.js"></script>
<!-- Syo Timer -->
<script src="plugins/syotimer/jquery.syotimer.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- Main Script -->
<script src="js/script.js"></script>
            
</body>

<!-- Mirrored from demo.themefisher.com/themefisher/biztrox/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Feb 2019 09:27:26 GMT -->
</html>