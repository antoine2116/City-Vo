<?php $__env->startSection('title', ''); ?>

<?php $__env->startSection('content'); ?>
    <div class="container green-background">
        <div class="row">
            <img class="welcome-logo" src="<?php echo e(asset('images/logo.svg')); ?>" />
        </div>
        <div class="row justify-content-center" style="padding-top: 10%">
            <h5 class="welcome-title">
                Enssemle, changeons notre ville !
            </h5>
        </div>
        <div class="row justify-content-center" style="padding-top: 35%">
            <a href="/create_account" class="btn btn-success btn-lg">Créer un compte</a>
        </div>
        <div class="row justify-content-center pt-2">
            <a href="/login" class="welcone-login">Déja un compte ? Connectez-vous !</a>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.navbar').addClass("hide");
            $('body').css("padding", 0);
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/antoine/Bureau/EPSI/workshop2020/cityvo/resources/views/welcome.blade.php ENDPATH**/ ?>