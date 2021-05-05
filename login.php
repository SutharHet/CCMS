
<?php 
session_start(); 
require_once('../config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST["uname"]) && isset($_POST["pass"]))
  {
    
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    
    if($uname !='' && $pass !='')
    {
       $sql="select user_id,user_name,password from user where user_name= '".$uname."' and password='".$pass."'";
      
      $result=mysqli_query($conn,$sql);
      if($row = mysqli_fetch_assoc($result))
      {
        
        $_SESSION["uname"] = $row['user_name'];
        $_SESSION["uid"] = $row['user_id'];
        header("Location:index.php");
      }
      else
      {
        echo "Invalid password";
      }
      
    }
  }
}

?> 
<!DOCTYPE html>
<html lang="zxx">

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
                            <h4>College Complaint<br>Management Syatem</h4>
                            <h4>Welcome!</h4>
                            <p></p>
                        </div>
                        <div class="col-md-7">
                            <div class="signup-form">
                                <form method="post" class="row">
                                    <div class="col-lg-12">
                                        <h4>Login</h4>
                                        <p class="float-sm-right">Need An Account?
                                            <a href="signup.php">Sign Up</a>
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control" id="uname" name="uname" placeholder="Username">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                                    </div>
                                    <div class="col-lg-12" style="float: right;">
                                    <a href="forgot_password.php">Forgot Password</a>
                                    </div>
                                    <div class="col-sm-4">
                                        <button class="btn btn-primary btn-sm">Login</button>
                                    </div>
                                </form>
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

<!-- Mirrored from demo.themefisher.com/themefisher/biztrox/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Feb 2019 09:27:26 GMT -->
</html>