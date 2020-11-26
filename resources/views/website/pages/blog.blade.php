@extends('website.layouts.default')

@section('content')
        <!--================ Start Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
                <div class="container">
                    <div class="banner_content">
                        <h2>
                            Growing up your <br>
                            children with our most <br>
                            smart monitization <br>
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <a class="primary-btn text-uppercase" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .mar-top{
                margin-top: 3rem;
            }
        </style>
        <!--================ End Home Banner Area =================-->

        <!--================Blog Area =================-->
        <section class="blog_area mar-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog_left_sidebar">
                            <article class="row blog_item">
                                <div class="col-md-4">
                                    <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="blog_post">
                                        <img src="{{ asset('ui/website') }}/img/blog/main-blog/m-blog-1.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html">
                                                <h2>Astronomy Binoculars A Great Alternative</h2>
                                            </a>
                                            <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                                understand why you should have to spend money on boot camp when you can get
                                                the MCSE study materials yourself at a fraction.</p>
                                            <a href="single-blog.html" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                                <div class="col-md-4">
                                    <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="blog_post">
                                        <img src="{{ asset('ui/website') }}/img/blog/main-blog/m-blog-2.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html">
                                                <h2>The Basics Of Buying A Telescope</h2>
                                            </a>
                                            <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                                understand why you should have to spend money on boot camp when you can get
                                                the MCSE study materials yourself at a fraction.</p>
                                            <a href="single-blog.html" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                                <div class="col-md-4">
                                    <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="blog_post">
                                        <img src="{{ asset('ui/website') }}/img/blog/main-blog/m-blog-3.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html">
                                                <h2>The Glossary Of Telescopes</h2>
                                            </a>
                                            <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                                understand why you should have to spend money on boot camp when you can get
                                                the MCSE study materials yourself at a fraction.</p>
                                            <a href="single-blog.html" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                                <div class="col-md-4">
                                    <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="blog_post">
                                        <img src="{{ asset('ui/website') }}/img/blog/main-blog/m-blog-4.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html">
                                                <h2>The Night Sky</h2>
                                            </a>
                                            <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                                understand why you should have to spend money on boot camp when you can get
                                                the MCSE study materials yourself at a fraction.</p>
                                            <a href="single-blog.html" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                                <div class="col-md-4">
                                    <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="blog_post">
                                        <img src="{{ asset('ui/website') }}/img/blog/main-blog/m-blog-5.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html">
                                                <h2>Telescopes 101</h2>
                                            </a>
                                            <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                                understand why you should have to spend money on boot camp when you can get
                                                the MCSE study materials yourself at a fraction.</p>
                                            <a href="single-blog.html" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-left"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a href="#" class="page-link">01</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                    <li class="page-item"><a href="#" class="page-link">03</a></li>
                                    <li class="page-item"><a href="#" class="page-link">04</a></li>
                                    <li class="page-item"><a href="#" class="page-link">09</a></li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-right"></span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
@endsection

@section('scripts')

@endsection
