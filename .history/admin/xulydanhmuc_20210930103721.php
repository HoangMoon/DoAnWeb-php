<?php
  include '../db/conect.php';
?>
<?php
  if(isset($_POST['themdanhmuc'])) {
    $tendanhmuc = $_POST['danhmuc'];

    $sql_insert = mysqli_query($con, "INSERT INTO tbl_category(category_name) VALUES  ('$tendanhmuc')");
  }
  else if(isset($_POST['capnhatdanhmuc'])) {
    $id_danhmuc = $_POST['id_danhmuc']; 
    $tendanhmuc = $_POST['danhmuc'];
    $sql_update = mysqli_query($con, "UPDATE tbl_category SET category_name  = '$tendanhmuc WHERE category = '$id_danhmuc");
    header('Location: danhmuc.php');
  }
  if(isset($_GET['xoa'])) {
    $id = $_GET['xoa'];

    $sql_delete = mysqli_query($con, "DELETE FROM tbl_category WHERE category_id = '$id'");
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh mục</title>
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
  <div class="container">
    <div class="row">
      <?php
        if(isset($_GET['quanly'])=='capnhat') {
          $id_capnhat = $_GET['id'];
          $sql_capnhat = mysqli_query($con, "SELECT * FROM tbl_category WHERE category_id = '$id_capnhat'");
          $row_capnhat = mysqli_fetch_array($sql_capnhat);
          ?>
           <div class="col-md-4">
          <h4>Cập nhật danh mục</h4>
          <label for="">Tên danh mục</label>
          <form action="" method="POST">
            <input type="text" name="danhmuc" class="form-control" value="<?php echo $row_capnhat['category_name'] ?>">
            <br>
            <input type="hidden" name="id_danhmuc" class="form-control" value="<?php echo $row_capnhat['category_id'] ?>" >
            <input type="submit" name="capnhatdanhmuc" value="Cập nhật danh mục" class="btn btn-success">
          </form>
      </div>
        <?php
        } else {
          ?>
           <div class="col-md-4">
            <h4>Thêm danh mục</h4>
            <label for="">Tên danh mục</label>
            <form action="" method="POST">
              <input type="text" name="danhmuc" class="form-control" placeholder="Tên danh mục...">
              <br>
              <input type="submit" name="themdanhmuc" value="Thêm danh mục" class="btn btn-success">
            </form>
          </div>
          <?php
        }
      ?>
      <div class="col-md-8">
      <h4>Liệt kê danh mục</h4>
      <?php
        $sql_select = mysqli_query($con, "SELECT * FROM tbl_category  ORDER BY category_id DESC");
      ?>
      <table class="table table-bordered">
        <tr>
          <th>STT</th>
          <th>Tên danh mục</th>
          <th>Quản lý</th>
        </tr>
        <?php
        $i= 0;
          while($row_category = mysqli_fetch_array($sql_select)){
            $i++;
        ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row_category['category_name'] ?></td>
            <td style="width: 200px"><a href="?xoa=<?php echo $row_category['category_id'] ?>" class="btn btn-danger">Xóa</a> || <a href="?quanly=capnhat&id=<?php echo $row_category['category_id'] ?>" class="btn btn-warning">Cập nhật</a></td>
          </tr>
          <?php
          }
          ?>
      </table>
      </div>
    </div>
  </div>
</body>
</html>