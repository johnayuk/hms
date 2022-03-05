
@extends('layouts.welcome')

@section('content')




    <header class="main_menu home_menu">

        <div class="container">
            @if ($errors->any())
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                  @endforeach
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            @endif
          </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand " href="/"> <img class="rounded-circle" src="uploads/medicine.png" alt="logo" style="height: 60px " > </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/blog')}}">About-us</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('pharmacy')}}">Pharmacy</a>
                                </li>

                               


                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('logout')}}">Logout</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#Meet A Doctor">Meet A Doctor</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#Get in Touch">Get in Touch</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('profilePage')}}">Your Profile</a>
                                </li>

                                {{-- <span class="text-dark"><a class="nav-link" href="{{url('profilePage')}}"> {{ Auth::user()->patients->first()->fullname}}</a></span> --}}

                                <li class="nav-item mt-3">
                                    <a class="btn_2 d-none d-lg-block ml-auto" href="#">HOT LINE- +234 968101568</a>
                                </li>
                               
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

   

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>We are here for your care</h5>
                            <h1>Best Care &
                                Better Doctor</h1>
                            <p>Good Health Hospital app makes you to accesss the best the hospital can offer without 
                                stressing yourself, booking appointment, buying from the pharmacy, printing your profile if
                                you have been admitted into the hospital, the App makes you to go to the hospital without waiting for attention.
                                Giving you another experience of a Nigerian hospital
                            </p>
                            <a class="btn_2">Contact Us +234 0968101568</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="img/banner_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about us part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="img/top_service.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>About us</h2>
                        {{-- @foreach ($about as $about)
                        <p>{{$about->statement}}</p>
                        @endforeach --}}
                        <a class="btn_2 " href="/blog">learn more</a>
                        <div class="banner_item">
                            <div class="single_item">
                                <img src="img/icon/banner_1.svg" alt="">
                                <h5>Emergency</h5>
                            </div>
                            <div class="single_item">
                                <img src="img/icon/banner_2.svg" alt="">
                                <h5>Appointment</h5>
                            </div>
                            <div class="single_item">
                                <img src="img/icon/banner_3.svg" alt="">
                                <h5>Qualfied</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <i class="fa fa-bed" aria-hidden="true" style="font-size: 50px"></i>
                            <h4>Emergency Care</h4>
                            <p>We provide emergency care for truamas and other serious condition. Emergency room staffs are 
                                prepared to provide riage and stabilize patients untill they can be moved to a room and released.
                            </p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <i class="fa fa-child" aria-hidden="true" style="font-size: 50px"></i>
                            <h4>Maternity</h4>
                            <p>Rooms are available that all-inclusive where mothers can give birth, nurse their babies and spend
                                a day or two recovering from the delivery.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="img/service.png" alt="">
                        </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <i class="fas fa-briefcase-medical" style="font-size: 50px"></i>
                            <h4>Surgery</h4>
                            <p>We have the most skillful surgeons available ready to carry on with any work, from critical cases to non-critical cases
                                
                            </p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <i class="fas fa-hospital-symbol" style="font-size: 50px"></i>
                            <h4>Pharmacy</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!-- our depertment part start-->
    <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <h2>Our Depertment</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Cardiology</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dolor 
                                                quibusdam blanditiis possimus illum id enim ipsa nulla, 
                                                repellendus quaerat ex aliquam necessitatibus 
                                                dicta, amet, ducimus ipsam consequuntur culpa reprehenderit..</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Neurology</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dolor 
                                                quibusdam blanditiis possimus illum id enim ipsa nulla, 
                                                repellendus quaerat ex aliquam necessitatibus 
                                                dicta, amet, ducimus ipsam consequuntur culpa reprehenderit..</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Ear, Nose and Throat</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dolor 
                                                quibusdam blanditiis possimus illum id enim ipsa nulla, 
                                                repellendus quaerat ex aliquam necessitatibus 
                                                dicta, amet, ducimus ipsam consequuntur culpa reprehenderit..</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>General Sugery</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dolor 
                                                quibusdam blanditiis possimus illum id enim ipsa nulla, 
                                                repellendus quaerat ex aliquam necessitatibus 
                                                dicta, amet, ducimus ipsam consequuntur culpa reprehenderit..</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Elderly service department</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dolor 
                                                quibusdam blanditiis possimus illum id enim ipsa nulla, 
                                                repellendus quaerat ex aliquam necessitatibus 
                                                dicta, amet, ducimus ipsam consequuntur culpa reprehenderit..</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Gynecology</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dolor 
                                                quibusdam blanditiis possimus illum id enim ipsa nulla, 
                                                repellendus quaerat ex aliquam necessitatibus 
                                                dicta, amet, ducimus ipsam consequuntur culpa reprehenderit..</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->

    <!--::doctor_part start::-->
    <section class="doctor_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2> Experienced Doctors</h2>
                        <p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
                    </div>
                </div>
            </div>
        <div class="row">
            {{-- @foreach ($doctors->take(4) as $doctor)
                <div class="col-md-6">
                    <img src="{{('full/'.$doctor->image)}}"  >
                    <div class="single_text">
                        <div class="single_blog_text">
                        <h3>{{$doctor->fullname}}</h3>
                        <p>{{$doctor->specialization}}</p>
                    </div>
                </div>
            @endforeach --}}

            @foreach ($exp_doctors->take(4)  as $doctor)
            <div class="card col-md-3" style="border: none !important">
                <img class="card-img-top" src="{{('full/'.$doctor->doctor->user->image)}}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$doctor->doctor->user->name}}</h5>
                    <h6 class="card-text">{{$doctor->doctor->specialization}}</h6>
                </div>
            </div>
            @endforeach

            {{-- @foreach ($exp_doctors  as $item)
                
            @endforeach --}}

        </div>
    </section>
    <!--::doctor_part end::-->

   
    
      
{{-- appoinmtent part --}}

    <section class="regervation_part section_padding text-light" id="Meet A Doctor">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">

                        {{-- <div class="container">
                            @if ($errors->any())
                              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                  @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                  @endforeach
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                            @endif
                          </div> --}}

                        <form method="POST" action="{{ url('/userAppointment') }}">
                            @csrf
                            @method('PUT')
          
                            <h2>Make an Appointment</h2>
                            <div class="form-row">
                             
          
                              
                                {{-- <div class="form-group">
                                   
                                    <input type="hidden" name="patient_id" value="{{Auth::id()}}" class="form-control" id="inputPassword4">
                                </div>
                                    --}}

                               

                                <div class="form-group col-md-6">
                                    <label for="_Service">Service</label>
                                    <select class="form-control" id="Select" name="service">
                                        <option value="1" selected>Select service</option>
                                        <option value="Eye Care">Eye Care</option>
                                        <option value="Maternity">Maternity</option>
                                        <option value="Dental">Dental</option>
                                        <option value="Family Planing">Family Planing</option>
                                    </select>
                                </div>
          
                                <div class="form-group col-md-6">  
                                  <label for="_Select">Select doctor</label>
                                   <select class="form-control" id="doctor_id" name="doctor_id">
                                    <option value="Dental">choose a doctor</option>
                                     @foreach ($doctors as $doctor)
                                     <option value="{{$doctor->id}}">Doctor  {{$doctor->user->name}}</option>
                                     @endforeach 
                                   </select>
                                 </div>
                                
                                
          
                                {{-- <div class="form-group time_icon col-md-6">
                                    <label for="_Time">Time</label>
                                    <select class="form-control" id="Select2" name="time">
                                        <option value="" selected>Time</option>
                                        <option value="8 AM TO 10AM">8 AM TO 10AM</option>
                                        <option value="10 AM TO 12PM">10 AM TO 12PM</option>
                                        <option value="10 AM TO 12PM">12PM TO 2PM</option>
                                        <option value="2PM TO 4PM">2PM TO 4PM</option>
                                        <option value="4PM TO 6PM">4PM TO 6PM</option>
                                        <option value="6PM TO 8PM">6PM TO 8PM</option>
                                        <option value="4PM TO 10PM">4PM TO 10PM</option>
                                        <option value="10PM TO 12PM">10PM TO 12PM</option>
                                    </select>
                                </div> --}}

                                <div class="form-group col-md-6">
                                    <label for="_Emai">Date</label>
                                    <input type="date" name="time" class="form-control" id="inputPassword4">
                                </div>
                            </div>
                            <button type="submit" data-color="blue" class="btn btn-light">Submit</button>
                          </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    {{--  --}}
                    {{-- <img src="uploads/reservation.png" alt=""> --}}
                  <p class="text-light">GoodHealth Provides you with the best Medical services, and our doctors are ever ready to attain to your
                      problems and find a solution to it. Place an appointment to make it easy for them to attain to you without stress!
                  </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="contact-section section_padding" id="Get in Touch">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">

               @if ($message = Session::get('success'))
               <div class="alert alert-primary alert-dismissible fade show" role="alert">
               
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    <strong>{{$message}}</strong>
               </div> 
               @endif
                <form action="/sendMail" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}

                    <div class="form-group">
                        <label for="formGroupExampleInput">Your Name</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                      </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>


            </div>

            <div class="col-lg-4">
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                  <h3>Uyo, Akwa Ibom.</h3>
                  <p>Ewet, 48,90</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                  <h3>+234 90681010568</h3>
                  <p>Mon to Fri 5am to 6pm</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                  <h3>test@test.com</h3>
                  <p>Send us your query anytime!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                        <a href="#" class="footer_logo"> <img src="uploads/medicine.png" alt="#" style="height: 60px ">HMS</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                        <div class="social_logo">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <!-- <li><a href="#">Department</a></li>
                            <li><a href="#"> Online payment</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Department</a></li> -->
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Explore</h4>
                        <ul>
                            <li><a href="#">In the community</a></li>
                            <!-- <li><a href="#">IU health foundation</a></li>
                            <li><a href="#">Family support </a></li>
                            <li><a href="#">Business solution</a></li>
                            <li><a href="#">Community clinic</a></li> -->
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-6 single-footer-widget">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Lights were season</a></li>
                            <!-- <li><a href="#"> Their is let wherein</a></li>
                            <li><a href="#">which given over</a></li>
                            <li><a href="#">Without given She</a></li>
                            <li><a href="#">Isn two signs think</a></li> -->
                        </ul>
                    </div>
                    <!-- <div class="col-xl-3 col-sm-6 col-md-6 single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>Seed good winged wherein which night multiply
                            midst does not fruitful</p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase"> <i class="ti-angle-right"></i>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"> <i class="ti-twitter"></i> </a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    <!-- jquery plugins here-->

   


@endsection
