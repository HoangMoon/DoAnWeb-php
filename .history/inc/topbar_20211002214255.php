<?php 	
	include './db/conect.php';
	// include './incLogin.php';
?>
<?php
  if(isset($_POST['dangnhap_home'])) {
    $taikhoan = $_POST['email_login'];
    $matkhau = md5($_POST['password_login']);

    if($taikhoan== "" || $matkhau=="") {
      echo '<script>alert("Bạn hãy nhập đủ thông tin")</script>';
    }
    else {
      $sql_select_admin = mysqli_query($con, "SELECT * FROM tbl_login WHERE email = '$taikhoan' AND password = '$matkhau' LIMIT 1");
      $count = mysqli_num_rows($sql_select_admin);
      $row_dangnhap = mysqli_fetch_array($sql_select_admin);
      if($count > 0) {
        $_SESSION['dangnhap'] = $row_dangnhap['username'];
				echo '<script>alert("Đăng nhập thành công!")</script>';
      }
      else {
        echo '<p>Tài khoản hoặc mật khẩu sai</p>';
      }
    }
  }
?>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Uy tín - Nhanh chóng - Tiện lợi
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-truck mr-2"></i>Xem đơn hàng</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 001 234 5678
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#dangnhap" class="text-white">
								<i class="fa fa-sign-out" aria-hidden="true"></i> Đăng nhập</a>
						</li>
						<li class="text-center border-right text-white">
							<a href="?login=dangxuat" style="color: #fff;">Đăng xuất</a>
						</li>
						<li class="text-center text-white">
							<i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 20px;"></i>
							<?php
								if(!isset($_SESSION['dangnhap'])) {
										unset($_SESSION['dangnhap']);
								}
								else {
									?>
										<?php echo $_SESSION['dangnhap']?>
									<?php
								}
							?>
						</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	<!-- log in -->
	<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content" style="border: none;">
				<div class="modal-header">
					<h5 class="modal-title text-center">Đăng nhập</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<form action="" method="POST" class="login__create">
        <div class="form-login">
            <div class="form-group">
                <i class="fa fa-envelope-o icon-form" aria-hidden="true"></i>
                <input type="text" name="email_login" id="" class="form-email" placeholder="Email">
            </div>
            <div class="form-group">
                <i class="fa fa-lock icon-form" aria-hidden="true"></i>
                <input type="password" name="password_login" id="" class="form-password" placeholder="Password">
                <i class="fa fa-eye eye-pass icon-eye" aria-hidden="true"></i>
            </div>
            <div class="form-group">
                <input type="submit" name="dangnhap_home" class="login__button" value="Đăng nhập">
            </div>
        </div>
						<p class="text-center dont-do mt-3">Chưa có tài khoản?
							<a href="#" data-toggle="modal" data-target="#dangky">
								Đăng ký ngay</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="dangky" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content" style="border: none;">
				<div class="modal-header">
					<h5 class="modal-title">Đăng ký tài khoản</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<form action="" class="form" id="form" method="POST">
            <div class="form-control">
                <label for="#">User name</label>
                <input type="text" name="user" id="username" placeholder="huyhoang0508">
                <i class="fa fa-check icon-check"></i>
                <i class="fa fa-exclamation icon-ex" aria-hidden="true"></i>
                <small class="error-txt">Error message</small>
            </div>
            <div class="form-control">
                <label for="#">Enail</label>
                <input type="email" name="email" id="email" placeholder="huyhoang@gmail.com">
                <i class="fa fa-check icon-check"></i>
                <i class="fa fa-exclamation icon-ex" aria-hidden="true"></i>
                <small class="error-txt">Error message</small>
            </div>
            <div class="form-control">
                <label for="#">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <i class="fa fa-eye icon-eye" aria-hidden="true"></i>
                <small class="error-txt">Error message</small>
            </div>

            <input type="submit" style="width: 100%" name="dangky" class="login__button btn btn-primary" value="Đăng ký">
        </form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.html" class="font-weight-bold font-italic">
							 HH Store
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
								<button class="btn my-2 my-sm-0 btn-search" type="submit">Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->