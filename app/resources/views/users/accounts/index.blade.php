@extends('layouts.app2')
@section('content')

<main class="main">
    <style>
        .badge-success {
            background-color: #28a745;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
        }
       
        .badge-warning {
            
            color: #ffc107;
            padding: 5px 10px;
            border-radius: 4px;
        }
    </style>
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ url('pages/home') }}" rel="nofollow">Home</a>
                <span></span> My Account
            </div>
        </div>
    </div>
    <section class="pt-50 pb-150">
        <div class="container">
            <div class="row">
                @include('includes.message')
                <div class="col-lg-12 m-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="dashboard-menu">
                                <ul class="nav flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" 
                                        aria-controls="dashboard" aria-selected="false">Account details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" 
                                        aria-controls="orders" aria-selected="false"><i class="fi-rs-shoppingg-bag mr-10"></i>Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders" role="tab" 
                                        aria-controls="track-orders" aria-selected="false"><i class="fi-rs-markerr mr-10"></i>My Address Book</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" 
                                        aria-selected="true"><i class="fi-rs-eyes mr-10"></i>Recently Viewed</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" 
                                        aria-controls="account-detail" aria-selected="true"><i class="fi-rs-atm mr-10"></i>Card Payments</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#update-detail" role="tab" 
                                        aria-controls="update-detail" aria-selected="true"><i class="fi-rs-atm mr-10"></i>Update Account</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content dashboard-content">
                                <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card mb-3 mb-lg-0">
                                                <div class="card-header">
                                                    <h5 class="mb-0">Accounnt Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <address style="font-weight: bold">
                                                        Name: {{strtoupper(auth()->user()->name)}}
                                                        
                                                    </address>
                                                    <p> Email: {{auth()->user()->email}}</p>
                                                    <p> Date Registered:  {{ \Carbon\Carbon::parse(auth()->user()->created_at)->format('d M, Y') }}  </p>
                                                    <br>
                                                    <a href="#" class="btn-small">CHANGE PASSWORD</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="mb-0">Shipping Address</h5>
                                                </div>
                                                <div class="card-body">
                                                    @if(count($addresses) >0)
                                                        @foreach($addresses as $address)
                                                            <address style="font-weight: bold">Name: {{$address->receiver_name}}</address>
                                                                <p> Address: {{$address->address}}</p>
                                                               <p> City: {{$address->city . " , " . strtoupper($address->state)}} </p>
                                                              <p> Phone: {{$address->receiver_phone}}</p>
                                                            <br><br>
                                                        @endforeach
                                                        @else
                                                            <p>Shipping Address</p>
                                                            <h6> You dont have any Default shipping Address yet</h6>
                                                            <a href="{{url('customer.add-address')}}" class="btn btn-small">Add New</a>                                                         
                                                       
                                                    @endif
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Your Orders</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Image</th>
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
                                                                    <img src="{{asset('images/products/' .$order->image)}}" alt="#">
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
                                </div>
                                <div class="tab-pane fade" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Billing Address</h5>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                @if(count($addresses) >0)
                                                    @foreach($addresses as $address)
                                                        <address style="font-weight: bold">Name: {{$address->receiver_name}}</address>
                                                            <p> Address: {{$address->address}}</p>
                                                            <p> City: {{$address->city . " , " . strtoupper($address->state)}} </p>
                                                            <p> Phone: {{$address->receiver_phone}}</p>
                                                        <br><br>
                                                    @endforeach
                                                    @else
                                                        <p>Shipping Address</p>
                                                        <h6> You dont have any Default shipping Address yet</h6>
                                                        <a href="{{url('customer.add-address')}}" class="btn btn-small">Add New</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Recently Viewed Items</h5>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                @if(count($recent) > 0)
                                                    @foreach($recent as $pro)
                                                        <div class="mb-2">
                                                            <a href="{{route('product-details', encrypt($pro->id))}}" class="font-size-12 text-gray-5">{{$pro->category->name}}</a>
                                                        </div>
                                                        <a href="{{route('product-details', encrypt($pro->id))}}">
                                                            <img src="{{asset('images/products/' .$order->image)}}" alt="#">
                                                            <h5>{{$pro->category->name}}</h5>
                                                        </a>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">C${{number_format($pro->price)}}</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="{{route('product-details', encrypt($pro->id))}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                       
                                                    @endforeach
                                                @else
                                                    <p> You don't have any recent viewed Items </p>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Transaction History</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead style="background-color: #088178; color:#fff">
                                                        <tr>
                                                            <th> Trxn Ref</th>
                                                            <th>External Ref </th>
                                                            <th> Order Number </th>
                                                            <th> Type </th>
                                                            <th> Amount </th>
                                                            <th>Prev Balance</th>
                                                            <th>Avail Balance</th>
                                                            <th>Transaction Time</th>
                                                            </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if(count($transactions)>0)
                                                            @foreach($transactions as $transaction) 
                                                            <tr>
                                                                <td class="image product-thumbnail">
                                                                    {{$transaction->payment_ref}}
                                                                </td>
                                                                <td> 
                                                                    {{$transaction->external_ref}}
                                                                </td>
                                                                <td>
                                                                    {{$transaction->order_No}}
                                                                </td>

                                                                <td>
                                                                    {{$transaction->type}}
                                                                </td>
                                                                <td>
                                                                   C${{number_format($transaction->amount)}}
                                                                </td>
                                                                <td>
                                                                    {{number_format($transaction->avail_bal,2)}}
                                                                </td>
                                                                <td>
                                                                   {{$transaction->created_at}}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @else
                                                            
                                                            <tr> <td colspan="8">You have not done any transaction yet</td> </tr>
                                                            @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="update-detail" role="tabpanel" aria-labelledby="account-update-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Update Details</h5>
                                        </div>
                                        <div class="card-body">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection