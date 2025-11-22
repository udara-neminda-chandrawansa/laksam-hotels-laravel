@extends('layouts.public-site')

@section('content')

<!-- Hero section start -->
<section class="hero-section hero-style4">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-1">
                    <div class="hero-bg bg-cover" style="background-image: url(assets/img/hero/hero-bg4.jpg);">
                    </div>
                    <div class="container">
                        <div class="hero-content">
                            <span class="sub-font text-white sub-title fs-20 mb-sm-4 mb-3 d-block">
                                Boutique Lakefront Escape in Nuwara Eliya
                            </span>
                            <h1 class="mb-lg-5 mb-4 pb-lg-0 pb-2 text-capitalize white-clr fw-bold">
                                Memorable Moments in the Highlands
                            </h1>

                        </div>
                        <div class="date-picker-container">
                            <form id="booking-form"
                                class="d-flex flex-lg-nowrap justify-content-lg-between justify-content-center flex-wrap align-items-end gap-xxl-4 gap-xl-3 gap-2">
                                <div class="form-group">
                                    <label for="check-in" class="black2-clr fs-14 fw-500 mb-2 d-block">Check
                                        In:</label>
                                    <input type="date" id="check-in" name="check-in">
                                </div>

                                <div class="form-group">
                                    <label for="check-out"
                                        class="black2-clr fs-14 fw-500 mb-2 d-block">check-out:</label>
                                    <input type="date" id="check-out" name="check-out">
                                </div>

                                <div class="form-group">
                                    <label for="adults3" class="black2-clr fs-14 fw-500 mb-2 d-block">Guest:</label>
                                    <select id="adults3" name="adults">
                                        <option value="1">Adult:</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="adults3" class="black2-clr fs-14 fw-500 mb-2 d-block">Select
                                        Hotel:</label>
                                    <select id="hotels" name="hotels">
                                        <option value="1">King Castle Lake Front by LAKSAM</option>
                                        <option value="2">Ella by LAKSAM</option>
                                        <option value="3">Eddy's Lounge by LAKSAM</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="theme-btn text-nowrap d-center rounded-4 fs-16 fw-500 text-center gap-2 text-capitalize">
                                        Search <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="hero-slide-btn">
                        <button type="button" class="common-slide-btn d-center array-prev">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <button type="button" class="common-slide-btn d-center array-next">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-1">
                    <div class="hero-bg bg-cover"
                        style="background-image: url(assets/img/hero/home-slide-repeat1.png);">
                    </div>
                    <div class="container">
                        <div class="hero-content">
                            <span class="sub-font text-white sub-title fs-20 mb-sm-4 mb-3 d-block">
                                Authentic historical charm
                            </span>
                            <h1 class="mb-lg-5 mb-4 pb-lg-0 pb-2 text-capitalize white-clr fw-bold">
                                Start A New Vision OF comport Zone
                            </h1>

                        </div>
                        <div class="date-picker-container">
                            <form id="booking-form2"
                                class="d-flex flex-lg-nowrap justify-content-lg-between justify-content-center flex-wrap align-items-end gap-xxl-4 gap-xl-3 gap-2">
                                <div class="form-group">
                                    <label for="check-in2" class="black2-clr fs-14 fw-500 mb-2 d-block">Check
                                        In:</label>
                                    <input type="date" id="check-in2" name="check-in">
                                </div>

                                <div class="form-group">
                                    <label for="check-out2"
                                        class="black2-clr fs-14 fw-500 mb-2 d-block">check-out:</label>
                                    <input type="date" id="check-out2" name="check-out">
                                </div>

                                <div class="form-group">
                                    <label for="adults2" class="black2-clr fs-14 fw-500 mb-2 d-block">Guest:</label>
                                    <select id="adults2" name="adults">
                                        <option value="1">Adult:</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="adults3" class="black2-clr fs-14 fw-500 mb-2 d-block">Select
                                        Hotel:</label>
                                    <select id="hotels" name="hotels">
                                        <option value="1">King Castle Lake Front by LAKSAM</option>
                                        <option value="2">Ella by LAKSAM</option>
                                        <option value="3">Eddy's Lounge by LAKSAM</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="theme-btn text-nowrap d-center rounded-4 fs-16 fw-500 text-center gap-2 text-capitalize">
                                        Search <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="hero-slide-btn">
                        <button type="button" class="common-slide-btn d-center array-prev">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <button type="button" class="common-slide-btn d-center array-next">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About section start -->
