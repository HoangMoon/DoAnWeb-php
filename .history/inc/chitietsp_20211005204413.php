<?php
if(isset($_GET['id'])) {
  $id = $_GET['id'];
}
else {
  $id = '';
}
  $sql_chitiet = mysqli_query($con, "SELECT * FROM tbl_sanpham WHERE sanpham_id = '$id'");
?>
<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li>Single Product 1</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
  <?php 
    while($row_chitiet = mysqli_fetch_array($sql_chitiet)) {
  ?>
  	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<!-- //tittle heading -->
			<div class="row product-cart">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
						<ul class="slides">
								<li data-thumb="images/<?php echo $row_chitiet['sanpham_image'] ?>">
									<div class="thumb-image">
										<img src="images/<?php echo $row_chitiet['sanpham_image'] ?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								<li data-thumb="images/<?php echo $row_chitiet['sanpham_img1'] ?>">
									<div class="thumb-image">
										<img src="images/<?php echo $row_chitiet['sanpham_img1'] ?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								<li data-thumb="images/<?php echo $row_chitiet['sanpham_img2'] ?>">
									<div class="thumb-image">
										<img src="images/<?php echo $row_chitiet['sanpham_img2'] ?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $row_chitiet['sanpham_name'] ?></h3>
					<div class="star-vote flex">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
					</div>
					<p class="mb-3">
						<span class="item_price"><?php echo number_format($row_chitiet['sanpham_giakhuyenmai']).'vnd' ?></span>
						<del class="mx-2 font-weight-light"><?php echo number_format($row_chitiet['sanpham_gia']).'vnd' ?></del>
						<label>Miễn phí vận chuyển</label>
					</p>
					<div class="product-single-w3l">
            <p><?php echo $row_chitiet['sanpham_chitiet']?></p>
            <br>
            <p><?php echo $row_chitiet['sanpham_mota']?></p>
            <br>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out ">
							<form action="?quanly=giohang" method="post" class="form-cart">
								<fieldset>
									<input type="hidden" name="tensanpham" value="<?php echo $row_chitiet['sanpham_name'] ?>" />
									<input type="hidden" name="sanpham_id" value="<?php echo $row_chitiet['sanpham_id'] ?>" />	
									<input type="hidden" name="giasanpham" value="<?php echo $row_chitiet['sanpham_gia'] ?>" />	
									<input type="hidden" name="hinhanh" value="<?php echo $row_chitiet['sanpham_image'] ?>" />
									<div class="add-cart d-flex">
										<!-- <input type="number" min="1" name="soluong" value="1" class="number-cart" /> -->
										<div class="stepper-input">
										<input type="range" min="0" max="100" value="50" name="soluong">
										<div class="input">
												<button class="minus-btn">-</button>
												<div class="range">
														<div class="list">0</div>
												</div>
												<button class="plus-btn">+</button>
										</div>
										</div>
										<div class="btn-buy btn-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>
										<input  type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" /></div>
									</div>
								</fieldset>
							</form>
							<div class="social-interact mt-3">
									<h3 class="social-title mb-3" style="font-size: 20px;">Share sản phẩm</h3>
									<a href="#" class="modal-social">
											<i class="fa fa-facebook facebook" aria-hidden="true"></i>
									</a>
									<a href="#" class="modal-social">
											<i class="fa fa-twitter twitter" aria-hidden="true"></i>
									</a>
									<a href="#" class="modal-social">
											<i class="fa fa-instagram instagram" aria-hidden="true"></i>
									</a>
									<a href="#" class="modal-social">
											<i class="fa fa-youtube youtube" aria-hidden="true"></i>
									</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Single Page -->
  <?php
    }
  ?>