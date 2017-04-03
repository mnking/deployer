<div class="pull-left">
    <ul class="nav quick-section">
        <li class="quicklinks">
            <a href="#" class="" id="layout-condensed-toggle">
                <i class="material-icons">menu</i>
            </a>
        </li>
    </ul>
    <ul class="nav quick-section">
        <li class="quicklinks  m-r-10">
            <a href="#" class="">
                <i class="material-icons">refresh</i>
            </a>
        </li>
        @if(false)
        <li class="quicklinks">
            <a href="#" class="">
                <i class="material-icons">apps</i>
            </a>
        </li>
        <li class="quicklinks"> <span class="h-seperate"></span></li>
        <li class="quicklinks">
            <a href="#" class="" id="my-task-list" data-placement="bottom" data-content='' data-toggle="dropdown" data-original-title="Notifications">
                <i class="material-icons">notifications_none</i>
                <span class="badge badge-important bubble-only"></span>
            </a>
        </li>
        <li class="m-r-10 input-prepend inside search-form no-boarder">
            <span class="add-on"> <i class="material-icons">search</i></span>
            <input name="" type="text" class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
        </li>
        @endif
    </ul>
</div>
<div id="notification-list" style="display:none">
    <div style="width:300px">
        <div class="notification-messages info">
            <div class="user-profile">
                <img src="/assets/img/profiles/d.jpg" alt="" data-src="/assets/img/profiles/d.jpg" data-src-retina="/assets/img/profiles/d2x.jpg" width="35" height="35">
            </div>
            <div class="message-wrapper">
                <div class="heading">
                    David Nester - Commented on your wall
                </div>
                <div class="description">
                    Meeting postponed to tomorrow
                </div>
                <div class="date pull-left">
                    A min ago
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="notification-messages danger">
            <div class="iconholder">
                <i class="icon-warning-sign"></i>
            </div>
            <div class="message-wrapper">
                <div class="heading">
                    Server load limited
                </div>
                <div class="description">
                    Database server has reached its daily capicity
                </div>
                <div class="date pull-left">
                    2 mins ago
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="notification-messages success">
            <div class="user-profile">
                <img src="/assets/img/profiles/h.jpg" alt="" data-src="/assets/img/profiles/h.jpg" data-src-retina="/assets/img/profiles/h2x.jpg" width="35" height="35">
            </div>
            <div class="message-wrapper">
                <div class="heading">
                    You haveve got 150 messages
                </div>
                <div class="description">
                    150 newly unread messages in your inbox
                </div>
                <div class="date pull-left">
                    An hour ago
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>