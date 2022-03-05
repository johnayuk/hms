
@extends('layouts.master')


@section('title')
{{ Auth::user()->name }}
@endsection


@section('content')

        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4> <a href="##"  data-toggle="modal" data-target="#addDepartment">
                    {{-- <i class="now-ui-icons"></i> --}}
                    {{-- <p style="color:#007bff">Add A Department</p> --}}
                    {{-- <i class="fa fa-plus" style="color:#007bff" aria-hidden="true"></i> --}}
                    <i class="fa fa-building fa-1x text-info" aria-hidden="true"></i>
                  </a></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    
                    <table id="myTable" class="table">
                      <thead class=" text-primary">
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                      </thead>

                      <tbody>
                        @foreach ($departments as $department)
                         <tr>
                         <td>{{ $department->name}}</td>
                         <td>{{ $department->created_at}}</td>
                         <td>{{ $department->updated_at}}</td>

                         <td> <div class="modal fade" id="exampleModal{{$department->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                              <form  action="{{url('/update_department/'.$department->id)}}" method="post">
                                                  @csrf
                                                  @method('PUT')
          
                                                  <h3>Edit User : {{$department->id}}</h3>
                                                  <div class="form-group">
                                                    <label for="name">Name</label>
                                                  <input type="text" name="name" id="name" value="{{$department->name}}" class="form-control">
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
                                            {{-- <button type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#exampleModal{{$department->id}}">Edit</button> --}}
                                            <i class="fas fa-edit" style="color: rgb(54, 54, 253); font-size: 20px" data-toggle="modal" data-target="#exampleModal{{$department->id}}"></i>
                                      {{-- </td> --}}
                         {{-- <td> --}}
                         <div class="modal fade" id="staticBackdrop{{$department->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Delete {{$department->name}}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form id="delete_modal" action="{{url('/deleteDpartment/'.$department->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                              <h3>Are you sure want to delete {{$department->name}} Records ?</h3>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                  </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    {{-- <button type='button' class="btn btn-danger btn-sm" data-toggle="modal" data-target="#staticBackdrop{{$department->id}}">Delete</button> --}}
                    <i class="fa fa-trash ml-3" style="color: rgb(231, 81, 61); font-size: 20px" data-toggle="modal" data-target="#staticBackdrop{{$department->id}}" aria-hidden="true"></i>
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
          {{-- @foreach($hostel->hostelDetails->attachments()->limit(3)->get() as $photos) --}}
          {{-- @foreach($hostel->hostelDetails->attachments->take(3) as $photos) --}}

          
          
  <div class="modal fade" id="addDepartment" tabindex="-1" aria-labelledby="addDepartment" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addDepartment">Add Department</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                  <form method="POST"  action="{{ url('/createDepartment') }}">
                          @csrf
                          @method('PUT')
                        {{-- <div class="form-group">
                          <label for="_name">Name</label>
                          <input for="name" type="text" name="name" class="form-control"  required>
                        </div> --}}

                        <div class="form-group">
                          <label for="_name">Name</label>
                          <select class="form-control" id="Select" name="name">
                              <option value="Surgical" selected>Surgical</option>
                              <option value="Administration">Administration</option>
                              <option value="Pharmacy">Pharmacy</option>
                          </select>
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
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );

  </script>
@endsection
