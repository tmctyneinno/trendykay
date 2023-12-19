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
                                    @if(count($addresses)>0)
                                    @foreach($addresses as $addres)
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                @if($addres->is_default == 1)
                                                        <th>Billing Address  <a href="{{route('users.update-address', encrypt($addres->id))}}"> <i class="">edit </i></a>
                                                            <a class="" style="float:right; color:chocolate">  Default</a>
                                                        </th>
                                                @else
                                                    <th>Billing Address
                                                        <a href="{{route('users.update-address', encrypt($addres->id))}}" class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white  border-radius-5 
                                                            btn-shadow-brand " style="float:right"> edit</a>
                                                    </th>
                                                @endif
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body border">
                                       
                                            <address style="font-weight: bold">Name: {{$addres->receiver_name}}</address>
                                                <p> Address: {{$addres->address}}</p>
                                                <p> City: {{$addres->city . " , " . strtoupper($addres->state)}} </p>
                                                <p> LandMark: {{$addres->landmark . " , " . strtoupper($addres->country)}} </p>
                                                <p> Phone: {{$addres->receiver_phone}}</p>
                                            <br><br>
                                          
                                       
                                    </div>
                                    @endforeach
                                    @else
                                        <p>Shipping Address</p>
                                        <h6> You dont have any Default shipping Address yet</h6>
                                    @endif
                                <div class="p-2">
                                    <a href="{{route('users.add-address')}}" class="btn btn-lg">Add New</a>
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