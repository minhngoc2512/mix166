<?php
include 'demo/demo.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Làm sao | Làm thế nào</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/stylesheet.css">
	<?php echo"<h1>url: ".URL."</h1>"  ?>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/jquery.mmenu.all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/font-awesome.min.css">
	<link href="<?php echo URL; ?>images/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body>
<div id="header">
		<div id="header-top" class="hidden-xs">
			<div class="container">
				<div class="row">
					<div id="logo" class="col-md-3 col-sm-4">
						<a href="">
							<img src="<?php echo URL; ?>images/logo.png">
						</a>
					</div>
					<div id="input-search" class="col-md-5 col-sm-6">
						<input type="text" name="" placeholder="Nhập từ khóa bạn cần tìm">
						<button type="submit">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
					<div id="nav-function" class="col-md-4 col-sm-2">
						<div class="login box">
							<a href="">
								<i class="icon"></i>
								<span>Đăng nhập</span>
							</a>
						</div>
						<div class="earn-money box hidden-sm">
							<i class="icon"></i>
							<span>Kiếm tiền</span>
						</div>
						<div class="article-favorite box hidden-sm">
							<i class="icon"></i>
							<span>Yêu thích</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header top mobile-->
		<div id="header-top-mobile" class="header-top-mobile container visible-xs">
			<div class="row">
				<div class="menu-mobile col-xs-2">
					<a href="#main-menu-mobile">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</a>
				</div>
				<div class="logo-mobile col-xs-8">
					<a href="#">
						<img src="<?php echo URL; ?>images/logo.png">
					</a>
				</div>
				<div class="search-mobile col-xs-2">
					<a href="#">
						<i class="fa fa-search" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="search-mobile-header hidden">
				<input type="text" name="q" placeholder="Tìm kiếm ...">
        	</div>
		</div>
		<!-- Header top mobile fix-->
		<div class="header-top-mobile-fix container hidden hidden-sm hidden-md hidden-lg">
			<div class="row">
				<div class="menu-mobile col-xs-2">
					<a href="#main-menu-mobile"> <i class="fa fa-bars" aria-hidden="true"></i> </a>
				</div>
				<div class="logo-mobile col-xs-8 text-center">
					<a href="/"> 
						<img src="https://media.lamsao.com/Themes/Portal/Default/Images/logo-fix.png" alt="Lamsao.com"> 
					</a>
				</div>
				<div class="search-mobile col-xs-2">
					<i class="fa fa-search" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<!-- Main Menu Mobile
		<div id="main-menu-mobile" class="main-menu-mobile hidden-sm hidden-md hidden-lg">
			<div class="mm-panels mm-vertical">
				<div class="categories-mobile" id="mm-0">
					<div class="event-feature">
						<ul>
							<li><a href="/">LAMSAO.COM</a></li>
						</ul>
					</div>
					<ul class="categories-nav">
						<li><a href="/">Trang chủ</a></li>
						<li><a href="/am-thuc-p213c22.html">Ẩm thực</a></li>
						<li><a href="/handmade-p213c148.html">Handmade</a></li>
						<li>
							<a></a>
							<span>Gia đình Việt</span>
							<div>
								<ul>
									<li><a href="/nha-cua-p213c1.html">Nhà cửa</a></li>
									<li><a href="/gia-dinh-p213c21.html">Gia đình</a></li>
									<li><a href="/cha-me-tre-p213c834.html">Cha mẹ trẻ</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a></a>
							<span>Đời sống</span>
							<div>
								<ul>
									<li><a href="/gioi-tre-p213c132.html">Giới trẻ</a></li>
									<li><a href="/du-lich-p213c149.html">Du lịch</a></li>
									<li><a href="/van-hoa-p213c231.html">Văn hóa</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a></a>
							<span>Khỏe đẹp +</span>
							<div>
								<ul>
									<li><a href="/suc-khoe-p213c7.html">Sức khỏe</a></li>
									<li><a href="/dinh-duong-p213c46.html">Dinh dưỡng</a></li>
									<li><a href="/khoe-dep-p213c165.html">Khỏe đẹp</a></li>
									<li><a href="/dep-p213c179.html">Đẹp</a></li>
									<li><a href="/thoi-trang-p213c205.html">Thời trang</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a></a>
							<span>Khám phá</span>
							<div>
								<ul>
									<li><a href="/su-nghiep-p213c12.html">Sự nghiệp</a></li>
									<li><a href="/cong-nghe-p213c73.html">Công nghệ</a></li>
									<li><a href="/giao-duc-p213c139.html">Giáo dục</a></li>
									<li><a href="/xe-360-p213c143.html">Xe 360° </a></li>
									<li><a href="/the-thao-p213c241.html">Thể thao</a></li>
								</ul>
							</div>
						</li>
					</ul>
					<div class="favorite-mobile clear-fix"> 
						<i class="icon-favorite-mobile"></i> 
						<a href="/tai-khoan/bai-viet-yeu-thich.html">Bài viết yêu thích</a>
					</div>
					<div class="login-mobile clear-fix">     
						<i class="icon-login-mobile"></i>
			    		<a href="/dang-nhap.html">Đăng nhập</a>
					</div>
				</div>
			</div>
		</div>
		-->
		<div id="main-menu" class="hidden-xs">
			<div class="container">
				<ul>
					<li>
						<a href="">
							<i></i>
							<span>Ẩm thực</span>
						</a>
						<div class="category-child">
							
						</div>
					</li>
					<li>
						<a href="">
							<span>Handmade</span>
						</a>
						<div class="category-child">
							
						</div>
					</li>
					<li>
						<a href="">
							<span>Gia đình Việt</span>
						</a>
						<div class="category-child">
							
						</div>
					</li>
					<li>
						<a href="">
							<span>Đời sống</span>
						</a>
						<div class="category-child">
							
						</div>
					</li>
					<li>
						<a href="">
							<span>Khoẻ đẹp</span>
						</a>
						<div class="category-child">
							
						</div>
					</li>
					<li>
						<a href="">
							<span>Khám phá</span>
						</a>
						<div class="category-child">
							
						</div>
					</li>
				</ul>
			</div>
		</div>	
	</div>