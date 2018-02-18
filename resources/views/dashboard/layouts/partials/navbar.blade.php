<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('dashboard.home') }}" target="_blank">
            <img src="{{ url('') }}/assets/dashboard/images/logo_light.png"  alt="{{ config('app.name') }}">
        </a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="@lang('auth.actions.logout')">
                    <i class="icon-switch2"></i>
                    <span>{{ auth()->user()->name }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-gear position-left"></i>
                    {{ language('native') }}
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    @foreach(languages() as $code => $language)
                    <li><a href="{{ url('locale/'. $code) }}">{{ $language['native'] }}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>

        {{-- @includeWhen(auth()->user(), 'layouts.partials.notifications.list') --}}

    </div>
</div>
