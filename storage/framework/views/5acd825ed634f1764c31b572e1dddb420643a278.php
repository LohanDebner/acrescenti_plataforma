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
        <div class="col-sm-12">
            <div class="ibox">
                <div class="ibox-content">                   
                    <h2>Alunos</h2>
                    <p>
                        Alunos ativos ou inativos.
                    </p>
                    <div class="col-sm-1 col-sm-offset-11">
                            <a href="/aluno/create"><button type="button" class="btn btn-primary block full-width m-b">Cadastrar</button></a>
                    </div> 
                    <div class="input-group">                            
                    </div>
                    <div class="clients-list">
                    <ul class="nav nav-tabs">
                    </ul>
                    <div class="tab-content" >
                        <div id="tab-1" class="tab-pane active" style="height:500px;">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                        <?php $__currentLoopData = $aluno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      
                                            <tr>
                                                <td><a href="#contact-1" class="client-link"><?php echo e($item->nome); ?></a></td>
                                                <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                                <td> <?php echo e($item->telefone_1); ?></td>
                                                <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                                <td> <?php echo e($item->email); ?></td>

                                                <?php if($item->status_aluno =="Ativo"): ?>
                                                <td class="client-status"><span class="label label-primary"><?php echo e($item->status_aluno); ?></span></td> 
                                                <?php else: ?>
                                                <td class="client-status"><span class="label label-danger"><?php echo e($item->status_aluno); ?></span></td>   
                                                <?php endif; ?>     
                                                <td><a href="aluno/<?php echo e($item->id); ?>/edit" class="btn btn-white btn-bitbucket"><i class="fa fa-wrench"></i></td>                                                                                                                        
                                            </tr>    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        
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