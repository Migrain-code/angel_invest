<div class='page-topbar '>
    <div class='logo-area'>
        <a href="{{route('user.panel.index')}}" class='logo'>
            <img src="{{image(setting('logo'))}}" alt="logo">
        </a>
    </div>
    <div class='quick-area'>
        <div class='pull-left'>

            <ul class="info-menu left-links list-inline list-unstyled">
                <li class="sidebar-toggle-wrap">
                    <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                @include('user.layouts.menu.parts.notifications')

            </ul>
        </div>
        <div class='pull-right'>
            <ul class="info-menu right-links list-inline list-unstyled">
                @if(request()->routeIs('user.panel.buy.index'))
                    <li class="message-toggle-wrapper" style="margin-left: 10px">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#walletModal"  id="btn-connect" class="btn btn-primary" style="border-radius: 20px;
    background: #287bc6;
    border: none;
    box-shadow: 1px 2px 5px #287bc6;">
                            <i class="fa fa-wallet"></i>
                            Connect
                        </a>
                        <a href="javascript:void(0)" data-toggle="dropdown" onclick="disconnect();" id="disconnectButton" class="btn btn-primary" style="border-radius: 20px;
    background: #287bc6;
    border: none;
    box-shadow: 1px 2px 5px #287bc6;display: none">
                            <i class="fa fa-x"></i>
                            Disconnect
                        </a>
                    </li>
                @endif

                <li class="profile noMobile" style="min-width: 120px;
    margin-left: 15px;">
                    <a href="#" data-toggle="dropdown" class="toggle">
                        <img src="{{image(auth('user')->user()->image)}}" alt="user-image" class="img-circle img-inline">
                        <span>{{auth('user')->user()->name}} <i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu profile animated fadeIn" style="margin-left: -45px;">
                        <li>
                            <a href='{{route('user.panel.setting.index')}}'>
                                <i class="fa fa-wrench"></i> {{__('Hesap')}}
                            </a>
                        </li>
                        <li>
                            <a href='{{route('user.panel.index')}}'>
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
