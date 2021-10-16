<style>
	 /* chi tiet sp*/

.form-cart {
	border-bottom: 1px solid #ccc;
	padding-bottom: 30px;
}

.occasion-cart .snipcart-details {
  width: 100% !important;
  margin: 0;
}

.add-cart input.number-cart {
    width: 100px;
    margin-right: 30px;
    outline: none;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
}

.btn-cart {
    width: 40%;
    height: 50px;
}

.social-interact a.modal-social i {
    border: 1px solid #ddd;
		border-radius: 5px;
    width: 40px;
    height: 40px;
    display: inline-block;
    line-height: 40px;
    text-align: center;
    font-size: 20px;
    margin-right: 6px;
}

a.modal-social i.facebook {
    color: #4867aa;
    transition: all 0.25s linear;
}

a.modal-social i.facebook:hover {
    background-color: #4867aa;
    color: #fff;
}

a.modal-social i.twitter {
    transition: all 0.25s linear;
    color: #1da1f2;
}

a.modal-social i.twitter:hover {
    background-color: #1da1f2;
    color: #fff;
}

a.modal-social i.instagram {
    color: #dd5144;
    transition: all 0.25s linear;
}

a.modal-social i.instagram:hover {
    background-color: #dd5144;
    color: #fff;
}

a.modal-social i.youtube {
    color: #bd081b;
    transition: all 0.25s linear;
}

a.modal-social:hover i.youtube {
    background-color: #bd081b;
    color: #fff;
}

	.btn-buy i.fa-cart-plus {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 15px;
		font-size: 21px;
		color: #fff;
}
button.button {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 190px;
	height: 45px;
	background-color: #3D6EF7;
	color: #fff;
	border: none;
	outline: none;
	border-radius: 5px;
	cursor: pointer;
	transition: all 0.25s linear;
}

button.button p {
	margin-left: 10px;
	color: #fff !important;
}

button.button:hover {
	opacity: 0.6;
}

.flex-control-thumbs  {
	display: flex !important;
	justify-content: center;
	align-items: center;
}

.flex-control-thumbs img {
	width: 150px;
	object-fit: cover;
}

.product-title p.heading-pd {
	text-transform: uppercase;
	margin-top: 20px;
	font-weight: bold;
}

.shipp-add {
	margin: 20px 0 30px;
	text-transform: uppercase;
	font-weight: 600;
	color: black;
}

img.shipper {
	width: 600px;
	object-fit: cover;
}
</style>
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
						<ul class="slides d-flex align-items-center">
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
						<div class="product-single-w3l product-title">
								<p class="heading-pd">Mô tả sản phẩm</p>
								<p><?php echo $row_chitiet['sanpham_chitiet']?></p>
								<br>
								<p class="heading-pd">Chi tiết sản phẩm</p>
								<p><?php echo $row_chitiet['sanpham_mota']?></p>
								<br>
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

							<i class="fa fa-heart-o" aria-hidden="true">
							<i class="fa fa-share" aria-hidden="true"></i>
					</div>
					<p class="mb-3">
						<span class="item_price"><?php echo number_format($row_chitiet['sanpham_giakhuyenmai']).'vnd' ?></span>
						<del class="mx-2 font-weight-light"><?php echo number_format($row_chitiet['sanpham_gia']).'vnd' ?></del>
						<label>Miễn phí vận chuyển</label>
					</p>
				
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out ">
							<form action="?quanly=giohang" method="post" class="form-cart">
								<fieldset>
									<input type="hidden" name="tensanpham" value="<?php echo $row_chitiet['sanpham_name'] ?>" />
									<input type="hidden" name="sanpham_id" value="<?php echo $row_chitiet['sanpham_id'] ?>" />	
									<input type="hidden" name="giasanpham" value="<?php echo $row_chitiet['sanpham_gia'] ?>" />	
									<input type="hidden" name="hinhanh" value="<?php echo $row_chitiet['sanpham_image'] ?>" />
									<div class="add-cart d-flex">
										<input type="number" min="1" name="soluong" value="1" class="number-cart" />
										<div class="btn-buy btn-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>
										<button type="submit" name="themgiohang" value = "" class="button" >
											<i class="fa fa-cart-plus" aria-hidden="true"></i>
												<p>Thêm giỏ hàng</p>
										</button>
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
						<p class="shipp-add">Đơn vị vận chuyển</p>
						<img class="shipper" src="./images/ctsp.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Single Page -->
  <?php
    }
  ?>
