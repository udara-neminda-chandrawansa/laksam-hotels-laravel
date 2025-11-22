@extends('layouts.public-site')

@section('content')

<!-- breadcrumb section start -->
<section class="breadcrumb-section restaurant-bread">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white-clr text-center">
                Lake View Restaurant
            </h2>
        </div>
    </div>
</section>

<!-- City View Section -->
<section class="city-view-section section-padding fix">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-5 d-center city-view-content-wrap stylev2">
                <div class="city-view-content">
                    <h2 class="fw-bold mb-4">Lakefront Dining in Nuwara Eliya</h2>
                    <p class="lead">At Laksam Hotels, our Lake View Restaurant blends authentic Sri Lankan flavors with
                        international cuisine, all served with breathtaking views of Gregory Lake.</p>
                    <p>Enjoy a relaxed atmosphere, fresh local ingredients, and a menu that celebrates the best of the
                        highlands. Whether it's a family meal or a romantic dinner, our restaurant is the perfect
                        setting for any occasion.</p>
                </div>
            </div>
            <div class="col-xxl-7 d-center">
                <div class="city-slider-wrap swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="city-item img-hover w-100">
                                <img src="assets/img/testimonial/city1.jpg" alt="img" class="w-100">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="city-item img-hover w-100">
                                <img src="assets/img/testimonial/city2.jpg" alt="img" class="w-100">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="city-item img-hover w-100">
                                <img src="assets/img/testimonial/city3.jpg" alt="img" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="pb-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
                    alt="Restaurant Interior" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Our Culinary Story</h2>
                <p class="lead">Laksam Hotels brings you a unique dining experience in the heart of Nuwara Eliya. Our
                    chefs craft each dish with care, using the freshest local produce and spices.</p>
                <p>Located by the tranquil Gregory Lake, our restaurant offers a serene setting and warm Sri Lankan
                    hospitality. From traditional rice and curry to international favorites, there's something for
                    everyone.</p>
                <p>Celebrate your special moments with us and enjoy the best of highland cuisine.</p>
                <div class="mt-4">
                    <a href="#" class="btn btn-outline-dark">Learn More About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Specialties Section -->
<section class="py-5 specialty-bg">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Signature Dishes</h2>
            <p class="lead text-muted">Taste the essence of Sri Lanka and the highlands with our chef's specialties</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 menu-item shadow-sm">
                    <img src="assets/img/restaurant/kottu.webp" class="card-img-top dish-img" alt="Kottu Roti">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">Kandy Spiced Kottu Roti</h5>
                        <p class="card-text text-muted">Our signature version of Sri Lanka's famous street food, made
                            with hand-chopped roti, fresh vegetables, and a secret blend of spices.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-warning">LKR 1,200</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 menu-item shadow-sm">
                    <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                        class="card-img-top dish-img" alt="Lamprais">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">Dutch-influenced Lamprais</h5>
                        <p class="card-text text-muted">A traditional Sri Lankan dish with Dutch roots - fragrant rice
                            cooked in stock, accompanied by meat curry, seeni sambol, and frikkadels.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-warning">LKR 1,800</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 menu-item shadow-sm">
                    <img src="https://images.unsplash.com/photo-1603360946369-dc9bb6258143?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                        class="card-img-top dish-img" alt="Hoppers">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">Kandy Egg Hoppers</h5>
                        <p class="card-text text-muted">Crispy bowl-shaped pancakes made with fermented rice flour and
                            coconut milk, served with our special Kandy-style sambols.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-warning">LKR 950</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menu Section -->
<section class="py-5" id="menu">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Menu</h2>
            <p class="lead text-muted">A culinary journey through Nuwara Eliya's diverse flavors</p>
        </div>

        <ul class="nav nav-tabs justify-content-center mb-4" id="menuTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="starters-tab" data-bs-toggle="tab" data-bs-target="#starters"
                    type="button" role="tab">Starters</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="mains-tab" data-bs-toggle="tab" data-bs-target="#mains" type="button"
                    role="tab">Main Courses</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="desserts-tab" data-bs-toggle="tab" data-bs-target="#desserts" type="button"
                    role="tab">Desserts</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="drinks-tab" data-bs-toggle="tab" data-bs-target="#drinks" type="button"
                    role="tab">Drinks</button>
            </li>
        </ul>

        <div class="tab-content" id="menuTabsContent">
            <div class="tab-pane fade show active" id="starters" role="tabpanel">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                    alt="Starter" width="100" height="100" class="rounded me-3">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>Pol Sambol with Fresh Coconut</h5>
                                <p class="text-muted">A spicy coconut relish with chili, lime, and Maldive fish</p>
                                <span class="fw-bold text-warning">LKR 650</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                    alt="Starter" width="100" height="100" class="rounded me-3">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>Spicy Prawn Vade</h5>
                                <p class="text-muted">Crispy lentil fritters with spiced prawns</p>
                                <span class="fw-bold text-warning">LKR 850</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                    alt="Starter" width="100" height="100" class="rounded me-3">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>Kandy Mixed Platter</h5>
                                <p class="text-muted">Selection of local bites including fish cutlets, chicken rolls,
                                    and vegetable patties</p>
                                <span class="fw-bold text-warning">LKR 1,200</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                    alt="Starter" width="100" height="100" class="rounded me-3">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>Wood Apple Juice</h5>
                                <p class="text-muted">Refreshing local fruit juice with a hint of spice</p>
                                <span class="fw-bold text-warning">LKR 550</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="mains" role="tabpanel">
                <!-- Main courses content would go here -->
                <p class="text-center">Our main courses feature the best of Sri Lankan cuisine with international
                    influences.</p>
            </div>
            <div class="tab-pane fade" id="desserts" role="tabpanel">
                <!-- Desserts content would go here -->
                <p class="text-center">Sweet endings to your meal with tropical flavors.</p>
            </div>
            <div class="tab-pane fade" id="drinks" role="tabpanel">
                <!-- Drinks content would go here -->
                <p class="text-center">Refreshing beverages including Ceylon tea cocktails and fresh juices.</p>
            </div>
        </div>
    </div>
</section>

<hr>

@endsection