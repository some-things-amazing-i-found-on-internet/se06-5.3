<?php
ob_start();
session_start();
include("src/config/config.php");
include("src/config/functions.php");
$error_message = '';
$cur_page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
if (isset($_SESSION['customer'])) {
} else {
    if ($cur_page == 'login.php') {
    } else {
        header("location: " . BASE_URL . "login.php");
    }
}

?>

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
</head>

<body>
    <?php
    $cur_page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
    if ($cur_page == 'login.php') {
    } else {
    ?>
        <!-- advertise-banner -->
        <div class="banner-adv-bg">
            <div id="banner-adv" class="banner-adv">
                <div class="flex-adv">
                    <a href="https://themeforest.net/item/costic-food-dashboard-html5-template/28164952" target="_blank">
                        <i class="fas fa-gift"></i>
                        <span class="text">Get FREE CRM Dashboard with Quickmunch.</span>
                    </a>
                    <a href="https://themeforest.net/item/costic-food-dashboard-html5-template/28164952" target="_blank" class="btn-second btn-submit">View Dashboard here</a>
                </div>
                <span class="close-banner"></span>
            </div>
        </div>
        <!-- advertise-banner -->

        <!-- advertise-banner -->
        <!-- Navigation -->
        <div class="header">
            <header class="full-width">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 mainNavCol">
                            <!-- logo -->
                            <div class="logo mainNavCol">
                                <a href="index.html">
                                    <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                                </a>
                            </div>
                            <!-- logo -->
                            <div class="main-search mainNavCol">
                                <form class="main-search search-form full-width">
                                    <div class="row">
                                        <!-- location picker -->
                                        <div class="col-lg-6 col-md-5">
                                            <a href="#" class="delivery-add p-relative"> <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                                                <span class="address">Brooklyn, NY</span>
                                            </a>
                                            <div class="location-picker">
                                                <input type="text" class="form-control" placeholder="Enter a new address">
                                            </div>
                                        </div>
                                        <!-- location picker -->
                                        <!-- search -->
                                        <div class="col-lg-6 col-md-7">
                                            <div class="search-box padding-10">
                                                <input type="text" class="form-control" placeholder="Pizza, Burger, Chinese">
                                            </div>
                                        </div>
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
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-5">
                                                        <div class="ex-collection-box h-100">
                                                            <a href="#">
                                                                <img src="assets/img/nav-1.jpg" class="img-fluid full-width h-100" alt="image">
                                                            </a>
                                                            <div class="category-type overlay padding-15"> <a href="restaurant.html" class="category-btn">Top rated</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-7">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="menu-style">
                                                                    <div class="menu-title">
                                                                        <h6 class="cat-name"><a href="#" class="text-light-black">Inner Pages</a></h6>
                                                                    </div>
                                                                    <ul>
                                                                        <li><a href="blog.html" class="text-light-white fw-500">Blog Grid View</a>
                                                                        </li>
                                                                        <li><a href="blog-style-2.html" class="text-light-white fw-500">Blog Grid View 2</a>
                                                                        </li>
                                                                        <li><a href="blog-details.html" class="text-light-white fw-500">Blog Details</a>
                                                                        </li>
                                                                        <li><a href="ex-deals.html" class="text-light-white fw-500">Ex Deals</a>
                                                                        </li>
                                                                        <li><a href="about.html" class="text-light-white fw-500">About Us</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="menu-style">
                                                                    <div class="menu-title">
                                                                        <h6 class="cat-name"><a href="#" class="text-light-black">Related Pages</a></h6>
                                                                    </div>
                                                                    <ul>
                                                                        <li><a href="restaurant.html" class="text-light-white fw-500">Restaurant</a>
                                                                        <li><a href="restaurant-style-1.html" class="text-light-white fw-500">Restaurant 1</a>
                                                                        </li>
                                                                        <li><a href="restaurant-style-2.html" class="text-light-white fw-500">Restaurant 2</a>
                                                                        </li>
                                                                        <li><a href="add-restaurant.html" class="text-light-white fw-500">Add Restaurant</a>
                                                                        </li>
                                                                        <li><a href="list-view.html" class="text-light-white fw-500">List View</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="menu-style">
                                                                    <div class="menu-title">
                                                                        <h6 class="cat-name"><a href="#" class="text-light-black">Additional Pages</a></h6>
                                                                    </div>
                                                                    <ul>
                                                                        <li><a href="login.php" class="text-light-white fw-500">Login</a>
                                                                        </li>
                                                                        <li><a href="register.html" class="text-light-white fw-500">Sign-up</a>
                                                                        </li>
                                                                        <li><a href="checkout.html" class="text-light-white fw-500">Checkout</a>
                                                                        </li>
                                                                        <li><a href="order-details.html" class="text-light-white fw-500">Order Details</a>
                                                                        </li>
                                                                        <li><a href="geo-locator.html" class="text-light-white fw-500">Geo Locator</a>
                                                                        </li>
                                                                        <li><a href="contact.html" class="text-light-white fw-500">Contact Us</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                        <img src="assets/img/user-1.png" class="rounded-circle" alt="userimg"> <span>Hi, Kate</span>
                                    </a>
                                    <div class="user-dropdown">
                                        <ul>
                                            <li>
                                                <a href="order-details.html">
                                                    <div class="icon"><i class="flaticon-rewind"></i>
                                                    </div> <span class="details">Past Orders</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="order-details.html">
                                                    <div class="icon"><i class="flaticon-takeaway"></i>
                                                    </div> <span class="details">Upcoming Orders</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="icon"><i class="flaticon-breadbox"></i>
                                                    </div> <span class="details">Saved</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="icon"><i class="flaticon-gift"></i>
                                                    </div> <span class="details">Gift cards</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="icon"><i class="flaticon-refer"></i>
                                                    </div> <span class="details">Refer a friend</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="icon"><i class="flaticon-diamond"></i>
                                                    </div> <span class="details">Perks</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
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
                                        <div class="user-footer"> <span class="text-light-black">Not Jhon?</span> <a href="logout.php">Sign Out</a>
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
                                            <div class="card-footer padding-15"> <a href="checkout.html" class="btn-first green-btn text-custom-white full-width fw-500">Proceed to Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- user cart -->
                            </div>
                        </div>
                        <div class="col-sm-12 mobile-search">
                            <div class="mobile-address">
                                <a href="#" class="delivery-add" data-toggle="modal" data-target="#address-box"> <span class="address">Brooklyn, NY</span>
                                </a>
                            </div>
                            <div class="sorting-addressbox"> <span class="full-address text-light-green">Brooklyn, NY 10041</span>
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
                            </div>
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