@extends('layouts.tema')
@section('content')
    <div class="content ">
        <div class="bg-white">
            <div class="container">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Form layouts</li>
                </ol>
            </div>
        </div>
        <!-- START CONTAINER FLUID -->
        <div class=" container    container-fixed-lg">
            <!-- START BREADCRUMB -->
            <div class="row">
                <div class="col-xl-7 col-lg-6 ">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-block">
                            <form id="form-personal" role="form" autocomplete="off">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default required">
                                            <label>First name</label>
                                            <input type="text" class="form-control" name="firstName" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Last name</label>
                                            <input type="text" class="form-control" name="lastName" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default input-group">
                                            <div class="form-input-group">
                                                <label>Pages username</label>
                                                <input type="text" class="form-control" name="username"
                                                       placeholder="yourname.pages.com (this can be changed later)"
                                                       required>
                                            </div>
                                            <div class="input-group-addon d-flex ">
                                                .pages.com
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password"
                                                   placeholder="Minimum of 4 characters." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email"
                                                   placeholder="We’ll send your login details to this address" required>
                                        </div>
                                    </div>
                                </div>
                                <p class="pull-left">
                                    I agree to the <a href="#">Pages Terms</a> and <a href="#">Privacy</a>.
                                </p>
                                <p class="pull-right">
                                    <a href="#">Help? Contact Support</a>
                                </p>
                                <div class="clearfix"></div>
                                <button class="btn btn-primary" type="submit">Create a new account</button>
                            </form>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
                <div class="col-xl-5 col-lg-6">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title">Validation
                            </div>
                        </div>
                        <div class="card-block">
                            <h3>Showcase and guide users with a <br>
                                better User Interface &amp; Experience.</h3>
                            <p>Forms are one of the most important components
                                <br> when it comes to a dashboard. Recognizing that fact, users are
                                <br>able work in a maximum content width.</p>
                            <br>
                            <p class="small hint-text m-t-5">VIA senior product manager
                                <br> for UI/UX at REVOX</p>
                            <button class="btn btn-primary btn-cons">More</button>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
            </div>
        </div>
        <!-- END CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" no-padding    container-fixed-lg bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!-- START card -->
                        <div class="card card-transparent">
                            <div class="card-header ">
                                <div class="card-title">Attached form layouts
                                </div>
                            </div>
                            <div class="card-block">
                                <h3>Attach your Forms to Organize
                                    &amp; Create Contemporary feels</h3>
                                <p>Despite the UI, We thought of the User experience, With attached From Layouts you can
                                    simply categories Important fields and prioritize them.</p>
                                <br>
                                <div>
                                    <div class="profile-img-wrapper m-t-5 inline">
                                        <img width="35" height="35" src="img/profiles/avatar_small.jpg" alt=""
                                             data-src="img/profiles/avatar_small.jpg"
                                             data-src-retina="img/profiles/avatar_small2x.jpg">
                                        <div class="chat-status available">
                                        </div>
                                    </div>
                                    <div class="inline m-l-10">
                                        <p class="small hint-text">VIA senior product manage
                                            <br> for UI/UX at REVOX</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END card -->
                    </div>
                    <div class="col-md-7">
                        <!-- START card -->
                        <div class="card card-transparent">
                            <div class="card-block">
                                <form id="form-project" role="form" autocomplete="off" novalidate>
                                    <p>Basic Information</p>
                                    <div class="form-group-attached">
                                        <div class="form-group form-group-default required">
                                            <label>Project name</label>
                                            <input type="text" class="form-control" name="projectName" required>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-default required">
                                                    <label>First name</label>
                                                    <input type="text" class="form-control" name="firstName" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-default">
                                                    <label>Last name</label>
                                                    <input type="text" class="form-control" name="lastName">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="m-t-10">Advanced Information</p>
                                    <div class="form-group-attached">
                                        <div class="form-group form-group-default">
                                            <label>Investor <i class="fa fa-info text-complete m-l-5"></i>
                                            </label>
                                            <input type="text" class="form-control" name="investor">
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-default required">
                                                    <label>Starting date</label>
                                                    <input id="start-date" type="text" class="form-control date"
                                                           name="startDate" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-default">
                                                    <label>Deadline</label>
                                                    <input id="end-date" type="text" class="form-control date"
                                                           name="endDate">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-default required">
                                                    <label>Website</label>
                                                    <input type="text" class="form-control" name="url">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-default input-group">
                                                    <div class="form-input-group">
                                                        <label class="inline">Availability</label>
                                                    </div>
                                                    <div class="input-group-addon bg-transparent h-c-50">
                                                        <input type="checkbox" data-init-plugin="switchery"
                                                               data-size="small" data-color="primary"
                                                               checked="checked"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group form-group-default input-group">
                                                    <div class="form-input-group">
                                                        <label>Budget</label>
                                                        <input type="text" class="form-control usd" required>
                                                    </div>
                                                    <div class="input-group-addon">
                                                        USD
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-group-default input-group">
                                                    <div class="form-input-group">
                                                        <label>Profit</label>
                                                        <input type="text" class="form-control usd">
                                                    </div>
                                                    <div class="input-group-addon">
                                                        USD
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-group-default input-group">
                                                    <div class="form-input-group">
                                                        <label>Revenue</label>
                                                        <input type="text" class="form-control usd">
                                                    </div>
                                                    <div class="input-group-addon">
                                                        USD
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="pull-left">
                                        <div class="checkbox check-success  ">
                                            <input type="checkbox" checked="checked" value="1" id="checkbox-agree">
                                            <label for="checkbox-agree">I hereby certify that the information above is
                                                true and accurate
                                            </label>
                                        </div>
                                    </div>
                                    <br>
                                    <button class="btn btn-success" type="submit">Submit</button>
                                    <button class="btn btn-default"><i class="pg-close"></i> Clear</button>
                                </form>
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
                    <div class="card-title">Separated form layouts
                    </div>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Simple but not simpler, Seperate your forms and create diversified info graphic</h3>
                            <p>Want it to be more Descriptive and User Friendly, We Made it possible, Use Seperated Form
                                Layouts Structure to Presentate your Form Fields.
                            </p>
                            <br>
                            <p class="small hint-text">To Add A full Width Portlet - Class - card-full This can be used
                                in any
                                <br> widget or situation, Highly Recomended on Forms and tables</p>
                            <form id="form-work" class="form-horizontal" role="form" autocomplete="off">
                                <div class="form-group row">
                                    <label for="fname" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Full name"
                                               name="name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">Your gender</label>
                                    <div class="col-md-9">
                                        <div class="radio radio-success">
                                            <input type="radio" value="male" name="optionyes" id="male">
                                            <label for="male">Male</label>
                                            <input type="radio" checked="checked" value="female" name="optionyes"
                                                   id="female">
                                            <label for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">Work</label>
                                    <div class="col-md-9">
                                        <p>Have you Worked at page Inc. before, Or joined the Pages Supirior Club?</p>
                                        <p class="hint-text small">If yes State which Place, if yes note date and Job
                                            CODE / Membership Number</p>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col-md-5 sm-m-t-10">
                                                <input type="text" placeholder="Code/Number" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="position" class="col-md-3 control-label">Position applying for</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="position" placeholder="Designation"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 control-label">Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="name"
                                                  placeholder="Briefly Describe your Abilities"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>I hereby certify that the information above is true and accurate. </p>
                                    </div>
                                    <div class="col-md-9">
                                        <button class="btn btn-success" type="submit">Submit</button>
                                        <button class="btn btn-default"><i class="pg-close"></i> Clear</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END card -->
        </div>
        <!-- END CONTAINER FLUID -->
    </div>
@stop

@section('script')

    <script src="{{ url('script/forms/form_layouts.js') }}" type="text/javascript"></script>

    <script src="{{ url('script/forms/barActive.js') }}"></script>
@stop