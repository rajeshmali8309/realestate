@extends('website.layouts.main')

@section('title', 'home | ST')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url('{{ asset('website/assets/img/blog_bg.jpeg') }}')">
        <div class="container position-relative">
            <h1>Blog</h1>
            <p>Read helpful articles, guides, and updates from the real estate world-all in one place.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li class="current">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">
        <div class="container">
            <div class="row">

                <!-- LEFT SIDEBAR -->
                <div class="col-lg-3 mb-4">

                    <input type="text" class="form-control mb-3" placeholder="Search articles...">

                    <button class="category-btn active-ctg">All</button>

                    <h5 class="fw-bold mb-3 mt-3">Categories</h5>

                    <button class="category-btn">Property Buying Guidance</button>
                    <button class="category-btn">Real Estate Investment Tips</button>
                    <button class="category-btn">Rental Property Advice</button>
                    <button class="category-btn">Home Loan & Finance Guide</button>
                    <button class="category-btn">Market Trends & Insights</button>
                    <button class="category-btn">Property Maintenance Tips</button>

                </div>

                <!-- CENTER BLOG GRID -->
                <div class="col-lg-6 mb-4">
                    <div class="row">

                        @for($i = 1; $i <= 6; $i++)
                        <div class="col-md-6 mb-4">
                            <div class="blog-card">

                                <img src="{{ asset('website/assets/img/blog/blog-3.jpg') }}" alt="blog">

                                <div class="p-3">

                                    <span class="badge bg-success mb-2">Category</span>
                                    <small class="d-block text-muted mb-2 fs-7">Jan 10, 2025</small>

                                    <h5>Sample Blog Title {{$i}}</h5>

                                    <p class="text-muted" style="font-size:14px;">
                                        Short description of the blog goes here...
                                    </p>

                                    <div class="d-flex justify-content-between align-items-center">

                                        <!-- KNOW MORE BUTTON -->
                                        <a href="{{route('singleblog')}}" class="btn btn-outline-success btn-sm mt-2">Read More</a>

                                        <!-- LIKE + COMMENT ICONS -->
                                        <div class="d-flex align-items-center gap-3">

                                            <!-- LIKE AREA -->
                                            <div class="d-flex align-items-center gap-1">
                                                <i class="fa-solid fa-heart" style="color:#e63946; font-size:18px;"></i>
                                                <small class="text-muted">2k</small>
                                            </div>

                                            <!-- COMMENT AREA -->
                                            <div class="d-flex align-items-center gap-1">
                                                <i class="fa-regular fa-comment-dots"
                                                    style="color:#059652; font-size:18px;"></i>
                                                <small class="text-muted">900</small>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        @endfor

                        <!-- Pagination -->
                        <nav class="d-flex justify-content-center mt-3">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>

                <!-- RIGHT SIDEBAR -->
                <div class="col-lg-3 mb-4">

                    <h5 class="fw-bold mb-3">Popular Articles</h5>

                    @for($i = 1; $i <= 5; $i++)
                    <div class="right-blog d-flex mb-3">

                        <img src="{{ asset('website/assets/img/blog/blog-2.jpg') }}" 
                             alt="latest" style="width:80px; height:80px; object-fit:cover; margin-right:10px;">

                        <div>
                            <h6 style="font-size:15px; font-weight:600;">Latest Blog Title {{$i}}</h6>

                            <p class="text-muted mb-1" style="font-size:13px;">
                                Short description of latest blog…
                            </p>

                            <!-- <a href="#" class="right-readmore">Know More</a> -->
                        </div>

                    </div>
                    @endfor

                </div>

            </div>
        </div>
    </section>
    <!-- /Blog Posts Section -->

</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#HomePage').removeClass('active');
        $('#ContactPage').removeClass('active');
        $('#BlogPage').addClass('active');

        $('#Aboutpage').addClass('disable-area');
        $('#Servicespage').addClass('disable-area');
        $('#faqpage').addClass('disable-area');
        $('#Letestpage').addClass('disable-area');
    });
</script>

@endsection