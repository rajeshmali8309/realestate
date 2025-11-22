    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Letest Top Blogs</h2>
            <p>Read the latest blogs filled with helpful tips, market insights, and simple guides to make your real estate journey easier.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

    @for($i = 1; $i <= 3; $i++)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="blog-card">

                <!-- IMAGE -->
                <img src="{{ asset('website/assets/img/blog/blog-3.jpg') }}" alt="blog">

                <div class="p-3">

                    <!-- CATEGORY -->
                    <span class="badge bg-success mb-2">Category</span>

                    <!-- DATE -->
                    <small class="d-block text-muted mb-2 fs-7">Jan 10, 2025</small>

                    <!-- TITLE -->
                    <h5 class="fw-semibold">Sample Blog Title {{ $i }}</h5>

                    <!-- DESCRIPTION -->
                    <p class="text-muted" style="font-size:14px;">
                        Short description of the blog goes here…
                    </p>

                    <!-- BUTTON + LIKE + COMMENT -->
                    <div class="d-flex justify-content-between align-items-center mt-3">

                        <!-- Know More Button -->
                        <a href="#" class="btn btn-outline-success btn-sm">Know More</a>

                        <!-- Icons -->
                        <div class="d-flex align-items-center gap-3">

                            <!-- Like (default filled) -->
                            <div class="d-flex align-items-center gap-1">
                                <i class="fa-solid fa-heart" style="color:#e63946; font-size:18px;"></i>
                                <small class="text-muted">2k</small>
                            </div>

                            <!-- Unlike (comment me rakh diya for condition) -->
                            
                            <!-- <div class="d-flex align-items-center gap-1">
                                <i class="fa-regular fa-heart" style="color:#e63946; font-size:18px;"></i>
                                <small class="text-muted">2k</small>
                            </div> -->
                        

                            <!--Comment -->
                            <div class="d-flex align-items-center gap-1">
                                <i class="fa-regular fa-comment-dots" style="color:#059652; font-size:18px;"></i>
                                <small class="text-muted">900</small>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    @endfor

</div>


        </div>

    </section><!-- /Recent Posts Section -->