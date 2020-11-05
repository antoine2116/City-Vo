<?php $__env->startSection('title', 'Mon profil'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container" style="overflow-x: hidden;">
        <?php if(session()->get('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session()->get('success')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(session()->get('danger')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo e(session()->get('danger')); ?>


                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(session()->get('msg')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo e(session()->get('msg')); ?>


                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="card user-profil">
                <form action="updateProfil" method="post" enctype="multipart/form-data" class="mb-0">
                    <?php echo csrf_field(); ?>
                    <div class="row pt-1 pl-1 pb-3">
                        <div class="col-2 pr-3 pt-1">
                            <img class="avatar-bigger" src="<?php echo e(asset('images/' . $profil[0]->{'avatar'})); ?>" />
                        </div>
                        <div class="col-6 pt-1" style="margin-left: 50px">
                            <div class="row">
                                <input type="text" name="name" class="form-control editable" placeholder="Pseudo"
                                    value="<?php echo e($profil[0]->{'name'}); ?>" />
                            </div>
                            <div class="row pt-1">
                                <input type="text" name="email" class="form-control editable" placeholder="Email"
                                    value="<?php echo e($profil[0]->{'email'}); ?>" />
                            </div>
                        </div>
                        <div class="col-2"  style="padding-top: 13%">
                            <button type="submit" class="btn btn-info" id="btnValiderUser">
                                <i class="fas fa-save"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="user-posts">
            <?php for($i = 0; $i < sizeof($myposts); $i++): ?>
                <div class="row">
                    <div class="card user-post mt-2 shadow-sm">
                        <div class="card-block">
                            <div class="row m-0">
                                <div class="col-3 pl-0">
                                    <div class="user-post-img-container">
                                        <img class="user-post-img"
                                            src="<?php echo e(asset('upload_file/' . $myposts[$i]->{'image'})); ?>" />
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <p>
                                            <span class="comment-auteur">
                                                <?php echo e($myposts[$i]->{'title'}); ?>

                                            </span>
                                            &bull;
                                            <span class="comment-datespan">
                                                <?php echo e($myposts[$i]->{'created_at'}); ?>

                                            </span>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p>
                                            <?php echo e($myposts[$i]->{'body'}); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <script type="text/javascript">
        initialiseClickPost();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/antoine/Bureau/EPSI/workshop2020/cityvo/resources/views/user.blade.php ENDPATH**/ ?>