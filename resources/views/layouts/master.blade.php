<!DOCTYPE html>

<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head><title>
    Connex Industrial System
</title><meta name="keywords" /><meta name="description" /><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link rel="icon" type="image/png" href="images/favicon.png" />

    <!--main file-->
    <link href="{{asset('assets/css/medical-guide.css')}}" rel="stylesheet" type="text/css" /><link href="{{asset('assets/css/helper.css')}}" rel="stylesheet" />
    <!--Medical Guide Icons-->
    <link href="{{asset('assets/fonts/medical-guide-icons.css')}}" rel="stylesheet" type="text/css" />

    <!-- Default Color-->
    <link id="color" href="{{asset('assets/css/default-color.css')}}" rel="stylesheet" type="text/css" />

    <!--bootstrap-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />

    <!--Dropmenu-->
    <link href="{{asset('assets/css/dropmenu.css')}}" rel="stylesheet" type="text/css" />

    <!--Sticky Header-->
    <link href="{{asset('assets/css/sticky-header.css')}}" rel="stylesheet" type="text/css" />

    <!--revolution-->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" /><link href="{{asset('assets/css/settings.css')}}" rel="stylesheet" type="text/css" /><link href="{{asset('assets/css/extralayers.css')}}" rel="stylesheet" type="text/css" />

    <!--Accordion-->
    <link href="{{asset('assets/css/accordion.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css" />


    <!--tabs-->
    <link href="{{asset('assets/css/tabs.css')}}" rel="stylesheet" type="text/css" />

    <!--Owl Carousel-->
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />

    <!-- Mobile Menu -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mmenu.all.css')}}" /><link rel="stylesheet" type="text/css" href="{{asset('assets/css/demo.css')}}" />

    <!--PreLoader-->
    <link href="{{asset('assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    @stack('css')
</head>
<body>
        <!-- <form method="post" action="http://argonmedicalsystems.com/Default.aspx" id="form2"> -->
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTY1NDU2MTA1MmRkGwt8KwYWgx3u0GBhU1mPnlIvtmZ+a05GTOJJkRG8Lsw=" />
</div>

<div class="aspNetHidden">
	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
</div>
        <div id="wrap">
            <!--Start PreLoader-->
            <div id="preloader">
                <div id="status">&nbsp;</div>
                <div class="loader">
                    <h1>Loading...</h1>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!--End PreLoader-->

            <!--Start Header-->
            @include('layouts.header')
            <!--End Header-->

            <!-- Mobile Menu Start -->
            @yield('content')

            <!--Start Footer-->
            @include('layouts.footer')
            <!--End Footer-->
            
            <!-- <a href="#0" class="cd-top"></a> -->
        </div>

        <!-- </form>    -->

        <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>

        <!-- SMOOTH SCROLL -->
        <script type="text/javascript" src="{{asset('assets/js/scroll-desktop.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/scroll-desktop-smooth.js')}}"></script>

        <!-- START REVOLUTION SLIDER -->
        <script type="text/javascript" src="{{asset('assets/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/jquery.themepunch.tools.min.js')}}"></script>


        <!-- Date Picker and input hover -->
        <script type="text/javascript" src="{{asset('assets/js/classie.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/jquery-ui-1.10.3.custom.js')}}"></script>

        <!-- Fun Facts Counter -->
        <script type="text/javascript" src="{{asset('assets/js/counter.js')}}"></script>


        <!-- Welcome Tabs -->
        <script type="text/javascript" src="{{asset('assets/js/tabs.js')}}"></script>


        <!-- All Carousel -->
        <script type="text/javascript" src="{{asset('assets/js/owl.carousel.js')}}"></script>

        <!-- Mobile Menu -->
        <script type="text/javascript" src="{{asset('assets/js/jquery.mmenu.min.all.js')}}"></script>

        <!-- All Scripts -->
        <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>


        <!-- Revolution Slider -->
        <script type="text/javascript">             
            $(function(){
                var current = location.pathname;
                $('.wtf-menu a').each(function(){
                    var $this = $(this);
                    // if the current path is like this link, make it active
                        if($this.attr('href').indexOf(current) !== -1){
                            $this.addClass('item-select');
                        }
                    })
            })
    
            jQuery('.tp-banner').show().revolution(
                {
                    dottedOverlay: "none",
                    delay: 16000,
                    startwidth: 1170,
                    startheight: 720,
                    hideThumbs: 200,

                    thumbWidth: 100,
                    thumbHeight: 50,
                    thumbAmount: 5,

                    navigationType: "nexttobullets",
                    navigationArrows: "solo",
                    navigationStyle: "preview",

                    touchenabled: "on",
                    onHoverStop: "on",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,

                    parallax: "mouse",
                    parallaxBgFreeze: "on",
                    parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                    keyboardNavigation: "off",

                    navigationHAlign: "center",
                    navigationVAlign: "bottom",
                    navigationHOffset: 0,
                    navigationVOffset: 20,

                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,

                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,

                    shadow: 0,
                    fullWidth: "on",
                    fullScreen: "off",

                    spinner: "spinner4",

                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    forceFullWidth: "off",
                    hideThumbsOnMobile: "off",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "off",
                    hideArrowsOnMobile: "off",
                    hideThumbsUnderResolution: 0,

                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    videoJsPath: "rs-plugin/videojs/",
                    fullScreenOffsetContainer: ""
                });
        </script>
        <!-- Revolution Slider -->
        <script type="text/javascript">
            jQuery('.tp-banner').show().revolution(
                {
                    dottedOverlay: "none",
                    delay: 16000,
                    startwidth: 1170,
                    startheight: 720,
                    hideThumbs: 200,

                    thumbWidth: 100,
                    thumbHeight: 50,
                    thumbAmount: 5,

                    navigationType: "nexttobullets",
                    navigationArrows: "solo",
                    navigationStyle: "preview",

                    touchenabled: "on",
                    onHoverStop: "on",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,

                    parallax: "mouse",
                    parallaxBgFreeze: "on",
                    parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                    keyboardNavigation: "off",

                    navigationHAlign: "center",
                    navigationVAlign: "bottom",
                    navigationHOffset: 0,
                    navigationVOffset: 20,

                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,

                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,

                    shadow: 0,
                    fullWidth: "on",
                    fullScreen: "off",

                    spinner: "spinner4",

                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,

                    shuffle: "off",

                    autoHeight: "off",
                    forceFullWidth: "off",
                    hideThumbsOnMobile: "off",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "off",
                    hideArrowsOnMobile: "off",
                    hideThumbsUnderResolution: 0,

                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    videoJsPath: "rs-plugin/videojs/",
                    fullScreenOffsetContainer: ""
                });
        </script>
        @stack('js')
</body>
</html>