<section class="about-section4 position-relative section-padding white-bg fix">
    <div class="container">
        <div class="section-title text-center mb-50">
            <span class="sub-font wow fadeInUp">About Laksam Hotels</span>
            <h2 class="fw-semibold wow fadeInUp" data-wow-delay=".3s">
                Experience Boutique Comfort<br>in the Heart of Nuwara Eliya
            </h2>
        </div>
        <div class="about-wrapper4">
            <div class="about-content-version3">
                <div class="section-title">
                    <h3 class="wow fadeInUp fs-32 fw-semibold mb-xxl-3 mb-lg-3 mb-2" data-wow-delay=".3s">
                        Scenic Lake Views & Highland Charm
                    </h3>
                </div>
                <p class="fs-18 pra-clr mb-sm-4 mb-3 pb-xxl-1">
                    Nestled over 6,000 ft above sea level, Laksam Hotels offers a tranquil escape with breathtaking
                    views of Gregory Lake and the misty mountains. Our boutique hotel features just 12 exclusive
                    rooms, each with a private balcony overlooking the lake or gardens. Enjoy modern comforts,
                    spa-style baths, and warm Sri Lankan hospitality—where small gestures make a big difference.
                </p>
                <a href="/about" class="theme-btn rounded-4 fw-normal text-capitalize gap-1 px-6">
                    Discover More
                </a>
            </div>
            <div class="line"></div>
            <div class="about-thumbv4">
                <img src="assets/img/about/about-version4.jpg" alt="img" class="rounded-3">
            </div>
        </div>
    </div>
</section>

<!-- Luxuries section start -->
<section class="dining-room-section fix section-padding bg2">
    <div class="container">
        <div class="room-head-area mb-50 d-flex align-items-end justify-content-between gap-lg-3 gap-2 flex-wrap">
            <div class="section-title">
                <span class="sub-font wow fadeInUp">Our Highlights</span>
                <h2 class="fw-semibold wow fadeInUp" data-wow-delay=".3s">
                    Discover the Best of Laksam Hotels
                </h2>
            </div>
            <h3 class="black-clr drink-dining-pra fw-500">
                Enjoy our signature experiences in the heart of Nuwara Eliya.
            </h3>
        </div>
        <div class="row g-lg-4 g-3 mb-50">
            <div class="col-sm-6 col-md-6 col-lg-4 wow fadeInRight" data-wow-delay=".4s">
                <div class="offer-room-item position-relative overflow-hidden rounded-3 d-center w-100 wow fadeInUp"
                    data-wow-delay=".4s">
                    <img src="assets/img/rooms/offer-room.jpg" alt="img" class="w-100">
                    <div class="content text-center px-2">
                        <h3 class="fs-32 fw-bold white-clr mb-lg-4 mb-3">Lake View Restaurant</h3>
                        <p class="mb-3">Savor authentic Sri Lankan and international cuisine with stunning views of
                            Gregory Lake. Perfect for family meals or romantic dinners.</p>
                        <a href="#"
                            class="theme-btn header-bg bg-transparent rounded-3 fw-normal text-capitalize gap-1">
                            Explore Restaurant
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                <div class="offer-room-item position-relative overflow-hidden rounded-3 d-center w-100 wow fadeInUp"
                    data-wow-delay=".4s">
                    <img src="assets/img/rooms/offer-room.jpg" alt="img" class="w-100">
                    <div class="content text-center px-2">
                        <h3 class="fs-32 fw-bold white-clr mb-lg-4 mb-3">Mini Pub Experience</h3>
                        <p class="mb-3">Relax and unwind at our cozy mini pub. Enjoy a selection of local and
                            international beverages in a warm, friendly atmosphere.</p>
                        <a href="#"
                            class="theme-btn header-bg bg-transparent rounded-3 fw-normal text-capitalize gap-1">
                            Visit the Pub
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 wow fadeInLeft" data-wow-delay=".4s">
                <div class="offer-room-item position-relative overflow-hidden rounded-3 d-center w-100 wow fadeInUp"
                    data-wow-delay=".4s">
                    <img src="assets/img/rooms/offer-room.jpg" alt="img" class="w-100">
                    <div class="content text-center px-2">
                        <h3 class="fs-32 fw-bold white-clr mb-lg-4 mb-3">Lake View Luxury Rooms</h3>
                        <p class="mb-3">Experience comfort and elegance in our luxury rooms, each offering
                            breathtaking lake views and modern amenities for a memorable stay.</p>
                        <a href="#"
                            class="theme-btn header-bg bg-transparent rounded-3 fw-normal text-capitalize gap-1">
                            View Rooms
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="theme-btn header-bg rounded-4 fw-normal text-capitalize gap-1 py-3 px-6">
                Discover More
            </a>
        </div>
    </div>
