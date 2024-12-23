<div class='page-topbar '>
    <div class='logo-area'>

    </div>
    <div class='quick-area'>
        <div class='pull-left'>

            <ul class="info-menu left-links list-inline list-unstyled">
                <li class="sidebar-toggle-wrap">
                    <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <li class="notify-toggle-wrapper">
                    <a href="#" data-toggle="dropdown" class="toggle">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-accent">3</span>
                    </a>
                    <ul class="dropdown-menu notifications animated fadeIn">
                        <li class="total">
                                <span class="small">
                                You have <strong>3</strong> new notifications.
                                <a href="javascript:;" class="pull-right">Mark all as Read</a>
                            </span>
                        </li>
                        <li class="list">

                            <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                <li class="unread available">
                                    <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Successful transaction of 0.01 BTC</strong>
                                                    <span class="time small">15 mins ago</span>
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="unread away">
                                    <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>4 of Pending Transactions!</strong>
                                                    <span class="time small">45 mins ago</span>
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" busy">
                                    <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Cancelled Order of 200 ICO</strong>
                                                    <span class="time small">1 hour ago</span>
                                                </span>
                                        </div>
                                    </a>
                                </li>

                                <li class=" available">
                                    <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Great Speed Notify of 1.34 LTC</strong>
                                                    <span class="time small">14th Mar</span>
                                                </span>
                                        </div>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="external">
                            <a href="javascript:;">
                                <span>Read All Notifications</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class='pull-right'>
            <ul class="info-menu right-links list-inline list-unstyled">

                <li class="profile" style="padding: 0px 35px;">
                    <a href="#" data-toggle="dropdown" class="toggle">
                        <img src="{{image(auth('user')->user()->image)}}" alt="user-image" class="img-circle img-inline">
                        <span>{{auth('user')->user()->name}} <i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu profile animated fadeIn">
                        <li>
                            <a href='account-confirmation.html'>
                                <i class="fa fa-wrench"></i> {{__('Hesap')}}
                            </a>
                        </li>
                        <li>
                            <a href='ui-profile.html'>
                                <i class="fa fa-user"></i> {{__('Dashboard')}}
                            </a>
                        </li>

                        <li class="last">
                            <a href='javascript:void(0)' onclick="$('#userLogoutForm').submit()">
                                <i class="fa fa-lock"></i> {{__('Logout')}}
                            </a>
                        </li>
                        <form id="userLogoutForm" type="hidden" method="post" action="{{route('user.logout')}}">
                            @csrf
                        </form>
                    </ul>
                </li>

            </ul>
        </div>
    </div>

</div>
