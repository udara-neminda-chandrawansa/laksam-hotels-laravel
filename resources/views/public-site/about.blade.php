@extends('layouts.public-site')

@section('content')

<!-- breadcrumb section start -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white-clr text-center">
                About Page
            </h2>
        </div>
    </div>
</section>

<!-- About section start -->
<section class="about-section position-relative section-padding bg3 fix">
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-content mb-50">
                        <div class="section-title">
                            <span class="sub-font mb-xxl-4 mb-3 d-block wow fadeInUp">About Laksam Hotels</span>
                            <h2 class="wow fadeInUp fw-semibold mb-lg-3 mb-2" data-wow-delay=".3s">
                                Where Sri Lankan Hospitality Meets Modern Sophistication
                            </h2>
                        </div>
                        <p class="fs-18 pra-clr mb-sm-4 mb-3 pb-xxl-2">
                            Located in the heart of Sri Lanka’s cultural capital, Laksam Hotels Nuwara Eliya offers a
                            seamless blend of timeless tradition and contemporary comfort. Designed for the modern
                            traveler, our hotel is a celebration of warm hospitality, thoughtful luxury, and
                            breathtaking views of the sacred city.
                            <br>
                            Whether you're here to explore Kandy’s rich heritage or simply relax in refined
                            surroundings, Laksam Hotels promises an experience that’s both authentic and unforgettable.
                        </p>
                        <a href="#" class="theme-btn fw-normal text-capitalize gap-1 px-6">Discover More</a>
                    </div>
                    <div class="about-thumb1 w-100">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Laksam Hotels Nuwara Eliya" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumb2-wrap">
                        <div class="thumb1 mb-4 w-100 wow fadeInDown" data-wow-delay=".4s">
                            <img src="assets/img/hero/temple-of-tooth.webp" alt="Temple of the Tooth" class="w-100">
                        </div>
                        <div class="thumb2-inne d-flex gap-3">
                            <div class="thumb-small wow fadeInRight" data-wow-delay=".3s">
                                <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                                    alt="Nuwara Eliya Lake">
                            </div>
                            <div class="about-textcircle d-center position-relative wow fadeInUp" data-wow-delay=".5s">
                                <div class="boxes">
                                    <span class="exprience d-flex align-items-end justify-content-center">
                                        15<span class="text-uppercase year fs-16"> YEARS</span>
                                    </span>
                                    <p class="fs-16 text-nowrap d-block heading-font text-capitalize mt-2">
                                        Of Excellence
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Values -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Mission & Values</h2>
            <p class="lead">Guiding principles that shape our hospitality</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h4>Exceptional Service</h4>
                    <p>
                        Every interaction is guided by warmth, attentiveness, and professionalism.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4>Sustainable Luxury</h4>
                    <p>
                        We champion eco-conscious practices, ensuring luxury never comes at the environment’s expense.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="feature-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4>Cultural Preservation</h4>
                    <p>
                        Our design, cuisine, and curated experiences pay homage to Kandy’s timeless heritage.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- History Timeline -->
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Our Journey</h2>
        <div class="history-timeline">
            <div class="timeline-item">
                <h4>2005</h4>
                <p>
                    Founded in 2005 as a boutique 12-room property, Laksam Hotels quickly became known for personalized
                    service and attention to detail.
                </p>
            </div>
            <div class="timeline-item">
                <h4>2010</h4>
                <p>
                    We expanded to 30 rooms and introduced our award-winning spa.
                </p>
            </div>
            <div class="timeline-item">
                <h4>2015</h4>
                <p>
                    Marked our 10th anniversary with a complete renovation and the launch of our rooftop infinity pool.
                </p>
            </div>
            <div class="timeline-item">
                <h4>2020</h4>
                <p>
                    Proudly received Green Globe Certification for our sustainability efforts.
                </p>
            </div>
            <div class="timeline-item">
                <h4>2023</h4>
                <p>
                    Honored as 'Best Luxury Hotel in Nuwara Eliya' for the third consecutive year by Sri Lanka Tourism
                    Awards.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Meet Our Leadership</h2>
            <p class="lead">Behind Laksam Hotels is a passionate team dedicated to delivering excellence:</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="team-member text-center">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="General Manager"
                        class="mb-3 rounded-circle">
                    <h4>Nayana Perera</h4>
                    <p class="text-muted">General Manager</p>
                    <p>
                        With over two decades in luxury hospitality, Nayana leads the team with a guest-first
                        philosophy.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member text-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Head Chef"
                        class="mb-3 rounded-circle">
                    <h4>Rajiv Fernando</h4>
                    <p class="text-muted">Executive Chef</p>
                    <p>
                        An artist in the kitchen, Chef Rajiv brings Sri Lankan flavors to life using modern culinary
                        techniques.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member text-center">
                    <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Guest Relations"
                        class="mb-3 rounded-circle">
                    <h4>Shamila Rathnayake</h4>
                    <p class="text-muted">Director of Guest Experience</p>
                    <p>
                        Shamila and her team specialize in crafting tailored experiences, helping guests explore Nuwara
                        Eliya's hidden gems.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking section start -->
{{-- <section class="hotel-booking z-1 bg3 position-relative space-bottom">
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
                            <a href="/rooms"
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
                        <a href="#" class="theme-btn py-sm-3 py-3 fw-normal text-capitalize gap-1 px-sm-4 px-4">Explore
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ele -->
    <img src="assets/img/element/suites-shape.png" alt="img" class="book-flower1 d-lg-block d-none">
    <img src="assets/img/element/suites-shape.png" alt="img" class="book-flower2">
</section> --}}

<!-- Awards Section -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-xl-12 col-md-6 col-12">
                <div class="p-3">
                    <i class="fas fa-spa fa-3x mb-3" style="color: var(--theme);"></i>
                    <h5 class="text-white">✨ Top Boutique Hotel in Nuwara Eliya</h5>
                    <p>Travel Excellence Forum, 2024</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-3">
            We are proud to be recognized for our warm Sri Lankan hospitality and breathtaking lakefront views. At
            Laksam Hotels, every guest is treated to a memorable highland escape.
        </p>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5" style="background-color:  var(--theme);">
    <div class="container text-center text-white">
        <h2 class="fw-bold text-white mb-4">Experience Laksam Hotels</h2>
        <p class="lead mb-4">Discover boutique comfort, scenic Gregory Lake views, and genuine Sri Lankan hospitality in
            the heart of Nuwara Eliya.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="#" class="btn btn-light btn-lg">Book Your Stay</a>
            <a href="#" class="btn btn-outline-light btn-lg">Contact Us</a>
        </div>
    </div>
</section>

@endsection