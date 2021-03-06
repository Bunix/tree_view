@extends('layouts.tema')
@section('content')
    <div class="content ">
        <div class="bg-white">
            <div class="container">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                    <li class="breadcrumb-item active">sliders</li>
                </ol>
            </div>
        </div>
        <!-- START JUMBOTRON -->
        <div class="jumbotron">
            <div class=" container p-l-0 p-r-0   container-fixed-lg">
                <div class="inner">
                    <!-- START BREADCRUMB -->
                    <div class="container-md-height m-b-20">
                        <div class="row">
                            <div class="col-xl-7 col-lg-6 bg-white">
                                <!-- START card -->
                                <div class="full-height">
                                    <div class="card-block text-center">
                                        <img class="image-responsive-height demo-mw-300"
                                             src="img/demo/slider_hero.gif" alt="">
                                    </div>
                                </div>
                                <!-- END card -->
                            </div>
                            <div class="col-xl-5 col-lg-6">
                                <!-- START card -->
                                <div class="card card-transparent">
                                    <div class="card-header ">
                                        <div class="card-title">Getting started
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <h3>Sometimes small things matter the most in life!</h3>
                                        <p>A slider, also known as a track bar, allows users to set or adjust a value.
                                            When the user changes the value, it does not change the format of the
                                            interface or other info on the screen.</p>
                                        <br>
                                        <div>
                                            <div class="profile-img-wrapper m-t-5 inline">
                                                <img width="35" height="35" src="img/profiles/avatar_small.jpg"
                                                     alt="" data-src="img/profiles/avatar_small.jpg"
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
                <div class="col-md-5">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title">noUISlider slider
                            </div>
                        </div>
                        <div class="card-block">
                            <p class="m-b-20">noUiSlider is a range slider without bloat. It offers a ton off features,
                                and it is as small, lightweight and minimal as possible, which is great for mobile use
                                on the many supported devices.
                                <br>
                                <br>
                            </p>
                            <div class="col-lg-8 disable-hover-scale no-padding m-t-20">
                                <div class="bg-master m-b-10" id="slider-tooltips"></div>
                            </div>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- START card -->
                            <div class="card card-transparent">
                                <div class="card-header ">
                                    <div class="card-title">Responsive All Around
                                    </div>
                                </div>
                                <div class="card-block">
                                    <p>noUiSlider works with pretty much any device, mouse, touchscreen or both, and
                                        it'll work beautifully in responsive designs.</p>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="http://refreshless.com/nouislider/" target="_blank"
                                               class="btn btn-complete">See Plugin</a>
                                            <p class="small hint-text m-t-20 col-middle">
                                                see the plugin for uiSlider
                                                <br> http://refreshless.com/nouislider/
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                        <div class="col-md-6">
                            <!-- START card -->
                            <div class="card card-transparent">
                                <div class="card-header ">
                                    <div class="card-title">Compatible with all browsers
                                    </div>
                                </div>
                                <div class="card-block">
                                    <p>noUiSlider supports IE9 and up, and of course the latest versions of the
                                        'evergreen' browsers: Chrome, Safari, Firefox and Opera.</p>
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- START card -->
            <div class="card card-transparent">
                <div class="card-header ">
                    <div class="card-title">Nouilslider options
                    </div>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-transparent">
                                <div class="card-block no-top-padding">
                                    <h5>Connect</h5>
                                    <p>Basic slider with different color options, use of the below classes to quickly
                                        create a styled slider. Uses native boostrap colors scheme classes
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-5 col-xl-5 padding-20">
                                            <div class="nouislider_element bg-master m-b-10" data-value="90">
                                            </div>
                                            <br>
                                            <div class="nouislider_element bg-danger m-b-10" data-value="70">
                                            </div>
                                            <br>
                                            <div class="nouislider_element bg-warning m-b-10" data-value="20">
                                            </div>
                                            <br>
                                            <div class="nouislider_element bg-success m-b-10" data-value="50">
                                            </div>
                                            <br>
                                            <div class="nouislider_element bg-complete m-b-10" data-value="30">
                                            </div>
                                            <br>
                                            <div class="nouislider_element bg-primary m-b-10" data-value="50">
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-lg-5">
                                            <p class="small hint-text">All the colours included in pages color pallete
                                                is applicable to the default pages slider.</p>
                                            <a href="#" class="btn btn-warning">See color Pallete</a>
                                        </div>
                                    </div>
                                    <br>
                                    <p>The slider variations are made by the ciours included as the base clours
                                        excluding the menue base color.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-transparent">
                                <div class="card-block no-top-padding">
                                    <h5>Connect</h5>
                                    <p>The connect setting can be used to control the bar between the handles, or the
                                        edges of the slider. Use "lower" to connect to the lower side, or "upper" to
                                        connect to the upper side. Setting true sets the bar between the handles.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-5 padding-20">
                                            <div class="nouislider_element bg-primary m-b-10">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="card-block no-top-padding">
                                    <h5>Margin</h5>
                                    <p>When using two handles, the minimum distance between the handles can be set using
                                        the margin option. The margin value is relative to the value set in 'range'.
                                        This option is only available on standard linear sliders.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-5 padding-20">
                                            <div class="bg-complete m-b-10" id="slider-margin">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-transparent">
                                <div class="card-block no-top-padding">
                                    <h5>Limit</h5>
                                    <p>The limit option is the oposite of the margin option, limiting the maximum
                                        distance between two handles. As with the margin option, the limit option can
                                        only be used on linear sliders.</p>
                                    <div class="row">
                                        <div class="col-md-5 padding-20">
                                            <div class="bg-success m-b-10" id="slider-limit">
                                            </div>
                                            <div id="slider-limit-value-min"></div>
                                        </div>
                                        <div class="col-lg-5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="card-block no-top-padding">
                                    <h5>Step</h5>
                                    <p>By default, the slider slides fluently. In order to make the handles jump between
                                        intervals, you can use this option. The step option is relative to the values
                                        provided to range.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-5 padding-20">
                                            <div class="bg-danger m-b-10" id="slider-step">
                                            </div>
                                            <div id="slider-limit-value-max"></div>
                                        </div>
                                        <div class="col-lg-5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-transparent">
                                <div class="card-block no-top-padding">
                                    <h5>Orientation</h5>
                                    <p>The orientation setting can be used to set the slider to "vertical" or
                                        "horizontal".Set dimensions! Vertical sliders don't assume a default height, so
                                        you'll need to set one. You can use any unit you want, including % or px.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-5 padding-20">
                                            <div class="bg-success vertical-slider" id="slider-vertical">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END card -->
            <div class="row">
                <div class="col-md-5">
                    <!-- START card -->
                    <div class="card card-transparent">
                        <div class="card-header ">
                            <div class="card-title">
                                Ion.range Slider
                            </div>
                        </div>
                        <div class="card-block">
                            <p>
                                Ion.RangeSlider is easily customizable range slider which supports events and public
                                methods which has flexible settings that can be completely altered with CSS.
                            </p>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank"
                                       class="btn btn-complete">See Plugin</a>
                                    <p class="small hinted-text inline p-l-10 no-margin col-middle">
                                        see the plugin for uiSlider
                                        <br> http://ionden.com/a/plugins/ion.rangeSlider/en.html
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END card -->
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- START card -->
                            <div class="card card-transparent">
                                <div class="card-header ">
                                    <div class="card-title">Advance Options
                                    </div>
                                </div>
                                <div class="card-block">
                                    <p>Ion.RangeSlider is the best when dealing for advanced options. It has many
                                        features like , Ability to prettify large numbers,Support of custom values
                                        diapason, etc..
                                    </p>
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                        <div class="col-md-6">
                            <!-- START card -->
                            <div class="card card-transparent">
                                <div class="card-header ">
                                    <div class="card-title">Automatic Generated Grid
                                    </div>
                                </div>
                                <div class="card-block">
                                    <p>
                                        The sliders are made with an automatically generated grid system which will
                                        adupt to any screen size.
                                    </p>
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- START card -->
            <div class="card card-default">
                <div class="card-header ">
                    <div class="card-title">
                        Ion.range options
                    </div>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-transparent">
                                <div class="card-header ">
                                    <div class="card-title">
                                        ION.Range Options
                                    </div>
                                </div>
                                <div class="card-block">
                                    <h5 class="semi-bold">Color Options</h5>
                                    <p>Basic slider with different color options, use of the below classes to quickly
                                        create a styled slider. Uses native boostrap colors scheme classes</p>
                                    <div class="irs-wrapper primary">
                                        <input type="text" name="" value="0;4000" class="ion_slider"/>
                                    </div>
                                    <br>
                                    <div class="irs-wrapper complete">
                                        <input type="text" name="" value="0;3000" class="ion_slider"/>
                                    </div>
                                    <br>
                                    <div class="irs-wrapper success">
                                        <input type="text" name="" value="0;2000" class="ion_slider"/>
                                    </div>
                                    <br>
                                    <div class="irs-wrapper danger">
                                        <input type="text" name="" value="0;1000" class="ion_slider"/>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-transparent">
                                <div class="card-header ">
                                    <div class="card-title">
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div class="irs-wrapper blue">
                                                <input type="text" id="example_1" name="example_name" value="0;2057"/>
                                            </div>
                                            <div class="row fs-13 m-t-20">
                                                <div class="col-md-6">
                                                    Size set from <code>0</code>to <code>5000</code>
                                                </div>
                                                <div class="col-md-6">
                                                    Adding postfix <code>+</code>to max value
                                                </div>
                                            </div>
                                            <div class="row fs-13">
                                                <div class="col-md-6">
                                                    Set slider type to <code>double</code>
                                                </div>
                                                <div class="col-md-6">
                                                    symbol as prefix <code>$</code>
                                                </div>
                                            </div>
                                            <div class="row fs-13">
                                                <div class="col-md-6">
                                                    Set slider type to <code>double</code>
                                                </div>
                                                <div class="col-md-6">
                                                    Grid <code>TRUE</code>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="card-header ">
                                    <div class="card-title">
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div class="irs-wrapper blue">
                                                <input type="text" id="example_2" name="example_name"
                                                       value="30000;90000"/>
                                            </div>
                                            <div class="row fs-13 m-t-20">
                                                <div class="col-md-6 m-b-10">
                                                    Size set from
                                                    <code>1000</code>to
                                                    <code>100 000</code>
                                                </div>
                                                <div class="col-md-6">
                                                    Value from
                                                    <code>30 000</code>to
                                                    <code>90 000</code>
                                                </div>
                                            </div>
                                            <div class="row fs-13">
                                                <div class="col-md-6">
                                                    Adding postfix
                                                    <code>EURO</code>to max value
                                                </div>
                                                <div class="col-md-6">
                                                    symbol as prefix <code>$</code>
                                                </div>
                                            </div>
                                            <div class="row fs-13">
                                                <div class="col-md-6">
                                                    Set slider type to
                                                    <code>double</code>
                                                </div>
                                                <div class="col-md-6">
                                                    symbol as prefix
                                                    <code>$</code>
                                                </div>
                                            </div>
                                            <div class="row fs-13">
                                                <div class="col-md-6">
                                                    Grid
                                                    <code>TRUE</code>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- START card -->
                <div class="card card-transparent">
                    <div class="card-header ">
                        <div class="card-title">
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-transparent">
                                    <div class="card-header ">
                                        <div class="card-title">
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="irs-wrapper blue">
                                                    <input type="text" id="example_3" name="example_name" value="0"/>
                                                </div>
                                                <div class="row fs-13 m-t-20">
                                                    <div class="col-md-6">
                                                        Size set from
                                                        <code>0</code>to
                                                        <code>10</code>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Set fractional setp
                                                        <code>0.1</code>
                                                    </div>
                                                </div>
                                                <div class="row fs-13">
                                                    <div class="col-md-6">
                                                        Grid
                                                        <code>TRUE</code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-transparent">
                                    <div class="card-header ">
                                        <div class="card-title">
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="irs-wrapper blue">
                                                    <input type="text" id="example_4" name="example_name" value="0"/>
                                                </div>
                                                <div class="row fs-13 m-t-20">
                                                    <div class="col-md-6">
                                                        Size set from
                                                        <code>-50</code>+50
                                                        <code>5000</code>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Set FROM value to
                                                        <code>0</code>
                                                    </div>
                                                </div>
                                                <div class="row fs-13">
                                                    <div class="col-md-6">
                                                        symbol as prefix
                                                        <code>Degress</code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-transparent">
                                    <div class="card-header ">
                                        <div class="card-title">
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="irs-wrapper blue">
                                                    <input type="text" id="example_5" name="example_name" value="0"/>
                                                </div>
                                                <div class="row fs-13 m-t-20">
                                                    <div class="col-md-6">
                                                        Set values array to month names
                                                    </div>
                                                    <div class="col-md-6">
                                                        Adding postfix
                                                        <code>+</code>to max value
                                                    </div>
                                                </div>
                                                <div class="row fs-13">
                                                    <div class="col-md-6">
                                                        Everything else will be automatically adjusted
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-transparent">
                                    <div class="card-header ">
                                        <div class="card-title">
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="irs-wrapper blue">
                                                    <input type="text" id="example_6" name="example_name" value="0"/>
                                                </div>
                                                <div class="row fs-13 m-t-20">
                                                    <div class="col-md-6">
                                                        Set step value to
                                                        <code>1000</code>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Slider value
                                                        <code>Hide</code>
                                                    </div>
                                                </div>
                                                <div class="row fs-13">
                                                    <div class="col-md-6">
                                                        Adding postfix
                                                        <code>Miles</code>
                                                    </div>
                                                </div>
                                            </div>
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
        <!-- END CONTAINER FLUID -->
    </div>
@stop

@section('script')

    <script src="{{ url('script/sliders/slider.js') }}" type="text/javascript"></script>

    <script src="{{ url('script/elements/barActive.js') }}"></script>

@stop