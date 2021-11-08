
<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- Logo container-->
            <div class="logo">
                <a href="index.php" class="logo">
                    <span>@lang('dashboard.eco')</span>
                </a>
            </div>
        </div>
    </div>

    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i>@lang('dashboard.home')</a>
                    </li>
                    <li id="itemSlider" class="has-submenu">
                        <a href="#"><i class="fa fa-picture-o"></i>@lang('dashboard.sliders')</a>
                        <ul class="submenu">
                            <li><a href="">@lang('dashboard.viewAll')</a></li>
                            <li><a href="">@lang('dashboard.addImage')</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="logout" onclick="logout(event)"><i class="md md-swap-vert"></i>@lang('dashboard.logout')</a>
                    </li>
                </ul>
                <!-- End navigation menu -->
            </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
    <form id="logout" method="POST" action="{{ route('dashboard.logout') }}">
        @csrf
    </form>
</header>
<!-- End Navigation Bar-->

