
<!DOCTYPE html>
<html>
    <head>
        <!-- Meta Tags
        ========================== -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- Site Title
        ========================== -->
        <title>Eamaar</title>
        
        <!-- Favicon
		===========================-->
        
        <!-- Base & Vendors
        ========================== -->
        <link href="{{asset('assets/site/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('assets/site/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/prettyPhoto/css/prettyPhoto.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/site/vendor/owl-carousel/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/owl-carousel/css/owl.theme.css')}}">
        <!-- Site Style
        ========================== -->
        <link rel="stylesheet" href="{{asset('assets/site/css/style.css')}}">
        @if (Config::get('app.locale') == 'en')
            <link rel="stylesheet" href="{{asset('assets/site/css/style-en.css')}}">
        @else
        @endif

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
        <![endif]-->
    </head>
    <body>
        <div class="preloader"></div>
        <div class="wrapper">
            <div class="header">
                @include('site.layouts.header')
            </div>
            <div class="main">
                <div class="page-content">
                    @yield('content')
                </div><!-- End Page-Content -->
                    @include('site.layouts.footer')
            </div><!--End Page-content-->
        </div><!-- End Wrapper -->

        <!-- JS Base & Vendors
        ========================== -->
        <script src="{{asset('assets/site/vendor/jquery/jquery.js')}}"></script>
        <script src="{{asset('assets/site/vendor/popper.js')}}"></script>
        <script src="{{asset('assets/site/vendor/bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{asset('assets/site/vendor/prettyPhoto/js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{asset('assets/site/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/site/vendor/mixitup.js')}}"></script>
        <!-- Site JS
        ========================== -->
        <script src="{{asset('assets/site/js/main.js')}}"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
//------------------------------------------------------------------------------
            $('#subscriber').on('submit', function(e){
                e.preventDefault();
                var data = $(this).serialize();
                var url = $(this).attr('action');
                var post = $(this).attr('method');
                console.log(data);
                $.ajax({
                    type : post,
                    url : url,
                    data : data,
                    dataType : 'json',
                    success:function(data)
                    {
                        console.log(data)
                        $('#subscriber').trigger('reset')
                    }
                })
            })
//------------------------------------------------------------------------------
        </script>
    </body>
</html>