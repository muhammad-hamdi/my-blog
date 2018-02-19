<div class="panel">
    <div class="panel-body">
        <div class="content-group-lg">
            <div class="content-group text-center">
                <a href="javascript" class="display-inline-block">
                    <img style="max-height: 500px;" src="{{ $post->getMedia()->first()->getUrl() }}" class="img-responsive" alt="">
                </a>
            </div>

            <h3 class="text-semibold mb-5">
                <a href="javascript" class="text-default">{{ $post->title }}</a>
            </h3>

            <ul class="list-inline list-inline-separate text-muted content-group">
                <li>By <a href="javascript" class="text-muted">{{ $post->user->name }}</a></li>
                <li>{{ $post->created_at->toFormattedDateString() }}</li>
                <li><a href="javascript" class="text-muted">{{ $post->comments->count() }} comments</a></li>
                <li><a href="javascript" class="text-muted"><i class="icon-heart6 text-size-base text-pink position-left"></i> {{ $post->likes->count() }}</a></li>
            </ul>

            <div class="content-group">
                @if(isset($content))
                    {{ $content }}
                @endif
            </div>

            {{--<blockquote class="no-margin panel panel-body border-left-lg border-left-warning">--}}
                {{--<img src="assets/images/placeholder.jpg" class="img-circle" alt="">--}}
                {{--Dear far dove lynx inaudibly between after under after on some far warthog regardless wrote.--}}
                {{--<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>--}}
            {{--</blockquote>--}}
        </div>

    </div>
</div>

<div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title">About the author<a class="heading-elements-toggle"><i class="icon-more"></i></a><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>

        {{--<div class="heading-elements">--}}
        {{--<ul class="icons-list icons-list-extended heading-text">--}}
        {{--<li><a href="#" data-popup="tooltip" data-container="body" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>--}}
        {{--<li><a href="#" data-popup="tooltip" data-container="body" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>--}}
        {{--<li><a href="#" data-popup="tooltip" data-container="body" title="" data-original-title="Github"><i class="icon-github"></i></a></li>--}}
        {{--<li><a href="#" data-popup="tooltip" data-container="body" title="" data-original-title="Linked In"><i class="icon-linkedin"></i></a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
    </div>

    <div class="media panel-body no-margin">
        <div class="media-left">
            <a href="#">
                <img src="{{ $post->user->getMedia()->first() }}" style="width: 68px; height: 68px;" class="img-circle" alt="">
            </a>
        </div>

        <div class="media-body">
            <h6 class="media-heading text-semibold">{{ $post->user->name }}</h6>
            {{--<p>{{ $post->user->biography }}</p>--}}

            {{--<ul class="list-inline list-inline-separate no-margin">--}}
            {{--<li><a href="#">Author profile</a></li>--}}
            {{--<li><a href="#">All posts by James</a></li>--}}
            {{--<li><a href="#">http://website.com</a></li>--}}
            {{--</ul>--}}
        </div>
    </div>
</div>

<div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title text-semiold">Discussion<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
        <div class="heading-elements">
            <ul class="list-inline list-inline-separate heading-text text-muted">
                <li>{{ $post->comments->where('approved', true)->count() }} comments</li>
                <li>{{ $post->comments->where('approved', false)->count() }} pending review</li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <ul class="media-list stack-media-on-mobile">
            @forelse($post->comments->where('approved', true) as $comment)
            <li class="media">
                <div class="media-left">
                    <a href="#"><img src="{{ $comment->user->getMedia()->first()->getUrl() }}" class="img-circle img-sm" alt=""></a>
                </div>

                <div class="media-body">
                    <div class="media-heading">
                        <a href="#" class="text-semibold">{{ $comment->user->name }}</a>
                        <span class="media-annotation dotted">{{ $comment->created_at->diffForHumans() }}</span>
                    </div>

                    <p>{{ $comment->content }}</p>

                    @if($comment->replies->count())
                        @foreach($comment->replies as $reply)
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img src="{{ $reply->user->getMedia()->first()->getUrl() }}" alt="" class="img-circle img-sm">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="#" class="text-semibold">{{ $reply->user->name }}</a>
                                    <span class="media-annotation dotted">{{ $reply->created_at->diffForHumans() }}</span>
                                </div>
                                <p>{{ $reply->content }}</p>
                                <ul class="list-inline list-inline-separate text-size-small">
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
                {{ Form::open(['url' => route('dashboard.replies.store', $comment)]) }}
                <div class="input-group col-md-11 col-md-offset-1">
                        <input name="content" class="form-control" placeholder="Your reply goes here...">
                    <span class="input-group-btn">
                        <button class="btn bg-blue">reply <i class="icon-plus22"></i></button>
                    </span>
                </div>

                {{ Form::close() }}
            </li>
                @empty
                    <p class="text-center">
                        @lang('dashboard.components.list.empty')
                    </p>
            @endforelse
        </ul>
    </div>

    <hr class="no-margin">

    <div class="panel-body">
        <h6 class="no-margin-top content-group">Add comment</h6>
        {{ Form::open(['url' => route('dashboard.comments.store', $post)]) }}
        <div class="content-group">
            <div id="add-comment">
                <textarea name="content" class="form-control" placeholder="Your comment goes here..."></textarea>
            </div>
        </div>

        <div class="text-right">
            <button class="btn bg-blue"><i class="icon-plus22"></i> Add comment</button>
        </div>
        {{ Form::close() }}
    </div>
</div>