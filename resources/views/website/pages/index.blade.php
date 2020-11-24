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
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua.
					</p>
					<a class="primary-btn text-uppercase" href="#">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Blog Area =================-->
	<section class="section_gap blog_area">
		<div class="container">
			<div class="row">
				<!-- recent blog -->
				<div class="col-lg-6">
					<div class="recent_blog">
						<div class="blog_title">
							<h2>Our Recent Blogs</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua.</p>
						</div>
					</div>
					<div class="row">
						<!-- single-blog -->
						<div class="col-lg-12 col-sm-12">
							<div class="single_blog">
								<div class="row align-items-center">
									<div class="col-lg-4 col-md-3">
										<div class="blog_thumb">
											<img class="img-fluid" src="{{ asset('ui/website') }}/img/recent-blog/blog1.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-8 col-md-8">
										<div class="blog_details">
											<div class="blog_meta">
												<span><i class="fa fa-calendar"></i>13th Dec</span>
												<span><i class="fa fa-heart-o"></i>15</span>
												<span><i class="fa fa-comment-o"></i>04</span>
											</div>
											<h4>
												<a href="#">Portable Fashion for women</a>
											</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- single-blog -->
						<div class="col-lg-12 col-sm-12">
							<div class="single_blog">
								<div class="row align-items-center">
									<div class="col-lg-4 col-md-3">
										<div class="blog_thumb">
											<img class="img-fluid" src="{{ asset('ui/website') }}/img/recent-blog/blog2.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-8 col-md-8">
										<div class="blog_details">
											<div class="blog_meta">
												<span><i class="fa fa-calendar"></i>13th Dec</span>
												<span><i class="fa fa-heart-o"></i>15</span>
												<span><i class="fa fa-comment-o"></i>04</span>
											</div>
											<h4>
												<a href="#">Portable Fashion for women</a>
											</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- single-blog -->
						<div class="col-lg-12 col-sm-12">
							<div class="single_blog">
								<div class="row align-items-center">
									<div class="col-lg-4 col-md-3">
										<div class="blog_thumb">
											<img class="img-fluid" src="{{ asset('ui/website') }}/img/recent-blog/blog3.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-8 col-md-8">
										<div class="blog_details">
											<div class="blog_meta">
												<span><i class="fa fa-calendar"></i>13th Dec</span>
												<span><i class="fa fa-heart-o"></i>15</span>
												<span><i class="fa fa-comment-o"></i>04</span>
											</div>
											<h4>
												<a href="#">Portable Fashion for women</a>
											</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- appoinment area -->
				<div id="appointment" class="col-lg-6">
					<div class="recent_blog appoinment">
						<div class="blog_title">
							<h2>Make an Appointment</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua.</p>
						</div>
						</div>
						@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
							@endif
					<div  class="row justify-content-center">
						
						<div class="appoinment_form_section lite_bg">
							<form class="form_area" id="" action="{{ route('insert-patient')}}" method="POST">
							  @csrf
								<div class="row">
									<div class="col-lg-12 form_group">
										<input name="name" placeholder="Patient name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
										 class="common_input form-control" required="" type="text">
										 <span>{{ $errors->first('name') }}</span>
										<input name="email" placeholder="Email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
										 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common_input form-control"
										 required="" type="email">
										 <span>{{ $errors->first('email') }}</span>
										<input name="dob" placeholder="Enter Patient's Age" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your age'"
										 class="common_input form-control" required="" type="number">
										 <span>{{ $errors->first('dob') }}</span>
										<input name="address" placeholder="Enter Patient's Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter address'"
										 class="common_input mb-10 form-control" required="" type="text">
										 <span>{{ $errors->first('address') }}</span>
										 <input name="phone" placeholder="Enter Contact Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone number'"
										 class="common_input mb-10 form-control" required="" type="integer">
										 <span>{{ $errors->first('phone') }}</span>
									</div>
									<div class="col-lg-12 text-center">
										<!-- <a href="{{ route('add-appointment') }}" class="primary-btn text-uppercase">Booking</a> -->
										<button type="submit" class="btn btn-primary btn-block">booking</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Blog Area =================-->
@endsection
@section('scripts')

@endsection
