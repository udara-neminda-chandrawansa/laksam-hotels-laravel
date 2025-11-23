@extends('layouts.public-site')

@section('content')

<style>
    .booking-form .book-form .input-area select {
        width: 100%;
        border: 1px solid #e2e2e2 !important;
        background: #f2f2f2 !important;
        padding: 13px 16px 14px !important;
        font-size: 14px !important;
        line-height: 16px !important;
        color: var(--text) !important;
    }
</style>

<!-- breadcrumb section start -->
<section class="breadcrumb-section rooms-bread">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white-clr text-center">
                Our Room
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
            @foreach ($roomTypes as $roomType)
            <div class="col-md-6 col-lg-4">
                <div class="luxries-single-item white-bg wow fadeInUp" data-wow-delay=".4s">
                    <a href="/room-details/{{ $roomType->id }}"
                        class="thumb d-block mb-4 w-100 overflow-hidden aspect-video">
                        <img src="{{ $roomType->image_path }}" alt="Royal Suite" class="w-100 overflow-hidden">
                    </a>
                    <div class="content">
                        <span class="text-clr fs-16 fw-bold d-block mb-1">{{ $roomType->price_per_night }}</span>
                        <h3 class="mb-sm-4 mb-3">
                            <a href="/room-details/{{ $roomType->id }}" class="fw-semibold d-block black-clr">{{
                                $roomType->name }}</a>
                        </h3>
                        <ul class="blog-admin d-flex align-items-center gap-3 mb-4 pb-xxl-2">
                            <li class="d-flex align-items-center gap-2 black-clr fs-16 fw-500">
                                <i class="fas fa-users"></i> {{ $roomType->max_occupancy }} Guests
                            </li>
                            @if (!empty($roomType->amenities))
                            @foreach ($roomType->amenities as $amenity)
                            @if ($loop->iteration > 2)
                            @break
                            @endif
                            <li class="d-flex align-items-center gap-2 black-clr fs-16 fw-500">
                                <i class="fas fa-star"></i> {{ $amenity }}
                            </li>
                            @endforeach
                            @endif
                        </ul>
                        <a href="/room-details/{{ $roomType->id }}"
                            class="theme-btn fw-normal text-capitalize gap-1 py-3 px-6">
                            Room Details
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
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
                    <form action="/book-room" class="booking-form" method="GET">
                        <div class="book-form mb-3">
                            <label for="checkin" class="fw-500 fs-14 black-clr d-block mb-lg-2 mb-1">Check
                                In:</label>
                            <div class="input-area">
                                <input type="date" id="check-in" name="check_in">
                            </div>
                        </div>
                        <div class="book-form mb-3">
                            <label for="checkout" class="fw-500 fs-14 black-clr d-block mb-lg-2 mb-1">Check
                                Out:</label>
                            <div class="input-area">
                                <input type="date" id="check-out" name="check_out">
                            </div>
                        </div>
                        <div class="book-form mb-3">
                            <label for="adult" class="fw-500 fs-14 black-clr d-block mb-lg-2 mb-1">Adult:</label>
                            <div class="input-area">
                                <select id="adults3" name="adults">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="book-form mb-4">
                            <label for="child" class="fw-500 fs-14 black-clr d-block mb-lg-2 mb-1">Children:</label>
                            <div class="input-area">
                                <select id="children" name="children">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="book-form text-center">
                            <button type="submit"
                                class="theme-btn py-sm-3 py-3 fw-normal text-capitalize gap-1 px-sm-4 px-4">
                                Check Availability
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hotel-booking-content">
                    <div class="section-title">
                        <span class="sub-font wow fadeInUp">Nearby Attractions</span>
                        <h2 class="fw-semibold wow fadeInUp mb-sm-3 mb-2" data-wow-delay=".3s">
                            Discover the Wonders of Nuwara Eliya
                        </h2>
                        <p class="black-clr fs-16 mb-lg-4 mb-3">
                            Explore the best of Sri Lanka’s hill country, just moments from Laksam Hotels:
                        </p>
                        <div class="booking-listing-inner mb-4 pb-lg-3">
                            <ul class="list d-grid gap-sm-2 gap-1">
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i> Gregory Lake & Park
                                </li>
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i> Victoria Park
                                </li>
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i> Hakgala Botanical Garden
                                </li>
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i> Pedro Tea Estate & Factory
                                </li>
                            </ul>
                            <ul class="list d-grid gap-sm-2 gap-1">
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i> Lover’s Leap Waterfall
                                </li>
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i> Galway’s Land National Park
                                </li>
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i> Seetha Amman Temple
                                </li>
                                <li class="heading-font black-clr fs-16 fw-500">
                                    <i class="fa-solid fa-circle"></i> Nuwara Eliya Golf Club
                                </li>
                            </ul>
                        </div>
                        <a href="/about"
                            class="theme-btn py-sm-3 py-3 fw-normal text-capitalize gap-1 px-sm-4 px-4">
                            About Us
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

@endsection