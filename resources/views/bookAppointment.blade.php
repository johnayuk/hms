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

  <div class="card-header">
    <h4> <a href="##"  data-toggle="modal" data-target="#addpatientmodal">
      {{-- <i class="now-ui-icons"></i> --}}
      @if (Auth::check() && Auth::user()->role == 'admin')
      {{-- <p style="color:#007bff">Add patient record</p> --}}
      <i class="fas fa-calendar-alt fa-1x" style="color:#007bff" aria-hidden="true"></i>
      @endif
    </a></h4>
  </div>



  @if ($appointments->count() > 0)

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
             @foreach ( $appointments as $appointment )
 
               <tr>
 
                 <td>{{$appointment->time}}</td>
 
                 <td>{{$appointment->service}}</td>
                 
                
                 <td>{{$appointment->patient->fullname}}</td>
 
                 <td>{{$appointment->doctor->user->name}}</td>
 
                   
                 <td>
                   <i class="fas fa-edit p-0 m-0" data-toggle="modal" data-target="#exampleModal{{$appointment->id}}" style="color: blue"></i>
                   <i class="fa fa-trash ml-3" style="color: rgb(231, 81, 61); font-size: 20px" data-toggle="modal" data-target="#staticBackdrop{{$appointment->id}}" aria-hidden="true"></i>
                 </td>
 
                 {{-- <td> --}}
 
                   <div class="modal fade" id="exampleModal{{$appointment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                       <div class="modal-body">
                                       <form action="{{url('updateAppointment/'.$appointment->id)}}" method="post">
                                           @csrf
                                           @method('PUT')
 
                                           <h3>Edit Appointment : {{$appointment->patient->fullname}}</h3>
                                           <div class="form-group">
                                             <label for="time">Time</label>
                                           <input type="date" name="time" id="time" class="form-control" value="{{$appointment->time}}" required>
                                           </div>
 
                                           <div class="form-group">
                                             <label for="_Service">Service</label>
                                             <select class="form-control" id="Select"  name="service" required>
                                                 <option selected>{{$appointment->service}}</option>
                                                 <option value="Eye Care">Eye Care</option>
                                                 <option value="Maternity">Maternity</option>
                                                 <option value="Dental">Dental</option>
                                                 <option value="Family Planing">Family Planing</option>
                                             </select>
                                         </div>
 
                                           
 
                                           <div class="form-group">  
                                              <label for="_Select">Select doctor</label>
                                             <select class="form-control" id="doctor_id" name="doctor_id" required>
                                                @foreach ($doctors as $doctor)
                                                <option value="{{$doctor->id}}">Doctor  {{$doctor->user->name}}</option>
                                                @endforeach 
                                             </select>
                                           </div>
 
                                       </div>
                                         <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                           <button type="submit" class="btn btn-primary">Save changes</button>
                                         </div>
                                       </form>
                               </div>
                                   </div>
                                </div>
                 {{-- </td> --}}
 
 
                 {{-- <td> --}}
 
                       <div class="modal fade" id="staticBackdrop{{$appointment->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                         <div class="modal-dialog">
                           <div class="modal-content">
                             <div class="modal-header">
                               <h5 class="modal-title" id="staticBackdropLabel">Cancel {{$appointment->patient->fullname}} Appoinment?</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                             </div>
                             <div class="modal-body">
                               <form id="delete_modal" action="{{url('deleteAppointment/'.$appointment->id)}}" method="post">
                                       @csrf
                                       @method('DELETE')
                               <h3>Are you sure want to delete {{$appointment->name}} Records ?</h3>
                                   </div>
                                   <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                                     <button type="submit" class="btn btn-danger">OK</button>
                                   </div>
                             </form>
                           </div>
                         </div>
                       </div>
                     {{-- <button type='button' class="btn btn-danger btn-sm" data-toggle="modal" data-target="#staticBackdrop{{$department->id}}">Delete</button> --}}
 
                 {{-- </td> --}}
 
               </tr>
                   
             @endforeach
 
 
             
         </tbody>
 
 
 
       </table>
   </div>
 </div>
      
  @endif

  {{-- <h3 class="text-center">No Appointments</h3> --}}

  

</div>

      {{-- modal for inserting admitedPatient  --}}
      <div class="modal fade" id="addpatientmodal" tabindex="-1" aria-labelledby="addpatientmodalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addpatientmodalLabel">Add New Appointment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                      <form method="POST" action="{{ url('createAppointment') }}">
                              @csrf
                              @method('PUT')
    
                            <div class="form-group">
                              <label for="_room">Time and Date</label>
                              <input for="room" type="date" name="time" class="form-control"  required>
                            </div>
    
                            <div class="form-group">
                              <label for="last_name">Service</label>
                              <input for="last_name" type="text" name="service"  class="form-control"  required>
                            </div>
    
    
                          <div class="input-group mb-3">  
                            <label class="input-group-text" for="patient_id">select patient</label>
                             <select class="custom-select" id="patient_id" name="patient_id">
                               @foreach ($patients as $patient)
                               <option value="{{ $patient->id}}">{{$patient->fullname}}  </option>
                               @endforeach 
                             </select>
                           </div>
                            
    
                          <div class="input-group mb-3">  
                            <label class="input-group-text" for="doctor_id">select doctor</label>
                             <select class="custom-select" id="doctor_id" name="doctor_id">
                               @foreach ($doctors as $doctor)
                               <option value="{{ $doctor->id}}">Doctor {{$doctor->user->name}}  </option>
                               @endforeach 
                             </select>
                           </div>
    
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                      </form>
                </div>
             </div>
            </div>

@endsection