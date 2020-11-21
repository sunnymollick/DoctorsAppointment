<!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
    -->
<div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
    Creative Tim
    </a></div>
<div class="sidebar-wrapper">
    <ul class="nav">
    <li class="nav-item active  ">
        <a class="nav-link" href="{{route('dashboard')}}">
        <i class="material-icons">dashboard</i>
        <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{route('user')}}">
        <i class="material-icons">person</i>
        <p>User Profile</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{route('tables')}}">
        <i class="material-icons">content_paste</i>
        <p>Table List</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{route('typography')}}">
        <i class="material-icons">library_books</i>
        <p>Typography</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{route('notifications')}}">
        <i class="material-icons">notifications</i>
        <p>Notifications</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{route('department')}}">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        <p>Department</p>
        </a>
    </li>

    </ul>
</div>
