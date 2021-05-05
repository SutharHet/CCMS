<?php
    require_once("../config/connection.php");
    include("header.php");
?>

<body>

<!-- preloader start -->
<div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<!-- blog -->
<section class="section bg-gray">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-12 text-center">
                <h2 class="section-title section-title-border-gray"> Complaints </h2>
            </div>
            <div class="col-lg-6 col-12">
                <ul class="bg-white border rounded pl-0">
                    <?php
                        $sql="select * from complains a join user c where  a.user_id=c.user_id";
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result))
                        {
                            $timestamp = strtotime($row['c_date']);
                            print "<li class=\"d-flex border-bottom\">
                                <div class=\"py-3 px-4 border-right text-center\">
                                    <h3 class=\"text-primary mb-0\">".date("d", $timestamp)."</h3>
                                    <p class=\"mb-2\">".date("M", $timestamp)."</p>
                                </div>
                                <div class=\"p-3\">
                                    <a href=\"complain.php?cid=".$row['complain_id']."\" class=\"h4 font-primary text-dark\"> complain: ".$row['c_title']."</a>
                                    <p>by ".$row['user_name']."</p>
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