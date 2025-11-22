@extends('layouts.public-site')

@section('content')

<!-- breadcrumb section start -->
<section class="breadcrumb-section rooms-bread">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white-clr text-center">
                Lake View Luxury Room
            </h2>
        </div>
    </div>
</section>

<!-- Room Details Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Room Carousel -->
                <div id="roomCarousel" class="carousel slide room-carousel mb-5" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="0"
                            class="active"></button>
                        <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="3"></button>
                    </div>
                    <div class="carousel-inner rounded-3">
                        <div class="carousel-item active">
                            <img src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                class="d-block w-100" alt="Deluxe Suite">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                class="d-block w-100" alt="Deluxe Suite Bathroom">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                class="d-block w-100" alt="Deluxe Suite View">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                class="d-block w-100" alt="Deluxe Suite Sitting Area">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>

                <!-- Room Description -->
                <div class="mb-5">
                    <h2 class="mb-4">Room Description</h2>
                    <p class="lead">Our Lake View Luxury Room offers boutique comfort and stunning Gregory Lake views,
                        making your stay in Nuwara Eliya truly memorable.</p>
                    <p>Spacious and elegantly designed, each room features a king-size bed, private balcony, and
                        spa-style bath. Enjoy modern amenities, complimentary WiFi, and the tranquility of the
                        highlands.</p>
                    <p>Wake up to misty mornings and relax in a setting that blends Sri Lankan charm with contemporary
                        luxury.</p>
                </div>

                <!-- Features & Amenities -->
                <div class="row mb-5">
                    <div class="col-md-6">
                        <h3 class="mb-4">Room Features</h3>
                        <ul class="amenities-list">
                            <li><i class="fas fa-bed"></i> King-size bed with premium linens</li>
                            <li><i class="fas fa-tv"></i> 42" Smart TV with international channels</li>
                            <li><i class="fas fa-wifi"></i> Complimentary high-speed WiFi</li>
                            <li><i class="fas fa-snowflake"></i> Individually controlled air conditioning</li>
                            <li><i class="fas fa-coffee"></i> Nespresso coffee machine</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3 class="mb-4">Bathroom Amenities</h3>
                        <ul class="amenities-list">
                            <li><i class="fas fa-bath"></i> Rainfall shower & soaking tub</li>
                            <li><i class="fas fa-tshirt"></i> Plush bathrobes & slippers</li>
                            <li><i class="fas fa-toilet-paper"></i> Premium toiletries</li>
                            <li><i class="fas fa-user-hair-long"></i> Hair dryer</li>
                            <li><i class="fas fa-weight-hanging"></i> Bathroom scale</li>
                        </ul>
                    </div>
                </div>

                <!-- Additional Services -->
                <div class="mb-5">
                    <h3 class="mb-4">Additional Services</h3>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <i class="fas fa-concierge-bell room-feature-icon"></i>
                                <h5>24/7 Room Service</h5>
                                <p>Enjoy our extensive menu available around the clock</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <i class="fas fa-spa room-feature-icon"></i>
                                <h5>Spa Services</h5>
                                <p>In-room massages and treatments available on request</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <i class="fas fa-car room-feature-icon"></i>
                                <h5>Airport Transfers</h5>
                                <p>Luxury vehicle transfers can be arranged</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonials -->
                <div class="mb-5">
                    <h3 class="mb-4">Guest Reviews</h3>
                    <div class="card mb-3 testimonial-card">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <img src="https://randomuser.me/api/portraits/women/45.jpg" class="rounded-circle me-3"
                                    width="60" height="60" alt="Guest">
                                <div>
                                    <h5 class="mb-1">Sarah Johnson</h5>
                                    <div class="text-warning mb-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <small class="text-muted">Stayed March 2023</small>
                                </div>
                            </div>
                            <p class="card-text">"The Deluxe Mountain View Suite exceeded all our expectations. Waking
                                up to that breathtaking view of Kandy was worth every penny. The bed was incredibly
                                comfortable and the bathroom was like a spa retreat."</p>
                        </div>
                    </div>
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3"
                                    width="60" height="60" alt="Guest">
                                <div>
                                    <h5 class="mb-1">Michael Chen</h5>
                                    <div class="text-warning mb-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <small class="text-muted">Stayed January 2023</small>
                                </div>
                            </div>
                            <p class="card-text">"Exceptional service and attention to detail. The suite was spacious
                                and immaculate, with all the modern amenities we could ask for. The balcony was our
                                favorite spot to enjoy evening tea while watching the sunset over Kandy."</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking Sidebar -->
            <div class="col-lg-4">
                <div class="card shadow-sm sticky-top" style="top: 20px;">
                    <div class="card-body">
                        <h3 class="card-title mb-4" id="booking">Book This Room</h3>
                        <form action="/create-booking">
                            <div class="mb-3">
                                <label for="checkIn" class="form-label">Check-in Date</label>
                                <input type="date" class="form-control" id="checkIn">
                            </div>
                            <div class="mb-3">
                                <label for="checkOut" class="form-label">Check-out Date</label>
                                <input type="date" class="form-control" id="checkOut">
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <label for="adults" class="form-label w-50 m-0">Adults</label>
                                <input type="number" id="adults" min="1" value="1" class="form-control w-50">
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <label for="children" class="form-label w-50 m-0">Children</label>
                                <input type="number" id="children" min="0" value="0" class="form-control w-50">
                            </div>
                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">Check Availability</button>
                            </div>
                            <div class="text-center">
                                <p class="mb-1"><strong>Rs. 1890.00</strong> <small>per night</small></p>
                                <p class="text-muted small">+ taxes and fees</p>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Special Offers -->
                <div class="card mt-4 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Special Offers</h4>
                        <div class="alert alert-success">
                            <h5 class="alert-heading">Stay 3 Nights, Pay for 2</h5>
                            <p class="small mb-0">Book a minimum 3-night stay and enjoy one night on us. Valid until
                                December 15, 2023.</p>
                        </div>
                        <div class="alert alert-info">
                            <h5 class="alert-heading">Honeymoon Package</h5>
                            <p class="small mb-0">Complimentary champagne, fruit basket, and late checkout. Must provide
                                marriage certificate.</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="card mt-4 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Need Help?</h4>
                        <p><i class="fas fa-phone me-2"></i> 0777 611 290</p>
                        <p><i class="fas fa-envelope me-2"></i> info@laksam.lk</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i> No:10, Louis Peiris Mawatha, Kandy</p>
                        <a href="/contact" class="btn btn-outline-primary w-100 mt-2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

@endsection