@extends('layouts.app')
@section('content')
<main  class="main">
            <!-- breadcrumb -->
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ url('pages/home') }}" rel="nofollow">Home</a>
                        <span></span>Orders
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
                                                Your Orders
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 mb-sm-5 mb-md-0" >
                                        <h4 class="section-title style-1 mb-30 wow fadeIn animated animated animated" style="visibility: visible;"></h4>
                                        <div class="product-list-small wow fadeIn animated animated animated" style="visibility: visible;">
                                            
                                            @foreach ($orders as $order )
                                            
                                            <article class="row align-items-center" style="border-bottom: 1px solid #a8a3a3">
                                                <figure class="col-md-2 mb-0">
                                                    <a href="{{route('users.order-details',encrypt($order->order_No))}}"><img src="{{asset('/images/products/'.$order->image)}}" alt=""></a>
                                                </figure>
                                                <div class="col-md-8 mb-0">
                                                    <h2 class="title-small">
                                                        <a href="{{route('users.order-details',encrypt($order->order_No))}}">{{$order->product_name}}</a>
                                                    </h2>
                                                    <h4 class="title-small">
                                                        <a href="{{route('users.order-details',encrypt($order->order_No))}}">Order No: #{{$order->order_No}}</a>
                                                    </h4>
                                                    <h4 class="title-small">
                                                        <a href="{{route('users.order-details',encrypt($order->order_No))}}">QTY: {{$order->qty}}</a>
                                                    </h4>
                                                    <h4 class="title-small">
                                                        <a href="{{route('users.order-details',encrypt($order->order_No))}}"> {{$order->created_at}}</a>
                                                    </h4>
                                                    <div class="product-price">
                                                        <span>C${{number_format($order->amount,2)}} </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>@if($order->is_paid ==1) <span class="badge bg-success"> Paid</span> @else <span class="badge badge-success"> Pending</span>@endif </span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-2"> 
                                                    <span style="float:right"> <a href="{{route('users.order-details',encrypt($order->order_No))}}" class="btn btn-primary btn-sm"> View Details</a> </span>
                                                </div>
                                               
                                            </article>

                                                
                                            @endforeach
                                
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