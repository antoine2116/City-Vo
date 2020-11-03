<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no" charset="utf-8">
        <title>City'Vo - @yield('title')</title>

        <!-- SITE.CSS -->
        <link rel="stylesheet" href="{{ asset("site.css") }}">
        
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-reboot.min.css') }}">

        <!-- JS -->
        <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://kit.fontawesome.com/7b2ae56766.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <nav class="site-header sticky-top py-1">
            <div class="container d-flex flex-column flex-md-row justify-content-between">
              <a class="py-2 d-none d-md-inline-block" href="/">Accueil</a>
              <a class="py-2 d-none d-md-inline-block" href="/rewards">Mes récompenses</a>
              <a class="py-2 d-none d-md-inline-block" href="/user">Mon profil</a>
            </div>
        </nav>
        <div class="container" style="height: 2000px !important">
            @yield('content')
        </div>

        <div class="fixed-bottom text-center">
            <i class="fas fa-camera fa-3x" id="icone-camera"></i>
        </div>

    </body>
   
</html>