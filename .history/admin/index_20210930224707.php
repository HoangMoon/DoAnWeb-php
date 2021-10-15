<?php
  session_start();
   include '../db/conect.php';
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
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/fixedh.css">
</head>

<style>
  /* Admin Login */
  form {
    max-width: 500px;
    width: 100%;
    background-color: #fff;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    border-radius: 10px;
    padding: 20px 25px;
  }

  form h3 {
    text-align: center;
    font-size: 25px;
  }

  .form-login {
    width: 100%;
    margin-top: 20px;
  }

  .form-group {
    padding-bottom: 15px;
    position: relative;
    text-align: center;
    max-width: 300px;
    margin: 0 auto;
    display: flex;
    align-items: center;
  }

  .form-group input {
    width: 300px;
    padding: 10px 30px;
    border: 1px solid #ccc;
    border-radius: 5px;
    position: relative;
  }

  .form-group input::placeholder {
    font-size: 14px;
  }

  .form-group input:focus {
    transition: all 0.5 linear;
    border-color: #3d6ef7;
  }

  .form-group i.icon-form {
    position: absolute;
    z-index: 10;
    padding: 0 10px;
  }

  .form-group i.eye-pass {
    position: absolute;
    right: 10px;
  }

  .form-group .login__button {
    padding: 15px 30px;
    background-color: #3d6ef7;
    color: #fff;
    border-radius: 10px;
    text-align: center;
    margin: 0 auto;
  }
</style>

<body style="background: #2193b0;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
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

    <script src="./js/app.js"></script>
</body>

</html>