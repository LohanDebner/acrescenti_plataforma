<?php $__env->startSection('title', 'EDIT'); ?>

<?php $__env->startSection('content'); ?>
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                EDITANDO
                            </h1>
                            <small>
                                Testando criação de MVC
                            </small>
                        </div>
                        <div class="middle-box text-center loginscreen animated fadeInDown">
                                

                        <form class="m-t" role="form" action="/projects/<?php echo e($project->id); ?>" method="POST">
                            
                            <?php echo e(csrf_field()); ?> 
                            <?php echo e(method_field('PATCH')); ?>


                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Title" required="" value="<?php echo e($project->title); ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" name="description" class="form-control" placeholder="Descrição" required="" value="<?php echo e($project->description); ?>">
                            </div>

                            <button type="submit" class="btn btn-w-m btn-success block full-width m-b">Salvar</button>

                            <form method="POST" action="/projects/<?php echo e($project->id); ?>">
                                
                                <?php echo e(csrf_field()); ?> 
                                <?php echo e(method_field('PATCH')); ?>


                                <button type="submit" class="btn btn-outline btn-danger btn-xs block full-width m-b">Deletar</button>
                            </form>

                            <a href="#" hidden><small>Forgot password?</small></a>
                                    
                            </form>
                              
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>