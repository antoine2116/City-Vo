<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no"
        charset="utf-8">
    <title>City'Vo - <?php echo $__env->yieldContent('title'); ?></title>

    
    <link rel="stylesheet" href="<?php echo e(asset('site.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-grid.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-reboot.min.css')); ?>">

    
    <script src="<?php echo e(asset('script.js')); ?>"></script>

    
    <script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="https://kit.fontawesome.com/7b2ae56766.js" crossorigin="anonymous"></script>

    
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('images/favicons/apple-icon-57x57.png')); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset('images/favicons/apple-icon-60x60.png')); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('images/favicons/apple-icon-72x72.png')); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('images/favicons/apple-icon-76x76.png')); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('images/favicons/apple-icon-114x114.png')); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('images/favicons/apple-icon-120x120.png')); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('images/favicons/apple-icon-144x144.png')); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('images/favicons/apple-icon-152x152.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('images/favicons/apple-icon-180x180.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo e(asset('images/favicons/android-icon-192x192.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('images/favicons/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('images/favicons/favicon-96x96.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/favicons/favicon-16x16.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('images/favicons/manifest.json')); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body>
    
    <nav class="navbar fixed-top">
        <span class="navbar-title">
            <a href="/">
                <i class="fas fa-home"></i>
                &nbsp; CITY'VO
            </a>
        </span>
        <span class="float-right">
            <a href="/logout">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </span>
    </nav>
    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    
    <nav class="navbar fixed-bottom justify-content-center pt-1 pb-1 mb-0 mt-2">
        <div class="d-flex">
            <ul class="nav-item m-0 pl-0 pr-4 nav-icone-sm">
                <a href="/">
                    <i class="fas fa-home"></i>
                </a>
            </ul>
            <ul class="nav-item m-0 nav-icone-sm">
                <a href="/rewards">
                    <i class="fas fa-gift"></i>
                </a>
            </ul>
            <ul class="nav-item m-0">
                <a href="/createPost" id="btn-camera">
                    <span class="fa-stack" style="font-size: 1.6em">
                        <i class="fas fa-circle fa-stack-2x" style="color: #188035"></i>
                        <i class="fas fa-camera fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </ul>
            <ul class="nav-item m-0 nav-icone-sm">
                <a href="/map">
                    <i class="fas fa-map-marker-alt"></i>
                </a>
            </ul>
            <ul class="nav-item m-0 nav-icone-sm" style="padding-left: 60px">
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
<?php /**PATH /home/antoine/Bureau/EPSI/workshop2020/cityvo/resources/views/layouts/master.blade.php ENDPATH**/ ?>