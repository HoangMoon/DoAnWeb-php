<?php
  include '../db/conect.php';
  include '../admin/2404/incLogin.php'
?>
<?php 
  $sql_phanhoi = mysqli_query($con, "SELECT COUNT(email) FROM tbl_lienhe");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Trang chủ Admin</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/styleh.css">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
             <?php
              include("2404/menu.php");
              include("2404/top.php");
              ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
            <div class="statistical">
              <?php 
                  $sql_phanhoi = mysqli_query($con, "SELECT * , COUNT(email) as 'phanhoi' FROM tbl_lienhe");
                  while($row_ph = mysqli_fetch_array($sql_phanhoi)) {
              ?>
              <div class="list-statis feed-back">
              <i class="fa fa-comments-o" aria-hidden="true"></i>
              <div class="feed-number">
                <span class="number-txt"><?php echo $row_ph['phanhoi'] ?></span>
                <span class="txt-desc">Phản hồi</span>
              </div>
              </div>
              <?php
                  }
              ?>
              <?php 
                $sql_dangky = mysqli_query($con, "SELECT COUNT(email_login) AS 'dangky' FROM tbl_login");
                while($row_dk = mysqli_fetch_array($sql_dangky)) {
              ?>
              <div class="list-statis login-total">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              <div class="feed-number">
                <span class="number-txt"><?php echo $row_dk['dangky'] ?></span>
                <span class="txt-desc">Lượt đăng ký</span>
              </div>
              </div>
              <?php
                }
              ?>
              <?php 
                $sql_doanhthu = mysqli_query($con, "SELECT SUM(tbl_donhang.soluong*tbl_sanpham.sanpham_giakhuyenmai) AS 'doanhthu' FROM tbl_donhang,tbl_sanpham WHERE tbl_donhang.sanpham_id = tbl_sanpham.sanpham_id");
                  $row_dt = mysqli_fetch_array($sql_doanhthu);
              ?>
              <div class="list-statis money-total">
              <i class="fa fa-line-chart" aria-hidden="true"></i>
              <div class="feed-number">
                <span class="number-txt"><?php echo number_format($row_dt['doanhthu']) ?></span>
                <span class="txt-desc">Tổng thu nhập</span>
              </div>
              </div>
              <?php

              ?>
              <div class="list-statis total-order">
              <i class="fa fa-cart-plus" aria-hidden="true"></i>
              <div class="feed-number">
                <span class="number-txt">30</span>
                <span class="txt-desc">Đơn đặt hàng</span>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            @coppyright Bản quyền thuộc by <a href="https://colorlib.com">Huy Hoàng</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	
  </body>
</html>
