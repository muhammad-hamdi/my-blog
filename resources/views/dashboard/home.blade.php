@php($title = trans('dashboard.home'))

@extends('dashboard.layouts.main')

@section('content')

    @component('dashboard.components.page', ['header_title' => $title])

        @slot('breadcrumb')
            <li>
                <a href="#">
                    {{ $title }}
                </a>
            </li>
        @endslot
<div class="row">
    <div class="col-md-9">
    </div>
</div>


    @endcomponent
@endsection