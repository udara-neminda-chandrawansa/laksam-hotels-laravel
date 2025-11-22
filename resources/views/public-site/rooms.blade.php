@extends('layouts.public-site')

@section('content')

<!-- breadcrumb section start -->
<section class="breadcrumb-section rooms-bread">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white-clr text-center">
                Choose Your Room
            </h2>
        </div>
    </div>
</section>

<!-- Luxuries section start -->
<section class="luxries-section fix section-padding bg3">
    <div class="container">
        <div class="blog-head-area mb-50 d-flex align-items-end justify-content-between gap-3 flex-wrap">
            <div class="section-title">
                <span class="sub-font wow fadeInUp">Explore Laksam Comfort</span>
                <h2 class="fw-semibold wow fadeInUp" data-wow-delay=".3s">
                    Boutique Lakefront Rooms & Suites
                </h2>
            </div>
        </div>
        <div class="row g-md-4 g-4">
            <div class="col-md-6 col-lg-4">
                <div class="luxries-single-item white-bg wow fadeInUp" data-wow-delay=".4s">
                    <a href="#" class="thumb d-block mb-4 w-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Royal Suite" class="w-100 overflow-hidden">
                    </a>
                    <div class="content">
                        <span class="text-clr fs-16 fw-bold d-block mb-1">King Bed</span>
                        <h3 class="mb-sm-4 mb-3">
                            <a href="#" class="fw-semibold d-block black-clr">Royal Kandy Suite</a>
                        </h3>
                        <ul class="blog-admin d-flex align-items-center gap-3 mb-4 pb-xxl-2">
                            <li class="d-flex align-items-center gap-2 black-clr fs-16 fw-500">
                                <i class="fas fa-users"></i> 2 Guests
                            </li>
                            <li class="d-flex align-items-center gap-2 black-clr fs-16 fw-500">
                                <i class="fas fa-coffee"></i> Breakfast
                            </li>
                            <li class="d-flex align-items-center gap-2 black-clr fs-16 fw-500">
                                <i class="fas fa-expand-arrows-alt"></i> 450sq ft
                            </li>
                        </ul>
                        <a href="#" class="theme-btn fw-normal text-capitalize gap-1 py-3 px-6">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="luxries-single-item white-bg wow fadeInUp" data-wow-delay=".6s">
                    <a href="#" class="thumb d-block mb-4 w-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Garden View" class="w-100 overflow-hidden">
                    </a>
                    <div class="content">
                        <span class="text-clr fs-16 fw-bold d-block mb-1">Twin Beds</span>
                        <h3 class="mb-sm-4 mb-3">
                            <a href="#" class="fw-semibold d-block black-clr">Garden View Deluxe</a>
                        </h3>
                        <ul class="blog-admin d-flex align-items-center gap-3 mb-4 pb-xxl-2">
                            <li class="d-flex align-items-center gap-2 black-clr fs-16 fw-500">
                                <i class="fas fa-users"></i> 2 Guests
                            </li>
                            <li class="d-flex align-items-center gap-2 black-clr fs-16 fw-500">
                                <i class="fas fa-coffee"></i> Breakfast
                            </li>
                            <li class="d-flex align-items-center gap-2 black-clr fs-16 fw-500">
                                <i class="fas fa-expand-arrows-alt"></i> 380sq ft
                            </li>
                        </ul>
                        <a href="#" class="theme-btn fw-normal text-capitalize gap-1 py-3 px-6">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="luxries-single-item white-bg wow fadeInUp" data-wow-delay=".7s">
                    <a href="#" class="thumb d-block mb-4 w-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Lake View Suite" class="w-100 overflow-hidden">
                    </a>
                    <div class="content">
                        <span class="text-clr fs-16 fw-bold d-block mb-1">King Bed</span>
                        <h3 class="mb-sm-4 mb-3">
                            <a href="#" class="fw-semibold d-block black-clr">Kandy Lake Suite</a>
                        </h3>
                        <ul class="blog-admin d-flex align-items-center gap-3 mb-4 pb-xxl-2">
                            <li class="d-flex align-items-center gap-2 black-clr fs-16 fw-500">
                                <i class="fas fa-users"></i> 3 Guests
                            </li>
                            <li class="d-flex align-items-center gap-2 black-clr fs-16 fw-500">
                                <i class="fas fa-coffee"></i> Breakfast
                            </li>
                            <li class="d-flex align-items-center gap-2 black-clr fs-16 fw-500">
                                <i class="fas fa-expand-arrows-alt"></i> 520sq ft
                            </li>
                        </ul>
                        <a href="#" class="theme-btn fw-normal text-capitalize gap-1 py-3 px-6">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking section start -->
