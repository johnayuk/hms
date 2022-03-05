@extends('layouts.welcome')

@section('content')


   

<header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand " href="/"> <img class="rounded-circle" src="uploads/medicine.png" alt="logo" style="height: 60px " ></a>
                    <h4 style="Color:#0080ff">GoodHealth</h4>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav text-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/homepage" style="Color:#0080ff">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('logout')}}" style="Color:#0080ff">Logout</a>
                                </li>
 
                            </ul>
                        </div>
                        <!-- <a class="btn_2 d-none d-lg-block" href="#">HOT LINE- 09856</a> -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


    <!-- ================Blog Area ================= -->
    <section class="blog_area section_padding">
        <div class="container bg-primary">
           
         <div>
            <form method="POST" action="{{ url('/userAppointment') }}">
                @csrf
                @method('PUT')

                <h2>Make an Appointment</h2>
                <div class="form-row">
        
                    {{-- <div class=" col-md-6">
                        <label for="_Service">Service</label>
                        <select class="form-control" id="Select" name="service">
                            <option value="1" selected>Select service</option>
                            <option value="Eye Care">Eye Care</option>
                            <option value="Maternity">Maternity</option>
                            <option value="Dental">Dental</option>
                            <option value="Family Planing">Family Planing</option>
                        </select>
                    </div> --}}

                    <select name="" id="">
                        <option value="1" selected>Select service</option>
                        <option value="Eye Care">Eye Care</option>
                    </select>

                    <div class="form-group col-md-6">  
                      <label for="_Select">Select doctor</label>
                       <select class="form-control" id="doctor_id" name="doctor_id">
                        <option value="Dental">choose a doctor</option>
                         @foreach ($doctors as $doctor)
                         <option value="{{$doctor->id}}">Doctor  {{$doctor->user->name}}</option>
                         @endforeach 
                       </select>
                     </div>
                    
                    

                   

                    <div class="form-group col-md-6">
                        <label for="_Emai">Date</label>
                        <input type="date" name="time" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <button type="submit" data-color="blue" class="btn btn-light">Submit</button>
              </form>
         </div>

        </div>
    </section>
    <!--================Blog Area =================-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                        <!-- <a href="#" class="footer_logo"> <img src="img/logo.png" alt="#"> </a> -->
                        <a class="navbar-brand " href="/"> <img class="rounded-circle" src="uploads/medicine.png" alt="logo" style="height: 60px " ></a>
                    <h4 style="Color:#0080ff">GoodHealth</h4>
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
                            <li><a href="#">Department</a></li>
                            <li><a href="#"> Online payment</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Department</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Explore</h4>
                        <ul>
                            <li><a href="#">In the community</a></li>
                            <li><a href="#">IU health foundation</a></li>
                            <li><a href="#">Family support </a></li>
                            <li><a href="#">Business solution</a></li>
                            <li><a href="#">Community clinic</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-6 single-footer-widget">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Lights were season</a></li>
                            <li><a href="#"> Their is let wherein</a></li>
                            <li><a href="#">which given over</a></li>
                            <li><a href="#">Without given She</a></li>
                            <li><a href="#">Isn two signs think</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-6 single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>Seed good winged wherein which night multiply
                            midst does not fruitful</p>
                        <!-- <div class="form-wrap" id="mc_embed_signup">
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
                        </div> -->
                    </div>
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

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>





@endsection
