@extends('layouts.user')

@section('styles')
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/magnific-popup/magnific-popup.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/hover-effects/media-hover-effects.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">

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
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="section">
                    <div class="card">
                        <div class="card-content">
                            <p class="caption mb-0">Your startup.</p>
                        </div>
                    </div>

                    <div class="row">
                        <h4 class="col s12">Fondo</h4>
                        <div class="col s12 m6 grid">
                            <figure class="effect-sarah">
                                <img src="../../../app-assets/images/gallery/13.png" alt="img13" />
                                <figcaption>
                                    <h2>Free
                                        <span>Sarah</span>
                                    </h2>
                                    <p>Sarah likes to watch clouds. She's quite depressed.</p>
                                    <a href="{{ route('startup.show') }}">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                </div><!-- START RIGHT SIDEBAR NAV -->
                <!-- END RIGHT SIDEBAR NAV -->
                <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
                    <ul>
                        <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
                        <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
                        <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
                        <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
                    </ul>
                </div>
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
    <script src="../../../app-assets/vendors/magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/masonry.pkgd.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/custom/custom-script.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/media-hover-effects.js" type="text/javascript"></script>

@endsection

