@extends('layouts.public-site')

@section('content')

<!-- breadcrumb section start -->
<section class="breadcrumb-section restaurant-bread">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white-clr text-center">
                Contact Us
            </h2>
        </div>
    </div>
</section>

<!-- Contact us View Section -->
<section class="Contacts-section section-padding white-bg fix">
    <div class="container">
        <div class="row g-0 justify-content-center">
            <div class="col-lg-8 mb-5 pb-xxl-3">
                <div
                    class="contact-info-content d-flex flex-sm-nowrap flex-wrap justify-content-sm-between justify-content-center gap-4">
                    <div class="contact-info-item wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon d-center rounded-circle">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="content text-center">
                            <h3 class="black2-clr mb-0">Send us email</h3>
                            <a href="#0" class="fs-18 fw-500 pra-clr">
                                info@laksam.lk
                            </a>
                        </div>
                    </div>
                    <div class="contact-info-item wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon d-center rounded-circle">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="content text-center">
                            <h3 class="black2-clr mb-0">Call us now</h3>
                            <a href="tel:94777611290" class="fs-18 fw-500 pra-clr">
                                0777 611 290
                            </a>
                        </div>
                    </div>
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="1s">
                        <div class="icon d-center rounded-circle">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="content text-center">
                            <h3 class="black2-clr mb-0">Office location</h3>
                            <a href="#0" class="fs-18 fw-500 pra-clr">
                                No:30, Gemunu Pura, Magasthota, <br>Nuwara Eliya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 wow fadeInUp" data-wow-delay=".5s">
                <form action="#0" class="general-inquriest">
                    <h2 class="white-clr mb-lg-4 mb-4 fw-500">General inquiries</h2>
                    <img src="assets/img/element/inq-ele.png" alt="img" class="inque-ele">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="frm-grp">
                                <label for="name" class="fs-18 white-clr mb-xxl-3 mb-2 d-block">Your Name</label>
                                <input type="text" id="name" placeholder="Saman Gunapala">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="frm-grp">
                                <label for="mails" class="fs-18 white-clr mb-xxl-3 mb-2 d-block">Your Email</label>
                                <input type="email" id="mails" placeholder="saman@gmail.com">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="frm-grp">
                                <label for="subs" class="fs-18 white-clr mb-xxl-3 mb-2 d-block">Your Subject</label>
                                <input type="text" id="subs" placeholder="Ex. Support Headline">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="frm-grp">
                                <label for="write" class="fs-18 white-clr mb-xxl-3 mb-2 d-block">Your
                                    Subject</label>
                                <textarea name="mesage" id="write" rows="5" placeholder="Enter your message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a href="/" class="theme-btn fw-normal text-capitalize gap-1 px-6 rounded-0">
                                Submit Now
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<hr>

@endsection