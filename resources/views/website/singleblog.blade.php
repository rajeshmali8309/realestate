@extends('website.layouts.main')

@section('title', 'home | ST')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url('{{ asset('website/assets/img/single_bg.jpeg') }}')">
        <div class="container position-relative">
            <p class="fs-3">Read helpful articles, guides, and updates from the real estate world-all in one place.</p>
            <nav class="breadcrumbs">
                <ol>
                    <button onclick="window.history.back()" class="btn btn-theme btn-sm mt-2">Back</button>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Single Blog section-->
    <section id="blog-posts" class="blog-posts section">
        <div class="container">

            <div class="row g-4">

                <!-- LEFT AREA (60%) -->
                <div class="col-lg-7 col-md-7 col-12">

                    <div class="single-post">

                        <!-- Blog Thumbnail -->
                        <div class="post-thumbnail mb-4">
                            <img src="{{ asset('website/assets/img/blog/blog-3.jpg') }}"
                                alt="Blog Image" class="img-fluid w-100 rounded shadow-sm">
                        </div>

                        <!-- Date, Category & Icons -->
                        <div class="post-meta mb-3 d-flex align-items-center justify-content-between">

                            <!-- LEFT SIDE: Date & Category -->
                            <div>
                                <span class="post-date">January 10, 2025</span>
                                <span class="sep">|</span>
                                <span class="post-category">Real Estate</span>
                            </div>

                            <!-- RIGHT SIDE: Like + Comment -->
                            <div class="d-flex align-items-center gap-3">
                                <!-- LIKE AREA -->
                                <div class="d-flex align-items-center gap-1">
                                    <i class="fa-solid fa-heart" style="color:#e63946; font-size:20px;"></i>
                                    <small class="text-muted">2k</small>
                                </div>

                                <!-- COMMENT AREA -->
                                <div class="d-flex align-items-center gap-1">
                                    <i class="fa-regular fa-comment-dots"
                                        style="color:#059652; font-size:20px;"></i>
                                    <small class="text-muted">900</small>
                                </div>

                            </div>

                        </div>

                        <!-- Blog Title -->
                        <h2 class="post-title mb-3">Sample Static Blog Title</h2>

                        <!-- Blog Content -->
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vestibulum non dignissim lacus. Integer fermentum erat
                                in sem efficitur, eu placerat magna sagittis.</p>

                            <p><strong>Aliquam erat volutpat.</strong> Vivamus vulputate libero at
                                ex dapibus, vitae condimentum est tincidunt. Cras
                                facilisis orci mi, ac elementum magna ultricies sit amet.</p>

                            <p>Donec ac pharetra odio. Nulla facilisi. Mauris posuere
                                velit quam, non luctus elit bibendum id.</p>
                        </div>

                    </div>
                </div>

                <!-- RIGHT SIDEBAR (40%) -->
                <div class="col-lg-5 col-md-5 col-12">

                    <div class="sidebar">

                        <h3 class="sidebar-title text-center fs-2">Popular Posts</h3>

                        <ul class="recent-posts-list">
                            @for($i = 1; $i <= 10; $i++)
                                <li class="recent-item mb-3 text-center">
                                    <a href="#" class="recent-title">How to Start Real Estate Investing</a>
                                </li>
                            @endfor
                        </ul>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- /Single Blog section -->

</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {});
</script>

@endsection