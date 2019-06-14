<!DOCTYPE html>
<html>
    <head>
        <!-- Meta Tags
        ========================== -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf_token" content="{{csrf_token()}}">
        <!-- Site Title
        ========================== -->
        <title>@yield('title')</title>

        <!-- Favicon
                ===========================-->
        <!--        <link rel="shortcut icon" type="image/x-icon" href="images/fav.jpg">-->

        <!-- Web Fonts
        ========================== -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> 


        <!-- Base & Vendors
        ========================== -->
        <link href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap-ar.css')}}" rel="stylesheet">
        <link href="{{asset('assets/admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/admin/vendor/data-table-plugin/datatables/datatables.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/admin/vendor/data-table-plugin/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet">

        <!--DateRangPicker-->
        <link href="{{asset('assets/admin/vendor/daterangepicker/daterangepicker.css')}}" rel="stylesheet">

        <!--Dropzone-->
        <link href="{{asset('assets/admin/dropzone.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/admin/vendor/dropzone/basic.min.css')}}" rel="stylesheet">

        <!--DateRangPicker-->
        <link href="{{asset('assets/admin/vendor/daterangepicker/daterangepicker.css')}}" rel="stylesheet">

        <!--SummerNote Editor-->
        <link href="{{asset('assets/admin/vendor/bootstrap-summernote/summernote.css')}}" rel="stylesheet">

        <!-- Site Style
        ========================== -->
        <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">        
        
        

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">


            @include('admin.layouts.header')

            @include('admin.layouts.sidebar')






            <div class="main">   

                @yield('content')


                @include('admin.layouts.footer')

            </div><!-- End Main-->
        </div><!-- End Wrapper -->


        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

        <!-- JS Base And Vendor
        ========================== -->
        <script src="{{asset('assets/admin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{asset('assets/admin/dropzone.js')}}" type="text/javascript"></script>
        <!-- Jquery validation-->
        <script src="{{asset('assets/admin/vendor/jquery-validation/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/site.js')}}"></script>


        <!-- BEGIN PAGE LE                VEL PLUGINS -->
        <script src="{{asset('assets/admin/vendor/data-table-plugin/datatable.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/data-table-plugin/datatables/datatables.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/data-table-plugin/datatables/plugins/bootstrap/datatables.bootstrap.js')}}"></script>

        <!-- date-range-picker -->
        <script src="{{asset('assets/admin/vendor/daterangepicker/moment.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/daterangepicker/daterangepicker.js')}}"></script>

        <script src="{{asset('assets/admin/vendor/data-table-plugin/script/table-datatables-editable.min.js')}}"></script>

        <!-- jquery.repeater -->
        <script src="{{asset('assets/admin/vendor/jquery-repeater/jquery.repeater.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/jquery-repeater/form-repeater.js')}}"></script>
        <!--SummerNote Editor-->
        <script src="{{asset('assets/admin/vendor/bootstrap-summernote/summernote.min.js')}}"></script>
        <!-- Site JS
        ========================== -->
        <script src="{{asset('assets/admin/process.js')}}"></script>
        <script src="{{asset('assets/admin/js/main.js')}}"></script>
    </body>
</html>