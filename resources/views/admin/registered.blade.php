@extends('layouts.master')


@section('title')
Registered Roles
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
                <h4> <a href="##"  data-toggle="modal" data-target="#addpatientmodal">
                  {{-- <i class="now-ui-icons"></i> --}}
                  {{-- <p style="color:#007bff">Add Users</p> --}}
                 {{-- <i class="fa fa-plus" style="color:#007bff" aria-hidden="true"></i> --}}
                 <i class="fa fa-user-circle text-info fa-2x" aria-hidden="true"></i>
                </a></h4>
                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                @endif
              </div>
              <div class="card-body">

               

                <div class="table-responsive">
                  <table id="myTable" class="table">
                    <thead class=" ">
                      <th>User Type</th>
                      <th>Name</th>
                      {{-- <th>LastName</th> --}}
                      <th>email</th>
                      {{-- <th>phone</th>
                      <th>Image</th> --}}
                      <th>Action</th>
                    
                     
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        
                       <tr>
                        <td>{{$user->role}}</td>
                       <td>{{$user->name}}</td>
                       {{-- <td>{{$user->lastName}}</td> --}}
                       <td>{{$user->email}}</td>
                       {{-- <td><img src="{{('full/'.$user->image)}}" alt="" width="60px"; style="border-radius: 60px"></td> --}}
                    <td>
                    

                        <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                                        <form  enctype="multipart/form-data" files=true  action="{{url('/update-users/'.$user->id)}}" method="post">
                                            @csrf
                                            @method('PUT')

                                            <h3>Edit User : {{$user->name}}</h3>
                                            <div class="form-group">
                                              <label for="name">Name</label>
                                            <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control">
                                            </div>

                                            

                                            <div class="form-group">
                                              <label for="email">Email</label>
                                            <input type="email" name="email" id="email" value="{{$user->email}}" class="form-control">
                                            </div>


                                            <div class="file-group mt-2" >
                                              <label for="file-upload" class="custom-file-upload">choose file</label>
                                            <input id="file-upload" type="file" value="{{$user->image}}" name="image"  id="image"/>
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
                                      <i class="fas fa-edit p-0 m-0" data-toggle="modal" data-target="#exampleModal{{$user->id}}" style="color: blue"></i>
                                  
                      {{-- </td> --}}

                      {{-- <td> --}}
                        <div class="modal fade" id="staticBackdrop{{$user->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form id="delete_modal" action="{{url('/delete_user/'.$user->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                <h3>Are you sure want to delete ?</h3>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <i class="fa fa-trash ml-3" style="color: red" class="text-danger" data-toggle="modal" data-target="#staticBackdrop{{$user->id}}" aria-hidden="true"></i>
                      {{-- <button type='button' class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop{{$user->id}}">Delete</button> --}}

                      </td>
                
                       </tr>
                       @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

       
      
        <div class="modal fade" id="addpatientmodal" tabindex="-1" aria-labelledby="addpatientmodalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addpatientmodalLabel">Add Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" files=true action="{{ url('createUser') }}">
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
                      <input type="number" name="phone-number" class="form-control"  required>
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
                  
                  <div class="form-group">
                      <label for="Address1" class="form-label">Address Line</label>
                      <input type="text" class ="form-control" name="Address1" id="Address1" value="" required />
                  </div>
  
                  <div class="form-group">                    
                      <label for="dob" class="form-label">Birth Date</label>
                      <input class ="form-control" type="date" name="dob" id="dob" value="" placeholder="" required />
                  </div>
  
                  <div class="form-group">
                      <label for="Username" class="form-label">Username</label>
                      <input type="text" class ="form-control" name="Username" id="Username" value="" required />
                  </div>
  

                  <div class="file-group ">
                      <label for="file-upload" class="custom-file-upload">upload image</label>
                      <input id="file-upload" type="file" name="image"  id="image"/>
                  </div>
  
  
                  <button type="submit" class="btn btn-success">Sign up</button>
                  <a href="{{ url('login') }}" class="btn btn-primary">Sign in</a> 
              </form>
                  </div>
               </div>
              </div>






@endsection


@section('script')
<script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );

  </script>
@endsection



