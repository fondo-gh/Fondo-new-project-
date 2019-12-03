@extends('layouts.user')
@section('styles')
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/materialize-stepper/materialize-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/dropify/css/dropify.min.css">

    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/form-wizard.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
@endsection

@section('content')
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0">Create Startup Page</h5>
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
                <div class="section section-form-wizard">
                    <div class="card">
                        <div class="card-content">
                            <p class="caption mb-0">Create Startup Page</p>
                        </div>
                    </div>

                    <!-- Linear Stepper -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card">
                                <form method="post" enctype="multipart/form-data" action="{{ route('startup.store') }}">
                                    @csrf
                                    <div class="card-content">
                                        <div class="card-header">
                                            <h4 class="card-title">Linear Stepper</h4>
                                        </div>
                                        <ul class="stepper linear" id="linearStepper">
                                            <li class="step active">
                                                <div class="step-title waves-effect">Upload Startup Picture</div>
                                                <div class="step-content">

                                                    <div class="row mt-4">
                                                        <div class="col s12 m12 l12">
                                                            <input type="file" id="input-file-now" name="file" required class="dropify" data-default-file=""/>
                                                        </div>
                                                    </div>

                                                    <div class="step-actions">
                                                        <div class="row">
                                                            <div class="col m4 s12 mb-3">
                                                                <button class="waves-effect waves dark btn btn-primary next-step"
                                                                        type="submit">
                                                                    Next
                                                                    <i class="material-icons right">arrow_forward</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="step">
                                                <div class="step-title waves-effect">Provide Startup Details</div>
                                                <div class="step-content">
                                                    <div class="row mt-4">
                                                        <div class="input-field col m6 s12">
                                                            <label for="proposal1">Startup Name <span class="red-text">*</span></label>
                                                            <input type="text" class="validate" id="proposal1" name="name" value="{{ old('name') }}" required>
                                                        </div>
                                                        <div class="input-field col m6 s12">
                                                            <select name="type" required>
                                                                <option value="Select" disabled selected>Select Startup Type</option>
                                                                <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                                                                <option value="Limited Partnership">Limited Partnership</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col m6 s12">
                                                            <select name="category" required>
                                                                <option value="Select" disabled selected>Select Startup Category</option>
                                                                <option value="Finance">Finance</option>
                                                                <option value="Technology and Innovation">Technology and Innovation</option>
                                                                <option value="Agriculture">Agriculture</option>
                                                                <option value="Industry">Industry</option>
                                                                <option value="Health">Health</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-field col m6 s12">
                                                            <label for="desc">Short Description:</label>
                                                            <textarea name="description" id="desc" rows="4"  class="materialize-textarea" required>{{ old('description') }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="step-actions">
                                                        <div class="row">
                                                            <div class="col m4 s12 mb-3">
                                                                <button class="red btn btn-reset" type="reset">
                                                                    <i class="material-icons left">clear</i>Reset
                                                                </button>
                                                            </div>
                                                            <div class="col m4 s12 mb-3">
                                                                <button class="btn btn-light previous-step">
                                                                    <i class="material-icons left">arrow_back</i>
                                                                    Prev
                                                                </button>
                                                            </div>
                                                            <div class="col m4 s12 mb-3">
                                                                <button class="waves-effect waves dark btn btn-primary next-step"
                                                                        type="submit">
                                                                    Next
                                                                    <i class="material-icons right">arrow_forward</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <li class="step">
                                                <div class="step-title waves-effect">Pitch Your Idea</div>
                                                <div class="step-content">
                                                    <div class="row">
                                                        <div class="input-field col m12 s12">
                                                            <label for="desc">Pitch your idea:</label>
                                                            <textarea name="pitch" id="desc" rows="8" cols="5" class="materialize-textarea" required>{{ old('pitch') }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="step-actions">
                                                        <div class="row">
                                                            <div class="col m4 s12 mb-3">
                                                                <button class="red btn btn-reset" type="reset">
                                                                    <i class="material-icons left">clear</i>Reset
                                                                </button>
                                                            </div>
                                                            <div class="col m4 s12 mb-3">
                                                                <button class="btn btn-light previous-step">
                                                                    <i class="material-icons left">arrow_back</i>
                                                                    Prev
                                                                </button>
                                                            </div>
                                                            <div class="col m4 s12 mb-3">
                                                                <button class="waves-effect waves dark btn btn-primary"
                                                                        type="submit">
                                                                    Next
                                                                    <i class="material-icons right">arrow_forward</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>



                </div><!-- START RIGHT SIDEBAR NAV -->

            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/js/vendors.min.js" type="text/javascript"></script>

    <script src="../../../app-assets/vendors/dropify/js/dropify.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/form-file-uploads.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/materialize-stepper/materialize-stepper.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/custom/custom-script.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/form-wizard.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
@endsection

