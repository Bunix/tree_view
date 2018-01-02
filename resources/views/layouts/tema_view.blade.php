<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />

    <title>Pages - Admin Dashboard UI Kit - Pages</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
    <link rel="apple-touch-icon" href="{{ url('pages/ico/60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('pages') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('pages/ico/120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('pages/ico/152.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ url('favicon.ico') }}"/>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link href="{{ asset('css/libs.css') }}" rel="stylesheet" type  ="text/css"/>
    <link href="{{ url('font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('pages/pages-icons.css') }}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{ url('pages/themes/modern.css') }}" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        window.onload = function()
        {
            // fix for windows 8
            if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
                document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
        }
    </script>
    <style>
        .down-scroll{
            border-color:#e6e6e6;
            border-width:1px 1px 0 1px;
            border-style:solid
        }
    </style>
</head>
<body class="fixed-header">

@yield('content_view')

<script src="js/libs.js" type="text/javascript"></script>

@yield('script_view')

</body>
</html>