<!-- BEGIN CHAT TOGGLER -->
<div class="pull-right">
    @if(false)
    <div class="chat-toggler sm">
        <div class="profile-pic">
            <img src="/assets/img/profiles/avatar_small.jpg" alt="" data-src="/assets/img/profiles/avatar_small.jpg" data-src-retina="/assets/img/profiles/avatar_small2x.jpg" width="35" height="35" />
            <div class="availability-bubble online"></div>
        </div>
    </div>
    @endif
    <ul class="nav quick-section ">
        <li class="quicklinks">
            <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                <i class="material-icons">tune</i>
            </a>
            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                @if(false)
                <li>
                    <a href="user-profile.html"> My Account</a>
                </li>
                <li>
                    <a href="calender.html">My Calendar</a>
                </li>
                <li>
                    <a href="email.html"> My Inbox&nbsp;&nbsp;
                        <span class="badge badge-important animated bounceIn">2</span>
                    </a>
                </li>
                <li class="divider"></li>
                @endif
                <li>
                    <a href="login.html"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Log Out</a>
                </li>
            </ul>
        </li>
        @if(false)
        <li class="quicklinks"> <span class="h-seperate"></span></li>
        <li class="quicklinks">
            <a href="#" class="chat-menu-toggle" data-webarch="toggle-right-side"><i class="material-icons">chat</i><span class="badge badge-important hide">1</span>
            </a>
            <div class="simple-chat-popup chat-menu-toggle hide">
                <div class="simple-chat-popup-arrow"></div>
                <div class="simple-chat-popup-inner">
                    <div style="width:100px">
                        <div class="semi-bold">David Nester</div>
                        <div class="message">Hey you there </div>
                    </div>
                </div>
            </div>
        </li>
        @endif
    </ul>
</div>
<!-- END CHAT TOGGLER -->