</section>

<!-- Luxuries section start -->
<section class="luxries-room-section fix section-padding bg3">
    <div class="container">
        <div class="room-head-area mb-50 d-flex align-items-end justify-content-between gap-lg-3 gap-2 flex-wrap">
            <div class="section-title">
                <span class="sub-font wow fadeInUp">Rooms</span>
                <h2 class="fw-semibold wow fadeInUp" data-wow-delay=".3s">
                    Boutique Lakefront Rooms<br>with Scenic Views & Modern Comforts
                </h2>
            </div>
            <p class="text-clr fs-16">
                Choose from lake or garden view rooms, all with private balconies, spa-style baths, and
                complimentary WiFi. Family and interconnecting rooms available for group stays.
            </p>
        </div>
        <div class="row g-md-4 g-4">
            <div class="col-md-6 col-lg-4">
                <div class="luxries-room-item wow fadeInUp" data-wow-delay=".4s">
                    <a href="#" class="thumb d-block w-100 overflow-hidden">
                        <img src="assets/img/rooms/sample.webp" alt="img" class="w-100 overflow-hidden">
                    </a>
                    <div class="content">
                        <ul class="blog-admin d-flex align-items-center justify-content-center gap-3">
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/square-white.png" alt="img" class="white-icon"> 260sq
                            </li>
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/double-bed-white.png" alt="img" class="white-icon"> 2 Beds
                            </li>
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/guests-white.png" alt="img" class="white-icon"> 4 Guests
                            </li>
                        </ul>
                        <div class="boxes">
                            <h3 class="theme2-clr mb-xxl-1 mb-0 fs-32 body-font fw-bold">Rs. 28,000 <span
                                    class="black-clr body-font fw-500 fs-14">/4 Nights</span></h3>
                            <h3 class="mb-xl-3 mb-2">
                                <a href="#" class="fw-semibold d-block black-clr">
                                    Deluxe Lake View Room
                                </a>
                            </h3>
                            <p class="mb-4">
                                Enjoy panoramic lake views, a private balcony, and a spa-style bath. Perfect for
                                couples seeking a romantic highland retreat.
                            </p>
                            <a href="#" class="theme-btn fw-normal text-capitalize gap-1 py-3 px-6">
                                Room Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="luxries-room-item wow fadeInRight" data-wow-delay=".5s">
                    <a href="#" class="thumb d-block w-100 overflow-hidden">
                        <img src="assets/img/rooms/sample.webp" alt="img" class="w-100 overflow-hidden">
                    </a>
                    <div class="content">
                        <ul class="blog-admin d-flex align-items-center justify-content-center gap-3">
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/square-white.png" alt="img" class="white-icon"> 260sq
                            </li>
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/double-bed-white.png" alt="img" class="white-icon"> 2 Beds
                            </li>
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/guests-white.png" alt="img" class="white-icon"> 4 Guests
                            </li>
                        </ul>
                        <div class="boxes">
                            <h3 class="theme2-clr mb-xxl-1 mb-0 fs-32 body-font fw-bold">Rs. 18,000 <span
                                    class="black-clr body-font fw-500 fs-14">/4 Nights</span></h3>
                            <h3 class="mb-xl-3 mb-2">
                                <a href="#" class="fw-semibold d-block black-clr">
                                    Family Garden Suite
                                </a>
                            </h3>
                            <p class="mb-4">
                                Spacious suite with garden views, ideal for families or small groups. Features
                                interconnecting rooms and modern amenities.
                            </p>
                            <a href="#" class="theme-btn fw-normal text-capitalize gap-1 py-3 px-6">
                                Room Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="luxries-room-item wow fadeInLeft" data-wow-delay=".6s">
                    <a href="#" class="thumb d-block w-100 overflow-hidden">
                        <img src="assets/img/rooms/sample.webp" alt="img" class="w-100 overflow-hidden">
                    </a>
                    <div class="content">
                        <ul class="blog-admin d-flex align-items-center justify-content-center gap-3">
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/square-white.png" alt="img" class="white-icon"> 260sq
                            </li>
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/double-bed-white.png" alt="img" class="white-icon"> 2 Beds
                            </li>
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/guests-white.png" alt="img" class="white-icon"> 4 Guests
                            </li>
                        </ul>
                        <div class="boxes">
                            <h3 class="theme2-clr mb-xxl-1 mb-0 fs-32 body-font fw-bold">Rs. 38,000 <span
                                    class="black-clr body-font fw-500 fs-14">/4 Nights</span></h3>
                            <h3 class="mb-xl-3 mb-2">
                                <a href="#" class="fw-semibold d-block black-clr">
                                    Premium Mountain View Room
                                </a>
                            </h3>
                            <p class="mb-4">
                                Wake up to breathtaking mountain vistas and fresh highland air. Includes a hot tub
                                and complimentary breakfast.
                            </p>
                            <a href="#" class="theme-btn fw-normal text-capitalize gap-1 py-3 px-6">
                                Room Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="luxries-room-item wow fadeInUp" data-wow-delay=".4s">
                    <a href="#" class="thumb d-block w-100 overflow-hidden">
                        <img src="assets/img/rooms/sample.webp" alt="img" class="w-100 overflow-hidden">
                    </a>
                    <div class="content">
                        <ul class="blog-admin d-flex align-items-center justify-content-center gap-3">
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/square-white.png" alt="img" class="white-icon"> 260sq
                            </li>
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/double-bed-white.png" alt="img" class="white-icon"> 2 Beds
                            </li>
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/guests-white.png" alt="img" class="white-icon"> 4 Guests
                            </li>
                        </ul>
                        <div class="boxes">
                            <h3 class="theme2-clr mb-xxl-1 mb-0 fs-32 body-font fw-bold">Rs. 26,000 <span
                                    class="black-clr body-font fw-500 fs-14">/4 Nights</span></h3>
                            <h3 class="mb-xl-3 mb-2">
                                <a href="#" class="fw-semibold d-block black-clr">
                                    Standard Highland Room
                                </a>
                            </h3>
                            <p class="mb-4">
                                Comfortable and cozy, with all essentials for a relaxing stay in Nuwara Eliya. Great
                                for solo travelers or couples.
                            </p>
                            <a href="#" class="theme-btn fw-normal text-capitalize gap-1 py-3 px-6">
                                Room Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="luxries-room-item wow fadeInRight" data-wow-delay=".5s">
                    <a href="#" class="thumb d-block w-100 overflow-hidden">
                        <img src="assets/img/rooms/sample.webp" alt="img" class="w-100 overflow-hidden">
                    </a>
                    <div class="content">
                        <ul class="blog-admin d-flex align-items-center justify-content-center gap-3">
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/square-white.png" alt="img" class="white-icon"> 260sq
                            </li>
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/double-bed-white.png" alt="img" class="white-icon"> 2 Beds
                            </li>
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/guests-white.png" alt="img" class="white-icon"> 4 Guests
                            </li>
                        </ul>
                        <div class="boxes">
                            <h3 class="theme2-clr mb-xxl-1 mb-0 fs-32 body-font fw-bold">Rs. 39,900 <span
                                    class="black-clr body-font fw-500 fs-14">/4 Nights</span></h3>
                            <h3 class="mb-xl-3 mb-2">
                                <a href="#" class="fw-semibold d-block black-clr">
                                    Family Interconnected Suite
                                </a>
                            </h3>
                            <p class="mb-4">
                                Two spacious rooms with connecting doors, ideal for families. Overlooks lush gardens
                                and offers all modern amenities.
                            </p>
                            <a href="#" class="theme-btn fw-normal text-capitalize gap-1 py-3 px-6">
                                Room Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="luxries-room-item wow fadeInLeft" data-wow-delay=".6s">
                    <a href="#" class="thumb d-block w-100 overflow-hidden">
                        <img src="assets/img/rooms/sample.webp" alt="img" class="w-100 overflow-hidden">
                    </a>
                    <div class="content">
                        <ul class="blog-admin d-flex align-items-center justify-content-center gap-3">
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/square-white.png" alt="img" class="white-icon"> 260sq
                            </li>
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/double-bed-white.png" alt="img" class="white-icon"> 2 Beds
                            </li>
                            <li class="d-flex align-items-center gap-1 black-clr fs-14 fw-500">
                                <img src="assets/img/icon/guests-white.png" alt="img" class="white-icon"> 4 Guests
                            </li>
                        </ul>
                        <div class="boxes">
                            <h3 class="theme2-clr mb-xxl-1 mb-0 fs-32 body-font fw-bold">Rs. 28,000 <span
                                    class="black-clr body-font fw-500 fs-14">/4 Nights</span></h3>
                            <h3 class="mb-xl-3 mb-2">
                                <a href="#" class="fw-semibold d-block black-clr">
                                    Premium Garden Suite
                                </a>
                            </h3>
                            <p class="mb-4">
                                Elegant suite with garden access, perfect for guests who love nature and
                                tranquility. Includes complimentary WiFi and breakfast.
                            </p>
                            <a href="#" class="theme-btn fw-normal text-capitalize gap-1 py-3 px-6">
                                Room Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial section start -->
