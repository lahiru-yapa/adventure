@extends('Layout.app')
@section('content')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Image And Video Gallery</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Image And Video Gallery</li>
            </ul>
        </div>
    </div>
</div>
<div class="space">
    <div class="container">
        <div class="title-area text-center"><span class="sub-title justify-content-center"><span
                    class="shape left"><span class="dots"></span></span> Travel Image <span
                    class="shape right"><span class="dots"></span></span></span>
            <h2 class="sec-title">Image Gallery</h2>
        </div>
        <div class="row gy-30 masonary-active">
            <div class="col-md-6 col-xxl-auto filter-item">
                <div class="gallery-card">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image"> <a
                            href="assets/img/gallery/gallery_1_1.jpg" class="gallery-btn popup-image"><i
                                class="fas fa-eye"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-auto filter-item">
                <div class="gallery-card">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_1_2.jpg" alt="gallery image"> <a
                            href="assets/img/gallery/gallery_1_2.jpg" class="gallery-btn popup-image"><i
                                class="fas fa-eye"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-auto filter-item">
                <div class="gallery-card">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_1_3.jpg" alt="gallery image"> <a
                            href="assets/img/gallery/gallery_1_3.jpg" class="gallery-btn popup-image"><i
                                class="fas fa-eye"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-auto filter-item">
                <div class="gallery-card">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_1_4.jpg" alt="gallery image"> <a
                            href="assets/img/gallery/gallery_1_4.jpg" class="gallery-btn popup-image"><i
                                class="fas fa-eye"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-auto filter-item">
                <div class="gallery-card">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_1_5.jpg" alt="gallery image"> <a
                            href="assets/img/gallery/gallery_1_5.jpg" class="gallery-btn popup-image"><i
                                class="fas fa-eye"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-auto filter-item">
                <div class="gallery-card">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_1_6.jpg" alt="gallery image"> <a
                            href="assets/img/gallery/gallery_1_6.jpg" class="gallery-btn popup-image"><i
                                class="fas fa-eye"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-smoke space">
    <div class="container">
        <div class="title-area text-center"><span class="sub-title justify-content-center"><span
                    class="shape left"><span class="dots"></span></span> Travel Video <span
                    class="shape right"><span class="dots"></span></span></span>
            <h2 class="sec-title">Video Gallery</h2>
        </div>
        <div class="row gy-30 masonary-active">
            <div class="col-md-6 col-xxl-auto filter-item">
                <div class="gallery-video">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_2_1.jpg" alt="gallery image"> <a
                            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                class="far fa-play"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-auto filter-item">
                <div class="gallery-video">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_2_2.jpg" alt="gallery image"> <a
                            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                class="far fa-play"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-auto filter-item">
                <div class="gallery-video">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_2_3.jpg" alt="gallery image"> <a
                            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                class="far fa-play"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-auto filter-item">
                <div class="gallery-video">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_2_4.jpg" alt="gallery image"> <a
                            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                class="far fa-play"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-auto filter-item">
                <div class="gallery-video">
                    <div class="gallery-img"><img src="assets/img/gallery/gallery_2_5.jpg" alt="gallery image"> <a
                            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                class="far fa-play"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="bg-smoke" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
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