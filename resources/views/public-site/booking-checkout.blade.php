@extends('layouts.public-site')

@section('content')

<!-- breadcrumb section start -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white-clr text-center">
                Complete Reservations
            </h2>
        </div>
    </div>
</section>

<!-- Blog section start -->
<section class="blog-grid-section fix section-padding white-bg">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-7 col-lg-8">
                <form action="#0" class="belling-address">
                    <h3 class="black2-clr mb-4 pb-xxl-2">
                        Billing Details
                    </h3>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Last Name">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" placeholder="Company Name">
                        </div>
                        <div class="col-lg-12">
                            <select name="region">
                                <option value="1">Country / Region*</option>
                                <option value="2">...</option>
                                <option value="3">....</option>
                                <option value="4">...</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" placeholder="House number and street name">
                        </div>
                        <div class="col-lg-12">
                            <select name="region">
                                <option value="1">Town / City</option>
                                <option value="2">...</option>
                                <option value="3">....</option>
                                <option value="4">...</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" placeholder="State">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" placeholder="Zip Code">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" placeholder="Phone">
                        </div>
                        <div class="col-lg-12">
                            <input type="email" placeholder="E-mail Address">
                        </div>
                        <div class="col-lg-12 mt-4 pt-xxl-3">
                            <h3 class="mb-3 black-clr">
                                Additional Information
                            </h3>
                            <textarea rows="5" name="ordernote" placeholder="Order Note (Optional) "></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="details-common-box mb-4">
                    <h6 class="black-clr mb-lg-4 mb-3">Your Order</h6>
                    <ul class="common-listing">
                        <li class="pb-2">
                            <a href="javascript:void(0)"
                                class="d-flex align-items-center justify-content-between gap-3">
                                <span class="fs-16 fw-semibold black2-clr">Product</span>
                                <span class="fs-16 fw-semibold black2-clr">Subtotal</span>
                            </a>
                        </li>
                        <li class="cmn-detail-line mb-4"></li>
                        <li class="pb-0">
                            <a href="javascript:void(0)"
                                class="d-flex align-items-center justify-content-between gap-3">
                                <span class="fs-13 fw-500 black2-clr">Room 1</span>
                                <span class="fs-13 fw-500 black2-clr">Rs 4400.00</span>
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="javascript:void(0)"
                                class="d-flex align-items-center justify-content-between gap-3">
                                <span class="fs-13 fw-500 black2-clr">Room 2</span>
                                <span class="fs-13 fw-500 black2-clr">Rs 1100.00</span>
                            </a>
                        </li>
                        <li class="pb-2">
                            <a href="javascript:void(0)"
                                class="d-flex align-items-center justify-content-between gap-3">
                                <span class="fs-16 fw-500 black2-clr">Subtotal</span>
                                <span class="fs-16 fw-500 black2-clr">Rs 5500.00</span>
                            </a>
                        </li>
                        <li class="cmn-detail-line mb-3"></li>
                        <li class="pb-2">
                            <a href="javascript:void(0)"
                                class="d-flex align-items-center justify-content-between gap-3">
                                <span class="fs-16 fw-500 black2-clr">Total</span>
                                <span class="fs-16 fw-500 black2-clr">Rs 5500.00</span>
                            </a>
                        </li>
                        <li class="cmn-detail-line mb-0"></li>
                    </ul>
                </div>
                <div class="details-common-box mb-4">
                    <h6 class="black-clr mb-lg-4 mb-3">Payment</h6>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label fs-16 fw-500 black2-clr" for="flexCheckDefault">
                            Direct bank transfer
                        </label>
                    </div>
                    <p class="black2-clr p-0 fs-14 mb-sm-3 mb-3 pe-xxl-5">
                        Make your payment directly into
                        our bank account. Please use your
                        Order ID as the payment reference.
                        Your order will not be shipped until
                        the funds have cleared in our
                        account.
                    </p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                        <label class="form-check-label fs-16 fw-500 black2-clr" for="flexCheckDefault2">
                            Credit / Debit Card
                        </label>
                    </div>
                </div>
                <a href="#" onclick="alert('Order placed successfully!');"
                    class="theme-btn w-100 d-center fw-normal text-capitalize gap-2 rounded-2 fs-16">
                    Place Your Order
                </a>
            </div>
        </div>
    </div>
</section>

<hr>

@endsection