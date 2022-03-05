@extends('layouts.master')


@section('content')


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




<div class="card">
  <div class="card-body">
   
    
   <div class="table-responsive">

   
      <table  id="myTable" class="table">
        
        <thead class=" text-primary">
          <th>Time</th>
          <th>Services</th>
          <th>Patient</th>
          <th>Doctor</th>
          <th>Action</th>
        </thead>

        <tbody>
              @foreach ( $appointments or  as $appointment )

                <tr>

                <td>{{$appointment->time}}</td>

                <td>{{$appointment->service}}</td>
                
               
                <td>{{$appointment->patient->fullname}}</td>

                <td>{{$appointment->doctor->fullname}}</td>


                

                  </tr>
                  
               @endforeach

               

            
        </tbody>



      </table>
  </div>
</div>

</div>



@endsection