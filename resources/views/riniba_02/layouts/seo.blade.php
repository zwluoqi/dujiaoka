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
    <link rel="stylesheet" href="/assets/riniba_02/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/riniba_02/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/riniba_02/css/slick.css">
    <link rel="stylesheet" href="/assets/riniba_02/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/riniba_02/css/line-awesome.min.css">
    <link rel="stylesheet" href="/assets/riniba_02/css/main.css">


</head>

<body>

    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="side-overlay"></div>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    @include('riniba_02.layouts._mobil_header')
    @include('riniba_02.layouts._nav_header')
    @yield('content')
    @include('riniba_02.layouts._footer')
</body>

@include('riniba_02.layouts._script')
@section('js')
@show

</html>