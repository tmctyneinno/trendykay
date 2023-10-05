@extends('layouts.app')
@section('content')

    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                @foreach ($sliders as $slider)
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">{{ $slider->name }}</h4>
                                    <h2 class="animated fw-900">{{ $slider->secondname }}</h2>
                                    <h1 class="animated fw-900 text-brand">{{ $slider->thirdname }}</h1>
                                    <p class="animated">Save more with coupons & up to 70% off</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="shop-product-right.html"> Shop Now </a>
                              
                                    <p class="animated">Save more with coupons & up to 20% off</p>
                                    {{-- <a class="animated btn btn-brush btn-brush-3" href="{{route('shops')}}"> Shop Now </a> --}}
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="{{asset('/images/sliders/'.$slider->image)}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>

        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-1.png')}}" alt="">
                            <h4 class="bg-3">Standard Shiiping</h4>
                        </div>
                    </div>
                   
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-2.png')}}" alt="">
                            <h4 class="bg-3">Online Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-3.png')}}" alt="">
                            <h4 class="bg-2">Save Money</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-4.png')}}" alt="">
                            <h4 class="bg-4">Promotions</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-5.png')}}" alt="">
                            <h4 class="bg-5">Happy Sell</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-6.png')}}" alt="">
                            <h4 class="bg-6">24/7 Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" 
                            data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true"> Products</button>
                        </li>
                        
                    </ul>
                    <a href="{{ url('pages/products') }}" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach ($products as $pro )
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product-details', $pro->id )}}">
                                                <img class="default-img" src="{{asset('/images/products/'.$pro->image)}}" alt="">
                                                <img class="hover-img" src="{{asset('/images/products/'.$pro->image)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" href="{{route('product-details', $pro->id )}}" class="action-btn hover-up" >
                                                <i class="fi-rs-eye"></i>
                                            </a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">{{number_format($pro->discount,0)}}% </span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">{{$pro->category->name}}</a>
                                        </div>
                                        <h2><a href="{{route('product-details', $pro->id )}}">{{$pro->name}}</a></h2>
                                        
                                        <div class="product-price">
                                            <span>C${{number_format($pro->sale_price)}} </span> 
                                            <span class="old-price">₦{{number_format($pro->price)}}</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="{{route('product-details', $pro->id )}}">
                                                <i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                           
                            </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                   

                   
                    <!--En tab two (Popular)-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                            @foreach ($prod as $prods )
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30"> 
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product-details', $prods->id)}}">
                                                <img class="hover-img" src="{{asset('images/products/'.$prods->image)}}" alt="">
                                                <img class="default-img" src="{{asset('images/products/'.$prods->image)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" href="{{route('product-details', $pro->id)}}" class="action-btn hover-up" >
                                                <i class="fi-rs-eye"></i>
                                            </a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">{{$prods->category->name}}</a>
                                        </div>
                                        <h2><a href="{{route('product-details', $prods->id)}}">{{$prods->name}}</a></h2>
                                       
                                        <div class="product-price">
                                            <span>C${{number_format($prods->price)}}</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="{{route('product-details', $prods->id)}}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>
        
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        @foreach($menu_categories as $cat )
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden"> 
                                <a href="{{route('user.category', encrypt($cat->id))}}"><img src="{{asset('/images/category/'.$cat->image)}}" alt=""></a>
                                {{-- <a href=""><img src="{{asset('/images/category/'.$cat->image)}}" alt=""></a> --}}
                            </figure>
                            <h5><a href="{{route('user.category', encrypt($cat->id))}}"> {{$cat->name}}</a></h5>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

       
        @if(count($recents) > 0)
        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Recently </span> Viewed</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                   
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        @foreach($recents as $recent)
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{route('product-details', $recent->id)}}}">
                                        <img class="default-img" src="{{asset('images/products/'.$recent->image)}}" alt="">
                                        <img class="hover-img" src="{{asset('images/products/'.$recent->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">-25%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="C${{route('product-details', $recent->id )}}">Curabitur porta</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>{{number_format($recent->sale_price)}} </span>
                                    <span class="old-price">C${{number_format($recent->price)}}</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        @endforeach                             
                                
                    </div>
                    
                </div>
            </div>
        </section>
        @endif

      

      
       

    </main>

@endsection