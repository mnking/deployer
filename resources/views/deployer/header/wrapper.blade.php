<div class="header navbar navbar-inverse ">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="header-seperation">
            <ul class="nav pull-left notifcation-center visible-xs visible-sm">
                <li class="dropdown">
                    <a href="#main-menu" data-webarch="toggle-left-side">
                        <i class="material-icons">menu</i>
                    </a>
                </li>
            </ul>
            <!-- BEGIN LOGO -->
            <a href="index.html">
                <img src="/assets/img/logo.png" class="logo" alt="" data-src="/assets/img/logo.png" data-src-retina="/assets/img/logo2x.png" width="106" height="21" />
            </a>
            <!-- END LOGO -->

            @include('deployer.header.left-button')
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
            <!-- BEGIN TOP NAVIGATION MENU -->
            @include('deployer.header.center-button')
            <!-- END TOP NAVIGATION MENU -->

            @include('deployer.header.right-button')
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>