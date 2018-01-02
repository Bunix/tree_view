@extends('layouts.tema')
@section('content')
    <div class="content full-width full-height overlay-footer">
    <!-- START CONTENT INNER -->
    <div class="container">
        <div class="map-controls">
            <div class="pull-left">
                <div class="btn-group btn-group-vertical" data-toggle="buttons-radio">
                    <button id="map-zoom-in" class="btn btn-success btn-xs"><i class="fa fa-plus"></i>
                    </button>
                    <button id="map-zoom-out" class="btn btn-success btn-xs"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Map -->
    <div class="map-container full-width full-height">
        <div id="google-map" class="full-width full-height"></div>
    </div>
    <!-- END CONTENT INNER -->
</div>
@stop

@section('script')

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb0MB7Efjf-albgX6EthQnZYpUSCS1yHI" type="text/javascript"></script>

    <script src="{{ url('script/maps/google_map.js') }}" type="text/javascript"></script>

@stop