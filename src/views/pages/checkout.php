<section class="final-order section-padding bg-light-theme">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="main-box padding-20">
                    <div class="row mb-xl-20">
                        <div class="col-md-6">
                            <div class="section-header-left">
                                <h3 class="text-light-black header-title fw-700">Thông tin người nhận hàng:</h3>
                            </div>
                            <h6 class="text-light-black fw-700 fs-14">Kiểm tra thông tin các nhân, địa chỉ, phương thức thanh toán để hoàn thành đặt đơn.</h6>
                            <h6 class="text-light-black fw-700 mb-2">Thông tin cá nhân:</h6>
                            <p class="text-light-black fw-600 mb-1">Họ và tên:</p>
                            <p class="text-light-white title2 mb-1"><?php echo $user_id['fname'] . " " . $user_id['lname'] ?> <span><a href="#">Change Details</a></span>
                            </p>
                            <p class="text-light-black fw-600 mb-1">Địa chỉ:</p>
                            <p class="text-light-white mb-1"><?php echo $user_id['address'] ?>
                                <br><?php echo $user_id['road'] ?>
                            </p>
                            <p class="text-light-black fw-600 mb-1">Số ĐT:</p>
                            <p class="text-light-white"><?php echo $user_id['phone'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <div class="advertisement-img">
                                <img src="assets/img/checkout.jpg" class="img-fluid full-width" alt="advertisement-img">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="payment-sec">
                                <div class="section-header-left">
                                    <h3 class="text-light-black header-title">Mô tả thêm:</h3>
                                </div>
                                <div class="form-group">
                                    <input name="order_description" class="form-control form-control-submit" rows="4" id="order_description" placeholder="Delivery Details"></input>
                                </div>
                                <div class="row">

                                    <div class="col-12">
                                        <div class="payment-sec">

                                            <div class="section-header-left">
                                                <h3 class="text-light-black header-title">Thông tin thanh toán</h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div id="accordion">
                                                        <div class="payment-option-tab">
                                                            <ul class="nav nav-tabs">
                                                                <li class="nav-item"> <a class="nav-link fw-600 active" data-toggle="tab" href="#shopee">Ví ShopeePay</a>
                                                                </li>
                                                                <li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#creditcard">Thẻ</a>
                                                                </li>
                                                                <li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#cash">Tiền mặt</a>
                                                                </li>
                                                                <li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#paypal">PayPal<sup>TM</sup></a>
                                                                </li>
                                                                <li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#bank">ATM/Banking</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="shopee">
                                                                    <div class="card">
                                                                        <div class="card-header"> <a class="card-link fw-500 fs-14" data-toggle="collapse" href="#saveamex">
                                                                                Saved Wallet
                                                                            </a>
                                                                        </div>
                                                                        <div id="saveamex" class="collapse show" data-parent="#accordion">
                                                                            <div class="card-body no-padding payment-option-tab">
                                                                                <?php foreach ($credit as $wallet) {
                                                                                    if ($wallet['method'] == 1) {
                                                                                ?>
                                                                                        <div class="form-group">
                                                                                            <div class="credit-card amex-card-front p-relative ">
                                                                                                <input type="text" name="#" class="form-control form-control-submit" value="  <?php echo $wallet['number']; ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                <?php
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="creditcard">
                                                                    <div class="card">
                                                                        <div class="card-header"> <a class="card-link fw-500 fs-14" data-toggle="collapse" href="#savecard">
                                                                                Saved Card
                                                                            </a>
                                                                        </div>
                                                                        <div id="savecard" class="collapse show" data-parent="#accordion">
                                                                            <div class="card-body no-padding payment-option-tab">
                                                                                <?php foreach ($credit as $card) {
                                                                                    if ($card['method'] == 3) {
                                                                                ?>
                                                                                        <div class="form-group">
                                                                                            <div class="credit-card amex-card-front p-relative ">
                                                                                                <input type="text" name="#" class="form-control form-control-submit" value="<?php echo $card['type'] . "\t"; ?>  <?php echo $card['number'] . "\t"; ?> exp <?php echo $card['vaild']; ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                <?php
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="cash">

                                                                    <p class="text-center text-light-black no-margin">By placing your order, you agree to Quickmunch's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
                                                                    </p>
                                                                </div>
                                                                <div class="tab-pane fade" id="paypal">
                                                                    <p class="text-light-black">Please review your order and make any necessary changes before checking out with PayPal.</p>

                                                                    <!-- <div class="section-header-left">
                                                <h3 class="text-light-black header-title">Donate the change</h3>
                                            </div>
                                            <div class="form-group">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="#"> <span class="checkmark"></span>
                                                    Donate $0.77 to No kid Hungry. By checking this box you agree to the Donate the Change <a href="#">Terms of use</a> <span class="ml-2"><a href="#">Learn More</a></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn-first green-btn text-custom-white full-width fw-500">Place Your Order</button>
                                            </div>
                                            <p class="text-center text-light-black no-margin">By placing your order, you agree to Quickmunch's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
                                            </p> -->
                                                                </div>
                                                                <div class="tab-pane fade" id="bank">
                                                                    <div class="card">
                                                                        <div class="card-header"> <a class="card-link fw-500 fs-14" data-toggle="collapse" href="#saveatm">
                                                                                Saved ATM
                                                                            </a>
                                                                        </div>
                                                                        <div id="saveatm" class="collapse show" data-parent="#accordion">
                                                                            <div class="card-body no-padding payment-option-tab">
                                                                                <?php foreach ($credit as $atm) {
                                                                                    if ($atm['method'] == 5) {
                                                                                ?>
                                                                                        <div class="form-group">
                                                                                            <div class="credit-card amex-card-front p-relative ">
                                                                                                <input type="text" name="#" class="form-control form-control-submit" value="  <?php echo $atm['type'] . "\t"; ?> <?php echo $atm['number']; ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                <?php
                                                                                    }
                                                                                }
                                                                                ?>
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
                                    <div class="col-12">
                                        <div id="accordion">
                                            <button onclick="checkoutPage()" href="order-details" class="btn-first green-btn text-custom-white full-width fw-500"> Đặt đơn</button>
                                        </div>
                                    </div>
                                    <script>
                                        const checkoutPage = () => {
                                            const value = document.getElementById('order_description').value
                                            window.location.href = "/se06-5.3/order-details&description=" + value;
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="cart-detail-box">
                        <div class="card">
                            <div class="card-header padding-15 fw-700">Đơn hàng của bạn:
                                <!-- <p class="text-light-white no-margin fw-500">Jhon Deo</p> -->
                            </div>
                            <div class="card-body no-padding" id="scrollstyle-4">
                                <div class="cat-product-box">
                                    <?php
                                    $i = 1;
                                    foreach ($orders as $order) {
                                    ?>
                                        <div class="cat-product">
                                            <div class="cat-name">
                                                <a href="#">
                                                    <p class="text-light-green fw-700"><span class="text-dark-white"><?php echo $i ?></span><?php echo $order['name'] ?></p> <span class="text-light-white fw-700"><?php echo "Số lượng: " . $order['quantity_order'] ?></span>
                                                </a>
                                            </div>
                                            <!-- <div class="delete-btn">
                                            <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div> -->
                                            <div class="price"> <a href="#" class="text-dark-white fw-500">
                                                    <?php echo $order['price_value'] / 1000 . ".000đ" ?>
                                                </a>
                                            </div>
                                        </div>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </div>
                                <div class="item-total">
                                    <div class="total-price border-0 pb-0"> <span class="text-dark-white fw-600">Tổng tiền đồ đặt:</span>
                                        <span class="text-dark-white fw-600"><?php echo $total / 1000 . ".000đ" ?></span>
                                    </div>
                                    <div class="total-price border-0 pt-0 pb-0"> <span class="text-light-green fw-600">Phí vận chuyển:</span>
                                        <span class="text-light-green fw-600"><?php echo $orders[0]['delivery_fee']/1000 . ".000đ" ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 modify-order">
                                <!-- <button class="text-custom-white full-width fw-500 bg-light-green"><i class="fas fa-chevron-left mr-2"></i> Modify Your Order</button> -->
                                <a href="#" class="total-amount"> <span class="text-custom-white fw-700">Tổng cộng</span>
                                    <span class="text-custom-white fw-700"><?php echo $total/1000 + $orders[0]['delivery_fee']/1000 . ".000đ" ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>