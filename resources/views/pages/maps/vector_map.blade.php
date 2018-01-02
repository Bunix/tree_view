@extends('layouts.tema')
@section('content')
    <div class="content full-width full-height overlay-footer">
        <!-- Map -->
        <div class="map-container full-width full-height relative">
            <div class="container">
                <div class="map-controls">
                    <div class="pull-left">
                        <div class="btn-group btn-group-vertical" data-toggle="buttons-radio">
                            <button class="btn btn-xs"><i class="fa fa-plus"></i>
                            </button>
                            <button class="btn btn-xs"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <br>
                        <a href="#" class="btn btn-xs m-t-10 clear-map">
                            <i class="fa fa-arrows"></i>
                        </a>
                    </div>
                    <div class="pull-left m-l-15">
                        <form role="form">
                            <div class="form-group form-group-default form-group-default-select2">
                                <label>Country</label>
                                <select id="country-list" data-placeholder="Search by locationg, tag, ID"
                                        data-init-plugin="select2">
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="mapplic"></div>
        </div>
    </div>
@stop

@section('script')

    <script src="{{ url('script/maps/vector_map.js') }}" type="text/javascript"></script>

@stop