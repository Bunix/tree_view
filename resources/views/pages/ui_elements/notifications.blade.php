@extends('layouts.tema')
@section('content')
    <div class="content ">
        <div class="bg-white">
            <div class="container">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                    <li class="breadcrumb-item active">Notifications</li>
                </ol>
            </div>
        </div>
        <!-- START JUMBOTRON -->
        <div class="jumbotron">
            <div class=" container p-l-0 p-r-0   container-fixed-lg">
                <div class="inner">
                    <div class="container-md-height m-b-20">
                        <div class="row m-md-0">
                            <div class="col-xl-7 col-lg-6 bg-white">
                                <!-- START card -->
                                <div class="full-height">
                                    <div class="card-block text-center">
                                        <img class="image-responsive-height demo-mw-500"
                                             src="img/demo/notifications_hero.gif" alt="">
                                    </div>
                                </div>
                                <!-- END card -->
                            </div>
                            <div class="col-xl-5 col-lg-6 col-top">
                                <!-- START card -->
                                <div class="card card-transparent">
                                    <div class="card-header ">
                                        <div class="card-title">Getting started
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <h3>For Your Information - FYI</h3>
                                        <p>Breaking convention again, we have inctroduced a notification system which
                                            variates based on the type and level of importance of the message. Thanks to
                                            this, an alert by the side of your screen would easily catch your
                                            attention.</p>
                                        <br>
                                        <div>
                                            <div class="profile-img-wrapper m-t-5 inline">
                                                <img width="35" height="35"
                                                     src="img/profiles/avatar_small.jpg" alt=""
                                                     data-src="img/profiles/avatar_small.jpg"
                                                     data-src-retina="img/profiles/avatar_small2x.jpg">
                                                <div class="chat-status available">
                                                </div>
                                            </div>
                                            <div class="inline m-l-10">
                                                <p class="small hint-text m-t-5">VIA senior product manage
                                                    <br> for UI/UX at REVOX</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END card -->
                            </div>
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
                            <div class="card-title">Pages notification
                            </div>
                        </div>
                        <div class="card-block">
                            <p>Notifications provide alerts and related information for pages Framework.As an important
                                part of pages user interface, we made a tool for much easier visualizations</p>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
                <div class="col-md-3">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title">Alert
                            </div>
                        </div>
                        <div class="card-block">
                            <p>Individual alerts will be visible and depending on the level of its importance, will have
                                dedicated colours and sized indicating specified scenarios. </p>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
                <div class="col-md-3">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title">Robust and lightweight
                            </div>
                        </div>
                        <div class="card-block">
                            <p>CSS3 powered transitions and animations for greater user experience.</p>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
            </div>
        </div>
        <!-- END CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" no-padding   container-fixed-lg bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- START card -->
                        <div class="card card-transparent">
                            <div class="card-header ">
                                <div class="card-title">Select a notification style
                                </div>
                            </div>
                            <div class="card-block">
                                <ul class="nav nav-tabs no-border notification-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="btn btn-default btn-cons btn-rounded btn-notification-style active m-b-10"
                                           href="#loadingBar" role="tab" data-toggle="tab"
                                           data-type="position-bar">Bar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-default btn-cons btn-rounded btn-notification-style m-b-10"
                                           href="#bouncyFlip" role="tab" data-toggle="tab" data-type="position-flip">Flip
                                            Bar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-default btn-cons btn-rounded btn-notification-style m-b-10"
                                           href="#circleNotification" role="tab" data-toggle="tab"
                                           data-type="position-circle">Circle</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-default btn-cons btn-rounded btn-notification-style m-b-10"
                                           href="#simpleAlert" role="tab" data-toggle="tab" data-type="position-simple">Simple
                                            Alert</a>
                                    </li>
                                </ul>
                                <div class="config-notification">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="loadingBar">
                                            <h4 class="semi-bold">Notification Bar</h4>
                                            <h5 class="">Awesome Loading Circle Animation</h5>
                                            <p class="small hint-text">Highly Customizable, Change radius, Add Content
                                                Change X , Y Axis, Change svg animation</p>
                                        </div>
                                        <div class="tab-pane" id="bouncyFlip">
                                            <h4 class="semi-bold">Flip Bar</h4>
                                            <h5 class="">Awesome Loading Circle Animation</h5>
                                            <p class="small hint-text">Highly Customizable, Change radius, Add Content
                                                Change X , Y Axis, Change svg animation</p>
                                        </div>
                                        <div class="tab-pane" id="circleNotification">
                                            <h4 class="semi-bold">Circle Notification</h4>
                                            <h5 class="">Awesome Loading Circle Animation</h5>
                                            <p class="small hint-text">Highly Customizable, Change radius, Add Content
                                                Change X , Y Axis, Change svg animation</p>
                                        </div>
                                        <div class="tab-pane" id="simpleAlert">
                                            <h4 class="semi-bold">Simple Alert</h4>
                                            <h5 class="">Simple alert</h5>
                                            <p class="small hint-text">Highly Customizable, Change radius, Add Content
                                                Change X , Y Axis, Change svg animation</p>
                                        </div>
                                    </div>
                                    <form role="form">
                                        <div class="form-group form-group-default required">
                                            <label class="highlight">Message</label>
                                            <input type="text" class="form-control notification-message"
                                                   placeholder="Type your message here"
                                                   value="This notification looks so perfect!" required>
                                        </div>
                                        <select class="cs-select cs-skin-slide notification-type"
                                                data-init-plugin="cs-select">
                                            <option value="info">Info</option>
                                            <option value="warning">Warning</option>
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="default">Default</option>
                                        </select>
                                        <button class="btn btn-success show-notification">Show</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END card -->
                    </div>
                    <div class="col-md-6">
                        <!-- START card -->
                        <div class="card card-transparent">
                            <div class="card-header ">
                                <div class="card-title">Select Position
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="hidden">
                                    <ul class="nav nav-tabs no-border position-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a href="#position-bar" role="tab" data-toggle="tab">Bar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#position-flip" role="tab" data-toggle="tab">Flip</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#position-circle" role="tab" data-toggle="tab">Circle</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#position-simple" role="tab" data-toggle="tab">Simple</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content position-tabs">
                                    <div class="tab-pane fade show active" id="position-bar">
                                        <div class="notification-positions">
                                            <div class="position pull-top active" data-placement="top">
                                                <img alt="Loading bar" src="img/notifications/loading_bar.svg"
                                                     class="">
                                            </div>
                                            <div class="position pull-bottom" data-placement="bottom">
                                                <img alt="Loading bar" src="img/notifications/loading_bar.svg"
                                                     class="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="position-flip">
                                        <div class="notification-positions">
                                            <div class="pull-top full-width">
                                                <div class="position pull-left" data-placement="top-left">
                                                    <img alt="Bounce progress"
                                                         src="img/notifications/bounce_progress.svg" class="">
                                                </div>
                                                <div class="position pull-right active" data-placement="top-right">
                                                    <img alt="Bounce progress"
                                                         src="img/notifications/bounce_progress.svg" class="">
                                                </div>
                                            </div>
                                            <div class="pull-bottom full-width">
                                                <div class="position pull-left" data-placement="bottom-left">
                                                    <img alt="Bounce progress"
                                                         src="img/notifications/bounce_progress.svg" class="">
                                                </div>
                                                <div class="position pull-right" data-placement="bottom-right">
                                                    <img alt="Bounce progress"
                                                         src="img/notifications/bounce_progress.svg" class="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="position-circle">
                                        <div class="notification-positions">
                                            <div class="pull-top full-width">
                                                <div class="position pull-left" data-placement="top-left">
                                                    <img alt="Circle progress"
                                                         src="img/notifications/circle_progress.svg" class="">
                                                </div>
                                                <div class="position pull-right active" data-placement="top-right">
                                                    <img alt="Circle progress"
                                                         src="img/notifications/circle_progress.svg" class="">
                                                </div>
                                            </div>
                                            <div class="pull-bottom full-width">
                                                <div class="position pull-left" data-placement="bottom-left">
                                                    <img alt="Circle progress"
                                                         src="img/notifications/circle_progress.svg" class="">
                                                </div>
                                                <div class="position pull-right" data-placement="bottom-right">
                                                    <img alt="Circle progress"
                                                         src="img/notifications/circle_progress.svg" class="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="position-simple">
                                        <div class="notification-positions">
                                            <div class="pull-top full-width">
                                                <div class="position pull-left" data-placement="top-left">
                                                    <img alt="Simple alert"
                                                         src="img/notifications/simple_alert.svg" class="">
                                                </div>
                                                <div class="position pull-right active" data-placement="top-right">
                                                    <img alt="Simple alert"
                                                         src="img/notifications/simple_alert.svg" class="">
                                                </div>
                                            </div>
                                            <div class="pull-bottom full-width">
                                                <div class="position pull-left" data-placement="bottom-left">
                                                    <img alt="Simple alert"
                                                         src="img/notifications/simple_alert.svg" class="">
                                                </div>
                                                <div class="position pull-right" data-placement="bottom-right">
                                                    <img alt="Simple alert"
                                                         src="img/notifications/simple_alert.svg" class="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END card -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container    container-fixed-lg">
            <!-- START card -->
            <div class="card card-transparent">
                <div class="card-header ">
                    <div class="card-title">Simple alerts
                    </div>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Where ever you are we’ll keep you notified and up to date!</h3>
                            <p>Alerts help to gain user attention and give feedback for proccessed task. These alerts
                                are built with different background and borders to show.</p>
                            <br>
                            <div>
                                <div class="profile-img-wrapper m-t-5 inline">
                                    <img alt="Avatar" width="35" height="35"
                                         src="img/profiles/avatar_small.jpg"
                                         data-src="img/profiles/avatar_small.jpg"
                                         data-src-retina="img/profiles/avatar_small2x.jpg">
                                    <div class="chat-status available">
                                    </div>
                                </div>
                                <div class="inline m-l-10">
                                    <p class="small hint-text m-t-5">VIA senior product manage
                                        <br> for UI/UX at REVOX</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 sm-p-t-15">
                            <div class="alert alert-danger" role="alert">
                                <button class="close" data-dismiss="alert"></button>
                                <strong>Danger: </strong>The daily report has failed
                            </div>
                            <div class="alert alert-warning" role="alert">
                                <button class="close" data-dismiss="alert"></button>
                                <strong>Warning: </strong>Bandwidth limit exceeded
                            </div>
                            <div class="alert alert-success" role="alert">
                                <button class="close" data-dismiss="alert"></button>
                                <strong>Success: </strong>The page has been added.
                            </div>
                            <div class="alert alert-info" role="alert">
                                <button class="close" data-dismiss="alert"></button>
                                <strong>Info: </strong>You have 198 messages
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END card -->
        </div>
        <!-- END CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container    container-fixed-lg">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title">Descriptive alerts
                            </div>
                        </div>
                        <div class="card-block">
                            <p>Alerts can be multilined. Feel free to include any HTML inside your alerts</p>
                            <br>
                            <div class="alert alert-info" role="alert">
                                <p class="pull-left">Meeting rescheduled</p>
                                <button class="close" data-dismiss="alert"></button>
                                <div class="clearfix"></div>
                                <br>
                                <p>The STG Meeting has been resheduled to the following date : 2014-12-17</p>
                                <br>
                                <p>Please complete the attendance form to confirm your attendance</p>
                            </div>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title">Alert with link
                            </div>
                        </div>
                        <div class="card-block">
                            <p>You can also use a link to show more information about the notification. Use the
                                .alert-link utility class to quickly provide matching colored links within any
                                alert.</p>
                            <br>
                            <div class="alert alert-info d-flex" role="alert">
                                <p class="mr-auto overflow-ellipsis col-6 no-padding">Your data limit has exceeded</p>
                                <p class="bold no-margin"><a href="#" class="text-complete">See all now</a>
                                </p>
                                <button class="close" data-dismiss="alert"></button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title">Bordered alerts
                            </div>
                        </div>
                        <div class="card-block">
                            <p>By default all Pages alerts are borderless. To add a border, simply append the class
                                .bordered</p>
                            <br>
                            <div class="alert alert-info bordered" role="alert">
                                <p class="pull-left"><strong>Info:</strong> You have 198 messages</p>
                                <button class="close" data-dismiss="alert"></button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
            </div>
        </div>
        <!-- END CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container    container-fixed-lg">
            <div class="row">
                <div class="col-md-6">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title">Simple labels
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row-fluid">
                                <p>A label, with optional background colors. Use the
                                    <code>label</code>class to create a label</p>
                                <br>
                                <span class="label">DEFAULT</span>
                                <span class="label label-success">VIEW</span>
                                <span class="label label-warning">HOLD</span>
                                <span class="label label-important">ALERT</span>
                                <span class="label label-info">SUCCESS</span>
                                <span class="label label-inverse">SOLD</span>
                                <br>
                                <br>
                                <h4>Badge
                                    <span class="semi-bold">Variations</span>
                                </h4>
                                <p>A Badge, with optional background colors. Use the
                                    <code>badge</code>class to create a Badge</p>
                                <span class="badge">2</span>&nbsp;&nbsp;
                                <span class="badge badge-success">8</span>&nbsp;&nbsp;
                                <span class="badge badge-warning">12</span>&nbsp;&nbsp;
                                <span class="badge badge-important">300</span>&nbsp;&nbsp;
                                <span class="badge badge-info">25</span>&nbsp;&nbsp;
                                <span class="badge badge-inverse">5</span>&nbsp;&nbsp;</div>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
                <div class="col-md-6">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title">Tooltips
                            </div>
                        </div>
                        <div class="card-block">
                            <p>Tooltips can be a helpful way to provide information to visitors without creating clutter
                                in a design. Tooltip plugin let’s you transform native tooltip’s into customizable
                                overlays. You can adjust their content, position and appearance.</p>
                            <br>
                            <button title="" data-toggle="tooltip" class="btn btn-default tip m-b-5 m-r-5" type="button"
                                    data-original-title="Up here!">Top
                            </button>
                            <button data-placement="right" title="" data-toggle="tooltip"
                                    class="btn btn-default tip m-b-5 m-r-5" type="button"
                                    data-original-title="Hello there!">Right
                            </button>
                            <button data-placement="bottom" title="" data-toggle="tooltip"
                                    class="btn btn-default tip m-b-5 m-r-5" type="button"
                                    data-original-title="Look down!">Down
                            </button>
                            <button data-placement="left" title="" data-toggle="tooltip"
                                    class="btn btn-default tip m-b-5 m-r-5" type="button"
                                    data-original-title="Over here!">Left
                            </button>
                            <br>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
            </div>
        </div>
        <!-- END CONTAINER FLUID -->
    </div>
@stop

@section('script')

    <script src="{{ url('script/notifications/notifications.js') }}" type="text/javascript"></script>

    <script src="{{ url('script/elements/barActive.js') }}"></script>

@stop