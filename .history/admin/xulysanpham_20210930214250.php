
<?php
  include '../db/conect.php';
?>
<?php
  if(isset($_POST['themsanpham'])) {
    $tensanpham = $_POST['tensanpham'];
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['giasanpham'];
    $giakhuyenmai = $_POST['giakhuyenmai'];
    $danhmuc = $_POST['danhmuc'];
    $chitiet = $_POST['chitiet'];
    $mota = $_POST['mota'];
    $path = '../uploads/';
    $sql_insert_product = mysqli_query($con, "INSERT INTO `tbl_sanpham`(`sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakhuyenmai`,`sanpham_soluong`, `sanpham_image`, `category_id`) VALUES ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");
    move_uploaded_file($hinhanh_tmp, $path.$hinhanh);
  }
  else if(isset($_POST['capnhatsanpham'])) {
    $id_update = $_POST['capnhat_id'];
    $tensanpham = $_POST['tensanpham'];
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['giasanpham'];
    $giakhuyenmai = $_POST['giakhuyenmai'];
    $danhmuc = $_POST['danhmuc'];
    $chitiet = $_POST['chitiet'];
    $mota = $_POST['mota'];
    $path = '../uploads/';
    if($hinhanh=="") {
      $sql_update_image = "UPDATE tbl_sanpham SET sanpham_name = '$tensanpham',sanpham_chitiet = '$chitiet',sanpham_mota = '$mota',sanpham_gia = '',sanpham_giakhuyenmai = '$giakhuyenmai',sanpham_soluong = '$soluong', category_id= '$danhmuc' WHERE sanpham_id = '$id_update'";
    }
    else {
      $sql_update_image = "UPDATE tbl_sanpham SET sanpham_name = '$tensanpham',sanpham_chitiet = '$chitiet',sanpham_mota = '$mota',sanpham_gia = '',sanpham_giakhuyenmai = '$giakhuyenmai',sanpham_soluong = '$soluong',sanpham_image = '$hinhanh', category_id= '$danhmuc'  WHERE sanpham_id = '$id_update'";
    }
    mysqli_query($con, $sql_update_image);
  }
