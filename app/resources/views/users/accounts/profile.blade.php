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
                                <div class="col-md-4">
                                    {{-- @include('includes.accountNav') --}}
                                    <div class="dashboard-menu">
                                        <ul class="nav flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link " id="dashboard-tab"  href="{{route('users.account')}}"  
                                                aria-controls="dashboard" aria-selected="false">Account details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " id="orders-tab"  href="{{route('users.orders')}}"  
                                                aria-controls="orders" aria-selected="false"><i class="fi-rs-shoppingg-bag mr-10"></i>Orders</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " id="track-orders-tab"  href="{{route('users.address')}}"  
                                                aria-controls="track-orders" aria-selected="false"><i class="fi-rs-markerr mr-10"></i>My Address Book</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link "  href="{{route('users.recentViews')}}" 
                                                ><i class="fi-rs-eyes mr-10"></i>Recently Viewed</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " id="account-detail-tab"  href="{{route('user.transactions')}}"  
                                                aria-controls="account-detail" ><i class="fi-rs-atm mr-10"></i>Card Payments</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link active" id="account-detail-tab"  href="{{route('user.account.details')}}"  
                                                aria-controls="update-detail" ><i class="fi-rs-atm mr-10"></i>Update Account</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>

                                
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