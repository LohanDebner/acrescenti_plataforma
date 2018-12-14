<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACRESCENTI- @yield('title') </title>

    <link href="css/jasny-bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="{!! asset('css/plugins/switchery/switchery.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
  
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

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/jasny-bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/icheck.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/switchery/switchery.js') !!}">type="text/javascript" </script>

<script>
$(document).ready(function () {
$('.i-checks').iCheck({
checkboxClass: 'icheckbox_square-green',
radioClass: 'iradio_square-green',
});
});
</script>

<script>
    $(document).ready(function(){
         var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });

        var elem_2 = document.querySelector('.js-switch_2');
        var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

        var elem_3 = document.querySelector('.js-switch_3');
        var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

        var elem_4 = document.querySelector('.js-switch_4');
        var switchery_4 = new Switchery(elem_4, { color: '#f8ac59' });
            switchery_4.disable();
    });
</script>

<script>
        function ativarResponsavel() {
         // Get the checkbox
         var checkBox = document.getElementById("myCheck");
         // Get the output text
         var divRes = document.getElementById("divResponsavel");
        
         // If the checkbox is checked, display the output text
         if (checkBox.checked == true){
           divRes.style.display = "block";
         } else {
           divRes.style.display = "none";
         }
        }
        </script>


@section('scripts')
@show

</body>
</html>
