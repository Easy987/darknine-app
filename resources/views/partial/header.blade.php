<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="description" content="Dark Nine Night Club"/>
    <meta name="keywords" content="Club, Disco, Diszkó, D9 Dark Nine, Dark Nine, D9, Budapest, Night Club, Bar, DJ"/>
    <meta name="author" content=""/>
    <meta name="MobileOptimized" content="320"/>
    <!--Template style -->



    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/animate.css?version=<?=config('app.version')?>"/>
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/bootstrap.min.css?version=<?=config('app.version')?>"/>
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/fonts.css?version=<?=config('app.version')?>"/>
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/flaticon.css?version=<?=config('app.version')?>"/>
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/font-awesome.css?version=<?=config('app.version')?>"/>
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/magnific-popup.css?version=<?=config('app.version')?>">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/style.css?version=<?=config('app.version')?>"/>
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/responsive.css?version=<?=config('app.version')?>"/>
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/reset.css?version=<?=config('app.version')?>"/>
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/owl.carousel.css?version=<?=config('app.version')?>">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/owl.theme.default.css?version=<?=config('app.version')?>">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/player.css?version=<?=config('app.version')?>">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/toastify.min.css?version=<?=config('app.version')?>">
    <link rel="stylesheet" type="text/css"
          href="{{ config('app.url') }}/assets/js/plugin/rs_slider/layers.css?version=<?=config('app.version')?>">
    <link rel="stylesheet" type="text/css"
          href="{{ config('app.url') }}/assets/js/plugin/rs_slider/navigation.css?version=<?=config('app.version')?>">
    <link rel="stylesheet" type="text/css"
          href="{{ config('app.url') }}/assets/js/plugin/rs_slider/settings.css?version=<?=config('app.version')?>">
    <!--favicon-->


    <link rel="apple-touch-icon" sizes="180x180" href="{{ config('app.url') }}/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ config('app.url') }}/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ config('app.url') }}/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ config('app.url') }}/assets/images/favicon/site.webmanifest">

    @yield('header')
</head>
