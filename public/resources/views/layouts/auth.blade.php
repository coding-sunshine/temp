
<?php
use App\Http\Controllers\Platform\Core\Helper\SettingsHelper as SettingsHelper;
use Krucas\Settings\Facades\Settings as Settings;
?>

<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{ config('app.name') }}</title>
    <!-- Favicon-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('/favicon.png') }}" type="image/png">
    {{-- <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"> --}}
  

    <!-- Css -->
    {!!  Packer::css([
        '/third-party/bootstrap/bootstrap.min.css',
        '/third-party/owl-carousel/owl.carousel.css',
        '/css/style.css'
        ],'/storage/cache/css/main.css'
    ) !!}

    {{-- @if(config('bap.google_ga'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('app.google_ga') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ config('bap.google_ga') }}');
        </script>
    @endif --}}

</head>

<body class="login-page ls-closed auth-background">

@yield('content')



    <!-- Scripts -->
    {!! Packer::js([
        '/third-party/jquery/jquery.min.js',
        '/third-party/popper/popper.min.js',
        '/third-party/bootstrap/bootstrap.min.js',
        '/third-party/owl-carousel/owl.carousel.js'],
        '/storage/cache/js/main.js'
    )  !!}

<script type="text/javascript">
    $(document).ready(function(){

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            items: 1,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:false
        });

        $("#forgot").click(function(){
            $("#log-pass").hide();
            $("#confirm-pass").show();
        });
    });
</script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
@if($errors->has('username'))
    var type="{{Session::get('alert-type','error')}}"
    switch(type){
       case 'error':
          toastr.error("{{ $errors->first('username') }}");
          break;
    }
@endif
@if($errors->has('password'))
    var type="{{Session::get('alert-type','error')}}"
    switch(type){
       case 'error':
          toastr.error("{{ $errors->first('password') }}");
          break;
    }
@endif
</script>

</body>
</html>
