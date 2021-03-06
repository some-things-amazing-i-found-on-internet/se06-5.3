<!-- restaurent top -->
<div class="page-banner p-relative smoothscroll" id="menu">
    <img src=<?php echo $restaurants[0]['value'] ?> class="img-fluid full-width" alt="banner">
    <div class="overlay-2">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="back-btn">
                        <button type="button" class="text-light-green"> <i class="fas fa-chevron-left"></i>
                        </button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="tag-share"> <span class="text-light-green share-tag">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- restaurent top -->
<!-- restaurent details -->
<section class="restaurent-details  u-line">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading padding-tb-10">
                    <h3 class="text-light-black title fw-700 no-margin"><?php echo $restaurants[0]['name'] ?></h3>
                    <p class="text-light-black sub-title no-margin"><?php echo $restaurants[0]['address'] ?><span><a href="checkout.html" class="text-success">Change locations</a></span>
                    </p>
                    <div class="head-rating">
                        <div class="rating"> <span class="fs-16 text-yellow">
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="fs-16 text-yellow">
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="fs-16 text-yellow">
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="fs-16 text-yellow">
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="fs-16 text-dark-white">
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="text-light-black fs-12 rate-data"><?php echo $restaurants[0]['rating_display_total_review'] . " ????nh gi??" ?></span>
                        </div>
                        <div class="product-review">
                            <div class="restaurent-details-mob">
                                <a href="#"> <span class="text-light-black"><i class="fas fa-info-circle"></i></span>
                                    <span class="text-dark-white">info</span>
                                </a>
                            </div>
                            <div class="restaurent-details-mob">
                                <a href="#"> <span class="text-light-black"><i class="fas fa-info-circle"></i></span>
                                    <span class="text-dark-white">info</span>
                                </a>
                            </div>
                            <div class="restaurent-details-mob">
                                <a href="#"> <span class="text-light-black"><i class="fas fa-info-circle"></i></span>
                                    <span class="text-dark-white">info</span>
                                </a>
                            </div>
                            <div class="restaurent-details-mob">
                                <a href="#"> <span class="text-light-black"><i class="fas fa-info-circle"></i></span>
                                    <span class="text-dark-white">info</span>
                                </a>
                            </div>
                            <h6 class="text-light-black no-margin">91<span class="fs-14">% Food was good</span></h6>
                            <h6 class="text-light-black no-margin">91<span class="fs-14">% Food was good</span></h6>
                            <h6 class="text-light-black no-margin">91<span class="fs-14">% Food was good</span></h6>
                        </div>
                    </div>
                </div>
                <div class="restaurent-logo">
                    <img src="assets/img/logo-4.jpg" class="img-fluid" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- restaurent details -->
<!-- restaurent tab -->
<div class="restaurent-tabs u-line">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="restaurent-menu scrollnav">
                    <ul class="nav nav-pills">
                        <li class="nav-item"> <a class="nav-link active text-light-white fw-700" data-toggle="pill" href="#menu">Menu</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link text-light-white fw-700" data-toggle="pill" href="#about">About</a>
                        </li>
                        <!-- <li class="nav-item"> <a class="nav-link text-light-white fw-700" data-toggle="pill" href="#review">Reviews</a>
                        </li> -->
                    </ul>
                    <div class="add-wishlist">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- restaurent tab -->
<!-- restaurent address -->
<div class="restaurent-address u-line">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="address-details">
                    <div class="address">
                        <div class="delivery-address"> <a href="order-details.html" class="text-light-black">Delivery, ASAP (45???55m)</a>
                            <div class="delivery-type"> <span class="text-success fs-12 fw-500">No minimun</span><span class="text-light-white">, Free Delivery</span>
                            </div>
                        </div>
                        <div class="change-address"> <a href="checkout.html" class="fw-500">Change</a>
                        </div>
                    </div>
                    <p class="text-light-white no-margin"> </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- restaurent address -->
