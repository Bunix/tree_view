@extends('layouts.tema')
@section('content')
    <div class="content ">
        <div class="bg-white">
            <div class="container">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Charts</li>
                </ol>
            </div>
        </div>
        <!-- START CONTAINER FLUID -->
        <div class=" container    container-fixed-lg">
            <!-- START card -->

            <div class=" container    container-fixed-lg">
                <!-- START card -->
                <div class="card card-transparent">
                    <div class="card-header  ">
                        <div class="card-title">Days Charts
                        </div>
                    </div>
                    <div class="card-block d-flex flex-wrap">
                        <div class="col-lg-12 sm-no-padding">
                            <div class="card card-transparent">
                                <div class="card-header  ">
                                    <div class="card-controls">
                                        <ul>
                                            <li><a href="#" class="card-collapse" data-toggle="collapse"><i
                                                            class="pg-arrow_maximize"></i></a>
                                            </li>
                                            <li><a href="#" class="card-refresh" data-toggle="refresh"><i
                                                            class="pg-refresh_new"></i></a>
                                            </li>
                                            <li><a href="#" class="card-close" data-toggle="close"><i
                                                            class="pg-close"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="card card-borderless card-transparent">
                                        <!-- Nav tabs -->
                                        <ul id="tabs-rickshaw" class="nav nav-tabs nav-tabs-linetriangle"
                                            data-init-reponsive-tabs="dropdownfx">
                                            <li class="nav-item">
                                                <a href="#" class="active" data-toggle="tab"
                                                   data-target="#tab-rickshaw-realtime1" role="tab">
                                                    <span>Realtime Charts</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="tab" data-target="#tab-rickshaw-bars1"
                                                   role="tab">
                                                    <span>Stacked Bar Charts</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="tab" data-target="#tab-rickshaw-slider1"
                                                   role="tab">
                                                    <span>Area Chart with Slider</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content no-padding bg-transparent">
                                            <div class="tab-pane active relative" id="tab-rickshaw-realtime1">
                                                <div id="container3" style="width:100%; height:400px;"></div>
                                            </div>
                                            <div class="tab-pane " id="tab-rickshaw-bars1">
                                                <div id="container4" style="width:100%; height:400px;"></div>
                                            </div>
                                            <div class="tab-pane" id="tab-rickshaw-slider1">
                                                <div id="container5"
                                                     style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END card -->
                </div>

                <div class="card card-transparent">
                    <div class="card-header  ">
                        <div class="card-title">Month Charts
                        </div>
                    </div>
                    <div class="card-block d-flex flex-wrap">
                        <div class="col-lg-4 no-padding">
                            <div class="p-r-30">
                                <h3>Talk less, show more</h3>
                                <br>
                                <p>Rickshaw is a JavaScript toolkit for creating interactive time series
                                    graphs.Rickshaw provides the elements you need to create interactive graphs:
                                    renderers, legends, hovers, range selectors, etc. You put the pieces
                                    together.</p>
                                <br>
                                <div class="inline">
                                    <p class="small hint-text">Rickshaw: JavaScript toolkit for creating interactive
                                        time series graphs.
                                        <br> <a href="http://code.shutterstock.com/rickshaw/">View the official
                                            documentation</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 sm-no-padding">
                            <div class="card card-transparent">
                                <div class="card-header  ">
                                    <div class="card-controls">
                                        <ul>
                                            <li><a href="#" class="card-collapse" data-toggle="collapse"><i
                                                            class="pg-arrow_maximize"></i></a>
                                            </li>
                                            <li><a href="#" class="card-refresh" data-toggle="refresh"><i
                                                            class="pg-refresh_new"></i></a>
                                            </li>
                                            <li><a href="#" class="card-close" data-toggle="close"><i
                                                            class="pg-close"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="card card-borderless card-transparent">
                                        <!-- Nav tabs -->
                                        <ul id="tabs-rickshaw" class="nav nav-tabs nav-tabs-linetriangle"
                                            data-init-reponsive-tabs="dropdownfx">
                                            <li class="nav-item">
                                                <a href="#" class="active" data-toggle="tab"
                                                   data-target="#tab-rickshaw-realtime" role="tab">
                                                    <span>Realtime Charts</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="tab" data-target="#tab-rickshaw-bars"
                                                   role="tab">
                                                    <span>Stacked Bar Charts</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="tab" data-target="#tab-rickshaw-slider"
                                                   role="tab">
                                                    <span>Area Chart with Slider</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content no-padding bg-transparent">
                                            <div class="tab-pane active relative" id="tab-rickshaw-realtime">
                                                <div id="container" style="width:100%; height:400px;"></div>
                                            </div>
                                            <div class="tab-pane " id="tab-rickshaw-bars">
                                                <div id="container1"
                                                     style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                                            </div>
                                            <div class="tab-pane" id="tab-rickshaw-slider">
                                                <div id="container2"
                                                     style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END card -->
                </div>

                <div class="card card-transparent">
                    <div class="card-header  ">
                        <div class="card-title">Sparkline Charts
                        </div>
                    </div>

                    <div class="card-block d-flex flex-wrap">
                        <div class="col-lg-4 no-padding">
                            <div class="p-r-30">
                                <h3>Lighter but Smarter</h3>
                                <br>
                                <p>
                                    This jQuery plugin generates sparklines (small inline charts) directly in the
                                    browser using data supplied either inline in the HTML, or via javascript. The
                                    plugin is compatible with most modern browsers and has been tested with Firefox
                                    2+, Safari 3+, Opera 9, Google Chrome and Internet Explorer 6, 7, 8, 9 & 10 as
                                    well as iOS and Android.
                                </p>
                                <br>
                                <div class="inline">
                                    <p class="small hint-text">Sparkline
                                        <br> <a href="http://omnipotent.net/jquery.sparkline/#s-about">View the
                                            official
                                            documentation</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card card-transparent">
                                <div class="card-header  ">
                                    <div class="card-controls">
                                        <ul>
                                            <li><a href="#" class="card-collapse" data-toggle="collapse"><i
                                                            class="pg-arrow_maximize"></i></a>
                                            </li>
                                            <li><a href="#" class="card-refresh" data-toggle="refresh"><i
                                                            class="pg-refresh_new"></i></a>
                                            </li>
                                            <li><a href="#" class="card-close" data-toggle="close"><i
                                                            class="pg-close"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="col-sm-12 row">
                                                <span class="padding-10 bg-warning pull-left"></span>
                                                &nbsp; Sepatu
                                            </div>
                                            <div class="col-sm-12 row">
                                                <span class="padding-10 bg-danger pull-left"></span>
                                                &nbsp; Baju
                                            </div>
                                            <div class="col-sm-12 row">
                                                <div class="padding-10 bg-master-light pull-left"></div>
                                                &nbsp; Celana
                                            </div>

                                            <div class="col-sm-12 row">
                                                <div class="padding-10 bg-master pull-left"></div>
                                                &nbsp; Aksesoris
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-center">
                                            <div id="sparkline-pie" class="sparkline-chart m-t-40"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END card -->
                    <div class="card card-default">
                        <div class="card-block">
                            <h5>
                                Purchase for Chart
                            </h5>
                            <form class="" method="get" role="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="full-width" data-init-plugin="select2" id="barang_pur">
                                            <option value="">-- select --</option>
                                            <option value="1">Sepatu</option>
                                            <option value="2">Baju</option>
                                            <option value="3">Celana</option>
                                            <option value="4">Aksesoris</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Jumlah Barang</label>
                                            <input type="text" id="banyak" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" id="sub_purchase" class="btn btn-complete btn-cons">
                                        Complete
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
        </div>
    </div>
@stop

@section('script')

    <script src="{{ url('script/charts/charts.js') }}" type="text/javascript"></script>
    <script src="{{ url('script/charts/Highchart/highchart.js') }}"></script>
    <script src="{{ url('https://code.highcharts.com/modules/exporting.js') }}"></script>
    <script src="{{ url('script/charts/penjualan_echo.js') }}" type="text/javascript"></script>

@stop