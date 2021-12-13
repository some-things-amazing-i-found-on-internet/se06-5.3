<section class="checkout-page section-padding bg-light-theme">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tracking-sec">
                    <div class="tracking-details padding-20 p-relative">
                        <h5 class="text-light-black fw-600"><?php echo $restaurant[0]['name'] ?></h5>
                        <h5 class="text-light-black fw-600"><?php echo $restaurant[0]['address'] ?></h5>
                        <span class="text-light-white fw-600"><?php echo "Thời gian bán hàng: " . $restaurant[0]['open_time'] . " - " . $restaurant[0]['close_time'] ."<br>" ?></span>
                        <span class="text-light-white">Ước lượng thời gian giao hàng:</span>
                        <?php if($post_order[0]['status'] == '2') { ?>
                            <h2 class="text-light-green fw-700 no-margin">Đơn hàng đã bị hủy</h2>
                        <?php } else {?>
                        <h2 class="text-light-black fw-700 no-margin">19 phút</h2>
                        <?php } ?>
                        <!-- <div id="add-listing-tab" class="step-app">
                            <ul class="step-steps">
                                <li class="done">
                                    <a href="javascript:void(0)"> <span class="number"></span>
                                        <span class="step-name">Order sent<br>8:38pm</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:void(0)"> <span class="number"></span>
                                        <span class="step-name">In the works</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <span class="number"></span>
                                        <span class="step-name">Out of delivery</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <span class="number"></span>
                                        <span class="step-name">Delivered</span>
                                    </a>
                                </li>
                            </ul>
                            <button type="button" class="fullpageview text-light-black fw-600" data-modal="modal-12">Full Page View</button>
                        </div> -->
                    </div>
                    <div class="tracking-map">
                        <div id="pickupmap"></div>
                    </div>
                </div>
                <!-- recipt -->
                <div class="recipt-sec padding-20">
                    <!-- <div class="recipt-name title u-line full-width mb-xl-20">
                        <div class="recipt-name-box">
                            <h5 class="text-light-black fw-600 mb-2">Great Burger</h5>
                            <p class="text-light-white ">Estimated Delivery time</p>
                        </div>
                        <div class="countdown-box">
                            <div class="time-box"> <span id="mb-hours"></span>
                            </div>
                            <div class="time-box"> <span id="mb-minutes"></span>
                            </div>
                            <div class="time-box"> <span id="mb-seconds"></span>
                            </div>
                        </div>
                    </div> -->
                    <div class="u-line mb-xl-20">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="recipt-name full-width padding-tb-10 pt-0">
                                    <h5 class="text-light-black fw-600">Thông tin khách hàng:</h5>
                                    <span class="text-light-white "><?php echo "Tên: " . $user[0]['fname'] . " " . $user[0]['lname'] ?></span>
                                    <span class="text-light-white "><?php echo "Đường: " . $user[0]['road'] ?></span>
                                    <span class="text-light-white "><?php echo "Địa chỉ: " . $user[0]['address'] ?></span>
                                    <p class="text-light-white "><?php echo "SĐT: " . $user[0]['phone'] ?></p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="recipt-name full-width padding-tb-10 pt-0">
                                    <h5 class="text-light-black fw-600">Miêu tả đơn hàng:</h5>
                                    <p class="text-light-white "><?php echo $post_order[0]['description_order']; ?></p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ad-banner padding-tb-10 h-100">
                                    <img src="assets/img/details/banner.jpg" class="img-fluid full-width" alt="banner-adv">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-line mb-xl-20">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="text-light-black fw-600 title">Đơn hàng của bạn<span><a href="#" class="fs-12">Print recipt</a></span></h5>
                                <p class="title text-light-white"><?php echo "Thời gian đặt: " . $post_order[0]['time_order'] ?><span class="text-light-black"><?php echo "Id đơn hàng: " . $post_order[0]['id'] ?></span>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <?php foreach ($orders as $order) { ?>
                                    <div class="checkout-product">
                                        <div class="img-name-value">
                                            <div class="product-img">
                                                <img style="width: 130px; height: 130px;" src=<?php echo $order['photos'] ?> class="img-fluid" alt="#">
                                            </div>
                                            <div class="product-value"> <span class="text-light-white"><?php echo "Số lượng: " . $order['quantity_order'] ?></span>
                                            </div>
                                            <div class="product-name"> <span><a href="#" class="text-light-black"><?php echo $order['name'] ?></a></span>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="text-light-white"><?php echo "Đơn giá: " . $order['price_value'] / 1000 . ".000đ" ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="payment-method mb-md-40">
                                <h5 class="text-light-black fw-600">Phương thức thanh toán:</h5>
                                <div class="method-type"> <i class="far fa-credit-card text-dark-white"></i>
                                    <span class="text-light-white">Credit Card</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="price-table u-line">
                                <div class="item"> <span class="text-light-white">Tổng tiền đồ đặt:</span>
                                    <span class="text-light-white"><?php echo $total/1000 . ".000đ" ?></span>
                                </div>
                                <div class="item"> <span class="text-light-white">Phí vận chuyển:</span>
                                    <span class="text-light-white"><?php echo $orders[0]['delivery_fee']/1000 . ".000đ" ?></span>
                                </div>
                            </div>
                            <div class="total-price padding-tb-10">
                                <h5 class="title text-light-black fw-700">Tổng cộng: <span><?php echo $post_order[0]['total']/1000 . ".000đ" ?></span></h5>
                            </div>
                        </div>
                        <?php if($post_order[0]['status'] != '2') { ?>
                        <div class="col-12 d-flex"> <a href="order-details&status=2" class="btn-first white-btn fw-600 help-btn">Hủy đơn hàng</a>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>