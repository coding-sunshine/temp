<?php

use App\Http\Controllers\Platform\Core\Helper\SettingsHelper as SettingsHelper;
use Krucas\Settings\Facades\Settings as Settings;

?>


        <!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> {{ \Modules\Platform\Core\Helper\SettingsHelper::getApplicationTitle() }}</title>
    <!-- Favicon-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('bap/images/favicon.png') }}" type="image/png">

    <link href="{{ asset('bap/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,latin-ext,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    

    @stack('css-up')



    <script type="text/javascript" src="{{ asset('bap/plugins/jquery/jquery.min.js')}}"></script>

    {{-- @if(config('broadcasting.connections.pusher.key') != '')
        <script src="https://js.pusher.com/3.1/pusher.min.js"></script>
        <script>

            // window.PUSHER = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {
            //     cluster: '{{ config('broadcasting.connections.pusher.options.cluster') }}',
            //     encrypted: true
            // });

        </script>
    @endif --}}

        <!-- Css -->
        {!!  Packer::css([
            '/css/third-party/bootstrap/bootstrap.min.css',
            '/css/third-party/owl-carousel/owl.carousel.css',
            '/css/style.css'

            ],
            '/storage/cache/css/main.css'
        ) !!}


    @stack('css')


    @include('partial.header_js')

    <!-- here -->


</head>

<body class="{{ Auth::user()->theme() }} @yield('body_class')">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>@lang('core::core.please_wait')</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->

@include('partial.search-bar')
@include('partial.top-bar')
<section>


    @include('partial.left-sidebar')

    @include('partial.right-sidebar')
</section>

<section class="content">
    <div class="container-fluid">



        @include('flash::message')

        @yield('content')

    </div>
</section>


@include('partial.bottom_js')


@stack('scripts')


<div class="modal fade" id="genericModal" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 10080!important;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>

            <div class="modal-body ">

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">@lang('core::core.CLOSE')</button>
            </div>
        </div>
    </div>
</div>

@include('announcement::announcement-message')

</body>
</html>
