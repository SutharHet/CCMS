<?php 
    session_start();
    require_once("../config/connection.php");
    include("header.php");
    if(!isset($_SESSION["uid"]))
    {
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    }
?>

<body>

<!-- preloader start -->
<div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<section class="d-flex align-items-center bg-gray justify-content-center" style="height: 100vh;">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <section class="section pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-title section-title-border"> Complaints</h2>
                            </div>
                            <div class="col-lg-12 bg-white col-md-12 align-self-center pl-0">
                                <div class="testimonial-slider p-5">
                                    <?php
                                        $sql="select * from complains a join status b join user c where a.status_id=b.status_id and a.user_id=c.user_id";
                                        $result=mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            print "<div class=\"outline-0\">";
                                            print "<b class=\"testimonial-icon\">".$row['complain_id']."</b>";
                                            print "<a href=\"complain.php?cid=".$row['complain_id']."\ class=\"h4 font-primary text-dark\">
                                            <h4 class=\"font-weight-normal\">".$row['complain']."</h4></a>";
                                            print "<p class=\"text-dark\">by ".$row['user_name']."</p>";
                                            print "<h6 class=\"font-secondary text-color\">".$row['status_title']."</h6>";
                                        echo "</div>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
</section>
<!-- blog -->
<section class="section bg-gray">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-12 text-center">
                <h2 class="section-title section-title-border-gray"> Solved Complains </h2>
            </div>
            <div class="col-lg-12 col-12">
                <ul class="bg-white border rounded pl-0">
                    <?php
                        $sql1="select * from complains a join solutions b join user c  where a.status_id='2' and a.complain_id=b.complain_id and b.user_id=c.user_id ";
                        $result1=mysqli_query($conn,$sql1);
                        while($row1=mysqli_fetch_array($result1))
                        {
                            $timestamp = strtotime($row1['s_date']);
                            print "<li class=\"d-flex border-bottom\">
                                <div class=\"py-3 px-4 border-right text-center\">
                                    <h3 class=\"text-primary mb-0\">".date("d", $timestamp)."</h3>
                                    <p class=\"mb-2\">".date("M", $timestamp)."</p>
                                </div>
                                <div class=\"p-3\">
                                    <a href=\"complain.php?cid=".$row1['complain_id']."\" class=\"h4 font-primary text-dark\">Solution for complain: ".$row1['c_title']."</a>
                                    <p>From ".$row1['user_name']."</p>
                                </div>
                            </li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /blog -->

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