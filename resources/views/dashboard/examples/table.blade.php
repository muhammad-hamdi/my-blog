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
                    Table
                </a>
            </li>
        @endslot

        @slot('header_elements')
            <a href="#" class="btn btn-primary">
                Add Resource
            </a>
        @endslot

        @component('dashboard.components.list', ['heading' => 'List of resources'])
            @slot('thead')
                <tr>
                    <th>Field 1</th>
                    <th>Field 2</th>
                    <th>Field 3</th>
                </tr>
            @endslot

            @slot('tbody')
                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
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
            @endslot

        @endcomponent
    @endcomponent

@endsection