<section class="testimonial-section2 testimonial-style3 bg2 section-padding fix">
    <div class="container position-relative">
        <div class="testimonil-spce-wrapper2 d-flex gap-4 justify-content-between align-items-center">
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-items1">
                            <div class="testi-thumb">
                                <img src="assets/img/testimonial/testimonial-big4.jpg" alt="img" class="rounded-3">
                            </div>
                            <div class="content-area">
                                <img src="assets/img/element/quote-white.png" alt="img"
                                    class="quote1 d-sm-block d-none">
                                <div class="cont">
                                    <p class="heading-font white-clr mb-lg-0 mb-3">
                                        The view of Gregory Lake from our balcony was breathtaking. The staff made
                                        us feel at home and the food was delicious. We will definitely return!
                                    </p>
                                    <div class="text-ratting">
                                        <img src="assets/img/element/quote-white.png" alt="img"
                                            class="quote1 ms-auto mb-4 d-lg-block d-none">
                                        <div
                                            class="d-flex flex-sm-nowrap flex-wrap align-items-center justify-content-sm-between w-75 gap-2">
                                            <div class="emma">
                                                <h3 class="fs-32 mb-sm-2 mb-1 fw-semibold black-clr">
                                                    Nuwan & Ishara P.
                                                </h3>
                                                <span class="heading-font fs-20 fw-500 black-clr d-block">Colombo</span>
                                            </div>
                                            <div class="d-flex justify-content-center gap-1 mb-lg-4 mb-3">
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-items1">
                            <div class="testi-thumb">
                                <img src="assets/img/testimonial/testimonial-big4.jpg" alt="img" class="rounded-3">
                            </div>
                            <div class="content-area">
                                <img src="assets/img/element/quote-white.png" alt="img"
                                    class="quote1 d-sm-block d-none">
                                <div class="cont">
                                    <p class="heading-font white-clr mb-lg-0 mb-3">
                                        Perfect place for a family holiday. The rooms were spacious and clean, and
                                        the kids loved the garden. Highly recommended for anyone visiting Nuwara
                                        Eliya.
                                    </p>
                                    <div class="text-ratting">
                                        <img src="assets/img/element/quote-white.png" alt="img"
                                            class="quote1 ms-auto mb-4 d-lg-block d-none">
                                        <div
                                            class="d-flex flex-sm-nowrap flex-wrap align-items-center justify-content-sm-between w-75 gap-2">
                                            <div class="emma">
                                                <h3 class="fs-32 mb-sm-2 mb-1 fw-semibold black-clr">
                                                    Sanduni Jayasinghe
                                                </h3>
                                                <span class="heading-font fs-20 fw-500 black-clr d-block">Kandy</span>
                                            </div>
                                            <div class="d-flex justify-content-center gap-1 mb-lg-4 mb-3">
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-items1">
                            <div class="testi-thumb">
                                <img src="assets/img/testimonial/testimonial-big4.jpg" alt="img" class="rounded-3">
                            </div>
                            <div class="content-area">
                                <img src="assets/img/element/quote-white.png" alt="img"
                                    class="quote1 d-sm-block d-none">
                                <div class="cont">
                                    <p class="heading-font white-clr mb-lg-0 mb-3">
                                        We enjoyed the cool climate and peaceful surroundings. The service was
                                        excellent and the location is ideal for exploring the city and tea estates.
                                    </p>
                                    <div class="text-ratting">
                                        <img src="assets/img/element/quote-white.png" alt="img"
                                            class="quote1 ms-auto mb-4 d-lg-block d-none">
                                        <div
                                            class="d-flex flex-sm-nowrap flex-wrap align-items-center justify-content-sm-between w-75 gap-2">
                                            <div class="emma">
                                                <h3 class="fs-32 mb-sm-2 mb-1 fw-semibold black-clr">
                                                    Dilshan Fernando
                                                </h3>
                                                <span class="heading-font fs-20 fw-500 black-clr d-block">Galle</span>
                                            </div>
                                            <div class="d-flex justify-content-center gap-1 mb-lg-4 mb-3">
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-20 ratting-clr"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-btngrap2">
                <button type="button" class="common-slide-btn d-center rounded-circle array-prev">
                    <i class="fa-solid fa-angle-left"></i>
                </button>
                <button type="button" class="common-slide-btn d-center rounded-circle array-next">
                    <i class="fa-solid fa-angle-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Drinks Section -->
