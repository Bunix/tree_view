@extends('layouts.tema')
@section('content')
    <div class="content ">
        <div class="bg-white">
            <div class="container">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                    <li class="breadcrumb-item active">Tree View</li>
                </ol>
            </div>
        </div>
        <!-- START CONTAINER FLUID -->
        <div class=" container    container-fixed-lg">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-default">
                        <div class="modal fade fill-in" id="modalFillIn" tabindex="-1" role="dialog"
                             aria-hidden="true">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="pg-close"></i>
                            </button>
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="text-left p-b-5">Anda yakin ingin <span class="semi-bold">download file</span>
                                            ini</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="GET" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <input type="hidden" id="id_tree_download" value="">
                                                <input type="hidden" id="id_type_download" value="">
                                                <input type="hidden" id="id_file_download" value="">
                                                <div class="col-lg-9 ">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true"
                                                            class="btn btn-default btn-md btn-large fs-15">No
                                                    </button>
                                                    <a id="get_file_download" href="" download="download">
                                                        <button type="button" id="file_download"
                                                                class="btn btn-primary btn-md btn-large fs-15">Yes
                                                        </button>
                                                    </a>
                                                    <input type="hidden" name="_token"
                                                           value="{{ csrf_token() }}">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <div class="modal fade slide-up disable-scroll" id="modalSlideUp" tabindex="-1"
                             role="dialog" aria-hidden="false">
                            <div class="modal-dialog ">
                                <div class="modal-content-wrapper">
                                    <div class="modal-content">
                                        <div class="modal-header clearfix text-left">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true"><i class="pg-close fs-14"></i>
                                            </button>
                                            <h5 id="title">New Menu Tree</h5>
                                            <p class="p-b-10" id="info"></p>
                                        </div>
                                        <div class="modal-body">
                                            <form id="id_form1" action="post_tree" method="GET"
                                                  enctype="multipart/form-data">
                                                <div class="form-group-attached">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="radio radio-success">
                                                                <input type="hidden" name="id_tree" id="id_tree"
                                                                       value="" class="form-control">
                                                                <input type="hidden" name="id_file" id="id_file"
                                                                       value="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row hide" id="show1">
                                                        <div class="col-md-8">
                                                            <div class="p-t-20 clearfix p-l-10 p-r-10">
                                                                <div class="pull-left">
                                                                    <p class="bold font-montserrat text-uppercase">
                                                                        Type</p>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <p class="bold font-montserrat text-uppercase"
                                                                       id="type_tree"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 m-t-10 sm-m-t-10">
                                                            <select class="cs-select cs-skin-slide center"
                                                                    id="file_tree" data-init-plugin="cs-select">
                                                                <option value="">- Pilih Bulan -</option>
                                                                <option value="01">Januari</option>
                                                                <option value="02">Februari</option>
                                                                <option value="03">Maret</option>
                                                                <option value="04">April</option>
                                                                <option value="05">Mei</option>
                                                                <option value="06">Juni</option>
                                                                <option value="07">Juli</option>
                                                                <option value="08">Agustus</option>
                                                                <option value="09">September</option>
                                                                <option value="10">Oktober</option>
                                                                <option value="11">November</option>
                                                                <option value="12">Desember</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row hide" id="show2">
                                                        <input type="file" name="file" id="file_upload">
                                                        <input type="hidden" name="type_tree" id="get_type_tree">
                                                    </div>

                                                    <div class="row" id="show3">
                                                        <div class="col-md-12">
                                                            <div class="form-group form-group-default">
                                                                <label></label>
                                                                <input type="text" id="title_tree" name="title_tree"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 m-t-10 sm-m-t-10">
                                                        <button type="button" id="create"
                                                                class="btn btn-primary pull-right">
                                                            Create
                                                        </button>
                                                        <input type="hidden" name="_token"
                                                               value="{{ csrf_token() }}">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                        </div>
                        <div class="card-block">
                            <button id="newFolder" class="btn btn-complete">New Folder
                            </button>

                            <select class="cs-select cs-skin-slide bg-complete" id="choose_type"
                                    data-init-plugin="cs-select">
                                <option value="0">- Upload Document -</option>
                                <option value="1">Penjualan</option>
                                <option value="2">Notes</option>
                            </select>

                            <button id="uploadImage" class="btn btn-complete">Upload Image
                            </button>
                        </div>
                        <div class="card-block">
                            <button id="download_file" class="btn btn-success">Download
                            </button>

                            <button id="pdf" class="btn btn-complete">View
                            </button>
                        </div>
                        <div id="drag-tree">
                            <ul id="dragTreeData" class="hidden">
                                @foreach($categories as $category)

                                    @if($category != null)

                                        <li class="{{ $category->type }}" value="{{ $category->id_tree }}">

                                            <p class="id_tree hide">{{ $category->id_tree }}</p>
                                            <p class="type_tree hide">{{ $category->type }}</p>
                                            <p class="type_file hide">{{ $category->id_file }}</p>
                                            <p class="file_tree hide">{{ $category->file }}</p>
                                            {{ $category->title }}

                                            @if(count($category->childs))
                                                @include('pages.ui_elements.children',['childs' => $category->childs])
                                            @endif

                                        </li>

                                    @else
                                        kosong
                                    @endif

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-default">
                        <div class="card-header ">
                            <div class="card-title">Log Aktivitas Download File Images
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-hover table-condensed" id="condensedTable">
                                    <thead>
                                    <tr>
                                        <th style="width:30%">Tanggal</th>
                                        <th style="width:30%">User name</th>
                                        <th style="width:40%">File name</th>
                                    </tr>
                                    </thead>
                                    <tbody id="test_download">
                                    @foreach($getDownload as $data)
                                        <tr>
                                            <td class="v-align-middle semi-bold">{{ $data->tanggal }} {{ $data->waktu }}</td>
                                            <td class="v-align-middle">{{ $data->user->name }}</td>
                                            <td class="v-align-middle semi-bold"> {{ $data->tree_menu->title }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')

    <script src="{{ url('script/treeView/new_folder.js') }}" type="text/javascript"></script>

    <script src="{{ url('script/treeView/upload_document.js') }}" type="text/javascript"></script>

    <script src="{{ url('script/treeView/upload_image.js') }}" type="text/javascript"></script>

    <script src="{{ url('script/treeView/create_menu_tree.js') }}" type="text/javascript"></script>

    <script src="{{ url('script/treeView/download_file.js') }}" type="text/javascript"></script>

    <script src="{{ url('script/treeView/view_pdf.js') }}" type="text/javascript"></script>

    <script src="{{ url('script/treeView/view_menu_tree.js') }}" type="text/javascript"></script>

    <script src="{{ url('script/elements/barActive.js') }}"></script>

@stop