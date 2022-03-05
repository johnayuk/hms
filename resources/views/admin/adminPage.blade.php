@extends('layouts.master')


@section('title')
Admin
@endsection


@section('content')



        <div class="container-fluid">

          
          <div class="row mx-auto">


            <div class="card bg-light  col-md-3 " >
              <div class="card-body">
                <a href="/registered"> <i class="fa fa-users fa-2x text-info" aria-hidden="true"></i></a>
               
                <h5 class="card-title"> Users  {{$users->count()-1}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>

            <div class="card bg-light col-md-3 mx-1" >
              <div class="card-body">
                <a  href="./doctor"> <i class="fa fa-user-md fa-2x text-info" aria-hidden="true" ></i></a>
               
                <h5 class="card-title">Doctor(s)   {{$doctors->count()}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>

            <div class="card bg-light col-md-4 " >
              <div class="card-body">
                <a href="./user_patient"> <i class="fa fa-bed fa-2x text-success" aria-hidden="true"></i></a>
               
                <h5 class="card-title"> AdmittedPatient(s)  {{$admitedpatients->count()}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>


            <div class="card bg-light col-md-3" >
              <div class="card-body">
                <a href="./view_bookings"><i class="fas fa-calendar-alt fa-2x text-warning" aria-hidden="true"></i></a>
                
                <h5 class="card-title">Appointment(s)  {{$appointments->count()}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>

            <div class="card bg-light col-md-3 mx-1">
              <div class="card-body">
                <a href="/department"> <i class="fa fa-building fa-2x" aria-hidden="true"></i></a>
               
                <h5 class="card-title">Department(s) {{$departments->count()}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>

            <div class="card bg-light col-md-3" >
              <div class="card-body">
                <a href="/nurse"><i class="fas fa-user-nurse fa-2x text-info"></i></a>
                
                <h5 class="card-title">Nurse(s)  {{$nurses->count()}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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



