<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                    class="logo-name">HTC</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{route('add.doctor')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Doctor</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('view.doctor')}}">view all doctors</a></li>
                    <li><a class="nav-link" href="{{route('add.doctor')}}">add doctors</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Specialties</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('add.specialty')}}">Add Specialty</a></li>
                    <li><a class="nav-link" href="{{route('all.specialty')}}">View specialties</a></li>
                </ul>
            </li>

          
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Appointments</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('view.appointment')}}">View Appointments</a></li>
                    <li><a class="nav-link" href="{{route('declined-appointment')}}">Canceled Appointments</a></li>
                    <li><a class="nav-link" href="{{route('approved-appointment')}}">Approved Appointment</a></li>
                </ul>
            </li>
            <li class="menu-header">Pages</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Web Page</span></a>
    
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('home.index')}}">Home</a></li>
                    <li><a class="nav-link" href="{{route('home.details')}}">Home details</a></li>
                    <li><a class="nav-link" href="alert.html">About set up</a></li>
                    <li><a class="nav-link" href="{{route('view.contact')}}">Show Message</a></li>
                </ul>
            </li>

            <li class="menu-header">Blog Category </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Blog set up</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('add.category')}}">Add Category</a></li>
                    <li><a class="nav-link" href="{{route('view.category')}}">View Category</a></li>
                </ul>
            </li>


            <li class="menu-header">Blog post </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Blog Post set up</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('create.post')}}">Make blog post</a></li>
                    <li><a class="nav-link" href="{{route('blog.post')}}">View Blog post</a></li>
                </ul>
            </li>

        </ul>
    </aside>
</div>
