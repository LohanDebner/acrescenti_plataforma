<?php $__env->startSection('title', 'teste'); ?>
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
        <h2>Lista de TESTE</h2>
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
                        <div id="tab-1" class="tab-pane active" style="height:300px;">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                        
                                        </tbody>
                                        
                                    </table>
                                </div>
                                <p>Click the button to create elements  and append it to DIV.</p>

                                    <div id="main">                                        
                                        
                                    </div>
                                    <input type="button" id="btAdd" value="Add Element" class="bt" />
                                    <br><br>
                                    <input type="button" id="btSave" value="SALVAR" class="bt" onclick="salvar()" />
                                    <input type="text" id="valor" class="" value=0 />

                                <script>
                                        $(document).ready(function() {
                                    
                                            var iCnt = 0;
                                                                        
                                            $('#btAdd').click(function() {
                                                                                        
                                                iCnt = iCnt+1;

                                                $('#main').append('<p><input type=text class="input lista" id=tb' + iCnt + ' ' +
                                                    'value="Text Element ' + iCnt + '" /> <input type="button" value="remover" class="bt" id=rm' + iCnt + ' '+ 'onclick="remover(' + iCnt + ')" /></p>');
                                            });                                            
                                        });
                                   </script>  
                                   <script>
                                       function remover(item) {
                                            $("#tb"+item).remove();
                                            $("#rm"+item).remove();                                               
                                        }
                                        function salvar(){
                                            var quantidade = document.getElementsByClassName("lista").length;
                                            document.getElementById("valor").value = quantidade; 
                                        }
                                        
                                   </script>           
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