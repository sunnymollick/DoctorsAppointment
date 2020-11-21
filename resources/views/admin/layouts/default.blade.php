<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.includes.head')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      @include('admin.includes.sidebar')
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        @include('admin.includes.nav')
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          @include('admin.includes.footer')
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    @include('admin.includes.widget')
  </div>
  <!--   Core JS Files   -->
  @include('admin.includes.script')
  @yield('scripts')

</body>

</html>
