<?php $__env->startSection('title', 'Show'); ?>
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?php echo e($conteudo->titulo); ?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Início</a>
            </li>
            <li class="breadcrumb-item">
                <a>Conteudo</a>
            </li>
            <li class="breadcrumb-item active">
                <strong><?php echo e($conteudo->titulo); ?></strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-content">  
                    <div class="form-group  row">
                        <h5>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($conteudo->origem); ?></h5>
                    <br>
                        <h2>&nbsp;&nbsp;<?php echo e($conteudo->descricao); ?></h2>
                        <div class="col-sm-1 col-sm-offset-9">
                            <button class="btn btn-default " type="button"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Voltar</button>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-info" style="width: 100%;" type="button"> Próximo Conteúdo&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>

                    <div class="form-group  row">
                        <div class="col-lg-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="<?php echo e($conteudo->video_path); ?>" width="300" height="200" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                            <br/>
                            <?php $__currentLoopData = $dica; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $DicaItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="panel panel-warning" name="Dica<?php echo e($loop->iteration); ?>" id="Dica<?php echo e($loop->iteration); ?>">
                                <div class="panel-heading" style="height:25px; padding:1px; padding-left:5px;">
                                    <h5 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo e($loop->iteration); ?>">Dica&nbsp;<?php echo e($loop->iteration); ?></a>
                                    </h5>
                                </div>
                                <div id="collapse<?php echo e($loop->iteration); ?>" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?php echo e($DicaItem->descricao); ?>                                    
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>    
                    </div>                            
                    <div class="form-group  row">
                        <div class="col-sm-1 col-sm-offset-9">
                            <button class="btn btn-default " type="button"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Voltar</button>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-info" style="width: 100%;" type="button"> Próximo Conteúdo&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>


 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>