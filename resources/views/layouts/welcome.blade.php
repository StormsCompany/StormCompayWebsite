<!DOCTYPE html>
<html lang="en">

<head>
				<!-- basic -->
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
				<meta name="name" content="{{ config('app.name') ,'CEROISOFT LTD' }} ">
				<meta name="url" content="{{ config('app.url', 'https://ceroisoft.com') }}">
				<meta name="description" content="{{ config('app.description', 'Your Tech Solution') }}">
				<meta name="author" content="{{ config('app.name', 'CEROISOFT LTD')  }}">
				<!-- site metas -->
				<title>{{ config('app.name', 'CEROISOFT') }} | Your Tech Solution</title>
				<!-- style css -->
				<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
				<!-- Responsive-->
				{{--  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />  --}}
				<!-- gpstyle-->
				<link rel="stylesheet" href="{{ asset('assets/css/gpstyle.css') }}" />
				<!-- fevicon -->
				<link rel="icon" href="{{ asset('assets/images/ceroisoftlogo.png') }}" type="image/gif" />
				<!-- Scrollbar Custom CSS -->
				<link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}" />
				<!-- Tweaks for older IEs-->
				<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
								media="screen" />
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
								integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
								crossorigin="anonymous" referrerpolicy="no-referrer" />
				<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9116569436922792"
								crossorigin="anonymous"></script>
				<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
								crossorigin="anonymous"></script>

				@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
				{{--  hero section  --}}
				<div class="container-fluid  mx-0 py-0 px-0">
								<!-- header section start -->
								<div class="header_section px-3">
												<nav class="navbar navbar-expand-lg">
																<div class="col-3"> <img class="d-flex icon-img"
																								src="{{ asset('assets/images/ceroisoftlogo.png') }}" style="width: 130px; height:100px;" />
																</div>
																<button class="navbar-toggler" type="button" data-toggle="collapse"
																				data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
																				aria-label="Toggle navigation">
																				<span class="navbar-toggler-icon"></span>
																</button>
																<div class="row collapse navbar-collapse" id="navbarSupportedContent">
																				<div class="row mr-auto float-right d-flex justify-content-end px-2">
																								<div class="col-md-6 col-xl py-2">
																												<ul class="navbar-nav mr-auto">
																																<li class="nav-item">
																																				<a class="nav-link" href="{{ route('welcome') }}"> Home</a>
																																</li>
																																<li class="nav-item">
																																				<a class="nav-link" href="#about"> About</a>
																																</li>
																																<li class="nav-item">
																																				<a class="nav-link" href="#services">Services</a>
																																</li>
																																<li class="nav-item">
																																				<a class="nav-link" href="#">Blog</a>
																																</li>
																																<li class="nav-item">
																																				<a class="nav-link" href="#contact">Contact us</a>
																																</li>
																												</ul>

																								</div>
																								<div class="col-md-6 col-xl-2 mr-auto py-2">
																												<a class="btn btn-sm btn-outline-success p-2 mr-auto " href="#about">GET STARTED
																												</a>
																								</div>
																								<div class="col-md-6 col-xl-3 mr-auto py-2">
																												<div class="row mr-auto float-right">
																																<ul>
																																				<li class="nav-link">
																																								<a class="btn btn-outline-info rounded-pill" href="#"><img
																																																src="{{ asset('assets/images/user-icon.png') }}" />
																																												<tb>&ensp;Sign In
																																								</a>
																																				</li>
																																</ul>
																												</div>
																								</div>
																				</div>
																</div>
												</nav>

												<!-- header section end -->
												<!-- banner section start -->
												<div class="banner_section px-3" data-aos="zoom-in">
																<div class="container px-5">
																				<div id="main_slider" class="carousel slide p-2 mx-auto" data-ride="carousel">
																								<div class="carousel-inner">
																												<div class="carousel-item active">
																																<div class="row">
																																				<div class="col-md-6">
																																								<h1 class="your_text">
																																												Ceroisoft
																																								</h1>
																																								<h2 class="Shows_text">
																																												Tech and IT Solutions
																																								</h2>
																																								<p class="there_text">
																																												We are a tech Solution company
																																												offering tech related solutions
																																												across the world. This includes
																																												Hr-Management softwares, Payment
																																												Integration softwares, Mobile Applications and
																																												E-commerce Websites ...
																																								</p>

																																								<div class="start_bt mx-auto">
																																												<a href="{{ route('register') }}">Start Now</a>
																																								</div>

																																				</div>
																																				<div class="col-md-6">
																																								<div class="images_1">
																																												<img class="w-75" src="{{ asset('assets/images/ceroisoftlogo.png') }}" />
																																								</div>
																																				</div>
																																</div>
																												</div>
																												<div class="carousel-item ">
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
																																								<div class="start_bt mx-auto">
																																												<a href="https://dukaverse.ceroisoft.com">Start Now</a>
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
																																								<div class="start_bt mx-auto">
																																												<a href="https://mtAa.ceroisoft.com">Start Now</a>
																																								</div>

																																				</div>
																																				<div class="col-md-6">
																																								<div class="images_1">
																																												<img src="{{ asset('assets/images/mtaa.png') }}" />
																																								</div>
																																				</div>
																																</div>
																												</div>
																												<div class="carousel-item">
																																<div class="row" data-aos="flip-up">
																																				<div class="col-md-6">
																																								<h1 class="your_text">SGNH</h1>
																																								<h2 class="Shows_text">
																																												Fast News
																																								</h2>
																																								<p class="there_text">
																																												We are where you want us to be. In the field, we got you covered. In the
																																												boardrooms where decisions are made we will inform you. We cover all
																																												your
																																												stories and give you more news anytime,anywhere and about everywhere
																																												from
																																												earth
																																												to the stars.
																																								</p>
																																								<div class="start_bt mx-auto">
																																												<a href="https://sgnh.ceroisoft.com">Start Now</a>
																																								</div>

																																				</div>
																																				<div class="col-md-6">
																																								<div class="images_1">
																																												{{--  <img src="{{ asset('assets/images/mtaa.png') }}" />  --}}
																																								</div>
																																				</div>
																																</div>
																												</div>
																								</div>
																								<a class="carousel-control-prev btn btn-outline-info" href="#main_slider" role="button"
																												data-slide="prev">
																												<i class="fa-arrow-left"><img src="{{ asset('assets/images/left-arrow.png') }}" /></i>
																								</a>
																								<a class="carousel-control-next btn btn-outline-info" href="#main_slider" role="button"
																												data-slide="next">
																												<i class="fa-angle-right"><img src="{{ asset('assets/images/right-arrow.png') }}" /></i>
																								</a>
																				</div>
																				<div class="banner_section_2">
																								<div class="row">
																												<div class="col-lg-4 col-sm-12 mt-2">
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
																												<div class="col-lg-4 col-sm-12 mt-2">
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
																												{{--  <div class="col-lg-4 col-sm-12 mt-2">
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
                                                                                </div>  --}}
																												<div class="col-lg-4 col-sm-12 mt-2">
																																<div class="box_main">
																																				<div class="internet_icon2"></div>
																																				<h4 class="broadband_text">
																																								SGNH
																																				</h4>
																																				<p>
																																								Your Fast News Web App for Instant Updates
																																				</p>
																																				<p class="many_text">
																																								Stay ahead of the game with SGNH, the ultimate news web app delivering
																																								lightning-fast updates to keep you informed and on top of current events.
																																								Get
																																								real-time news, trending stories, and concise coverage across a wide range
																																								of
																																								topics. Experience the thrill of instant information at your fingertips with
																																								SGNH. Join now and be part of the news revolution. Stay informed, stay ahead
																																								with SGNH.
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
								<!-- footer section start -->
								<div class="footer_section mt-3">
												<div class="row mx-3 mt-3">
																<div class="col-lg-3 col-sm-6">
																				<h1 class="customer_text">CUSTOMER SERVICE</h1>
																				<div class="footer_logo">
																								<img class="w-25" src="{{ asset('assets/images/ceroisoftlogo.png') }}" />
																				</div>
																				<p class="footer_lorem_text">
																								CEROISOFT | YOUR TECH SOLUTION
																								<br>
																				</p>
																				<p class="footer_lorem_text">
																								Find the best customer service from us. We work and involve our customers
																								throughout
																								the
																								development process.
																								We also ensure timely delivery that exceeds your expectation.
																				</p>
																</div>
																<div class="col-lg-3 col-sm-6">
																				<h1 class="customer_text">Contact Us</h1>
																				<p class="footer_lorem_text">
																								Find 24 hour support from our able support team.
																								Drop a message as first as possible and we will be able to contact you as soon as
																								possible.
																				</p>
																				<p class="footer_lorem_text">
																								<small>Email: support@ceroisoft.com</small>
                                                                                                <br>
                                                                                                <small>Email: info@ceroisoft.com</small>
                                                                                                <br>
																								Call : +254 796 642 641
																								<br>
																								Call : +254 714 680 763
																				</p>
																</div>
																<div class="col-lg-3 col-sm-6">
																				<h1 class="customer_text">INFORMATION</h1>
																				<p class="footer_lorem_text1">
																								<a href="#about" class="">About Us</a><br />
																								<a href="#careers" class="">Careers</a><br />
																								<a href="#vacancies" class="">Vaccancies</a><br />
																								<a href="" class="">Services</a><br />
																								<a href="#values" class="">Our Values</a><br />
																								<a href="#difference" class="">How we make a difference</a><br />
																								<a href="#contact" class="">Contact</a><br />
																								<a href="#termsandconditions" class="">Terms & Conditions</a><br />
																				</p>
																</div>
																<div class="col-lg-3 col-sm-6">
																				<h1 class="customer_text">Solutions</h1>
																				<p class="footer_lorem_text">
																								<a href="https://MtAa.ceroisoft.com" class="">MtAa</a><br />
																								<a href="https://dukaverse.ceroisoft.com" class="">DukaVerse</a><br />
																								<a href="https://sngh.ceroisoft.com" class="">SNGH</a><br />
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
																																<a href="#"><img src="{{ asset('assets/images/instagram-icon.png') }}" /></a>
																												</li>
																												<li>
																																<a href="#"><img src="{{ asset('assets/images/linkedin-icon.png') }}" /></a>
																												</li>
																								</ul>
																				</div>
																</div>
												</div>
								</div>
								<!--  footer section end -->
								<!-- copyright section start -->
								<div class="copyright_section">
												<div class="border"></div>
												<p class="copyright_text">
																2023 All Rights Reserved. Design by
																<a href="kiplangatsang.ceroisoft.com">Ceroisoft LTD</a>
												</p>
								</div>
								<!-- copyright section end -->
								<!-- script section -->
				</div>
</body>
<script>
				var coll = document.getElementsByClassName("collapsible");
				var i;
				var read_more_btns = document.getElementsByClassName("read_more_btn");

				for (i = 0; i < coll.length; i++) {
								coll[i].addEventListener("click", function(e) {
												e.preventDefault();
												this.classList.toggle("active");
												var content = this.previousElementSibling;
												if (content.style.display === "block") {
																content.style.display = "none";
																$('.read_more_btn').text("Read more");
												} else {
																content.style.display = "block";
																$('.read_more_btn').text("Read Less!");
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

</html>
