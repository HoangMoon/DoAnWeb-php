<?php
  session_start();
   include '../db/conect.php';
   include './js/app.js';
?>
<?php
  if(isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['email'];
    $matkhau = md5($_POST['pass']);

    if($taikhoan== "" || $matkhau=="") {
      // echo '<p>Bạn cần nhập đủ thông tin</p>';
    }
    else {
      $sql_select_admin = mysqli_query($con, "SELECT * FROM tbl_admin WHERE email = '$taikhoan' AND password = '$matkhau' LIMIT 1");
      $count = mysqli_num_rows($sql_select_admin);
      $row_dangnhap = mysqli_fetch_array($sql_select_admin);
      if($count > 0) {
        $_SESSION['dangnhap'] = $row_dangnhap['admin_name'];
        $_SESSION['admin_id'] = $row_dangnhap['admin_id'];
        header('Location: dashboardAdmin.php');
      }
      else {
        echo '<p>Tài khoản hoặc mật khẩu sai</p>';
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/fixedh.css">
</head>

<body>
    <form action="" method="POST" class="login__create">
        <h3>Đăng nhập Admin</h3>
        <div class="form-login">
            <div class="form-group">
                <i class="fa fa-envelope-o icon-form" aria-hidden="true"></i>
                <input type="text" name="email" id="" class="form-email" placeholder="Email">
            </div>
            <div class="form-group">
                <i class="fa fa-lock icon-form" aria-hidden="true"></i>
                <input type="password" name="pass" id="" class="form-password" placeholder="Password">
                <i class="fa fa-eye eye-pass icon-eye" aria-hidden="true"></i>
            </div>
            <div class="form-group">
                <input type="submit" name="dangnhap" class="login__button" value="Đăng nhập">
            </div>
        </div>
    </form>

    <div class="sweet-alert">
        <i class="fa fa-times alert-close"></i>
        <div class="alert-message">
            <i class="fa fa-check icon-message"></i>
            <span class="span-txt">Please enter the name in the correct format</span>
        </div>
    </div>
</body>

</html>