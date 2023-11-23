@extends('layouts.app')
@section('content')
@section('title', $title)
@section('styles')

<style>
.labl {
    display : block;
}
.labl > input{ /* HIDE RADIO */
    visibility: hidden; /* Makes input not-clickable */
    position: absolute; /* Remove input from document flow */
}
.labl > input + div{ /* DIV STYLES */
    cursor:pointer;
    border:2px solid transparent;
}
.labl > input:checked + div{ /* (RADIO CHECKED) DIV STYLES */
    background-color: #ffd6bb;
    border: 1px solid #ff6600;
}

</style>
@endsection
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
            <form action="{{ route('pay.checkout')}}" method="POST">
            @csrf
           
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-2">
                    <div class="mb-25 pt-3 pb-3 pr-2 pl-2" style="background: #fff; border-radius:10px; border:1px solid #0000002d">
                        <p class="m-4" style="color:#777373"> <i class="fa fa-check-square-o" style="color:rgba(77, 129, 77, 0.112)"></i>  Shipping Address <span style="float:right"> 
                            <a href=""> {{_('Change >')}}  </a> </span></p> 
                        <hr>
                        <div class="ps-categogy--ist  p-2">
                            <p style="color:#322f37">{{$address->name}}</p>
                            <input type="hidden" name="email" value="{{auth()->user()->email}}">
                            <input type="hidden" name="name" value="{{$address->name}}">
                            <input type="hidden" name="phone" value="{{$address->phone}}">
                            <input type="hidden" name="orderNo" value="{{$orderNo}}">
                            <p>{{$address->address}}, {{$address->city}} |  {{$address->state}}, {{$address->country}} 
                                | {{$address->phone}} </p>
                        </div>
                    </div>
                        
                </div>
                <div class="mb-2" style="background: #fff; border-radius:10px; border:1px solid #0000002d">
                    <p class="m-4" >  
                        Select Shipping Method 
                    </p> 
                    <hr>
                    @forelse ($shipping_rates as  $rate)
                    <label class="labl"> 
                    {{-- <div class="ps-categogyt m-5 p-3" style="border: 1px solid #4e4a4a51; border-radius: 10px" > --}}
                      <table class="table table-responsive" > 
                        <tr> 
                            <td style="border:none">     
                            <input    type="radio"  id="courier_id" data-courier-id="{{$rate->courier_id}}" name="selected_courier_id" value="{{$rate->courier_id}}" /> 
                         </td>
                            <td  style="border:none"><p style="color:#322f37">{{$rate->courier_name}}</p>
                                <p   onclick="getPrice(this)" id="total_charge" value="{{$rate->total_charge}}" data-charge-amount="{{$rate->total_charge}}">C${{$rate->total_charge}}</p>  <p> {{$rate->full_description}} </p>
                            </td>
                        </tr> 
                      </table>
                     
                        {{-- </div> --}}
                    </label>
                    <hr>
                    @empty
                    @endforelse
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
                                        @php
                                            $priceTotal = Cart::priceTotalFloat();
                                            $tax = $priceTotal * 0.12; // Calculate the tax amount (12% of the subtotal)
                                            $total = $priceTotal + $tax; // I added the tax to the subtotal to get the total price
                                        @endphp
                                        <th>Total</th>
                                        <input required type="hidden" name="total" value="{{number_format($total, 2)}}">
                                        <input type="hidden" name="qty" value="{{$carts->qty}}">
                             
                                        <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900" id="price_total" data-price-total="{{$total}}">C${{number_format($total, 2)}}</span></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>

                        <div class="payment_method">
                            <div class="mb-25">
                                <h5>Payment Method</h5>
                            </div>
                            <div class="payment_option">
                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5" checked="">
                                    <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Pay with Stripe</label>
                                    <div class="form-group collapse in" id="paypal">
                                        <p class=" mt-5">Pay via Stripe; you can pay with your credit card if you don't have a Stripe account.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-fill-out btn-block mt-30">Complete Payment</button>
                    </div>
                </div>
               
            </div>
            </form>
        </div>
    </section>
</main>
@endsection

@section('scripts')

<script> 



let price = {!! json_encode(Cart::priceTotalFloat()) !!}
let tax = parseFloat(price) * 0.12;
let priceTotal = price + tax;

function getPrice(data){
    let id = $(data).attr('data-courier-id');
    let charge = $(data).attr('data-charge-amount');
    let total = parseFloat(charge) + parseFloat(priceTotal);
    $('#price_total').html('C$' + formats(total.toFixed(2)))
    $('#total').val(parseFloat(charge)  + parseFloat(priceTotal))
};

function formats(num)
    {
        var num_parts = num.toString().split(".");
        num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return num_parts.join(".");
    }


</script>

@endsection

