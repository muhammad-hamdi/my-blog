<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <div class="sidebar-user">
                        <div class="category-content">
                            <div class="media">
                                <a href="#" class="media-left"><img src="{{ auth()->user()->getMedia()->first()->getUrl() }}" class="img-circle img-sm" alt=""></a>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">{{ auth()->user()->name }}</span>
                                    <div class="text-size-mini text-muted">
                                        <i class="icon-pin text-size-small"></i> &nbsp;{{ auth()->user()->title }}
                                    </div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <li class="navigation-header">
                        <span>@lang('app.main')</span>
                        <i class="icon-menu" title="@lang('app.main')"
                           data-original-title="@lang('app.main')"></i>
                    </li>

                    <li class="{{ css_route_active('dashboard.home') }}">
                        <a href="{{ route('dashboard.home') }}">
                            <i class="icon-home4"></i>
                            <span>@lang('dashboard.home')</span>
                        </a>
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
