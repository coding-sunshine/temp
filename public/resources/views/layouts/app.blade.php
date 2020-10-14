<?php

use App\Http\Controllers\Platform\Core\Helper\SettingsHelper as SettingsHelper;
use Krucas\Settings\Facades\Settings as Settings;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Twitter -->
    <meta name="twitter:site" content="@piab">
    <meta name="twitter:creator" content="@piab">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Property In a Box">
    <meta name="twitter:description" content="Largest off-market property listings">
    <meta name="twitter:image" content="https://v3.fusioncrm.com.au/image/fusion-crm-logo.png">

    <!-- Facebook -->
    <meta property="og:url" content="https://v3.fusioncrm.com.au">
    <meta property="og:title" content="Property In a Box">
    <meta property="og:description" content="Largest off-market property listings">

    <meta property="og:image" content="http://v3.fusioncrm.com.au/image/fusion-crm-logo.png">
    <meta property="og:image:secure_url" content="https://v3.fusioncrm.com.au/image/fusion-crm-logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <!-- Meta -->
    <meta name="description" content="Largest off-market property listings">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}" />
    <title>Fusion CRM | {{ $title ?? ''}} </title>

    <!-- vendor css -->
    {!!  Packer::css([
      '/third-party/azia/lib/fontawesome-free/css/all.min.css',
      '/third-party/azia/lib/ionicons/css/ionicons.min.css',
      '/third-party/azia/lib/typicons.font/typicons.css',
      '/third-party/azia/lib/flag-icon-css/css/flag-icon.min.css',
      '/third-party/azia/lib/datatables.net-dt/css/jquery.dataTables.min.css',
      '/third-party/azia/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css',
      '/third-party/azia/lib/select2/css/select2.min.css',
      '/third-party/azia/css/azia.css'
      ],'/storage/cache/css/'
  ) !!}

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  </head>
  <body class="az-body">

    <!-- Page Loader -->
    <div id="loader" class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle fa-3x">
                          <i class="fas fa-circle-notch fa-spin"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Page Loader -->

    @include('partial.left-sidebar')
    
    @include('partial.header')
    <div id="main-content" class="az-content {{ $az_content ?? ''}}" style="visibility: hidden;">
      <div class="az-content-breadcrumb pd-l-20">
        <span>{{ $navTab }}</span>
        <span>{{ $navTabSecondary }}</span>
      </div>

    
      @yield('content')
    </div><!-- az-content -->

    <div class="az-footer pd-l-60 {{ $az_footer ?? ''}}">
      <div class="container-fluid">
        <span>&copy; 2020 Property In A Box</span>
        <span>Fusion CRM</span>
      </div><!-- container -->
    </div><!-- az-footer -->

    @include('partial.bottom_js')
    
    @stack('scripts')
  </body>
</html>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
        var type="{{Session::get('alert-type','success')}}"
        switch(type){
          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;
          case 'info':
              toastr.info("{{ Session::get('message') }}");
              break;
          case 'error':
              toastr.error("{{ Session::get('message') }}");
              break;
        }
    @endif
</script>

