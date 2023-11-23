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
                                @include('users.accounts.sidebar')

                                
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