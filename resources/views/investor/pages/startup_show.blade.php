@extends('layouts.investor')


@section('styles')
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/vertical-modern-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/vertical-modern-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/user-profile-page.css') }}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/custom/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/user-profile-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/vendors.min.css') }}">


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
                    <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">I want to Invest</span><i class="material-icons right">arrow_drop_down</i></a>
                        <ul class="dropdown-content" id="dropdown1" tabindex="0">
                            <li tabindex="0"><a class="grey-text text-darken-2 modal-trigger" href="#modal1">Invest<span class="badge red">now</span></a></li>
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

                                    @if($startup->user->profile_image)
                                        <img class="responsive-img circle z-depth-5" width="200" src="{{ asset('uploads/'. $startup->user->profile_image) }}" alt="">
                                    @else
                                        <img class="responsive-img circle z-depth-5" width="200" src="{{ asset('app-assets/images/avatar/profile.png') }}" alt="">
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
                            <div class="row">
                                <div class="col s12">
                                    <p class="m-0 "><b>Entrepreneur's Details</b></p>
                                    <p><i class="material-icons profile-card-i">perm_identity</i> {{ $startup->user->name ?? "Name not set" }}</p>
                                    <p><i class="material-icons profile-card-i">perm_identity</i> {{ $startup->user->residence ?? "Residence not set" }}</p>
                                    <p><i class="material-icons profile-card-i">perm_phone_msg</i> {{ $startup->user->contact_number ?? "Contact Number not set" }}
                                    </p>
                                    <p><i class="material-icons profile-card-i">email</i> {{ $startup->user->email }}</p>
                                </div>
                            </div>
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
                                        <div class="row mt-1">
                                            <div class="col s12">
                                                <div class="row">
                                                    <div class="col s12">
                                                        <div class="card card-border z-depth-2">
                                                            <div class="card-content">
                                                                <div class="row">
                                                                    <div class="progress" id="progress-bar">
                                                                        <div class="indeterminate"></div>
                                                                    </div>

                                                                    <div class="col s6">
                                                                        <a href="#">
                                                                            <h6>Brief Financial Statement</h6>
                                                                            <small>* Costs are in GHC</small>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col s6">
                                                                        <button class="btn btn-small" href="#" id="prediction-btn">Run Prediction</button>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <p>Research and Development Cost: <b>{{ $startup->research_cost }}</b></p>
                                                                <p>Administration Cost: <b>{{ $startup->administration_cost }}</b></p>
                                                                <p>Marketing Cost: <b>{{ $startup->marketing_cost }}</b></p>
                                                                <p>Profit : <b>{{ $startup->profit }}</b></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
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
                                                                        <p class="m-0 amber-text">{{ $startup->user->name }} 's pitch idea</p>
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
                                                                @if($startup->financials)
                                                                    <a href="{{ asset('uploads/'.  $startup->financials  ) }}" target=_blank">Financial Model File</a>
                                                                @endif
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
                                                                @if($startup->business_model)
                                                                    <a href="{{ asset('uploads/'.  $startup->business_model  ) }}" target=_blank">Business Model File</a>
                                                                @endif
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


    <!-- Modal Structure -->
    <div id="modal1" class="modal border-radius-6">
        <form class="col s12" method="post" action="{{ route('startup.invest', $startup->id) }}">
            @csrf
            <div class="modal-content">
                <h5 class="mt-0">Confirm Investment</h5>
                <div class="row">
                    <p>
                        Despite the predictions, you are liable for any decisions you make.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn  waves-effect waves-light mr-2">
                    <i class="material-icons">check</i> Invest
                </button>
            </div>
        </form>
    </div>
    <!-- Modal Structure Ends -->

@endsection

@section('scripts')

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

    <script>
        $(document).ready(function () {
            /**
             * runs prediction from ai
             */
            function runPrediction() {
                //get the startup id and token
                let startupId = '{{ $startup->id }}';
                let token = '{{ csrf_token() }}';
                //prepare the body
                let body = {
                    '_token' : token,
                    'id' : startupId
                };
                //make api call
                $.post('{{ route('startup.prediction') }}', body).done(result => {
                    console.log("result", result);
                    result = JSON.parse(result);
                    console.log("parsed", result);
                    console.log(result['data']['Results']['output1'][0]);

                    let data = result['data']['Results']['output1'][0];
                    let label = data['Scored Labels'];
                    let probability = data['Scored Probabilities'];
                    probability = Number.parseFloat(probability);

                    $('#progress-bar').hide();

                    console.log(probability);
                    if(probability < 0.5) {
                        swal("Prediction Result", "Probability rate is " + probability + " Startup is not viable for investment.", "info");
                    } else {
                        swal("Prediction Result", "Probability rate is " + probability + " Startup is viable for investment.", "success");
                    }

                }).fail(error => {
                    console.log("error", error);
                    $('#progress-bar').hide();
                    swal("Error", error, "error");

                });
            }

            //hide progress bar
            $('#progress-bar').hide();

            //listens to the prediction event click
            $("#prediction-btn").on('click', function (event) {
                event.preventDefault();
                $('#progress-bar').show();
                runPrediction();
            });


        });
    </script>
@endsection

