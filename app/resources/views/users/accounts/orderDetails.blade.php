@extends('layouts.app')
@section('content')
<main  class="main">
            <!-- breadcrumb -->
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ url('pages/home') }}" rel="nofollow">Home</a>
                        <span></span> Order Details
                    </div>
                </div> 
            </div>

            <section class="pt-50 pb-150">
                <div class="container">
                    <div class="row mb-8">
                        <div class="col-lg-12 m-auto">
                            <div class="row">
                                @include('users.accounts.sidebar')
                                
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Order Details</h5>
                                        </div>
                                    </div>
                                    <div class="card-body border">
                                            <div style="font-weight: bold; font-size:16px">
                                                Placed On:  {{  \Carbon\Carbon::parse($orders->created_at)->format('d M, Y')}} <br>  
                                                Total Amount:  C${{ number_format($orders->amount,2)}}<br>
                                                Order No: {{$orders->order_No}}<br>

                                            </div>
                                            <div class="table-responsive">
                                                <strong>Items in this Order</strong>
                                           
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                        </tr>
                                                        <tr>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($items as $item)
                                                            <tr class="cart_item">
                                                                <td>
                                                                <a href="#"><img width="100px" height="150"class="img-fluid max-width-100 p-1" src="{{asset('images/products/'.$item->image)}}" alt="Image Description"></a>
                                                                </td>
                                                                <td>
                                                                {{$item->product_name}}<br>
                                                                Placed On:   {{  \Carbon\Carbon::parse($item->created_at)->format('d M, Y')}}<br>
                                                                Amount: C${{number_format($item->price,2)}}<br>
                                                                <strong class="product-quantity">QTY: {{$item->qty}}</strong><br>
                                                            </td>

                                                            
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                           
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card mb-3 mb-lg-0">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">Payment Information</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            @if(isset($orders->external_ref))
                                                            <address style="font-weight: bold">
                                                                Payment Type: {{$orders->payment_method}}
                                                                Payment Reference: {{$orders->external_ref}}
                                                            </address>
                                                            @endif
                                                            <p> Transaction Ref: {{$orders->payment_ref}}</p>
                                                            <p><b> Amount: C${{number_format($orders->amount)}} </b> </p>
                                                            <p> Payment Status: @if($orders->is_paid == 1) 
                                                                <span class="badge badge-success ">&nbsp; Success &nbsp;</span>@else <span  class="badge badge-warning ">Pending</span>@endif
                                                            </p>
                                                            <p>Delivery Status:  @if($orders->is_delivered == 1) <span class="badge badge-success ">&nbsp; Delivered &nbsp;</span>@else 
                                                                <span class="badge badge-warning ">Pending </span> @endif</p>
                                                            <br>
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">Shipping  Details</h5>
                                                        </div>
                                                        <div class="card-body">
                                                           
                                                            <address style="font-weight: bold">Name: {{$orders->shipping->receiver_name}}</address>
                                                            <address style="font-weight: bold">Email: {{$orders->shipping->receiver_email}}</address>
                                                            <p> Address:  {{$orders->shipping->address}}</p>
                                                            <p> City: {{$orders->shipping->city . " , " . strtoupper($item->state)}} </p>
                                                            <p> Phone:{{$orders->shipping->receiver_phone}}</p>
                                                            <p> Delivery Method:{{$orders->shipping->delivery_method}}</p>
                                                            <br><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
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