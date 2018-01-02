@extends('layouts.tema')
@section('content')
    <div class="container full-height no-padding">
        <div class="secondary-sidebar-toggle bg-master-lighter padding-10 text-center hidden-lg-up">
            <a href="#" data-init="secondary-sidebar-toggle"><i class="pg pg-more"></i></a>
        </div>
        <div class="secondary-sidebar light" data-init="secondary-sidebar">
            <p class="menu-title">BROWSE</p>
            <ul class="main-menu">
                <li class="">
                    <a href="#">
                        <span class="title">pages frontend</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span class="title">webarch admin</span>
                    </a>
                </li>
            </ul>
            <p class="menu-title m-t-30">YOUR FAVOURITE</p>
            <ul class="main-menu">
                <li class="">
                    <a href="#">
                  <span class="icon-thumbnail">
                       <i data-feather="layers"></i>
                     </span>
                        <span class="title">Collection</span>
                        <span class="badge pull-right">5</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                  <span class="icon-thumbnail">
                       <i data-feather="award"></i>
                     </span>
                        <span class="title"> Playlist</span>
                    </a>
                </li>
                <li class="open active">
                    <a href="#">
                  <span class="icon-thumbnail">
                       <i data-feather="inbox"></i>
                     </span>
                        <span class="title">Case Study</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                                <span class="bold m-r-10 fs-12">B4</span>
                                <span class="title">Bootstrap 4</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="bold m-r-10 fs-12">MP</span>
                                <span class="title">Made with Pages</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="inner-content full-height  p-r-20 p-l-20">
            <div class="jumbotron bg-transparent" data-pages="parallax">
                <div class="sm-p-l-0 sm-p-r-0">
                    <!-- START BREADCRUMB -->
                </div>
            </div>
            <div class="">
            </div>
        </div>
        <!-- END PAGE CONTENT -->
    </div>
@stop

@section('quick_view_builder')

    @include('includes.quick_view_builder')

@stop

@section('script')

    <script src="{{ url('script/builder/sidebar_builder/barActive.js') }}"></script>

    <script src="{{ url('script/builder/demo.js') }}"></script>

    <script src="{{ url('script/builder/barActive.js') }}"></script>

    <script src="{{ url('script/builder/pageBuilder.js') }}"></script>

@stop