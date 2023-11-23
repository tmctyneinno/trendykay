@extends('layouts.app')
@section('content')
<main  class="main">
            <!-- breadcrumb -->
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ url('pages/home') }}" rel="nofollow">Home</a>
                        <span></span>Wallet Transaction
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
                                                <a class="nav-link "  href="{{route('users.recentViews')}}" 
                                                ><i class="fi-rs-eyes mr-10"></i>Recently Viewed</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="account-detail-tab"  href="{{route('user.transactions')}}"  
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
                                                Transaction History
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body border">
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
                                <!-- End Tab Content -->
                            </div>
                  

                            </div>
                        </div>
                    
                    </div>
                </div>
            </section>
</main>


@endsection