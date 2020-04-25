<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/themify/themify-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/elegant-font/html-css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/noui/nouislider.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>
<body class="animsition">
	<header class="header1">
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fab fa-facebook"></a>
					<a href="#" class="topbar-social-item fab fa-instagram"></a>
					<a href="#" class="topbar-social-item fab fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fab fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fab fa-youtube"></a>
				</div>

				<span class="topbar-child1">
					Free shipping for standard order over $100
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="/" class="logo">
					<img src="{{ asset('images/logo.png') }}" alt="IMG-LOGO">
				</a>

                <div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="/">Home</a>
							</li>

							<li>
								<a href="/cart">Cart</a>
							</li>

							<li>
								<a href="/about">About</a>
							</li>

							<li>
								<a href="/contact">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<div class="header-icons">
					<span class="header-wrapicon1 dis-block">
						<a class="btn btn-dark mr-2" href="/login">Login</a>
						<a class="btn btn-dark" href="/register">Rigister</a>
				</span>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<i class="fas fa-shopping-cart header-icon1 js-show-header-dropdown" style="font-size: 25px;"></i>
						<span class="header-icons-noti">0</span>

						<div class="header-cart header-dropdown">
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<a href="/cart" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="/" class="logo-mobile">
				<img src="{{ asset('images/icons/logo.png') }}" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<span class="header-wrapicon1 dis-block">
						<a class="btn btn-dark mr-2" href="/login">Login</a>
						<a class="btn btn-dark" href="/rigister">Rigister</a>
				</span>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<i class="fas fa-shopping-cart header-icon1 js-show-header-dropdown" style="font-size: 25px;"></i>
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<button class="btn btn-block bg1 bo-rad-20 hov1 s-text1 trans-0-4 text-center">
										<a href="/cart">
											View Cart
										</a>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
						<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								admain@example.com
							</span>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fab fa-facebook"></a>
							<a href="#" class="topbar-social-item fab fa-instagram"></a>
							<a href="#" class="topbar-social-item fab fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fab fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fab fa-youtube"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="/">Home</a>
					</li>

					<li class="item-menu-mobile">
						<a href="/cart">Cart</a>
					</li>

					<li class="item-menu-mobile">
						<a href="/about">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="/contact">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