<section class="drinks-section fix section-padding">
    <div class="container">
        <div class="drinks-head">
            <div class="section-title text-center mb-4 pb-xxl-1">
                <span class="sub-font wow fadeInUp">Eat & Drinks</span>
                <h2 class="fw-semibold text-capitalize wow fadeInUp mb-4 pb-xxl-1" data-wow-delay=".3s">
                    We are a kitchen club and a hangout for the day and the night
                </h2>
                <p class="black-clr fs-16 mb-sm-4 mb-4 pb-xxl-3 pb-xl-1 wow fadeInUp" data-wow-delay=".4s">
                    It sounds like you're referring to the formatting of a headline related to a city hotel. If you
                    are asking how to write
                    or format a headline about a Luxury hotel, here's a simple guide Are you writing headline or
                    looking
                    for recent news on city hotels.
                </p>
                <a href="#" class="theme-btn extra-bg text-nowrap fw-normal text-capitalize gap-1 px-6 rounded-3">
                    Book Now
                </a>
            </div>
        </div>
        <div class="drink-all-thumb d-flex gap-sm-4 gap-3 justify-content-between align-items-end">
            <div class="drinks-items w-100 rounded-3 wow fadeInRight" data-wow-delay=".5s">
                <img src="assets/img/blog/drinks1.jpg" alt="img" class="w-100 rounded-3">
            </div>
            <div class="drinks-items w-100 rounded-3 wow fadeInUp" data-wow-delay=".4s">
                <img src="assets/img/blog/drinks12.jpg" alt="img" class="w-100 rounded-3">
            </div>
            <div class="drinks-items w-100 rounded-3 wow fadeInLeft" data-wow-delay=".5s">
                <img src="assets/img/blog/drinks1.jpg" alt="img" class="w-100 rounded-3">
            </div>
        </div>
    </div>
