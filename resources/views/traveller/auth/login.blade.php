@extends('layouts.app')

@section('content')
<!-- 
<div class="banner-slider" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_login) }})">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1>{{ TRAVELLER_LOGIN }}</h1>
        </div>
    </div>
</div> -->
<!-- 
<div class="login-area bg-area pt_80 pb_80">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="mx-auto w-400">
                <div class="login-form">
                    <form action="{{ route('traveller.login.store') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group mb-3">
                                <label for="">{{ EMAIL_ADDRESS }}</label>
                                <input type="text" class="form-control" name="traveller_email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">{{ PASSWORD }}</label>
                                <input type="password" class="form-control" name="traveller_password">
                            </div>

                            @if($g_setting->google_recaptcha_status == 'Show')
                            <div class="form-group mb-3">
                                <div class="g-recaptcha" data-sitekey="{{ $g_setting->google_recaptcha_site_key }}"></div>
                            </div>
                            @endif

                            <button type="submit" class="btn btn-primary" name="form1">{{ LOGIN }}</button><a href="{{ route('traveller.forget_password') }}" class="forget-password-link">{{ FORGET_PASSWORD }}</a>
                            <div class="new-user mt_10">
                                <a href="{{ route('traveller.registration') }}">{{ NEW_USER_MAKE_REGISTRATION }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 -->
<!-- <hr> -->

  <div class="container v-center">
            <!-- Outer Row -->

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card shadow-md my-4">
                        <div class="card-body p-0"><br>
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                               
                              
                                <div class="col-lg-11">
                                    <div class="p-4">

                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4"> Login</h1>
                                        </div>

                                        <form action="{{ route('traveller.login.store') }}" class="user" method="post">
                                            @csrf
                                        

                                            <div class="input-group mb-3" style="margin-left: 20px;" >
                                                <input id="email"  style = "padding: 3%" type="email" class="form-control form-control-user" name="traveller_email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email Address">
                                                  <div class="input-group-append" >
                                                    <div class="input-group-text" style="height:40px;" >
                                                      <span class="fas fa-envelope"></span>
                                                    </div>
                                                  </div>
                                            </div>

                                            <div class="input-group mb-3" style="margin-left: 20px;" >
                                                   <input  id="password"   style = "padding: 3%" type="password" class="form-control form-control-user" name="traveller_password" placeholder="Password">
                                                  <div class="input-group-append">
                                                    <div class="input-group-text" style="height:40px;" >
                                                      <span class="fas fa-lock"></span>
                                                    </div>
                                                  </div>
                                            </div>




                                       
                                            <button type="submit" style="margin-left: 20px;"  class="btn btn-primary" name="form1">{{ LOGIN }}</button>
                                            <a href="{{ route('traveller.forget_password') }}" class="forget-password-link">{{ FORGET_PASSWORD }}</a>
                                        </form>
                                       
                                       
                                    </div>
                                </div>
                                <div class="col-lg-3"></div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
 
@endsection
