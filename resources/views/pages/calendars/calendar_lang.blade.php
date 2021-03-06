@extends('layouts.tema')
@section('content')
    <div class="content full-height">
        <div class="container">
            <div class="full-height" id="calendar_lang"></div>
            <!-- END CALENDAR -->
            <!-- START EVENT MANAGER -->
            <!-- START Calendar Events Form -->
            <div class="quickview-wrapper calendar-event" id="calendar-event">
                <div class="view-port clearfix" id="eventFormController">
                    <div class="view bg-white">
                        <div class="scrollable">
                            <div class="p-l-30 p-r-30 p-t-20">
                                <a class="pg-close text-master link pull-right" data-toggle="quickview"
                                   data-toggle-element="#calendar-event" href="#"></a>
                                <h4 id="event-date">&amp;</h4>
                                <div class="m-b-20">
                                    <i class="fa fa-clock-o"></i>
                                    <span id="lblfromTime"></span> to
                                    <span id="lbltoTime"></span>
                                </div>
                            </div>
                            <div class="p-t-15">
                                <input id="eventIndex" name="eventIndex" type="hidden">
                                <div class="form-group-attached">
                                    <div class="form-group form-group-default ">
                                        <label>Title</label>
                                        <input type="text" class="form-control" id="txtEventName" name=""
                                               placeholder="event name">
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-9">
                                            <div class="form-group form-group-default">
                                                <label>Location</label>
                                                <input type="text" class="form-control" id="txtEventLocation"
                                                       placeholder="name of place" name="">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group form-group-default">
                                                <label>Code</label>
                                                <input type="text" class="form-control" id="txtEventCode"
                                                       name="lastName">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="form-group form-group-default">
                                            <label>Note</label>
                                            <textarea class="form-control" placeholder="description"
                                                      id="txtEventDesc"></textarea>
                                        </div>
                                    </div>
                                    <div class="row clearfix cursor">
                                        <div class="form-group form-group-default" data-navigate="view"
                                             data-view-port="#eventFormController" data-view-animation="push-parrallax">
                                            <label>Alerts</label>
                                            <div class="p-t-10">
                                                <span class="pull-right p-r-10 p-b-5"><i
                                                            class="pg-arrow_right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-l-30 p-r-30 p-t-30">
                                <button id="eventSave" class="btn btn-warning btn-cons">Save Event</button>
                                <button id="eventDelete" class="btn btn-white"><i class="fa fa-trash-o"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="view bg-white">
                        <div class="navbar navbar-default navbar-sm">
                            <div class="navbar-inner">
                                <a href="javascript:;" class="inline action p-l-10 link text-master"
                                   data-navigate="view" data-view-port="#eventFormController"
                                   data-view-animation="push-parrallax">
                                    <i class="pg-arrow_left"></i>
                                </a>
                                <div class="view-heading">
                                    <span class="font-montserrat text-uppercase fs-13">Alerts</span>
                                </div>
                                <a href="#" class="inline action p-r-10 pull-right link text-master">
                                    <i class="pg-search"></i>
                                </a>
                            </div>
                        </div>
                        <p class="p-l-30 p-r-30 p-t-30"> This is a Demo</p>
                    </div>
                </div>
            </div>
            <!-- END Calendar Events Form -->
            <!-- START EVENT MANAGER -->
            <div class="quickview-wrapper open hidden-sm hidden-xs" id="calendarLang">
                <div class="view-port clearfix" id="langView">
                    <div class="view bg-white">
                        <div class="navbar navbar-default">
                            <div class="navbar-inner">
                                <!-- BEGIN Header Controler !-->
                                <a class="inline action p-l-10 link text-master" data-toggle="quickview"
                                   data-toggle-element="#calendarLang"><i class="pg-close"></i></a>
                                <!-- END Header Controler !-->
                                <div class="view-heading">
                                    Languages
                                    <div class="fs-11">
                                        Supports 70
                                    </div>
                                </div>
                                <!-- BEGIN Header Controler !-->
                                <a class="inline action p-r-10 pull-right link text-master" href="#"><i
                                            class="pg-search"></i></a>
                                <!-- END Header Controler !-->
                            </div>
                        </div>
                        <div class="list-view boreded no-top-border" data-init-list-view="ioslist">
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">
                                    Select A Language
                                </div>
                                <ul>
                                    <li class="alert-list" data-locale="af">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Afrikaans</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="sq">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Albanian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="hy-am">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Armenian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="az">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Azerbaijani</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="id">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Bahasa Indonesia</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="ms-my">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Bahasa Melayu (Malaysia)</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="eu">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Basque</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="be">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Belarusian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="bs">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Bosnian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="br">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Breton</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="bg">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Bulgarian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="ca">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Catalan</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="zh-cn">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Chinese (Simplified)</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="zh-tw">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Chinese (Traditional)</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="cv">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Chuvash</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="hr">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Croatian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="cs">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Czech</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="da">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Danish</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="nl">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Dutch</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="en-au">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                English (Australia)</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="en-ca">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                English (Canada)</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="en-gb">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                English (United Kingdom)</p>
                                        </a>
                                    </li>
                                    <li class="alert-list active" data-locale="en">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                English (United States)</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="eo">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Esperanto</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="et">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Estonian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="fo">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Farose</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="fi">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Finnish</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="fr">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                French</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="fr-ca">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                French (Canada)</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="fy">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Frisian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="gl">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Galician</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="ka">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Georgian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="de">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                German</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="de-at">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                German (Austria)</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="el">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Greek</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="he">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Hebrew</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="hu">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Hungarian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="is">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Icelandic</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="it">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Italian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="ja">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Japanese</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="km">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Khmer (Cambodia)</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="ko">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Korean</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="lv">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Latvian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="lt">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Lithuanian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="lb">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Luxembourgish</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="mk">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Macedonian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="ml">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Malayalam</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="nb">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Norwegian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="nn">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Norwegian Nynorsk</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="pl">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Polish</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="pt">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Portuguese</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="pt-br">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Portuguese (Brazil)</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="ro">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Romanian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="ru">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Russian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="sr">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Serbian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="sr-cyrl">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Serbian Cyrillic</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="sk">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Slovak</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="sl">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Slovenian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="es">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Spanish</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="sv">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Swedish</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="tl-ph">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Tagalog (Filipino)</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="tzm">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Tamaziɣt</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="tzm-latn">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Tamaziɣt Latin</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="ta">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Tamil</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="th">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Thai</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="tr">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Turkish</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="uk">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Ukrainian</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="uz">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Uzbek</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="vi">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Vietnamese</p>
                                        </a>
                                    </li>
                                    <li class="alert-list" data-locale="cy">
                                        <a href="#">
                                            <p class="col-xs-height col-middle invisible"><span
                                                        class="text-warning fs-10"><i class=
                                                                                      "fa fa-circle"></i></span></p>
                                            <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12 text-master">
                                                Welsh</p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')

    <script src="{{ url('script/calendar/barActive.js') }}"></script>

    <script src="{{ url('script/calendar/pages.calendar.js') }}" type="text/javascript"></script>

    <script src="{{ url('script/calendar/calendar_lang.js') }}" type="text/javascript"></script>

@stop