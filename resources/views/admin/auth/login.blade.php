@php
    $general_setting = DB::table('general_settings')->where('id',1)->first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    @include('admin.includes.styles')

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    @include('admin.includes.scripts')

</head>
    <body class="bg-gradient-white">
        <div class="container v-center">
            <!-- Outer Row -->
                                        <center><img src="{{ asset('public/uploads/'.$general_setting->logo) }}" alt=""  height="80" style=""> </center>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card  shadow-md my-4">
                        <div class="card-body p-0"><br><br>
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                {{---<div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url({{ asset('public/uploads/'.$general_setting->login_bg) }});"></div>--}}
                                <div class="col-lg-3"></div>
                                <div class="col-lg-11">
                                    <div class="">

                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-3">Admin Login</h1>
                                        </div>

                                        <form action="{{ route('admin.login.store') }}" class="user" method="post">
                                            @csrf
                                        

                                            <div class="input-group mb-3" style="margin-left: 20px;" >
                                                <input style = "padding: 4%"  id="email" type="email" class="form-control form-control-user" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email Address">
                                                  <div class="input-group-append">
                                                    <div class="input-group-text" >
                                                      <span class="fas fa-envelope"></span>
                                                    </div>
                                                  </div>
                                            </div>

                                            <div class="input-group mb-3" style="margin-left: 20px;">
                                                   <input style = "padding: 4%" id="password" type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                                  <div class="input-group-append">
                                                    <div class="input-group-text">
                                                      <span class="fas fa-lock"></span>
                                                    </div>
                                                  </div>
                                            </div>




                                       
                                            <button type="submit" style="margin-left: 20px;" class="btn btn-primary btn-user btn-block mb-4">Login</button>
                                        </form>
                                       
                                        <div class="text-center mb-4" >
                                            <a class="small" href="{{ route('admin.forget_password') }}">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3"></div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        @include('admin.includes.scripts-footer')

    </body>
</html>