<section class="hotel-booking-main z-1 position-relative section-padding" style="padding-bottom: 60px;">
    <div class="container pb-xl-5">
        <div class="row g-4 align-items-end">
            <div class="col-lg-5">
                <div class="booking-info-area">
                    <div class="section-title mb-3">
                        <span class="sub-font wow fadeInUp">Rooms & Suites</span>
                        <h3 class="fw-semibold fs-32 wow fadeInUp" data-wow-delay=".3s">
                            Hotel Bookings
                        </h3>
                    </div>
                    <form action="#" class="booking-form">
                        <div class="book-form mb-3">
                            <label for="checkin" class="fw-500 fs-14 black-clr d-block mb-lg-2 mb-1">Check
                                In:</label>
                            <div class="input-area">
                                <input type="text" id="checkin" placeholder="dd/mm/yyy">
                            </div>
                        </div>
                        <div class="book-form mb-3">
                            <label for="checkout" class="fw-500 fs-14 black-clr d-block mb-lg-2 mb-1">Check
                                Out:</label>
                            <div class="input-area">
                                <input type="text" id="checkout" placeholder="dd/mm/yyy">
                            </div>
                        </div>
                        <div class="book-form mb-3">
                            <label for="adult" class="fw-500 fs-14 black-clr d-block mb-lg-2 mb-1">Adult:</label>
                            <div class="input-area">
                                <input type="text" id="adult" placeholder="+ Add Guests">
                            </div>
                        </div>
                        <div class="book-form mb-4">
                            <label for="child" class="fw-500 fs-14 black-clr d-block mb-lg-2 mb-1">Children:</label>
                            <div class="input-area">
                                <input type="text" id="child" placeholder="+ Add Guests">
                            </div>
                        </div>
                        <div class="book-form text-center">
                            <a href="/book-room"
                                class="theme-btn py-sm-3 py-3 fw-normal text-capitalize gap-1 px-sm-4 px-4">
                                Check Availability
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hotel-booking-content">
                    <div class="section-title">
                        <span class="sub-font wow fadeInUp">Nearby Attractions</span>
                        <h2 class="fw-semibold wow fadeInUp mb-sm-3 mb-2" data-wow-delay=".3s">
                            Explore & Experience Sacred Kandy's Cultural Treasures
                        </h2>
                        <p class="black-clr fs-16 mb-lg-4 mb-3">
                            Immerse yourself in the rich cultural heritage of Kandy, the last royal capital of Sri
                            Lanka. Our hotel provides easy access to ancient temples, scenic lakes, and traditional
                            experiences that showcase the authentic beauty of Ceylon.
                        </p>
                        <div class="booking-listing-inner mb-4 pb-lg-3">
                            <ul class="list d-grid gap-sm-2 gap-1">
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i>Temple of the Sacred Tooth
                                </li>
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i>Kandy Lake (Bogambara)
                                </li>
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i>Royal Botanical Gardens
                                </li>
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i>Udawattakele Sanctuary
                                </li>
                            </ul>
                            <ul class="list d-grid gap-sm-2 gap-1">
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i>Kandy Cultural Centre
                                </li>
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i>Bahirawakanda Temple
                                </li>
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i>Ceylon Tea Museum
                                </li>
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i>Embekke Devalaya
                                </li>
                            </ul>
                        </div>
                        <a href="/room-details/1"
                            class="theme-btn py-sm-3 py-3 fw-normal text-capitalize gap-1 px-sm-4 px-4">
                            Discovery Tour
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ele -->
    <img src="assets/img/element/suites-shape.png" alt="img" class="book-flower1 d-lg-block d-none">
    <img src="assets/img/element/suites-shape.png" alt="img" class="book-flower2">
</section>

<!-- Call to Action -->
<section class="py-5" style="background-color:  var(--theme);">
    <div class="container text-center text-white">
        <h2 class="fw-bold text-white mb-4">Experience Laksam Hotels</h2>
        <p class="lead mb-4">Discover why we're Nuwara Eliya's most celebrated boutique hotel</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="#" class="btn btn-light btn-lg">Book Your Stay</a>
            <a href="#" class="btn btn-outline-light btn-lg">Contact Us</a>
        </div>
    </div>
</section>

<hr>

@endsection