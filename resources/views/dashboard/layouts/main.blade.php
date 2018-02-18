<!doctype html>
<html lang="{{ language('code') }}" dir="{{ language('dir') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset($title) ? ($title . ' | ' . config('app.name')) : config('app.name') }}</title>

        @include('dashboard.layouts.partials.styles')
    </head>
    <body>
            <!-- Main navbar -->
            @include('dashboard.layouts.partials.navbar')
            <!-- /main navbar -->

            <!-- Page container -->
            <div id="app" class="page-container">

                <!-- Page content -->
                <div class="page-content">

                    <!-- Main sidebar -->
                    @include('dashboard.layouts.sidebar.main')
                    <!-- /main-sidebar -->

                    {{-- Contains Page Header and Content --}}
                    @yield('content')

                </div>
                <!-- /page-content -->
            </div>
            <!-- /page-container -->

        <!-- Limitless Javascript Files! -->

        <!-- Core JS files -->
        <script type="text/javascript" src="{{ asset('assets/dashboard/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/dashboard/js/custom.js') }}"></script>
        <!-- /core JS files -->

        <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>

        {{-- Load custom js files. --}}
        @stack('scripts')

    </body>

</html>
