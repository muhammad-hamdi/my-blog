@php
    $notifications = auth()->user()->notifications;
@endphp
<div class="nav navbar-right">
    {{ Form::open(['route' => 'me.notifications.delete', 'method' => 'DELETE', 'id' => 'delete-notifications']) }}
    {{ Form::close() }}
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon-bell2"></i>
                <span class="visible-xs-inline-block position-right">
                    @lang('notifications.plural')
                </span>
                @if($notifications->count())
                    <span class="status-mark border-orange-400"></span>
                @endif
            </a>

            <div class="dropdown-menu dropdown-content">
                <div class="dropdown-content-heading">
                    @lang('notifications.plural')
                    @if($notifications->count())
                        <ul class="icons-list">
                            <li>
                                <a href="javascript:" onclick="event.preventDefault(); document.getElementById('delete-notifications').submit();">
                                    <i class="icon-check"></i>
                                </a>
                            </li>
                        </ul>
                    @endif
                </div>

                <ul class="media-list dropdown-content-body width-350">
                    @if($notifications->count())
                        @foreach ($notifications as $notification)
                            @include('layouts.partials.notifications.' . snake_case(class_basename($notification->type)))
                        @endforeach
                    @else
                        <div class="text-center">
                            @lang('users.notifications.empty')
                        </div>
                    @endif
                </ul>
            </div>
        </li>
    </ul>
</div>