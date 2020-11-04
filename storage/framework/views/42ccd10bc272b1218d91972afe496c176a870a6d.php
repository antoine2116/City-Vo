<?php $__env->startSection('title', 'Accueil'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php for($i = 0; $i < sizeof($posts); $i++): ?>
            <div class="row">
                <div class="container-feed">
                    <div class="float-left">
                        <p class="title-feed font-weight-bold">
                            <?php echo e($posts[$i]->{'title'}); ?> - <?php echo e($posts[$i]->{'lieu'}); ?>

                        </p>
                    </div>
                    <div class="float-right">
                        <span class="votes-feed">
                            <?php echo e($posts[$i]->{'votes'}); ?>

                        </span>
                        <a href="#" class="btn-up-feed btn-feed">
                            <i class="fas fa-chevron-up" style="color: #188035"></i>
                        </a>
                        <a href="#" class="btn-down-feed btn-feed">
                            <i class="fas fa-chevron-down" style="color: #db2323"></i>
                        </a>
                    </div>

                    <?php           
                    $image_route = "storage/";
                    $image_route .= $posts[$i]->{'image'}; 
                    ?>

                    <img class="img-feed" src= "<?php echo e(asset($image_route)); ?>" />
                    <p class="description-feed">
                        <span class="auteur-feed bolder">
                            <?php echo e($posts[$i]->{'name'}); ?> &bull;
                        </span>
                        <?php echo $posts[$i]->{'body'}; ?>

                    </p>
                </div>
            </div>
        <?php endfor; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/antoine/Bureau/EPSI/workshop2020/cityvo/resources/views/welcome.blade.php ENDPATH**/ ?>