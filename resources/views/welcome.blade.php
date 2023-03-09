<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Storms</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="{{route('welcome')}}"><img src="{{ asset('assets/images/logo.png')}}"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('welcome')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('products')}}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('blog')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">GET STARTED</button>
                    </form>
                    <div class="search_icon">
                        <ul>
                            <li><a href="#"><img src="{{ asset('assets/images/user-icon.png')}}"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/bag-icon.png')}}"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/search-icon.png')}}"></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- header section end -->
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="main_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="your_text">Storms Company</h1>
                                    <h2 class="Shows_text">Tech and IT Solutions</h2>
                                    <p class="there_text">Storms Company; We are a tech Solution company offering tech related solutions across the world. This include Hr-Management, Payment Integration, Applications and E-commerce ...</p>
                                    <div class="start_bt"><a href="#">Start Now</a></div>
                                    <div class="read_bt"><a href="#">Read More</a></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="images_1"><img src="{{ asset('assets/images/logo.png')}}"></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="your_text">DukaVerse</h1>
                                    <h2 class="Shows_text">Payments and Retails</h2>
                                    <p class="there_text">
                                        DukaVerse is the new game changer in the retail space. Apart from making it easier to integrate to e-commerce it introduces a new payment gateway that makes it easier, faster, convinient and secure.
                                        Easy to user and quick to start ...
                                    </p>
                                    <div class="start_bt"><a href="#">Start Now</a></div>
                                    <div class="read_bt"><a href="#">Read More</a></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="images_1"><img src="{{ asset('assets/images/dukaverse.png')}}"></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="your_text">MtAa</h1>
                                    <h2 class="Shows_text">Rental Space </h2>
                                    <p class="there_text">
                                        Ever wondered where to start when you are new to a place and you have to look for a house?
                                        We have a solution for you. Get a prior check of the rental unit before committing your time and space.
                                        It all starts with ...
                                    </p>
                                    <div class="start_bt"><a href="#">Start Now</a></div>
                                    <div class="read_bt"><a href="#">Read More</a></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="images_1"><img src="{{ asset('assets/images/mtaa.png')}}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa-arrow-left"><img src="{{ asset('assets/images/left-arrow.png')}}"></i>
                    </a>
                    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa-angle-right"><img src="{{ asset('assets/images/right-arrow.png')}}"></i>
                    </a>
                </div>
                <div class="banner_section_2">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                            <div class="box_main">
                                <div class="internet_icon"></div>
                                <h4 class="broadband_text">System and Solutions</h4>
                                <p class="many_text">
                                    Easily navigate though your problems by applying a tech solution
                                    Reach out to us and we can help you get started with moving your company online.
                                    We will make this process seemless and quick.
                                    You will be able to access more customers online.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="box_main active">
                                <div class="internet_icon1"></div>
                                <h4 class="broadband_text active">Usage</h4>.
                                <p class="many_text active">Companies require applications to be funcional and respond to customers effectively. Just work with us through this transition to the internet</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="box_main">
                                <div class="internet_icon2"></div>
                                <h4 class="broadband_text">Support</h4>
                                <p class="many_text">
                                    How easy it is for your products to be accessed online. Make this quick and easy by leaving the development process to us.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image_2"><img src="{{ asset('assets/images/img-2.png')}}"></div>
                </div>
                <div class="col-md-6">
                    <h1 class="live_text">Support and Contact
                        friends
                    </h1>
                    <p class="lorem_text">
                        W
                    </p>
                    <div class="online_bt_main">
                        <div class="online_bt"><a href="#">4K Ultra HD Quality</a></div>
                        <div class="online_bt1"><a href="#">200+ Online Channels</a></div>
                        <div class="read_bt1"><a href="#">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- product section start -->
    <div class="product_section layout_padding">
        <div class="container">
            <h2 class="tariffs_text">Our Products</h2>
            <h1 class="choose_text">Choose your plan</h1>
            <p class="lorem_text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum, est ac faucibus hendrerit, mauris ante viverra urna, in elementum urna est ut ligula.</p>
            <div class="product_section2">
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <h2 class="easy_text">Easy Surfing</h2>
                        <h1 class="internet_text">Internet</h1>
                        <div class="month_main clearfix">
                            <h1 class="dolor_text">$24.99</h1>
                            <h2 class="month_text">Month</h2>
                            <p class="long_text">It is a long established f
                                act distracteontent </p>
                        </div>
                        <div class="seemore_main">
                            <div class="see_more"><a href="#">SEE MORE</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <h2 class="easy_text">Impression</h2>
                        <h1 class="internet_text">Tv</h1>
                        <div class="month_main clearfix">
                            <h1 class="dolor_text">$24.99</h1>
                            <h2 class="month_text">Month</h2>
                            <p class="long_text">It is a long established f
                                act distracteontent </p>
                        </div>
                        <div class="seemore_main">
                            <div class="see_more"><a href="#">SEE MORE</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <h2 class="easy_text">Premium Plan</h2>
                        <h1 class="internet_text">Internet + TV + Phone</h1>
                        <div class="month_main clearfix">
                            <h1 class="dolor_text">$24.99</h1>
                            <h2 class="month_text">Month</h2>
                            <p class="long_text">It is a long established f
                                act distracteontent </p>
                        </div>
                        <div class="seemore_main">
                            <div class="see_more"><a href="#">SEE MORE</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="check_text">Check ability to connect our services in your area</h1>
            <div class="contact_section2">
                <div class="addres_main">
                    <div class="input_bg">
                        <h3 class="fact_text">It is a long established fact that a reader will be distracted</h3>
                        <input type="text" class="address_text" placeholder="Enter your address" name="text">
                        <button type="button" class="get_bt">GET STARTED</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- client section start -->
    <div class="client_section layout_padding">
        <div class="container">
            <h1 class="client_taital">What our clients say</h1>
            <div class="client_section2 layout_padding">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="client_image"><img src="{{ asset('assets/images/img-3.png')}}"></div>
                    </div>
                    <div class="col-sm-8">
                        <div class="miller_text">Miller<span class="quote_icon"><img src="{{ asset('assets/images/quote-icon.png')}}"></span></div>
                        <p class="ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id e</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client section end -->
    <!-- subscribe section start -->
    <div class="subscribe_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1 class="subscribe_text">Subscribe Now</h1>
                </div>
                <div class="col-sm-8">
                    <div class="mail_main">
                        <input type="text" class="address_text1" placeholder="Enter your address" name="text">
                        <button type="button" class="get_bt1">GET STARTED</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  clsubscribe section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="fooer_logo"><img src="{{ asset('assets/images/footer-logo.png')}}"></div>
                    <h1 class="customer_text">CUSTOMER SERVICE</h1>
                    <p class="footer_lorem_text">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">LET US HELP YOU</h1>
                    <p class="footer_lorem_text">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">INFORMATION</h1>
                    <p class="footer_lorem_text1">About Us<br>
                        Careers<br>
                        Sell on shopee<br>
                        Press & News<br>
                        Competitions<br>
                        Terms & Conditions</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">OUR SHOP</h1>
                    <p class="footer_lorem_text">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by </p>
                    <div class="social_icon">
                        <ul>
                            <li><a href="#"><img src="{{ asset('assets/images/fb-icon.png')}}"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/twitter-icon.png')}}"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/instagram-icon.png')}}"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/linkedin-icon.png')}}"></a></li>
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
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html Templates</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <!-- javascript -->
    <script src="{{ asset('assets/js/owl.carousel.js')}}"></script>
    <script src="{{ asset('assets/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>
</body>
</html>
