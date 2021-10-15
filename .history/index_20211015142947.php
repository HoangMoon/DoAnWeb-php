<?php
	session_start();
	include "./db/conect.php";
	include './inc/incLogin.php';
?>
<?php 
	if(isset($_POST['dangky'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $note = $_POST['note'];
    $giaohang = $_POST['giaohang'];
  
    $sql_khachhang = mysqli_query($con,"INSERT INTO tbl_khachhang(name, phone, email, address, note, giaohang, password) VALUES ('$name','$phone','$email', '$address','$note', '$giaohang', '$password')");
    $sql_khachhang = mysqli_query($con, "SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1");
    $row_khachhang = mysqli_fetch_array($sql_khachhang);
    $_SESSION['dangnhap_home'] = $name;
    $_SESSION['khachhang_id'] = $row_khachhang['khachhang_id'];
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cửa hàng bán điện máy</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
  <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
	<link rel="stylesheet" type="text/css" href="css/contact.css"  media="all">
	<link rel="stylesheet" type="text/css" href="./css/stylehh.css" media="all">
</head>

<style>
	.main-top-w3l, button.w3view-cart , .snipcart-details input.button , .copy-right  {
  background: #1fa2ff !important;
} 

.snipcart-details input.button  {
	border-radius: 10px;
}
.btn-buy {
		display: flex;
    position: relative;
}

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

/*---*/

.btn-search {
  border-radius: 0 6px 6px 0 !important;
  background: #1fa2ff !important;
}
.logo_agile h1 a {
    color: #1FA2FF;
}

	body::-webkit-scrollbar {
  width: 8px;
}

body::-webkit-scrollbar-thumb {
	border-radius: 10px;
  background: #36D1DC;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to bottom, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to bottom, #5B86E5, #36D1DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

  /* Admin Login */
  form.login__create {
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

	.form {
    padding: 30px 40px;
}

.form-control {
    padding-bottom: 20px;
    position: relative;
		border: 0;
}

.form-control label {
    display: inline-block;
    margin-bottom: 5px;
}

.form-control input {
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    width: 100%;
    font-size: 14px;
    padding: 10px;
}

.form-control.success input {
    border-color: #2ecc71;
}

.form-control.error input {
    border-color: #e74c3d;
}

.form-control i {
  	position: absolute;
    top: 56%;
    right: 25px;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    font-size: 14px;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    visibility: hidden;
    transition: all 0.2s ease;
    color: #fff;
    border-radius: 50%;
}

.form-control.success i.icon-check {
    opacity: 1;
    visibility: visible;
    background-color: #2ecc71;
}

.form-control.error i.icon-ex {
    opacity: 1;
    visibility: visible;
    background-color: #e74c3d;
}

.form-control i.icon-eye {
    opacity: 1;
    visibility: visible;
    color: #333;
    cursor: pointer;
}

.form-control small {
    position: absolute;
    bottom: 0;
    left: 0;
    opacity: 0;
    visibility: hidden;
    transition: all 0.2s ease;
}

.form-control.error small {
    color: #e74c3d;
    opacity: 1;
    visibility: visible;
}

.form button {
    background-color: #8e44ad;
    color: #fff;
    border: 2px solid #8e44ad;
    border-radius: 4px;
    display: block;
    padding: 10px;
    width: 100%;
}

.product-cart {
  background-color: #fff;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  border-radius: 10px;
	padding: 20px 15px;
}

/*step ctietsq*/
.stepper-input {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 180px;
  height: 80px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 40px;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  overflow: hidden;
}

.stepper-input input {
  display: none;
}

.stepper-input .input {
  width: 100%;
  height: 100%;
  display: flex;
}

.stepper-input .input button {
  width: 50px;
  height: 100%;
  background-color: #fff;
  color: #222;
  font-size: 30px;
  cursor: pointer;
  transition: all 0.25s linear;
}

.stepper-input .input button:active {
  background-color: #555;
}

.stepper-input .input .range {
  flex: 1;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 30px;
}

.stepper-input .input .range .list span {
  display: block;
  width: 100%;
  height: 80px;
  color: #222;
  font-size: 30px;
  line-height: 80px;
}

.number-cart1 {
  width: 30%;
  height: 50px;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 0 5px;
  outline: none;
}

.checkout-left {
  margin-top: 30px;
  background-color: #fff;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  padding: 20px 30px;
  border-radius: 10px;
}

.information-wrapper input,
.information-wrapper  textarea 
.information-wrapper select {
  border-bottom: 1px solid #fff !important;
  border-radius: 10px;
}

.information-wrapper  textarea {
  border: 1px solid #ccc;
  margin-bottom: 20px;
  height: 200px;
}


</style>
<body>
	<?php
include './inc/topbar.php';
include './inc/menu.php';
include './inc/slider.php';
if(isset($_GET['quanly'])) {
	$tam = $_GET['quanly'];
}
else {
	$tam = '';
}
if($tam=='danhmuc') {
	include ('./inc/danhmuc.php');
}
else if($tam=='chitietsp') {
	include ('./inc/chitietsp.php');
}
else if($tam =='giohang') {
	include ('./inc/giohang.php');
}
else if($tam =='lienhe') {
	include ('./inc/lienhe.php');
}
else if($tam =='timkiem'){
	include ('./inc/timkiem.php');
}
else if($tam =='tintuc'){
	include ('./inc/tintuc.php');
}
else if($tam =='chitiettin'){
	include ('./inc/chitiettin.php');
}
else if($tam =='xemdonhang'){
	include ('./inc/xemdonhang.php');
}
else {
	include ('./inc/home.php');
}
	include './inc/footer.php';
?>


	<!-- js-files -->
	<script src="./js/app.js"></script>

  <!-- slider -->
  <script
    type="text/javascript"
    src="https://code.jquery.com/jquery-1.11.0.min.js"
  ></script>
  <script
    type="text/javascript"
    src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
  ></script>
  <script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
  ></script>

  <script >
		$(".product-row").slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true,
      prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
      nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
});
	</script>
    <script >
		$.each(".product-row").slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: true,
      prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
      nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
});
	</script>
  <script>
    $('.smart-slider').slick({
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear'
});
  </script>
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<!-- <script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script> -->
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<!-- <script src="js/minicart.js"></script> -->
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->
		<!-- imagezoom -->
		<script src="js/imagezoom.js"></script>
	<!-- //imagezoom -->

	<!-- flexslider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->
	<!-- //password-script -->
	
	<!-- scroll seller -->
	<script src="js/scroll.js"></script>
	<!-- //scroll seller -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->
</body>

</html>