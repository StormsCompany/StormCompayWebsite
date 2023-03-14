<!DOCTYPE html>
<html lang="en">

<head>
				<!-- basic -->
				<meta charset="utf-8" />
				<meta http-equiv="X-UA-Compatible" content="IE=edge" />
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<!-- mobile metas -->
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
				<!-- site metas -->
				<title>Storms: Your Tech Solution</title>
				<!-- bootstrap css -->
				<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
				<!-- style css -->
				<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
				<!-- Responsive-->
				<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
				<!-- gpstyle-->
				<link rel="stylesheet" href="{{ asset('assets/css/gpstyle.css') }}" />
				<!-- fevicon -->
				<link rel="icon" href="{{ asset('assets/images/fevicon.png') }}" type="image/gif" />
				<!-- Scrollbar Custom CSS -->
				<link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}" />
				<!-- Tweaks for older IEs-->
				<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
								media="screen" />
				<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
				@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

				<!-- header section start -->
				<div class="header_section" data-aos="fade-right">
								<nav class="navbar navbar-expand-lg">
												<div class="logo icon-img">
																<a href="{{ route('welcome') }}"><img class="w-75,icon-img"
																								src="{{ asset('assets/images/logo.png') }}" /></a>
												</div>
												<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
																aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
																<span class="navbar-toggler-icon"></span>
												</button>
												<div class="collapse navbar-collapse" id="navbarSupportedContent">
																<ul class="navbar-nav mr-auto">
																				<li class="nav-item">
																								<a class="nav-link" href="{{ route('welcome') }}"> Home</a>
																				</li>
																				<li class="nav-item">
																								<a class="nav-link" href="{{ route('about') }}"> About</a>
																				</li>
																				<li class="nav-item">
																								<a class="nav-link" href="{{ route('products') }}">Products</a>
																				</li>
																				<li class="nav-item">
																								<a class="nav-link" href="{{ route('blog') }}">Blog</a>
																				</li>
																				<li class="nav-item">
																								<a class="nav-link" href="{{ route('contact') }}">Contact us</a>
																				</li>
																</ul>
																<form class="form-inline my-2 my-lg-0">
																				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
																								GET STARTED
																				</button>
																</form>
																<div class="search_icon">
																				<ul>
																								<li>
																												<a href="#"><img src="{{ asset('assets/images/user-icon.png') }}" /></a>
																								</li>
																								<li>
																												<a href="#"><img src="{{ asset('assets/images/bag-icon.png') }}" /></a>
																								</li>
																								<li>
																												<a href="#"><img src="{{ asset('assets/images/search-icon.png') }}" /></a>
																								</li>
																				</ul>
																</div>
												</div>
								</nav>
								<!-- header section end -->
								<!-- banner section start -->
								<div class="banner_section" data-aos="zoom-in">
												<div class="container">
																<div id="main_slider" class="carousel slide" data-ride="carousel">
																				<div class="carousel-inner">
																								<div class="carousel-item active">
																												<div class="row">
																																<div class="col-md-6">
																																				<h1 class="your_text">
																																								Storms Company
																																				</h1>
																																				<h2 class="Shows_text">
																																								Tech and IT Solutions
																																				</h2>
																																				<p class="there_text">
																																								We are a tech Solution company
																																								offering tech related solutions
																																								across the world. This include
																																								Hr-Management, Payment
																																								Integration, Applications and
																																								E-commerce ...
																																				</p>
																																				<div class="start_bt">
																																								<a href="#">Start Now</a>
																																				</div>
																																				<div class="read_bt">
																																								<a href="#">Read More</a>
																																				</div>
																																</div>
																																<div class="col-md-6">
																																				<div class="images_1">
																																								<img cl src="{{ asset('assets/images/logo.png') }}" />
																																				</div>
																																</div>
																												</div>
																								</div>
																								<div class="carousel-item">
																												<div class="row" data-aos="flip-up">
																																<div class="col-md-6">
																																				<h1 class="your_text">DukaVerse</h1>
																																				<h2 class="Shows_text">
																																								Payments and Retails
																																				</h2>
																																				<p class="there_text">
																																								DukaVerse is the new game
																																								changer in the retail space.
																																								Apart from making it easier to
																																								integrate to e-commerce it
																																								introduces a new payment gateway
																																								that makes it easier, faster,
																																								convinient and secure. Easy to
																																								user and quick to start ...
																																				</p>
																																				<div class="start_bt">
																																								<a href="#">Start Now</a>
																																				</div>
																																				<div class="read_bt">
																																								<a href="#">Read More</a>
																																				</div>
																																</div>
																																<div class="col-md-6">
																																				<div class="images_1">
																																								<img src="{{ asset('assets/images/dukaverse.png') }}" />
																																				</div>
																																</div>
																												</div>
																								</div>
																								<div class="carousel-item">
																												<div class="row" data-aos="flip-up">
																																<div class="col-md-6">
																																				<h1 class="your_text">MtAa</h1>
																																				<h2 class="Shows_text">
																																								Rental Space
																																				</h2>
																																				<p class="there_text">
																																								Ever wondered where to start
																																								when you are new to a place and
																																								you have to look for a house? We
																																								have a solution for you. Get a
																																								prior check of the rental unit
																																								before committing your time and
																																								space. It all starts with ...
																																				</p>
																																				<div class="start_bt">
																																								<a href="#">Start Now</a>
																																				</div>
																																				<div class="read_bt">
																																								<a href="#">Read More</a>
																																				</div>
																																</div>
																																<div class="col-md-6">
																																				<div class="images_1">
																																								<img src="{{ asset('assets/images/mtaa.png') }}" />
																																				</div>
																																</div>
																												</div>
																								</div>
																				</div>
																				<a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
																								<i class="fa-arrow-left"><img src="{{ asset('assets/images/left-arrow.png') }}" /></i>
																				</a>
																				<a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
																								<i class="fa-angle-right"><img src="{{ asset('assets/images/right-arrow.png') }}" /></i>
																				</a>
																</div>
																<div class="banner_section_2">
																				<div class="row">
																								<div class="col-lg-4 col-sm-12">
																												<div class="box_main">
																																<div class="dukaverse_icon"></div>
																																<h4 class="broadband_text">
																																				DukaVerse
																																</h4>
																																<p class="many_text">
																																				Looking for a sales system that is
																																				easy to use and efficient? Look no
																																				further than DukaVerse. Our point of
																																				sale system is designed to help you
																																				manage your business seamlessly and
																																				make sales a breeze. With DukaVerse,
																																				you can focus on growing your
																																				business, while we take care of the
																																				rest. Try us out today to feel the
																																				difference and see progress unfold!
																																</p>
																												</div>
																								</div>
																								<div class="col-lg-4 col-sm-12">
																												<div class="box_main">
																																<div class="mtaa_icon"></div>
																																<h4 class="broadband_text">MtAa</h4>
																																<p class="many_text">
																																				Tired of endlessly searching for
																																				vacant houses in your area? Check
																																				MtAa out... Our innovative software
																																				is designed to help you easily find
																																				and locate vacant houses nearby,
																																				making your search for a new home a
																																				breeze. Save your time and effort,
																																				and focus on finding the perfect
																																				place to call home. Try us out today
																																				and start your search with ease!
																																</p>
																												</div>
																								</div>
																								<div class="col-lg-4 col-sm-12">
																												<div class="box_main">
																																<div class="internet_icon2"></div>
																																<h4 class="broadband_text">
																																				Hr Management
																																</h4>
																																<p class="many_text">
																																				Looking for an HR management system
																																				that's efficient, reliable, and easy
																																				to use? Look no further than our HR
																																				management systems! Our software is
																																				designed to help you streamline your
																																				HR processes, from employee
																																				onboarding and performance
																																				management to payroll and benefits
																																				administration. With our HR
																																				management systems, you can focus on
																																				what matters most - your employees.
																																				Try us out today and see the
																																				difference!
																																</p>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div>
								<!-- banner section end -->
				</div>
				<!-- header section end -->
				@yield('content')
				<div>
								<!-- footer section start -->
								<div class="footer_section layout_padding">
												<div class="container">
																<div class="row">
																				<div class="col-lg-3 col-sm-6">
																								<h1 class="customer_text">CUSTOMER SERVICE</h1>
																								<div class="footer_logo">
																												<img class="w-50" src="{{ asset('assets/images/footer-logo.png') }}" />
																								</div>
																								<p class="footer_lorem_text">
																												There are many variat ions of passages of L orem
																												Ipsum available , but the majority h ave
																												suffered altera tion in some form, by
																								</p>
																				</div>
																				<div class="col-lg-3 col-sm-6">
																								<h1 class="customer_text">LET US HELP YOU</h1>
																								<p class="footer_lorem_text">
																												There are many variat ions of passages of L orem
																												Ipsum available , but the majority h ave
																												suffered altera tion in some form, by
																								</p>
																				</div>
																				<div class="col-lg-3 col-sm-6">
																								<h1 class="customer_text">INFORMATION</h1>
																								<p class="footer_lorem_text1">
																												About Us<br />
																												Careers<br />
																												Sell on shopee<br />
																												Press & News<br />
																												Competitions<br />
																												Terms & Conditions
																								</p>
																				</div>
																				<div class="col-lg-3 col-sm-6">
																								<h1 class="customer_text">OUR SHOP</h1>
																								<p class="footer_lorem_text">
																												There are many variat ions of passages of L orem
																												Ipsum available , but the majority h ave
																												suffered altera tion in some form, by
																								</p>
																								<div class="social_icon">
																												<ul>
																																<li>
																																				<a href="#"><img src="{{ asset('assets/images/fb-icon.png') }}" /></a>
																																</li>
																																<li>
																																				<a href="#"><img src="{{ asset('assets/images/twitter-icon.png') }}" /></a>
																																</li>
																																<li>
																																				<a href="#"><img
																																												src="{{ asset('assets/images/instagram-icon.png') }}" /></a>
																																</li>
																																<li>
																																				<a href="#"><img
																																												src="{{ asset('assets/images/linkedin-icon.png') }}" /></a>
																																</li>
																												</ul>
																								</div>
																				</div>
																</div>
												</div>
								</div>
								<!--  footer section end -->
								<!-- copyright section start -->
								<div class="copyright_section">
												<div class="container">
																<div class="border"></div>
																<p class="copyright_text">
																				2020 All Rights Reserved. Design by
																				<a href="https://html.design">Free html Templates</a>
																</p>
												</div>
								</div>
								<!-- copyright section end -->
								<!-- script section -->
				</div>
				<script>
								var coll = document.getElementsByClassName("collapsible");
								var i;

								for (i = 0; i < coll.length; i++) {
												coll[i].addEventListener("click", function() {
																this.classList.toggle("active");
																var content = this.previousElementSibling;
																if (content.style.display === "block") {
																				content.style.display = "none";
																} else {
																				content.style.display = "block";
																}
												});
								}


								var read_more_btns = document.getElementsByClassName("read_more_btn");
								for (i = 0; i < read_more_btns.length; i++) {
												read_more_btns[i].addEventListener("click", function() {
																if (read_more_btns[i].innerHTML === "Read More") {
																				read_more_btns[i].innerHTML = "Read Less!";
																} else {
																				read_more_btns[i].innerHTML = "Read more";
																}
												});
								}
				</script>
				<!-- Javascript files-->
				<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
				<script>
								AOS.init();
				</script>
				<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
				<script src="{{ asset('assets/js/popper.min.js') }}"></script>
				<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
				<script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>
				<script src="{{ asset('assets/js/plugin.js') }}"></script>
				<!-- sidebar -->
				<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
				<script src="{{ asset('assets/js/custom.js') }}"></script>
				<!-- javascript -->
				</script>
</body>

</html>