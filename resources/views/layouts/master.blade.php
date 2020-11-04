<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no"
        charset="utf-8">
    <title>City'Vo - @yield('title')</title>

    {{-- SITE.CSS --}}
    <link rel="stylesheet" href="{{ asset('site.css') }}">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-reboot.min.css') }}">

    {{-- SCRIPT.JS --}}
    <script src="{{ asset('script.js') }}"></script>

    {{-- JS --}}
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/7b2ae56766.js" crossorigin="anonymous"></script>

</head>

<body>
    {{-- Top navbar --}}
    <nav class="navbar fixed-top">
        <span class="navbar-title">
            <a href="/">
                <i class="fas fa-home"></i>
                &nbsp; CITY'VO
            </a>
        </span>
        <span class="float-right">
            <i class="fas fa-cog fa-lg"></i>
        </span>
    </nav>
    <div>
        @yield('content')
    </div>

    {{-- Bottom Navbar --}}
    <nav class="navbar fixed-bottom justify-content-center">
        <div class="d-flex">
            <ul class="nav-item m-0 pl-0">
                <a href="/">
                    <i class="fas fa-home"></i>
                </a>
            </ul>
            <ul class="nav-item m-0">
                <a href="/rewards">
                    <i class="fas fa-gift"></i>
                </a>
            </ul>
            <ul class="nav-item">
                <a href="/createPost" id="btn-camera">
                    <span class="fa-stack">
                        <i class="fas fa-circle fa-stack-2x" style="color: #188035"></i>
                        <i class="fas fa-camera fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </ul>
            <ul class="nav-item m-0">
                <a href="/map">
                    <i class="fas fa-map-marker-alt"></i>
                </a>
            </ul>
            <ul class="nav-item m-0">
                <a href="/user">
                    <i class="fas fa-user-alt"></i>
                </a>
            </ul>
        </div>

    </nav>
</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        initialiseNavbar();
    });

</script>
