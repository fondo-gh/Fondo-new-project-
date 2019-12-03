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
                        <h5 class="breadcrumbs-title mt-0 mb-0">{{ $startup->name }}</h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Startup Page
                            </li>
                        </ol>
                    </div>
                    <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="user-profile-page.html#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Options</span><i class="material-icons right">arrow_drop_down</i></a>
                        <ul class="dropdown-content" id="dropdown1" tabindex="0">
                            <li tabindex="0"><a class="grey-text text-darken-2" href="{{ route('startup.update.page', $startup->id) }}">Update Startup Info<span class="new badge red">9</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="row user-profile mt-1">
                    <img class="responsive-img" id="startup-image" alt="" src="{{ asset("uploads/" . $startup->image) }}">
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
                                    <h6>Pitched {{ $startup->created_at->diffForHumans() }}</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col s12">
                                    <p class="m-0 "><b>Description</b></p>
                                    <p class="m-0">
                                        {{ $startup->description }}
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
                                                <h5>{{ $startup->name }}</h5>
                                                <p>{{ $startup->type }} </p>
                                                <p>{{ $startup->category }} </p>
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
                                                                        <a href="#">
                                                                            <h6>Pitch Idea</h6>
                                                                        </a>
                                                                        <p class="m-0 amber-text">Capture your investors with a full blown plan.</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <h6 class="font-weight-900 text-uppercase"> Pitch</h6>
                                                                <p>
                                                                    {{ $startup->pitch }}
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
                                                        <div class="collapsible-header"><i class="material-icons">adjust</i> Key Resources</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                                {{ $startup->key_resources }}
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="collapsible-header"><i class="material-icons">adjust</i> Value Proposition</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                             {{ $startup->value_proposition }}
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="collapsible-header"><i class="material-icons">adjust</i> Revenue Model</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                                {{ $startup->revenue_model }}
                                                            </p>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="collapsible-header"><i class="material-icons">adjust</i> Cost Structure</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                                {{ $startup->cost_structure }}
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="collapsible-header"><i class="material-icons">adjust</i> Financials</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                                {{ $startup->financials }}
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="collapsible-header"><i class="material-icons">adjust</i> Customer Target</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                                {{ $startup->customer_target }}
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="collapsible-header"><i class="material-icons">adjust</i> Sale Channels</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                                {{ $startup->sale_channels }}
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="collapsible-header"><i class="material-icons">adjust</i> Key Metrics</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                                {{ $startup->key_metrics }}
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="collapsible-header"><i class="material-icons">adjust</i> Business Model</div>
                                                        <div class="collapsible-body">
                                                            <p>
                                                                {{ $startup->business_model }}
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

