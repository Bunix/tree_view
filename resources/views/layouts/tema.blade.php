<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>

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
    <link href="{{ url('simple-line-icons/simple-line-icons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('ui-dynatree/ui.dynatree.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('pages/dashboard.widgets.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{ url('pages/pages-icons.css') }}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{ url('pages/themes/modern.css') }}" rel="stylesheet" type="text/css"/>

    <style>
        ._button_edit {
            position: absolute;
            width: 80%;
            bottom: 2%;
            background: transparent;
        }
        .note-prev{
            height: 23px;
            margin: 0;
            font-size: 13px;
            font-weight: bold;
            width: 100px;
            white-space: nowrap;
            overflow: hidden;
            text-ovrflow: ellipsis;
            vertical-align: middle;
            display: inline-block;
        }
        .position-notes{
            margin-left: -17px;
        }
    </style>
</head>

<body class="fixed-header horizontal-menu horizontal-app-menu">

<!-- START PAGE-CONTAINER -->
<div class="header p-r-0 bg-primary">

    @include('includes.topbar_1')

    @include('includes.topbar_2')

</div>

<div class="page-container">

    <!-- START PAGE CONTENT WRAPPER -->

    <div class="page-content-wrapper">

        <!-- START PAGE CONTENT -->
        @yield('content')
        <!-- END PAGE CONTENT -->

        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        @include('includes.footer')
        <!-- END COPYRIGHT -->

    </div>

    <!-- END PAGE CONTENT WRAPPER -->

</div>
<!-- END PAGE CONTAINER -->
<!-- START QUICKVIEW -->

<div id="quickview" class="quickview-wrapper" data-pages="quickview">

    @include('includes.quick_view')

</div>

<!-- END QUICKVIEW -->
<!-- START OVERLAY -->
<div class="overlay hide" data-pages="search">
    <!-- BEGIN Overlay Content !-->
    @include('includes.search')
    <!-- END Overlay Content !-->
</div>

@yield('quick_view_builder')

<script src="http://localhost:6004/socket.io/socket.io.js" type="text/javascript"></script>
<script src="js/libs.js" type="text/javascript"></script>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDUjzK9obGHSxvWkhPKhpN0v-_sPHhvg2o"
        type="text/javascript"></script>

@yield('script')

<script src="{{ url('script/scripts.js') }}" type="text/javascript"></script>
<script src="script/notes/notes.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.3/tinymce.min.js" type="text/javascript"></script>
<script src="script/notes/notes_echo.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>

</body>
</html>