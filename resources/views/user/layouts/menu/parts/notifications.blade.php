<li class="notify-toggle-wrapper noMobile">
    <a href="#" data-toggle="dropdown" class="toggle">
        <i class="fa fa-bell"></i>
        <span class="badge badge-accent">{{auth('user')->user()->unreadNotifications()->count()}}</span>
    </a>
    <ul class="dropdown-menu notifications animated fadeIn">
        <li class="total">
            <span class="small">
                You have <strong>{{auth('user')->user()->unreadNotifications()->count()}}</strong> new notifications.
            </span>
        </li>
        <li class="list">

            <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                @forelse(auth('user')->user()->unreadNotifications() as $notify)
                    <li class="unread available notificationDetail" data-notification="{{$notify->id}}" data-title="{{$notify->getTitle()}}" data-message="{{$notify->getDescription()}}">
                        <!-- available: success, warning, info, error -->
                        <a href="javascript:;">
                            <div class="notice-icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div>
                            <span class="name">
                                <strong>{{$notify->getTitle()}}</strong>
                                <span class="time small">{{$notify->created_at->format('d.f.Y H:i')}}</span>
                            </span>
                            </div>
                        </a>
                    </li>
                @empty
                    <li class="unread available">
                        <!-- available: success, warning, info, error -->
                        <a href="javascript:;">
                                <div class="text-center">
                                    <span class="name">
                                        <strong>{{__('Yeni Bildirim Yok')}}</strong>
                                    </span>
                                </div>
                        </a>

                @endforelse

            </ul>

        </li>

        <li class="external">
            <a href="{{route('user.panel.notification.index')}}">
                <span>{{__('Tüm Bildirimler')}}</span>
            </a>
        </li>
    </ul>
</li>
