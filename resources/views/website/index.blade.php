@extends('website.layouts.main')

@section('title', 'home | ST')

@section('head')
<!-- <style>
    h1 { color: red; }
</style> -->
@endsection

@section('content')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="{{ asset('website/assets/img/hero-bg.jpg') }}" alt="no bg image" data-aos="fade-in">

        <div class="container d-flex flex-column align-items-center text-center">
            <h2 data-aos="fade-up" data-aos-delay="100">Explore the World of Real Estate with Expert Insights</h2>
            <p data-aos="fade-up" data-aos-delay="200">Discover the world of real estate with easy and helpful blogs</p>
            <div data-aos="fade-up" data-aos-delay="300">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>
            <p>Helping you understand real estate with clear, simple, and trusted information.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Understanding real estate can be challenging.
                        Through this website, we share easy-to-understand guides on everything related to real estate - market trends, property tips, investment insights, home-buying processes, and the latest industry updates.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> <span>Beginner-friendly real estate guides.
                            </span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Reliable information based on real market insights.
                            </span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Regular blogs to help you stay informed</span></li>
                    </ul>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <p>We publish blogs that are helpful for everyone - from first-time home buyers to experienced investors.
                        Whether you want to buy a property, invest for the future, or simply learn about real estate, our content provides you with the right direction and clarity.</p>
                    <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Your trusted place for easy and reliable real estate support, guidance, and information</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Property Buying Guidance</h3>
                        </a>
                        <p>We help you understand the complete home-buying process with simple, clear, and reliable information.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Real Estate Investment Tips</h3>
                        </a>
                        <p>Learn smart investment strategies to maximize returns and choose the right properties.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Rental Property Advice</h3>
                        </a>
                        <p>Find helpful tips for renting properties, understanding agreements, and avoiding common mistakes.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Home Loan & Finance Guide</h3>
                        </a>
                        <p>Easy explanations of home loans, interest rates, EMI planning, and approval steps.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Market Trends & Insights</h3>
                        </a>
                        <p>Stay updated with the latest real estate market trends, price changes, and location analysis.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-chat-square-text"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Property Maintenance Tips</h3>
                        </a>
                        <p>Get practical advice for home maintenance, renovation, and increasing property value.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="{{ asset('website/assets/img/cta-bg.jpg') }}" alt="">

        <div class="container">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-9 text-center text-xl-start">
                    <h3>Start Your Real Estate Journey Today</h3>
                    <p>Buying, selling, or investing in property becomes easier when you have the right guidance.
                        We provide clear advice, trusted information, and step-by-step support to help you make smart real estate decisions.
                        Start your journey with confidence and let us guide you toward the property that truly fits your needs.</p>
                </div>
                <div class="col-xl-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Start Now</a>
                </div>
            </div>

        </div>

    </section><!-- /Call To Action Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <div class="container">

            <div class="row gy-4">

                <div class="features-image col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100"><img
                        src="{{ asset('website/assets/img/features-bg.jpg') }}" alt=""></div>

                <div class="col-lg-6 order-lg-1">

                    <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-archive flex-shrink-0"></i>
                        <div>
                            <h4>Verified Property Listings</h4>
                            <p>We list only genuine and verified properties so you can search with confidence. Each detail is checked to ensure safety and trust.</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-basket flex-shrink-0"></i>
                        <div>
                            <h4>Expert Market Guidance</h4>
                            <p>Our team provides clear insights on pricing, location, and trends so you can make smart buying or selling decisions.</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-broadcast flex-shrink-0"></i>
                        <div>
                            <h4>Property Tips</h4>
                            <p>Practical advice to help you find, evaluate, and choose the right home without confusion.</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-camera-reels flex-shrink-0"></i>
                        <div>
                            <h4>Dedicated Support</h4>
                            <p>We stay connected with you from the first inquiry to final closing. Fast replies, honest help, and smooth support.</p>
                        </div>
                    </div><!-- End Features Item-->

                </div>

            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <div class="container-fluid">

            <div class="row gy-4">

                <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                    <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                        <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                        <p>
                            Here are some common questions people ask about real estate. I’ve answered them in simple and easy words to help you understand better.
                        </p>
                    </div>

                    <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-item faq-active">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>How can I start learning about real estate?</h3>
                            <div class="faq-content">
                                <p>Real estate is easy to learn if you follow the basics. Start with understanding property types, market trends, and local area rates. My blogs will guide you step by step.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>FIs buying property a safe investment?</h3>
                            <div class="faq-content">
                                <p>Yes, property is one of the safest long-term investments. It grows over time, and you can earn rental income as well. Just make sure you choose the right location.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>What should I check before buying a home?</h3>
                            <div class="faq-content">
                                <p>Always check the property documents, location, builder reputation, basic facilities, and your budget. A quick checklist can save you from future problems.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

                <div class="col-lg-5 order-1 order-lg-2">
                    <img src="{{ asset('website/assets/img/faq.jpg') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
                </div>
            </div>

        </div>

    </section><!-- /Faq Section -->

    <!-- Letest Blogs -->
    @include('website.letestblog')
    <!-- Letest Blogs -->

</main>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $('#ContactPage').removeClass('active');
    $('#HomePage').addClass('active');
});
</script>
@endsection