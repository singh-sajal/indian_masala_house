<!-- Header
============================================= -->
<header>
    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav brand-center-style-two dark-layout brand-center navbar-default validnavs">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/icon.png') }}" class="logo logo-display" alt="Logo">
                    {{-- <img src="{{ asset('assets/img/logo-light.png') }}" class="logo logo-display" alt="Logo"> --}}
                    <img src="{{ asset('assets/img/logo.png') }}" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown megamenu-fw">
                        <a href="{{ route('home') }}" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('aboutUs') }}">About Us</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('foodMenu') }}" class="dropdown-toggle" data-toggle="dropdown">Menu</a>
                    </li>
                    {{-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
                    </li> --}}
                    <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->

        </div>
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Header -->
