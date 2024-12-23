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
                    <span class="title">{{__('Buy')}}</span>
                </a>
            </li>

        </ul>

    </div>
    <!-- MAIN MENU - END -->

</div>
