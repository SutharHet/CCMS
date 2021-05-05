<?php
    session_start();
    require_once("../config/connection.php");
    include("header.php");
    $sql="select * from complains where complain_id='".$_GET['cid']."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
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
                <h2 class="section-title section-title-border-gray">Complain title: <?php echo $row['c_title'] ?> </h2>
            </div>
            <div class="col-lg-12 col-12">
                <ul class="bg-white border rounded pl-0">
                    <?php
                        $sql1="select * from complains a join user b join status c where a.user_id=b.user_id and a.complain_id='".$row['complain_id']."' and a.status_id=c.status_id";
                        $result1=mysqli_query($conn,$sql1);
                        $row1=mysqli_fetch_array($result1);
                        
                            $timestamp = strtotime($row1['c_date']);
                            echo "<li class=\"d-flex border-bottom\">
                                <div class=\"py-3 px-4 border-right text-center\">
                                    <h3 class=\"text-primary mb-0\">".date("d", $timestamp)."</h3>
                                    <p class=\"mb-2\">".date("M", $timestamp)."</p>
                                </div>
                                <div class=\"p-3\">
                                    <p class=\"h4 font-primary text-dark\"> complain: ".$row1['complain']."</p>
                                    <p>by ".$row1['user_name']."</p>
                                    <p>status: ".$row1['status_title']."</p>";
                                    echo "<p class=\"h4 font-primary text-dark\"> solutions:</p>";
                                    $sql2="select * from solutions a join user b where a.user_id=b.user_id and a.complain_id='".$row1['complain_id']."'";
                                    $result2=mysqli_query($conn,$sql2);
                                    while ($row2=mysqli_fetch_array($result2))
                                    {
                                        echo "<p class=\"h4 font-primary text-dark\">&emsp;&emsp;".$row2['solution']."</p>
                                        <p>&emsp;&emsp;&emsp;by ".$row2['user_name']."</p>";
                                    }
                                    $_SESSION['complain_id']=$row1['complain_id'];
                                    echo "<a href=\"form-solution.php\" class=\"h4 font-primary text-dark\" style=\"float: right;\"> ->Add Solution</a>";
                                echo "</div>";
                            echo "</li>";
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