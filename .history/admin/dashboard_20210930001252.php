<?php
  session_start();
  if(!isset($_SESSION['dangnhap'])) {
    header('Location: index.php');
  }
?>
<?php
  if(isset($_GET['login'])) {
    $dangxuat = $_GET['login'];
  }
  else {
    $dangxuat = '';
  }
  if($dangxuat='dangxuat') {
    unset('dangnhap');
    header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Admin</title>
</head>
<body>
  <p>Xin chào <?php echo $_SESSION['dangnhap']?> <a href="?login=dangxuat">Đăng xuất</a></p>
</body>
</html>