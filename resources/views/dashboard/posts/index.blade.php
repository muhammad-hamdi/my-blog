@php($title = trans('posts.plural'))

@extends('dashboard.layouts.main')

@section('content')
    @component('dashboard.components.page', ['header_title' => $title])
        @slot('breadcrumb')
            <li>
                <a href="javascript:">
                    {{ $title }}
                </a>
            </li>
        @endslot

        @component('dashboard.components.list', ['model' => $posts])
            @slot('thead')
                <th>@lang('posts.attributes.title')</th>
                <th>@lang('posts.attributes.author')</th>
                <th>@lang('posts.attributes.date')</th>
                <th>...</th>
            @endslot

            @slot('tbody')
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user()->name }}</td>
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td class="visible-on-hover table-actions">
                            <a
                                    href="#"
                                    class="btn btn-primary btn-xs"
                            >
                                @lang('forms.edit')
                                <i class="icon-pencil7"></i>
                            </a>
                            <a
                                    href="javascript:void(0)"
                                    class="delete-confirm btn btn-danger btn-xs"
                                    data-url="#"
                                    data-title="@lang('roles.messages.ask.delete-title')"
                                    data-message="@lang('roles.messages.ask.delete-info')"
                            >
                                @lang('forms.delete')
                                <i class="icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endslot

        @endcomponent
    @endcomponent
@endsection