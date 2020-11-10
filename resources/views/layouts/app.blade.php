<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
{{--         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> --}}
{{--         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> --}}
{{--         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 "> --}}
        <!-- CoreUI CSS -->
        <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        {{-- klorofil --}}
{{--         <link rel="stylesheet" href="{{ asset('vendor/linearicons/style.css') }}"> --}}
        <!-- MAIN CSS -->

        {{--  --}}
        <title>{{ config('app.name', 'SISFORESTO') }}</title>
    </head>
    <body class="c-app">
        {{-- sidebar --}}
        @include('partials.menu')
        {{-- end of sidebar --}}
        <div class="c-wrapper">
            {{-- header --}}
            <header class="c-header c-header-light c-header-fixed">
                <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto"   type="button" data-target="#sidebar" data-class="c-sidebar-show">
                    <svg class="c-icon c-icon-lg">
                        <i class="cil-menu"></i>
                    </svg>
                </button>
                    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">

                    <svg class="c-icon c-icon-lg">
                        <i class="cil-menu"></i>
                    </svg>
                    </button>
                    <ul class="c-header-nav d-md-down-none">
                        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
                        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
                        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
                    </ul>

                    <div class="c-subheader justify-content-between px-3">
                        @yield('breadcrumbs')

</div>

{{--                     <ul class="c-header-nav">
                        <li class="c-header-nav-item dropdown show">
                            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true" align-items-center>{{ Auth::user()->name }}&nbsp;</a></li>
                        <li>
                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg"></div>
                        <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
                            <a class="dropdown-item" href="#"> Profile</a>
                            <a class="dropdown-item" href="#">
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Lock Account</a><a class="dropdown-item" href="#">Logout</a>
                        </div>
                        </li>
                    </ul> --}}

                </header>
                {{-- end of header --}}
                <div class="c-body">
                    <main class="c-main">
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </main>
                </div>
                {{-- footer --}}
                <footer class="c-footer">
                    <div><a href="#">SISFORESTO</a> © 2020 Kelompok 2</div>
                    {{-- <div class="mfs-auto">by&nbsp;<a href="#">Linaqruf</a></div> --}}
                </footer>
                {{-- end of footer --}}
            </div>
            <!-- Optional JavaScript -->
            <!-- Popper.js first, then CoreUI JS -->
            <script src="https://unpkg.com/@popperjs/core@2"></script>
            <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
            <script src="{{ asset('js/main.js') }}"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

            @yield('footer')

{{--             <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
            <script src="{{ asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
            <script src="{{ asset('scripts/klorofil-common.js')}}"></script> --}}
 {{--            <div class="c-sidebar-backdrop c-fade c-show"></div> --}}
        </body>
    </html>