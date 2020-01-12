<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="#"><img src="{{ asset('app-assets/images/logo/materialize-logo-color.png') }}" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Fondo Admin</span></a>
        </h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="navigation-header"><a class="navigation-header-text">Pages</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
{{--        <li class="bold {{ Route::is('home') ? 'active' : '' }}"><a class="waves-effect waves-cyan {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}"><i class="material-icons">face</i><span class="menu-title" data-i18n="">Profile</span></a>--}}
{{--        </li>--}}
        <li class="bold {{ Route::is('admin.dashboard') ? 'active' : '' }}"><a class="waves-effect waves-cyan {{ Route::is('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"><i class="material-icons">widgets</i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
{{--        <li class="bold {{ Route::is('notification') ? 'active' : '' }}"><a class="waves-effect waves-cyan {{ Route::is('notification') ? 'active' : '' }} " href="{{ route('notification') }}"><i class="material-icons">notifications_none</i><span class="menu-title" data-i18n="">Notifications</span></a>--}}
{{--        </li>--}}
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
