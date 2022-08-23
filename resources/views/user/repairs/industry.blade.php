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
                        <h2>Industry</h2>
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
                        <h2><span>Industry</span></h2>
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
                        <div class="col-md-4">
                            <div class="serv-sec xs-mb-0">
                                <img class="banner-img img-thumbnail" src="{{asset('assets/Industry/AC DRIVES.jpg')}}" alt="">
                                <div class="detail" style="    background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                    <h5 style="color:#fff">Ac Drives</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="serv-sec xs-mb-0">
                                <img class="banner-img img-thumbnail" src="{{asset('assets/Industry/HMI MODULE.jpg')}}" alt="">
                                <div class="detail" style="    background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                    <h5 style="color:#fff">Hmi Module</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="serv-sec xs-mb-0">
                                <img class="banner-img img-thumbnail" src="{{asset('assets/Industry/PLC.jpg')}}" alt="">
                                <div class="detail" style="    background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                    <h5 style="color:#fff">PLC</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="serv-sec xs-mb-0">
                                <img class="banner-img img-thumbnail" src="{{asset('assets/Industry/SERVO DRIVES.jpg')}}" alt="">
                                <div class="detail" style="    background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                    <h5 style="color:#fff">Servo Drives</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="serv-sec xs-mb-0">
                                <img class="banner-img img-thumbnail" src="{{asset('assets/Industry/SERVO MOTORS.jpg')}}" alt="">
                                <div class="detail" style="    background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                    <h5 style="color:#fff">Servo Motors</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="serv-sec xs-mb-0">
                                <img class="banner-img img-thumbnail" src="{{asset('assets/Industry/VFD.jpg')}}" alt="">
                                <div class="detail" style="    background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                    <h5 style="color:#fff">VFD</h5>

                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Pie Chart-->

</div>
<!--End Content-->

@endsection