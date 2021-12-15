<!-- slider -->
<?php
$req_param_check = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
parse_str($req_param_check, $param_check);
$req_param = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
parse_str($req_param, $param);
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
                                    <h1 class="text-custom-white fw-600"> Increase takeout sales by 50%</h1>
                                    <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
                                    <a href="restaurant.html" class="btn-second btn-submit">Learn More.</a>
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
                                    <h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
                                    <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
                                    <a href="restaurant.html" class="btn-second btn-submit">Learn More.</a>
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
                                    <h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
                                    <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
                                    <a href="restaurant.html" class="btn-second btn-submit">Learn More.</a>
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
                    <h3 class="text-light-black header-title title">Browse by category <span class="fs-14"><a href="restaurant.html">See all restaurant</a></span></h3>
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
                        <h3 class="text-light-black header-title title">Your previous orders <span class="fs-14"><a href="order-details.html">See all past orders</a></span></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-box mb-md-20">
                        <div class="product-img">
                            <a href="restaurant.html">
                                <img src="assets/img/restaurants/255x104/order-1.jpg" class="img-fluid full-width" alt="product-img">
                            </a>
                        </div>
                        <div class="product-caption">
                            <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Chilli Chicken Pizza</a></h6>
                            <p class="text-light-white">Big Bites, Brooklyn</p>
                            <div class="product-btn">
                                <a href="order-details.html" class="btn-first white-btn full-width text-light-green fw-600">Track Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-box mb-md-20">
                        <div class="product-img">
                            <a href="restaurant.html">
                                <img src="assets/img/restaurants/255x104/order-2.jpg" class="img-fluid full-width" alt="product-img">
                            </a>
                        </div>
                        <div class="product-caption">
                            <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Hakka Noodles</a></h6>
                            <p class="text-light-white">Flavor Town, Brooklyn</p>
                            <div class="product-btn">
                                <a href="order-details.html" class="btn-first white-btn full-width text-light-green fw-600">Track Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-box mb-md-20">
                        <div class="product-img">
                            <a href="restaurant.html">
                                <img src="assets/img/restaurants/255x104/order-3.jpg" class="img-fluid full-width" alt="product-img">
                            </a>
                        </div>
                        <div class="product-caption">
                            <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Vegan Burger </a></h6>
                            <p class="text-light-white">Great Burger, Brooklyn</p>
                            <div class="product-btn">
                                <a href="order-details.html" class="btn-first white-btn full-width text-light-green fw-600">Track Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-box mb-md-20">
                        <div class="product-img">
                            <a href="restaurant.html">
                                <img src="assets/img/restaurants/255x104/order-4.jpg" class="img-fluid full-width" alt="product-img">
                            </a>
                        </div>
                        <div class="product-caption">
                            <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Sticky Date Cake</a></h6>
                            <p class="text-light-white">Smile N’ Delight, Brooklyn</p>
                            <div class="product-btn">
                                <a href="order-details.html" class="btn-first white-btn full-width text-light-green fw-600">Track Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- your previous order -->
<?php
}

?>

<!-- Explore collection -->
<section class="ex-collection section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title title"> <?php if (isset($param['search'])) echo "Search by \"" . $param['search'] . "\"";
                                                                        else echo "Tất cả"; ?> </h3>
                </div>
            </div>
        </div>
        <?php
        // $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_id DESC");
        // $statement->execute(array(1));
        // $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        // foreach ($result as $row) {
        //     echo '<script>';
        //     echo 'console.log('. json_encode($row, JSON_HEX_TAG) .')';
        //     echo '</script>';
        //     print $row['p_id'] . "</br>";
        // }
        ?>
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
</section>
<!-- Explore collection -->