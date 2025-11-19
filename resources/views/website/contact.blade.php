@extends('website.layouts.main')

@section('title', 'home | ST')

@section('head')
<!-- <style>
    h1 { color: red; }
</style> -->
@endsection

@section('content')

<main class="main">
    <div id="contact">

        <!-- Hero Section -->
        <section class="hero section dark-background">

            <img src="{{ asset('website/assets/img/contact_bg.jpeg') }}" alt="no bg image" data-aos="fade-in">

            <div class="container d-flex flex-column align-items-center text-center">
                <h2 data-aos="fade-up" data-aos-delay="100">Contact</h2>
                <!-- <p data-aos="fade-up" data-aos-delay="200">Contact Us For Any Query</p> -->
                <div data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('contact') }}" class="contact-icon-btn">
                        <i class="bi bi-telephone-fill"></i>
                    </a>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Contact Section -->
        <section class="contact section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us For Any Query</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>Odhav, Ahmedabad</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+91 8302803362</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>rajeshk67003@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit">submit</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->
    </div>

    <!-- Letest Blogs -->
    @include('website.letestblog')
    <!-- Letest Blogs -->

</main>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#HomePage').removeClass('active');
        $('#ContactPage').addClass('active');

        $('#Aboutpage').hide();
        $('#Servicespage').hide();
        $('#faqpage').hide();
        // $('#Letestpage').hide();
    });
</script>
@endsection