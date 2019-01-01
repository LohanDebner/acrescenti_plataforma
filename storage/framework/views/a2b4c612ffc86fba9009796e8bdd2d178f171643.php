<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACRESCENTI- <?php echo $__env->yieldContent('title'); ?> </title>

    <link href="css/jasny-bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo asset('css/vendor.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/plugins/datapicker/datepicker3.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/plugins/switchery/switchery.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/plugins/iCheck/custom.css'); ?>" />
    
  
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        <?php echo $__env->make('layouts.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            <?php echo $__env->make('layouts.topnavbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Main view  -->
            <?php echo $__env->yieldContent('content'); ?>

            <!-- Footer -->
            <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<script src="<?php echo asset('js/jquery-3.1.1.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/app.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/jasny-bootstrap.min.js'); ?>" type="text/javascript"></script>

<script src="<?php echo asset('js/plugins/switchery/switchery.js'); ?>">type="text/javascript" </script>
<script src="<?php echo asset('js/plugins/datapicker/bootstrap-datepicker.js'); ?>">type="text/javascript" </script>
<script src="<?php echo asset('js/plugins/iCheck/icheck.min.js'); ?>" type="text/javascript"></script>

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
    



<?php $__env->startSection('scripts'); ?>
<?php echo $__env->yieldSection(); ?>

</body>
</html>
