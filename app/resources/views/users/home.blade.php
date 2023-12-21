@extends('layouts.app')
@section('content')

<main class="main">
    <section class="home-slider position-relative pt-10">
        <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
            @forelse ($sliders as $slider)
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row  slider-animated-1">
                            {{-- <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h2 class="animated fw-900">{{ $slider->secondname }}</h2>
                                    <p class="animated">{{ $slider->thirdname }}.</p>
                                    <a class="animated btn btn-brush btn-brush-1" href="{{ url('pages/products')}}"> Shop Now </a>
                                </div>
                            </div> --}}


                            <div class="col-lg-12 col-md-12">
                                <div class="">
                                    <img class="animated" style="width: 100%" src="{{ asset('/images/sliders/' . $slider->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <div class="slider-arrow hero-slider-1-arrow"></div>
    </section>

    <section class="banners mb-20 mt-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow fadeIn animated">
                        <img src="{{ asset('assets/imgs/banner/banner-11.png ') }}" alt="">
                        <div class="banner-text">
                            <span>Discover Our Latest <br>Collection</span>
                            <h4>Shop the<br> Trendiest<br> Styles Today</h4>
                            <a href="{{ url('pages/products') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow fadeIn animated">
                        <img src="{{ asset('assets/imgs/banner/banner-22.png  ') }}" alt="">
                        <div class="banner-text">
                            <span>Flash Sale: Up to 20% Off</span>
                            <h4>Limited Time Only! <br> Don't Miss Out</h4>
                            <a href="{{ url('pages/products') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-md-none d-lg-flex">
                    <div class="banner-img wow fadeIn animated  mb-sm-0">
                        <img src="{{ asset('assets/imgs/banner/banner-33.png  ') }}" alt="">
                        <div class="banner-text">
                            <span>New Arrivals for This Season</span>
                            <h4>Explore Exciting <br> Fashion Trends</h4>
                            <a href="{{ url('pages/products') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-tabs pt-25 pb-20 wow fadeIn animated">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget-category mb-10">
                        <h5 class="section-title style-1 mb-10 wow fadeIn animated">Category</h5>
                        <ul class="categories">
                            @foreach ($menu_categories as $cat)
                                <li>
                                <li><a href="{{ route('user.category', encrypt($cat->id)) }}">{{ $cat->name }}</a>
                                </li>
                                {{-- <li><a href="{{route('user.category', $cat->id)}}">{{$cat->name}}</a></li> --}}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar-widget price_range range mb-30">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title mb-10">Sort by</h5>
                            <div class="bt-1 border-color-1"></div>
                        </div>

                        <div class="list-group">
                            <div class="list-group-item mb-10 mt-10">
                                <label class="fw-900">Color</label>
                                <div class="custome-checkbox">
                                    <form action="{{ route('filterColor') }}" method="GET">
                                        <div class="form-group">
                                            <label for="color">Select Color:</label>
                                            <select name="color" id="color" class="form-control" required>
                                                <option selected disabled>select color</option>
                                                @foreach ($colorproduct as $color)
                                                    <option value="{{ $color->name }}">{{ $color->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-default"><i
                                                class="fi-rs-filter mr-5"></i>Apply Filter</button>
                                    </form>
                                </div>
                                <label class="fw-900 mt-15">Size</label>
                                <div class="custome-checkbox">

                                    <form action="{{ route('filterSize') }}" method="GET">
                                        <div class="form-group">
                                            <label for="size">Select Size:</label>
                                            <select name="size" id="size" class="form-control" required>
                                                <option selected disabled>select size</option>
                                                @foreach ($sizeproduct as $size)
                                                    <option value="{{ $size->name }}">{{ $size->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-default"><i
                                                class="fi-rs-filter mr-5"></i>Apply Filter</button>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-header">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab"
                                    data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one"
                                    aria-selected="true">Product</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab"
                                    data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two"
                                    aria-selected="false">Best Seller</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab"
                                    data-bs-target="#tab-three" type="button" role="tab"
                                    aria-controls="tab-three" aria-selected="false">Jumpsuit</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-four" data-bs-toggle="tab"
                                    data-bs-target="#tab-four" type="button" role="tab"
                                    aria-controls="tab-four" aria-selected="false">Denim</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-five" data-bs-toggle="tab"
                                    data-bs-target="#tab-five" type="button" role="tab"
                                    aria-controls="tab-five" aria-selected="false">Dress</button>
                            </li>
                        </ul>
                        <a href="{{ url('pages/products') }}" class="view-more d-none d-md-flex">View More<i
                                class="fi-rs-angle-double-small-right"></i></a>
                    </div>
                    <!--End nav-tabs-->
                    <div class="tab-content wow fadeIn animated" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab-one" role="tabpanel"
                            aria-labelledby="tab-one">
                            <div class="row product-grid-4">
                                @forelse ($products as $pro)
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('product-details', encrypt($pro->id)) }}">
                                                        <img class="default-img"
                                                            src="{{ asset('/images/products/' . $pro->image) }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('/images/products/' . $pro->image) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">{{ number_format($pro->discount, 0) }}%
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">{{ $pro->category->name }}</a>
                                                </div>
                                                <h2><a
                                                        href="{{ route('product-details', ($pro->id)) }}">{{ $pro->name }}</a>
                                                </h2>
                                                <br>
                                                <div class="product-price">
                                                    <span>C${{ number_format($pro->sale_price) }} </span>
                                                    <span class="old-price">₦{{ number_format($pro->price) }}</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ route('product-details', encrypt($pro->id)) }}">
                                                        <i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @empty
                                    <p class="text-danger">No product found</p>
                                @endforelse
                            </div>
                            <!--End product-grid-4-->
                        </div>
                        <!--En tab one (Featured)-->
                        <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                            <div class="row product-grid-4">
                                @forelse ($bestsallersproducts as $pro)
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('product-details', encrypt($pro->id)) }}">
                                                        <img class="default-img"
                                                            src="{{ asset('/images/products/' . $pro->image) }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('/images/products/' . $pro->image) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view"
                                                        href="{{ route('product-details', encrypt($pro->id)) }}"
                                                        class="action-btn hover-up">
                                                        <i class="fi-rs-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">{{ number_format($pro->discount, 0) }}%
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">{{ $pro->category->name }}</a>
                                                </div>
                                                <h2><a
                                                        href="{{ route('product-details', encrypt($pro->id)) }}">{{ $pro->name }}</a>
                                                </h2>
                                                <br>
                                                <div class="product-price">
                                                    <span>C${{ number_format($pro->sale_price) }} </span>
                                                    <span class="old-price">₦{{ number_format($pro->price) }}</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ route('product-details', encrypt($pro->id)) }}">
                                                        <i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @empty
                                    <p class="text-danger">No product found</p>
                                @endforelse
                            </div>
                            <!--End product-grid-4-->
                        </div>
                        <!--En tab two (Popular)-->
                        <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                            <div class="row product-grid-4">
                                @forelse ($jumpsuitproducts as $pro)
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('product-details', encrypt($pro->id)) }}">
                                                        <img class="default-img"
                                                            src="{{ asset('/images/products/' . $pro->image) }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('/images/products/' . $pro->image) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view"
                                                        href="{{ route('product-details', encrypt($pro->id)) }}"
                                                        class="action-btn hover-up">
                                                        <i class="fi-rs-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">{{ number_format($pro->discount, 0) }}%
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">{{ $pro->category->name }}</a>
                                                </div>
                                                <h2><a
                                                        href="{{ route('product-details', encrypt($pro->id)) }}">{{ $pro->name }}</a>
                                                </h2>
                                                <br>
                                                <div class="product-price">
                                                    <span>C${{ number_format($pro->sale_price) }} </span>
                                                    <span class="old-price">₦{{ number_format($pro->price) }}</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ route('product-details', encrypt($pro->id)) }}">
                                                        <i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @empty
                                    <p class="text-danger">No Product</p>
                                @endforelse
                            </div>
                            <!--End product-grid-4-->
                        </div>
                        <!--En tab three (New added)-->
                        <div class="tab-pane fade" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                            <div class="row product-grid-4">
                                @forelse ($denimproducts as $pro)
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('product-details', encrypt($pro->id)) }}">
                                                        <img class="default-img"
                                                            src="{{ asset('/images/products/' . $pro->image) }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('/images/products/' . $pro->image) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view"
                                                        href="{{ route('product-details', encrypt($pro->id)) }}"
                                                        class="action-btn hover-up">
                                                        <i class="fi-rs-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">{{ number_format($pro->discount, 0) }}%
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">{{ $pro->category->name }}</a>
                                                </div>
                                                <h2><a
                                                        href="{{ route('product-details', encrypt($pro->id)) }}">{{ $pro->name }}</a>
                                                </h2>
                                                <br>
                                                <div class="product-price">
                                                    <span>C${{ number_format($pro->sale_price) }} </span>
                                                    <span class="old-price">₦{{ number_format($pro->price) }}</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ route('product-details', encrypt($pro->id)) }}">
                                                        <i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @empty
                                    <p class="text-danger">No product found</p>
                                @endforelse
                            </div>
                            <!--End product-grid-4-->
                        </div>
                        <!--En tab four (New added)-->
                        <div class="tab-pane fade" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
                            <div class="row product-grid-4">
                                @forelse ($dressproducts as $pro)
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('product-details', encrypt($pro->id)) }}">
                                                        <img class="default-img"
                                                            src="{{ asset('/images/products/' . $pro->image) }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('/images/products/' . $pro->image) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view"
                                                        href="{{ route('product-details', encrypt($pro->id)) }}"
                                                        class="action-btn hover-up">
                                                        <i class="fi-rs-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">{{ number_format($pro->discount, 0) }}%
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="#">{{ $pro->category->name }}</a>
                                                </div>
                                                <h2><a
                                                        href="{{ route('product-details', encrypt($pro->id)) }}">{{ $pro->name }}</a>
                                                </h2>
                                                <br>
                                                <div class="product-price">
                                                    <span>C${{ number_format($pro->sale_price) }} </span>
                                                    <span class="old-price">₦{{ number_format($pro->price) }}</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ route('product-details', encrypt($pro->id)) }}">
                                                        <i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @empty
                                    <p class="text-danger">No product found</p>
                                @endforelse
                            </div>
                            <!--End product-grid-4-->
                        </div>
                        <!--En tab four (New added)-->
                    </div>
                    <!--End tab-content-->
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container pt-25 pb-20">
            <div class="row">
                @foreach ($categories as $cats)
                <div class="col-md-4">
                    <div class="banner-img mb-15 wow fadeIn animated animated animated" style="visibility: visible;">
                        <img src="{{ asset('/images/category/' . $cats->image) }}">
                        {{-- <img src="assets/imgs/banner/banner-6.jpg" alt="">  --}}
                        <div class="banner-text">
                            {{-- <span>{{ $cats->name }}</span> --}}
                            <a href="{{route('user.category', encrypt($cat->id))}}">
                                <span>{{ $cats->name }}</span>
                            </a>
                            <h4>{{ $cats->name }}</h4>
                            <a href="{{route('user.category', encrypt($cat->id))}}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>  

    <section class="bg-grey-12 section-padding">
        <div class="container pt-15 pb-25">
            <div class="heading-tab d-flex">
                <div class="heading-tab-left wow fadeIn animated">
                    <h3 class="section-title mb-20"><span>Best</span> Sells</h3>
                </div>
            </div>
            <div class="row">
              
                <div class="col-lg-12 col-md-12">
                    <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                    @foreach ($bestsallersproducts as  $items)
                                        
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product-details', encrypt($items->id)) }}">
                                                    <img class="default-img" src="{{asset('/images/products/'.$items->image)}}" alt="">
                                                    <img class="hover-img" src="{{asset('/images/products/'.$items->image)}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" href="{{ route('product-details', encrypt($items->id)) }}" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                  <i class="fi-rs-eye"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="{{ route('product-details', encrypt($items->id)) }}">{{$items->category->name}}</a>
                                            </div>
                                            <h2><a href="{{ route('product-details', encrypt($items->id)) }}">{{$items->name}}</a></h2>
                                            
                                            <div class="product-price">
                                                <span>C${{$items->sale_price}}</span>
                                                <span class="old-price">C${{$items->price}}</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="{{ route('product-details', encrypt($items->id)) }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End tab-content-->
                </div>
                <!--End Col-lg-9-->
            </div>
        </section>
        {{-- @if (count($recents) > 4)
            <section class="section-padding">
                <div class="container wow fadeIn animated">
                    <h3 class="section-title mb-20"><span>Recently </span> Viewed</h3>
                    @foreach ($recents as $recent)
                    <div class="carausel-6-columns-cover position-relative">
                        <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow"
                            id="carausel-6-columns-2-arrows"></div>

                        <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                                <div class="product-cart-wrap small hover-up">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('product-details', encrypt($recent->id)) }}}">
                                                <img class="default-img"
                                                    src="{{ asset('images/products/' . $recent->image) }}"
                                                    alt="">
                                                <img class="hover-img"
                                                    src="{{ asset('images/products/' . $recent->image) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a href="{{ route('product-details', encrypt($recent->id)) }}"
                                                aria-label="Quick view" class="action-btn small hover-up">
                                                <i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">{{ $recent->discount }}%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <h2><a href="{{ route('product-details', encrypt($recent->id)) }}">
                                                {{ $recent->name }}</a></h2>

                                        <div class="product-price">
                                            <span>C${{ number_format($recent->sale_price) }} </span>
                                            <span class="old-price">C${{ number_format($recent->price) }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-action-1">
                                    <a href="{{ route('product-details', encrypt($recent->id)) }}"
                                        aria-label="Quick view" class="action-btn small hover-up">
                                        <i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">{{ $recent->discount }}%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="{{ route('product-details', encrypt($recent->id)) }}">
                                        {{ $recent->name }}</a></h2>

                                <div class="product-price">
                                    <span>C${{ number_format($recent->sale_price) }} </span>
                                    <span class="old-price">C${{ number_format($recent->price) }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--End product-cart-wrap-2-->
                    

                </div>

            </div>
        </div>
    </section>
@endif --}}






</main>


@endsection
