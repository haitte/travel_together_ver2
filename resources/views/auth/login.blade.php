@extends('layouts.signinapp')

@section('content')
        <video  playsinline autoplay muted loop>
            <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
            <source src="http://thenewcode.com/assets/videos/glacier.webm" type="video/webm">
            <source src="http://thenewcode.com/assets/videos/glacier.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div class="row">
                    <div class="box left col-sm-6">
                        
                            <h1>Welcome come to travel together</h1>
                            <div class="tabs">
                                <span class="tab signin active"><a href="#signin">Sign in</a></span>
                            </div>
                            <div class="content">
                                <!--  Sign In Form  -->
                                    <div class="info signin-info">
                                        <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <input id="email" type="email" class="inpt" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                                                <label for="email">Email</label>
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                                <input id="password" type="password" class="inpt" name="password" required placeholder="Password">
                                                <label for="password">Password</label>
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            
                                        </div>
                                         <div class="form-group">
                                <!-- <div class="checkbox">
                                    <label> -->
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    
                                                        <!-- </label>                 -->
                                        </div>

                                            <div class="submit-wrap">
                                                <input type="submit" value="Sign in" class="submit">
                                                <a class="extra-link" href="{{ route('password.request') }}">Forgot your password?</a>
                                            </div>
                                        </form>
                                    </div>
                                <!--  Sign Up Form -->
                            </div>
                          
                    </div>
        
            <!--  Social Network Sign In  -->

                    <div class="box right col-sm-6">                        
                            <div class="info signin-info" >
                                <span class="sign-via">Sign in with </span>
                                <button onclick="location.href='/facebook/auth';" class="social-network facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</button>
                                <button onclick="location.href='/twitter/auth';" class="social-network twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</button>
                                <button onclick="location.href='/google/auth';" class="social-network google"><i class="fa fa-google-plus" aria-hidden="true"></i>Google</button>
                                <button onclick="location.href='/register';" class="social-network" style="color:tomato !important"><i aria-hidden="true" ></i>Register</button>
                                <button onclick="location.href='/home';" class="social-network"><i aria-hidden="true"></i>Home</button>
                            </div>
                          
                    </div>
            </div>
        </div>    
@endsection
