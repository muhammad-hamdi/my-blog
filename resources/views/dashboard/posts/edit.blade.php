@php($title = trans('posts.actions.update'))
@extends('dashboard.layouts.main')

@section('content')

    @component('dashboard.components.page', ['header_title' => $title])

        @slot('breadcrumb')
            <li>
                <a href="{{ route('dashboard.posts.index') }}">
                    @lang('posts.plural')
                </a>
            </li>
            <li>
                <a href="javascript:">
                    @lang('posts.actions.update')
                </a>
            </li>
        @endslot

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h5>@lang('posts.actions.update')</h5>
            </div>
            <div class="panel-body">
                {{ Form::open(['url' => route('dashboard.posts.update'), 'files' => true]) }}
                    {{ Form::bsText('Title', 'title', $post->title, ['autofocus']) }}

                    {{ Form::bsMultipleSelect('Categories', 'categories', $categories, $post->categories) }}

                    {{ Form::bsTextarea('Post Content', 'content', $post->content) }}

                    {{ Form::bsImage('Post image', 'image', $post->getMedia()->first()->getUrl()) }}

                    {{ Form::bsSubmit('Submit Form') }}
                {{ Form::close() }}
            </div>
        </div>
    @endcomponent

@endsection