<!-- restaurent meals -->
<section class="section-padding restaurent-meals bg-light-theme">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3">
                <div class="advertisement-slider swiper-container h-auto mb-xl-20 mb-md-40">
                    <div class="swiper-wrapper-dcmm">

                        <div class="swiper-slide">
                            <div class="testimonial-wrapper">
                                <div class="testimonial-box">
                                    <div class="testimonial-img p-relative">
                                        <a href="restaurant.html">
                                            <img src="assets/img/blog/438x180/shop-2.jpg" class="img-fluid full-width" alt="testimonial-img">
                                        </a>
                                        <div class="overlay">
                                            <div class="brand-logo">
                                                <img src="assets/img/user/user-2.png" class="img-fluid" alt="logo">
                                            </div>
                                            <div class="add-fav text-success"><img src="assets/img/svg/013-heart-1.svg" alt="tag">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-caption padding-15">
                                        <p class="text-light-white text-uppercase no-margin fs-12">Featured</p>
                                        <h5 class="fw-600"><a href="restaurant.html" class="text-light-black">GSA King Tomato Farm</a></h5>
                                        <div class="testimonial-user-box">
                                            <img src="assets/img/blog-details/40x40/user-2.png" class="rounded-circle" alt="#">
                                            <div class="testimonial-user-name">
                                                <p class="text-light-black fw-600">Sarra</p> <i class="fas fa-trophy text-black"></i><span class="text-light-black">Top Reviewer</span>
                                            </div>
                                        </div>
                                        <div class="ratings"> <span class="text-yellow fs-16">
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="text-yellow fs-16">
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="text-yellow fs-16">
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="text-yellow fs-16">
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="text-yellow fs-16">
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                        <p class="text-light-black">Delivery was fast and friendly...</p>
                                        <p class="text-light-white fw-100"><strong class="text-light-black fw-700">Local delivery: </strong> From $7.99 (4.0 mi)</p>
                                        <a href="checkout.html" class="btn-second btn-submit">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <form action="?action=add" class="row">
                    <div class="col-lg-12 restaurent-meal-head mb-md-40">
                        <?php
                        $i = -1;
                        foreach ($dish_types as $type) {
                            $i++;
                        ?>
                            <div class="card">
                                <div class="card-header">
                                    <div class="section-header-left">
                                        <h3 class="text-light-black header-title">
                                            <a class="card-link text-light-black no-margin" data-toggle="collapse" href="#collapseOne<?php echo $i; ?>">
                                                <?php echo $type['dish_type_name']; ?>
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <div id="collapseOne<?php echo $i; ?>" class="collapse show">
                                    <div class="card-body no-padding">
                                        <form class="row" action="action">
                                            <?php
                                            $j = -1;
                                            foreach ($dish_orders as $food) {
                                                $j++;
                                                if ($food["dish_type_id"] == $type["dish_type_id"]) {
                                            ?>
                                                    <div class="col-lg-12">
                                                        <div class="restaurent-product-list">
                                                            <div class="restaurent-product-detail" id="product-detail-<?php echo $j ?>">
                                                                <div class="restaurent-product-img">
                                                                    <img src=<?php echo $food["photos"] ?> class="img-fluid" alt="#">
                                                                </div>
                                                                <div class="restaurent-product-left">
                                                                    <div class="restaurent-product-title-box">
                                                                        <div class="restaurent-product-box">
                                                                            <div class="restaurent-product-title">
                                                                                <h6 class="mb-2" data-toggle="modal" data-target="#restaurent-popup">
                                                                                    <div class="text-light-black fw-600"><?php echo $food['name'] ?></div>
                                                                                </h6>
                                                                                <p class="text-light-white"><?php echo "T???ng s??? l???n ?????t: " . $food['display_total_order'] ?></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="restaurent-product-rating">
                                                                            <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                                <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                                <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                                <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                                <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                                            </div>
                                                                            <div class="rating-text">
                                                                                <p class="text-light-white fs-12 title"><?php echo $food['total_like'] . " l?????t th??ch" ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="restaurent-tags-price">
                                                                        <div class="restaurent-tags">
                                                                            <span class="text-custom-white square-tag">
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
                                                                        </div>
                                                                        <!-- <span class="circle-tag">
                                                                            <img src="assets/img/svg/010-heart.svg" alt="tag">
                                                                        </span> -->
                                                                        <div class="restaurent-product-price">
                                                                            <h6 class="text-success fw-600 no-margin"><?php echo $food['price_text'] ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="restaurent-product-right d-flex justify-content-center align-items-center">
                                                                    <button type="button" id="plus" onclick='insert_order(<?php echo json_encode($food) ?>); return false'>
                                                                        <span class="text-custom-white square-tag">
                                                                            <img src="assets/img/plus-svgrepo-com.svg" alt="tag">
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </form>
            </div>
            <div class="col-xl-3 col-lg-3">
                <div class="sidebar">
                    <div class="cart-detail-box">
                        <div class="card">
                            <div class="card-header padding-15 fw-700">Your Order</div>
                            <div class="card-body no-padding" id="scrollstyle-4">


                            </div>
                            <div class="card-footer padding-15" id="proceed-checkout"> <a href="checkout" class="btn-first green-btn text-custom-white full-width fw-500">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function createElement(x) {
        let order = x['food']
        let div1 = document.createElement("div") // <div> </div>
        div1.className = "cat-product-box"
        let price = x['quantity'] * parseInt(order['price_text'].replace(',', ''));
        let price_result = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND'
        }).format(price)
        // console.log();
        div1.innerHTML = `
                        <div class="cat-product">
                            <div class="cat-name">
                                <a href="#">
                                    <p class="text-light-green fw-700" id="dat">${order['name']}</p> <span class="text-light-white fw-700">S??? l?????ng: ${x['quantity']};</span>
                                </a>
                            </div>
                            <div class="price"> <a href="#" class="text-light-green fw-500">
                            ${price_result}
                                </a>
                            </div>
                            
                            <div class="delete-btn" onclick='delete_item(${order['id']})'>
                                <div class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                </div>
                            </div>
                        </div>
                        `
        return div1;
    }

    function show(result) {
        let btn = document.getElementById('proceed-checkout')
        if (result.length === 0) {
            btn.className = 'd-none'
        } else {
            btn.className = 'd-block'
        }
            let root = document.getElementById("scrollstyle-4");
            root.innerHTML = ''
            let total_generate = 0
            result.reverse().map((x) => {
                root.appendChild(createElement(x))
            })
            result.forEach(element => {
                let price = element['quantity'] * parseInt(element['food']['price_text'].replace(',', ''));
                total_generate += price
            });
            let price_result = new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(total_generate)
            let total = document.createElement('div')
            total.className = 'item-total'
            total.innerHTML = `
            <div class="item-total">
                <div class="total-price border-0 pb-0"> <span class="text-dark-white fw-700">T???ng ti???n:</span>
                    <span class="text-dark-white fw-700">${price_result}</span>
                </div>
            </div>`
            root.appendChild(total)
    }

    function delete_item(id) {
        let cookie = document.cookie;
        let splitD = cookie.split(';')
        let res1 = splitD.find(row => row.trim().startsWith('id=')).split('=')[1]
        let result = JSON.parse(res1)
        let filterIndex = result.findIndex(x => x['food'].id == id)
        let final = result.splice(filterIndex, 1)
        document.cookie = "id=" + JSON.stringify(result)
        show(result)
    }

    function insert_order(id) {
        let cookie = document.cookie;
        let splitD = cookie.split(';')
        let res1 = splitD.find(row => row.trim().startsWith('id='))
        if (res1) {
            let res = res1.split('=')[1]
            let result = JSON.parse(res)
            let filter = result.filter(x => x['food'].id === id['id'])
            if (filter.length === 0) {
                let order = {
                    quantity: 1,
                    food: id
                }
                result.push(order)
                document.cookie = "id=" + JSON.stringify(result)
                show(result)

            } else {
                let filterIndex = result.findIndex(x => x['food'].id === id['id'])
                let order = {
                    quantity: filter[0]['quantity'] + 1,
                    food: id
                }
                result[filterIndex] = order
                document.cookie = "id=" + JSON.stringify(result)
                show(result)
            }
        } else {
            document.cookie = "id=" + JSON.stringify([{
                quantity: 1,
                food: id
            }])
            show([{
                quantity: 1,
                food: id
            }])

        }

    }

    function fetch() {
        let cookie = document.cookie;
        let splitD = cookie.split(';')
        let res1 = splitD.find(row => row.trim().startsWith('id='))
        let btn = document.getElementById('proceed-checkout')
        if (res1) {
            btn.className = 'd-block'
            let res = res1.split('=')[1]
            let result = JSON.parse(res)
            show(result)
        } else {
            btn.className='d-none'
            // show([])
        }
    }
    fetch()
</script>
<!-- restaurent meals -->
<!-- restaurent about -->
<section class="section-padding restaurent-about smoothscroll" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-light-black fw-700 title">Great Burger Menu Info</h3>
                <p class="text-light-green no-margin">American, Breakfast, Coffee and Tea, Fast Food, Hamburgers</p>
                <p class="text-light-white no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> <span class="text-success fs-16">$</span>
                <span class="text-success fs-16">$</span>
                <span class="text-success fs-16">$</span>
                <span class="text-dark-white fs-16">$</span>
                <span class="text-dark-white fs-16">$</span>
                <ul class="about-restaurent">
                    <li> <i class="fas fa-map-marker-alt"></i>
                        <span>
                            <a href="#" class="text-light-white">
                                314 79th St<br>
                                Rite Aid, Brooklyn, NY, 11209
                            </a>
                        </span>
                    </li>
                    <li> <i class="fas fa-phone-alt"></i>
                        <span><a href="tel:" class="text-light-white">(347) 123456789</a></span>
                    </li>
                    <li> <i class="far fa-envelope"></i>
                        <span><a href="mailto:" class="text-light-white">demo@domain.com</a></span>
                    </li>
                </ul>
                <ul class="social-media pt-2">
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
            <div class="col-md-6">
                <div class="restaurent-schdule">
                    <div class="card">
                        <div class="card-header text-light-white fw-700 fs-16">Hours</div>
                        <div class="card-body">
                            <div class="schedule-box">
                                <div class="day text-light-black">Monday</div>
                                <div class="time text-light-black">Delivery: 7:00am - 10:59pm</div>
                            </div>
                            <div class="collapse" id="schdule">
                                <div class="schedule-box">
                                    <div class="day text-light-black">Tuesday</div>
                                    <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                                </div>
                                <div class="schedule-box">
                                    <div class="day text-light-black">Wednesday</div>
                                    <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                                </div>
                                <div class="schedule-box">
                                    <div class="day text-light-black">Thursday</div>
                                    <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                                </div>
                                <div class="schedule-box">
                                    <div class="day text-light-black">Friday</div>
                                    <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                                </div>
                                <div class="schedule-box">
                                    <div class="day text-light-black">Saturday</div>
                                    <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                                </div>
                                <div class="schedule-box">
                                    <div class="day text-light-black">Sunday</div>
                                    <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer"> <a class="fw-500 collapsed" data-toggle="collapse" href="#schdule">See the full schedule</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- restaurent about -->

<!-- offer near -->
<section class="fresh-deals section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title title">Offers near you</h3>
                </div>
            </div>
            <div class="col-12">
                <div class="fresh-deals-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="assets/img/restaurants/255x150/shop-10.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Great Burger</a></h6>
                                    </div>
                                    <p class="text-light-white">American, Fast Food</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating"> <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-footer-2">
                                    <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                    </div>
                                    <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="assets/img/restaurants/255x150/shop-11.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Flavor Town</a></h6>
                                    </div>
                                    <p class="text-light-white">Breakfast, Lunch & Dinner</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating"> <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-footer-2">
                                    <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                    </div>
                                    <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="assets/img/restaurants/255x150/shop-22.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Big Bites</a></h6>
                                    </div>
                                    <p class="text-light-white">Pizzas, Fast Food</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating"> <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-footer-2">
                                    <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                    </div>
                                    <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="assets/img/restaurants/255x150/shop-23.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Smile N??? Delight</a></h6>
                                    </div>
                                    <p class="text-light-white">Desserts, Beverages</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating"> <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-footer-2">
                                    <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                    </div>
                                    <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="assets/img/restaurants/255x150/shop-24.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Lil Johnny???s</a></h6>
                                    </div>
                                    <p class="text-light-white">Continental & Mexican</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating"> <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-footer-2">
                                    <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                    </div>
                                    <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- offer near -->