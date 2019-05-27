<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    
        <meta content="this page is a proper portfolio landing page of abhinav kumar who was head at trivago india " name="description"/>
        <meta content="Abinav Kumar Landing Page" name="author"/>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140880007-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-140880007-1');
        </script>
        <meta name="google-site-verification" content="fincKC03s89igEfFuTw1ru7wa8sxH7Y4SL5GYq_13G0">
         
        <meta name="_token" content="{{ csrf_token() }}">
        
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
       

      
        <meta charset="utf-8"/>
        <title>Abhinav</title>
        
    <link rel="icon" type="image/png" href="{{asset('assets/img/a.klogo.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/sweetalert2.css')}}">

</head>
    <body class="page-md login loadingInProgress">
        <!-- <div id="cover"></div> -->
            <div class="wrapper">
                @yield('content')
            </div>
        
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{asset('assets/js/jquery-min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/sweetalert2.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/admin-style.css')}}">
    
    <!-- [ SLIDER SCRIPT ] -->


    <script type="text/javascript">

      $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },isLocal: false
        });
      });
    </script>
    
    <!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
    @yield('requirejs')
  </body>
</html>
