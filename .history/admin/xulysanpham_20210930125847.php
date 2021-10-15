
<?php
  include '../db/conect.php';
?>
<!-- <?php
  if(isset($_POST['themdanhmuc'])) {
    $tendanhmuc = $_POST['danhmuc'];

    $sql_insert = mysqli_query($con, "INSERT INTO tbl_category(category_name) VALUES  ('$tendanhmuc')");
  }
  else if(isset($_POST['capnhatdanhmuc'])) {
    $id_danhmuc = $_POST['id_danhmuc']; 
    $tendanhmuc = $_POST['danhmuc'];
    $sql_update = mysqli_query($con, "UPDATE tbl_category SET category_name  = '$tendanhmuc WHERE category = '$id_danhmuc");
    header('Location: xulydanhmuc.php');
  }
  if(isset($_GET['xoa'])) {
    $id = $_GET['xoa'];

    $sql_delete = mysqli_query($con, "DELETE FROM tbl_category WHERE category_id = '$id'");
  }
  
?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Sản phẩm</title>

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
          <div class="container">
    <div class="row">
           <div class="col-md-4">
            <h4>Thêm sản phẩm</h4>
            <form action="" method="POST">
             <label for="">Tên sản phẩm</label>
              <input type="text" name="tensanpham" class="form-control" placeholder="Tên sản phẩm...">
              <br>
              <label for="">Hình ảnh</label>
              <input type="file" name="hinhanh" class="form-control">
              <br>
              <label for="">Giá</label>
              <input type="text" name="giasanpham" class="form-control" placeholder="Giá sản phẩm...">
              <br>
              <label for="">Giá khuyến mãi</label>
              <input type="text" name="giakhuyenmai" class="form-control" placeholder="Giá khuyến mãi...">
              <br>
              <label for="">Mô tả</label>
              <textarea name="mota" class="form-control"></textarea>
              <br>
              <label for="">Chi tiết</label>
              <textarea name="chitiet" class="form-control"></textarea>
              <br>
              <label for="">Danh mụct</label>
              <select name="danhmuc" id="">
                <option value="">----Chọn danh mục----</option>
                <option value="">Laptop</option>
              </select>
              <input type="submit" name="themdanhmuc" value="Thêm sản phẩm" class="btn btn-success">
            </form>
          </div>
      <div class="col-md-8">
      <h4>Danh sách sản phẩm</h4>
      <!-- <?php
        $sql_select = mysqli_query($con, "SELECT * FROM tbl_category  ORDER BY category_id DESC");
      ?> -->
      <table class="table table-bordered">
        <tr>
          <th>STT</th>
          <th>Tên danh mục</th>
          <th>Quản lý</th>
        </tr>
        <!-- <?php
        $i= 0;
          while($row_category = mysqli_fetch_array($sql_select)){
            $i++;
        ?> -->
          <tr>
            <td>1</td>
            <td>frggege</td>
            <td style="width: 200px"><a href="" class="btn btn-danger">Xóa</a> || <a href="" class="btn btn-warning">Cập nhật</a></td>
          </tr>
          <!-- <?php
          }
          ?> -->
      </table>
      </div>
    </div>
  </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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
