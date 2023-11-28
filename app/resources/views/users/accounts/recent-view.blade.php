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
                                @include('users.accounts.sidebar')

                                
                                <div class="col-md-8">
                                   
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                Recently Viewed Items
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body border">
                                        <div class="row">
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