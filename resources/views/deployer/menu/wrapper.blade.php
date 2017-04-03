<!-- BEGIN SIDEBAR -->
<div class="page-sidebar " id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
        <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
                <img src="/assets/img/profiles/avatar.jpg" alt="" data-src="/assets/img/profiles/avatar.jpg"
                     data-src-retina="/assets/img/profiles/avatar2x.jpg" width="69" height="69"/>
                <div class="availability-bubble online"></div>
            </div>
            <div class="user-info sm">
                <div class="username">Fred <span class="semi-bold">Smith</span></div>
                <div class="status">Life goes on...</div>
            </div>
        </div>
        <!-- END MINI-PROFILE -->
        <!-- BEGIN SIDEBAR MENU -->
        <ul>
            <li class="start open active">
                <a href="index.html" class="selected">
                    <i class="material-icons">home</i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="widgets.html"> <i class="material-icons">panorama_horizontal</i> <span
                            class="title">Widgets</span> <span
                            class="label label-important bubble-only pull-right "></span></a>
            </li>
        </ul>

        @include('deployer.menu.widget')

        <div class="clearfix"></div>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<a href="#" class="scrollup">Scroll</a>

@include('deployer.menu.footer')
<!-- END SIDEBAR -->