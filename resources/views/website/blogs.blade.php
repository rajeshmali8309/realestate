@extends('website.layouts.main')

@section('title', 'home | ST')

@section('head')
<!-- <style>
    h1 { color: red; }
</style> -->
@endsection

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('website/assets/img/page-title-bg.webp') }}')"
>
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
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

        <div class="container">
            <div style="background-color: yellow;">
                <p>hello world</p>
            </div>
        </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

        <div class="container">
            <div class="d-flex justify-content-center">
                <ul>
                    <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>...</li>
                    <li><a href="#">10</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>

    </section><!-- /Blog Pagination Section -->

</main>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#HomePage').removeClass('active');
        $('#ContactPage').removeClass('active');

        $('#BlogPage').addClass('active');

        $('#Aboutpage').hide();
        $('#Servicespage').hide();
        $('#faqpage').hide();
        // $('#Letestpage').hide();
    });
</script>
@endsection