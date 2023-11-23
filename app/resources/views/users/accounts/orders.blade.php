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

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Order No</th>
                                                        <th>Detials</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(count($orders)>0)
                                                        @foreach($orders as $order)
                                                        <tr>
                                                            <td class="image product-thumbnail">
                                                                #{{$order->order_No}}
                                                            </td>
                                
                                                            <td> 
                                                                <p>{{$order->product_name}} </p>
                                                                <p>Placed On: {{ \Carbon\Carbon::parse($order->created_at)->format('d M, Y') }}</p>
                                                                <p> QTY: {{$order->qty}}</p>
                                                                <p>Amount: C${{$order->amount > 0? number_format($order->amount,2): 0}}</p>
                                                            </td>
                                                            <td>
                                                                <p>Payment Status:  
                                                                    @if($order->is_paid == 1) 
                                                                    <span class="badge badge-success ">
                                                                        &nbsp; Paid &nbsp; &nbsp; 
                                                                    </span>@else 
                                                                    <span class="badge badge-warning" >&nbsp; Pending &nbsp;</span> @endif</span>
                                                                </p>
                                                                <p>
                                                                    <span>Delivery Status:  
                                                                        @if($order->is_delivered == 1) <span class="badge badge-success"> &nbsp;Delivered &nbsp;</span>@else
                                                                         <span  class="badge badge-warning  ">&nbsp; Pending  &nbsp;</span> @endif</span><br>
                                               
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <a href="{{route('users.order-details',encrypt($order->order_No))}}"  class="btn btn-fill-out submit " style="  padding: 5px 10px;">&nbsp; View Details &nbsp;</a>
                                                                
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        
                                                        <tr>You have not done any transaction yet</tr>
                                                        @endif
                                                </tbody>
                                            </table>
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