<?php $__env->startSection('title', 'Create'); ?>
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Cadastro de Aluno</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Início</a>
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

                <div class="form-group  row">
                    <div class="col-md-1"><label class="col-sm-2 col-form-label">Nome</label></div>
                    <div class="col-md-4"><input type="text" name="nome" class="form-control"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group  row">
                        <div class="col-md-1"> <label class="col-sm-2 col-form-label">CPF</label></div>
                        <div class="col-md-2"> <input type="text" name="CPF" class="form-control"></div>                        
                </div>

                <div class="hr-line-dashed"></div>  

                <div class="form-group  row">
                     <div class="col-md-1"><label class="col-sm-2 col-form-label">RG</label></div>
                     <div class="col-md-2"><input type="text" name="RG" class="form-control"></div>
                </div>

                <div class="hr-line-dashed"></div> 

                <div class="form-group  row">
                    <div class="col-md-6"><label class="col-md-2 col-form-label">Órgão emissor RG</label>
                    <div class="col-md-2"><input type="text" name="Emissor" class="form-control"></div>
                </div></div>

                 <div class="hr-line-dashed"></div> 

                 <div class="form-group  row"><div class="col-md-6"><label class="col-md-2 col-form-label">Sexo<br></label>
                    <div class="col-sm-5">
                            <div class="i-checks"><label class=""> <div class="iradio_square-green checked" style="position: relative;"><input type="radio" value="option1" name="a" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Opção 1 </label></div>
                            <div class="i-checks"><label class=""> <div class="iradio_square-green checked" style="position: relative;"><input type="radio" value="option1" name="a" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Opção 1 </label></div>
                            <div class="i-checks"><label class=""> <div class="iradio_square-green checked" style="position: relative;"><input type="radio" value="option1" name="a" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Opção 1 </label></div>
                    </div>
                </div>  </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group row">                
                    <div class="form-group" id="data_3"> <label class="col-md-2 col-form-label">Data de Nascimento</label>
                        <div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="Nascimento" class="col-sm-2 col-form-label" value="10/11/2013">
                        </div>
                     </div>
                </div>     

                <div class="hr-line-dashed"></div>  

                <div class="form-group row">
                    <div class="col-md-6"><label class="col-md-2 col-form-label">Telefone 1</label>
                    <div class="col-md-3"><input type="text" name="Telefone1" class="form-control" data-mask="(99)9999-9999" placeholder=""><span class="form-text">(99)9999-9999</span>
                    </div>      
                </div></div>

                <div class="hr-line-dashed"></div>   
                <div class="form-group row">
                        <div class="col-md-6"><label class="col-md-2 col-form-label">Telefone 2</label>
                        <div class="col-md-3"><input type="text" name="Telefone2" class="form-control" data-mask="(99)9999-9999" placeholder=""><span class="form-text">(99)9999-9999</span>
                        </div>      
                    </div></div>

                <div class="hr-line-dashed"></div>  

                <div class="form-group row">
                        <div class="col-md-6"><label class="col-md-2 col-form-label">Telefone 3</label>
                        <div class="col-md-3"><input type="text" name="Telefone3" class="form-control" data-mask="(99)9999-9999" placeholder=""><span class="form-text">(99)9999-9999</span>
                        </div>      
                    </div></div>   
 
                <div class="hr-line-dashed"></div>   

                <div class="form-group  row">
                        <div class="col-md-6"><label class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-8"><input type="text"name="Email" class="form-control"></div>
                    </div></div>

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
                    <div class="form-group" id="data_3"> <label class="col-md-2 col-form-label">Data de Ingresso</label>
                        <div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="DataIngresso" class="col-sm-2 col-form-label" value="10/11/2013">
                        </div>
                     </div>
                </div>     

                <div class="hr-line-dashed"></div>  
    
                <div class="Form group row">
                <div class="col-md-1"><label class="col-md2 col-form-label">Possui Responsável?</label>
                    <input type="checkbox" id="Pietro" onclick="ativar()" class="js-switch"  style="display: none;" data-switchery="true">
                </div>
            </div>
            <div class="ibox-content">               
                <input type="checkbox" class="js-switch_2"  />
                <input type="checkbox" id="myCheck"  onclick="myFunction()">
                </div>

            
            <div class="hr-line-dashed"></div> 

            <div id="divResponsavel" style="display:none">
                
            <div class="form-group  row">
                    <div class="col-md-1"><label class="col-sm-2 col-form-label">Nome do Responsável</label></div>
                    <div class="col-md-4"><input type="text" name="NomeResponsavel" class="form-control"></div>
                </div>
   
                <div class="hr-line-dashed"></div>

                <div class="form-group  row">
                        <div class="col-md-1"> <label class="col-sm-2 col-form-label">CPF Responsável</label></div>
                        <div class="col-md-2"> <input type="text" name="CPFResponsavel" class="form-control"></div>                        
                </div>
            </div>
                <div class="hr-line-dashed"></div> 
                

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
            <div class="form=group row"><div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-white btn-sm" type="submit">Cancel</button>
                <button type="submit" class="btn btn-primary block full-width m-b">Salvar</button></div>  </div>
            </form> 
        </div>
        </div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>