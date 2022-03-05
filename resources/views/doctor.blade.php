
        @extends('layouts.master')


        @section('title')
        {{ Auth::user()->name }}
        @endsection


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



                <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                          <h4> <a href="##"  data-toggle="modal" data-target="#addDoctor">
                            {{-- <i class="now-ui-icons"></i> --}}
                            {{-- <p style="color:#007bff">Add A Doctor</p> --}}
                            <i class="fa fa-user-md fa-2x text-info" aria-hidden="true" ></i>
                            
                          </a></h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            
                            <table id="myTable" class="table">
                              <thead class=" text-primary">
                                <th>Name</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Specialization</th>
                                <th>Image</th>
                                <th>Action</th>
                              </thead>

                              <tbody>
                                @foreach ($doctors as $doctor)
                                <tr>
                                {{-- <td><a class="btn " href="{{url('/workersMail/'.$doctor->id)}}> </td> --}}
                                
                                <td>{{ $doctor->user->name}}</td>
                                <td>{{ $doctor->user->email}}</td>
                                <td>{{ $doctor->department->name}}</td>
                                <td>{{ $doctor->specialization}}</td>
                              <td data-toggle="modal" data-target="#exampleModalCenter{{$doctor->id}}"><img src="{{asset('full/'.$doctor->user->image)}}" alt="" width="60px"; height="60px" style="border-radius: 60px"></td>
                              
                              {{-- button controlling each modal --}}
                            <td>

                              <i class="fas fa-edit" style="font-size: 20px; color: blue" data-toggle="modal" data-target="#exampleModal{{$doctor->id}}"></i>
                              <i class="fa fa-trash"  style="font-size: 20px;color: rgb(255, 0, 13)" aria-hidden="true" data-toggle="modal" data-target="#staticBackdrop{{$doctor->id}}"></i>
                              <i class="fas fa-address-book"  style="font-size: 20px;color: blue" data-toggle="modal" data-target="#exampleModalCenter{{$doctor->id}}"></i>
                              <i class="fa fa-envelope"  style="font-size: 20px;color: blue" aria-hidden="true" data-toggle="modal" data-target="#mail{{$doctor->id}}"></i>
                              <a class="" href="{{url('doctorpdf/'.$doctor->id)}}"><i class="fas fa-file-pdf" style="font-size: 30px"></i></a>
                              

                              </td>
                  {{-- doctor update modal --}}
            <div class="modal fade" id="exampleModal{{$doctor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                                  <form  enctype="multipart/form-data" files=true action="{{url('/updateDoctor/'.$doctor->id)}}" method="post">
                                      @csrf
                                      @method('PUT')

                                      <h3>Edit User : {{$doctor->id}}</h3>
                                      <div class="row">
                                        {{-- <div class="col-md-5 pr-1">
                                          <div class="form-group">
                                            <label>Name</label>
                                          <input type="text" class="form-control" name="name"  value="{{$doctor->fullname}}">
                                          </div>
                                        </div>

                                        <div class="col-md-3 px-1">
                                          <div class="form-group">
                                            <label>Email</label>
                                          <input type="email" class="form-control" name="email" value="{{$doctor->email}}">
                                          </div>
                                        </div> --}}

                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label>Specialization</label>
                                          <input type="text" class="form-control" name="specialization" value="{{$doctor->specialization}}">
                                          </div>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-8">
                                          <div class="form-group">
                                            <label>Address</label>
                                          <input type="text" class="form-control" name="address" value="{{$doctor->address}}">
                                          </div>
                                        </div>

                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <label>DateEmployed</label>
                                          <input type="text" class="form-control" name="employed" value="{{$doctor->employed}}">
                                          </div>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4 pr-1">
                                          <div class="form-group">
                                            <label>City</label>
                                          <input type="text" class="form-control"  name="city"  value="{{$doctor->city}}">
                                          </div>
                                        </div>


                                        <div class="col-md-4 pr-1">
                                          <div class="form-group">
                                            <label>Gender</label>
                                          <input type="text" class="form-control"  name="gender"  value="{{$doctor->gender}}">
                                          </div>
                                        </div>

                                      
                                          <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                              <label>Salary</label>
                                            <input type="text" class="form-control"  name="salary"  value="{{$doctor->salary}}">
                                            </div>
                                          </div>

                                        <div class="col-md-4 px-1">
                                          <div class="form-group">
                                            <label>D.O.B</label>
                                            <input type="text" class="form-control"  name="dob" value="{{$doctor->dob}}">
                                          </div>
                                        </div>

                                        <div class="col-md-4 pl-1">
                                          <div class="form-group">
                                            <label>Phone No.</label>
                                          <input type="number" class="form-control" name="phone_number" value="{{$doctor->phone_number}}">
                                          </div>
                                        </div>
                                      </div>

                                      <div class="input-group mb-3">  
                                        <label class="input-group-text" for="doctor_id">Department</label>
                                        <select class="custom-select" id="department_id" name="department_id">
                                          @foreach ($departments as $department)
                                          <option value="{{ $department->id}}"> {{$department->name}} </option>
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
                                {{-- <button type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#exampleModal{{$doctor->id}}">Edit</button> --}}
                                {{-- <i class="fas fa-edit" data-toggle="modal" data-target="#exampleModal{{$doctor->id}}"></i> --}}
                              

                                    {{-- delete doctor modal --}}
                                      <div class="modal fade" id="staticBackdrop{{$doctor->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form id="delete_modal" action="{{url('/deleteDoctor/'.$doctor->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                            <h3>Are you sure want to delete ?</h3>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                  <button type="submit" class="btn btn-danger">OK</button>
                                                </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                    {{-- <i class="fa fa-trash" aria-hidden="true" data-toggle="modal" data-target="#staticBackdrop{{$doctor->id}}"></i> --}}
                                  {{-- <button type='button' class="btn btn-danger btn-sm" data-toggle="modal" data-target="#staticBackdrop{{$doctor->id}}">Delete</button> --}}
                                

                          
                              <!-- Button trigger modal -->
                          {{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{$doctor->id}}">
                                  profile
                                </button> --}}
                                {{-- <i class="fas fa-address-book" data-toggle="modal" data-target="#exampleModalCenter{{$doctor->id}}"></i> --}}
                                

                                  {{-- user profile modal --}}
                                  <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter{{$doctor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="content">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card">
                                      {{-- <div class="card-header">
                                        <h5 class="title">Edit Profile</h5>
                                      </div> --}}
                                      <div class="card-body" >
                                        <div class="author ">
                                          <a  href="#">
                                            <img src="{{asset('full/'.$doctor->user->image)}}" class="mx-auto d-block" alt="" width="60px"; height="60px" style="border-radius: 60px">
                                          <h5 class="text-center" style="font-size: larger" >Doctor {{$doctor->user->name}}</h5>
                                          </a>
                                        </div>
                                        <form>
                                          <div class="row">
                                            <div class="col-md-5 pr-1">
                                              <div class="form-group">
                                                <label>Gender</label>
                                              <input type="text" class="form-control"  disabled placeholder="Company" value="{{$doctor->gender}}">
                                              </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                              <div class="form-group">
                                                <label>Salary</label>
                                              <input type="text" class="form-control" disabled value="{{$doctor->salary}}">
                                              </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" disabled value="{{$doctor->email}}">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6 pr-1">
                                              <div class="form-group">
                                                <label>Name</label>
                                              <input type="text" class="form-control" disabled  value="{{$doctor->user->name}}">
                                              </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                              <div class="form-group">
                                                <label>D.O.B</label>
                                              <input type="text" class="form-control" disabled value="{{$doctor->dob}}">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label>Address</label>
                                              <input type="text" class="form-control" disabled value="{{$doctor->address}}">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-4 pr-1">
                                              <div class="form-group">
                                                <label>City</label>
                                              <input type="text" class="form-control" disabled placeholder="city"  value="{{$doctor->city}}">
                                              </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                              <div class="form-group">
                                                <label>Specialization</label>
                                                <input type="text" class="form-control" disabled placeholder="Country" value="{{$doctor->specialization}}">
                                              </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                              <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="number" class="form-control" disabled placeholder="Postal code" value="{{$doctor->phone_number}}">
                                              </div>
                                            </div>
                                          </div>
                                        
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                          </div>
                    

                                <td>

                                  {{-- modal for mailing to users --}}
                                  <!-- Modal -->
                                  <div class="modal fade" id="mail{{$doctor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Emailing</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form action="{{url('/doctorsMail/'.$doctor->id)}}" method="POST">
                                            @csrf

                                          <p>Mail to Doctor {{$doctor->name}}</p>
                                            
                                          <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Type Email</label>
                                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                          </div>
                                            <button type="submit" class="btn btn-primary">Send</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div></td>
                          </tr>
                          @endforeach
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          

                  
                  {{-- modal for creating a doctor table --}}
          <div class="modal fade" id="addDoctor" tabindex="-1" aria-labelledby="addDoctor" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="addDoctor">Add Doctor</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                          <form method="POST"  enctype="multipart/form-data" files=true action="{{ url('/createDoctor') }}">
                                  @csrf
                                  @method('PUT')

                                  <div class="form-group">
                                    <label>FullName</label>
                                    <input type="text" name="name" class="form-control"  required>
                                </div>
                
                                <div class="form-radio">
                                    <label class="label-radio"> Select Your Gender</label>
                                    <div class="radio-item-list">
                                        <span class="radio-item">
                                            <input type="radio" class ="inputa" name="Gender" value="male" id="male" />
                                            <label for="male">Male</label>
                                        </span>
                                        <span class="radio-item active">
                                            <input type="radio" class ="inputa" name="Gender" value="female" id="female" checked="checked" />
                                            <label for="female">Female</label>
                                        </span>
                                    </div>
                                </div>
                
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" name="phone_number" class="form-control"  required>
                                </div>
                
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control"  required>
                                </div>
                
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="City" placeholder="City" required>
                                </div>

                                <div class="input-group mb-3">  
                                  <label class="input-group-text" for="doctor_id">Department</label>
                                  <select class="custom-select" id="department_id" name="department_id">
                                    @foreach ($departments as $department)
                                    <option value="{{ $department->id}}"> {{$department->name}} </option>
                                    @endforeach 
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label for="_specialization">Specialization</label>
                                  <select class="form-control" id="Select" name="specialization" required>
                                      <option value="Surgery" selected>General Surgeion</option>
                                      <option value="Dentist">Dentist</option>
                                      <option value="Optician">Optician</option>
                                      <option value="Optician">Nuerosurgeion</option>
                                      <option value="Optician">Gyneocology</option>
                                      <option value="Optician">family Planing</option>
                                      <option value="Optician">Cardiology</option>
                                  </select>
                              </div>
                                
                                <div class="form-group">
                                    <label for="Address1" class="form-label">Address Line</label>
                                    <input type="text" class ="form-control" name="Address" id="Address" value="" required />
                                </div>
                
                                <div class="form-group">                    
                                    <label for="dob" class="form-label">Birth Date</label>
                                    <input class ="form-control" type="date" name="dob" id="dob" value="" placeholder="" required />
                                </div>

                                <div class="form-group">                    
                                  <label for="dob" class="form-label">Date Employed</label>
                                  <input class ="form-control" type="date" name="employed" id="dob" value="" placeholder="" required />
                              </div>
                
                                <div class="form-group">
                                    <label for="salary" class="form-label">Salary</label>
                                    <input type="text" class ="form-control" name="salary" id="salary" value="" required />
                                </div>
                
                                <div class="file-group mt-2" >
                                  <label for="file-upload" class="custom-file-upload">choose file</label>
                                <input id="file-upload" type="file"  name="image"  id="image"/>
                              </div>

                          
                              </div>
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </form>
                    </div>
                </div>
                </div>
          

        @endsection


        @section('script')

          <script>
            

          </script>

        @endsection
