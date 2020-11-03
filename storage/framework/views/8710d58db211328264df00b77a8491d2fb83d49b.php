<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no" charset="utf-8">
        <title>City'Vo - <?php echo $__env->yieldContent('title'); ?></title>

        <!-- SITE.CSS -->
        <link rel="stylesheet" href="<?php echo e(asset("site.css")); ?>">
        
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-grid.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-reboot.min.css')); ?>">

        <!-- JS -->
        <script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
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
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <div class="fixed-bottom text-center">
            <i class="fas fa-camera fa-3x" id="icone-camera"></i>
        </div>

    </body>
   
</html><?php /**PATH /home/antoine/Bureau/EPSI/workshop2020/cityvo/resources/views/layouts/master.blade.php ENDPATH**/ ?>