<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        
        <meta name="_token" content="{{ csrf_token() }}">
        
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
       

      
        <meta charset="utf-8"/>
        <title>Abhinav</title>
        
    <link rel="icon" type="image/png" href="{{asset('assets/img/a.klogo.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">

</head>
    <body class="page-md login loadingInProgress">
        <!-- <div id="cover"></div> -->
            <div class="wrapper">
                @yield('content')
            </div>
        
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{asset('assets/js/jquery-min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    
  
    
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
