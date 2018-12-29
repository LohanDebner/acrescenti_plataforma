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

                        <div class="form-group  row">
                            <div class="col-md-"><label class="col-md-1">Nome</label></div>
                            <div class="col-md-11"><input type="text" name="nome" class="form-control"></div>
                        </div>

                    <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <div class="col-md-"> <label class="col-md-1">CPF</label></div>
                            <div class="col-md-11"><input type="text" name="CPF" class="form-control" data-mask="999.999.999-99" placeholder=""></div>                        
                        </div>

                    <div class="hr-line-dashed"></div>  

                        <div class="form-group  row">
                            <div class="col-md-"><label class="col-md-1">RG</label></div>
                            <div class="col-md-11"><input type="text" name="RG" class="form-control"></div>
                        </div>

                    <div class="hr-line-dashed"></div> 

                        <div class="form-group  row">
                            <div class="col-md-"><label class="col-md-1">Órgão emissor RG</label></div>
                            <div class="col-md-11"><input type="text" name="EmissorRG" class="form-control"></div>
                        </div>

                    <div class="hr-line-dashed"></div> 

                        <div class="form-group  row">
                            <div class="col-md-"><label class="col-md-1">Sexo</label>                 
                                <div class="col-md-11"><label> <input type="radio" checked="" value="0" id="optionsRadios1" name="Sexo"> Indefinido</label><br />
                                <label> <input type="radio" checked="" value="1" id="optionsRadios1" name="Sexo"> Masculino</label><br />
                                <label> <input type="radio" checked="" value="2" id="optionsRadios1" name="Sexo"> Feminino</label><br /></div>
                            </div> 
                        </div>

                    <div class="hr-line-dashed"></div>

                        <div class="form-group row">                
                            <div class="col-md-" id="data_3"> <label class="col-md-1">Data de Nascimento</label>
                                <div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="DataNascimento" class="col-md-11" value="10/11/2013"></div>
                            </div>
                        </div>     

                    <div class="hr-line-dashed"></div>  

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Telefone 1</label>
                                <div div class="col-md-11"><input type="text" name="Telefone1" class="form-control" data-mask="(99)9999-9999" placeholder=""></div>      
                            </div>
                        </div>

                    <div class="hr-line-dashed"></div>   
                        
                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Telefone 2</label>
                                <div div class="col-md-11"><input type="text" name="Telefone2" class="form-control" data-mask="(99)99999-9999" placeholder=""></div>      
                            </div>
                        </div>

                    <div class="hr-line-dashed"></div>  

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Telefone 3</label>
                                <div div class="col-md-11"><input type="text" name="Telefone3" class="form-control" data-mask="(99)99999-9999" placeholder=""></div>      
                            </div>
                        </div> 
        
                    <div class="hr-line-dashed"></div>   

                        <div class="form-group  row">
                                <div class="col-md-"><label class="col-md-1">Email</label>
                                <div class="col-md-11"><input type="text"name="Email" class="form-control"></div>
                            </div></div>

                    <div class="hr-line-dashed"></div>   

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">CEP</label>
                                <div class="col-md-11"><input type="text"name="CEP" class="form-control" data-mask="99999-999" placeholder=""></div>
                            </div>
                        </div>                                                                                 
                                    

                    <div class="hr-line-dashed"></div>     

                        <div class="form-group  row">
                            <div class="col-md-"><label class="col-md-1">Endereço</label></div>
                            <div class="col-md-11"><input type="text" name="Endereco" class="form-control"></div>
                        </div>

                    <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <div class="col-md-"><label class="col-md-1">Endereço Número</label></div>
                            <div class="col-md-11"><input type="text" name="EnderecoNum" class="form-control"></div>
                        </div>

                    <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <div class="col-md-"><label class="col-md-1">Endereço Complemento</label></div>
                            <div class="col-md-11"><input type="text" name="EnderecoComp" class="form-control"></div>
                        </div>

                
                    <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <div class="col-md-"><label class="col-md-1">Bairro</label></div>
                            <div class="col-md-11"><input type="text" name="Bairro" class="form-control"></div>
                        </div>

                    <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <div class="col-md-"><label class="col-md-1">Cidade</label></div>
                            <div class="col-md-11"><input type="text" name="Cidade" class="form-control"></div>
                        </div>

                    <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <div class="col-md-"><label class="col-md-1">Estado</label></div>
                            <div class="col-md-11"><input type="text" name="Estado" class="form-control"></div>
                        </div>

                    <div class="hr-line-dashed"></div>

                        <div class="form-group row">                
                            <div class="col-md-" id="data_3"> <label class="col-md-1">Data de Ingresso</label>
                                <div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="DataIngresso" class="col-md-11" value="10/11/2013"></div>
                            </div>
                        </div>                
                        
                    <div class="hr-line-dashed"></div>
            
                        <div class="Form group row">               
                            <div class="col-md-"><label class="col-md-1">Possui Responsável?</label></div>       
                            <div class="col-md-11"> <input type="checkbox" id="myCheck" onclick="myFunction()"> </div>
                        </div>         
                        
                        <div id="divResponsavel" style="display:none">
                                <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                    <div class="col-md-"><label class="col-md-1">Nome do Responsável</label></div>
                                    <div class="col-md-11"><input type="text" name="NomeResponsavel" class="form-control"></div>
                            </div>
            
                            <div class="hr-line-dashed"></div>

                            <div class="form-group  row">
                                <div class="col-md-"> <label class="col-md-1">CPF Responsável</label></div>
                                <div class="col-md-11"> <input type="text" name="CPFResponsavel" class="form-control"></div>                        
                            </div>
                        </div>
                        
                    <div class="hr-line-dashed"></div>    
                    
                        <div class="form-group  row">
                                <div class="col-md-"><label class="col-md-1">Status</label>                 
                                    <div class="col-md-11"><label> <input type="radio" checked="" value="Ativo" id="optionsRadios1" name="Status"> Ativo</label><br />
                                    <label> <input type="radio" checked="" value="Inativo" id="optionsRadios1" name="Status"> Inativo</label><br />
                                </div> 
                        </div>

                    
                        <p id="text" style="display:none">Checkbox is CHECKED!</p>
                        
                        <script>
                        function myFunction() {
                        var checkBox = document.getElementById("myCheck");
                        var text = document.getElementById("divResponsavel");
                        if (checkBox.checked == true){
                        text.style.display = "block";
                        } else {
                            text.style.display = "none";
                        }
                        }
                        </script>

                        <div class="form=group row">
                            <div class="col-md-11"> <label></label></div> 
                            <div class="col-md-1">
                            <button type="submit" class="btn btn-primary">Salvar</button></div>  
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>