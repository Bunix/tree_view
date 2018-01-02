@extends('layouts.tema_view')
@section('content_view')
    <div class="register-container full-height sm-p-t-30">
        <div class="d-flex justify-content-center flex-column full-height ">
            <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png"
                 data-src-retina="assets/img/logo_2x.png" width="78" height="22">
            <h3>Pages makes it easy to enjoy what matters the most in your life</h3>
            <p>
                Create a pages account. If you have a facebook account, log into it for this process. Sign in with <a
                        href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a>
            </p>
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-default">
                            <label>Username</label>
                            <input type="text" name="name" id="personName" placeholder="username" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-default">
                            <label>E-mail</label>
                            <input type="email" name="email" id="personEmail" placeholder="email" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-default">
                            <label>PersonId</label>
                            <input type="text" name="password" id="person_id" placeholder="personId" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-default">
                            <label>select Group</label>
                            <select id="select_group" class="form-control">
                                <option value="">- Select One -</option>
                                <option value="Test_login">Test_login</option>
                                <option value="test_login1">test_login1</option>
                                <option value="test_login2">test_login2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="height: 50px">
                        <button onclick="create_user()" class="btn btn-xs btn-success btn-cons m-t-10" type="button">New Person</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-group-default">
                            <label>Image Url</label>
                            <input type="text" name="image_url" id="image_url" placeholder="Url image" class="form-control"
                                   required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 text-left">
                        <img src="" id="returnImage" style="width: auto; height: auto;"/>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button onclick="view_image()" class="btn btn-xs btn-default btn-cons m-t-10" type="button">View Image</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 no-padding sm-p-l-10">
                        <button onclick="sendPersonFace()" class="btn btn-xs btn-complete btn-cons m-t-10" type="button">Add Person</button>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-end">
                        <a href="login" class="text-info small">Have? go to Login</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center justify-content-end">
                        <button id="create_person" onclick="trainPerson()" class="btn btn-sm btn-primary btn-cons m-t-10" type="submit" disabled>Create a new user</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class=" full-width">
        <div class="register-container m-b-10 clearfix">
            <div class="m-b-30 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix d-flex-md-up">
                <div class="col-md-2 no-padding d-flex align-items-center">
                    <img src="img/demo/pages_icon.png" alt="" class="" data-src="img/demo/pages_icon.png"
                         data-src-retina="img/demo/pages_icon_2x.png" width="60" height="60">
                </div>
                <div class="col-md-9 no-padding d-flex align-items-center">
                    <p class="hinted-text small inline sm-p-t-10">No part of this website or any of its contents may be
                        reproduced, copied, modified or adapted, without the prior written consent of the author, unless
                        otherwise indicated for stand-alone materials.</p>
                </div>
            </div>
        </div>
    </div>
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