@extends('layouts.user')

@section('styles')
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('app-assets/css/themes/vertical-modern-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('app-assets/css/themes/vertical-modern-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-sidebar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-email.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
            <div class="container">
                <!-- Sidebar Area Starts -->
                <div class="sidebar-left sidebar-fixed">
                    <div class="sidebar">
                        <div class="sidebar-content">
                            <div class="sidebar-header">
                                <div class="sidebar-details">
                                    <h5 class="m-0 sidebar-title"><i class="material-icons app-header-icon text-top">notifications_none</i>
                                        Notifications</h5>

                                </div>
                            </div>
                            <div id="sidebar-list" class="sidebar-menu list-group position-relative animate fadeLeft">
                                <div class="sidebar-list-padding app-sidebar sidenav" id="email-sidenav">
                                    <ul class="email-list display-grid">
                                        <li class="sidebar-title">Folders</li>
                                        <li class="active"><a href="#!" class="text-sub"><i
                                                    class="material-icons mr-2">today</i> All</a></li>
                                        <li><a href="#!" class="text-sub"><i class="material-icons mr-2">
                                                    today </i> Today</a></li>
                                        <li><a href="#!" class="text-sub"><i class="material-icons mr-2">
                                                    today </i> This Month</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" data-target="email-sidenav"
                               class="sidenav-trigger hide-on-large-only"><i class="material-icons">menu</i></a>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Area Ends -->

                <!-- Content Area Starts -->
                <div class="app-email">
                    <div class="content-area content-right">
                        <div class="app-wrapper">
                            <div class="app-search">
                                <i class="material-icons mr-2 search-icon">search</i>
                                <input type="text" placeholder="Search Notifications" class="app-filter"
                                       id="email_filter">
                            </div>
                            <div class="card card card-default scrollspy border-radius-6 fixed-width">
                                <div class="card-content p-0">
                                    <div class="email-header">
                                        <div class="left-icons">
              <span class="header-checkbox">
                <label>
                  <input type="checkbox" onClick="toggle(this)"/>
                  <span></span>
                </label>
              </span>
                                        </div>
                                        <div class="list-content"></div>
                                        <div class="email-action">
                                            <span class="email-options"><i
                                                    class="material-icons grey-text">more_vert</i></span>
                                        </div>
                                    </div>
                                    <div class="collection email-collection">

                                        @foreach(auth()->user()->startup_notifications as $notification)
                                            <a href="#" class="collection-item animate fadeUp delay-1">
                                                <div class="list-left">
                                                    <label>
                                                        <input type="checkbox" name="foo"/>
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="user-media">
                                                            <img src="{{ asset('app-assets/images/avatar/profile.png') }}" alt=""
                                                                 class="circle z-depth-2 responsive-img avtar">
                                                            <div class="list-title">{{ $notification->admin->name }}</div>
                                                        </div>
                                                        <div class="title-right">

                                                        </div>
                                                    </div>
                                                    <div class="list-desc">
                                                        {{ $notification->admin->name }} has expressed interest in your startup {{ $notification->startup->name }}.
                                                        You can proceed by contacting your investor.
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> {{ $notification->created_at->diffForHumans() }}</div>
                                                </div>
                                            </a>

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('app-assets/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('app-assets/vendors/sortable/jquery-sortable-min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/waypoints/jquery.waypoints.min.js') }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('app-assets/js/plugins.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/custom/custom-script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('app-assets/js/scripts/app-email.js') }}" type="text/javascript"></script>
@endsection

