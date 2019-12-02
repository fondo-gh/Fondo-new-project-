@extends('layouts.user')


@section('styles')
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/user-profile-page.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">

    <style>
        #startup-image {
            width: 100%;
            height: 400px !important;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0">Startup Page</h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Startup Page
                            </li>
                        </ol>
                    </div>
                    <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="user-profile-page.html#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Options</span><i class="material-icons right">arrow_drop_down</i></a>
                        <ul class="dropdown-content" id="dropdown1" tabindex="0">
                            <li tabindex="0"><a class="grey-text text-darken-2" href="#">Update Startup Info<span class="new badge red">9</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="row user-profile mt-1">
                    <img class="responsive-img" id="startup-image" alt="" src="{{ asset("app-assets/background/background-h.jpg") }}">
                </div>
                <div class="section" id="user-profile">
                    <div class="row">
                        <!-- User Profile Feed -->
                        <div class="col s12 m4 l3 user-section-negative-margin">
                            <div class="row">
                                <div class="col s12 center-align">

                                    @if(auth()->user()->profile_image)
                                        <img class="responsive-img circle z-depth-5" width="200" src="{{ asset('uploads/'. auth()->user()->profile_image) }}" alt="">

                                    @else
                                        <img class="responsive-img circle z-depth-5" width="200" src="../../../app-assets/images/user/12.jpg" alt="">
                                    @endif
                                    <br>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col s12">
                                    <h6>Pitched 5 days ago</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col s12">
                                    <p class="m-0 "><b>Description</b></p>
                                    <p class="m-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur consequatur, debitis dicta ducimus eos, explicabo iste iure magni, mollitia non pariatur placeat repellat reprehenderit repudiandae temporibus ullam veniam voluptatibus!
                                    </p>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <!-- User Post Feed -->
                        <div class="col s12 m8 l8">
                            <div class="row">
                                <div class="card user-card-negative-margin z-depth-0" id="feed">
                                    <div class="card-content card-border-gray">
                                        <div class="row">
                                            <div class="col s12">
                                                <h5>Startup Name</h5>
                                                <p>Startup Type </p>
                                                <p>Startup Category </p>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col s12">
                                                <div class="row">
                                                    <div class="col s12">
                                                        <div class="card card-border z-depth-2">
                                                            <div class="card-content">
                                                                <div class="row">

                                                                    <div class="col s12">
                                                                        <a href="user-profile-page.html#">
                                                                            <h6>Pitch Idea</h6>
                                                                        </a>
                                                                        <p class="m-0 amber-text">Capture your investors with a full blown plan.</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <h6 class="font-weight-900 text-uppercase"> Pitch</h6>
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, culpa deserunt ducimus ex expedita iste minus necessitatibus nesciunt nulla optio, porro possimus quasi quidem quo reiciendis rem repellendus, ullam voluptate.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s12">
                                                <ul class="collapsible popout" data-collapsible="accordion">
                                                    <li>
                                                        <div class="collapsible-header"><i class="material-icons">mic_none</i> Key Resources</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                                                et
                                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip
                                                                ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                                tempor
                                                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                                ullamco
                                                                laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis
                                                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="collapsible-header"><i class="material-icons">cloud_queue</i> Value Proposition</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                                                et
                                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip
                                                                ex ea commodo consequat.
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="collapsible-header"><i class="material-icons">adjust</i> Revenue Model</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                                                et
                                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip
                                                                ex ea commodo consequat.
                                                            </p>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="collapsible-header"><i class="material-icons">adjust</i> Cost Structure</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                                                et
                                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip
                                                                ex ea commodo consequat.
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="collapsible-header"><i class="material-icons">adjust</i> Financials</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                                                et
                                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                                aliquip
                                                                ex ea commodo consequat.
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!-- START RIGHT SIDEBAR NAV -->
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection

