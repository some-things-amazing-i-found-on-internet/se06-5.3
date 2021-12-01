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
                                <form method="POST">
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
    </div>
</section>