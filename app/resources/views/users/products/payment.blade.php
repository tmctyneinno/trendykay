@extends('layouts.app')
@section('content')
@section('title', $title)

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{route('index')}}" rel="nofollow">Home</a>
                <span></span> {{$title}}
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
                </div>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="divider mt-50 mb-50"></div>
                </div>
            </div>
           
            <form action="{{ route('pay.checkout')}}" method="POST">
            @csrf
           
            <div class="row">
                
                <div class="col-md-6">
                    <div class="mb-25">
                        <h4>Customer Information</h4>
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
                           
                            <input type="email" name="email" maxlength="64"@auth value=" {{auth()->user()->email}}" @endauth value="{{old('email')}}" class="@error('email') is-invalid @enderror" placeholder="Email" @auth readOnly @endauth> 
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
                            <input required type="text" name="zip_code"   @if(isset($address->zip_code)) value="{{$address->zip_code}}" @endif value="{{old('zip_code')}}"   class="@error('zip_code') is-invalid @enderror" placeholder="Zip Code" @auth readOnly @endauth>	
										
                        </div>
                        <div class="form-group">
                            <input required type="text" name="country"  @if(isset($address->country)) value="{{$address->country}}" @endif value="{{old('country')}}"   class="@error('country') is-invalid @enderror" placeholder="Country" @auth readOnly @endauth>
                            @error('country')
                                <span class="btn-danger" role="alert">
                                <small> {{$message}}</small>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input required type="text" name="address"@if(isset($address->address)) value="{{$address->address}}" @endif value="{{old('address')}}"  class="@error('address') is-invalid @enderror"placeholder="Address" @auth readOnly @endauth>
                                @error('address')
                                    <span class="btn-danger" role="alert">
                                    <small> {{$message}}</small>
                                    </span>
                                @enderror
                        </div>
                        
                </div>
                <div class="col-md-6">
                    <div class="order_review">
                        <div class="mb-20">
                            <h4>Orders Details</h4>
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
                        
                        <button type="submit" class="btn btn-fill-out btn-block mt-30">Complete Payment</button>
                    </div>
                </div>
               
            </div>
            </form>
        </div>
    </section>
</main>




@endsection