<div class="notification-box">
    <div class="msg-sidebar notifications msg-noti">
        <div class="topnav-dropdown-header">
            <span>Messages</span>
        </div>
        <div class="drop-scroll msg-list-scroll" id="msg_list">
            <ul class="list-box">
                @php
                    $json = file_get_contents(public_path('../public/assets/json/notification.json'));
                    $notifications = json_decode($json, true);
                @endphp
                @foreach ($notifications as $notification)
                    <li>
                        <a href="{{ url('chat') }}">
                            <div class="{{ $notification['Class'] }}">
                                <div class="list-left">
                                    <span class="avatar">{{ $notification['Avatar'] }}</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">{{ $notification['Name'] }} </span>
                                    <span class="message-time">{{ $notification['Time'] }}</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">{{ $notification['Content'] }}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="topnav-dropdown-footer">
            <a href="{{ url('chat') }}">See all messages</a>
        </div>
    </div>
</div>
