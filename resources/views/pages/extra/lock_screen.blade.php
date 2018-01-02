@extends('layouts.tema_view')
@section('content_view')
    <div class="lock-container full-height">
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="full-height sm-p-t-50 align-items-center d-md-flex">
            <div class="row full-width">
                <div class="col-md-6">
                    <!-- START Lock Screen User Info -->
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="">
                            <div class="thumbnail-wrapper circular d48 m-r-10 ">
                                <img width="43" height="43" data-src-retina="img/profiles/avatar_small2x.jpg"
                                     data-src="img/profiles/avatar.jpg" alt=""
                                     src="img/profiles/avatar_small2x.jpg">
                            </div>
                        </div>
                        <div class="">
                            <h5 class="logged hint-text no-margin">
                                Logged in as
                            </h5>
                            <h2 class="name no-margin">David Nester</h2>
                        </div>
                    </div>
                    <!-- END Lock Screen User Info -->
                </div>
                <div class="col-md-6">
                    <!-- START Lock Screen Form -->
                    <form id="form-lock" role="form" action="index.html">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- START Form Control -->
                                <div class="form-group form-group-default sm-m-t-30">
                                    <label>Credentials</label>
                                    <div class="controls">
                                        <input type="text" name="password" placeholder="Password to unlock"
                                               class="form-control" required>
                                    </div>
                                </div>
                                <!-- END Form Control -->
                            </div>
                        </div>
                        <!-- START Lock Screen Notification Icons-->
                        <div class="row">
                            <div class="col-md-12 sm-p-l-25">
                                <a href="#" class="inline text-black fs-14 hint-text"><i class="pg-mail"></i> <span
                                            class="hint-text">12</span></a>
                                <a href="#" class="inline text-black  fs-14 hint-text m-l-30"><i class="pg-comment"></i>
                                    <span class="hint-text">4</span></a>
                            </div>
                        </div>
                        <!-- END Lock Screen Notification Icons-->
                    </form>
                    <!-- END Lock Screen Form -->
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE-CONTAINER -->
    <!-- START Lock Screen Footer Content-->
    <div class="pull-bottom full-width">
        <div class="lock-container m-b-10 clearfix row">
            <div class="inline col-lg-2">
                <img src="img/demo/pages_icon.png" alt="" class="m-t-5 "
                     data-src="img/demo/pages_icon.png" data-src-retina="img/demo/pages_icon_2x.png"
                     width="60" height="60">
            </div>
            <div class="col-lg-10 m-t-15">
                <p class="hinted-text small inline ">No part of this website or any of its contents may be reproduced,
                    copied, modified or adapted, without the prior written consent of the author, unless otherwise
                    indicated for stand-alone materials.</p>
            </div>
        </div>
    </div>
    <!-- END Lock Screen Footer Content-->
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
        <!-- BEGIN Overlay Content !-->
        <div class="overlay-content has-results m-t-20">
            <!-- BEGIN Overlay Header !-->
            <div class="container-fluid">
                <!-- BEGIN Overlay Logo !-->
                <img class="overlay-brand" src="img/logo.png" alt="logo" data-src="img/logo.png"
                     data-src-retina="img/logo_2x.png" width="78" height="22">
                <!-- END Overlay Logo !-->
                <!-- BEGIN Overlay Close !-->
                <a href="#" class="close-icon-light overlay-close text-black fs-16">
                    <i class="pg-close"></i>
                </a>
                <!-- END Overlay Close !-->
            </div>
            <!-- END Overlay Header !-->
            <div class="container-fluid">
                <!-- BEGIN Overlay Controls !-->
                <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..."
                       autocomplete="off" spellcheck="false">
                <br>
                <div class="inline-block">
                    <div class="checkbox right">
                        <input id="checkboxn" type="checkbox" value="1" checked="checked">
                        <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
                    </div>
                </div>
                <div class="inline-block m-l-10">
                    <p class="fs-13">Press enter to search</p>
                </div>
                <!-- END Overlay Controls !-->
            </div>
            <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
            <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
                <span id="overlay-suggestions"></span>
                <br>
                <div class="search-results m-t-40">
                    <p class="bold">Pages Search Results</p>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- BEGIN Search Result Item !-->
                            <div class="">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                    <div>
                                        <img width="50" height="50" src="img/profiles/avatar.jpg"
                                             data-src="img/profiles/avatar.jpg"
                                             data-src-retina="img/profiles/avatar2x.jpg" alt="">
                                    </div>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10 inline p-t-5">
                                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                                    <p class="hint-text">via john smith</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                            <!-- BEGIN Search Result Item !-->
                            <div class="">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                    <div>T</div>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10 inline p-t-5">
                                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related
                                        topics</h5>
                                    <p class="hint-text">via pages</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                            <!-- BEGIN Search Result Item !-->
                            <div class="">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                    <div><i class="fa fa-headphones large-text "></i>
                                    </div>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10 inline p-t-5">
                                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                                    <p class="hint-text">via pagesmix</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                        </div>
                        <div class="col-md-6">
                            <!-- BEGIN Search Result Item !-->
                            <div class="">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                                    <div><i class="fa fa-facebook large-text "></i>
                                    </div>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10 inline p-t-5">
                                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook
                                    </h5>
                                    <p class="hint-text">via facebook</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                            <!-- BEGIN Search Result Item !-->
                            <div class="">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                                    <div><i class="fa fa-twitter large-text "></i>
                                    </div>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10 inline p-t-5">
                                    <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span>
                                    </h5>
                                    <p class="hint-text">via twitter</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                            <!-- BEGIN Search Result Item !-->
                            <div class="">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                                    <div><i class="fa fa-google-plus large-text "></i>
                                    </div>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10 inline p-t-5">
                                    <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span>
                                    </h5>
                                    <p class="hint-text">via google plus</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Overlay Search Results !-->
        </div>
        <!-- END Overlay Content !-->
    </div>
@stop