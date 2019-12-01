<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords"
          content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Fondo App | Welcome</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="../../../app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css"
          href="../../../app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/page-knowledge.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->


    <style type="text/css">
        body {
            background-image: url( '{{ asset("app-assets/background/background-h.jpg") }}' );
            background-repeat:no-repeat;
            background-position:100% 100%;
            background-size: cover;
            width: 100%;
            height: 100%;
            background-attachment: fixed;
        }

        #main {
            opacity: 0.7;
        }
    </style>

</head>
<body>

<div id="main" class="main-full">
    <div class="row">
        <div class="content-wrapper-before "></div>
        <div class="col s12 l12">
            <div class="container">
                <!-- knowledge -->
                <div class="section" id="knowledge">
                    <div class="row knowledge-content">
                        <div class="col s12">
                            <div id="search" class="card z-depth-0 center-align p-35 mt-10">
                                <div class="card-content">
                                    <h5 class="center-align mb-3">Welcome to <b>Fondo</b>. How can we help you?</h5>


                                    <div class="col s12 m6">
                                        <div class="card card-hover z-depth-0 card-border-gray">
                                            <a href="{{ route('admin.register') }}">
                                                <div class="card-content center-align">
                                                    <h5><b>Investor</b></h5>
                                                    <i class="material-icons md-48 red-text">favorite_border</i>
                                                    <p class="mb-2 black-text">I want to Invest</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col s12 m6">
                                        <div class="card card-hover z-depth-0 card-border-gray">
                                            <a href="{{ route('register') }}">
                                                <div class="card-content center-align">
                                                    <h5><b>Entrepreneur</b></h5>
                                                    <i class="material-icons md-48 amber-text">filter_none</i>
                                                    <p class="mb-2 black-text">I am looking for funding</p>
                                                </div>
                                            </a>
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
</div>


<script src="../../../app-assets/js/vendors.min.js" type="text/javascript"></script>
<script src="../../../app-assets/js/plugins.js" type="text/javascript"></script>
<script src="../../../app-assets/js/custom/custom-script.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
</body>
</html>
