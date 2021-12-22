<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/quickmunch/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Oct 2021 03:00:38 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="#">
    <meta name="description" content="#">
    <title>Quickmunch | Food Delivery Hub</title>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
    <link rel="apple-touch-icon-precomposed" href="#">
    <link rel="shortcut icon" href="#">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Flaticons -->
    <link href="assets/css/font/flaticon.css" rel="stylesheet">
    <!-- Swiper Slider -->
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="assets/css/ion.rangeSlider.min.css" rel="stylesheet">
    <!-- magnific popup -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Nice Select -->
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Custom Responsive -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- Color Change -->
    <link rel="stylesheet" class="color-changing" href="assets/css/color4.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <!-- place -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    if (session_status() === PHP_SESSION_DISABLED) {
        session_start();
    }
    $cur_page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
    $cur_uri_compose = $_SERVER["REQUEST_URI"];
    $cur_uri = explode("/", $cur_uri_compose);
    $path = $cur_uri[2];
    if ($path == 'login' || $path == 'register') {
    } else {
    ?>


        <!-- advertise-banner -->
        <!-- Navigation -->
        <div class="header">
            <header class="full-width">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 mainNavCol">
                            <!-- logo -->
                            <div class="logo mainNavCol">
                                <a href="/se06-5.3">
                                    <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                                </a>
                            </div>
                            <!-- logo -->
                            <div class="main-search mainNavCol">
                                <form class="main-search search-form full-width" method="GET" action="">
                                    <div class="row">
                                        <!-- search -->
                                        <div class="col-lg-6 col-md-7">
                                            <div class="search-box padding-10">
                                                <input type="text" name="search" class="form-control" placeholder="Pizza, Burger, Chinese">
                                            </div>
                                        </div>

                                        <!-- location picker -->
                                        <div class="col-lg-6 col-md-5">
                                        </div>
                                        <!-- location picker -->
                                        <!-- search -->
                                    </div>
                                </form>
                            </div>
                            <div class="right-side fw-700 mainNavCol">
                                <div class="gem-points">
                                    <a href="#"> <i class="fas fa-concierge-bell"></i>
                                        <span>Order Now</span>
                                    </a>
                                </div>
                                <div class="catring parent-megamenu">
                                    <a href="#"> <span>Pages <i class="fas fa-caret-down"></i></span>
                                        <i class="fas fa-bars"></i>
                                    </a>
                                </div>
                                <!-- mobile search -->
                                <div class="mobile-search">
                                    <a href="#" data-toggle="modal" data-target="#search-box"> <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <!-- mobile search -->
                                <!-- user account -->
                                <div class="user-details p-relative">
                                    <a href="#" class="text-light-white fw-500">
                                        <img src="assets/img/user-1.png" class="rounded-circle" alt="userimg"> <span>Hi, <?php if (isset($_SESSION['customer'])) {
                                                                                                                                echo $_SESSION['customer']['lname'];
                                                                                                                            } ?></span>
                                    </a>
                                    <div class="user-dropdown">
                                        <ul>
                                            <li>
                                                <a href="history">
                                                    <div class="icon"><i class="flaticon-rewind"></i>
                                                    </div> <span class="details">History</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="payment">
                                                    <div class="icon"><i class="flaticon-breadbox"></i>
                                                    </div> <span class="details">Payment</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="profile">
                                                    <div class="icon"><i class="flaticon-user"></i>
                                                    </div> <span class="details">Account</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="icon"><i class="flaticon-board-games-with-roles"></i>
                                                    </div> <span class="details">Help</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="user-footer"> <span class="text-light-black">Not <?php echo $_SESSION['customer']['lname'] ?> ?</span> <a href="logout">Sign Out</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- mobile search -->
                                <!-- user notification -->
                                <div class="cart-btn notification-btn">
                                    <a href="#" class="text-light-green fw-700"> <i class="fas fa-bell"></i>
                                        <span class="user-alert-notification"></span>
                                    </a>
                                    <div class="notification-dropdown">
                                        <div class="product-detail">
                                            <a href="#">
                                                <div class="img-box">
                                                    <img src="assets/img/shop-1.png" class="rounded" alt="image">
                                                </div>
                                                <div class="product-about">
                                                    <p class="text-light-black">Lil Johnny’s</p>
                                                    <p class="text-light-white">Spicy Maxican Grill</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="rating-box">
                                            <p class="text-light-black">How was your last order ?.</p> <span class="text-dark-white"><i class="fas fa-star"></i></span>
                                            <span class="text-dark-white"><i class="fas fa-star"></i></span>
                                            <span class="text-dark-white"><i class="fas fa-star"></i></span>
                                            <span class="text-dark-white"><i class="fas fa-star"></i></span>
                                            <span class="text-dark-white"><i class="fas fa-star"></i></span>
                                            <cite class="text-light-white">Ordered 2 days ago</cite>
                                        </div>
                                    </div>
                                </div>
                                <!-- user notification -->
                                <!-- user cart -->
                                <div class="cart-btn cart-dropdown">
                                    <a href="#" class="text-light-green fw-700"> <i class="fas fa-shopping-bag"></i>
                                        <span class="user-alert-cart">3</span>
                                    </a>
                                    <div class="cart-detail-box">
                                        <div class="card">
                                            <div class="card-header padding-15">Your Order</div>
                                            <div class="card-body no-padding">
                                                <div class="cat-product-box">
                                                    <div class="cat-product">
                                                        <div class="cat-name">
                                                            <a href="#">
                                                                <p class="text-light-green"><span class="text-dark-white">1</span> Chilli Chicken</p> <span class="text-light-white">small, chilli chicken</span>
                                                            </a>
                                                        </div>
                                                        <div class="delete-btn">
                                                            <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                        <div class="price"> <a href="#" class="text-dark-white fw-500">
                                                                $2.25
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cat-product-box">
                                                    <div class="cat-product">
                                                        <div class="cat-name">
                                                            <a href="#">
                                                                <p class="text-light-green"><span class="text-dark-white">1</span> loaded cheese</p> <span class="text-light-white">small, chilli chicken</span>
                                                            </a>
                                                        </div>
                                                        <div class="delete-btn">
                                                            <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                        <div class="price"> <a href="#" class="text-dark-white fw-500">
                                                                $2.25
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cat-product-box">
                                                    <div class="cat-product">
                                                        <div class="cat-name">
                                                            <a href="#">
                                                                <p class="text-light-green"><span class="text-dark-white">1</span> Tortia Chicken</p> <span class="text-light-white">small, chilli chicken</span>
                                                            </a>
                                                        </div>
                                                        <div class="delete-btn">
                                                            <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                        <div class="price"> <a href="#" class="text-dark-white fw-500">
                                                                $2.25
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-total">
                                                    <div class="total-price border-0"> <span class="text-dark-white fw-700">Items subtotal:</span>
                                                        <span class="text-dark-white fw-700">$9.99</span>
                                                    </div>
                                                    <div class="empty-bag padding-15"> <a href="#">Empty bag</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer padding-15"> <a href="checkout" class="btn-first green-btn text-custom-white full-width fw-500">Proceed to Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- user cart -->
                            </div>
                        </div>
                        <div class="col-sm-12 mobile-search">
                            <!-- <div class="mobile-address">
                                <a href="#" class="delivery-add" data-toggle="modal" data-target="#address-box"> <span class="address">Brooklyn, NY</span>
                                </a>
                            </div> -->
                            <!-- <div class="sorting-addressbox"> <span class="full-address text-light-green">Brooklyn, NY 10041</span>
                                <div class="btns">
                                    <div class="filter-btn">
                                        <button type="button"><i class="fas fa-sliders-h text-light-green fs-18"></i>
                                        </button> <span class="text-light-green">Sort</span>
                                    </div>
                                    <div class="filter-btn">
                                        <button type="button"><i class="fas fa-filter text-light-green fs-18"></i>
                                        </button> <span class="text-light-green">Filter</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="main-sec"></div>
        <!-- Navigation -->
    <?php

    }
    ?>

    <?php
    require_once $content;
    ?>
    <!-- footer -->
    <div class="footer-top section-padding bg-black">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-credit-card-1"></i></span>
                        <span class="text-custom-white">100% Payment<br>Secured</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-wallet-1"></i></span>
                        <span class="text-custom-white">Support lots<br> of Payments</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-help"></i></span>
                        <span class="text-custom-white">24 hours / 7 days<br>Support</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-truck"></i></span>
                        <span class="text-custom-white">Free Delivery<br>with $50</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-guarantee"></i></span>
                        <span class="text-custom-white">Best Price<br>Guaranteed</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-app-file-symbol"></i></span>
                        <span class="text-custom-white">Mobile Apps<br>Ready</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="section-padding bg-light-theme pt-0 u-line bg-black">
        <div class="u-line instagram-slider swiper-container">
            <ul class="hm-list hm-instagram swiper-wrapper">
                <li class="swiper-slide">
                    <a href="#"><img src="assets/img/restaurants/250x200/insta-3.jpg" alt="instagram"></a>
                </li>
                <li class="swiper-slide">
                    <a href="#"><img src="assets/img/restaurants/250x200/insta-1.jpg" alt="instagram"></a>
                </li>
                <li class="swiper-slide">
                    <a href="#"><img src="assets/img/restaurants/250x200/insta-2.jpg" alt="instagram"></a>
                </li>
                <li class="swiper-slide">
                    <a href="#"><img src="assets/img/restaurants/250x200/insta-4.jpg" alt="instagram"></a>
                </li>
                <li class="swiper-slide">
                    <a href="#"><img src="assets/img/restaurants/250x200/insta-5.jpg" alt="instagram"></a>
                </li>
                <li class="swiper-slide">
                    <a href="#"><img src="assets/img/restaurants/250x200/insta-6.jpg" alt="instagram"></a>
                </li>
                <li class="swiper-slide">
                    <a href="#"><img src="assets/img/restaurants/250x200/insta-7.jpg" alt="instagram"></a>
                </li>
                <li class="swiper-slide">
                    <a href="#"><img src="assets/img/restaurants/250x200/insta-8.jpg" alt="instagram"></a>
                </li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-contact">
                        <h6 class="text-custom-white">Need Help</h6>
                        <ul>
                            <li class="fw-600"><span class="text-light-white">Call Us</span> <a href="tel:" class="text-custom-white">+(347) 123 456 789</a>
                            </li>
                            <li class="fw-600"><span class="text-light-white">Email Us</span> <a href="mailto:" class="text-custom-white">demo@domain.com</a>
                            </li>
                            <li class="fw-600"><span class="text-light-white">Join our twitter</span> <a href="#" class="text-custom-white">@quickmunch</a>
                            </li>
                            <li class="fw-600"><span class="text-light-white">Join our instagram</span> <a href="#" class="text-custom-white">@quickmunch</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <h6 class="text-custom-white">Get to Know Us</h6>
                        <ul>
                            <li><a href="#" class="text-light-white fw-600">About Us</a>
                            </li>
                            <li><a href="#" class="text-light-white fw-600">Blog</a>
                            </li>
                            <li><a href="#" class="text-light-white fw-600">Socialize</a>
                            </li>
                            <li><a href="#" class="text-light-white fw-600">Quickmunch</a>
                            </li>
                            <li><a href="#" class="text-light-white fw-600">Perks</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <h6 class="text-custom-white">Let Us Help You</h6>
                        <ul>
                            <li><a href="#" class="text-light-white fw-600">Account Details</a>
                            </li>
                            <li><a href="#" class="text-light-white fw-600">Order History</a>
                            </li>
                            <li><a href="#" class="text-light-white fw-600">Find restaurant</a>
                            </li>
                            <li><a href="#" class="text-light-white fw-600">Login</a>
                            </li>
                            <li><a href="#" class="text-light-white fw-600">Track order</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <h6 class="text-custom-white">Doing Business</h6>
                        <ul>
                            <li><a href="#" class="text-light-white fw-600">Suggest an Idea</a>
                            </li>
                            <li><a href="#" class="text-light-white fw-600">Be a Partner restaurant</a>
                            </li>
                            <li><a href="#" class="text-light-white fw-600">Create an Account</a>
                            </li>
                            <li><a href="#" class="text-light-white fw-600">Help</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <h6 class="text-custom-white">Download Apps</h6>
                        <div class="appimg">
                            <a href="#">
                                <img src="assets/img/playstore.jpg" class="img-fluid" alt="app logo">
                            </a>
                        </div>
                        <div class="appimg">
                            <a href="#">
                                <img src="assets/img/appstore.jpg" class="img-fluid" alt="app logo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-contact">
                        <h6 class="text-custom-white">Newsletter</h6>
                        <form class="subscribe_form">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-submit" name="email" placeholder="Enter your email">
                                <span class="input-group-btn">
                                    <button class="btn btn-second btn-submit" type="button"><i class="fas fa-paper-plane"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="ft-social-media">
                        <h6 class="text-center text-custom-white">Follow us</h6>
                        <ul>
                            <li> <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li> <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li> <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li> <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                            <li> <a href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright bg-black">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="payment-logo mb-md-20"> <span class="text-light-white fs-14 mr-3">We are accept</span>
                        <div class="payemt-icon">
                            <img src="assets/img/card-front.jpg" alt="#">
                            <img src="assets/img/visa.jpg" alt="#">
                            <img src="assets/img/amex-card-front.png" alt="#">
                            <img src="assets/img/mastercard.png" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center medewithlove align-self-center">
                    <a href="https://themeforest.net/user/metropolitantheme/portfolio" class="text-custom-white">Made with Real <i class="fas fa-heart"></i> Metropolitantheme</a>
                </div>
                <div class="col-lg-4">
                    <div class="copyright-text"> <span class="text-light-white">© <a href="#" class="text-light-white">Metropolitantheme</a> - 2022 | All Right Reserved</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <!-- Place all Scripts Here -->
    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <!-- Swiper Slider -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
    <!-- sticky sidebar -->
    <script src="assets/js/sticksy.js"></script>
    <!-- Munch Box Js -->
    <script src="assets/js/quickmunch.js"></script>
    <!-- /Place all Scripts Here -->
</body>


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/quickmunch/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Oct 2021 03:06:48 GMT -->

</html>