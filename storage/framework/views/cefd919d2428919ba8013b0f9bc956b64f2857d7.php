<?php $__env->startSection('title', 'aluno'); ?>
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Lista de Alunos</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Início</a>
            </li>
            <li class="breadcrumb-item">
                <a>Aluno</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Listagem com todos os alunos</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-sm-8">
            <div class="ibox">
                <div class="ibox-content">                   
                    <h2>Alunos</h2>
                    <p>
                        Alunos ativos ou inativos.
                    </p>
                    <div class="input-group">
                    </div>
                    <div class="clients-list">
                    <ul class="nav nav-tabs">
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                        <tr>
                                            <?php $__currentLoopData = $aluno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                
                                           
                                            <td><a href="#contact-1" class="client-link"><?php echo e($item->Nome); ?></a></td>
                                            <td> <?php echo e($item->Telefone1); ?></td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> <?php echo e($item->Email); ?></td>
                                            <?php if($item->Status =="Ativo"): ?>
                                            <td class="client-status"><span class="label label-primary"><?php echo e($item->Status); ?></span><td> 
                                            <?php else: ?>
                                            <td class="client-status"><span class="label label-danger"><?php echo e($item->Status); ?></span></td>   
                                            <?php endif; ?>     
                                            <td><a href="<?php echo e($item->id); ?>/edit" class="btn btn-white btn-bitbucket"><i class="fa fa-wrench"></i></td>                                                                     
                                        </tr>                                       
                                        </tbody>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>