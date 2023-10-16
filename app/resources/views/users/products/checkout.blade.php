@extends('layouts.app')
@section('content')
@section('title', $title)

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{route('index')}}" rel="nofollow">Home</a>
                <span></span> Checkout
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-sm-15">
                    <div class="toggle_info">
                        <span><i class="fi-rs-user mr-10"></i><span class="text-muted">Already have an account?</span> <a href="{{route('login')}}" >Click here to login</a></span>
                    </div>
                    <div class="panel-collapse collapse login_form" id="loginform">
                        <div class="panel-body">
                            <p class="mb-30 font-sm">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Username Or Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                            <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-md" name="login">Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="divider mt-50 mb-50"></div>
                </div>
            </div>
           
            <form action="{{ route('checkout.store')}}" method="POST" id='form1'>
            @csrf
           
            <div class="row">
                
                <div class="col-md-6">
                    <div class="mb-25">
                        <h4>Continue Shopping</h4>
                    </div>
                    <span class="alert alert-{{Session::get('alert')}}" role="alert"> 
                        <span style="padding:5px">	{!! Session()->get('message')!!} 
                    </span>
                    <br>
                        <div class="form-group">
                            
                            <input type="text" name="name" maxlength="64"@auth value=" {{auth()->user()->name}}" @endauth value="{{old('name')}}" class="@error('name') is-invalid @enderror" placeholder="Full Name" @auth readOnly @endauth> 
                                @error('name')
                                    <span class="btn-danger" role="alert">
                                    <small> {{$message}}</small>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input required type="email" name="email" @auth  value="{{auth()->user()->email}}" @else value="{{old('email')}}"  @endauth class="@error('email') is-invalid @enderror" placeholder="Email Address" @auth readOnly @endauth>
                            @error('email')
                                <span class="btn-danger" role="alert">
                                <small> {{$message}}</small>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group"> 
                            <input required type="text" name="phone" @auth value=" {{auth()->user()->phone}} " @else value="{{old('phone')}}" @endauth class="@error('phone') is-invalid @enderror" placeholder="Phone number" @auth readOnly @endauth>
                            @error('phone')
                                <span class="btn-danger" role="alert">
                                <small> {{$message}}</small>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input required type="text" name="zip_code"   @if(isset($address->zip_code)) value="{{$address->zip_code}}" @endif value="{{old('zip_code')}}"   class="@error('zip_code') is-invalid @enderror" placeholder="Zip Code">	
										
                        </div>
                        <div class="form-group">
                            <input required type="text" name="address"@if(isset($address->address)) value="{{$address->address}}" @endif value="{{old('address')}}"  class="@error('address') is-invalid @enderror"placeholder="Address">
                                @error('address')
                                    <span class="btn-danger" role="alert">
                                    <small> {{$message}}</small>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input required type="text" name="city"@if(isset($address->city)) value="{{$address->city}}" @endif value="{{old('city')}}"  class="@error('city') is-invalid @enderror"placeholder="City">
                                @error('city')
                                    <span class="btn-danger" role="alert">
                                    <small> {{$message}}</small>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input required type="text" name="country"  @if(isset($address->country)) value="{{$address->country}}" @endif value="{{old('country')}}"   class="@error('country') is-invalid @enderror" placeholder="Country">
                            @error('country')
                                <span class="btn-danger" role="alert">
                                <small> {{$message}}</small>
                                </span>
                            @enderror
                        </div>
                        
                        
                </div>
                <div class="col-md-6">
                    <div class="order_review">
                        <div class="mb-20">
                            <h4>Order Details</h4>
                        </div>
                        <div class="table-responsive order_table text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($carts as $carts)
                                        <tr>
                                            <td class="image product-thumbnail">
                                                <img src="{{asset('/images/products/'.$carts->model->image )}}" alt="#">
                                            </td>
                                            <td><i class="ti-check-box font-small text-muted mr-10"></i>
                                                <h5><a href="shop-product-full.html">{{$carts->model->name}}</a></h5> <span class="product-qty">x {{$carts->qty}}</span>
                                                <p class="font-xs">Size: {{ $carts->options->size }}  </p>
                                            </td>
                                            <td>C${{number_format($carts->price * $carts->qty, 2)}}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        @php
                                            $subTotal = Cart::subTotal();
                                        // $tax = $subTotal * 0.12; // Calculate the tax amount (12% of the subtotal)
                                            $subtotalPrice = $subTotal; // I added the tax to the subtotal to get the total price
                                        @endphp
                                        <th>SubTotal</th>
                                        <td class="product-subtotal" colspan="2">C${{number_format($subtotalPrice, 2)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td colspan="2"><em>Standard Shipping</em></td>
                                    </tr>
                                    <tr>
                                        <th>Tax</th>
                                        <td colspan="2"><em> 12%</em></td>
                                    </tr>
                                    <tr>
                                        @php
                                            $priceTotal = Cart::priceTotalFloat();
                                            $tax = $priceTotal * 0.12; // Calculate the tax amount (12% of the subtotal)
                                            $total = $priceTotal + $tax; // I added the tax to the subtotal to get the total price
                                        @endphp
                                        <th>Total</th>
                                        
                                        <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">C${{number_format($total, 2)}}</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                        <div class="payment_method">
                            <div class="mb-25">
                                <h5>Payment</h5>
                            </div>
                            <div class="payment_option">
                                
                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5" checked="">
                                    <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Paypal</label>
                                    <div class="form-group collapse in" id="paypal">
                                        <p class="text-muted mt-5">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-fill-out btn-block mt-30">Place Order</button>
                    </div>
                </div>
               
            </div>
            </form>
        </div>
    </section>
</main>


@endsection