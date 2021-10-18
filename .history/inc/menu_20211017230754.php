<?php
		$sql_category = mysqli_query($con, 'SELECT * FROM tbl_category ORDER BY category_id DESC')

	?>
	<style>
		@media screen and (max-width: 1279px) {
			.menu-toggle {
			display: block;
			margin-left: 30px;
			display: block;
			z-index: 100;
			font-size: 40px;
			margin-left: 20px;
			right: -10px;
			position: relative;
			cursor: pointer;
	}
	.header-menu {
			position: fixed;
			top: 0;
			right: 0;
			background-color: #fff;
			box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
			width: 100%;
			height: 100%;
			z-index: 30;
			display: flex;
			flex-direction: column !important;
			align-items: center !important;
			justify-content: center;
			row-gap: 20px;
			font-size: 18px;
			transform: translateX(100%);
			transition: all 0.5s linear;
	}
	.is-show {
			transform: translateX(0);
	}
	a.nav-link {
		font-size: 25px !important;
	}
	.banner-smart {
		display: none !important;
	}
	}
		
	</style>
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">Danh mục sản phẩm</option>
							<?php
								while($row_category = mysqli_fetch_array($sql_category)) {
							?>
							<option value="<?php echo $row_category['category_id']?>"><?php echo $row_category['category_name']?></option>
							<?php
							}
							?>
						</select>
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5 header-menu">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Trang chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
					<?php 
						$sql_category_danhmuc = mysqli_query($con, 'SELECT * FROM tbl_category ORDER BY category_id DESC');
						while($row_category_danhmuc = mysqli_fetch_array($sql_category_danhmuc)) {
					?>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="?quanly=danhmuc&id=<?php echo $row_category_danhmuc['category_id']?>" role="button" aria-haspopup="true" aria-expanded="false">
							<?php echo $row_category_danhmuc['category_name']?>
							</a>
						</li>
						<?php
						}
						?>
					<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
						<?php
							$sql_danhmuctin = mysqli_query($con,"SELECT * FROM tbl_danhmuc_tin ORDER BY danhmuctin_id DESC");
						?>
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Tin Tức
							</a>
							<div class="dropdown-menu">
							<?php
							while($row_danhmuctin = mysqli_fetch_array($sql_danhmuctin)){
							?>
								<a class="dropdown-item" href="?quanly=tintuc&id_tin=<?php echo $row_danhmuctin['danhmuctin_id']?>"><?php echo $row_danhmuctin['tendanhmuc'] ?></a>
								
								<?php 
							}
								?>
							</div>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Trang
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="product.html">Sản phẩm mới</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="checkout.html">Kiểm tra hàng</a>
								<a class="dropdown-item" href="payment.html">Thanh toán</a>
							</div>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							
							<a class="nav-link dropdown-toggle" href="?quanly=lienhe" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Liên hệ
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="?quanly=recruitment">Recruitment</a>
								<a class="dropdown-item" href="?quanly=lienhe">Contact Us</a>
						</div>
						</li>
					</ul>
				</div>
				<i class="fa fa-bars menu-toggle" aria-hidden="true"></i>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<script>
		/*=========TOGGLE MENU=============*/
		const toggleMenu = document.querySelector(".menu-toggle");
  const headerMenu = document.querySelector(".header-menu");
  const itemLink = document.querySelectorAll(".item-link");

  toggleMenu.addEventListener("click", function (e) {
    headerMenu.classList.toggle("is-show");
    toggleMenu.classList.toggle("fa-bars");
    toggleMenu.classList.toggle("fa-times");
  });

  [...itemLink].forEach((item) =>
    item.addEventListener("click", function (e) {
      headerMenu.classList.remove("is-show");
      toggleMenu.classList.toggle("fa-bars");
      toggleMenu.classList.toggle("fa-times");
    })
  );

  document.addEventListener("click", function (e) {
    if (!headerMenu.contains(e.target) && !e.target.matches(".menu-toggle")) {
      headerMenu.classList.remove("is-show");
      toggleMenu.classList.add("fa-bars");
      toggleMenu.classList.remove("fa-times");
    }
  });

	</script>