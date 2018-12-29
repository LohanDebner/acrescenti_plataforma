<?php $__env->startSection('title', 'aluno'); ?>

<?php $__env->startSection('content'); ?>
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                INDEX ALUNOS
                            </h1>
                            <small>
                                TESTE DE VIEW BD
                            </small>
                        </div>
                        <div class="team-member">
                            <ul>
                                <?php $__currentLoopData = $aluno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($item->id); ?></li>
                                    <li><?php echo e($item->Nome); ?></li>
                                    <li><?php echo e($item->CPF); ?></li>
                                    <li><?php echo e($item->RG); ?></li>
                                    <li><?php echo e($item->EmissorRG); ?></li>
                                    <li><?php echo e($item->Sexo); ?></li>
                                    <li><?php echo e($item->DataNascimento); ?></li>
                                    <li><?php echo e($item->Telefone1); ?></li>
                                    <li><?php echo e($item->Telefone2); ?></li>
                                    <li><?php echo e($item->Telefone3); ?></li>
                                    <li><?php echo e($item->Email); ?></li>
                                    <li><?php echo e($item->CEP); ?></li>
                                    <li><?php echo e($item->Endereco); ?></li>
                                    <li><?php echo e($item->EnderecoNum); ?></li>
                                    <li><?php echo e($item->EnderecoComp); ?></li>
                                    <li><?php echo e($item->Bairro); ?></li>
                                    <li><?php echo e($item->Cidade); ?></li>
                                    <li><?php echo e($item->Estado); ?></li>
                                    <li><?php echo e($item->DataIngresso); ?></li>
                                    <li><?php echo e($item->NomeResponsavel); ?></li>
                                    <li><?php echo e($item->CPFResponsavel); ?></li>
                                    <li><?php echo e($item->Status); ?></li>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               

                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>