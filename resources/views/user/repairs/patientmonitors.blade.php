@extends('layouts.master')
@section('content')            
    <!--Start Banner-->
    <div class="sub-banner">

        <img class="banner-img" src="{{asset('assets/images/about.jpg')}}" alt="">
        <div class="detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="paging">
                            <h2>Patient Monitors</h2>
                            <!-- <ul>
                                <li><a href="Default.html">Home</a></li>
                                <li><a>About Us</a></li>
                            </ul> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--End Banner-->
    <!--Start Content-->
    <div class="content">


        <!--Start Welcome-->
        <div class="welcome-three">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title text-center">
                            <h2><span>Patient  </span>Monitors</h2>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="welcome-detail">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="detail">
                                <p class="text-justify">
                                    Argon Medical Systems provides high pressure injector used for CT with contrast .It features direct pressure sensor for safe injection and could join work with international brands of <strong>GE,Philips and Toshiba</strong>
                                </p>
                                <p class="text-justify xs-pt-30">
                                    Argon Medical Systems offers you Both Nemoto and Medrad Single channel and double channel injector for your CT scan System at good price.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Welcome-->

        <!--Start Pie Chart-->
        <section class="services-content dark-back">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="serv-sec xs-mb-0">
                                    <img class="banner-img img-thumbnail" src="{{asset('assets/HelthcareImages/PATIENT MONITORS/Patient monitors.jpg')}}" alt="">
                                    <div class="detail" style="background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                        <h5 style="color:#fff">Patient monitors</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="serv-sec xs-mb-0">
                                    <img class="banner-img img-thumbnail" src="{{asset('assets/HelthcareImages/PATIENT MONITORS/phoebe-pro-patient-monitor.png')}}" alt="">
                                    <div class="detail" style="background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                        <h5 style="color:#fff">Phoebe-pro-patient-monitor</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--End Pie Chart-->

        <!-- <div class="welcome-three " style="background: url(images/bg-achievements-2.png) no-repeat right bottom; background-size: 30%;">
            <div class="container">
                <div class="welcome-detail">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="detail">
                                <p>
                                    The new Injector has been ergonomically designed considering every detail during the products use, matching the product for the objective. This has made possible extremely intuitive and simple operations, significantly enhancing the user confidence during operation.
                                </p>
                                <hr />
                                <h4>Features</h4>
                                <ul class="list--ul xs-pl-30">
                                    <li>
                                        <span>Injection Status LED light</span>
                                    </li>
                                    <li>
                                        <span>Injection status is provided via LED and audible sound</span>
                                    </li>
                                    <li>
                                        <span>Quick Selection Panel</span>
                                    </li>
                                    <li>
                                        <span>Just touch the part to be examined on the panel.The data setup screen will be displayed.</span>
                                    </li>
                                    <li>
                                        <span>One-touch Mounting</span>
                                    </li>
                                    <li>
                                        <span>Just insert and rotate the syringe. Simple, reliable mounting</span>
                                    </li>
                                    <li>
                                        <span>Home Page</span>
                                    </li>
                                    <li>
                                        <span>Simple menu display with easy to follow icons</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!--End Content-->

@endsection

        