<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-right">
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user"
                            src="{{ asset('/') }}assets/back-end/assets/images/logo-sm-dark.png" alt="Header Avatar">
                        <span class="d-none d-sm-inline-block ml-1">
                            {{ Auth::user()->name }}
                        </span>
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="{{ route('profile.show') }}">
                            <i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile
                        </a>
                        <a class="dropdown-item" href=""
                            onclick="event.preventDefault();document.getElementById('logout').submit()">
                            <i class="mdi mdi-logout font-size-16 align-middle mr-1"></i>
                            Logout
                        </a>
                        <form action="{{ route('logout') }}" method="POST" id="logout">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="navbar-brand-box">
                <a href="{{ route('dashboard') }}" class="logo logo-dark">
                    <img src="{{ asset('/') }}assets/back-end/assets/images/logo-sm-dark.png" alt="" height="20">
                </a>
                <a href="{{ route('dashboard') }}" class="logo logo-light">
                    <img src="{{ asset('/') }}assets/back-end/assets/images/logo-sm-dark.png" alt="" height="20">
                </a>
            </div>
            <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light"
                data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <div class="topnav">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="javascript:void(0)" id="topnav-category-info" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ddd;">
                                    Category Info<div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-category-info">
                                    <a href="{{ route('add-category') }}" class="dropdown-item"
                                        style="color: #333 !important; font-weight:bolder;">
                                        <div class="d-inline-block icons-sm mr-2">
                                            <i class="uim uim-schedule"></i>
                                        </div>
                                        Add Category
                                    </a>
                                    <a href="{{ route('manage-category') }}" class="dropdown-item"
                                        style="color: #333 !important; font-weight:bolder;">
                                        <div class="d-inline-block icons-sm mr-2">
                                            <i class="uim uim-schedule"></i>
                                        </div>
                                        Manage Category
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="javascript:void(0)"
                                    id="topnav-blog-info" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="color: #ddd;">
                                    Blog Info<div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-blog-info">
                                    <a href="{{ route('add-blog') }}" class="dropdown-item"
                                        style="color: #333 !important; font-weight:bolder;">
                                        <div class="d-inline-block icons-sm mr-2">
                                            <i class="uim uim-schedule"></i>
                                        </div>
                                        Add Blog
                                    </a>
                                    <a href="{{ route('manage-blog') }}" class="dropdown-item"
                                        style="color: #333 !important; font-weight:bolder;">
                                        <div class="d-inline-block icons-sm mr-2">
                                            <i class="uim uim-schedule"></i>
                                        </div>
                                        Manage Blog
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="javascript:void(0)"
                                    id="topnav-contact-info" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="color: #ddd;">
                                    Contact Info<div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-contact-info">
                                    <a href="{{ route('manage-contact') }}" class="dropdown-item"
                                        style="color: #333 !important; font-weight:bolder;">
                                        <div class="d-inline-block icons-sm mr-2">
                                            <i class="uim uim-schedule"></i>
                                        </div>
                                        Manage Contact
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
