<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Forms</title>

    <!-- Icons font CSS-->
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
  
    <!-- Main CSS-->
    <link href="{{asset('css/register.css')}}" rel="stylesheet" media="all">
  
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration</h2>
                    <form method="POST" method="{{route('register')}}">
                    @csrf
                        <div class="input-group">
                              <input id="name" type="text" class="input--style-3{{$errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Name" value="" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif </div>
                       <div class="input-group">
                                <input id="email" type="email" placeholder="Email" class="input--style-3{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif 
                                </div>
                        <div class="input-group">
                                  <input id="password" type="password" placeholder="password" class="input--style-3{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                       </div>
                       <div class="input-group">
                              <label for="password-confirm">{{ __('Confirm Password') }}</label>

                              <input id="password-confirm" type="password" placeholder="Confirm Password" class="input--style-3" name="password_confirmation" required>
                          
                       </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- 
		<script src="{{asset('js/jquery.js')}}"></script>
   --}}
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->





