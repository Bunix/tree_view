@extends('layouts.tema_view')
@section('tema_view')
    <div class="view-port clearfix" id="chat">
        <!-- START Conversation View  !-->
        <div class="view bg-white">
            <!-- BEGIN View Header !-->
            <div class="navbar navbar-default">
                <div class="navbar-inner">
                    <!-- BEGIN Header Controler !-->
                    <a href="javascript:;" class="inline action p-l-10 link text-master">
                        <i class="pg-plus fs-12 v-align-middle"></i>
                    </a>
                    <!-- END Header Controler !-->
                    <div class="view-heading">
                        From Top
                        <div class="fs-11">Demo</div>
                    </div>
                    <!-- BEGIN Header Controler !-->
                    <a href="#" class="inline action p-r-10 pull-right link text-master">
                        <i class="pg-more fs-12 v-align-middle"></i>
                    </a>
                    <!-- END Header Controler !-->
                </div>
            </div>
            <!-- END View Header !-->
            <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <div class="list-view-group-container">
                    <div class="list-view-group-header text-uppercase">
                        Transitions
                    </div>
                    <ul>
                        <!-- BEGIN Chat User List Item  !-->
                        <li class="chat-user-list clearfix">
                            <a data-view-animation="from-top" data-view-port="#chat" data-navigate="view"
                               data-toggle-view="#chatViewTwo" class="" href="#">
                                <p class="p-l-10 col-xs-height col-middle col-xs-12 text-master">
                                    Merlin Rosselle
                                </p>
                            </a>
                        </li>
                        <!-- END Chat User List Item  !-->
                        <!-- BEGIN Chat User List Item  !-->
                        <li class="chat-user-list clearfix">
                            <a data-view-animation="from-top" data-view-port="#chat" data-navigate="view"
                               data-toggle-view="#chatViewTwo" class="" href="#">
                                <p class="p-l-10 col-xs-height col-middle col-xs-12 text-master">
                                    Delorse Pacol
                                </p>
                            </a>
                        </li>
                        <!-- END Chat User List Item  !-->
                        <!-- BEGIN Chat User List Item  !-->
                        <li class="chat-user-list clearfix">
                            <a data-view-animation="from-top" data-view-port="#chat" data-navigate="view"
                               data-toggle-view="#chatViewTwo" class="" href="#">
                                <p class="p-l-10 col-xs-height col-middle col-xs-12 text-master">
                                    Oswaldo Graffney
                                </p>
                            </a>
                        </li>
                        <!-- END Chat User List Item  !-->
                    </ul>
                </div>
            </div>
        </div>
        <!-- BEGIN Conversation View  !-->
        <div class="view chat-view bg-white clearfix" id="chatViewTwo">
            <!-- BEGIN Header  !-->
            <div class="navbar navbar-default">
                <div class="navbar-inner">
                    <a href="javascript:;" class="link text-master inline action p-l-10" data-navigate="view"
                       data-view-port="#chat" data-view-animation="from-top">
                        <i class="pg-arrow_left fs-12 v-align-middle"></i>
                    </a>
                    <div class="view-heading">
                        John Smith
                        <div class="fs-11 hint-text">Online</div>
                    </div>
                    <a href="#" class="link text-master inline action p-r-10 pull-right ">
                        <i class="pg-more fs-12 v-align-middle"></i>
                    </a>
                </div>
            </div>
            <!-- END Header  !-->
            <!-- BEGIN Conversation  !-->
            <div class="chat-inner" id="my-conversation">
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                    <div class="chat-bubble from-me">
                        Hello there
                    </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                    <div class="profile-img-wrapper m-t-5 inline">
                        <img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt=""
                             data-src="assets/img/profiles/avatar_small.jpg"
                             data-src-retina="assets/img/profiles/avatar_small2x.jpg">
                    </div>
                    <div class="chat-bubble from-them">
                        Hey
                    </div>
                </div>
                <!-- END From Them Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                    <div class="chat-bubble from-me">
                        Did you check out Pages framework ?
                    </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                    <div class="chat-bubble from-me">
                        Its an awesome chat
                    </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                    <div class="profile-img-wrapper m-t-5 inline">
                        <img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt=""
                             data-src="assets/img/profiles/avatar_small.jpg"
                             data-src-retina="assets/img/profiles/avatar_small2x.jpg">
                    </div>
                    <div class="chat-bubble from-them">
                        Yea
                    </div>
                </div>
                <!-- END From Them Message  !-->
            </div>
            <!-- BEGIN Conversation  !-->
            <!-- BEGIN Chat Input  !-->
            <div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
                <div class="row">
                    <div class="col-1 p-t-15">
                        <a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
                    </div>
                    <div class="col-8 no-padding">
                        <input type="text" class="form-control chat-input" data-chat-input=""
                               data-chat-conversation="#my-conversation" placeholder="Say something">
                    </div>
                    <div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
                        <a href="#" class="link text-master"><i class="pg-camera"></i></a>
                    </div>
                </div>
            </div>
            <!-- END Chat Input  !-->
        </div>
    </div>
@stop

@section('script_view')
    <script>
        $(document).ready(function () {
            $('.fixed-header').addClass('down-scroll');
        });
    </script>
@stop