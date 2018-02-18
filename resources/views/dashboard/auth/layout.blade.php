<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? ($title . ' | ' . config('app.name')) : config('app.name') }}</title>

    @include('dashboard.layouts.partials.styles')

</head>

<body class="login-container">

    <!-- Main navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-header">

             <a class="navbar-brand" href="{{ url('') }}" target="_blank">
                <img src="{{ url('') }}/assets/dashboard/images/logo_light.png" alt="{{ config('app.name') }}">
            </a>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            </ul>

        </div>

    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">

                    @yield('content')

                    <!-- Footer -->
                    <div class="footer text-muted text-center">
                        &copy; 2017. <a href="http://www.elnooronline.com/" target="_blank">النور اون لاين</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

    @stack('scripts')
</body>
</html>
