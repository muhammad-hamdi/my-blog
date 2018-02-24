@php($title = trans('categories.plural'))

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

        @component('dashboard.components.list', ['model' => $categories])
            @slot('thead')
                <th>@lang('categories.attributes.title')</th>
                <th>...</th>
            @endslot

            @slot('tbody')
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        {{--<td class="visible-on-hover table-actions">--}}
                            {{--<a--}}
                                    {{--href="{{ route('dashboard.posts.edit', $post) }}"--}}
                                    {{--class="btn btn-primary btn-xs"--}}
                            {{-->--}}
                                {{--@lang('forms.edit')--}}
                                {{--<i class="icon-pencil7"></i>--}}
                            {{--</a>--}}
                            {{--<a--}}
                                    {{--href="javascript:void(0)"--}}
                                    {{--class="delete-confirm btn btn-danger btn-xs"--}}
                                    {{--data-url="#"--}}
                                    {{--data-title="@lang('posts.messages.ask.delete-title')"--}}
                                    {{--data-message="@lang('posts.messages.ask.delete-info')"--}}
                            {{-->--}}
                                {{--@lang('forms.delete')--}}
                                {{--<i class="icon-trash"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                    </tr>
                @endforeach
            @endslot

        @endcomponent
    @endcomponent
@endsection