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
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Mã đơn hàng</th>
                                <th scope="col">Ngày giờ</th>
                                <th scope="col">Quán</th>
                                <th scope="col">Món ăn</th>
                                <th scope="col">Thành tiền</th>
                                <th scope="col">Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">11348132121</th>
                                <td>10-02-2020</td>
                                <td>Trà sữa</td>
                                <td>Bánh kem</td>
                                <td>20,000đ</td>
                                <td>Đang giao</td>
                            </tr>
                            <tr>
                                <th scope="row">11348132121</th>
                                <td>10-02-2020</td>
                                <td>Trà sữa</td>
                                <td>Bánh kem</td>
                                <td>20,000đ</td>
                                <td>Đã giao</td>
                            </tr>
                            <tr>
                                <th scope="row">11348132121</th>
                                <td>10-02-2020</td>
                                <td>Trà sữa</td>
                                <td>Bánh kem</td>
                                <td>20,000đ</td>
                                <td>Chờ thanh toán</td>
                            </tr>
                            <tr>
                                <th scope="row">11348132121</th>
                                <td>10-02-2020</td>
                                <td>Trà sữa</td>
                                <td>Bánh kem</td>
                                <td>20,000đ</td>
                                <td>Đã hủy</td>
                            </tr>
                            <tr>
                                <th scope="row">11348132121</th>
                                <td>10-02-2020</td>
                                <td>Trà sữa</td>
                                <td>Bánh kem</td>
                                <td>20,000đ</td>
                                <td>Đã giao</td>
                            </tr>
                            <tr>
                                <th scope="row">11348132121</th>
                                <td>10-02-2020</td>
                                <td>Trà sữa</td>
                                <td>Bánh kem</td>
                                <td>20,000đ</td>
                                <td>Đã giao</td>
                            </tr>
                            <tr>
                                <th scope="row">11348132121</th>
                                <td>10-02-2020</td>
                                <td>Trà sữa</td>
                                <td>Bánh kem</td>
                                <td>20,000đ</td>
                                <td>Đã giao</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>