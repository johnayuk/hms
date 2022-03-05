@extends('layouts.master')


@section('title')
{{Auth::user()->name}}
@endsection


@section('content')

          
            <div class="content">
              
              <div class="row">

                <div class="col-md-4">
                  <div class="card card-user">
                    <div class="image">
                      <img src="../assets/img/bg5.jpg" alt="...">
                    </div>
                    <div class="card-body">
                      <div class="author">
                        <a href="#">
                          @if (Auth::user()->patients)
                          <img class="avatar border-gray" src="{{('full/' .Auth::user()->patients->first()->image)}}"  alt="">
                          @else
                          <img class="avatar border-gray" src="{{('full/' .Auth::user()->image)}}"  alt="">
                          @endif

                         
                         
                        
                        <h5 class="title">{{Auth::user()->name}}</h5>
                        
                        </a>
                        <p class="description">
                          {{Auth::user()->role}}
                        </p>
                      </div>
                      <h5 class="description text-center" style="color: blue">
                        {{Auth::user()->patients->first()->username}}
                      </h5>
                    </div>
                    <hr>
                    <div class="button-container">
                      <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-facebook-f"></i>
                      </button>
                      <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-twitter"></i>
                      </button>
                      <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-google-plus-g"></i>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="title">{{Auth::user()->name}} your Profile</h5>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row">
                          <div class="col-md-5 pr-1">
                            <div class="form-group">
                              <label>Institution</label>
                              <input type="text" class="form-control" disabled="" placeholder="Company" value="GoodHealth.inc">
                            </div>
                          </div>
                          <div class="col-md-3 px-1">
                            <div class="form-group">
                              <label>User Type</label>
                            <input type="text" class="form-control" disabled  value="{{Auth::user()->role}}">
                            </div>
                          </div>
                          <div class="col-md-4 pl-1">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" disabled value="{{Auth::user()->email}}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                              <label>First Name</label>
                              <input type="text" class="form-control"  disabled value="{{Auth::user()->name}}">
                            </div>
                          </div>
                          <div class="col-md-6 pl-1">
                            <div class="form-group">
                              <label>Phone</label>
                              <input type="text" class="form-control" disabled  value="{{Auth::user()->patients->first()->phone}}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Address</label>
                              <input type="text" class="form-control" disabled value="{{Auth::user()->patients->first()->address1}}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 pr-1">
                            <div class="form-group">
                              <label>City</label>
                              <input type="text" class="form-control" disabled placeholder="City" value="{{Auth::user()->patients->first()->city}}">
                            </div>
                          </div>

                          <div class="col-md-4 px-1">
                            <div class="form-group">
                              <label>Gender</label>
                              <input type="text" class="form-control" disabled placeholder="Country" value="{{Auth::user()->patients->first()->gender}}">
                            </div>
                          </div>

                          <div class="col-md-4 px-1">
                            <div class="form-group">
                              <label>D.O.B</label>
                              <input type="text" class="form-control" disabled placeholder="Country" value="{{Auth::user()->patients->first()->dob}}">
                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>About Me</label>
                              <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </textarea>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>

@endsection


@section('script')
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
@endsection



