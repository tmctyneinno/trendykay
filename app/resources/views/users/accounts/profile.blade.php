@extends('layouts.app')
@section('content')
<main  class="main">
            <!-- breadcrumb -->
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ url('pages/home') }}" rel="nofollow">Home</a>
                        <span></span>Account details
                    </div>
                </div>
            </div> 

            <section class="pt-50 pb-150">
                <div class="container">
                    <div class="row mb-8">
                        @include('includes.message')
                        <div class="col-lg-12 m-auto">
                            <div class="row">
                                @include('users.accounts.sidebar')

                                
                                <div class="col-md-8">
                                   
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                Update Details
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body border">
                                        {{Form::open(['action'=>'HomeController@updateDetails', 'method'=>'post'])}}
                                             {{csrf_field()}}
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label> Name <span class="required">*</span></label>
                                                    <input required="" class="form-control square" value="{{auth()->user()->name}}" name="name" type="text">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Old Password <span class="required">*</span></label>
                                                    <input type="password" class="form-control square" name="oldpassword" id="signupPassword" placeholder="Old Password" aria-label="Password" aria-describedby="signupPasswordLabel"
                                                    data-msg="Your password is invalid. Please try again."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input required="" class="form-control square"  value="{{auth()->user()->email}}" name="email" type="email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>New Password <span class="required">*</span></label>
                                                    <input type="password" class="form-control square" name="password" id="signupPassword" placeholder="New Password" aria-label="Password" aria-describedby="signupPasswordLabel"
                                                    data-msg="Your password is invalid. Please try again."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                                <div class="form-group col-md-6"></div>
                                                <div class="form-group col-md-6">
                                                    <label>Confirm Password <span class="required">*</span></label>
                                                    <input type="password" class="form-control square" name="password_confirmation" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel"
                                                    data-msg="Password does not match the confirm password."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-fill-out submit" name="submit" value="Submit">Update</button>
                                                </div>
                                            </div>
                                        {{Form::close()}}
                                    </div>
                                </div>
                                <!-- End Tab Content -->
                            </div>
                  

                            </div>
                        </div>
                    
                    </div>
                </div>
            </section>
</main>


@endsection