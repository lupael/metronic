<!DOCTYPE html>
<!--[if IE 8]>
<html lang="pt-br" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="pt-br" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt-br">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>@yield('title', config('metronic.title', 'Metronic'))</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
{{--<meta content="Preview page of Metronic Admin Theme #1 for blank page layout" name="description"/>--}}
{{--<meta content="" name="author"/>--}}

<!-- BEGIN PAGE FIRST SCRIPTS -->
    <script src="{{asset('vendor/metronic/global/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE FIRST SCRIPTS -->
    <!-- BEGIN PAGE TOP STYLES -->
    <link href="{{asset('vendor/metronic/global/plugins/pace/themes/pace-theme-flash.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- END PAGE TOP STYLES -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('vendor/metronic/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('vendor/metronic/global/plugins/simple-line-icons/simple-line-icons.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/metronic/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

@yield('metronic_css')

<!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{asset('vendor/metronic/global/css/'.config('metronic.theme_style', 'components-square').'.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/metronic/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->


    <link rel="icon" href="{{asset(config('metronic.favicon', '../assets/layouts/layout/img/favicon.ico'))}}"
          sizes="128x128">

    <script type="text/javascript">
        base_path = "{{asset('/')}}";
    </script>

</head>
<!-- END HEAD -->


<body class="@yield('body_class')">

@yield('body')

<!--[if lt IE 9]>
<script src="{{asset('vendor/metronic/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('vendor/metronic/global/plugins/excanvas.min.js')}}"></script>
<script src="{{asset('vendor/metronic/global/plugins/ie8.fix.min.js')}}"></script>
<![endif]-->

<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('vendor/metronic/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/metronic/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{asset('vendor/metronic/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->

@yield('metronic_js')


<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{asset('vendor/metronic/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->


</body>
</html>
