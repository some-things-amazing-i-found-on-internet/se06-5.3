<!-- restaurent meals -->
<section class="section-padding restaurent-meals bg-light-theme">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="advertisement-slider swiper-container h-auto mb-xl-20 mb-md-40">
                    <div class="swiper-wrapper-dcmm">

                        <div class="swiper-slide">
                            <div class="testimonial-wrapper">
                                <div class="testimonial-box">

                                    <div class="testimonial-caption padding-15">
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="assets/img/user/user-2.png" class="img-fluid" alt="logo">
                                            <h5 class="fw-600 ml-3"><a href="profile" class="text-light-black mt-3"><?php echo $user['fname'] . " " . $user['lname'] ?></a></h5>
                                        </div>
                                        <div>
                                            <p class="text-light-black"><strong>Address</strong>: <?php echo $user['address'] . "<br>" . $user['road']; ?></p>
                                            <!-- <p class="text-light-white fw-100"><strong class="text-light-black fw-700">Local delivery: </strong> From $7.99 (4.0 mi)</p> -->
                                            <p class="text-light-black"><strong>Phone</strong>: <?php echo $user['phone']; ?></p>
                                        </div>
                                        <div>
                                            <a href="profile" class="btn-second">Cập nhật tài khoản ></a>
                                            <a href="history" class="btn-second">Lịch sử đơn hàng ></a>
                                            <a href="payment" class="btn-second">Phương thức thanh toán ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-6">
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
                                            <div class="card">
                                                <div class="card-header"> <a class="collapsed card-link fw-500 fs-14" data-toggle="collapse" href="#newwallet">
                                                        Add New Wallet
                                                    </a>
                                                </div>
                                                <div id="newwallet" class="collapse" data-parent="#accordion">
                                                    <div class="card-body no-padding payment-option-tab">
                                                        <form method="POST">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="text-light-white fw-700">Wallet Number</label>
                                                                        <div class="credit-card amex-card-front p-relative">
                                                                            <input type="text" name="newwalletnumber" class="form-control form-control-submit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="custom-checkbox">
                                                                            <input type="checkbox" name="newwalletdefault"> <span class="checkmark"></span>
                                                                            Make it default</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-xl-6 col-lg-6 col-md-4 col-sm-6">
                                                                    <button type="submit" class="btn-first green-btn text-custom-white full-width fw-500">Add new Wallet</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

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
                                            <div class="card">
                                                <div class="card-header"> <a class="collapsed card-link fw-500 fs-14" data-toggle="collapse" href="#newcard">
                                                        Add New Card
                                                    </a>
                                                </div>
                                                <div id="newcard" class="collapse" data-parent="#accordion">
                                                    <div class="card-body no-padding payment-option-tab">
                                                        <form method="POST">
                                                            <div class="row">
                                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="text-light-white fw-700">Card Number</label>
                                                                        <div class="credit-card amex-card-front p-relative">
                                                                            <input type="text" name="newcardnumber" class="form-control form-control-submit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2 col-lg-6 col-md-2 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="text-light-white fw-700">Expires on</label>
                                                                        <input type="text" name="newcardvaild" class="form-control form-control-submit">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3 col-lg-6 col-md-3 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="text-light-white fw-700">Security Code</label>
                                                                        <div class="credit-card amex-card-back p-relative">
                                                                            <input type="text" name="newcardcvc" class="form-control form-control-submit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3 col-lg-6 col-md-3 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="text-light-white fw-700">ZIP Code</label>
                                                                        <input type="text" name="newcardzip" class="form-control form-control-submit">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="custom-checkbox">
                                                                            <input type="checkbox" name="newcarddefault"> <span class="checkmark"></span>
                                                                            Make this default</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn-first green-btn text-custom-white full-width fw-500">Add new card</button>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>
                                            </div>

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
                                        <div class="tab-pane fade" id="cash">
                                            <p class="text-light-black">Have the cash ready when you receive your order.</p>
                                            <div class="section-header-left">
                                                <h3 class="text-light-black header-title">Donate the change</h3>
                                            </div>
                                            <div class="form-group">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="#"> <span class="checkmark"></span>
                                                    Apologies, but you can't donate with the selected payment type</label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn-first green-btn text-custom-white full-width fw-500">Place Your Order</button>
                                            </div>
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
                                            <div class="card">
                                                <div class="card-header"> <a class="collapsed card-link fw-500 fs-14" data-toggle="collapse" href="#newatm">
                                                        Add New ATM
                                                    </a>
                                                </div>
                                                <div id="newatm" class="collapse" data-parent="#accordion">
                                                    <div class="card-body no-padding payment-option-tab">
                                                        <form method="POST">
                                                            <div class="row">
                                                                <div class="col-xl-4 col-lg-6 col-md-2 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="text-light-white fw-700">Bank</label>
                                                                        <input type="text" name="newatmbank" class="form-control form-control-submit">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-8 col-lg-6 col-md-4 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="text-light-white fw-700">Số thẻ hoặc số tài khoản</label>
                                                                        <div class="credit-card amex-card-front p-relative">
                                                                            <input type="text" name="newatmnumber" class="form-control form-control-submit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="custom-checkbox">
                                                                            <input type="checkbox" name="newatmdefault"> <span class="checkmark"></span>
                                                                            Make it default</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-12">
                                                                    <button type="submit" class="btn-first green-btn text-custom-white full-width fw-500">Add new ATM</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>