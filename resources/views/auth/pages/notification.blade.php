@extends('layouts.user')

@section('styles')
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="../../../app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css"
          href="../../../app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-sidebar.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-email.css">
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
                                        <li class="active"><a href="app-email.html#!" class="text-sub"><i
                                                    class="material-icons mr-2">today</i> All</a></li>
                                        <li><a href="app-email.html#!" class="text-sub"><i class="material-icons mr-2">
                                                    today </i> Today</a></li>
                                        <li><a href="app-email.html#!" class="text-sub"><i class="material-icons mr-2">
                                                    today </i> This Month</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="app-email.html#" data-target="email-sidenav"
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
                                        <a href="app-email-content.html" class="collection-item animate fadeUp delay-1">
                                            <div class="list-left">
                                                <label>
                                                    <input type="checkbox" name="foo"/>
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-title-area">
                                                    <div class="user-media">
                                                        <img src="../../../app-assets/images/user/2.jpg" alt=""
                                                             class="circle z-depth-2 responsive-img avtar">
                                                        <div class="list-title">Gorge Fernandis</div>
                                                    </div>
                                                    <div class="title-right">

                                                    </div>
                                                </div>
                                                <div class="list-desc">There are many variations of passages of Lorem
                                                    Ipsum available, but the majority
                                                    have suffered alteration in some form, by injected humour, or
                                                    randomised words which don't look even
                                                    slightly believable. If you are going to use a passage of Lorem
                                                    Ipsum
                                                </div>
                                            </div>
                                            <div class="list-right">
                                                <div class="list-date"> 2:03 PM</div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Area Ends -->

                <!-- Add new email popup -->
                <div style="bottom: 54px; right: 19px;" class="fixed-action-btn direction-top">
                    <a class="btn-floating btn-large primary-text gradient-shadow modal-trigger"
                       href="#modal1">
                        <i class="material-icons">add</i>
                    </a>
                </div>
                <!-- Add new email popup Ends-->

                <!-- Modal Structure -->
                <div id="modal1" class="modal border-radius-6">
                    <div class="modal-content">
                        <h5 class="mt-0">New Message</h5>
                        <hr>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix"> person_outline </i>
                                        <input id="email" type="email" class="validate">
                                        <label for="email">Recipients</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix"> title </i>
                                        <input id="subject" type="text" class="validate">
                                        <label for="subject">Subject</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="editor">Message</textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn modal-close waves-effect waves-light mr-2">
                            <i class="material-icons">send</i> Send
                        </a>
                    </div>
                </div>
                <!-- Modal Structure Ends --><!-- START RIGHT SIDEBAR NAV -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/sortable/jquery-sortable-min.js"></script>
    <script src="../../../app-assets/vendors/tinymce/tinymce.min.js"></script>
    <script src="../../../app-assets/vendors/waypoints/jquery.waypoints.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/custom/custom-script.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/app-email.js" type="text/javascript"></script>
@endsection

