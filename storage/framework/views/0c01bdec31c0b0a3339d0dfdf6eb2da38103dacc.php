<?php $__env->startSection('title', 'Récompenses'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-12 pt-1">
        
        <div class="row">
            <div class="col-2 pr-2">
                <img class="avatar"
                    src="https://www.benouaiche.com/wp-content/uploads/2018/12/homme-medecine-chirurgie-esthetique-dr-benouaiche-paris.jpg" />
            </div>
            <div class="col-4 pt-1 ml-3 points-container float-right">
                <div class="points-content pt-1">
                    <strong style="font-size: 1.2em" id="user-points">
                        <?php echo e($points[0]->{'points'}); ?>

                    </strong> points
                </div>
            </div>
            <div class="col-4 pt-1 ml-3 rank-container">
                <div class="rank-content  pt-1">
                    <strong style="font-size: 1.2em">
                        
                        28
                    </strong> 
                    
                    ème
                    <i class="fas fa-trophy" style="color: #e35914"></i>
                </div>
            </div>
        </div>
        <hr />

        
        <?php for($i = 0; $i < sizeof($rewards); $i++): ?>
            <?php if($i % 2): ?>
                <div class="reward-container float-right ml-1">
                <?php else: ?>
                    <div class="form-group row justify-content-center">
                        <div class="reward-container float-left mr-1">
            <?php endif; ?>

            <img class="reward-img" src="<?php echo e(asset('images/rewards/' . $rewards[$i]->{'image'})); ?>" />

            <div class="reward-text">
                <strong>
                    <span class="reward-points">
                        <?php echo e($rewards[$i]->{'points'}); ?> 
                    </span>
                    POINTS
                </strong>
            </div>
    </div>
    <?php if($i % 2): ?>
        </div>
    <?php endif; ?>
    <?php endfor; ?>
    </div>



    
    <div class="modal fade" id="modal-reward" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="el-init">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Êtes-vous sûr(e) de vouloir dépenser
                         <span id="modale-points-requis" class="font-weight-bold"></span>
                        points pour obtenir votre récompense ?
                        <h6 class="text-center pt-1 font-weight-bold">
                            Il vous restera ensuite
                            <span id="modale-points-restant">
                            </span>
                            points
                        </h6>
                    </div>
                </div>

                
                <div class="modal-body el-succes hide">
                    Félications ! Vous avez reçu votre récompense par mail.
                </div>

                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-success el-init btn-block" id="btnValiderReward">Valider</button>
                    <button type="button" class="btn btn-info el-succes hide" data-dismiss="modal">Quitter</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        initialiseModaleReward();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/antoine/Bureau/EPSI/workshop2020/cityvo/resources/views/rewards.blade.php ENDPATH**/ ?>