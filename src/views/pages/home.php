<!-- slider -->
<?php
$req_param_check = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
parse_str($req_param_check, $param_check);
// $req_param = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
// parse_str($req_param, $param);
if ($params_request[0] !== false || isset($param_check['page']) || isset($param_check['search']) || isset($param['category'])) {
} else { ?>
    <section class="about-us-slider swiper-container p-relative">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-item">
                <img src="assets/img/about/blog/1920x700/banner-4.jpg" class="img-fluid full-width" alt="Banner">
                <div class="transform-center">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 align-self-center">
                                <div class="right-side-content">
                                    <h1 class="text-custom-white fw-600"> Đồ ăn đa dạng</h1>
                                    <h3 class="text-custom-white fw-400">Từ đồ ăn, đồ uống, lẩu, đồ ăn chay,...</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay overlay-bg"></div>
            </div>
            <div class="swiper-slide slide-item">
                <img src="assets/img/about/blog/1920x700/banner-5.jpg" class="img-fluid full-width" alt="Banner">
                <div class="transform-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 align-self-center">
                                <div class="right-side-content text-center">
                                    <h1 class="text-custom-white fw-600">Nhiều ưu đãi, giảm giá lên tới 50%</h1>
                                    <h3 class="text-custom-white fw-400">Hỗ trợ free ship cho đơn hàng dưới 2km</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay overlay-bg"></div>
            </div>
            <div class="swiper-slide slide-item">
                <img src="assets/img/about/blog/1920x700/banner-6.jpg" class="img-fluid full-width" alt="Banner">
                <div class="transform-center">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 align-self-center">
                                <div class="right-side-content text-right">
                                    <h1 class="text-custom-white fw-600">Trở thành chủ của một nhà hàng nhanh chóng</h1>
                                    <a href="add-restaurant" class="btn-second btn-submit">Tạo nhà hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay overlay-bg"></div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>
<?php } ?>
<!-- slider -->
<!-- Browse by category -->
<section class="browse-cat u-line section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title title">Tìm kiếm theo danh mục<span class="fs-14"><a href="restaurant.html">See all restaurant</a></span></h3>
                </div>
            </div>
            <div class="col-12">
                <div class="category-slider swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($result2 as $row2) {
                        ?>
                            <div class="swiper-slide">
                                <a href="home?category=<?php echo $row2['id'] ?>" class="categories">
                                    <div class="icon text-custom-white <?php
                                                                        if (isset($param['category']) && $row2['id'] === $param['category']) {
                                                                            echo 'bg-danger';
                                                                        } else {
                                                                            echo 'bg-light';
                                                                        }
                                                                        ?> ">
                                        <img src=<?php echo $row2['icon'] ?> class="rounded-circle" alt="categories">
                                    </div> <span class="text-light-black cat-name"><?php echo $row2['name'] ?> </span>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Browse by category -->