</section>

<!-- Faq Section -->
<section class="faq-section section-padding black-bg">
    <div class="container">
        <div class="section-title text-center mb-50">
            <span class="sub-font text-white wow fadeInUp">FAQs</span>
            <h2 class="fw-semibold white-clr wow fadeInUp" data-wow-delay=".3s">
                Frequently Asked Questions<br>Laksam Hotels
            </h2>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="faq-thumb w-100 pe-lg-4 wow fadeInRight" data-wow-delay=".4s">
                    <img src="assets/img/global/faq-thumb.jpg" alt="img" class="w-100 rounded-4">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion custom-accordion white-version d-grid gap-4" id="accordionExample">
                    <div class="accordion-item bg-transparent wow fadeInUp" data-wow-delay=".3s">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How do I make a reservation?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body pt-xl-3 pt-2">
                                <p class="fs-16">
                                    You can book directly on our website, call us at 0777 611 290, or email
                                    info@laksam.lk. Early booking is recommended due to our boutique size.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="accordion-item bg-transparent wow fadeInUp" data-wow-delay=".5s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button bg-transparent collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                What amenities are included?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body pt-xl-3 pt-2">
                                <p class="fs-16">
                                    All rooms include free WiFi, private bathrooms, spa-style baths, toiletries,
                                    hairdryer, electric kettle, and daily housekeeping. Enjoy our in-house
                                    restaurant, hot tub, and 24-hour front desk.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="accordion-item bg-transparent wow fadeInUp" data-wow-delay=".6s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button bg-transparent collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                How close are you to Gregory Lake and other attractions?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body pt-xl-3 pt-2">
                                <p class="fs-16">
                                    We are a 16-minute walk from Gregory Lake and close to Hakgala Botanical Garden,
                                    tea plantations, and colonial-era sites. Perfect for exploring Nuwara Eliya’s
                                    highlights.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="accordion-item bg-transparent wow fadeInUp" data-wow-delay=".7s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button bg-transparent collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                Is airport shuttle available?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body pt-xl-3 pt-2">
                                <p class="fs-16">
                                    Yes, we offer airport shuttle service for an additional fee. Please contact us
                                    to arrange your transfer in advance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection