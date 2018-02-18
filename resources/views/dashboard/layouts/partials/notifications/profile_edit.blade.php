@php
    $url = route('users.edit', [$notification->data['id'], '_notify' => $notification->id]);
@endphp
<li class="media">
    <div class="media-left">
        <a href="{{ $url }}">
            <img class="img-circle" src="{{ $notification->data['user']['image_url'] }}" alt="{{ $notification->data['user']['name'] }}">
        </a>
    </div>

    <div class="media-body">
        <a href="{{ $url }}">
            @lang('users.notifications.edit.subject')
            <div class="media-annotation">
                @lang('users.notifications.edit.body', [
                    'user' => $notification->data['user']['name'],
                ])
            </div>
        </a>
    </div>
</li>