<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ $title }}</title>
        <link href="{{ url('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet') }}" />
        <link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet" />
        <script src="{{ url('https://use.fontawesome.com/releases/v6.3.0/js/all.js') }}" crossorigin="anonymous"></script>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/icon-web.png') }}">
    </head>
    <body class="sb-nav-fixed">

        {{-- Navbar --}}
        @include('partials.navbar')

        <div id="layoutSidenav">
            {{-- Sidebar --}}
            <div id="layoutSidenav_nav">
                @include('partials.sidebar')
            </div>
            {{-- Main --}}
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">{{ $mainHeader }}</h1>
                        @yield('container')
                </main>

                {{-- Footer --}}
                @include('partials.footer')
            </div>
        </div>
        
        <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/js/scripts.js') }}"></script>
        <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('backend/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="{{ url('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
