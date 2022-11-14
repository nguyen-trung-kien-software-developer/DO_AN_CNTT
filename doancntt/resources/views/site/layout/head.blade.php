<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>{{ !empty($title) ? $title . ' | ' . request()->getHost() : $headerData->company['name'] }}</title>

    @if (!empty($seoKeyword))
        <meta name="description" content='{!! $seoKeyword !!}'>
    @else
        <meta name="description" content="{{ $headerData->company['seo_keyword'] }}">
    @endif

    @php
        $favicon = $headerData->company['favicon'];
    @endphp
    <link rel="shortcut icon" href="{{ asset("storage/uploads/$favicon") }}" type="image/x-icon" />

    <link rel="stylesheet" href="{{ asset('template/site/vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/site/vendor/cloud-zoom/cloud-zoom.css') }}">
    <link rel="stylesheet" href="{{ asset('template/site/vendor/bootstrap-4.5.3-dist/css/bootstrap.min.css') }}">

    <!-- Only lashamintroduction.html, samnuihanquoc.html and storesystems.html -->
    <link rel='stylesheet' id='flatsome-main-css'
        href='{{ asset('template/site/vendor/flatsome/assets/css/flatsome2916.css') }}' type='text/css' media='all' />

    <link rel="stylesheet" href="{{ asset('template/site/css/all.mobile.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/site/css/all.desktopfffc.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/site/css/icons/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/site/css/rating.css') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .jssorb032 {
            position: absolute;
        }

        .jssorb032 .i {
            position: absolute;
            cursor: pointer;
        }

        .jssorb032 .i .b {
            fill: #fff;
            fill-opacity: 0.7;
            stroke: #000;
            stroke-width: 1200;
            stroke-miterlimit: 10;
            stroke-opacity: 0.25;
        }

        .jssorb032 .i:hover .b {
            fill: #000;
            fill-opacity: 0.6;
            stroke: #fff;
            stroke-opacity: 0.35;
        }

        .jssorb032 .iav .b {
            fill: #000;
            fill-opacity: 1;
            stroke: #fff;
            stroke-opacity: 0.35;
        }

        .jssorb032 .i.idn {
            opacity: 0.3;
        }

        .jssora051 {
            display: block;
            position: absolute;
            cursor: pointer;
        }

        .jssora051 .a {
            fill: none;
            stroke: #fff;
            stroke-width: 360;
            stroke-miterlimit: 10;
        }

        .jssora051:hover {
            opacity: 0.8;
        }

        .jssora051.jssora051dn {
            opacity: 0.5;
        }

        .jssora051.jssora051ds {
            opacity: 0.3;
            pointer-events: none;
        }

    </style>

</head>
