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
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>"
        />
        <!-- style css -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo e(asset('assets/css/style.css')); ?>"
        />
        <!-- Responsive-->
        <link
            rel="stylesheet"
            href="<?php echo e(asset('assets/css/responsive.css')); ?>"
        />
        <!-- fevicon -->
        <link
            rel="icon"
            href="<?php echo e(asset('assets/images/fevicon.png')); ?>"
            type="image/gif"
        />
        <!-- Scrollbar Custom CSS -->
        <link
            rel="stylesheet"
            href="<?php echo e(asset('assets/css/jquery.mCustomScrollbar.min.css')); ?>"
        />
        <!-- Tweaks for older IEs-->
        <link
            rel="stylesheet"
            href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
        />
        <!-- owl stylesheets -->
        <link
            rel="stylesheet"
            href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>"
        />
        <link
            rel="stylesheet"
            href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
            media="screen"
        />
    </head>

    <body>
        <div class="wrapper">
            <!-- header section start -->
            <div class="header_section">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="logo icon-img">
                            <a href="<?php echo e(route('welcome')); ?>"
                                ><img
                                    class="w-75,icon-img"
                                    src="<?php echo e(asset('assets/images/logo.png')); ?>"
                            /></a>
                        </div>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div
                            class="collapse navbar-collapse"
                            id="navbarSupportedContent"
                        >
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="<?php echo e(route('welcome')); ?>"
                                        >Home</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="<?php echo e(route('about')); ?>"
                                        >About</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="<?php echo e(route('products')); ?>"
                                        >Products</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="<?php echo e(route('blog')); ?>"
                                        >Blog</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="<?php echo e(route('contact')); ?>"
                                        >Contact us</a
                                    >
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <button
                                    class="btn btn-outline-success my-2 my-sm-0"
                                    type="submit"
                                >
                                    GET STARTED
                                </button>
                            </form>
                            <div class="search_icon">
                                <ul>
                                    <li>
                                        <a href="#"
                                            ><img
                                                src="<?php echo e(asset(
                                                        'assets/images/user-icon.png'
                                                    )); ?>"
                                        /></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><img
                                                src="<?php echo e(asset(
                                                        'assets/images/bag-icon.png'
                                                    )); ?>"
                                        /></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><img
                                                src="<?php echo e(asset(
                                                        'assets/images/search-icon.png'
                                                    )); ?>"
                                        /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- header section end -->
                <!-- banner section start -->
                <div class="banner_section">
                    <div class="container">
                        <div
                            id="main_slider"
                            class="carousel slide"
                            data-ride="carousel"
                        >
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
                                                <img
                                                    cl
                                                    src="<?php echo e(asset(
                                                            'assets/images/logo.png'
                                                        )); ?>"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
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
                                                <img
                                                    src="<?php echo e(asset(
                                                            'assets/images/dukaverse.png'
                                                        )); ?>"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
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
                                                <img
                                                    src="<?php echo e(asset(
                                                            'assets/images/mtaa.png'
                                                        )); ?>"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a
                                class="carousel-control-prev"
                                href="#main_slider"
                                role="button"
                                data-slide="prev"
                            >
                                <i class="fa-arrow-left"
                                    ><img
                                        src="<?php echo e(asset(
                                                'assets/images/left-arrow.png'
                                            )); ?>"
                                /></i>
                            </a>
                            <a
                                class="carousel-control-next"
                                href="#main_slider"
                                role="button"
                                data-slide="next"
                            >
                                <i class="fa-angle-right"
                                    ><img
                                        src="<?php echo e(asset(
                                                'assets/images/right-arrow.png'
                                            )); ?>"
                                /></i>
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
            <!-- about section start -->
            <div class="about_section layout_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image_2 p-2">
                                <img
                                    src="<?php echo e(asset('assets/images/img-2.png')); ?>"
                                />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h1 class="live_text">About Us</h1>
                            <h5 class="lorem_text">
                                <strong> Welcome to Storms Company!</strong>
                            </h5>
                            <p>
                                We are a leading provider of innovative
                                solutions for businesses looking to optimize
                                their operations and enhance their customer
                                experience.
                            </p>
                            <p>
                                At Storms Company, we understand that in today's
                                fast-paced and ever-changing world, it's
                                essential to stay ahead of the curve. That's why
                                we're committed to helping businesses of all
                                sizes and industries meet their unique needs and
                                goals through our comprehensive range of
                                services. Our team of experienced professionals
                                is dedicated to delivering top-quality solutions
                                that are tailored to meet the specific needs of
                                each client.
                            </p>
                            <p class="content">
                                From custom software development to data
                                analysis and business intelligence, we have the
                                expertise and resources to help businesses
                                achieve their full potential. At Storms Company,
                                we believe in building strong, long-lasting
                                relationships with our clients. We take the time
                                to listen and understand their needs, and work
                                closely with them to develop solutions that not
                                only meet their current requirements but also
                                position them for success in the future. Our
                                mission is to empower businesses to achieve
                                their goals by providing them with the tools and
                                resources they need to thrive in todays digital
                                landscape. We strive to be a trusted partner to
                                our clients, helping them navigate the complex
                                world of technology and digital transformation
                                with ease. Thank you for considering Storms
                                Company for your business needs. We look forward
                                to working with you and helping your business
                                reach new heights.
                            </p>
                            <div class="online_bt_main collapsible">
                                <div class="read_bt1">
                                    <a>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about section end -->
            <!-- product section start -->
            <div class="product_section layout_padding">
                <div class="container">
                    <h1 class="choose_text">Our clients</h1>
                    <h2 class="tariffs_text">Who we work with</h2>
                    <p class="lorem_text1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Proin bibendum, est ac faucibus hendrerit, mauris ante
                        viverra urna, in elementum urna est ut ligula.
                    </p>
                    <div class="product_section2">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <h2 class="easy_text">E-Commerce</h2>
                                <h1 class="internet_text">Internet</h1>
                                <div class="month_main clearfix">
                                    <h1 class="dolor_text">$24.99</h1>
                                    <h2 class="month_text">Month</h2>
                                    <p class="long_text">
                                        It is a long established f act
                                        distracteontent
                                    </p>
                                </div>
                                <div class="seemore_main">
                                    <div class="see_more">
                                        <a href="#">SEE MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <h2 class="easy_text">Impression</h2>
                                <h1 class="internet_text">Tv</h1>
                                <div class="month_main clearfix">
                                    <h1 class="dolor_text">$24.99</h1>
                                    <h2 class="month_text">Month</h2>
                                    <p class="long_text">Hr Management</p>
                                </div>
                                <div class="seemore_main">
                                    <div class="see_more">
                                        <a href="#">SEE MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <h2 class="easy_text">Premium Plan</h2>
                                <h1 class="internet_text">
                                    Internet + TV + Phone
                                </h1>
                                <div class="month_main clearfix">
                                    <h1 class="dolor_text">$24.99</h1>
                                    <h2 class="month_text">Month</h2>
                                    <p class="long_text">
                                        It is a long established f act
                                        distracteontent
                                    </p>
                                </div>
                                <div class="seemore_main">
                                    <div class="see_more">
                                        <a href="#">SEE MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product section end -->
            <!--community impact section end -->
            <div class="about_section layout_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image_2 p-2">
                                <img
                                    src="<?php echo e(asset('assets/images/img-2.png')); ?>"
                                />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h1 class="live_text">
                                <?php echo e(config("app.name")); ?> Your Tech Solution
                            </h1>
                            <p class="lorem_text">
                                The WEVAM GROUP comprises of 18 vertically
                                integrated companies in the built environment
                                undertaking the funding, design, development,
                                operation and maintenance of infrastructure and
                                facilities Areas of knowledge and our reach:
                                PRE-CONSTRUCTION. Before we start building, WGL
                                collaborates with our clients to plan and
                                organize the building concept to guarantee
                                success at every stage. Our construction project
                                management integrates project control and
                                coordination. Our aim is to deliver a project
                                that is both functionally and financially
                                sustainable, exceeding the expectations of our
                                clients at every stage.
                            </p>
                            <div class="online_bt_main">
                                <div class="online_bt">
                                    <a href="#">4K Ultra HD Quality</a>
                                </div>
                                <div class="online_bt1">
                                    <a href="#">200+ Online Channels</a>
                                </div>
                                <div class="read_bt1">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row about_section row-text">
                <p>
                    At Storms Company, we are guided by a set of core values
                    that shape everything we do. These values are the foundation
                    of our culture and inform our decisions, actions, and
                    interactions with our clients and team members. Our values
                    include: Innovation: We believe in pushing boundaries and
                    finding new and better ways to solve complex problems. We
                    embrace creativity and constantly strive to improve our
                    solutions and services. Customer Focus: We are committed to
                    delivering exceptional customer service and building strong,
                    long-lasting relationships with our clients. We listen to
                    their needs and work closely with them to deliver customized
                    solutions that exceed their expectations. Integrity: We
                    operate with the highest standards of ethical behavior,
                    honesty, and transparency. We value trust and integrity in
                    all our interactions with clients, team members, and
                    partners. Collaboration: We believe that teamwork is
                    essential to achieving our goals. We work together,
                    leveraging our diverse skills and experiences to develop
                    innovative solutions and deliver exceptional results.
                    Accountability: We take responsibility for our actions and
                    outcomes. We hold ourselves accountable for delivering on
                    our commitments, and we are transparent and open about our
                    performance. Continuous Improvement: We are committed to
                    continuous learning and improvement. We embrace change and
                    are always looking for ways to enhance our skills,
                    knowledge, and processes to better serve our clients. These
                    values are at the core of who we are and what we stand for.
                    We believe that by staying true to these values, we can
                    deliver exceptional value to our clients, team members, and
                    partners, and make a positive impact on the world around us.
                </p>
            </div>
            <!--community impact section end -->
            <!-- contact section  -->
            <div class="contact_section layout_padding">
                <div class="container">
                    <h1 class="check_text">
                        Check ability to connect our services in your area
                    </h1>
                    <div class="contact_section2">
                        <div class="addres_main">
                            <div class="input_bg">
                                <h3 class="fact_text">
                                    It is a long established fact that a reader
                                    will be distracted
                                </h3>
                                <input
                                    type="text"
                                    class="address_text"
                                    placeholder="Enter your address"
                                    name="text"
                                />
                                <button type="button" class="get_bt">
                                    GET STARTED
                                </button>
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
                                <div class="client_image">
                                    <img
                                        src="<?php echo e(asset('assets/images/img-3.png')); ?>"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="miller_text">
                                    Miller<span class="quote_icon"
                                        ><img
                                            src="<?php echo e(asset(
                                                    'assets/images/quote-icon.png'
                                                )); ?>"
                                    /></span>
                                </div>
                                <p class="ipsum_text">
                                    As an AI language model, I don't have access
                                    to specific feedback from clients of Storms
                                    IT Company. However, I can provide you with
                                    some examples of what clients typically look
                                    for when evaluating an IT company's
                                    services. Clients often value
                                    responsiveness, technical expertise, and a
                                    commitment to delivering quality solutions
                                    that meet their unique needs. They also
                                    appreciate IT companies that are
                                    transparent, communicative, and easy to work
                                    with. Client testimonials can provide
                                    valuable insights into the level of
                                    satisfaction that clients have experienced
                                    with a company's services. They may
                                    highlight the company's strengths, such as
                                    its ability to provide timely and effective
                                    solutions, or its commitment to customer
                                    service and support. Ultimately, the quality
                                    of an IT company's services will be
                                    reflected in the feedback and experiences of
                                    its clients. It's always a good idea to do
                                    your research, read reviews, and ask for
                                    references before choosing an IT company to
                                    partner with.
                                </p>
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
                                <input
                                    type="text"
                                    class="address_text1"
                                    placeholder="Enter your address"
                                    name="text"
                                />
                                <button type="button" class="get_bt1">
                                    GET STARTED
                                </button>
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
                            <h1 class="customer_text">CUSTOMER SERVICE</h1>
                            <div class="footer_logo">
                                <img
                                    class="w-50"
                                    src="<?php echo e(asset('assets/images/footer-logo.png')); ?>"
                                />
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
                                        <a href="#"
                                            ><img
                                                src="<?php echo e(asset(
                                                        'assets/images/fb-icon.png'
                                                    )); ?>"
                                        /></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><img
                                                src="<?php echo e(asset(
                                                        'assets/images/twitter-icon.png'
                                                    )); ?>"
                                        /></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><img
                                                src="<?php echo e(asset(
                                                        'assets/images/instagram-icon.png'
                                                    )); ?>"
                                        /></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><img
                                                src="<?php echo e(asset(
                                                        'assets/images/linkedin-icon.png'
                                                    )); ?>"
                                        /></a>
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
                coll[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var content = this.previousElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }
        </script>
        <!-- Javascript files-->
        <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery-3.0.0.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/plugin.js')); ?>"></script>
        <!-- sidebar -->
        <script src="<?php echo e(asset('assets/js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
        <!-- javascript -->
        <script src="<?php echo e(asset('assets/js/owl.carousel.js')); ?>"></script>
        <script src="<?php echo e(asset(
                    'assets/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js'
                )); ?>"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\StormCompayWebsite\resources\views/welcome.blade.php ENDPATH**/ ?>