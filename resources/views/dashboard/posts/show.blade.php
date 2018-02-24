@php($title = $post->title)

@extends('dashboard.layouts.main')

@section('content')
    @component('dashboard.components.page')
        @slot('breadcrumb')
            <li>
                <a href="{{ route('dashboard.posts.index') }}">
                    @lang('posts.plural')
                </a>
            </li>
            <li>
                <a href="javascript:">
                    {{ $title }}
                </a>
            </li>
        @endslot

        @component('dashboard.components.post', ['post' => $post])
            @slot('content')
                <pre style="white-space: pre-line">
                    {!! $post->content !!}
                </pre>
            @endslot
        @endcomponent
    @endcomponent
@endsection