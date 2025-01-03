<li class="nav-item dropdown notification_dropdown">
    <a class="nav-link  ai-icon" href="#" role="button" data-toggle="dropdown">
        <i class="flaticon-381-ring"></i>
        @if(auth('user')->user()->unreadNotifications()->count() > 0)
            <div class="pulse-css"></div>
        @endif

    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3"
             style="height:380px;">
            <ul class="timeline">
                @forelse(auth('user')->user()->unreadNotifications() as $notify)
                    <li class="notificationDetail" data-notification="{{$notify->id}}" data-title="{{$notify->getTitle()}}" data-message="{{$notify->getDescription()}}">
                        <div class="timeline-panel">
                            <div class="media mr-2">
                                <img alt="image" width="50" src="{{image(auth('user')->user()->image)}}">
                            </div>
                            <div class="media-body">
                                <h6 class="mb-1">{{$notify->getTitle()}}</h6>
                                <small class="d-block">{{$notify->created_at->format('d.f.Y H:i')}}</small>
                            </div>
                        </div>
                    </li>
                @empty
                    <li>
                        <div class="timeline-panel">
                            <div class="media-body">
                                <h6 class="mb-1">{{__('Yeni Bildirim Yok')}}</h6>
                            </div>
                        </div>
                    </li>

                @endforelse

            </ul>
        </div>

        <a class="all-notification" href="{{route('user.panel.notification.index')}}">{{__('Tüm Bildirimler')}} <i
                class="ti-arrow-right"></i></a>
    </div>
</li>
