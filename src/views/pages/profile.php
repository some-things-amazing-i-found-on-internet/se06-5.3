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
                <div class="">
                    <div class="cart-detail-box">
                        <div class="card">
                            <div class="card-header padding-15 fw-700">Thông tin cá nhân</div>
                            <div class="card-body no-padding" id="scrollstyle-4">
                                <div class="d-flex mt-4">
                                    <div class=" padding-15 fw-500"> Ảnh đại diện </div>
                                    <img src="assets/img/user/user-2.png" class="img-fluid" alt="logo">
                                </div>
                                <form action="profile" method="POST">
                                    <div class=" padding-15 fw-500"> Thay đổi thông tin </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <label class="col-4 font-weight-bold " for="exampleInputEmail1">Email address</label>
                                        <input value="<?php echo $user['email'] ?>" disabled type="text" class="form-control col-6" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-1"></div>
                                        <label class="col-4 font-weight-bold" for="exampleInputPassword1">Họ</label>
                                        <input required value="<?php echo $user['lname'] ?>" name="lname" type="text" class="form-control col-6" id="lname_feild">
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-1"></div>
                                        <label class="col-4 font-weight-bold" for="exampleInputPassword1">Tên</label>
                                        <input required value="<?php echo $user['fname'] ?>" name="fname" type="text" class="form-control col-6" id="fname_feild">
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-1"></div>
                                        <label class="col-4 font-weight-bold" for="exampleInputPassword1">Địa chỉ</label>
                                        <input required value="<?php echo $user['address'] ?>" name="address" type="text" class="form-control col-6" id="address_feild">
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-1"></div>
                                        <label class="col-4 font-weight-bold" for="exampleInputPassword1">Đường</label>
                                        <input required value="<?php echo $user['road'] ?>" name="road" type="text" class="form-control col-6" id="road_feild">
                                    </div>
                                    <div class=" padding-15 fw-500"> Cập nhật số điện thoại </div>
                                    <div class="row mt-3">
                                        <div class="col-1"></div>
                                        <label class="col-4 font-weight-bold" for="exampleInputPassword1">Số điện thoại</label>
                                        <input required value="<?php echo $user['phone'] ?>" name="phone" type="text" class="form-control col-6" id="phone_feild">
                                    </div>
                                    <div class=" padding-15 fw-500"> </div>
                                    <div class="padding-15" id="proceed-checkout">
                                        <button class="btn-first green-btn text-custom-white full-width fw-500">Update</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="payment-sec">

                    <div class="section-header-left">
                        <h3 class="text-light-black header-title">Payment information</h3>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header"> <a class="collapsed card-link fw-500 fs-14" data-toggle="collapse" href="#collapseOne">
                                            Pay with a Gift Card
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                                        <div class="card-body no-padding payment-option-tab">
                                            <div class="form-group">
                                                <div class="credit-card gift-card p-relative">
                                                    <input type="text" name="#" class="form-control-submit fs-16" value="AC2B76">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header"> <a class="collapsed card-link fw-500 fs-14" data-toggle="collapse" href="#collapseTwo">
                                            Add a promo code
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body no-padding payment-option-tab">
                                            <div class="form-group">
                                                <div class="credit-card promocode p-relative input-group">
                                                    <input type="text" name="#" class="form-control-submit fs-16" placeholder="AC2B76">
                                                    <button type="submit" class="btn-second btn-submit ml-1">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-option-tab">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"> <a class="nav-link fw-600 active" data-toggle="tab" href="#savecreditcard">Saved credit card</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#newcreditcard">New credit card</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#cash">Cash</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#paypal">PayPal<sup>TM</sup></a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#amexcheckout">Amex Express Checkout</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="savecreditcard">
                                            <div class="form-group">
                                                <div class="credit-card p-relative">

                                                </div>
                                            </div>
                                            <div class="section-header-left">
                                                <h3 class="text-light-black header-title">Add a tip for your driver</h3>
                                            </div>
                                            <div class="driver-tip-sec mb-xl-20">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item"> <a class="nav-link fw-600 active" data-toggle="tab" href="#savetipcard">Tip with Credit Card</a>
                                                    </li>
                                                    <li class="nav-item"> <a class="nav-link fw-600 disabled" data-toggle="tab" href="#cashtip">Tip with Cash</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="savetipcard">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="tip-percentage">
                                                                    <form>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage" checked> <span>15%</span>
                                                                        </label>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage"> <span>25%</span>
                                                                        </label>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage"> <span>25%</span>
                                                                        </label>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage"> <span>30%</span>
                                                                        </label>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-tip">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend"> <span class="input-group-text text-light-green fw-500">Custom tip</span>
                                                                        </div>
                                                                        <input type="text" class="form-control form-control-submit" placeholder="Custom tip">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="section-header-left">
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
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="newcreditcard">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="text-light-white fw-700">Card Number</label>
                                                        <div class="credit-card card-front p-relative">
                                                            <input type="text" name="#" class="form-control form-control-submit" placeholder="1234 5678 9101 1234">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="text-light-white fw-700">Expires on</label>
                                                        <input type="text" name="#" class="form-control form-control-submit" placeholder="12/21">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="text-light-white fw-700">Security Code</label>
                                                        <div class="credit-card card-back p-relative">
                                                            <input type="text" name="#" class="form-control form-control-submit" placeholder="123">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="text-light-white fw-700">ZIP Code</label>
                                                        <input type="text" name="#" class="form-control form-control-submit" placeholder="123456">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="custom-checkbox">
                                                            <input type="checkbox" name="#"> <span class="checkmark"></span>
                                                            Save Credit card</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="section-header-left">
                                                <h3 class="text-light-black header-title">Add a tip for your driver</h3>
                                            </div>
                                            <div class="driver-tip-sec mb-xl-20">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item"> <a class="nav-link fw-600 active" data-toggle="tab" href="#tipnewcard">Tip with Credit Card</a>
                                                    </li>
                                                    <li class="nav-item"> <a class="nav-link fw-600 disabled" data-toggle="tab" href="#newcashtip">Tip with Cash</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tipnewcard">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="tip-percentage">
                                                                    <form>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage" checked> <span>15%</span>
                                                                        </label>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage"> <span>25%</span>
                                                                        </label>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage"> <span>25%</span>
                                                                        </label>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage"> <span>30%</span>
                                                                        </label>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-tip">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend"> <span class="input-group-text text-light-green fw-500">Custom tip</span>
                                                                        </div>
                                                                        <input type="text" class="form-control form-control-submit" placeholder="Custom tip">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="section-header-left">
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
                                            </p>
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
                                            <div class="section-header-left">
                                                <h3 class="text-light-black header-title">Add a tip for your driver</h3>
                                            </div>
                                            <div class="driver-tip-sec mb-xl-20">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item"> <a class="nav-link fw-600 active" data-toggle="tab" href="#paypaltipcard">Tip with Credit Card</a>
                                                    </li>
                                                    <li class="nav-item"> <a class="nav-link fw-600 disabled" data-toggle="tab" href="#paypalcashtip">Tip with Cash</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="paypaltipcard">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="tip-percentage">
                                                                    <form>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage" checked> <span>15%</span>
                                                                        </label>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage"> <span>25%</span>
                                                                        </label>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage"> <span>25%</span>
                                                                        </label>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage"> <span>30%</span>
                                                                        </label>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-tip">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend"> <span class="input-group-text text-light-green fw-500">Custom tip</span>
                                                                        </div>
                                                                        <input type="text" class="form-control form-control-submit" placeholder="Custom tip">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="section-header-left">
                                                <h3 class="text-light-black header-title">Donate the change</h3>
                                            </div>
                                            <div class="form-group">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="#"> <span class="checkmark"></span>
                                                    Donate $0.77 to No kid Hungry. By checking this box you agree to the Donate the Change <a href="#">Terms of use</a> <span class="ml-2"><a href="#">Learn More</a></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn-first paypal-btn text-custom-white full-width fw-500">Checkout with
                                                    <img src="assets/img/pay-pal.png" alt="image">
                                                </button>
                                            </div>
                                            <p class="text-center text-light-black no-margin">By placing your order, you agree to Quickmunch's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="amexcheckout">
                                            <div class="card">
                                                <div class="card-header"> <a class="card-link fw-500 fs-14" data-toggle="collapse" href="#saveamex">
                                                        Saved Card
                                                    </a>
                                                </div>
                                                <div id="saveamex" class="collapse show" data-parent="#accordion">
                                                    <div class="card-body no-padding payment-option-tab">
                                                        <div class="form-group">
                                                            <div class="credit-card amex-card-front p-relative">
                                                                <input type="text" name="#" class="form-control form-control-submit" value="VISA....1877,exp 12/21">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header"> <a class="collapsed card-link fw-500 fs-14" data-toggle="collapse" href="#newcardamex">
                                                        Add New Card
                                                    </a>
                                                </div>
                                                <div id="newcardamex" class="collapse" data-parent="#accordion">
                                                    <div class="card-body no-padding payment-option-tab">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="text-light-white fw-700">Card Number</label>
                                                                    <div class="credit-card amex-card-front p-relative">
                                                                        <input type="text" name="#" class="form-control form-control-submit" placeholder="1234 5678 9101 1234">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-6 col-md-2 col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="text-light-white fw-700">Expires on</label>
                                                                    <input type="text" name="#" class="form-control form-control-submit" placeholder="12/21">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-3 col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="text-light-white fw-700">Security Code</label>
                                                                    <div class="credit-card amex-card-back p-relative">
                                                                        <input type="text" name="#" class="form-control form-control-submit" placeholder="123">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-3 col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="text-light-white fw-700">ZIP Code</label>
                                                                    <input type="text" name="#" class="form-control form-control-submit" placeholder="123456">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="custom-checkbox">
                                                                        <input type="checkbox" name="#"> <span class="checkmark"></span>
                                                                        Save Credit card</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="section-header-left">
                                                <h3 class="text-light-black header-title">Add a tip for your driver</h3>
                                            </div>
                                            <div class="driver-tip-sec mb-xl-20">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item"> <a class="nav-link fw-600 active" data-toggle="tab" href="#tipcard">Tip with Credit Card</a>
                                                    </li>
                                                    <li class="nav-item"> <a class="nav-link fw-600 disabled" data-toggle="tab" href="#cashtip">Tip with Cash</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tipcard">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="tip-percentage">
                                                                    <form>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage" checked> <span>15%</span>
                                                                        </label>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage"> <span>25%</span>
                                                                        </label>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage"> <span>25%</span>
                                                                        </label>
                                                                        <label class="radio-inline text-light-green fw-600">
                                                                            <input type="radio" name="tip-percentage"> <span>30%</span>
                                                                        </label>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-tip">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend"> <span class="input-group-text text-light-green fw-500">Custom tip</span>
                                                                        </div>
                                                                        <input type="text" class="form-control form-control-submit" placeholder="Custom tip">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="section-header-left">
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
                                            </p>
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