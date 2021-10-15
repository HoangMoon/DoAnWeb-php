<?php
  session_start();
   include '../db/conect.php';
?>
<?php
  if(isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['email'];
    $matkhau = md5($_POST['password']);

    if($taikhoan== "" || $matkhau=="") {
      echo '<p>Bạn cần nhập đủ thông tin</p>';
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
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập Admin</title>
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
  <h2 align="center" class="mt-3">Đăng nhập Admin</h2>
  <div class="col-md-12">
    <div class="form-group mx-auto d-flex justify-content-center">
      <form action="" method="POST">
        <label for="">Tài khoản</label>
        <input class="form-control" type="text" name="taikhoan" id="" placeholder="Nhập tài khoản...">
        <br>
        <label for="">Mật khẩu</label>
        <input class="form-control" type="password" name="matkhau" id="" placeholder="Nhập mật khẩu...">
        <br>
        <input type="submit" name="dangnhap" class="btn btn-primary" value="Đăng nhập">
      </form>
    </div>
  </div>
</body>
</html> -->

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
    <form action="" method="POST" class="login__create" autocomplete="off">
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
                <input type="submit" name="dangnhap"  class="login__button" value="Đăng nhập">
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

    <script>
      const loginCreate = document.querySelector(".login__create ");
const loginButton = document.querySelector(".login__button");

/// Validate Form
const sweetAlert = document.querySelector(".sweet-alert");
const spanTxt = document.querySelector(".span-txt");
const iconMessage = document.querySelector(".icon-message");
const iconEye = document.querySelectorAll(".icon-eye");
const alertClose = document.querySelector(".alert-close");
alertClose.addEventListener("click", function (e) {
  sweetAlert.classList.remove("show");
});

loginCreate.addEventListener("submit", function (e) {
  e.preventDefault();
  const user = this.elements["user"].value.trim();
  const password = this.elements["pass"].value.trim();
  const email = this.elements["email"].value.trim();
  const regexEmail =
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (user.length < 2) {
    sweetAlert.classList.add("show");
    iconMessage.classList.remove("fa-check");
    iconMessage.classList.add("fa-times");
    spanTxt.textContent =
      "Please enter your name and have more than 2 characters";
    return;
  } else {
    sweetAlert.classList.remove("show");
  }
  if (regexEmail.test(email)) {
    sweetAlert.classList.remove("show");
  } else {
    spanTxt.textContent = "Please enter correct email format";
    sweetAlert.classList.add("show");
    iconMessage.classList.remove("fa-check");
    iconMessage.classList.add("fa-times");
    return;
  }
  if (password.length < 6) {
    sweetAlert.classList.add("show");
    spanTxt.textContent = "Please enter a password with 8 characters";
    return;
  } else {
    sweetAlert.classList.remove("show");
  }
  sweetAlert.classList.add("show");
  iconMessage.classList.add("fa-check");
  iconMessage.classList.remove("fa-times");
  spanTxt.textContent = "Successfully registered the system";
});

// show password
iconEye.forEach((item) =>
  item.addEventListener("click", function (e) {
    const input = this.previousElementSibling;
    const inputType = input.getAttribute("type");
    if (inputType === "password") {
      input.setAttribute("type", "text");
    } else {
      input.setAttribute("type", "password");
    }
  })
);

    </script>
</body>

</html>