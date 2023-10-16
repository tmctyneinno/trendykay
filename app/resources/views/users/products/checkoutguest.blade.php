@extends('layouts.app')
@section('content')

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{route('index')}}" rel="nofollow">Home</a>
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <section class="mt-20 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-sm-15">
                       
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
                    <div class="col-lg-6">
                        
                        <div class="panel-collapse collapse coupon_form " id="coupon">
                            <div class="panel-body">
                                <p class="mb-30 font-sm">If you have a coupon code, please apply it below.</p>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Coupon Code...">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn  btn-md" name="login">Apply Coupon</button>
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
                {{-- {{Form::open(['action'=>'CheckoutController@store', 'method'=>'post', 'class'=>'js-validate', 'novalidate'=>'novalidate'])}} --}}
                     
                <div class="row">
                      
                    <div class="col-md-6">
                        <div class="order_review"> 
                            <div class="row">
                                <div class="col-lg-6 mb-sm-15">
                                    <div class="mb-10">
                                        <h4>User Details </h4>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6 mb-sm-15">
                                    <div class="mb-10">
                                        <a href="#"><i class="fi-rs-edit mr-10"></i>Change Address </a>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <tbody>
                                        @if(count($shipping) > 0)
                                        <tr>
                                            <td class="flex">
                                                @foreach($shipping as $address)
                                                <h5><a href="#">Receiver:</a><span class="product-qty" style="font-weight: bold">{{$address->receiver_name}} </span></h5>
                                                <br>
                                                <h5><a href="#">Address:</a><span class="product-qty" style="font-weight: bold">{{$address->address}} </span></h5> 
                                                <br>

                                                <h5><a href="#">City:</a><span class="product-qty" style="font-weight: bold"> {{$address->city . $address->state}} </span></h5> 
                                                <br>

                                                <h5><a href="#">Email:</a><span class="product-qty" style="font-weight: bold"> {{$address->receiver_email}} </span></h5> 
                                                <br>

                                                <h5><a href="#">Phone:</a><span class="product-qty" style="font-weight: bold"> {{$address->receiver_phone}} </span></h5> 
                                                <br>
                                                @endforeach
                                            </td>
                                        </tr>
                                        @else
                                            @if ($guestRecord)
                                                <h5><a href="#"  style="display: none">Receiver:</a><span class="product-qty" style="display: none">{{$guestRecord->id}} </span></h5>
                                                <h5><a href="#">Name:</a><span class="product-qty" style="font-weight: bold">{{$guestRecord->receiver_name}} </span></h5>
                                                <br>
                                                <h5><a href="#">Address:</a><span class="product-qty" style="font-weight: bold">{{$guestRecord->address}} </span></h5> 
                                                <br>

                                                <h5><a href="#">City:</a><span class="product-qty" style="font-weight: bold"> {{$guestRecord->city . $guestRecord->state}} </span></h5> 
                                                <br>

                                                <h5><a href="#">Email:</a><span class="product-qty" style="font-weight: bold"> {{$guestRecord->receiver_email}} </span></h5> 
                                                <br>

                                                <h5><a href="#">Phone:</a><span class="product-qty" style="font-weight: bold"> {{$guestRecord->receiver_phone}} </span></h5> 
                                                <br>
                                            @else
                                                <tr>
                                                    <td><strong> You do not have any Shipping Address yet</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="btn-popup pull-right">
                                                            <button type="button" class="btn btn-primary btn-xs" 
                                                            data-bs-toggle="modal" data-bs-target="#quickViewModal">Add a Shipping Address</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                           
                                        @endif
                                    </tbody>
                                </table>                        
                            </div>
                        </div>
                        <div class="mb-25 mt-30">
                            <div class="payment_method">
                                <div class="mb-25">
                                    <h5>Payment Method</h5>
                                </div>
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_method" id="exampleRadios3" checked="" value="card">
                                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Pay With Debit Card</label>
                                        <div class="form-group collapse in" id="bankTranfer">
                                            <p class="text-muted mt-5">Please note that you will pay for shipping fee before item is shipped to you on this method </p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <a href="{{route('carts.index')}}" class=" btn-fill-out btn-block mt-30" style="font-weight: bold">Modify Cart</a>
                           
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        {{Form::open(['action'=>'PaymentController@initiatePayCheckoutguest', 'method'=>'post', 'class'=>'js-validate', 'novalidate'=>'novalidate'])}}
    
                            <div class="mb-20">
                                <h4>Your Orders ({{count($cart)}} items)</h4>
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
                                        @foreach($cart as $carts)
                                           
                                        <tr>
                                            <td class="image product-thumbnail"><img src="{{asset('/images/products/'.$carts->model->image )}}" alt="#"></td>
                                            <td>
                                                <h5><a href="#">{{$carts->model->name}}</a></h5> <span class="product-qty">x {{$carts->qty}}</span>
                                                <p class="font-xs">Sizes: {{ $carts->options->size }}  </p>
                                            </td>
                                            <td>C${{number_format($carts->price * $carts->qty, 2)}}</td>
                                        </tr>
                                        @endforeach
                                        @php
                                            $priceTotal = Cart::priceTotalFloat();
                                            $tax = $priceTotal * 0.12; // Calculate the tax amount (12% of the subtotal)
                                            $total = $priceTotal + $tax; // I added the tax to the subtotal to get the total price
                                        @endphp
                                        @php
                                            $subTotal = Cart::subTotal();
                                            $tax = $subTotal * 0.12; // Calculate the tax amount (12% of the subtotal)
                                            $subtotalPrice = $subTotal + $tax; // I added the tax to the subtotal to get the total price
                                        @endphp
                                        @if ($guestRecord)
                                            <input type="text" name="name" value="{{ $guestRecord->receiver_name }}" >
                                            <input type="text" name="email" value="{{ $guestRecord->receiver_email }}" >
                                            <input type="text" name="amount" value="{{$total}}">
                                        @endif
                                        <tr>
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
                                            <th>Total</th>
                                            <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">C${{number_format($total, 2)}}</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                            <button type="submit" class="btn btn-fill-out btn-block mt-10">Process to Payment</button>
                        </div>
                        {{Form::close()}}
                    </div>
                  
                    
                </div>
                {{-- {{Form::close()}} --}}
            </div>
        </section>

        <!-- Quick view -->
        <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Add new Address</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-10 m-auto">
                                {{Form::open(['action'=>'CheckoutController@modalguest', 'method'=>'post', 'class'=>'js-validate', 'novalidate'=>'novalidate'])}}
                                <div class="form-group">
                                    <input type="text" required="" name="name" placeholder="Name *" id="validationCustom01">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" name="address" placeholder="Address *" id="validationCustom01">
                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="city" placeholder="city" id="validationCustom01" >
                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="state" placeholder="State" id="validationCustom01" >
                                </div>
                                <div class="form-group">
                                    <input required="" type="email" name="email" placeholder="Email Address" id="validationCustom01" >
                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="phone" placeholder="Phone" id="validationCustom01" >
                                </div>
                                                           
                                <div class="modal-footer">
                                    <button class="btn btn-fill-out btn-block" name="modal" type="submit">Save</button>
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            {{Form::close()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


@endsection


