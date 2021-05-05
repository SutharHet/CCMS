<?php
    session_start();
    require_once("../config/connection.php");
    include("header.php");

?>

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
                            <h4>Your<br>Complain</h4>
                        </div>
                        <div class="col-md-7">
                            <div class="signup-form">
                                <form method="post" class="row">
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control" name="ctitle" placeholder="Complain Title">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea class="form-control" name="complain" placeholder="Write your complain here."></textarea>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="btn btn-primary btn-sm" type="submit" name="sub" value="Submit">
                                    </div>    
                                </form>
              <?php 
                if($_SERVER["REQUEST_METHOD"]=="POST")
                {
                  if(isset($_POST["ctitle"]) && isset($_POST["complain"]) && isset($_SESSION["uid"]))
                  {
                    $ctitle=$_POST["ctitle"];
                    $complain=$_POST["complain"];
                    $uid=$_SESSION["uid"];
                    if($ctitle!='' && $complain!='' && $uid!='')
                    {
                      
                      $sql3="insert into complains(user_id,c_title,complain,c_date,status_id)values('".$uid."','".$ctitle."','".$complain."','".date("Y/m/d")."','0')";

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

<!-- Mirrored from demo.themefisher.com/themefisher/biztrox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Feb 2019 09:25:08 GMT -->
</html>
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


<?php include("footer.php");?>