<!-- Header -->
<header>
    <!-- Top header -->
    <div class="top-header">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-md-3">
                    <div class="social-links">
                        <ul>
                            <li>
                                <a href="javacript:void(0)">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javacript:void(0)">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javacript:void(0)">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javacript:void(0)">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javacript:void(0)">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javacript:void(0)">
                                    <i class="fab fa-vimeo-v"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="brand-name text-center">
                        <a href="{{ route('home') }}">
                            <h1>Kavya</h1>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="search-wrapper">
                        <div class="search-icon">
                            <button class="open-search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top header end -->

    <!-- Navbar  -->
    <div class="kavya-navbar" id="sticky-top">
        <div class="container">
            <nav class="nav-menu-wrapper">
                <span class="navbar-toggle" id="navbar-toggle">
                    <i class="fas fa-bars"></i>
                </span>
                <ul class="nav-menu mx-auto" id="nav-menu-toggle">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="javascript:void(0)" class="{{ Route::is('category') ? 'active' : '' }}">Categories
                            <span class="arrow-icon">
                                <span class="left-bar"></span>
                                <span class="right-bar"></span>
                            </span>
                        </a>
                        <ul class="drop-menu">
                            <li class="drop-menu-item">
                                @foreach ($categories as $category)
                                <a href="{{ route('category', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                @endforeach
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active' : '' }}">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="{{ Route::is('login') ? 'active' : '' }}">Login</a>
                    </li>
                </ul>
                <div class="sticky-search">
                    <div class="search-wrapper">
                        <div class="search-icon">
                            <button class="open-search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar end -->

    <!-- search overlay -->
    <div id="search-overlay" class="search-section">
        <span class="closebtn"><i class="fas fa-times"></i></span>
        <div class="overlay-content">
            <form action="{{ route('search') }}" method="GET">
                <input type="text" placeholder="Search here" name="query">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- search overlay end -->
</header>
<!-- header end -->
