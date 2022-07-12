<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon-->
        <link rel="shortcut icon" href="{{ asset('img/delgont-favicon.png') }}" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Delgont | @yield('title', 'Delgont')</title>

        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link href="{{ asset('css/delgont.css') }}" rel="stylesheet">
        @yield('requiredCss')
        @php
            $customCss = config('cmsui.css', [])
        @endphp
        @if (count($customCss))
            @for ($i = 0; $i < count($customCss); $i++)
                <link href="{{ asset($customCss[$i]) }}" rel="stylesheet">
            @endfor
        @endif

        <!-- Scripts -->
        <script src="{{ asset('js/delgont.js') }}" defer></script>
        @yield('requiredJs')
    </head>
    <body>
        <div class="d-flex" id="wrapper">

            <!-- Sidebar Wrapper-->
            <div id="sideBarWrapper" class="sidebar-wrapper sidebar-toggledd">
                @includeIf('delgont::include.sidebar')
            </div>
            <!-- //Sidebar Wrapper -->

            <!-- Page Content -->
            <div id="content-wrapper" class=" content-wrapper d-flex flex-column body-bg-color">
                <div class="content" id="content">
                    <div class="alerts mt-1">
                        <div class="alert {{ session('deleted')  ? 'alert-warning' : 'alert-success' }} alert-dismissible fade {{ (session('updated') || session('deleted') || session('created') || session('edited') || session('success')) ? 'show' : '' }}" role="alert" id="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <strong>
                              Operation Was Succesful: 
                          </strong>
                          <span class="message-holder">
                             @if (session('updated'))
                                {{ session('updated') }}
                            @elseif(session('created'))
                                {{ session('created') }}
                            @elseif(session('edited'))
                                {{ session('edited') }}
                            @elseif(session('deleted'))
                                {{ session('deleted') }}
                            @elseif(session('success'))
                                {{ session('success') }}
                            @endif
                          </span>
                        </div>
                    </div>
                    <!-- navbar =-->
                    <header class="header container-fluid navbar-wrapper" id="header">
                        @include('delgont::include.navbar')
                    </header>
                    <!-- //navbar -->

                    <!-- Page Heading -->
                      <div class="container-fluid mt-4">
                          <div class="row">
                              <div class="col-12 col-lg-3"><h1 class="h1 page-heading mt-3">@yield('pageHeading')</h1></div>
                              <div class="col-lg-7 text-right mt-1">@yield('actions')</div>
                              <div class="col-lg-2 mt-1 text-right">
                                @yield('actions-right')
                              </div>
                          </div>
                      </div>

                    <!-- Begin Page Content -->
                    @yield('content')
                    
                </div>

               
                
            </div>
           
        </div>
    </body>

</html>


