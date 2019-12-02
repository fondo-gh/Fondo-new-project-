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
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0">Profile Page</h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Profile Page
                            </li>
                        </ol>
                    </div>
                    <div class="col s2 m6 l6"><a
                            class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                            href="cards-extended.html#!" data-target="dropdown1"><i
                                class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Settings</span><i
                                class="material-icons right">arrow_drop_down</i></a>
                        <ul class="dropdown-content" id="dropdown1" tabindex="0">
                            <li tabindex="0"><a class="grey-text text-darken-2"
                                                href=" {{ route('profile.update.page') }}">Update
                                    Profile</a></li>
                            <li tabindex="0"><a class="grey-text text-darken-2" href="#">Add
                                    Professional Skills</a></li>
                            <li class="divider" tabindex="-1"></li>
                            <li tabindex="0"><a class="grey-text text-darken-2" href="#">Update
                                    Credentials</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12">
            <div class="container">
                <!--Gradient Card-->
                <div id="cards-extended">

                    <!--Blog Card-->
                    <div id="card-panel-type" class="section">
                        <div class="row mt-2">
                            <div class="col s12 m6 l4 card-width">
                                <div class="card-panel border-radius-6 mt-10 card-animation-1">
                                    @if(auth()->user()->profile_image)
                                        <img class="responsive-img border-radius-8 z-depth-4 image-n-margin"
                                             src="{{ asset('uploads/'. auth()->user()->profile_image) }}"
                                             alt="Profile Image"/>
                                    @else
                                        <img class="responsive-img border-radius-8 z-depth-4 image-n-margin"
                                             src="../../../app-assets/images/cards/news-fashion.jpg"
                                             alt="Profile Image"/>
                                    @endif
                                    <div class="card-content">
                                        <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right"
                                           href="{{ route('profile.update.page') }}">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <h5 class="card-title activator grey-text text-darken-4">Roger Waters</h5>
                                        <p><i class="material-icons profile-card-i">perm_identity</i> {{ auth()->user()->residence ?? "Residence not set" }}</p>
                                        <p><i class="material-icons profile-card-i">perm_phone_msg</i> {{ auth()->user()->contact_number ?? "Contact Number not set" }}
                                        </p>
                                        <p><i class="material-icons profile-card-i">email</i> {{ auth()->user()->email }}</p>
                                        <p><i class="material-icons profile-card-i">phone</i> {{ auth()->user()->account_number ?? "Account Number Not Set" }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card-panel border-radius-6 pt-4 mt-10 pb-4">
                                    <span class="red-text"><i
                                            class="material-icons vertical-align-bottom"> trending_up </i> Professional Skills</span>
                                    <p class="mt-4 mb-0">Let your investors know your potentials</p>

                                    <div class="card-content">
                                        <a class="btn-floating modal-trigger btn-move-up waves-effect waves-light red accent-2 z-depth-4 right"
                                           href="#modal1">
                                            <i class="material-icons">add</i>
                                        </a>
                                        <ul class="collection">
                                            <li class="collection-item">Fluent in Communication</li>
                                            <li class="collection-item">IT literate</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="divider mt-8"></div>

            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal border-radius-6">
        <div class="modal-content">
            <h5 class="mt-0">Add Professional Skill</h5>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="subject" type="text" class="validate">
                            <label for="subject">Skill Name</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a class="btn  waves-effect waves-light mr-2">
                <i class="material-icons">add</i> Add
            </a>
        </div>
    </div>
    <!-- Modal Structure Ends --><!-- START RIGHT SIDEBAR NAV -->

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

