@extends('layouts.app2')

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
                        <div class="col-lg-6">
                            <div class="login_wrap widget-taber-content p-20 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Register</h3>
                                    </div>
                                    <form method="post" action={{route('register')}} novalidate="novalidate" method="post" class="js-validate">
                                        @csrf
                                        <div class="js-form-message form-group">
                                            <label class="form-label" for="signinSrPasswordExample2">Full Name <span class="text-danger">*</span></label>
                                            <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" name="name" id="signinEmail" placeholder="Full Name"  required
                                            data-msg="Please enter a valid email address."
                                            data-error-class="u-has-error"
                                            data-success-class="u-has-success">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="js-form-message form-group">
                                                <label class="form-label" for="signinSrPasswordExample2">Phone Number <span class="text-danger">*</span></label>
                                                <input type="text" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror" name="phone"  placeholder="Phone Number" aria-label="Phone Number"  required
                                                data-msg="Please enter a valid email address."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success">
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="js-form-message form-group">
                                                <label class="form-label" for="signinSrPasswordExample2">Email <span class="text-danger">*</span></label>
                                                <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
                                                data-msg="Please enter a valid email address."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="js-form-message form-group">
                                            <label class="form-label" for="signinSrPasswordExample2">Password <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="signinSrPasswordExample2" placeholder="Password" aria-label="Password" required
                                            data-msg="Your password is invalid. Please try again."
                                            data-error-class="u-has-error"
                                            data-success-class="u-has-success">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <!-- End Form Group -->
                                        <!-- Comfirm Password -->
                                        <div class="js-form-message form-group">
                                            <label class="form-label" for="signinSrPasswordExample2">Re-enter Password <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control  @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="signinSrPasswordExample2" placeholder="Re-enter Password" aria-label="Password" required
                                            data-msg="Your password is invalid. Please try again."
                                            data-error-class="u-has-error"
                                            data-success-class="u-has-success">
                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <!-- End Comfirm Password -->

                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up" >Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="login_wrap widget-taber-content p-20 background-white border-radius-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Already have an Account?</h3>
                                    </div>
                                    <p class="mb-20 font-sm">
                                        Login to your account
                                    </p>
                                    <a href="{{route('login')}}" class="mb-20 btn btn-fill-out btn-block hover-up" >Click here to Login</a>
                                    
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
