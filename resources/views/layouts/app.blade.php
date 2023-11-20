<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ secure_asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ secure_asset('img/logo1.png') }}">
    <title>
        Nova Life
    </title>

    <link href="{{ secure_asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ secure_asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTj4coD-nVKAVxCWCn-wsnTIDRzMZQk-c&callback=console.debug&libraries=places,marker&v=beta">
    </script>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/f3f0a010ab.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ secure_asset('assets/css/argon-dashboard.css') }}" rel="stylesheet" />

</head>

<body class="{{ $class ?? '' }}">

    @guest
        @yield('content')
    @endguest

    @auth
        @if (in_array(request()->route()->getName(),
                ['sign-in-static', 'sign-up-static', 'login', 'register', 'recover-password', 'rtl', 'virtual-reality']))
            @yield('content')
        @else
            @if (
                !in_array(request()->route()->getName(),
                    ['profile', 'profile-static']))
                <div class="min-height-300 bg-primary position-absolute w-100"></div>
            @elseif (in_array(request()->route()->getName(),
                    ['profile-static', 'profile']))
                <div class="position-absolute w-100 min-height-300 top-0"
                    style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
                    <span class="mask bg-primary opacity-6"></span>
                </div>
            @endif
              @include('layouts.navbars.auth.sidenav')
            <main class="main-content border-radius-lg">
                @yield('content')
            </main>
            @can('dashboard')
                @include('components.fixed-plugin')
            @endcan
        @endif
    @endauth

    <script src="{{ asset('/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/jquery.min.js') }}"></script>

    <script src="{{ asset('/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/prims.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/docs.min.js') }}"></script>



    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ sevure_asset('assets/js/argon-dashboard.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/plugins/multipart.js') }}"></script> --}}
    <script src="{{ sevure_asset('/assets/js/plugins/holder.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/moment.min.js') }}"></script>

    <script src="{{ sevure_asset('/assets/js/plugins/choises.min.js') }}"></script>
    <script src="{{ sevure_asset('/assets/js/plugins/dropzone.min.js') }}"></script>
    <script src="{{ sevure_asset('/assets/js/plugins/quill.min.js') }}"></script>

    @stack('js');

</body>

</html>
