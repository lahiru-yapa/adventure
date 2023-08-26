@extends('Layout.app')
@section('content')

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<div class="space">
    <div class="container">
        <div class="row gy-40">
            <div class="col-xl-5">
                <div class="contact-info-wrap">
                    <div class="shape-img"><img src="assets/img/shape/contact_shape.png" alt="shape"></div>
                    <h3 class="border-title2">Contact Info</h3>
                    <div class="contact-info-box">
                        <div class="contact-info">
                            <h4 class="contact-info__title">Contact Number:</h4>
                            <div class="contact-info__icon"><i class="fal fa-phone"></i></div>
                            <div class="media-body"><span class="contact-info__text"><a
                                        href="tel:+65485965789">(+65) - 48596 - 5789</a> <a
                                        href="tel:+65485965789">+65-48596-5789</a></span></div>
                        </div>
                        <div class="contact-info">
                            <h4 class="contact-info__title">Mail Address:</h4>
                            <div class="contact-info__icon bg-theme"><i class="fal fa-envelope"></i></div>
                            <div class="media-body"><span class="contact-info__text"><a
                                        href="mailto:info@travon.com">info@travon.com</a> <a
                                        href="mailto:info.example@gmail.com">info.example@gmail.com</a></span></div>
                        </div>
                        <div class="contact-info">
                            <h4 class="contact-info__title">Office Address:</h4>
                            <div class="contact-info__icon bg-title"><i class="fal fa-location-dot"></i></div>
                            <div class="media-body"><span class="contact-info__text">Burnsville, MN 55337
                                    Streat,<br>United States</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="contact-map"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuzsoft!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                        allowfullscreen="" loading="lazy"></iframe></div>
            </div>
        </div>
    </div>
</div>
<div class="space-bottom" data-bg-src="assets/img/bg/contact_bg_1.png">
    <div class="container">
        <form action="mail.php" method="POST" class="contact-form ajax-contact">
            <h3 class="form-title">Make An Appointment</h3>
            <div class="row">
                <div class="form-group col-md-6"><input type="text" class="form-control style3" name="name"
                        id="name" placeholder="Your Name"> <i class="fal fa-user"></i></div>
                <div class="form-group col-md-6"><input type="email" class="form-control style3" name="email"
                        id="email" placeholder="Email Address"> <i class="fal fa-envelope"></i></div>
                <div class="form-group col-md-6"><input type="tel" class="form-control style3" name="number"
                        id="number" placeholder="Phone Number"> <i class="fal fa-phone"></i></div>
                <div class="form-group col-md-6"><input type="text" class="form-control style3" name="subject"
                        id="subject" placeholder="Queary Topic"> <i class="fal fa-file-invoice"></i></div>
                <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                        class="form-control style3" placeholder="Your Message"></textarea> <i
                        class="fal fa-pencil"></i></div>
                <div class="form-btn col-12"><button class="ot-btn">Send Message Now</button></div>
            </div>
            <p class="form-messages mb-0 mt-3"></p>
        </form>
    </div>
</div>
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