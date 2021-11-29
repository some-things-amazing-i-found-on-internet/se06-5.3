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
                                        <!-- <p class="text-light-white text-uppercase no-margin fs-12">Featured</p> -->
                                        <h5 class="fw-600"><a href="profile" class="text-light-black"><?php echo $user['fname'] . " " . $user['lname'] ?></a></h5>
                                        <!-- <div class="testimonial-user-box">
                                            <img src="assets/img/blog-details/40x40/user-2.png" class="rounded-circle" alt="#">
                                            <div class="testimonial-user-name">
                                                <p class="text-light-black fw-600"><?php echo $user['phone']; ?></p> <i class="fas fa-trophy text-black"></i><span class="text-light-black">Top Reviewer</span>
                                            </div>
                                        </div> -->
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
                                        <p class="text-light-black"><?php echo $user['address']; ?></p>
                                        <p class="text-light-black"><?php echo $user['road']; ?></p>
                                        <!-- <p class="text-light-white fw-100"><strong class="text-light-black fw-700">Local delivery: </strong> From $7.99 (4.0 mi)</p> -->
                                        <p class="text-light-white fw-100"> <?php echo $user['phone']; ?></p>
                                        <div>
                                            <a href="profile" class="btn-second">Cập nhật tài khoản</a>
                                            <a href="profile/address" class="btn-second">Lịch sử đơn hàng</a>
                                            <a href="profile/payment" class="btn-second">Phương thức thanh toán</a>
                                        </div>

                                        <a href="logout" class="btn-second btn-submit">Sign out</a>
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
                                <div class=" padding-15 fw-500"> Ảnh đại diện </div>
                                <img src="assets/img/user/user-2.png" class="img-fluid" alt="logo">
                                <div class=" padding-15 fw-500"> Thay đổi thông tin </div>
                                <form>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <label class="col-4 font-weight-bold " for="exampleInputEmail1">Email address</label>
                                        <input placeholder="<?php echo $user['email'] ?>" type="text" class="form-control col-6" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-1"></div>
                                        <label class="col-4 font-weight-bold" for="exampleInputPassword1">Password</label>
                                        <input placeholder="<?php echo $user['user_password'] ?>" type="text" class="form-control col-6" id="exampleInputPassword1">
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-1"></div>
                                        <label class="col-4 font-weight-bold" for="exampleInputPassword1">Tên</label>
                                        <input placeholder="<?php echo $user['fname'] ?>" type="text" class="form-control col-6" id="exampleInputPassword1">
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-1"></div>
                                        <label class="col-4 font-weight-bold" for="exampleInputPassword1">Họ</label>
                                        <input placeholder="<?php echo $user['lname'] ?>" type="text" class="form-control col-6" id="exampleInputPassword1">
                                    </div>
                                </form>
                                <div class=" padding-15 fw-500"> Cập nhật số điện thoại </div>
                                <div class="row mt-3">
                                    <div class="col-1"></div>
                                    <label class="col-4 font-weight-bold" for="exampleInputPassword1">Số điện thoại</label>
                                    <input placeholder="<?php echo $user['phone'] ?>" type="text" class="form-control col-6" id="exampleInputPassword1">
                                </div>
                                <div class=" padding-15 fw-500"> Phương thức thanh toán </div>

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
                                    <p class="text-light-green fw-700" id="dat">${order['name']}</p> <span class="text-light-white fw-700">Số lượng: ${x['quantity']};</span>
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
                <div class="total-price border-0 pb-0"> <span class="text-dark-white fw-700">Tổng tiền:</span>
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
            btn.className = 'd-none'
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