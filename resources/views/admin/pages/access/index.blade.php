@extends('layouts.admin')
@section('styles')
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/flag-icon/css/flag-icon.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('app-assets/vendors/data-tables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('app-assets/vendors/data-tables/css/select.dataTables.min.css') }}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/data-tables.css') }}">
    <!-- END: Page Level CSS-->
@endsection

@section('header-title', 'Administrators')

@section('content')
    <div class="row">
        <div class="col s12">
            <div class="section section-data-tables">
                <div class="card">
                    <div class="card-content">
                        <h4 class="card-title">Administrators</h4>
                        <div class="row">
                            <div class="col s12">
                                <table id="page-length-option" class="display">
                                    <thead>
                                    <tr>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img style="border-radius: 50%" width="40px" height="40px"
                                                 src="{{ asset('app-assets/images/avatar/profile.png') }}" alt="avatar">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>mail@mail.com</td>
                                        <td>Super Administrator</td>
                                        <td><span class="badge badge pill purple">Active</span></td>
                                        <td>2011/04/25</td>
                                        <td class="center-align">
                                            <a class="btn btn-flat dropdown-settings btn-small waves-effect waves-yellow breadcrumbs-btn right" href="#" data-target="dropdown1">
                                                <i class="material-icons">more_vert</i></a>
{{--                                                <i class="material-icons right">arrow_drop_down</i></a>--}}
                                            <ul class="dropdown-content" id="dropdown1" tabindex="0">
                                                <li tabindex="0"><a class="grey-text text-darken-2" href="#"><i class="material-icons">account_circle</i>View</a></li>
                                                <li tabindex="0"><a class="grey-text text-darken-2" href="#"><i class="material-icons">edit</i>Edit</a></li>
                                                <li tabindex="0"><a class="grey-text text-darken-2" href="#"><i class="material-icons">lock_outline</i>Lock</a></li>
                                                <li tabindex="0"><a class="grey-text text-darken-2" href="#"><i class="material-icons">delete_forever</i>Delete</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tfoot>
                                    <tr>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('app-assets/vendors/data-tables/js/jquery.dataTables.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/data-tables/js/dataTables.select.min.js') }}"
            type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('app-assets/js/scripts/data-tables.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
@endsection
