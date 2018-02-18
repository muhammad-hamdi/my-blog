@php($title = trans('posts.actions.create'))
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
                    @lang('posts.actions.create')
                </a>
            </li>
        @endslot

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h5>@lang('posts.actions.create')</h5>
            </div>
            <div class="panel-body">
                {{ Form::open(['url' => route('dashboard.posts.store')]) }}
                    {{ Form::bsText('Title', 'title', '', ['autofocus']) }}

                    {{ Form::bsMultipleSelect('Categories', 'categories', $categories) }}

                    {{ Form::bsTextarea('Post Content', 'textarea') }}

                    {{ Form::bsSubmit('Submit Form') }}
                {{ Form::close() }}
            </div>
        </div>
    @endcomponent

@endsection