@extends('layouts.master')
@section('content')
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assets/HomePageImages/HEALTHCARE-5.jpg')}}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0"
                        data-x="left"
                        data-y="250"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-speed="500"
                        data-start="1400"
                        data-easing="Back.easeOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        style="z-index: 10; max-width: auto; max-height: auto; font-size: 52px; white-space: nowrap;">
                        Refurbished
                    </div>
                    <div class="tp-caption black_thin_34 black_thin_34_bold customin tp-resizeme rs-parallaxlevel-0"
                        data-x="left"
                        data-y="340"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-speed="500"
                        data-start="1400"
                        data-easing="Back.easeOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 52px;">
                        CT Scanner
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assets/HomePageImages/Industry_1.jpg')}}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0"
                        data-x="0"
                        data-y="250"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-speed="500"
                        data-start="1400"
                        data-easing="Back.easeOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 52px;">
                        Services
                    </div>
                    <div class="tp-caption black_thin_34 black_thin_34_bold customin tp-resizeme rs-parallaxlevel-0"
                        data-x="0"
                        data-y="340"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-speed="500"
                        data-start="1400"
                        data-easing="Back.easeOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 52px;">
                        & Repairs
                    </div>
                </li>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assets/images/slides/c3.jpg')}}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0"
                        data-x="left"
                        data-y="250"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-speed="500"
                        data-start="1400"
                        data-easing="Back.easeOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 52px;">
                        Service
                    </div>
                    <div class="tp-caption black_thin_34 black_thin_34_bold customin tp-resizeme rs-parallaxlevel-0"
                        data-x="left"
                        data-y="340"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-speed="500"
                        data-start="1400"
                        data-easing="Back.easeOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 52px;">
                        & Coverage
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>    
    <!--End Banner-->
    <!--Start Content-->
    <div class="content">
        <div class="welcome-three dark-blue home">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title text-center">
                            <h2><span>Welcome to</span> CONNEX INDUSTRIAL SOLUTIONS LLP</h2>
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="welcome-detail">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="detail">
                                <p>
                                    We are offering exceptionalassortment of helathcare, analytical and industrial pcb repairing service to our customers.Our team members make sure that the pcb repairing services offered by us  are followed the quality and testing norms. Also we are offered pcb repairing services arerespected for their reasonable prices, perfect execution and customer-centric approach.
                                </p>
                                <br />                    
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Start Services-->
        <div class="services-five">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="service-sec">
                            <div class="icon">
                                <img src="{{asset('assets/images/buy.svg')}}" alt="" style="width: 60px" />
                            </div>
                            <h6>Sell Equipment</h6>
                            <p>We also buy second-hand Medical Imaging Equipment, provide an easy and efficient process as well as giving you the best offer.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-sec">
                            <div class="icon">
                                <img src="{{asset('assets/images/sell.svg')}}" alt="" style="width: 60px" />
                            </div>
                            <h6>Buy Equipment</h6>
                            <p>We sell second-hand Medical Imaging Equipment both within India and worldwide. Argon Medical Systems provide pre-owned or refurbished systems with full service support and Standard warranty to our customers.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-sec">
                            <div class="icon">
                                <img src="{{asset('assets/images/setting.svg')}}" alt="" style="width: 60px" />
                            </div>
                            <h6>Parts & Tubes</h6>
                            <p>We sell a range parts from a number of different brands for a large variety of Medical Imaging Equipment. The State of the art warehouse, having 2 Lakh plus parts to serve you. Our warehouses works for 24 X 7.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!--End Services-->
        <!--Start Latest News-->
        <div class="latest-news dark-back">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title text-center">
                            <h2><span>Our</span> Products</h2>
                            <span></span>
                            <!--<p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut volutpat eros  adipiscing nonummy.</p>-->
                        </div>
                    </div>
                </div>

                <div id="latest-news">
                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div id="owl-demo" class="owl-carousel">

                                    <div class="post item">
                                        <img class="lazyOwl" src="{{asset('assets/Analyitical-images/GAS CHROMATOGRAPHY.jpg')}}" alt="">
                                        <!-- <div class="detail">
                                            <h4><a href="asteionVP.html">Asteion VP</a></h4>
                                            <p>Asteion VP is a whole body computed tomography (CT) scanner</p>
                                        </div> -->
                                        <!--<div class="layer">
                                                <a href="#."><i class="icon-link"></i></a>
                                            </div>-->
                                    </div>
                                    <div class="post item">
                                        <img class="lazyOwl" src="{{asset('assets/Analyitical-images/GAS CHROMATOGRAPHY.jpg')}}" alt="">
                                        <!-- <div class="detail">
                                            <h4><a href="asteions4.html">Asteion Super-4</a></h4>
                                            <p>The Asteion super 4 is a multislice Helical CT scanner.</p>
                                        </div> -->
                                        <div class="layer">
                                            <a href="#."><i class="icon-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="post item">
                                        <img class="lazyOwl" src="{{asset('assets/HomePageImages/HEALTHCARE-15.jpg')}}" alt="">
                                        <!-- <div class="detail">
                                            <h4><a href="activion16.html">Activion-16</a></h4>
                                            <p>The Activion-16 offers fast advanced acquisitions</p>
                                        </div> -->
                                        <div class="layer">
                                            <a href="#."><i class="icon-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="post item">
                                        <img class="lazyOwl" src="{{asset('assets/HomePageImages/HEALTHCARE-5.jpg')}}" alt="">                                        
                                        <div class="layer">
                                            <a href="#."><i class="icon-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="post item">
                                        <img class="lazyOwl" src="{{asset('assets/HomePageImages/Industry_3.jpg')}}" alt="">
                                       
                                        <div class="layer">
                                            <a href="#."><i class="icon-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="post item">
                                        <img class="lazyOwl" src="{{asset('assets/HomePageImages/Industry_3.jpg')}}" alt="">                                        
                                        <div class="layer">
                                            <a href="#."><i class="icon-link"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--services-->

        <div class="services-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title text-center" style="margin: 0; margin-bottom: 50px;">
                            <h2><span>Our</span> Services</h2>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="service-sec">
                            <div class="icon">
                                <i class="icon-support"></i>
                            </div>
                            <div class="detail">
                                <h5>Technical Support Team
                                </h5>
                                <p>Argon have technical team which is availble for 24 hours.</p>
                            </div>

                        </div>
                        <div class="service-sec">
                            <div class="icon">
                                <i class=" icon-network"></i>
                            </div>
                            <div class="detail">
                                <h5>Full Service Coverage</h5>
                                <p>With the Full Coverage Agreement, Argon provides all parts for your system.</p>
                            </div>
                        </div>
                        <div class="service-sec">
                            <div class="icon">
                                <i class=" icon-tools3"></i>
                            </div>
                            <div class="detail">
                                <h5>Preventive Maintenance</h5>
                                <p>Argon provides Preventive maintenance agreement to its customer.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <img src="{{asset('assets/images/service-two-img1.png')}}" alt="">
                        <!--<div id="demo">
                                <div class="span12">
                                    <div id="services-slide" class="owl-carousel owl-theme" style="opacity: 1; display: block;">

                                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3420px; left: 0px; display: block;"><div class="owl-item" style="width: 570px;"><div class="item"></div></div><div class="owl-item" style="width: 570px;"><div class="item"><img src="images/service-two-img2.jpg" alt=""></div></div><div class="owl-item" style="width: 570px;"><div class="item"><img src="images/service-two-img3.jpg" alt=""></div></div></div></div>

                                        <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div>
                                    </div>
                                </div>
                            </div>-->
                    </div>
                </div>
            </div>
        </div>
        <!--End services-->
        <!--Start Doctor Quote-->
        <!--<div class="dr-quote">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="quote">"Meeting the challenges of an ever-changing healthcare environment."</span>
                            <span class="name">- Dr. Jonathan Gobi</span>
                        </div>
                    </div>
                </div>
            </div>-->
        <!--End Doctor Quote-->

    </div>
    <a href="#0" class="cd-top"></a>

    <!--End Content-->
@endsection
