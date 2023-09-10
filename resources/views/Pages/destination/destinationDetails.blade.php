@extends('Layout.app')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Tour details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Tour details</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="ot-tour-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="tour-details">
                        <div class="tour-header">
                            <h2 class="tour-title">{{ $tour->title }}</h2>
                            <div class="meta-box-wrap">
                                <div class="meta-box">
                                    <div class="meta-box_icon"><i class="fal fa-circle-dollar"></i></div>
                                    <div class="media-body">
                                        <h5 class="meta-box_title">From</h5>
                                        <p class="meta-box_text">${{ $tour->price }}</p>
                                    </div>
                                </div>
                                <div class="meta-box">
                                    <div class="meta-box_icon"><i class="fal fa-clock"></i></div>
                                    <div class="media-body">
                                        <h5 class="meta-box_title">Duration</h5>
                                        <p class="meta-box_text">10 Days, 11 Nights</p>
                                    </div>
                                </div>
                                <div class="meta-box">
                                    <div class="meta-box_icon"><i class="fal fa-location-dot"></i></div>
                                    <div class="media-body">
                                        <h5 class="meta-box_title">Location</h5>
                                        <p class="meta-box_text">{{ $tour->location }}</p>
                                    </div>
                                </div>
                                <div class="meta-box">
                                    <div class="meta-box_icon"><i class="fal fa-users"></i></div>
                                    <div class="media-body">
                                        <h5 class="meta-box_title">Group Size</h5>
                                        <p class="meta-box_text">{{ $tour->group_size }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $imageArray = json_decode($tour->images);
                            $id = $tour->id;
                        @endphp
                        <div class="tour-img"><img src="{{ asset('storage/' . $imageArray[1]) }}" alt="Image"></div>
                        <ul class="nav tour-tab" id="tourTab" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn active" id="description-tab"
                                    data-bs-toggle="tab" href="#tourDescription" role="tab"
                                    aria-controls="tourDescription" aria-selected="true">Information</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="plan-tab"
                                    data-bs-toggle="tab" href="#plan" role="tab" aria-controls="plan"
                                    aria-selected="false">Tour Plan</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="photos-tab"
                                    data-bs-toggle="tab" href="#photos" role="tab" aria-controls="photos"
                                    aria-selected="false">Tour Photos</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="location-tab"
                                    data-bs-toggle="tab" href="#location" role="tab" aria-controls="location"
                                    aria-selected="false">Location</a></li>
                        </ul>
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="tourDescription" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="tour-description">
                                    <h3 class="inner-title">Description</h3>
                                    <p class="mt-n2 mb-4">{!! $tour->description !!}</p>

                                    <div class="description-table-wrap">
                                        <table class="description-table">
                                            <tbody>
                                                <tr>
                                                    <th>Destination</th>
                                                    <td>{{ $tour->location }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Depature</th>
                                                    <td>Yes Required</td>
                                                </tr>
                                                <tr>
                                                    <th>Departure Time</th>
                                                    <td>01 January, 2023 10.00AM</td>
                                                </tr>
                                                <tr>
                                                    <th>Return Time</th>
                                                    <td>08 January, 2023 10.00AM</td>
                                                </tr>
                                                <tr>
                                                    @php
                                                        $data = $tour->Included;
                                                        $includes = explode(',', $data);
                                                    @endphp
                                                    <th>Included</th>

                                                    <td><span>
                                                            @foreach ($includes as $include)
                                                                <i class="fal fa-check"></i>
                                                                include
                                                        </span><br>
                                                        @endforeach
                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="plan" role="tabpanel" aria-labelledby="plan-tab">
                                <div class="tour-plan">
                                    <h3 class="inner-title">Tour Plan</h3>
                                    <div class="accordion" id="planAccordion">
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-1"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                                    aria-expanded="false" aria-controls="collapse-1">Day 01:
                                                    Departure</button></div>
                                            <div id="collapse-1" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-1" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card active">
                                            <div class="accordion-header" id="collapse-item-2"><button
                                                    class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-2" aria-expanded="true"
                                                    aria-controls="collapse-2">Day 02: Adventure Begins</button></div>
                                            <div id="collapse-2" class="accordion-collapse collapse show"
                                                aria-labelledby="collapse-item-2" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-3"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                                    aria-expanded="false" aria-controls="collapse-3">Day 03: Airplain
                                                    Tour</button></div>
                                            <div id="collapse-3" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-3" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-4"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-4"
                                                    aria-expanded="false" aria-controls="collapse-4">Day 04: Jungle
                                                    Sufary</button></div>
                                            <div id="collapse-4" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-4" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-5"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-5"
                                                    aria-expanded="false" aria-controls="collapse-5">Day 05: Explore
                                                    Culloden</button></div>
                                            <div id="collapse-5" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-5" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-6"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-6"
                                                    aria-expanded="false" aria-controls="collapse-6">Day 06: Loch Ness
                                                    and the Isle of Skye</button></div>
                                            <div id="collapse-6" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-6" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-7"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-7"
                                                    aria-expanded="false" aria-controls="collapse-7">Day 07: Walk the
                                                    Walls of Stirling Castle</button></div>
                                            <div id="collapse-7" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-7" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-8"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-8"
                                                    aria-expanded="false" aria-controls="collapse-8">Day 08: Journey to
                                                    Thriving Glasgow</button></div>
                                            <div id="collapse-8" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-8" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-9"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-9"
                                                    aria-expanded="false" aria-controls="collapse-9">Day 09: Farewell
                                                    Glasgow</button></div>
                                            <div id="collapse-9" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-9" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-10"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-10"
                                                    aria-expanded="false" aria-controls="collapse-10">Day 10:
                                                    Return</button></div>
                                            <div id="collapse-10" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-10" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
                                <div class="tour-photos">
                                    @php
                                        $imageArray = json_decode($tour->images);
                                        
                                    @endphp

                                    <div class="row g-4 masonary-active">
                                        @foreach ($imageArray as $image)
                                            <div class="col-md-6 filter-item">
                                                <div class="tour-photo"><img src="{{ asset('storage/' . $image) }}"
                                                        alt="Image">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">

                                <div class="tour-location">
                                    <iframe src="{{ $tour->location_map_link }}" width="400" height="300"
                                        style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="ot-comment-form">
                            <div class="form-title">
                                <h3 class="blog-inner-title">Leave A Reply</h3>
                                <p class="text">Your email address will not be published. Required fields are marked *
                                </p>
                            </div>
                            <div class="row">
                                <div class="form-group rating-select d-flex align-items-center"><label>Your
                                        Rating</label>
                                    <p class="stars"><span><a class="star-1" href="#">1</a> <a class="star-2"
                                                href="#">2</a> <a class="star-3" href="#">3</a> <a
                                                class="star-4" href="#">4</a> <a class="star-5"
                                                href="#">5</a></span></p>
                                </div>
                                <form method="POST"id="reviewForm">
                                    @csrf
                                    <input type="hidden" name="tower_id" value={{ $tour->id }}>
                                    <div class="col-12 form-group">
                                        <textarea placeholder="Write a Message" class="form-control" id="message" name="comment"></textarea>
                                        <i class="text-title far fa-pencil-alt"></i>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Your Name" class="form-control"
                                                    id="name" name="name">

                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Your Email" class="form-control"
                                                    id="email" name="email">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <input id="reviewcheck" name="reviewcheck" type="checkbox">
                                        <label for="reviewcheck">Save my name, email, and website in this browser for the
                                            next time I comment.
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button class="ot-btn" id="post_review">Post Review</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_book">
                            <div class="widget-tour-book">
                                <div class="top">
                                    <h4 class="title">Book This Tour</h4>
                                    <p class="price">${{ $tour->price }} per person</p>
                                </div>
                                <form method="POST" class="widget-form" id="booking_form">
                                    @csrf
                                    <input type="hidden" name="tower_id" value={{ $tour->id }}>
                                    <div class="form-group"><input type="text" class="form-control" name="name"
                                            id="name" placeholder="Your Name"> <i class="fal fa-user"></i></div>
                                    <div class="form-group"><input type="email" class="form-control" name="email"
                                            id="email" placeholder="Your Email"> <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="form-group"><input type="tel" class="form-control" name="number"
                                            id="number" placeholder="Phone Number"> <i class="fal fa-phone"></i></div>

                                    <div class="row">
                                        <div class="col-6 form-group">
                                            <input type="tel" class="form-control" name="adult" id="adult"
                                                placeholder="Adult">

                                        </div>
                                        <div class="col-6 form-group">
                                            <div class="col-6 form-group">
                                                <input type="tel" class="form-control" name="child" id="child"
                                                    placeholder="child">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"><input type="text" class="form-control" name="date"
                                            id="date" placeholder="mm/dd/yyyyy"> <i class="fal fa-calendar-alt"></i>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                            placeholder="Your Message"></textarea> <i class="fal fa-pencil"></i>
                                    </div>
                                    <div class="form-btn"><button class="ot-btn w-100" type="submit"
                                            id="booking_submit">Book now</button></div>
                                    <p class="form-messages mb-0 mt-3"></p>
                                </form>
                            </div>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Last Minute Deals</h3>
                            <div class="recent-post-wrap">
                                @foreach ($towersList as $item)
                                    @php
                                        $imageArray = json_decode($tour->images);
                                        
                                    @endphp
                                    <div class="recent-post">

                                        <div class="media-img"><a href="blog-details.html"><img
                                                    src="{{ asset('storage/' . $imageArray[1]) }}" alt="Blog Image"></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit"
                                                    href="blog-details.html">{{ $item->title }}</a></h4><span
                                                class="tour-price">From <span class="price">{{ $item->price }} per
                                                    person</span></span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="widget widget_banner">
                            <div class="offer-banner">
                                <div class="banner-logo"><img src="assets/img/logo-white.svg" alt="Travon"></div><span
                                    class="banner-subtitle">Happy Holiday</span>
                                <h3 class="banner-title">Adventure Ture</h3>
                                <div class="offer">
                                    <h6 class="offer-title"><span class="text-theme">Travon</span> Special</h6>
                                    <p class="offer-text"><span class="text-theme">30% off</span> On All Booking</p>
                                </div><a href="contact.html" class="ot-btn">Get A Quote</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#reviewForm').on('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Serialize the form data
                var formData = $(this).serialize();

                // Send an AJAX request
                $.ajax({
                    type: 'POST',
                    url: "{{ route('review') }}",
                    data: formData,
                    success: function(response) {
                        // Handle the success response (e.g., show a success message)
                        alert('Review submitted successfully!');

                    },

                });



            });

            $('#booking_form').on('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission
                var csrfToken = $('input[name="_token"]').val();

                // Serialize the form data
                var formData = $(this).serialize();
                // console.log("formData", formData);
                // Send an AJAX request
                $.ajax({
                    type: 'POST',
                    url: "{{ route('booking') }}",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        // Handle the success response (e.g., show a success message)
                        alert('Review submitted successfully!');

                    },

                });



            });
        });
    </script>
@endsection
