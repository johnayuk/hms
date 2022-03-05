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
            <i class="fa fa-user-md fa-2x text-info" aria-hidden="true" ></i>
            @endif
            </a></h4>
        </div>


        <div class="card-body">
        
            <div class="table-responsive">

            
                <table  id="myTable" class="table">
                    
                    <thead class=" text-primary">
                    <th>Experince Doctor's Name</th>
                    <th>Date Employed</th>
                    <th>Specialization</th>
                    <th>Action</th>
                    </thead>

                    <tbody>
                     @foreach ($experience_doctors as $item)
                         
                         <td>Doctor  {{$item->doctor->user->name}}</td>
                         <td>{{$item->doctor->employed}}</td>
                         <td>{{$item->doctor->specialization}}</td>
                         <td> <i class="fa fa-trash fa-1x" data-toggle="modal" data-target="#staticBackdrop{{$item->id}}" aria-hidden="true" style="color: red"></i> </td>

                         <div class="modal fade" id="staticBackdrop{{$item->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h6 class="modal-title" id="staticBackdropLabel"> Doctor {{$item->doctor->user->name}}</h6>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form id="delete_modal" action="{{url('delete/'.$item->id)}}" method="post">
                                          @csrf
                                          @method('DELETE')
                                  <h5>Are you sure want to Remove Doctor {{$item->doctor->user->name}} From Experience Doctors Records ?</h5>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel Action</button>
                                        <button type="submit" class="btn btn-danger">Yes. Remove</button>
                                      </div>
                                </form>
                              </div>
                            </div>
                          </div>
                    </tbody>

                    @endforeach


                </table>
            </div>
        </div>

    </div>

      

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
                      <form method="POST" action="{{ url('create_experienceDoc') }}">
                              @csrf
                              @method('PUT')
    
                          
    
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