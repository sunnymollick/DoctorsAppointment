@extends('website.layouts.default')

@section('content')
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax"></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="departments.html">Departments</a>
                        </div>
                        <h2>Departments</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================ Start Department Area =================-->
        <section class="department_area section_gap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="main_title">
                            <h2>Medicare Popular Departments</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- single department -->
                    <div class="col-lg-2 text-center col-sm-6">
                        <div class="single_department">
                            <div class="dpmt-thumb">
                                <img src="{{ asset('ui/website') }}/img/department/d-icon1.png" alt="">
                            </div>
                            <h4>Cardiology</h4>
                        </div>
                    </div>
                    <!-- single department -->
                    <div class="col-lg-2 text-center col-sm-6">
                        <div class="single_department">
                            <div class="dpmt-thumb">
                                <img src="{{ asset('ui/website') }}/img/department/d-icon2.png" alt="">
                            </div>
                            <h4>Urology</h4>
                        </div>
                    </div>
                    <!-- single department -->
                    <div class="col-lg-2 text-center col-sm-6">
                        <div class="single_department">
                            <div class="dpmt-thumb">
                                <img src="{{ asset('ui/website') }}/img/department/d-icon3.png" alt="">
                            </div>
                            <h4>Dental Care</h4>
                        </div>
                    </div>
                    <!-- single department -->
                    <div class="col-lg-2 text-center col-sm-6">
                        <div class="single_department">
                            <div class="dpmt-thumb">
                                <img src="{{ asset('ui/website') }}/img/department/d-icon4.png" alt="">
                            </div>
                            <h4>Eye Care</h4>
                        </div>
                    </div>
                    <!-- single department -->
                    <div class="col-lg-2 text-center col-sm-6">
                        <div class="single_department">
                            <div class="dpmt-thumb">
                                <img src="{{ asset('ui/website') }}/img/department/d-icon5.png" alt="">
                            </div>
                            <h4>Neurology</h4>
                        </div>
                    </div>
                    <!-- single department -->
                    <div class="col-lg-2 text-center col-sm-6">
                        <div class="single_department">
                            <div class="dpmt-thumb">
                                <img src="{{ asset('ui/website') }}/img/department/d-icon6.png" alt="">
                            </div>
                            <h4>Plastic Surgery</h4>
                        </div>
                    </div>
                </div>

                <div class="row mt-30">
                    <!-- single department -->
                    <div class="col-lg-2 text-center col-sm-6">
                        <div class="single_department">
                            <div class="dpmt-thumb">
                                <img src="{{ asset('ui/website') }}/img/department/d-icon1.png" alt="">
                            </div>
                            <h4>Cardiology</h4>
                        </div>
                    </div>
                    <!-- single department -->
                    <div class="col-lg-2 text-center col-sm-6">
                        <div class="single_department">
                            <div class="dpmt-thumb">
                                <img src="{{ asset('ui/website') }}/img/department/d-icon2.png" alt="">
                            </div>
                            <h4>Urology</h4>
                        </div>
                    </div>
                    <!-- single department -->
                    <div class="col-lg-2 text-center col-sm-6">
                        <div class="single_department">
                            <div class="dpmt-thumb">
                                <img src="{{ asset('ui/website') }}/img/department/d-icon3.png" alt="">
                            </div>
                            <h4>Dental Care</h4>
                        </div>
                    </div>
                    <!-- single department -->
                    <div class="col-lg-2 text-center col-sm-6">
                        <div class="single_department">
                            <div class="dpmt-thumb">
                                <img src="{{ asset('ui/website') }}/img/department/d-icon4.png" alt="">
                            </div>
                            <h4>Eye Care</h4>
                        </div>
                    </div>
                    <!-- single department -->
                    <div class="col-lg-2 text-center col-sm-6">
                        <div class="single_department">
                            <div class="dpmt-thumb">
                                <img src="{{ asset('ui/website') }}/img/department/d-icon5.png" alt="">
                            </div>
                            <h4>Neurology</h4>
                        </div>
                    </div>
                    <!-- single department -->
                    <div class="col-lg-2 text-center col-sm-6">
                        <div class="single_department">
                            <div class="dpmt-thumb">
                                <img src="{{ asset('ui/website') }}/img/department/d-icon6.png" alt="">
                            </div>
                            <h4>Plastic Surgery</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Department Area =================-->
@endsection
@section('scripts')

@endsection
