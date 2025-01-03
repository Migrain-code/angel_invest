
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="ai-icon" href="{{route('user.panel.index')}}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">{{__('Dashboard')}}</span>
                </a>
            </li>
            <li>
                <a class="ai-icon" href="{{route('user.panel.buy.index')}}" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">{{__('Satın Al')}}</span>
                </a>
            </li>
            <li><a class="ai-icon" href="my-wallets.html" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">My Wallets</span>
                </a>
            </li>
        </ul>

        <div class="copyright">
            <p><strong>Angelx User Dashboard</strong> © 2025 All Rights Reserved</p>
        </div>
    </div>
</div>
{{--
<div class="page-sidebar fixedscroll">

    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">

        <ul class='wraplist'>
            <li class='menusection'>Main</li>
            <li class="@if(request()->routeIs('user.panel.index')) open @endif">
                <a href='{{route('user.panel.index')}}'>
                    <i class="fa fa-th-large"></i>
                    <span class="title">{{__('Dashboard')}}</span>
                </a>
            </li>
            <li class="@if(request()->routeIs('user.panel.buy.index')) open @endif">
                <a href='{{route('user.panel.buy.index')}}'>
                    <i class="fa fa-bullseye"></i>
                    <span class="title">{{__('Satın Al')}}</span>
                </a>
            </li>
            <li class="@if(request()->routeIs('user.panel.setting.index')) open @endif">
                <a href='{{route('user.panel.setting.index')}}'>
                    <i class="fa fa-gear"></i>
                    <span class="title">{{__('Settings')}}</span>
                </a>
            </li>
            <li class="@if(request()->routeIs('user.panel.notification.index')) open @endif">
                <a href='{{route('user.panel.notification.index')}}'>
                    <i class="fa fa-bell"></i>
                    <span class="title">{{__('Bildirimler')}}</span>
                </a>
            </li>
            <li class="@if(request()->routeIs('user.panel.faq.index')) open @endif">
                <a href='{{route('user.panel.faq.index')}}'>
                    <i class="fa fa-question"></i>
                    <span class="title">{{__('S.S.S')}}</span>
                </a>
            </li>
            <li>
                <a href='javascript:void(0)' onclick="$('#userLogoutForm').submit()">
                    <i class="fa fa-arrow-circle-o-left"></i>
                    <span class="title">{{__('Logout')}}</span>
                </a>
            </li>
        </ul>

    </div>
    <!-- MAIN MENU - END -->

</div>

--}}
