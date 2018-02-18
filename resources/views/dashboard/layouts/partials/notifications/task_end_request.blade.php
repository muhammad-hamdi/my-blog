@php
    $url = route('tasks.show', [$notification->data['id'], '_notify' => $notification->id]);
@endphp
<li class="media">
    <div class="media-left">
        <a href="{{ $url }}">
            <img class="img-circle" src="{{ $notification->data['user']['image_url'] }}" alt="{{ $notification->data['user']['name'] }}">
        </a>
    </div>

    <div class="media-body">
        <a href="{{ $url }}">
            @lang('tasks.notifications.end_request.subject', [
                'user' => $notification->data['user']['name']
            ])
            <div class="media-annotation">
                @lang('tasks.notifications.end_request.body', [
                    'task' => str_limit($notification->data['name'], 30),
                    'dep' => $notification->data['department']['name']
                ])
            </div>
        </a>
    </div>
</li>