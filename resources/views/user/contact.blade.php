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
                                <h2>Contact Us</h2>
                                <!-- <ul>
                                    <li><a href="Default.html">Home</a></li>
                                    <li><a>Contact Us</a></li>
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
            <div class="welcome-three " >
                <div class="container">
                    
                    <div class="welcome-detail" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="box-item">
                                    <i class="icon-location2"></i>
                                    <h4>Corporate Office</h4>
                                    <p>
                                    101,1st Floor Tirth Complex,beside Anupam Square,
                                    Near Mahadev Chowk, Mota Varachha,
                                    Surat-394101,gujarat,india
                                    </p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="box-item">
                                    <i class="icon-home"></i>
                                    <h4>Warehouse</h4>
                                    <p>
                                        A-17, Scheme 78 Part 1,<br />
                                        New Loha Mandi, Dewas Naka, <br />
                                        Indore, Madhya Pradesh 453771.<br />
                                        Phone: +91 79903 29076
                                    </p>
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="box-item">
                                    <i class="icon-envelope3"></i>
                                    <h4>Email & Phone No.</h4>
                                    <p>suraj@connexindustrialsolutions.com</p>
                                     <p>Phone no: +91 9594271648<br />
                                        Phone no: +91 7506309221</p>
                                </div> 
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <!--End Welcome-->
            
            <!--Start Pie Chart-->
            <section class="services-four dark-back">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title text-center">
                                <h2><span>Get In Touch  </span> With Us</h2>
                                <span></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">                                        
                                        <label>First Name</label>
                                        <input name="ctl00$ContentPlaceHolder1$txtfname" type="text" id="txtfname" class="form-control" />                                     
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">                                        
                                        <label>Last Name</label>
                                        <input name="ctl00$ContentPlaceHolder1$txtlname" type="text" id="txtlname" class="form-control" />                                     
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">                                        
                                        <label>Subject</label>
                                        <input name="ctl00$ContentPlaceHolder1$TextBox2" type="text" id="TextBox2" class="form-control" />                                     
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">                                        
                                        <label>Email adress</label>
                                        <input name="ctl00$ContentPlaceHolder1$TextBox1" type="text" id="TextBox1" class="form-control" />                                     
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">                                        
                                        <label>Phone No.</label>
                                        <input name="ctl00$ContentPlaceHolder1$TextBox3" type="text" id="TextBox3" class="form-control" />                                     
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">                                        
                                        <label>Message</label>
                                        <textarea name="ctl00$ContentPlaceHolder1$TextBox4" rows="5" cols="20" id="TextBox4" class="form-control"></textarea>                                     
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">                                                                                
                                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnsubmit" value="Submit" id="ContentPlaceHolder1_btnsubmit" class="btn brocher-btn btn-lg" />                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <a href="#0" class="cd-top"></a>

        </div>
        <!--End Content-->

@endsection
       