@php
    $url = route('tasks.show', [$notification->data['task']['id'], '_notify' => $notification->id]) . '#comments-' . $notification->data['id'];
@endphp
<li class="media">
    <div class="media-left">
        <a href="{{ $url }}">
            <img class="img-circle" src="{{ $notification->data['user']['image_url'] }}" alt="{{ $notification->data['user']['name'] }}">
        </a>
    </div>

    <div class="media-body">
        <a href="{{ $url }}">
            @lang('tasks.notifications.new_comment.subject', [
                'user' => $notification->data['user']['name'],
                'task' => str_limit($notification->data['task']['name'], 30)
            ])
            <div class="media-annotation">
                {{ str_limit($notification->data['content'], 30) }}
            </div>
        </a>
    </div>
</li>