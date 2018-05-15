<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home 02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/icons/favicon.png') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/linearicons-v1.0.0/icon-font.min.css') ?>">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animate/animate.css') ?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/select2/select2.min.css') ?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/daterangepicker/daterangepicker.css') ?>">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/slick/slick.css') ?>">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/MagnificPopup/magnific-popup.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/util.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css') ?>">
<!--===============================================================================================-->   
</head>
<body >
	
	<!-- Header -->
	<header class="header-v2">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="<?= base_url('Home') ?>">Home</a>
							</li>

							<li>
								<a href="<?= base_url('Home/product') ?>">Shop</a>
							</li>

							<li class="label1" data-label1="hot">
								<a href="<?= base_url('Home/shopping') ?>">Features</a>
							</li>

							<li>
								<a href="<?= base_url('Home/viewProduct') ?>">Product</a>
							</li>

							<li>
								<a href="<?= base_url('Home/about') ?>">About</a>
							</li>

							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">
						<div class="flex-c-m h-full p-r-24">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
								<i class="zmdi zmdi-search"></i>
							</div>
						</div>

					<div class="flex-c-m h-full p-lr-10 bor5">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart cart-icon">
						<i class="zmdi zmdi-shopping-cart"></i>
							</div>
						</div>
					</div>
							
							
						<div class="flex-c-m h-full p-lr-19">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
								<i class="zmdi zmdi-menu"></i>
							</div>
						</div>
					</div>
				</nav>
			</div>	
		</div>


          
		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
				<div class="flex-c-m h-full p-r-10">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>
				</div>

				<div class="flex-c-m h-full p-lr-10 bor5">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart cart-icon" data-notify="5">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>
				</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>



		<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	