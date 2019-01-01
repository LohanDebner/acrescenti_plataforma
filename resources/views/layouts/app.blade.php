<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACRESCENTI- @yield('title') </title>

    <link href="css/jasny-bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/plugins/datapicker/datepicker3.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/plugins/switchery/switchery.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/plugins/iCheck/custom.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/plugins/sweetalert/sweetalert.css') !!}">
    
  
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<script src="{!! asset('js/jquery-3.1.1.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/jasny-bootstrap.min.js') !!}" type="text/javascript"></script>

<script src="{!! asset('js/plugins/switchery/switchery.js') !!}">type="text/javascript" </script>
<script src="{!! asset('js/plugins/datapicker/bootstrap-datepicker.js') !!}">type="text/javascript" </script>
<script src="{!! asset('js/plugins/iCheck/icheck.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/sweetalert/sweetalert.min.js') !!}"></script>

<script>    
        $(document).ready(function(){

            // DATE PICKER
            var yearsAgo = new Date();
            yearsAgo.setFullYear(yearsAgo.getFullYear() - 20);
            $('#selector').datepicker('setDate', yearsAgo );

            $('#data_nascimento_picker .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_ingresso_picker .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });           

            //SWITCHER
            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });
            
        });    
    </script>

    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $(".telefone").bind('input propertychange',function(){
                var texto = $(this).val();
                
                texto = texto.replace(/[^\d]/g, '');
                
                if (texto.length > 0)
                {
                texto = "(" + texto;
                    
                    if (texto.length > 3)
                    {
                        texto = [texto.slice(0, 3), ") ", texto.slice(3)].join('');  
                    }
                    if (texto.length > 12)
                    {      
                        if (texto.length > 13) 
                            texto = [texto.slice(0, 10), "-", texto.slice(10)].join('');
                        else
                            texto = [texto.slice(0, 9), "-", texto.slice(9)].join('');
                    }                 
                        if (texto.length > 15)                
                            texto = texto.substr(0,15);
                }
                $(this).val(texto);     
                });
            });
        </script>
        <script>
            $('#botaoDeletar').click(function () {
                swal({
                title: "Você tem certeza?",
                text: "Deseja realmente deletar?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sim",
                closeOnConfirm: false
            }, function () {
                swal("Deletado!", "O item foi deletado com sucesso", "success");
                document.getElementById("formDeletar").submit();
            });
        });
        </script>



@section('scripts')
@show

</body>
</html>
