<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
    <a class="navbar-brand logo_h" href="{{ route('/') }}"><img src="{{ asset('ui/website/img/logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="{{ route('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about-us') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('web-department') }}">Department</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('registration') }}">Registration</a></li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a href="#" class="search">
                        <i class="lnr lnr-magnifier" id="search"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
