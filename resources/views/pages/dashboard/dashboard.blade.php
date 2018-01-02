@extends('layouts.tema')
@section('content')
    <div class="content sm-gutter">
        <!-- START BREADCRUMBS -->
        <div class="bg-white">
            <div class="container">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- END BREADCRUMBS -->
        <!-- START CONTAINER FLUID -->
        <div class="container sm-padding-10 p-t-20 p-l-0 p-r-0">
            <!-- START ROW -->
            <div class="row">
                <div class="col-lg-3 col-sm-6 d-flex flex-column">
                    <!-- START WIDGET widget_map_sales-->
                    <!-- START ITEM -->
                    <div class="card social-card share  full-width m-b-10 no-border" data-social="item">
                        <div class="card-header ">
                            <h5 class="text-complete pull-left fs-12">News <i
                                        class="fa fa-circle text-complete fs-11"></i></h5>
                            <div class="pull-right small hint-text">
                                5,345 <i class="fa fa-comment-o"></i>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="card-description">
                            <h3>Ebola outbreak: Clinical drug trials to start next month as death toll mounts</h3>
                        </div>
                        <div class="card-footer clearfix">
                            <div class="pull-left">via <span class="text-complete">CNN</span>
                            </div>
                            <div class="pull-right hint-text">
                                Apr 23
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- END WIDGET -->
                    <!-- START WIDGET widget_weekly_sales_card-->
                    <div class="card no-border widget-loader-bar m-b-10">
                        <div class="container-xs-height full-height">
                            <div class="row-xs-height">
                                <div class="col-xs-height col-top">
                                    <div class="card-header  top-left top-right">
                                        <div class="card-title">
                            <span class="font-montserrat fs-11 all-caps">Weekly Sales <i
                                        class="fa fa-chevron-right"></i>
				                        </span>
                                        </div>
                                        <div class="card-controls">
                                            <ul>
                                                <li><a href="#" class="portlet-refresh text-black"
                                                       data-toggle="refresh"><i
                                                                class="portlet-icon portlet-icon-refresh"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-xs-height">
                                <div class="col-xs-height col-top">
                                    <div class="p-l-20 p-t-50 p-b-40 p-r-20">
                                        <h3 class="no-margin p-b-5">$24,000</h3>
                                        <span class="small hint-text pull-left">71% of total goal</span>
                                        <span class="pull-right small text-primary">$23,000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row-xs-height">
                                <div class="col-xs-height col-bottom">
                                    <div class="progress progress-small m-b-0">
                                        <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                        <div class="progress-bar progress-bar-primary" style="width:71%"></div>
                                        <!-- END BOOTSTRAP PROGRESS -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                    <!-- START WIDGET widget_weekly_sales_card-->
                    <div class="card no-border widget-loader-bar m-b-10">
                        <div class="container-xs-height full-height">
                            <div class="row-xs-height">
                                <div class="col-xs-height col-top">
                                    <div class="card-header  top-left top-right">
                                        <div class="card-title">
                            <span class="font-montserrat fs-11 all-caps">Page Visits <i class="fa fa-chevron-right"></i>
				                        </span>
                                        </div>
                                        <div class="card-controls">
                                            <ul>
                                                <li><a href="#" class="portlet-refresh text-black"
                                                       data-toggle="refresh"><i
                                                                class="portlet-icon portlet-icon-refresh"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-xs-height">
                                <div class="col-xs-height col-top">
                                    <div class="p-l-20 p-t-50 p-b-40 p-r-20">
                                        <h3 class="no-margin p-b-5">423</h3>
                                        <span class="small hint-text pull-left">22% higher</span>
                                        <span class="pull-right small text-danger">$23,000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row-xs-height">
                                <div class="col-xs-height col-bottom">
                                    <div class="progress progress-small m-b-0">
                                        <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                        <div class="progress-bar progress-bar-danger" style="width:15%"></div>
                                        <!-- END BOOTSTRAP PROGRESS -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </div>
                <div class="col-lg-3 col-sm-6 d-flex flex-column">
                    <!-- START ITEM -->
                    <div class="card social-card share  full-width m-b-10 no-border" data-social="item">
                        <div class="card-header clearfix">
                            <h5 class="text-success pull-left fs-12">Stock Market <i
                                        class="fa fa-circle text-success fs-11"></i></h5>
                            <div class="pull-right small hint-text">
                                5,345 <i class="fa fa-comment-o"></i>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="card-description">
                            <h5 class='hint-text no-margin'>Apple Inc.</h5>
                            <h5 class="small hint-text no-margin">NASDAQ: AAPL - Nov 13 8:37 AM ET</h5>
                            <h3 class="m-b-0">111.25 <span class="text-success"><i
                                            class="fa fa-sort-up small text-success"></i> 0.15</span>
                            </h3>
                        </div>
                        <div class="card-footer clearfix">
                            <div class="pull-left">by <span class="text-success">John Smith</span>
                            </div>
                            <div class="pull-right hint-text">
                                Apr 23
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- START ITEM -->
                    <div class="card social-card share share-other full-width m-b-10 d-flex flex-1 full-height no-border sm-vh-75"
                         data-social="item">
                        <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                        </div>
                        <div class="card-content flex-1" data-pages-bg-image="img/social_new.jpg">
                            <ul class="buttons ">
                                <li>
                                    <a href="#"><i class="fa fa-expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart-o"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-description">
                            <p><a href="#">#TBT</a> :D</p>
                        </div>
                        <div class="card-footer clearfix">
                            <div class="time">few seconds ago</div>
                            <ul class="reactions">
                                <li><a href="#">5,345 <i class="fa fa-comment-o"></i></a>
                                </li>
                                <li><a href="#">23K <i class="fa fa-heart-o"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-header clearfix">
                            <div class="user-pic">
                                <img alt="Avatar" width="33" height="33"
                                     data-src-retina="img/profiles/avatar_small2x.jpg"
                                     data-src="img/profiles/avatar.jpg" src="img/profiles/avatar_small2x.jpg">
                            </div>
                            <h5>David Nester</h5>
                            <h6>Shared a link on your wall</h6>
                        </div>
                    </div>
                    <!-- END ITEM -->
                </div>
                <div class="col-lg-6 m-b-10 d-flex flex-column">
                    <!-- START WIDGET widget_tableRankings-->
                    <div class="widget-12 card no-border widget-loader-circle no-margin col ar-1-1 sm-vh-75">
                        <div class="row">
                            <div class="col-xlg-8 ">
                                <div class="card-header pull-up top-right ">
                                    <div class="card-controls">
                                        <ul>
                                            <li class="hidden-xlg">
                                                <div class="dropdown">
                                                    <a data-target="#" href="#" data-toggle="dropdown"
                                                       aria-haspopup="true" role="button" aria-expanded="false">
                                                        <i class="portlet-icon portlet-icon-settings"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li><a href="#">AAPL</a>
                                                        </li>
                                                        <li><a href="#">YHOO</a>
                                                        </li>
                                                        <li><a href="#">GOOG</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a data-toggle="refresh" class="portlet-refresh text-black"
                                                   href="#"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="d-flex flex-column full-height p-l-10">
                                <div class="d-flex flex-row">
                                    <h2 class="">Apple Inc.</h2>
                                    <h2 class="m-l-50 text-danger">
                                        <span class="bold">448.97</span>
                                        <span class="text-danger fs-12">-318.24</span>
                                    </h2>
                                </div>
                                <div class="full-width">
                                    <ul class="list-inline m-b-0">
                                        <li><a href="#" class="font-montserrat text-master">1D</a>
                                        </li>
                                        <li class="active"><a href="#"
                                                              class="font-montserrat  bg-master-light text-master">5D</a>
                                        </li>
                                        <li><a href="#" class="font-montserrat text-master">1M</a>
                                        </li>
                                        <li><a href="#" class="font-montserrat text-master">1Y</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="nvd3-line line-chart text-center flex-1" data-x-grid="false">
                                    <svg class="full-height"></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </div>
            </div>
            <!-- END ROW -->
            <!-- START ROW -->
            <div class="row m-b-30">
                <div class="col-lg-7">
                    <!-- START ROW -->
                    <div class="row">
                        <div class="col-sm-6 md-p-b-10">
                            <!-- START WIDGET widget_pendingComments.tpl-->
                            <div class=" card no-border  no-margin widget-loader-circle todolist-widget pending-projects-widget">
                                <div class="card-header ">
                                    <div class="card-title">
                          <span class="font-montserrat fs-11 all-caps">
                  Recent projects <i class="fa fa-chevron-right"></i>
              </span>
                                    </div>
                                    <div class="card-controls">
                                        <ul>
                                            <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i
                                                            class="card-icon card-icon-refresh"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <h5 class="">Ongoing projects at <span class="semi-bold">pages</span></h5>
                                    <ul class="nav nav-tabs nav-tabs-simple m-b-20" role="tablist"
                                        data-init-reponsive-tabs="collapse">
                                        <li class="nav-item"><a href="#pending" class="active" data-toggle="tab"
                                                                role="tab" aria-expanded="true">Pending</a>
                                        </li>
                                        <li class="nav-item"><a href="#completed" data-toggle="tab" role="tab"
                                                                aria-expanded="false">Completed</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content no-padding">
                                        <div class="tab-pane active" id="pending">
                                            <div class="p-t-15">
                                                <div class="d-flex">
                                                    <span class="icon-thumbnail bg-master-light pull-left text-master">ws</span>
                                                    <div class="flex-1 full-width overflow-ellipsis">
                                                        <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">
                                                            Revox Ltd
                                                        </p>
                                                        <h5 class="no-margin overflow-ellipsis ">Marketing Campaign
                                                            for revox</h5>
                                                    </div>
                                                </div>
                                                <div class="m-t-15">
                                                    <p class="hint-text fade small pull-left">71% compleated from
                                                        total</p>
                                                    <a href="#" class="pull-right text-master"><i
                                                                class="pg-more"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-small m-b-15 m-t-10">
                                                    <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                                    <div class="progress-bar progress-bar-info"
                                                         style="width:71%"></div>
                                                    <!-- END BOOTSTRAP PROGRESS -->
                                                </div>
                                            </div>
                                            <div class="p-t-15">
                                                <div class="d-flex">
                                                    <span class="icon-thumbnail bg-warning-light pull-left text-master">cr</span>
                                                    <div class="flex-1 full-width overflow-ellipsis">
                                                        <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">
                                                            Nike Ltd
                                                        </p>
                                                        <h5 class="no-margin overflow-ellipsis ">Corporate
                                                            rebranding</h5>
                                                    </div>
                                                </div>
                                                <div class="m-t-15">
                                                    <p class="hint-text fade small pull-left">20% compleated from
                                                        total</p>
                                                    <a href="#" class="pull-right text-master"><i
                                                                class="pg-more"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-small m-b-15 m-t-10">
                                                    <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                                    <div class="progress-bar progress-bar-warning"
                                                         style="width:20%"></div>
                                                    <!-- END BOOTSTRAP PROGRESS -->
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-block m-t-30">See all projects</a>
                                        </div>
                                        <div class="tab-pane" id="completed">
                                            <div class="p-t-15">
                                                <div class="d-flex">
                                                    <span class="icon-thumbnail bg-master-light pull-left text-master">ws</span>
                                                    <div class="flex-1 full-width overflow-ellipsis">
                                                        <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">
                                                            Apple Corp
                                                        </p>
                                                        <h5 class="no-margin overflow-ellipsis ">Marketing Campaign
                                                            for revox</h5>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="m-t-15">
                                                    <p class="hint-text fade small pull-left">45% compleated from
                                                        total</p>
                                                    <a href="#" class="pull-right text-master"><i
                                                                class="pg-more"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-small m-b-15 m-t-10">
                                                    <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                                    <div class="progress-bar progress-bar-info"
                                                         style="width:45%"></div>
                                                    <!-- END BOOTSTRAP PROGRESS -->
                                                </div>
                                            </div>
                                            <div class="p-t-15">
                                                <div class="d-flex">
                                                    <span class="icon-thumbnail bg-warning-light pull-left text-master">cr</span>
                                                    <div class="flex-1 full-width overflow-ellipsis">
                                                        <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">
                                                            Yahoo Inc
                                                        </p>
                                                        <h5 class="no-margin overflow-ellipsis ">Corporate
                                                            rebranding</h5>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="m-t-25">
                                                    <p class="hint-text fade small pull-left">20% compleated from
                                                        total</p>
                                                    <a href="#" class="pull-right text-master"><i
                                                                class="pg-more"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-small m-b-15 m-t-10">
                                                    <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                                    <div class="progress-bar progress-bar-warning"
                                                         style="width:20%"></div>
                                                    <!-- END BOOTSTRAP PROGRESS -->
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-block m-t-30">See all projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET -->
                        </div>
                        <div class="col-sm-6 sm-m-t-10 md-p-b-10 d-flex">
                            <!-- START WIDGET widget_pendingComments.tpl-->
                            <div class=" card no-border  no-margin widget-loader-circle todolist-widget align-self-stretch">
                                <div class="card-header">
                                    <div class="card-title">TODOLIST
                                    </div>
                                    <div class="card-controls">
                                        <ul>
                                            <li><a href="#" class="portlet-refresh text-black"
                                                   data-toggle="refresh"><i
                                                            class="portlet-icon portlet-icon-refresh"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="list-unstyled p-l-20 p-r-20 p-t-10 m-b-20">
                                    <li>
                                        <h5 class="pull-left normal no-margin">28th September</h5>
                                        <a href="#" class="text-black pull-right m-l-5" data-toggle="refresh"><i
                                                    class="fa fa-angle-right"></i></a>
                                        <a href="#" class="text-black pull-right m-r-5" data-toggle="refresh"><i
                                                    class="fa fa-angle-left"></i></a>
                                    </li>
                                    <div class="clearfix"></div>
                                </ul>
                                <div class="task-list p-t-0 p-r-20 p-b-20 p-l-20 clearfix flex-1">
                                    <!-- START TAKS !-->
                                    <div class="task clearfix row completed">
                                        <div class="task-list-title col-10 justify-content-between">
                                            <a href="#" class="text-master strikethrough" data-task="name">Purchase
                                                Pages before 10am
                                            </a>
                                            <i class="fs-14 pg-close hidden"></i>
                                        </div>
                                        <div class="checkbox checkbox-circle no-margin text-center col-2 d-flex justify-content-center">
                                            <input type="checkbox" checked="checked" value="1" id="todocheckbox"
                                                   data-toggler="task" class="hidden">
                                            <label for="todocheckbox"
                                                   class=" no-margin no-padding absolute"></label>
                                        </div>
                                    </div>
                                    <!-- END TAKS !-->
                                    <!-- START TAKS !-->
                                    <div class="task clearfix row">
                                        <div class="task-list-title col-10 justify-content-between">
                                            <a href="#" class="text-master" data-task="name">Meeting with CFO
                                            </a>
                                            <i class="fs-14 pg-close hidden"></i>
                                        </div>
                                        <div class="checkbox checkbox-circle no-margin text-center col-2 d-flex justify-content-center">
                                            <input type="checkbox" value="1" id="todocheck2" data-toggler="task"
                                                   class="hidden">
                                            <label for="todocheck2" class=" no-margin no-padding absolute"></label>
                                        </div>
                                    </div>
                                    <!-- END TAKS !-->
                                    <!-- START TAKS !-->
                                    <div class="task clearfix row">
                                        <div class="task-list-title col-10 justify-content-between">
                                            <a href="#" class="text-master" data-task="name">AGM Conference at 1pm
                                            </a>
                                            <i class="fs-14 pg-close hidden"></i>
                                        </div>
                                        <div class="checkbox checkbox-circle no-margin text-center col-2 d-flex justify-content-center">
                                            <input type="checkbox" value="1" id="todocheck3" data-toggler="task"
                                                   class="hidden">
                                            <label for="todocheck3" class=" no-margin no-padding absolute"></label>
                                        </div>
                                    </div>
                                    <!-- END TAKS !-->
                                    <!-- START TAKS !-->
                                    <div class="task clearfix row">
                                        <div class="task-list-title col-10 justify-content-between">
                                            <a href="#" class="text-master" data-task="name">Revise Annual Reports
                                            </a>
                                            <i class="fs-14 pg-close hidden"></i>
                                        </div>
                                        <div class="checkbox checkbox-circle no-margin text-center col-2 d-flex justify-content-center">
                                            <input type="checkbox" value="1" id="todocheck4" data-toggler="task"
                                                   class="hidden">
                                            <label for="todocheck4" class=" no-margin no-padding absolute"></label>
                                        </div>
                                    </div>
                                    <!-- END TAKS !-->
                                </div>
                                <div class="clearfix"></div>
                                <div class="bg-master-light padding-20 full-width ">
                                    <div class="row">
                                        <div class="col-10">
                                            <p class="no-margin normal text-black">Type Event Here</p>
                                            <div class="input-group transparent no-border full-width">
                                                <input class="form-control transparent p-l-0" type="text"
                                                       placeholder="What do you need to remeber?">
                                            </div>
                                        </div>
                                        <div class="col-2 text-center">
                                            <a href="#" class="block m-t-15"><img src="img/plus.svg"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET -->
                        </div>
                    </div>
                    <!-- END ROW -->
                </div>
                <div class="col-lg-5 sm-m-t-10 d-flex">
                    <!-- START WIDGET widget_pendingComments.tpl-->
                    <div class="widget-11-2 card no-border card-condensed no-margin widget-loader-circle d-flex flex-column align-self-stretch">
                        <div class="card-header top-right">
                            <div class="card-controls">
                                <ul>
                                    <li><a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i
                                                    class="portlet-icon portlet-icon-refresh"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="padding-25">
                            <div class="pull-left">
                                <h2 class="text-success no-margin">webarch</h2>
                                <p class="no-margin">Today's sales</p>
                            </div>
                            <h3 class="pull-right semi-bold"><sup>
                                    <small class="semi-bold">$</small>
                                </sup> 102,967
                            </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="auto-overflow widget-11-2-table">
                            <table class="table table-condensed table-hover">
                                <tbody>
                                <tr>
                                    <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                                    <td class="text-right hidden-lg">
                                        <span class="hint-text small">dewdrops</span>
                                    </td>
                                    <td class="text-right b-r b-dashed b-grey w-25">
                                        <span class="hint-text small">Qty 1</span>
                                    </td>
                                    <td class="w-25">
                                        <span class="font-montserrat fs-18">$27</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                                    <td class="text-right hidden-lg">
                                        <span class="hint-text small">dewdrops</span>
                                    </td>
                                    <td class="text-right b-r b-dashed b-grey w-25">
                                        <span class="hint-text small">Qty 1</span>
                                    </td>
                                    <td class="w-25">
                                        <span class="font-montserrat fs-18">$27</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                                    <td class="text-right hidden-lg">
                                        <span class="hint-text small">dewdrops</span>
                                    </td>
                                    <td class="text-right b-r b-dashed b-grey w-25">
                                        <span class="hint-text small">Qty 1</span>
                                    </td>
                                    <td class="w-25">
                                        <span class="font-montserrat fs-18">$27</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                                    <td class="text-right hidden-lg">
                                        <span class="hint-text small">dewdrops</span>
                                    </td>
                                    <td class="text-right b-r b-dashed b-grey w-25">
                                        <span class="hint-text small">Qty 1</span>
                                    </td>
                                    <td class="w-25">
                                        <span class="font-montserrat fs-18">$27</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                                    <td class="text-right hidden-lg">
                                        <span class="hint-text small">dewdrops</span>
                                    </td>
                                    <td class="text-right b-r b-dashed b-grey w-25">
                                        <span class="hint-text small">Qty 1</span>
                                    </td>
                                    <td class="w-25">
                                        <span class="font-montserrat fs-18">$27</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                                    <td class="text-right hidden-lg">
                                        <span class="hint-text small">dewdrops</span>
                                    </td>
                                    <td class="text-right b-r b-dashed b-grey w-25">
                                        <span class="hint-text small">Qty 1</span>
                                    </td>
                                    <td class="w-25">
                                        <span class="font-montserrat fs-18">$27</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                                    <td class="text-right hidden-lg">
                                        <span class="hint-text small">dewdrops</span>
                                    </td>
                                    <td class="text-right b-r b-dashed b-grey w-25">
                                        <span class="hint-text small">Qty 1</span>
                                    </td>
                                    <td class="w-25">
                                        <span class="font-montserrat fs-18">$27</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                                    <td class="text-right hidden-lg">
                                        <span class="hint-text small">dewdrops</span>
                                    </td>
                                    <td class="text-right b-r b-dashed b-grey w-25">
                                        <span class="hint-text small">Qty 1</span>
                                    </td>
                                    <td class="w-25">
                                        <span class="font-montserrat fs-18">$27</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                                    <td class="text-right hidden-lg">
                                        <span class="hint-text small">dewdrops</span>
                                    </td>
                                    <td class="text-right b-r b-dashed b-grey w-25">
                                        <span class="hint-text small">Qty 1</span>
                                    </td>
                                    <td class="w-25">
                                        <span class="font-montserrat fs-18">$27</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                                    <td class="text-right hidden-lg">
                                        <span class="hint-text small">dewdrops</span>
                                    </td>
                                    <td class="text-right b-r b-dashed b-grey w-25">
                                        <span class="hint-text small">Qty 1</span>
                                    </td>
                                    <td class="w-25">
                                        <span class="font-montserrat fs-18">$27</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="padding-25 mt-auto">
                            <p class="small no-margin">
                                <a href="#"><i class="fa fs-16 fa-arrow-circle-o-down text-success m-r-10"></i></a>
                                <span class="hint-text ">Show more details of APPLE . INC</span>
                            </p>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </div>
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER FLUID -->
    </div>
@stop

@section('script')

    <script src="{{ url('script/dashboard/dashboard.js') }}" type="text/javascript"></script>

    <script src="{{ url('script/dashboard/barActive.js') }}"></script>

@stop