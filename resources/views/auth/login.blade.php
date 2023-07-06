
<!DOCTYPE html>
<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title></title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('backend/assets/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet"/>
  <link href="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/plugins/ladda/ladda.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{ asset('backend/assets/css/sleek.css') }}" />

  

  <!-- FAVICON -->
  <link href="{{ asset('backend/assets/img/icon.png') }}" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{ asset('backend/assets/plugins/nprogress/nprogress.js') }}"></script>
</head>

</head>
<div class=" py-5" style="background-image:url('{{ asset('backend/assets/img/istockphoto-476112166-170667a.jpg') }}') ;background-repeat: no-repeat;background-size: cover;">
  <div class="container px-5" style="background-image: url('{{ asset('backend/assets/img/v1.jpg') }}');box-shadow:0 0 20px #5c0099 ;">
      <div class="row gx-5 align-items-center justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-10" style="margin-left: -480px;margin-top: 32px ; margin-bottom: 32px;">
              <div class="card p-3 " style="border:none ;box-shadow:0 0 20px  #e6e6e6 ;" >
                  <div class="card-header" style="background-color:  #bf80ff;" >
                    <div class="app-brand "style="background-color:  #bf80ff;" >
                      <a href="{{ route('categories') }}" style="text-decoration-line: none;color:white;">
                      <img src="{{ asset('backend/assets/img/icon.png') }}" width="43" height="40">
                        <span class="brand-name">Shahd Admin</span>
                      </a>
                    </div>
                  </div>
                  <div class="card-body p-5">
                     
                    <h2 class="text-dark mb-2 " style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Login</h2> 
                    <p class="text-muted"style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Don't have an account yet ?
                            
                      <a  href="{{ route('register') }}" style="color:  #bf80ff;">Sign Up</a>

                    <form action="{{ route('login') }}" method="POST" style="margin-top: 57px;">
                     @csrf
                      <div class="row">
                        <div class="form-group col-md-12 mb-4">
                          <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;" >Email address</label>
                          <input type="email" name="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="Username">
                        </div>
                        <div class="form-group col-md-12 ">
                          <a  href="#" style="color: #bf80ff;text-align:right;display: inline;display: block;margin-bottom:-26px ;">Forgot Password?</a>
                          <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;" >Password</label>
                          <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password">
                        </div>
                        <div class="col-md-12">
                          <div class="d-flex my-2 mx-4 justify-content-between">
                            <div class="d-inline-block mr-3 py-2">
                              <input class="form-check-input" type="radio">
                                  <label class="form-check-label">
                                   Remember Me!
                                  </label>
                            
                            </div>
                          </div>

                          <center>
                          <button type="submit" class="btn  btn-block mb-4" style="background-color:  #bf80ff ;color: white;padding-left: 120px;padding-right: 120px;font-weight: bold;" >Login</button>
                          <p class="text-muted"style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size:11px;">****************** Or Login With ******************</p> 
                          <button type="button" class="btn btn-outline-danger px-3 mx-2 my-4"><img src="{{ asset('backend/assets/img/google.png') }}" height="20"> <h7 style="font-weight: bold;">Google</h7></button> <button type="button" class="btn btn-outline-primary px-2 mx-2"><img src="{{ asset('backend/assets/img/facebook.png') }}" height="20"> <h7 style="font-weight: bold;">FaceBook</h7></button>
                          </center>
                          </p>
                        </div>
                      </div>
                    </form>
                  </div>
                  </div>
                  <div class="col-xl-5 col-lg-6 col-md-10"></div>
          </div>
          
      </div>
  </div>
  <div class="copyright pl-0">
    <p class="text-center text-light">&copy; 2022 Copyright Admin Dashboard Bootstrap Template by
      <a class="text-light" href="http://www.iamabdus.com/" target="_blank"> Eng.Shahd Reda</a>.
    </p>
  </div>
</div>
</html>


{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
