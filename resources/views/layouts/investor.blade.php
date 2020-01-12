<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title', 'Fondo Investor | Welcome')
    </title>

    @include('partials.styles._styles')

    @yield('styles')

</head>
<!-- END: Head-->
<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

<!-- BEGIN: Header-->
@include('partials.headers._investor_header')
<!-- END: Header-->

<!-- BEGIN: SideNav-->
@include('partials.headers._investor_side_nav')
<!-- END: SideNav-->

@include('partials.alerts._errors')

<!-- BEGIN: Page Main-->
<div id="main">

    @yield('content')
</div>
<!-- END: Page Main-->

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
