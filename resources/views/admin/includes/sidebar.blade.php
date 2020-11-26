<div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li class="menu-title">Main</li>
            <li class="active">
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            @if(Session::has('adminId'))
            <li>
             <a href="{{route('doctors')}}"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
            </li>
            @endif
            @if(Session::has('doctorId'))
            <li>
             <a href="{{route('doctor-profile')}}"><i class="fa fa-user-md"></i> <span>My Profile</span></a>
            </li>
            @endif
            @if(Session::has('adminId'))
            <li>
                <a href="{{route('patients')}}"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
            </li>
            <li>
                <a href="{{route('appointments')}}"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
            </li>
            <li>
                <a href="{{route('schedule')}}"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
            </li>
            <li>
                <a href="{{route('all-departments')}}"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
            </li>
            @endif
            <li class="submenu">
                <a href="#"><i class="fa fa-envelope"></i> <span> Email</span> <span class="menu-arrow"></span></a>
                <ul style="display: none;">
                    <li><a href="compose.html">Compose Mail</a></li>
                    <li><a href="inbox.html">Inbox</a></li>
                    <li><a href="mail-view.html">Mail View</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#"><i class="fa fa-commenting-o"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                <ul style="display: none;">
                    <li><a href="{{route('admin-blog')}}">Blog</a></li>
                    <li><a href="{{route('blog-details')}}">Blog View</a></li>
                    <li><a href="{{route('add-blog')}}">Add Blog</a></li>
                    <li><a href="{{route('edit-blog')}}">Edit Blog</a></li>
                </ul>
            </li>
            <li class="menu-title">Extras</li>
            <li class="submenu">
                <a href="#"><i class="fa fa-columns"></i> <span>Edit</span> <span class="menu-arrow"></span></a>
                <ul style="display: none;">
                    <li><a href="change-password2.html"> Change Password </a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
