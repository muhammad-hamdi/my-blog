<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <li class="{{ css_route_active('dashboard.home') }}">
                        <a href="{{ route('dashboard.home') }}">
                            <i class="icon-home4"></i>
                            <span>@lang('dashboard.home')</span>
                        </a>
                    </li>

                    <li class="navigation-header">
                        <span>@lang('app.main')</span>
                        <i class="icon-menu" title="@lang('app.main')"
                           data-original-title="@lang('app.main')"></i>
                    </li>

                    <li class="{{ css_resource_active('dashboard.posts') }}">
                        <a href="javascript:">
                            <i class="icon-list2"></i>
                            <span>@lang('posts.plural')</span>
                        </a>
                        <ul>
                            <li class="{{ css_route_active('dashboard.posts.index') }}">
                                <a href="{{ route('dashboard.posts.index') }}">
                                    <i class="icon-grid2"></i>
                                    <span>@lang('posts.actions.list')</span>
                                </a>
                            </li>
                            <li class="{{ css_route_active('dashboard.posts.create') }}">
                                <a href="{{ route('dashboard.posts.create') }}">
                                    <i class="icon-quill2"></i>
                                    <span>@lang('posts.actions.create')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                <!-- /main -->
                </ul>
            </div>
            <!-- /category-content -->
        </div>
        <!-- /main navigation -->
        {{-- @include('dashboard.sidebar.items') --}}
    </div>
</div>
