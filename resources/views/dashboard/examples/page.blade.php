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
                    Page
                </a>
            </li>
        @endslot

        @slot('header_elements')
            <a href="#" class="btn btn-primary">
                Add Resource
            </a>
        @endslot

        <div class="panel">
            <div class="panel-body">
                <p>
                    This is lorem ipsum text.
                    This is lorem ipsum text.
                    This is lorem ipsum text.
                    This is lorem ipsum text.
                    This is lorem ipsum text.
                    This is lorem ipsum text.
                    This is lorem ipsum text.
                    This is lorem ipsum text.
                </p>
            </div>
        </div>
    @endcomponent

@endsection