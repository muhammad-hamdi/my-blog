@extends('dashboard.layouts.main')

@section('content')

    @component('dashboard.components.page', ['header_title' => 'Page Title'])

        @slot('breadcrumb')
            <li>
                <a href="#">
                    Examples
                </a>
            </li>
            <li>
                <a href="#">
                    Forms
                </a>
            </li>
        @endslot

        <div class="panel">
            <div class="panel-body">
                {{ Form::bsText('Text Input', null, 'Default Value', ['autofocus']) }}

                {{ Form::bsNumber('Input Two', 'number') }}

                {{ Form::bsEmail('Email Address', 'email') }}

                {{ Form::bsPassword('Password', 'password') }}

                {{ Form::bsTextarea('Text Area', 'textarea') }}

                {{ Form::bsSubmit('Submit Form') }}

            </div>
        </div>
    @endcomponent

@endsection