@php($title = trans('categories.actions.edit'))
@extends('dashboard.layouts.main')

@section('content')

    @component('dashboard.components.page', ['header_title' => $title])

        @slot('breadcrumb')
            <li>
                <a href="{{ route('dashboard.categories.index') }}">
                    @lang('categories.plural')
                </a>
            </li>
            <li>
                <a href="javascript:">
                    @lang('categories.actions.edit')
                </a>
            </li>
        @endslot

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h5>@lang('categories.actions.edit')</h5>
            </div>
            <div class="panel-body">
                {{ Form::open(['url' => route('dashboard.categories.update')]) }}
                    {{ Form::bsText('Name', 'name', $category->name, ['autofocus']) }}

                    {{ Form::bsSubmit('Submit Form') }}
                {{ Form::close() }}
            </div>
        </div>
    @endcomponent

@endsection