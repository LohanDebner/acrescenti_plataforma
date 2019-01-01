<?php $__env->startSection('title', 'Create'); ?>
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Cadastro de Aluno</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/aluno">Início</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Aluno</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Cadastro de Aluno</strong>
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
        <div class="ibox-title">
            <h5>Cadastro de dados pessoais do aluno. </h5>           
        </div>
        <div class="ibox-content">

            <form  class="m-t" role="form" action="/aluno" method="POST">
                <?php echo e(csrf_field()); ?> 

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" >Nome</label>
                    <div class="col-sm-10"><input type="text" name="nome" class="form-control"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group  row">
                        <label class="col-sm-2 col-form-label">CPF</label>
                        <div class="col-md-10"> <input type="text" name="CPF" class="form-control"></div>                        
                </div>

                <div class="hr-line-dashed"></div>  

                <div class="form-group  row">
                     <label class="col-sm-2 col-form-label">RG</label>
                     <div class="col-md-3"><input type="text" name="RG" class="form-control"></div>

                     <label class="col-md-2 col-form-label">Órgão emissor RG</label>
                     <div class="col-md-3"><input type="text" name="EmissorRG" class="form-control"></div>
                </div>

                <div class="hr-line-dashed"></div> 

                <div class="form-group  row">
                    <label class="col-md-2 col-form-label">Órgão emissor RG</label>
                    <div class="col-md-10"><input type="text" name="EmissorRG" class="form-control"></div>
                </div>

                 <div class="hr-line-dashed"></div> 

                 <div class="form-group  row">
                    <label class="col-md-2 col-form-label">Sexo</label>
                    <!--div class="col-md-10"><input type="text" name="Sexo" class="form-control"></div>-->
                    <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="1" name="Sexo"> <i></i> Masculino</label></div></div>
                    <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="2" name="Sexo"> <i></i> Feminino</label></div></div>
                    <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="0" name="Sexo" checked> <i></i> Indefinido</label></div></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group row">                
                    <div class="form-group" id="data_nascimento_picker"> 
                        <label class="col-md-2 col-form-label">Data de Nascimento</label>
                        <div class="col-md-3 input-group date" style="padding-left: 15px;">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" name="DataNascimento" class="form-control" value="10/11/2013" disabled>
                        </div>
                     </div>
                </div>     

                <div class="hr-line-dashed"></div>  

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Telefone 1</label>
                    <div class="col-md-10"><input type="text" name="Telefone1" class="form-control" data-mask="(99) 99999-9999" placeholder=""><span class="form-text">(99) 99999-9999</span>
                    </div>      
                </div>

                <div class="hr-line-dashed"></div>   
                <div class="form-group row">
                        <label class="col-md-2 col-form-label">Telefone 2</label>
                        <div class="col-md-10"><input type="text" name="Telefone2" class="form-control" data-mask="(99) 99999-9999" placeholder=""><span class="form-text">(99) 99999-9999</span>
                        </div>      
                    </div>

                <div class="hr-line-dashed"></div>  

                <div class="form-group row">
                        <label class="col-md-2 col-form-label">Telefone 3</label>
                        <div class="col-md-10"><input type="text" name="Telefone3" class="form-control" data-mask="(99) 99999-9999" placeholder=""><span class="form-text">(99) 99999-9999</span>
                        </div>      
                    </div>  
 
                <div class="hr-line-dashed"></div>   

                <div class="form-group  row">
                        <label class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10"><input type="text"name="Email" class="form-control"></div>
                    </div>

                <div class="hr-line-dashed"></div>   

                 <div class="form-group row">
                            <div class="col-md-6"><label class="col-md-2 col-form-label">CEP</label>
                                    <div class="col-sm-3"><input type="text"name="CEP" class="form-control" data-mask="99999-999" placeholder=""><span class="form-text">99999-999</span>
                                    </div>
                                </div> </div>                                                                                 
                            

                <div class="hr-line-dashed"></div>     

                <div class="form-group  row">
                    <div class="col-md-1"><label class="col-sm-2 col-form-label">Endereço</label></div>
                    <div class="col-md-4"><input type="text" name="Endereco" class="form-control"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group  row">
                    <div class="col-md-1"><label class="col-sm-2 col-form-label">Endereço Número</label></div>
                    <div class="col-md-4"><input type="text" name="EnderecoNum" class="form-control"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group  row">
                    <div class="col-md-1"><label class="col-sm-1 col-form-label">Endereço Complemento</label></div>
                    <div class="col-md-4"><input type="text" name="EnderecoComp" class="form-control"></div>
                </div>

        
                <div class="hr-line-dashed"></div>

                <div class="form-group  row">
                    <div class="col-md-1"><label class="col-sm-2 col-form-label">Bairro</label></div>
                    <div class="col-md-4"><input type="text" name="Bairro" class="form-control"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group  row">
                    <div class="col-md-1"><label class="col-sm-2 col-form-label">Cidade</label></div>
                    <div class="col-md-4"><input type="text" name="Cidade" class="form-control"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group  row">
                    <div class="col-md-1"><label class="col-sm-2 col-form-label">Estado</label></div>
                    <div class="col-md-4"><input type="text" name="Estado" class="form-control"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group row">                
                    <div class="form-group" id="data_ingresso_picker"> 
                        <label class="col-md-2 col-form-label">Data de Ingresso</label>
                        <div class="col-md-3 input-group date" style="padding-left: 15px;">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" name="DataIngresso" class="form-control" value="11/11/2019" disabled>
                        </div>
                    </div>
                </div>      

                <div class="hr-line-dashed"></div>  
    
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Possui Responsável?</label>
                    <input type="checkbox" id="possui_responsavel_switch" class="js-switch"  style="display: none;" onchange="mostrarResponsavel()">       
                </div>
            
                

                <div id="divResponsavel" style="display:none">
                    
                    <div class="form-group  row">
                        <label class="col-sm-2 col-form-label">Nome Responsável</label>
                        <div class="col-md-10"><input type="text" name="NomeResponsavel" class="form-control"></div>
                    </div>
    
                    <div class="hr-line-dashed"></div>

                    <div class="form-group  row">
                        <label class="col-sm-2 col-form-label">CPF Responsável</label>
                        <div class="col-md-10"> <input type="text" name="CPFResponsavel" class="form-control"></div>                        
                    </div>
                </div>
                
                <div class="hr-line-dashed"></div> 

                <div class="form=group row">
                    <div class="col-sm-3 col-sm-offset-9">
                        <button type="submit" class="btn btn-primary block full-width m-b">Salvar</button>
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
            
        </div>
        </div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>