@extends('layouts.app2')
@section('content')
<main class="main">
    <div class="page-header breadcrumb-wrap mb-20">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{route('checkout.index')}}" rel="nofollow">Checkout</a>
                <span></span> Order Details
            </div>
        </div>
    </div>
    <hr>
    <section class="mt-20 mb-50">
        <div class="container">
            @include('includes.message')
            <br>
            <div class="mb-30">
                <h4 class="text-center">Order Details</h4>
               
            </div>
            <div class="row mt-20">
                <div class="col-md-6">
                    <div class="order_review">
                        <div class="row">
                            <div class="col-lg-6 mb-sm-15">
                                <div class="mb-10">
                                    <h4>Shipping Address</h4>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive order_table text-center">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="flex">

                                            <h5><a href="#">Order No:</a><span class="product-qty" style="font-weight: bold">{{$orders->order_No}}</span></h5>
                                            <br>
                                            <h5><a href="#">Total Amount:</a><span class="product-qty" style="font-weight: bold">C${{$orders->amount <= 0 ? 0 : number_format($orders->amount,2)}}</span></h5>
                                            <br>
                                            <h5><a href="#">Placed On:</a><span class="product-qty" style="font-weight: bold">{{$orders->created_at}}</span></h5>
                                            <br>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                        <div class="row">
                            <div class="col-lg-6 mb-sm-15">
                                <div class="mb-10">
                                    <h4>Payment Information</h4>
                                </div>
                            </div>
                        </div> 
                        <div class="table-responsive order_table text-center">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="flex">
                                            @if(isset($orders->external_ref))
                                                <h5><a href="#">Payment Type:</a><span class="product-qty" style="font-weight: bold">Card Payment</span></h5>
                                                <br>
                                                <h5><a href="#">Payment Reference: </a><span class="product-qty" style="font-weight: bold">{{$orders->external_ref}}</span></h5>
                                                <br>
                                            @endif
                                            <h5><a href="#">Transaction Reference: </a><span class="product-qty" style="font-weight: bold">{{$orders->transaction_ref}}</span></h5>
                                            <br>
                                            <h5><a href="#">Amount:</a><span class="product-qty" style="font-weight: bold">C${{number_format($orders->amount)}}</span></h5>
                                            <br>
                                            <h5><a href="#">Payment Status:</a>
                                                @if($orders->is_paid == 1) <span class="badge badge-success ">&nbsp; Success &nbsp;</span>
                                                @else <span  class="badge badge-warning ">Pending</span>
						                        @endif</span>
                                            </h5>
                                            <br>
                                            <h5><a href="#">Delivery Status:</a>
                                                @if($orders->is_delivered == 1) <span class="badge badge-success ">&nbsp; Delivered &nbsp;</span>
                                                @else <span class="badge badge-warning ">Pending </span> 
                                                @endif</span><br>
                                            </h5>
                                            <br>

                                        </td>
                                    </tr>
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
                                    <input class="form-check-input" required="" type="radio" name="payment_method" id="exampleRadios3" value="card" checked>
                                    <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTransfer" aria-controls="bankTransfer">Pay With Debit Card</label>
                                    <div class="form-group collapse in" id="bankTransfer">
                                        <p class="text-muted mt-5">Please note that you will pay for the shipping fee before the item is shipped to you using this method.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-20">
                        <h4>Items in this Order</h4>
                    </div>
                    <div class="table-responsive order_table text-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th >Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td class="image product-thumbnail"><img src="{{asset('images/products/' .$item->image)}}" alt="#"></td>
                                    <td>
                                        <h5><a href="#">{{$item->product_name}}</a></h5> 
                                        <span class="product-qty">Placed On:  {{ \Carbon\Carbon::parse($item->created_at)->format('d M, Y') }}</span><br>
                                        <span class="product-qty" style="font-weight: bold">Amount: C${{$item->amount <= 0 ? 0 : number_format($item->amount,2)}}</span><br>
                                        <span class="product-qty">QTY: {{$item->qty}}</span>
                                    </td>
                                </tr>
                                @endforeach
                                
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                    <script src="https://checkout.flutterwave.com/v3.js"></script>
                    <form action="{{ route('pay.checkout')}}" method="POST">
                        {{-- <form 

                            role="form" 

                            action="{{ route('paypal.checkout')}}" 

                            method="post" 

                            class="require-validation"

                            data-cc-on-file="false"

                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"

                            id="payment-form"> --}}
                        @csrf
                        <input value="{{$orders->order_No}}" name="orderNo" >
                        <input value="{{\Cart::Totalfloat()}}" name="amount" >
                        {{-- <button type="button" onClick="makePayment()" id="btnsubmit2" class="btn btn-fill-out btn-block mt-10">Pay Now</button> --}}
                        <button type="submit"  class="btn btn-fill-out btn-block mt-10">Pay Now with PayPal</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    let total_paid = {!! json_encode(\Cart::Totalfloat()) !!};
    let fare = 1;
    let total = parseInt(total_paid) + parseInt(fare);
    var _token = {!! json_encode(env('FLUTTERWAVE_PUB_KEY')) !!};
    let email = {!! json_encode(auth()->user()->email) !!};
    let phone = {!! json_encode(auth()->user()->phone) !!};
    let name = {!! json_encode(auth()->user()->name) !!};
    let amounts = {!! json_encode(\Cart::Totalfloat()) !!};

    function makePayment() {
        FlutterwaveCheckout({
            public_key: _token,
            tx_ref: "SFSL" + Math.floor((Math.random() * 1000000) + 1),
            amount: amounts,
            currency: "NGN",
            country: "NG",
            payment_options: "card, ussd",
            meta: {
                consumer_id: 1,
                consumer_mac: "92a3-912ba-1192a",
                purpose: "Payment for Order",
            },
            customer: {
                email: email,
                phone_number: phone,
                name: name,
            },
            callback: function (response) {
                var trx_id = response.transaction_id;
                window.location = '{{route("confirm.payment", '')}}' + "/" + trx_id;
            },
            onclose: function () {
                // close modal
            },
            customizations: {
                title: "Sofarsolar",
                description: "Payment for Order",
                logo: "",
            },
        });
    }

    function thousands_separators(num) {
        var num_parts = num.toString().split(".");
        num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return num_parts.join(".");
    }
</script>
@endsection
@section('scripts')
@endsection