?>
<?php 
  if(isset($_GET['xoa'])) {
    $id = $_GET['xoa'];

    $sql_delete_sp = mysqli_query($con, "DELETE FROM tbl_sanpham WHERE sanpham_id = '$id'");
  }
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
         <?php
        if(isset($_GET['quanly'])=='capnhat') {
          $id_capnhat = $_GET['capnhat_id'];
          $sql_capnhat = mysqli_query($con, "SELECT * FROM tbl_sanpham WHERE sanpham_id = '$id_capnhat'");
          $row_capnhat = mysqli_fetch_array($sql_capnhat);
          ?>
           <div class="col-md-4">
            <h4>Cập nhật sản phẩm</h4>
            <form action="" method="POST" enctype='multipart/form-data'>
             <label for="">Tên sản phẩm</label>
              <input type="text" name="tensanpham" class="form-control" value="<?php echo $row_capnhat['sanpham_name'] ?>">
              <br>
              <input type="hidden" name="id_update" class="form-control" value="<?php echo $row_capnhat['sanpham_id'] ?>">
              <br>
              <label for="">Hình ảnh</label>
              <input type="file" name="hinhanh" class="form-control">
              <br>
              <img src="../uploads/<?php echo $row_capnhat['sanpham_image'] ?>" width="80" height="80" alt="">
              <br><br>
              <label for="">Giá</label>
              <input type="text" name="giasanpham" class="form-control" value="<?php echo number_format($row_capnhat['sanpham_gia']).'vnd' ?>">
              <br>
              <label for="">Giá khuyến mãi</label>
              <input type="text" name="giakhuyenmai" class="form-control" value="<?php echo number_format($row_capnhat['sanpham_giakhuyenmai']).'vnd'?>">
              <br>
              <label for="">Số lượng</label>
              <input type="text" name="soluong" class="form-control" value="<?php echo $row_capnhat['sanpham_soluong'] ?>">
              <br>
              <label for="">Mô tả</label>
              <textarea name="mota" class="form-control"><?php echo $row_capnhat['sanpham_mota'] ?></textarea>
              <br>
              <label for="">Chi tiết</label>
              <textarea name="chitiet" class="form-control"><?php echo $row_capnhat['sanpham_chitiet'] ?></textarea>
              <br>
              <label for="">Danh mục</label>
              <?php
                $sql_danhmuc = mysqli_query($con, "SELECT * FROM tbl_category ORDER BY category_id DESC ")
              ?>
              <select name="danhmuc" id="" class="form-control">
                <option value="0">----Chọn danh mục----</option>
                <?php 
                  while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)) {
                ?>
                <option value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name'] ?></option>
                <?php
                  }
                ?>
              </select>
              <br>
              <input type="submit" name="themsanpham" value="Cập nhật sản phẩm" class="btn btn-success">
            </form>
          </div>
        <?php
        } else {
          ?>
              <div class="col-md-4">
            <h4>Thêm sản phẩm</h4>
            <form action="" method="POST" enctype='multipart/form-data'>
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
              <label for="">Số lượng</label>
              <input type="text" name="soluong" class="form-control" placeholder="Số lượng...">
              <br>
              <label for="">Mô tả</label>
              <textarea name="mota" class="form-control"></textarea>
              <br>
              <label for="">Chi tiết</label>
              <textarea name="chitiet" class="form-control"></textarea>
              <br>
              <label for="">Danh mục</label>
              <?php
                $sql_danhmuc = mysqli_query($con, "SELECT * FROM tbl_category ORDER BY category_id DESC ")
              ?>
              <select name="danhmuc" id="" class="form-control">
                <option value="0">----Chọn danh mục----</option>
                <?php 
                  while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)) {
                ?>
                <option value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name'] ?></option>
                <?php
                  }
                ?>
              </select>
              <br>
              <input type="submit" name="themsanpham" value="Thêm sản phẩm" class="btn btn-success">
            </form>
          </div>
          <?php
        }
      ?>
      <div class="col-md-8">
      <h4>Danh sách sản phẩm</h4>
      <?php
        $sql_select_sp = mysqli_query($con, "SELECT * FROM tbl_sanpham, tbl_category WHERE tbl_sanpham.category_id = tbl_category.category_id  ORDER BY tbl_sanpham.category_id DESC");
      ?>
      <table class="table table-bordered">
        <tr>
          <th>STT</th>
          <th>Tên sản phẩm</th>
          <th>Hình ảnh</th>
          <th>Số lượng</th>
          <th>Danh mục</th>
          <th>Giá sản phẩm</th>
          <th>Giá khuyến mãi</th>
          <th>Quản lý</th>
        </tr>
        <?php
        $i= 0;
          while($row_sp = mysqli_fetch_array($sql_select_sp)){
            $i++;
        ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row_sp['sanpham_name']?></td>
            <td><img src="../uploads/<?php echo $row_sp['sanpham_image']?>" width="80" height="80" alt=""></td>
            <td><?php echo $row_sp['sanpham_soluong']?></td>
            <td><?php echo $row_sp['category_name']?></td>
            <td><?php echo number_format($row_sp['sanpham_gia']).'vnd'?></td>
            <td><?php echo number_format($row_sp['sanpham_giakhuyenmai']).'vnd'?></td>
            <td style="text-align: center;"><a style="font-size: 14px;width: 100px;" href="?xoa=<?php echo $row_sp['sanpham_id'] ?>" class="btn btn-danger">Xóa</a> <a href="xulysanpham.php?quanly=capnhat&capnhat_id=<?php echo $row_sp['sanpham_id'] ?>" style="width: 100px; font-size: 14px" class="btn btn-warning">Cập nhật</a></td>
          </tr>
          <?php
          }
          ?>
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
