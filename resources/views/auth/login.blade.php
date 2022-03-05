<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <title>
    GoodHealth
    </title>
    <link rel="icon" href="uploads/medicine.png">
</head>
<body>


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


            <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form method="POST" action="{{url('postLogin') }}">
                    @csrf

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                    <a href="{{ url('register') }}" class="btn btn-primary">Sign up</a> 
                </form>
            </div>
            </div>
        </div>



<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>