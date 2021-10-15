<?php
  include '../db/conect.php';
?>
<?php
  if(isset($_POST['themdanhmuc'])) {
    $tendanhmuc = $_POST['danhmuc'];

    $sql_insert = mysqli_query($con, "INSERT INTO tbl_category(category_name) VALUES  ('$tendanhmuc')");
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
      <div class="col-md-4">
        <h4>Thêm danh mục</h4>
        <label for="">Tên danh mục</label>
        <input type="text" name="danhmuc" class="form-control" placeholder="Tên danh mục...">
        <br>
        <input type="submit" name="themdanhmuc" value="Thêm danh mục" class="btn btn-success">
      </div>
      <div class="col-md-8">
      <h4>Liệt kê danh mục</h4>
      <table class="table table-reponsive table-bordered">
        <tr>
          <th>STT</th>
          <th>Tên danh mục</th>
        </tr>
          <tr>
            <td>1</td>
            <td>Laptop</td>
          </tr>
      </table>
      </div>
    </div>
  </div>
</body>
</html>