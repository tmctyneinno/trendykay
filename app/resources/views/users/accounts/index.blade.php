@extends('layouts.app')
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
                      @include('users.accounts.sidebar')
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