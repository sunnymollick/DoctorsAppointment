<!doctype html>
<html lang="en">

<head>
	@include('website.includes.head')
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		@include('website.includes.header-top')
		    <div class="main_menu">
			    @include('website.includes.search')
				@include('website.includes.nav')
		    </div>
	</header>
	<!--================ End Header Menu Area =================-->

    @yield('content')

	<!--================ Start footer Area  =================-->
        @include('website.includes.footer')
	<!--================ End footer Area  =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('website.includes.script')
    @yield('scripts')
</body>

</html>
