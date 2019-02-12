<?php $__env->startSection('title', 'Edit'); ?>
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Editar Aluno</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Início</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Aluno</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Edição do cadastro de Aluno</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
            <div class="ibox ">
       <!-- <div class="ibox-title">
            <h5>Edição dos dados pessoais do aluno </h5>           
        </div>-->
        <div class="ibox-content">

            <form class="m-t" role="form" action="/aluno/<?php echo e($aluno->id); ?>" method="POST" id="formPrincipal">
                            
                <?php echo e(csrf_field()); ?> 
                <?php echo e(method_field('PATCH')); ?>

                
                <div class="form-group row">
                        <label class="col-sm-1 col-form-label" >Nome</label>
                        <div class="col-sm-11"><input type="text" name="nome" class="form-control" value="<?php echo e($aluno->nome); ?>" required></div>
                    </div>
    
                    <div class="hr-line-dashed"></div>
    
                    <div class="form-group  row">
                            <label class="col-sm-1 col-form-label">CPF</label>
                            <div class="col-md-2"> <input type="text" name="cpf" data-mask="999.999.999-99" class="form-control" value="<?php echo e($aluno->cpf); ?>" required></div>                        
                    </div>
    
                    <div class="hr-line-dashed"></div>  
    
                    <div class="form-group  row">
                         <label class="col-sm-1 col-form-label">RG</label>
                         <div class="col-md-3"><input type="text" name="rg" class="form-control" value="<?php echo e($aluno->rg); ?>" required></div>
    
                         <label class="col-md-1 col-form-label">Emissor RG</label>
                         <div class="col-md-3"><input type="text" name="emissor_rg" class="form-control" value="<?php echo e($aluno->emissor_rg); ?>"></div>
                    </div>
    
                     <div class="hr-line-dashed"></div> 
    
                     <div class="form-group  row">
                        <label class="col-md-1 col-form-label">Sexo</label>
                        <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="1" name="sexo" <?php echo e($aluno->sexo_masculino); ?>> <i></i> Masculino</label></div></div>
                        <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="2" name="sexo" <?php echo e($aluno->sexo_feminino); ?>> <i></i> Feminino</label></div></div>
                        <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="0" name="sexo" <?php echo e($aluno->sexo_indefinido); ?>> <i></i> Indefinido</label></div></div>
                    </div>
    
                    <div class="hr-line-dashed"></div>
    
                    <div class="form-group row">                
                        <div class="form-group" id="data_nascimento_picker"> 
                            <label class="col-md-1 col-form-label">Data de Nascimento</label>
                            <div class="col-md-2 input-group date" style="padding-left: 15px;">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="data_nascimento" class="form-control" value="<?php echo e($aluno->data_nascimento); ?>" readonly="readonly">
                            </div>
                         </div>
                    </div>     
    
                    <div class="hr-line-dashed"></div>  
    
                    <div class="form-group row">
                        <label class="col-md-1 col-form-label">Telefone 1</label>
                        <div class="col-md-2"><input type="text" name="telefone_1" class="form-control telefone"  placeholder="" value="<?php echo e($aluno->telefone_1); ?>"><span class="form-text"></span></div>      
                    
                        <label class="col-md-1 col-form-label">Telefone 2</label>
                        <div class="col-md-2"><input type="text" name="telefone_2" class="form-control telefone"  placeholder="" value="<?php echo e($aluno->telefone_2); ?>"><span class="form-text"></span></div>      
                    
                        <label class="col-md-1 col-form-label">Telefone 3</label>
                        <div class="col-md-2"><input type="text" name="telefone_3" class="form-control telefone"  placeholder="" value="<?php echo e($aluno->telefone_3); ?>"><span class="form-text"></span></div>      
    
                    </div>
     
                    <div class="hr-line-dashed"></div>   
    
                    <div class="form-group  row">
                            <label class="col-md-1 col-form-label">Email</label>
                            <div class="col-md-11"><input type="text"name="email" class="form-control" value="<?php echo e($aluno->email); ?>"></div>
                        </div>
    
                    <div class="hr-line-dashed"></div>   
    
                     <div class="form-group row">
                            <label class="col-md-1 col-form-label">CEP</label>
                            <div class="col-sm-2"><input type="text"name="cep" class="form-control" data-mask="99999-999" placeholder="" value="<?php echo e($aluno->cep); ?>"><span class="form-text"></span></div>
                    </div>                                                                                 
                                
    
                    <div class="hr-line-dashed"></div>     
    
                    <div class="form-group  row">
                        <label class="col-sm-1 col-form-label">Endereço</label>
                        <div class="col-md-4"><input type="text" name="endereco" class="form-control" value="<?php echo e($aluno->endereco); ?>"></div>
    
                        <label class="col-sm-1 col-form-label">Número</label>
                        <div class="col-md-1"><input type="text" name="endereco_num" class="form-control" value="<?php echo e($aluno->endereco_num); ?>"></div>
    
                        <label class="col-sm-1 col-form-label">Complemento</label>
                        <div class="col-md-4"><input type="text" name="endereco_comp" class="form-control" value="<?php echo e($aluno->endereco_comp); ?>"></div>
    
                    </div>
    
                    <div class="hr-line-dashed"></div>
    
                    <div class="form-group  row">
                        <label class="col-sm-1 col-form-label">Bairro</label>
                        <div class="col-md-4"><input type="text" name="bairro" class="form-control" value="<?php echo e($aluno->bairro); ?>"></div>
    
                        <label class="col-sm-1 col-form-label">Cidade</label>
                        <div class="col-md-4"><input type="text" name="cidade" class="form-control" value="<?php echo e($aluno->cidade); ?>"></div>
    
                        <label class="col-sm-1 col-form-label">Estado</label>
                        <div class="col-md-1"><input type="text" name="estado" class="form-control" value="<?php echo e($aluno->estado); ?>"></div>
                    </div>
    
                    <div class="hr-line-dashed"></div>
    
                    <div class="form-group row">                
                        <div class="form-group" id="data_ingresso_picker"> 
                            <label class="col-md-1 col-form-label">Data de Ingresso</label>
                            <div class="col-md-2 input-group date" style="padding-left: 15px;">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="data_ingresso" class="form-control" value="<?php echo e($aluno->data_ingresso); ?>" readonly="readonly">
                            </div>
                        </div>
                    </div>      
    
                    <div class="hr-line-dashed"></div>  
        
                    <div class="form-group row">
                        <label class="col-md-1 col-form-label">Possui Responsável?</label>
                        <div class="col-md-1" style="padding-left: 15px;"><input type="checkbox" id="possui_responsavel_switch" name="possui_responsavel" class="js-switch"  style="display: none;" onchange="mostrarResponsavel()" <?php echo e($aluno->PossuiResponsavel); ?>></div>
                    </div>
    
                    <div id="divResponsavel"  <?php echo e($aluno->divPossuiResponsavel); ?>>
                        
                        <div class="form-group  row">
                            <label class="col-sm-1 col-form-label">Nome Responsável</label>
                            <div class="col-md-11"><input type="text" name="nome_responsavel" class="form-control" value="<?php echo e($aluno->nome_responsavel); ?>"></div>
                        </div>
        
                        <div class="hr-line-dashed"></div>
    
                        <div class="form-group  row">
                            <label class="col-sm-1 col-form-label">CPF Responsável</label>
                            <div class="col-md-2"> <input type="text" name="cpf_responsavel" data-mask="999.999.999-99" class="form-control" value="<?php echo e($aluno->cpf_responsavel); ?>"></div>                        
                        </div>
                    </div>
                    
                    <div class="hr-line-dashed"></div> 
    
                     <div class="form-group  row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="1" name="status_aluno" <?php echo e($aluno->status_aluno_ativo); ?>><i></i> Ativo</label></div></div>
                        <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="0" name="status_aluno" <?php echo e($aluno->status_aluno_inativo); ?>><i></i> Inativo</label></div></div>
                    
                    </div>
    
                    <div class="hr-line-dashed"></div> 

                    <div class="form=group row">
                        <div class="col-sm-1 col-sm-offset-10">
                                <a href="/aluno"><button type="button" id="botaoCancelar" class="btn btn-danger block full-width m-b">Cancelar</button>
                        </div> 
                        <div class="col-sm-1 ">
                            <button type="submit" id="botaoSalvar" class="btn btn-primary block full-width m-b">Salvar</button>
                        </div>  
                    </div>

                    <script>
                        function mostrarResponsavel() {
                            
                            var switch_possui_responsavel = document.getElementById("possui_responsavel_switch");
                            var text = document.getElementById("divResponsavel");
    
                            if (switch_possui_responsavel.checked == true){
                                text.style.display = "block";
                            } else {
                                text.style.display = "none";
                            }
                        }
                    </script>    

            </form> 
            <form method="POST" action="/aluno/<?php echo e($aluno->id); ?>" id="formDeletar">
                            <!-- -->
                <?php echo e(csrf_field()); ?> 
                <?php echo e(method_field('DELETE')); ?>


                <div class="form=group row">
                    <div class="col-sm-2 col-sm-offset-10">
                        <button type="reset" id="botaoDeletar" class="btn btn-outline btn-danger btn-md block full-width m-b">Deletar</button>
                    </div>  
                </div>
            </form>
        </div>
        </div>
</div>
</div>
</div>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>