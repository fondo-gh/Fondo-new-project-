<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title', 'Fondo Admin | Welcome')
    </title>

    @include('partials.styles._styles')

    @yield('styles')

</head>
<!-- END: Head-->
<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

<!-- BEGIN: Header-->
@include('partials.headers._admin_header')
<!-- END: Header-->

<!-- BEGIN: SideNav-->
@include('partials.headers._admin_side_nav')
<!-- END: SideNav-->

@include('partials.alerts._errors')

<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6 breadcrumbs-left">
                        <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down">
                            @yield('header-title', 'Dashboard')
                        </h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                @yield('header-title', 'Dashboard')
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
</div>
<!-- END: Page Main-->

@include('partials.headers._theme_customiser')

@yield('fab')


<!-- BEGIN: Footer-->
{{--@include('partials.headers._footer')--}}

<!-- END: Footer-->
<!-- END PAGE LEVEL JS-->
@include('partials.scripts._scripts')

@yield('scripts')

<script>
    //success alert
    @if(session('success'))
    swal({
        title: 'Success',
        icon: 'success',
        text: '{{ session('success') }}',
    });
    @endif

</script>
</body>
</html>
