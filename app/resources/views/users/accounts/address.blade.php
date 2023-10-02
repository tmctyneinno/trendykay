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
                                                <a class="nav-link active" id="track-orders-tab"  href="{{route('users.address')}}"  
                                                aria-controls="track-orders" aria-selected="false"><i class="fi-rs-markerr mr-10"></i>My Address Book</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"  href="{{route('users.recentViews')}}" 
                                                ><i class="fi-rs-eyes mr-10"></i>Recently Viewed</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="account-detail-tab"  href="{{route('user.transactions')}}"  
                                                aria-controls="account-detail" ><i class="fi-rs-atm mr-10"></i>Card Payments</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="account-detail-tab"  href="{{route('user.account.details')}}"  
                                                aria-controls="update-detail" ><i class="fi-rs-atm mr-10"></i>Update Account</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>

                                
                                <div class="col-md-8">
                                    @if(count($addresses)>0)
                                    @foreach($addresses as $addres)
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                @if($addres->is_default == 1)
                                                        <th>Billing Address 
                                                            <a class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white  border-radius-5 
                                                            btn-shadow-brand ">  Default</a>
                                                        </th>
                                                @else
                                                    <th>Billing Address
                                                        <a href="{{route('users.update-address', encrypt($addres->id))}}" class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white  border-radius-5 
                                                            btn-shadow-brand ">  Default</a>
                                                    </th>
                                                @endif
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body border">
                                       
                                            <address style="font-weight: bold">Name: {{$addres->receiver_name}}</address>
                                                <p> Address: {{$addres->address}}</p>
                                                <p> City: {{$addres->city . " , " . strtoupper($addres->state)}} </p>
                                                <p> Phone: {{$addres->receiver_phone}}</p>
                                            <br><br>
                                            @endforeach
                                            @else
                                                <p>Shipping Address</p>
                                                <h6> You dont have any Default shipping Address yet</h6>
                                       
                                    </div>
                                    @endif
                                    <a href="{{url('customer.add-address')}}" class="btn btn-small">Add New</a>
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