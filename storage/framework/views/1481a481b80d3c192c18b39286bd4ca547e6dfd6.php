<?php $__env->startSection('title', 'Contato'); ?>

<?php $__env->startSection('content'); ?>
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Contato do plataforma-1
                            </h1>
                            <small>
                                Teste INDO para o KINGHOST
                            </small>
                        </div>
                        <div class="team-member">
                            <ul>
                                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!--<li><?= $task; ?></li>-->
                                    <li><?php echo e($task); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <li><?php echo e($parametro); ?></li>

                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>