<!-- your previous order -->
<?php
if ($params_request[0] !== false || isset($param_check['page']) || isset($param_check['search']) || isset($param['category'])) {
} else {
?>
    <section class="recent-order section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Đơn hàng mới đặt gần đây<span class="fs-14"><a href="history">Xem lịch sử đơn hàng</a></span></h3>
                    </div>
                </div>
                <?php foreach ($result3 as $row) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="product-box mb-md-20">
                            <div class="product-img">
                                <img style="width: 260px; height: 235px;" src=<?php echo $row['photos'] ?> class="img-fluid full-width" alt="product-img">
                            </div>
                            <div class="product-caption">
                                <h6 class="product-title"><a class="text-light-black"> <?php echo $row['name'] ?></a></h6>
                                <p class="text-light-white"><?php echo "Số lượng: " . $row['quantity_order'] ?></p>
                                <p class="text-light-white"><?php echo "Đơn giá: " . $row['price_text'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- your previous order -->
<?php
}
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-header-left">
                <h3 class="text-light-black header-title title">Nhà hàng mới<span class="fs-14"></span></h3>
            </div>
        </div>
        <?php foreach ($new_restaurants as $row) { ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="<?php echo 'restaurant&' . $row['id'] ?>">
                                        <img src=<?php echo $row['value'] ?> class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                                                <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                                            </span>
                                            <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                                                    10%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="<?php echo 'restaurant&id=' . $row['id'] ?>" class="text-light-black "><?php echo $row['name'] ?></a></h6>
                                        <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
                                                <?php
                                                echo $row['rating_avg'];
                                                ?>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <p class="text-light-white"><?php echo $row['address'] ?></p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time"><?php echo "Giới hạn khoảng cách: " . ((int)$row["limit_distance"]) / 1000 . "km" ?></span>
                                            <span class="text-light-white price"><?php echo "Giá trung bình: " . str_replace("k", ".000đ", $row["price_range"]) ?></span>
                                        </div>
                                        <div class="rating"> <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right"><?php echo $row["rating_display_total_review"] . " " . "ratings" ?></span>
                                        </div>
                                    </div>
                                    <!-- <div class="product-footer"> <span class="text-custom-white square-tag">
                                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                                </span>
                                <span class="text-custom-white square-tag">
                                    <img src="assets/img/svg/006-chili.svg" alt="tag">
                                </span>
                                <span class="text-custom-white square-tag">
                                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                                </span>
                                <span class="text-custom-white square-tag">
                                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                                </span>
                                <span class="text-custom-white square-tag">
                                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                                </span>
                            </div> -->
                                </div>
                            </div>
                        </div>
        <?php } ?>
    </div>
</div>

<!-- Explore collection -->
<section class="ex-collection section-padding">
    <div class="container">
        <div class="row">
            <aside class="col-lg-3 mb-md-40">
                <div class="filter-sidebar mb-5">
                    <h4 class="text-light-black fw-600 title-2">Filters<small class="fs-12"><a href="#" class="text-light-black fw-500">Clear all</a></small></h4>
                    <div class="sidebar-tab">
                        <ul class="nav nav-pills mb-xl-20">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="pill" href="#restaurents">Restaurants</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#caterings">Caterings</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="restaurents">
                                <div class="siderbar-innertab">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="pill" href="#delivery-restaurents">Delivery</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#pickup-restaurents">Pickup</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="delivery-restaurents">
                                        <p class="text-light-black delivery-type p-relative">Delivery my food <a href="#">Today, ASAP</a>
                                        </p>
                                        <div class="filters">
                                            <div class="card">
                                                <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#deliverycollapseOne">
                                                        Feature
                                                    </a>
                                                </div>
                                                <div id="deliverycollapseOne" class="collapse show">
                                                    <div class="card-body">
                                                        <form>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox" name="#"> <span class="checkmark"></span> Cửa hàng đã đặt trước đó <span class="text-light-white">(3)</span>
                                                            </label>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox" name="#"> <span class="checkmark"></span> Free Ship <span class="text-light-white">(6)</span>
                                                            </label>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox" name="#"> <span class="checkmark"></span> Open Now [6:05am] <span class="text-light-white">(10)</span>
                                                            </label>
                                                            <!-- <label class="custom-checkbox">
                                                                <input type="checkbox" name="#"> <span class="checkmark"></span> Free Delivery <span class="text-light-white">(6)</span>
                                                            </label> -->
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#deliverycollapseTwo">
                                                        Rating
                                                    </a>
                                                </div>
                                                <div id="deliverycollapseTwo" class="collapse show">
                                                    <div class="card-body">
                                                        <div class="rating">
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#deliverycollapseFour">
                                                        Price
                                                    </a>
                                                </div>
                                                <div id="deliverycollapseFour" class="collapse show">
                                                    <div class="card-body">
                                                        <div class="delivery-slider">
                                                            <input type="text" class="delivery-range-slider" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pickup-restaurents">
                                        <p class="text-light-black delivery-type p-relative">Pick my food <a href="#">Today, ASAP</a>
                                        </p>
                                        <div class="filters">
                                            <div class="card">
                                                <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#pickupcollapseOne">
                                                        Feature
                                                    </a>
                                                </div>
                                                <div id="pickupcollapseOne" class="collapse show">
                                                    <div class="card-body">
                                                        <form>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox" name="#"> <span class="checkmark"></span> Coupons <span class="text-light-white">(1)</span>
                                                            </label>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox" name="#"> <span class="checkmark"></span> New <span class="text-light-white">(26)</span>
                                                            </label>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox" name="#"> <span class="checkmark"></span> Open Now [7:08am] <span class="text-light-white">(236)</span>
                                                            </label>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#pickupcollapseTwo">
                                                        Rating
                                                    </a>
                                                </div>
                                                <div id="pickupcollapseTwo" class="collapse show">
                                                    <div class="card-body">
                                                        <div class="rating">
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#pickupcollapseThree">
                                                        Price
                                                    </a>
                                                </div>
                                                <div id="pickupcollapseThree" class="collapse show">
                                                    <div class="card-body">
                                                        <div class="rating">
                                                            <button class="text-success">$</button>
                                                            <button class="text-success">$$</button>
                                                            <button class="text-success">$$$</button>
                                                            <button class="text-success">$$$$</button>
                                                            <button class="text-success">$$$$$</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#pickupcollapseFour">
                                                        Distance
                                                    </a>
                                                </div>
                                                <div id="pickupcollapseFour" class="collapse show">
                                                    <div class="card-body">
                                                        <div class="delivery-slider">
                                                            <input type="text" class="distance-range-slider" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="caterings">
                                <div class="siderbar-innertab">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="pill" href="#delivery-caterings">Delivery</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link disabled" data-toggle="pill" href="#pickup-caterings">Pickup</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="delivery-caterings">
                                        <p class="text-light-black delivery-type p-relative">Delivery my food <a href="#">Today, ASAP</a>
                                        </p>
                                        <div class="filters">
                                            <div class="card">
                                                <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#delivery-cateringscollapseOne">
                                                        Feature
                                                    </a>
                                                </div>
                                                <div id="delivery-cateringscollapseOne" class="collapse show">
                                                    <div class="card-body">
                                                        <form>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox" name="#"> <span class="checkmark"></span> Coupons <span class="text-light-white">(2)</span>
                                                            </label>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox" name="#"> <span class="checkmark"></span> New <span class="text-light-white">(3)</span>
                                                            </label>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox" name="#"> <span class="checkmark"></span> Order Tracking <span class="text-light-white">(6)</span>
                                                            </label>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox" name="#"> <span class="checkmark"></span> Open Now [6:05am] <span class="text-light-white">(10)</span>
                                                            </label>
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox" name="#"> <span class="checkmark"></span> Free Delivery <span class="text-light-white">(6)</span>
                                                            </label>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#delivery-cateringscollapseTwo">
                                                        Rating
                                                    </a>
                                                </div>
                                                <div id="delivery-cateringscollapseTwo" class="collapse show">
                                                    <div class="card-body">
                                                        <div class="rating">
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                            <button class="text-yellow"><i class="fas fa-star"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#delivery-cateringscollapseThree">
                                                        Price
                                                    </a>
                                                </div>
                                                <div id="delivery-cateringscollapseThree" class="collapse show">
                                                    <div class="card-body">
                                                        <div class="rating">
                                                            <button class="text-success">$</button>
                                                            <button class="text-success">$$</button>
                                                            <button class="text-success">$$$</button>
                                                            <button class="text-success">$$$$</button>
                                                            <button class="text-success">$$$$$</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </aside>
            <div class="col-9">
                <div class="row">
                    <div class="col-12">
                        <div class="section-header-left">
                            <h3 class="text-light-black header-title title"> <?php if (isset($param['search'])) echo "Search by \"" . $param['search'] . "\"";
                                                                                else echo "Tất cả"; ?> </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php

                    $str_param = "";
                    if (isset($param['search'])) {
                        $str_param .= "search=" . $param['search'] . "&";
                    }
                    if (isset($param['category'])) {
                        $str_param .= "category=" . $param['category'] . "&page=";
                    } else {
                        $str_param .= "page=";
                    }

                    if (!isset($param['page'])) {
                        $page = 1;
                    } else {
                        $page = $param['page'];
                    }
                    $per_page_record = 27;
                    $total_records = count($result);
                    $total_pages = ceil($total_records / $per_page_record);

                    $start_from = ($page - 1) * $per_page_record;

                    for ($i = $start_from; $i < min($start_from + $per_page_record, $total_records); $i++) {
                        $row = $result[$i];
                        // }
                        // foreach ($result as $row) {
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="<?php echo 'restaurant&' . $row['id'] ?>">
                                        <img src=<?php echo $row['value'] ?> class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                                                <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                                            </span>
                                            <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                                                    10%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="<?php echo 'restaurant&id=' . $row['id'] ?>" class="text-light-black "><?php echo $row['name'] ?></a></h6>
                                        <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
                                                <?php
                                                echo $row['rating_avg'];
                                                ?>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <p class="text-light-white"><?php echo $row['address'] ?></p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time"><?php echo "Giới hạn khoảng cách: " . ((int)$row["limit_distance"]) / 1000 . "km" ?></span>
                                            <span class="text-light-white price"><?php echo "Giá trung bình: " . str_replace("k", ".000đ", $row["price_range"]) ?></span>
                                        </div>
                                        <div class="rating"> <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right"><?php echo $row["rating_display_total_review"] . " " . "ratings" ?></span>
                                        </div>
                                    </div>
                                    <!-- <div class="product-footer"> <span class="text-custom-white square-tag">
                                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                                </span>
                                <span class="text-custom-white square-tag">
                                    <img src="assets/img/svg/006-chili.svg" alt="tag">
                                </span>
                                <span class="text-custom-white square-tag">
                                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                                </span>
                                <span class="text-custom-white square-tag">
                                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                                </span>
                                <span class="text-custom-white square-tag">
                                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                                </span>
                            </div> -->
                                </div>
                            </div>
                        </div>

                    <?php
                    }

                    echo '<div class="col-lg-12 d-flex justify-content-center mt-3"><nav aria-label="Page navigation example"><ul class="pagination">';
                    $pagLink = "";

                    if ($page >= 2) {
                        echo "<li class='page-item'><a class='page-link' href='home?" . $str_param . ($page - 1) . "'>  Prev </a></li>";
                        $pagLink .= "<a class='page-link' href='home?" . $str_param . "1'>1</a>";
                    }

                    if ($page > 3) {
                        $pagLink .= "<b>......</b>";
                    }
                    if ($page > 2) {
                        $pagLink .= "<li class='page-item'><a class='page-link' href='home?" . $str_param . (intval($page) - 1) . "'>" . (intval($page) - 1) . " </a></li>";
                    }

                    $pagLink .= "<li class='page-item active'><a class = 'page-link' href='home?" . $str_param . $page . "'>" . $page  . " </a></li>";
                    if ($page < intval($total_pages) - 1) {
                        // print $page + 1;
                        $pagLink .= "<li class='page-item'><a class='page-link' href='home?" . $str_param . (intval($page) + 1) . "'>" . (intval($page) + 1) . " </a></li>";
                    }
                    if ($page < $total_pages - 2) {
                        $pagLink .= "<b>......</b>";
                    }

                    if ($page < $total_pages) {
                        $pagLink .= "<li class='page-item'><a class='page-link' href='home?" . $str_param . $total_pages . "'>" . $total_pages . " </a></li>";
                        $pagLink .= "<li class='page-item'><a class='page-link' href='home?" . $str_param . (intval($page) + 1) . "'>  Next </a></li>";
                    }

                    echo $pagLink;
                    echo '</ul></nav></div>';
                    // cho Hiếu làm mấy cái nút cho đẹp nhá
                    ?>
                </div>
            </div>
        </div>

</section>
<!-- Explore collection -->