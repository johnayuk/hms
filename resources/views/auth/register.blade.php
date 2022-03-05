<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    
    {{-- <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <h4 class="text-primary">GoodHealth <img src="uploads/medicine.png" style="height:30px" alt=""></h4>
        </a>
      </nav>

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

<div class="container">

    
    <div class="row justify-content-center" id="row2">

        
        <div class="col-md-8">
           
            <div class="" id="log2"><h2>Register To Book Appointment</h2></div>

                
            <form method="POST" enctype="multipart/form-data" files=true action="{{ url('create') }}">
                        @csrf
                       @method('PUT')

                       <div class="form-group row">
                        <input type="hidden" name="role" value="user">
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">FirstName</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName"  required  autofocus>

                                @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">LastName</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName"  required  autofocus>

                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required  autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
       
                           <div class="file-group mt-2" >
                            <label for="file-upload" class="custom-file-upload">upload picture</label>
                            <input id="file-upload" type="file" name="image"  id="image"/>
                          </div>

            


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign Up') }}
                                </button>

                                OR <a href="{{ url('login') }}">Sign In</a> 

                            </div>
                        </div>

                    </form>
        </div>
    </div>
</div> --}}



<div class="sidenav">
    <div class="login-main-text">
       <h2>Application<br> Login Page</h2>
       <p>Login or register from here to access.</p>
    </div>
 </div>
 <div class="main">

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


        <div class="col-md-6 col-sm-12 mb-5">
        <div class="register-form">
            <form method="POST" enctype="multipart/form-data" files=true action="{{ url('create') }}">
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
                    <input type="text" name="phone-number" class="form-control"  required>
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
                    <label for="Address1" class="form-label">Address</label>
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

                <div class="form-group">
                    <label for="file-upload" class="custom-file-upload">upload image</label>
                    <input id="file-upload" type="file" name="image"  id="image"/>
                </div>


                <button type="submit" class="btn btn-success">Sign up</button>
                <a href="{{ url('login') }}" class="btn btn-primary">Sign in</a> 
            </form>
        </div>
        </div>
    </div>

 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>

{{-- 
<div class="form-group form-input">
    {{ csrf_field() }}
    <input  type="text" id="name" class ="inputa @error('name') is-invalid @enderror"
    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
    <label for="Name" class="form-label">Your Full Name</label>

    @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
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

 <div class="form-group form-input">
    <input class ="inputa" type="date" name="dob" id="dob" value="" placeholder="" required />
    
    <label for="dob" class="form-label">Birth Date</label>
    
</div>


<div class="form-group form-input">
    <input type="text" class ="inputa" name="Address1" id="Address1" value="" required />
    <label for="Address1" class="form-label">Address Line 1</label>
</div>


<div class="form-group form-input">
    <input type="text" class ="inputa" name="City" id="City" value="" required />
    <label for="City" class="form-label">City</label>
</div>

<div class="form-group form-input">
    <input type="number" class ="inputa" name="phone-number" id="phone-number" value="" required />
    <label for="phone-number" class="form-label">Phone Number [eg:- 77xxxxxxx</label>
</div>

<div class="form-group form-input">
    <input type="email"  id="email" class ="inputa @error('email') is-invalid @enderror"
    name="email" value="{{ old('email') }}" required autocomplete="email"/>
    <label for="email" class="form-label">Email</label>

    @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
</div>

<div class="form-group form-input">
    <input type="text" class ="inputa" name="Username" id="Username" value="" required />
    <label for="Username" class="form-label">Username</label>
</div>

<div class="form-group form-input">
    <input type="password"  name="password" id="password"  class ="inputa @error('password') is-invalid @enderror" name="password"
    required autocomplete="new-password" />
    <label for="Password" class="form-label" >Password</label>

    @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
</div>


<div class="form-group form-input">
        <input id="password-confirm" type="password" class ="inputa"
        name="password_confirmation" required autocomplete="new-password" />
        <label for="password_confirmation" class="form-label" >Password Confirm</label>

    </div>





<div class="form-submit">
    <input type="submit" value="Register Now" class="submit" id="submit" name="submit" />
    
    <a href="#" class="vertify-booking">Already a member? click to login</a>
</div> --}}