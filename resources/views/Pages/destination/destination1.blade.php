@extends('Layout.app')
@section('content')

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Destination</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Destination</li>
            </ul>
        </div>
    </div>
</div>
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="dest-sort-bar">
            <div class="row gy-3 align-items-center justify-content-between">
                <div class="col-sm-auto">
                    <p class="result">Showing 8 out of 24 destination</p>
                </div>
                <div class="col-sm-auto">
                    <form class="tour-ordering" method="get"><select name="orderby"
                            class="orderby form-select nice-select" aria-label="Tour order">
                            <option value="menu_order" disabled="disabled" selected="selected">Default Sorting
                            </option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by latest</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select></form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 mb-35">
                <div class="trip-box">
                    <div class="trip-box__img"><img src="assets/img/trip/dest_2_1.jpg" alt="Trip image"></div>
                    <div class="trip-box__content">
                        <h2 class="trip-box__title box-title"><i class="fas fa-location-dot"></i> <a
                                href="destination-details.html">Switzerland</a></h2><span class="trip-box__count">6+
                            Trips</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-35">
                <div class="trip-box">
                    <div class="trip-box__img"><img src="assets/img/trip/dest_2_2.jpg" alt="Trip image"></div>
                    <div class="trip-box__content">
                        <h2 class="trip-box__title box-title"><i class="fas fa-location-dot"></i> <a
                                href="destination-details.html">Barcelona</a></h2><span class="trip-box__count">8+
                            Trips</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-35">
                <div class="trip-box">
                    <div class="trip-box__img"><img src="assets/img/trip/dest_2_3.jpg" alt="Trip image"></div>
                    <div class="trip-box__content">
                        <h2 class="trip-box__title box-title"><i class="fas fa-location-dot"></i> <a
                                href="destination-details.html">Amsterdam</a></h2><span class="trip-box__count">6+
                            Trips</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-35">
                <div class="trip-box">
                    <div class="trip-box__img"><img src="assets/img/trip/dest_2_4.jpg" alt="Trip image"></div>
                    <div class="trip-box__content">
                        <h2 class="trip-box__title box-title"><i class="fas fa-location-dot"></i> <a
                                href="destination-details.html">Budapest City</a></h2><span
                            class="trip-box__count">5+ Trips</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-35">
                <div class="trip-box">
                    <div class="trip-box__img"><img src="assets/img/trip/dest_2_5.jpg" alt="Trip image"></div>
                    <div class="trip-box__content">
                        <h2 class="trip-box__title box-title"><i class="fas fa-location-dot"></i> <a
                                href="destination-details.html">Maldives</a></h2><span class="trip-box__count">7+
                            Trips</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-35">
                <div class="trip-box">
                    <div class="trip-box__img"><img src="assets/img/trip/dest_2_6.jpg" alt="Trip image"></div>
                    <div class="trip-box__content">
                        <h2 class="trip-box__title box-title"><i class="fas fa-location-dot"></i> <a
                                href="destination-details.html">Indonesia</a></h2><span class="trip-box__count">6+
                            Trips</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-35">
                <div class="trip-box">
                    <div class="trip-box__img"><img src="assets/img/trip/dest_2_7.jpg" alt="Trip image"></div>
                    <div class="trip-box__content">
                        <h2 class="trip-box__title box-title"><i class="fas fa-location-dot"></i> <a
                                href="destination-details.html">Bangkok</a></h2><span class="trip-box__count">5+
                            Trips</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-35">
                <div class="trip-box">
                    <div class="trip-box__img"><img src="assets/img/trip/dest_2_8.jpg" alt="Trip image"></div>
                    <div class="trip-box__content">
                        <h2 class="trip-box__title box-title"><i class="fas fa-location-dot"></i> <a
                                href="destination-details.html">Nepal</a></h2><span class="trip-box__count">7+
                            Trips</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ot-pagination mt-3 text-center">
            <ul>
                <li><a href="blog.html">1</a></li>
                <li><a href="blog.html">2</a></li>
                <li><a href="blog.html">3</a></li>
                <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<section class="" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
    <div class="container">
        <div class="newsletter-wrap" data-bg-src="assets/img/bg/subscribe_bg_1.svg">
            <h2 class="sec-title text-white mb-2">Get Special Offers And More From Travon</h2>
            <p class="text-white fs-md mb-4">Sign up now and get the best deals straight in your inbox!</p>
            <form class="newsletter-form">
                <div class="form-group"><input class="form-control" type="email" placeholder="Email Address"
                        required=""> <i class="fal fa-envelope"></i></div><button type="submit"
                    class="ot-btn">Subscribe</button>
            </form>
        </div>
    </div>
</section>

@endsection