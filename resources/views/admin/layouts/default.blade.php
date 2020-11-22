<!DOCTYPE html>
<html lang="en">


<!-- index22:59-->
<head>
    @include('admin.includes.head')
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			@include('admin.includes.header')
        </div>
        <div class="sidebar" id="sidebar">
            @include('admin.includes.sidebar')
        </div>
        <div class="page-wrapper">
            <div class="content">
             @yield('content')
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    @include('admin.includes.scripts')
    @yield('scripts')
</body>


<!-- index22:59-->
</html>