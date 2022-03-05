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
      <i class="fa fa-bed fa-1x" style="color:#007bff" aria-hidden="true"></i>
      @endif
    </a></h4>
  </div>

     
         

     <div class="card-body">

      <div class="table-responsive">
   
      
         <table  id="myTable" class="table">
           
           <thead class=" text-primary">
             <th>Patient Name</th>
             <th>Doctor Assigned</th>
             <th>Room</th>  
             <th>Case Type</th> 
             <th>Action</th> 
           </thead>
   
           <tbody>
               @foreach ( $admitedpatients as $admitedpatient )
   
                 <tr>
   
                         <td>{{$admitedpatient->patient->fullname}}</td>
                         <td> Doctor {{$admitedpatient->doctor->user->name}}</td> 
                         <td>{{$admitedpatient->room}}</td>
                         <td>{{$admitedpatient->case_type}}</td>
   
                     
                         <td>
                           @if (Auth::check() && Auth::user()->role  == "admin")
                             <i class="fas fa-edit p-0 m-0" data-toggle="modal" data-target="#exampleModal{{$admitedpatient->id}}" style="color: rgb(47, 0, 255);font-size: 20px"></i>
                             <i class="fa fa-trash" style="color: rgb(228, 62, 62); font-size: 20px" data-toggle="modal" data-target="#staticBackdrop{{$admitedpatient->id}}" aria-hidden="true"></i>
                           @endif       
                             <i class="fa fa-address-book" data-toggle="modal" style="font-size: 30px" data-target="#exampleModalCenter{{$admitedpatient->id}}" aria-hidden="true"></i>
                             <a class="" href="{{url('patientpdf/'.$admitedpatient->id)}}"><i class="fas fa-file-pdf" style="font-size: 30px"></i></a>
                         </td>
   
                   {{-- <td> --}}
   
                     <div class="modal fade" id="exampleModal{{$admitedpatient->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                         <div class="modal-body">
                           <form  action="{{url('/update_patient/'.$admitedpatient->id)}}" method="post">
                             @csrf
                             @method('PUT')
   
                             <h3>Edit : {{$admitedpatient->id}}</h3>
                             <div class="form-group">
                               <label for="name">Room</label>
                             <input type="text" name="room" id="name" value="{{$admitedpatient->room}}" class="form-control">
                             </div>
   
                             <div class="form-group">
                               <label for="name">Case Type</label>
                             <input type="text" name="case_type" value="{{$admitedpatient->case_type}}" class="form-control">
                             </div>
   
                            
   
                             <div class="input-group mb-3">
                               <label class="input-group-text" for="doctor_id">Registered Patient</label>
                               <select class="custom-select" id="patient_id" name="patient_id">
                                 @foreach ($patients as $patient)
                                 <option value="{{ $patient->id}}"> {{$patient->fullname}} </option>
                                 @endforeach 
                               </select>
                             </div>
   
                           <div class="input-group mb-3">
                             <label class="input-group-text" for="doctor_id">Doctor Assigned</label>
                             <select class="custom-select" id="doctor_id" name="doctor_id">
                               @foreach ($doctors as $doctor)
                               <option value="{{ $doctor->id}}">Doctor {{$doctor->user->name}} </option>
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
   
   
                     {{-- modal for deleting admited patient profile --}}
                         <div class="modal fade" id="staticBackdrop{{$admitedpatient->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                           <div class="modal-dialog">
                             <div class="modal-content">
                               <div class="modal-header">
                                 <h5 class="modal-title" id="staticBackdropLabel">Admitted Patient {{$admitedpatient->patient->fullname}} Record</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                 </button>
                               </div>
                               <div class="modal-body">
                                 <form id="delete_modal" action="{{url('delete_patient/'.$admitedpatient->id)}}" method="post">
                                         @csrf
                                         @method('DELETE')
                                 <h6>Are you sure want to delete {{$admitedpatient->patient->fullname}} Records ?</h6>
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
   
   
   
             <div class="modal fade" id="exampleModalCenter{{$admitedpatient->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
   
   
                 <div class="content">
                   <div class="row">
                     <div class="col-md-12">
                       <div class="card">
                         <div class="card-header">
                           <h5 class="title">Admited Patient {{$admitedpatient->patient->username}} Profile</h5>
                         </div>
                         <div class="card-body">
                           <form>
                             <div class="row">
                               <div class="col-md-5 pr-1">
                                 <div class="form-group">
                                   <label>Institution</label>
                                   <input type="text" class="form-control" disabled="" placeholder="Company" value="GoodHealth Hospital">
                                 </div>
                               </div>
                               <div class="col-md-3 px-1">
                                 <div class="form-group">
                                   <label>Username</label>
                                   <input type="text" class="form-control" placeholder="Username" value={{$admitedpatient->patient->username}}>
                                 </div>
                               </div>
                               
                               <div class="col-md-3 px-1">
                                 <div class="form-group">
                                   <label>Case Type</label>
                                   <input type="text" class="form-control"  value={{$admitedpatient->case_type}}>
                                 </div>
                               </div>
                             </div>
   
   
                             <div class="row">
                               <div class="col-md-3pr-1">
                                 <div class="form-group">
                                   <label>Patient Name</label>
                                   <input type="text" class="form-control" placeholder="Company" value="{{$admitedpatient->patient->fullname}}">
                                 </div>
                               </div>
   
   
                               <div class="col-md-6 pl-1">
                                 <div class="form-group">
                                   <label>Email</label>
                                   <input type="text" class="form-control" placeholder="Last Name" value="{{$admitedpatient->patient->email}}">
                                 </div>
                               </div>
   
                               <div class="col-md-4 pl-1">
                                 <div class="form-group">
                                   <label>Doctor Incharge</label>
                                   <input type="text" class="form-control" placeholder="Last Name" value="{{$admitedpatient->doctor->user->name}}">
                                 </div>
                               </div>
                             </div>
   
   
                             <div class="row">
                               <div class="col-md-4">
                                 <div class="form-group">
                                   <label>Address</label>
                                   <input type="text" class="form-control"  value="{{$admitedpatient->patient->address1}}">
                                 </div>
                               </div>
   
                               <div class="col-md-4">
                                 <div class="form-group">
                                   <label>Patient Room</label>
                                   <input type="text" class="form-control"  value="{{$admitedpatient->room}}">
                                 </div>
                               </div>
   
                               <div class="col-md-3">
                                 <div class="form-group">
                                   <label>Gender</label>
                                   <input type="text" class="form-control"  value="{{$admitedpatient->patient->gender}}">
                                 </div>
                               </div>
                               
                             </div>
   
   
                             <div class="row">
                               <div class="col-md-4 pr-1">
                                 <div class="form-group">
                                   <label>D.O.B</label>
                                   <input type="text" class="form-control" value="{{$admitedpatient->patient->dob}}">
                                 </div>
                               </div>
                               <div class="col-md-4 px-1">
                                 <div class="form-group">
                                   <label>Patient Condition</label>
                                   <input type="text" class="form-control" placeholder="Country" value="{{$admitedpatient->case_type}}">
                                 </div>
                               </div>
   
                               <div class="col-md-4 pl-1">
                                 <div class="form-group">
                                   <label>City</label>
                                   <input type="text" class="form-control" value="{{$admitedpatient->patient->city}}">
                                 </div>
                               </div>
                             </div>
   
                             <div class="col-md-4 pl-1">
                               <div class="form-group">
                                 <label>Phone NO:</label>
                                 <input type="text" class="form-control" value="{{$admitedpatient->patient->phone}}">
                               </div>
                             </div>
                           </div>
   
                           </form>
                         </div>
                       </div>
                     </div>
                     
                     </div>
                   </div>
                 </div>
               </div>
             </div>
   
                 </tr>
                     
               @endforeach
   
   
               
           </tbody>
   
   
   
         </table>
     </div>
   </div>
   

  


  
</div>


      {{-- modal for inserting admitedPatient  --}}
      <div class="modal fade" id="addpatientmodal" tabindex="-1" aria-labelledby="addpatientmodalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addpatientmodalLabel">Add New Patient</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                      <form method="POST" action="{{ url('/createPatientData') }}">
                              @csrf
                              @method('PUT')
    
                            <div class="form-group">
                              <label for="_room">Patient Room</label>
                              <input for="room" type="text" name="room" class="form-control"  required>
                            </div>
    
                            <div class="form-group">
                              <label for="last_name">Case</label>
                              <input for="last_name" type="text" name="case_type" class="form-control"  required>
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