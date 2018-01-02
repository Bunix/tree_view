@extends('layouts.tema')
@section('content')
    <div class="content ">
        <div class="bg-white">
            <div class="container">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                    <li class="breadcrumb-item active">Nestables</li>
                </ol>
            </div>
        </div>
        <!-- START JUMBOTRON -->
        <div class="jumbotron">
            <div class=" container p-l-0 p-r-0   container-fixed-lg">
                <div class="inner">
                    <!-- START BREADCRUMB -->
                    <div class="row">
                        <div class="col-xl-7 col-lg-6 ">
                            <!-- START card -->
                            <div class="full-height">
                                <div class="card-block text-center">
                                    <img class="image-responsive-height demo-mw-600" src="img/demo/nest.png"
                                         alt="">
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                        <div class="col-xl-5 col-lg-6 ">
                            <!-- START card -->
                            <div class="card card-transparent">
                                <div class="card-block">
                                    <h3 class="">
                                        Nestables
                                    </h3>
                                    <p>This is powered by the JQuery nestable plugin, we have customized it to suite the
                                        design scheme and color pallete
                                    </p>
                                    <br>
                                    <div class="col-md-12 no-padding">
                                        <a href="http://dbushell.github.io/Nestable/" target="_blank"
                                           class="btn btn-complete">See Plugin</a>
                                        <p class="small hinted-text inline p-l-10 no-margin col-middle">
                                            http://dbushell.github.io/Nestable/
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END JUMBOTRON -->
        <!-- START CONTAINER FLUID -->
        <div class=" container    container-fixed-lg">
            <div class="row">
                <div class="col-md-6">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title">Basic Nestables
                            </div>
                        </div>
                        <div class="card-block">
                            <p>Netables and also draggable using touch devices, you can simply create on by with an
                                Ordered list, further reading please reffer documentation</p>
                            <div class="dd" id="basic_example">
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="1">
                                        <div class="dd-handle">
                                            Item 1
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle">
                                            Item 2
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="3">
                                                <div class="dd-handle">
                                                    Item 3
                                                </div>
                                            </li>
                                            <li class="dd-item" data-id="4">
                                                <div class="dd-handle">
                                                    Item 4
                                                </div>
                                            </li>
                                            <li class="dd-item" data-id="5">
                                                <div class="dd-handle">
                                                    Item 5
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
                <div class="col-md-6">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title">Drag Handler
                            </div>
                        </div>
                        <div class="card-block">
                            <p>This configuration allows you to add a handler at the left so you only allowed to move it
                                from the handler</p>
                            <div class="dd" id="drag_handler_example">
                                <ol class="dd-list">
                                    <li class="dd-item dd3-item" data-id="13">
                                        <div class="dd-handle dd3-handle">
                                            Drag
                                        </div>
                                        <div class="dd3-content">
                                            Item 13
                                        </div>
                                    </li>
                                    <li class="dd-item dd3-item" data-id="14">
                                        <div class="dd-handle dd3-handle">
                                            Drag
                                        </div>
                                        <div class="dd3-content">
                                            Item 14
                                        </div>
                                    </li>
                                    <li class="dd-item dd3-item" data-id="15">
                                        <div class="dd-handle dd3-handle">
                                            Drag
                                        </div>
                                        <div class="dd3-content">
                                            Item 15
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item dd3-item" data-id="16">
                                                <div class="dd-handle dd3-handle">
                                                    Drag
                                                </div>
                                                <div class="dd3-content">
                                                    Item 16
                                                </div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="17">
                                                <div class="dd-handle dd3-handle">
                                                    Drag
                                                </div>
                                                <div class="dd3-content">
                                                    Item 17
                                                </div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="18">
                                                <div class="dd-handle dd3-handle">
                                                    Drag
                                                </div>
                                                <div class="dd3-content">
                                                    Item 18
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
            </div>
            <!-- START card -->
            <div class="card card-default">
                <div class="card-header ">
                    <div class="card-title">Play ground
                    </div>
                </div>
                <div class="card-block">
                    <p>
                        Here is a useful sortable list that can be grouped and sorted by simply dragging and dropping
                        even on a touch device
                        <br>
                        <br>
                        <code id="nestable-output"></code> <code id="nestable2-output"></code>
                    </p>
                    <div class="cf nestable-lists">
                        <div class="dd" id="nestable">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        Item 1
                                    </div>
                                </li>
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle">
                                        Item 2
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                Item 3
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                Item 4
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="5">
                                            <div class="dd-handle">
                                                Item 5
                                            </div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="6">
                                                    <div class="dd-handle">
                                                        Item 6
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="7">
                                                    <div class="dd-handle">
                                                        Item 7
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="8">
                                                    <div class="dd-handle">
                                                        Item 8
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="dd-item" data-id="9">
                                            <div class="dd-handle">
                                                Item 9
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="10">
                                            <div class="dd-handle">
                                                Item 10
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="dd-item" data-id="11">
                                    <div class="dd-handle">
                                        Item 11
                                    </div>
                                </li>
                                <li class="dd-item" data-id="12">
                                    <div class="dd-handle">
                                        Item 12
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="dd" id="nestable2">
                            <ol class="dd-list dark">
                                <li class="dd-item" data-id="13">
                                    <div class="dd-handle">
                                        Item 13
                                    </div>
                                </li>
                                <li class="dd-item" data-id="14">
                                    <div class="dd-handle">
                                        Item 14
                                    </div>
                                </li>
                                <li class="dd-item" data-id="15">
                                    <div class="dd-handle">
                                        Item 15
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="16">
                                            <div class="dd-handle">
                                                Item 16
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="17">
                                            <div class="dd-handle">
                                                Item 17
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="18">
                                            <div class="dd-handle">
                                                Item 18
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- END card -->
        </div>
        <!-- END CONTAINER FLUID -->
    </div>
@stop

@section('script')

    <script src="{{ url('script/nestables/nestables.js') }}" type="text/javascript"></script>

    <script src="{{ url('script/elements/barActive.js') }}"></script>

@stop