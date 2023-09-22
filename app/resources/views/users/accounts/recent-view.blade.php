@extends('layouts.app')
@section('content')
<main  class="main">
            <!-- breadcrumb -->
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ url('pages/home') }}" rel="nofollow">Home</a>
                        <span></span> Recent Views
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
                                                <a class="nav-link " id="track-orders-tab"  href="{{route('users.address')}}"  
                                                aria-controls="track-orders" aria-selected="false"><i class="fi-rs-markerr mr-10"></i>My Address Book</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active"  href="{{route('users.recentViews')}}" 
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
                                   
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                Recently Viewed Items
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body border">
                                        @if(count($recent) > 0)
                                            @foreach($recent as $pro)
                                            <div class="col-lg-3 col-md-4">
                                                <div class="product-cart-wrap mb-30">
                                                    <div class="product-img-action-wrap">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="{{route('product-details', encrypt($pro->id))}}">
                                                                <img class="default-img" src="{{asset('/images/products/'.$pro->image)}}" alt="">
                                                                <img class="hover-img" src="{{asset('/images/products/'.$pro->image)}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                            <span class="hot">Hot</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-wrap">
                                                        <div class="product-category">
                                                            <a href="{{route('product-details', encrypt($pro->id))}}"></a>
                                                        </div>
                                                        <h2><a href="{{route('product-details', encrypt($pro->id))}}">{{$pro->name}}</a></h2>
                                                        
                                                        <div class="product-price">
                                                            <span>C${{number_format($pro->price)}} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
                                            <p> You don't have any recent viewed Items </p>
                                            @endif
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