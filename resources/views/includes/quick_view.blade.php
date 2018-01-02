<ul class="nav nav-tabs">
    <li class="" data-target="#quickview-notes" data-toggle="tab">
        <a href="#">Notes</a>
    </li>
    <li data-target="#quickview-alerts" data-toggle="tab">
        <a href="#">Alerts</a>
    </li>
    <li class="active" data-target="#quickview-chat" data-toggle="tab">
        <a href="#">Chat</a>
    </li>
</ul>
<a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i
            class="pg-close"></i></a>
<!-- Tab panes -->
<div class="tab-content">
    <!-- BEGIN Notes !-->
    <div class="tab-pane no-padding" id="quickview-notes">
        <div class="view-port clearfix quickview-notes" id="note-views">
            <!-- BEGIN Note List !-->
            <div class="view list scroll-wrapper list-view-wrapper bg-white" id="quick-note-list">
                <div class="toolbar clearfix">
                    <ul class="pull-right ">
                        <li>
                            <a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
                        </li>
                        <li>
                            <a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views"
                               data-view-animation="push" id="create_notes"><i class="fa fa-plus"></i></a>
                        </li>
                    </ul>
                </div>

                <ul id="view_notes">
                    <!-- BEGIN Note Item !-->
                    <!-- END Note List !-->
                </ul>

            </div>
            <!-- END Note List !-->
            <div class="view note bg-white" id="quick-note">
                <div>
                    <ul class="toolbar">
                        <li><a href="#" class="close-note-link" id="close-note-link"><i class="pg-arrow_left"></i></a>
                        </li>
                        <li style="width: 60px">
                            <a href="#" data-action="Italic" class="fs-12 close-note-link hide" id="_save"
                               style="font-size: 15px">
                                <i class="fa fa-check"></i>
                                Save
                            </a>
                        </li>
                        <li id="button_edit" value="" style="width: 60px">
                            <a href="#" data-action="Italic" class="fs-12 close-note-link hide" id="_edit"
                               style="font-size: 15px">
                                <i class="fa fa-check"></i>
                                Save
                            </a>
                        </li>
                    </ul>
                    <div class="body">
                        <div>
                            <div class="top" id="tanggal_view">
                            </div>
                            <div class="content">
                                <div class="full-width full-height js-input quick-note-editor full-width full-height js-input editable" contenteditable id="notes">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Notes !-->
    <!-- BEGIN Alerts !-->
    <div class="tab-pane no-padding" id="quickview-alerts">
        <div class="view-port clearfix" id="alerts">
            <!-- BEGIN Alerts View !-->
            <div class="view bg-white">
                <!-- BEGIN View Header !-->
                <div class="navbar navbar-default navbar-sm">
                    <div class="navbar-inner">
                        <!-- BEGIN Header Controler !-->
                        <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view"
                           data-view-port="#chat" data-view-animation="push-parrallax">
                            <i class="pg-more"></i>
                        </a>
                        <!-- END Header Controler !-->
                        <div class="view-heading">
                            Notications
                        </div>
                        <!-- BEGIN Header Controler !-->
                        <a href="#" class="inline action p-r-10 pull-right link text-master">
                            <i class="pg-search"></i>
                        </a>
                        <!-- END Header Controler !-->
                    </div>
                </div>
                <!-- END View Header !-->
                <!-- BEGIN Alert List !-->
                <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                    <!-- BEGIN List Group !-->
                    <div class="list-view-group-container">
                        <!-- BEGIN List Group Header!-->
                        <div class="list-view-group-header text-uppercase">
                            Calendar
                        </div>
                        <!-- END List Group Header!-->
                        <ul>
                            <!-- BEGIN List Group Item!-->
                            <li class="alert-list">
                                <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                <a href="javascript:;" class="align-items-center" data-navigate="view"
                                   data-view-port="#chat" data-view-animation="push-parrallax">
                                    <p class="">
                                        <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                                    </p>
                                    <p class="p-l-10 overflow-ellipsis fs-12">
                                        <span class="text-master">David Nester Birthday</span>
                                    </p>
                                    <p class="p-r-10 ml-auto fs-12 text-right">
                                        <span class="text-warning">Today <br></span>
                                        <span class="text-master">All Day</span>
                                    </p>
                                </a>
                                <!-- END Alert Item!-->
                                <!-- BEGIN List Group Item!-->
                            </li>
                            <!-- END List Group Item!-->
                            <!-- BEGIN List Group Item!-->
                            <li class="alert-list">
                                <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                <a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat"
                                   data-view-animation="push-parrallax">
                                    <p class="">
                                        <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                                    </p>
                                    <p class="p-l-10 overflow-ellipsis fs-12">
                                        <span class="text-master">Meeting at 2:30</span>
                                    </p>
                                    <p class="p-r-10 ml-auto fs-12 text-right">
                                        <span class="text-warning">Today</span>
                                    </p>
                                </a>
                                <!-- END Alert Item!-->
                            </li>
                            <!-- END List Group Item!-->
                        </ul>
                    </div>
                    <!-- END List Group !-->
                    <div class="list-view-group-container">
                        <!-- BEGIN List Group Header!-->
                        <div class="list-view-group-header text-uppercase">
                            Social
                        </div>
                        <!-- END List Group Header!-->
                        <ul>
                            <!-- BEGIN List Group Item!-->
                            <li class="alert-list">
                                <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                <a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view"
                                   data-view-port="#chat" data-view-animation="push-parrallax">
                                    <p class="">
                                        <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                                    </p>
                                    <p class="col overflow-ellipsis fs-12 p-l-10">
                                        <span class="text-master link">Jame Smith commented on your status<br></span>
                                        <span class="text-master">“Perfection Simplified - Company Revox"</span>
                                    </p>
                                </a>
                                <!-- END Alert Item!-->
                            </li>
                            <!-- END List Group Item!-->
                            <!-- BEGIN List Group Item!-->
                            <li class="alert-list">
                                <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                <a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view"
                                   data-view-port="#chat" data-view-animation="push-parrallax">
                                    <p class="">
                                        <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                                    </p>
                                    <p class="col overflow-ellipsis fs-12 p-l-10">
                                        <span class="text-master link">Jame Smith commented on your status<br></span>
                                        <span class="text-master">“Perfection Simplified - Company Revox"</span>
                                    </p>
                                </a>
                                <!-- END Alert Item!-->
                            </li>
                            <!-- END List Group Item!-->
                        </ul>
                    </div>
                    <div class="list-view-group-container">
                        <!-- BEGIN List Group Header!-->
                        <div class="list-view-group-header text-uppercase">
                            Sever Status
                        </div>
                        <!-- END List Group Header!-->
                        <ul>
                            <!-- BEGIN List Group Item!-->
                            <li class="alert-list">
                                <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                <a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view"
                                   data-view-port="#chat" data-view-animation="push-parrallax">
                                    <p class="">
                                        <span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
                                    </p>
                                    <p class="col overflow-ellipsis fs-12 p-l-10">
                                        <span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
                                        <span class="text-master">Server Load Exceeted. Take action</span>
                                    </p>
                                </a>
                                <!-- END Alert Item!-->
                            </li>
                            <!-- END List Group Item!-->
                        </ul>
                    </div>
                </div>
                <!-- END Alert List !-->
            </div>
            <!-- EEND Alerts View !-->
        </div>
    </div>
    <!-- END Alerts !-->
    <div class="tab-pane active no-padding" id="quickview-chat">
        <div class="view-port clearfix" id="chat">
            <div class="view bg-white">
                <!-- BEGIN View Header !-->
                <div class="navbar navbar-default">
                    <div class="navbar-inner">
                        <!-- BEGIN Header Controler !-->
                        <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view"
                           data-view-port="#chat" data-view-animation="push-parrallax">
                            <i class="pg-plus"></i>
                        </a>
                        <!-- END Header Controler !-->
                        <div class="view-heading">
                            Chat List
                            <div class="fs-11">Show All</div>
                        </div>
                        <!-- BEGIN Header Controler !-->
                        <a href="#" class="inline action p-r-10 pull-right link text-master">
                            <i class="pg-more"></i>
                        </a>
                        <!-- END Header Controler !-->
                    </div>
                </div>
                <!-- END View Header !-->
                <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                    <div class="list-view-group-container">
                        <div class="list-view-group-header text-uppercase">w</div>
                        <ul>
                            <!-- BEGIN Chat User List Item  !-->
                            <li class="chat-user-list clearfix">
                                <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view"
                                   class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="img/profiles/4x.jpg"
                                 data-src="img/profiles/4.jpg" src="img/profiles/4x.jpg" class="col-top">
                        </span>
                                    <p class="p-l-10 ">
                                        <span class="text-master">wilma hicks</span>
                                        <span class="block text-master hint-text fs-12">Hello there</span>
                                    </p>
                                </a>
                            </li>
                            <!-- END Chat User List Item  !-->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- BEGIN Conversation View  !-->
            <div class="view chat-view bg-white clearfix">
                <!-- BEGIN Header  !-->
                <div class="navbar navbar-default">
                    <div class="navbar-inner">
                        <a href="javascript:;" class="link text-master inline action p-l-10 p-r-10"
                           data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                            <i class="pg-arrow_left"></i>
                        </a>
                        <div class="view-heading">
                            John Smith
                            <div class="fs-11 hint-text">Online</div>
                        </div>
                        <a href="#" class="link text-master inline action p-r-10 pull-right ">
                            <i class="pg-more"></i>
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
                            <img class="col-top" width="30" height="30" src="img/profiles/avatar_small.jpg"
                                 alt="" data-src="img/profiles/avatar_small.jpg"
                                 data-src-retina="img/profiles/avatar_small2x.jpg">
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
                            <img class="col-top" width="30" height="30" src="img/profiles/avatar_small.jpg"
                                 alt="" data-src="img/profiles/avatar_small.jpg"
                                 data-src-retina="img/profiles/avatar_small2x.jpg">
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
            <!-- END Conversation View  !-->
        </div>
    </div>
</div>