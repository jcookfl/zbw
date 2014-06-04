<ul style="width:120px;" class="nav navbar-nav navbar-right col-sm-2">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        @if(is_int($messages) && $messages > 0)
            <span class="red">{{ $me->initials }}</span> <b class="caret"></b></a>
        @else
            <span>{{ $me->initials }}</span> <b class="caret"></b></a>
        @endif
        <ul class="dropdown-menu">
            <li>{{ HTML::link("/me/settings", 'Settings') }}</li>
            <li>{{ HTML::link('training', 'Training Center') }}</li>
            <li><a href="{{ URL::route('inbox') }}">Messages
                @if(is_int($messages) && $messages > 0)
                    <span class="sans">( <b class="red">{{$messages}}</b> )</span>
                @endif
            </a></li>
            <li>{{ HTML::link('schedule', 'Scheduler') }}</li>
            <li>{{ HTML::link('logout', 'Logout') }}</li>
        </ul>
    </li>
</ul>
