@extends("layouts.app")

@section('content')

  <!-- Preloader-->
<div id="preloader">
    <div class="go-meetup-load"></div>
</div>
<!-- Start Header Area -->
<header class="header navbar-area style2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">
                    <!-- Start Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand style2" href="">
                            <img src="assets/images/logo/logo.png" alt="Logo">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</header>
<!-- End Header Area -->

<!-- Start Hero Area -->
<section id="home" class="hero-area style2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                    <img src="assets/images/hero/woman-image.png" alt="#">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="hero-content wow fadeInLeft" data-wow-delay=".3s">
                    <h1>Join us for a live discussion about IELTS </h1>
                    <p>We are hosting online IELTS classes and live discussions. Register now to join us and learn how to improve your IELTS score.</p>
                    <livewire:subscription-form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->


<!-- Start Pricing Table Area -->
<section id="pricing" class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title call-action ">
                    <div class="text" >
                    <h2 style="color: #ee163b">Upcoming Sessions</span>
                    </h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Table -->
                <div class="single-table wow fadeInUp" data-wow-delay=".4s">
                    <!-- Table Head -->
                    <div class="table-head">
                        <h4 class="title">Session -1</h4>
                        <p>True False or Not given</p>
                        <div class="price">
                            <h2 class="amount">$24<span class="duration">/mo</span></h2>
                        </div>
                    </div>
                    <!-- End Table Head -->
                    <!-- Start Table Content -->
                    <div class="table-content">
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="lni lni-checkmark-circle"></i> Cras justo odio.</li>
                            <li><i class="lni lni-checkmark-circle"></i> Dapibus ac facilisis in.</li>
                            <li><i class="lni lni-checkmark-circle"></i> Morbi leo risus.</li>
                            <li><i class="lni lni-checkmark-circle"></i> Potenti felis, in cras ligula.</li>
                        </ul>
                        <!-- End Table List -->
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Register</a>
                        </div>
                    </div>
                    <!-- End Table Content -->
                </div>
                <!-- End Single Table-->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Table -->
                <div class="single-table wow fadeInUp" data-wow-delay=".6s">
                    <!-- Table Head -->
                    <div class="table-head">
                        <h4 class="title">Session - 2</h4>
                        <p>Reading Tips for Advance Level</p>
                        <div class="price">
                            <h2 class="amount">$32<span class="duration">/mo</span></h2>
                        </div>
                    </div>
                    <!-- End Table Head -->
                    <!-- Start Table Content -->
                    <div class="table-content">
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="lni lni-checkmark-circle"></i> Cras justo odio.</li>
                            <li><i class="lni lni-checkmark-circle"></i> Dapibus ac facilisis in.</li>
                            <li><i class="lni lni-checkmark-circle"></i> Morbi leo risus.</li>
                            <li><i class="lni lni-checkmark-circle"></i> Potenti felis, in cras ligula.</li>
                        </ul>
                        <!-- End Table List -->
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Register</a>
                        </div>
                    </div>
                    <!-- End Table Content -->
                </div>
                <!-- End Single Table-->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Table -->
                <div class="single-table wow fadeInUp" data-wow-delay=".8s">
                    <!-- Table Head -->
                    <div class="table-head">
                        <h4 class="title">Session -3</h4>
                        <p>Listening Test advance Tips</p>
                        <div class="price">
                            <h2 class="amount">$48<span class="duration">/mo</span></h2>
                        </div>
                    </div>
                    <!-- End Table Head -->
                    <!-- Start Table Content -->
                    <div class="table-content">
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="lni lni-checkmark-circle"></i> Cras justo odio.</li>
                            <li><i class="lni lni-checkmark-circle"></i> Dapibus ac facilisis in.</li>
                            <li><i class="lni lni-checkmark-circle"></i> Morbi leo risus.</li>
                            <li><i class="lni lni-checkmark-circle"></i> Potenti felis, in cras ligula.</li>
                        </ul>
                        <!-- End Table List -->
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Register</a>
                        </div>
                    </div>
                    <!-- End Table Content -->
                </div>
                <!-- End Single Table-->
            </div>
        </div>
    </div>
</section>
<!--/ End Pricing Table Area -->

<!-- Start Team -->
<section id="" class="team section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Who we are</h2>
                    <p class="text-justify" style="">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!--/ End Team Area -->

<!-- Start Testimonials Section -->
<section id="testimonials" class="section testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Testimonials</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">10,000+ people love us</h2>

                </div>
            </div>
        </div>
        <div class="slider-head">
            <div class="row testimonial-slider">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="top-section">
                            <img src="assets/images/testimonial/testi2.jpg" alt="#">
                            <h3>
                                Aaron Almaraz
                                <span>CEO & Founder at Gearat</span>
                            </h3>
                            <ul class="rating">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                        <p>Time is the most precious thing you have when bootstrapping. You can't take time to
                            ponder on
                            design…</p>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="top-section">
                            <img src="assets/images/testimonial/testi5.jpg" alt="#">
                            <h3>
                                Marleah Eagleston
                                <span>Founder at Spicenet</span>
                            </h3>
                            <ul class="rating">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                        <p>Time is the most precious thing you have when bootstrapping. You can't take time to
                            ponder on
                            design…</p>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="top-section">
                            <img src="assets/images/testimonial/testi3.jpg" alt="#">
                            <h3>
                                Phet Putrie
                                <span>Freelancer</span>
                            </h3>
                            <ul class="rating">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                        <p>Time is the most precious thing you have when bootstrapping. You can't take time to
                            ponder on
                            design…</p>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="top-section">
                            <img src="assets/images/testimonial/testi2.jpg" alt="#">
                            <h3>
                                Prescott MacCaffery
                                <span>Writer</span>
                            </h3>
                            <ul class="rating">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                        <p>Time is the most precious thing you have when bootstrapping. You can't take time to
                            ponder on
                            design…</p>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="top-section">
                            <img src="assets/images/testimonial/testi4.jpg" alt="#">
                            <h3>
                                Lara Madrigal
                                <span>Marketing Specialist</span>
                            </h3>
                            <ul class="rating">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                        <p>Time is the most precious thing you have when bootstrapping. You can't take time to
                            ponder on
                            design…</p>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="top-section">
                            <img src="assets/images/testimonial/testi3.jpg" alt="#">
                            <h3>
                                Waiapi Karaka
                                <span>Designer, Freelancer</span>
                            </h3>
                            <ul class="rating">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                        <p>Time is the most precious thing you have when bootstrapping. You can't take time to
                            ponder on
                            design…</p>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Testimonials Section -->

<!-- Start Newsletter Area -->
<section class="section newsletter">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="content">
                    <h5>Join our community</h5>
                    <h3>Get latest app updates<br> Right at your inbox</h3>
                    <form action="#" method="get" target="_blank" class="newsletter-form">
                        <input name="email" type="email" placeholder="Your email address">
                        <div class="button">
                            <button type="button" class="btn">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 col-sm-12 col-xs-12">
                <div class="image">
                    <img src="assets/images/newsletter/newsletter-img.png" alt="#" height="500px" width="auto">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Newsletter Area -->

<!-- Start Call Action Area -->
<section id="home" class="hero-area style2 " style="padding: 50px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="text">
                    <div class="hero-content wow fadeInLeft" data-wow-delay=".3s">
                        <h1>Join us for a live discussion about IELTS </h1>

                        <livewire:subscription-form>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="button" style="float:right">
                    <a href="javascript:void(0)" class="btn"><i class="lni lni-facebook-original"></i> Facebook Page
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call Action Area -->

@endsection
