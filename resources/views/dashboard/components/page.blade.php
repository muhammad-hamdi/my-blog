<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default{{ isset($header_color) ? (" bg-$header_color") : ''}}">

        @if(isset($breadcrumb))
            <div class="breadcrumb-line">
                <ul class="breadcrumb">
                    {{ $breadcrumb }}
                </ul>
            </div>
        @endif

        <div class="page-header-content">

            @if (isset($header_title))
                <div class="page-title">
                    <h4>
                        {{ $header_title }}
                    </h4>
                </div>
            @endif

            @if (isset($header_elements))
                <div class="heading-elements">
                    {{ $header_elements or '' }}
                </div>
            @endif

        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        {{-- Display Flash Message If Exists --}}
        @include('flash::message')

        {{ $slot }}

        <!-- Footer -->
        @include('dashboard.layouts.partials.footer')
        <!-- /footer -->

    </div>
    <!-- /content area -->

</div>
<!-- /main content -->
