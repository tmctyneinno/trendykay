@extends('layouts.app')

@section('content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{route('index')}}" rel="nofollow">Home</a>
                <span></span> Login / Register
            </div>
        </div>
    </div>
    <section class="pt-50 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 m-auto">
                    <div class="row">
                        @if(Cart::count()> 0) 
                            <div class="form-group"> 
                                <a href="{{ route('user.checkoutout') }}" class="btn btn-fill-out btn-block hover-up" >Continue as Guest</a>
                            </div> 
                        @else  
                            
                        @endif
                       
                        <div class="col-lg-6">
                            <div class="login_wrap widget-taber-content p-20 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Login</h3>
                                    </div>
                                    <form method="post" action={{route('login')}} novalidate="novalidate" method="post">
                                        @csrf
                                        <div  class="form-group @error('email') is-invalid @enderror">
                                            <input type="text"  name="email" id="signinEmail"
                                            placeholder="Your Email"
                                            data-msg="Please enter a valid email address."
                                            data-error-class="u-has-error"
                                            data-success-class="u-has-success"
                                            required>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                        </span>
                                        @enderror

                                        <div class="form-group  @error('password') is-invalid @enderror">
                                            <input required type="password" name="password"
                                             id="signinSrPasswordExample2" 
                                             data-msg="Your password is invalid. Please try again."
                                             data-error-class="u-has-error"
                                             data-success-class="u-has-success"
                                             placeholder="Password">
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        <div class="login_footer form-group">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" id="rememberCheckbox" name="rememberCheckbox" data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                    <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                                </div>
                                            </div>
                                            <a class="text-muted" href="#">Forgot password?</a>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up" >Log in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="login_wrap widget-taber-content p-20 background-white border-radius-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Create an Account</h3>
                                    </div>
                                    <p class="mb-20 font-sm">
                                        Create new account today to get personalized shopping experience.
                                    </p>
                                    <a href="{{route('register')}}" class="mb-20 btn btn-fill-out btn-block hover-up" name="login">Submit &amp; Register</a>
                                    
                                    <p class="mb-10 font-md bold" style="font-weight: bold">
                                        Sign up today and you will be able to 
                                    </p>

                                    
                                     <ul class="ml-10 list-group list-group-borderless">
                                        <li class="px-2"><i class="fas fa-check mr-2 text-green font-size-16"></i> Speed your way through checkout</li>
                                        <li class=" px-2"><i class="fas fa-check mr-2 text-green font-size-16"></i> Track your orders easily</li>
                                        <li class=" px-2"><i class="fas fa-check mr-2 text-green font-size-16"></i> Keep a record of all your purchases</li>
                                    </ul>
                                  
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
