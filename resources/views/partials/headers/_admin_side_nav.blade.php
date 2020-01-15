<aside class="sidenav-main nav-expanded nav-collapsible sidenav-light navbar-full sidenav-active-square">
    <!-- header-->
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="#">
                <img src="{{ asset('app-assets/images/logo/materialize-logo-color.png') }}" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Fondo Admin</span></a>
            <a class="navbar-toggler" href="#" onclick="event.preventDefault();"><i class="material-icons">radio_button_checked</i></a>
        </h1>
    </div>
    <!--navigation links-->
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="navigation-header"><a class="navigation-header-text">Pages</a><i class="navigation-header-icon material-icons">more_horiz</i></li>
        <!--Dashboard Link-->
        <li class="bold {{ Route::is('admin.dashboard') ? 'active' : '' }}"><a class="waves-effect waves-cyan {{ Route::is('admin.dashboard') ? 'active gradient-shadow gradient-45deg-grey' : '' }}" href="{{ route('admin.dashboard') }}"><i class="material-icons">widgets</i><span class="menu-title" data-i18n="">Dashboard</span></a></li>

        <!-- Administrator Links-->
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">verified_user</i><span class="menu-title" data-i18n="">Administrators</span><span class="badge badge pill purple float-right mr-10">2</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="{{ Route::is('admins.index') ? 'active' : '' }}"><a class="collapsible-body  {{ Route::is('admins.index') ? 'active gradient-shadow gradient-45deg-grey' : '' }}" href=" {{ route('admins.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>All Admins</span></a>
                    </li>
                    <li class="{{ Route::is('admins.create') ? 'active' : '' }}"><a class="collapsible-body {{ Route::is('admins.create') ? 'active' : '' }}" href="{{ route('admins.create') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Add Admin</span></a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>


    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
