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
                            <h2>Our Expertise In </h2>
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
                            <h2><span>Our Expertise In   </span></h2>
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
                                <div class="serv-sec xs-mb-4">
                                    <img class="banner-img img-thumbnail" src="{{asset('assets/Our-Expertise/BACKPLANE BOARDS.jpg')}}" alt="">
                                    <div class="detail" style="background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                        <h5 style="color:#fff">Backplane Boards</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-sec xs-mb-0">
                                    <img class="banner-img img-thumbnail" src="{{asset('assets/Our-Expertise/BEAM FORMER BOARD.jpg')}}" alt="">
                                    <div class="detail" style="background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                        <h5 style="color:#fff">Beam Former Board</h5>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="serv-sec xs-mb-0">
                                    <img class="banner-img img-thumbnail" src="{{asset('assets/Our-Expertise/MOTHERBOARD.jpg')}}" alt="">
                                    <div class="detail" style="background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                        <h5 style="color:#fff">Motherboard</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-sec xs-mb-0">
                                    <img class="banner-img img-thumbnail" src="{{asset('assets/Our-Expertise/POWER SUPPLY.jpg')}}" alt="">
                                    <div class="detail" style="background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                        <h5 style="color:#fff">Power Supply</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-sec xs-mb-0">
                                    <img class="banner-img img-thumbnail" src="{{asset('assets/Our-Expertise/PROBE CONNECTOR BOARDS.jpg')}}" alt="">
                                    <div class="detail" style="background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                        <h5 style="color:#fff">Probe Connector Boards</h5>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="serv-sec xs-mb-0">
                                    <img class="banner-img img-thumbnail" src="{{asset('assets/Our-Expertise/RX TX BOARDS.jpg')}}" alt="">
                                    <div class="detail" style="background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                        <h5 style="color:#fff">Rx tx boards</h5>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="serv-sec xs-mb-0">
                                    <img class="banner-img img-thumbnail" src="{{asset('assets/Our-Expertise/SIGNAL PROCESSING BOARDS.jpg')}}" alt="">
                                    <div class="detail" style="background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                        <h5 style="color:#fff">Signal Processing Boards</h5>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-md-4">
                                <div class="serv-sec xs-mb-0">
                                    <img class="banner-img img-thumbnail" src="{{asset('assets/Our-Expertise/TOUCH PANELS.jpg')}}" alt="">
                                    <div class="detail" style="background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                        <h5 style="color:#fff">Touch Panels</h5>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="serv-sec xs-mb-0">
                                    <img class="banner-img img-thumbnail" src="{{asset('assets/Our-Expertise/CPU BOARDS.jpg')}}" alt="">
                                    <div class="detail" style="background: #25255b;margin: 0;padding: 25px;text-align: center;">
                                        <h5 style="color:#fff">Cpu Boards</h5>
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

        