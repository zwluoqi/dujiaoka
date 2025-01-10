<!DOCTYPE html>
<html lang="{{ str_replace('_','-',strtolower(app()->getLocale())) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($page_title) ? $page_title : '' }} | {{ dujiaoka_config_get('title') }}</title>
    <meta name="keywords" content="{{ $gd_keywords }}">
    <meta name="description" content="{{ $gd_description }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{ $picture }}">
    <meta property="og:title" content="{{ isset($page_title) ? $page_title : '' }}">
    <meta property="og:description" content="{{ $gd_description }}">    
    <meta property="og:release_date" content="{{ $updated_at }}">
    @if(\request()->getScheme() == "https")
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @endif
    <link rel="stylesheet" href="/assets/riniba_01/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/riniba_01/css/vendor/font-awesome.css" />
    <link rel="stylesheet" href="/assets/riniba_01/css/vendor/slick.css" />
    <link rel="stylesheet" href="/assets/riniba_01/css/vendor/slick-theme.css" />
    <link rel="stylesheet" href="/assets/riniba_01/css/vendor/ionrangeslider.css" />
    <link rel="stylesheet" href="/assets/riniba_01/css/vendor/aksVideoPlayer.css" />
    <link rel="stylesheet" href="/assets/riniba_01/css/app.css" />


</head>

<body>

    <div id="preloader">
        <div class="image-loader">
        <img src="/assets/riniba_01/media/loading.png" alt="Loading" />
        </div>
    </div>
    <a href="#main-wrapper" id="backto-top" class="back-to-top"><i class="fas fa-angle-up"></i></a>
    <div id="main-wrapper" class="overflow-hidden">
        @include('riniba_01.layouts._nav_header')
        @yield('content')
        @include('riniba_01.layouts._footer')   
        </div>
</body>

@include('riniba_01.layouts._script')
@section('js')
@show
</html>
