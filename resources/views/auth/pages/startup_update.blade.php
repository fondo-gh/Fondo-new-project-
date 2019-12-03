@extends('layouts.user')
@section('styles')
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/vendors.min.css) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/flag-icon/css/flag-icon.min.css) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/materialize-stepper/materialize-stepper.min.css) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/dropify/css/dropify.min.css) }}">

    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/vertical-modern-menu-template/materialize.css) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/vertical-modern-menu-template/style.css) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/form-wizard.css) }}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/custom/custom.css) }}">
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
                        <h5 class="breadcrumbs-title mt-0 mb-0">{{ $startup->name }}</h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Update Startup Information
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
                            <p class="caption mb-0">Update Startup Information</p>
                        </div>
                    </div>

                    <!-- Linear Stepper -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card">
                                <form method="post" action="{{ route('startup.update', $startup->id) }}">
                                    @csrf
                                    <div class="card-content">
                                        <div class="card-header">
                                            <h4 class="card-title">Linear Stepper</h4>
                                        </div>
                                        <ul class="stepper linear" id="linearStepper">
                                            <li class="step active">
                                                <div class="step-title waves-effect">Key Resources</div>
                                                <div class="step-content">

                                                    <div class="row">
                                                        <div class="input-field col m12 s12">
                                                            <label for="desc">Key Resources</label>
                                                            <textarea name="key_resources" id="desc" rows="8" cols="5" class="materialize-textarea">{{ $startup->key_resources }}</textarea>
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
                                                <div class="step-title waves-effect">Value Proposition</div>
                                                <div class="step-content">

                                                    <div class="row">
                                                        <div class="input-field col m12 s12">
                                                            <label for="desc">Value Proposition</label>
                                                            <textarea name="value_proposition" id="desc" rows="8" cols="5" class="materialize-textarea">{{ $startup->value_proposition }}</textarea>
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
                                                <div class="step-title waves-effect">Revenue Model</div>
                                                <div class="step-content">

                                                    <div class="row">
                                                        <div class="input-field col m12 s12">
                                                            <label for="desc">Revenue Model</label>
                                                            <textarea name="revenue_model" id="desc" rows="8" cols="5" class="materialize-textarea">{{ $startup->revenue_model }}</textarea>
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
                                                <div class="step-title waves-effect">Cost Structure</div>
                                                <div class="step-content">

                                                    <div class="row">
                                                        <div class="input-field col m12 s12">
                                                            <label for="desc">Cost Structure</label>
                                                            <textarea name="cost_structure" id="desc" rows="8" cols="5" class="materialize-textarea">{{ $startup->cost_structure }}</textarea>
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
                                                <div class="step-title waves-effect">Financials</div>
                                                <div class="step-content">

                                                    <div class="row">
                                                        <div class="input-field col m12 s12">
                                                            <label for="desc">Financials</label>
                                                            <textarea name="financials" id="desc" rows="8" cols="5" class="materialize-textarea">{{ $startup->financials }}</textarea>
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
                                                <div class="step-title waves-effect">Customer Target</div>
                                                <div class="step-content">

                                                    <div class="row">
                                                        <div class="input-field col m12 s12">
                                                            <label for="desc">Customer Target</label>
                                                            <textarea name="customer_target" id="desc" rows="8" cols="5" class="materialize-textarea">{{ $startup->customer_target }}</textarea>
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
                                                <div class="step-title waves-effect">Sale Channels</div>
                                                <div class="step-content">

                                                    <div class="row">
                                                        <div class="input-field col m12 s12">
                                                            <label for="desc">Sale Channels</label>
                                                            <textarea name="sale_channels" id="desc" rows="8" cols="5" class="materialize-textarea">{{ $startup->sale_channels }}</textarea>
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
                                                <div class="step-title waves-effect">Key Metrics</div>
                                                <div class="step-content">

                                                    <div class="row">
                                                        <div class="input-field col m12 s12">
                                                            <label for="desc">Key Metrics</label>
                                                            <textarea name="key_metrics" id="desc" rows="8" cols="5" class="materialize-textarea">{{ $startup->key_metrics }}</textarea>
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
                                                <div class="step-title waves-effect">Business Model</div>
                                                <div class="step-content">
                                                    <div class="row">
                                                        <div class="input-field col m12 s12">
                                                            <label for="desc">Business Model</label>
                                                            <textarea name="business_model" id="desc" rows="8" cols="5" class="materialize-textarea">{{ $startup->business_model }}</textarea>
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
    <script src="{{ asset('app-assets/js/vendors.min.js) }}" type="text/javascript"></script>

    <script src="{{ asset('app-assets/vendors/dropify/js/dropify.min.js) }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('app-assets/js/scripts/form-file-uploads.js) }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('app-assets/vendors/materialize-stepper/materialize-stepper.min.js) }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('app-assets/js/plugins.js) }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/custom/custom-script.js) }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/scripts/customizer.js) }}" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('app-assets/js/scripts/form-wizard.js) }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
@endsection

