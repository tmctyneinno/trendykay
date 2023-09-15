@extends('layouts.app2')
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
                
                {{-- <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Hot promotions</h4>
                                    <h2 class="animated fw-900">Fashion Trending</h2>
                                    <h1 class="animated fw-900 text-7">Great Collection</h1>
                                    <p class="animated">Save more with coupons & up to 20% off</p>
                                    <a class="animated btn btn-brush btn-brush-2" href="shop-product-right.html"> Discover Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-2" src="{{ asset('assets/imgs/slider/slider-2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Upcoming Offer</h4>
                                    <h2 class="animated fw-900">Big Deals From</h2>
                                    <h1 class="animated fw-900 text-8">Manufacturer</h1>
                                    <p class="animated">Clothing, Shoes, Bags, Wallets...</p>
                                    <a class="animated btn btn-brush btn-brush-1" href="shop-product-right.html"> Shop Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-3" src="{{ asset('assets/imgs/slider/slider-3.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>

        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-1.png')}}" alt="">
                            <h4 class="bg-1">Free Shipping</h4>
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
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                        </li>
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
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
                                            <a href="{{route('product-details', encrypt($pro->id))}}">
                                                <img class="default-img" src="{{asset('/images/products/'.$pro->image)}}" alt="">
                                                <img class="hover-img" src="{{asset('/images/products/'.$pro->image)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" href="{{route('product-details', encrypt($pro->id))}}" class="action-btn hover-up" >
                                                <i class="fi-rs-eye"></i>
                                            </a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html">
                                                <i class="fi-rs-heart"></i>
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
                                        <h2><a href="{{route('product-details', encrypt($pro->id))}}">{{$pro->name}}</a></h2>
                                        
                                        <div class="product-price">
                                            <span>C${{number_format($pro->sale_price)}} </span> 
                                            <span class="old-price">₦{{number_format($pro->price)}}</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="{{route('product-details', encrypt($pro->id))}}">
                                                <i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                                 <!-- Quick view -->
                            <div class="modal fade custom-modal" id="productList" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="detail-gallery">
                                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                                        <!-- MAIN SLIDES -->
                                                        <div class="product-image-slider">
                                                            <figure class="border-radius-10">
                                                                <img src="{{asset('/images/products/'.$pro->image)}}" alt="product image">
                                                            </figure>
                                                            <figure class="border-radius-10">
                                                                <img src="{{asset('/images/products/'.$pro->image)}}" alt="product image">
                                                            </figure>
                                                            <figure class="border-radius-10">
                                                                <img src="{{asset('/images/products/'.$pro->image)}}" alt="product image">
                                                            </figure>
                                                            <figure class="border-radius-10">
                                                                <img src="{{asset('/images/products/'.$pro->image)}}" alt="product image">
                                                            </figure>
                                                            <figure class="border-radius-10">
                                                                <img src="{{asset('/images/products/'.$pro->image)}}" alt="product image">
                                                            </figure>
                                                            <figure class="border-radius-10">
                                                                <img src="{{asset('/images/products/'.$pro->image)}}" alt="product image">
                                                            </figure>
                                                            <figure class="border-radius-10">
                                                                <img src="{{asset('/images/products/'.$pro->image)}}" alt="product image">
                                                            </figure>
                                                        </div>
                                                        <!-- THUMBNAILS -->
                                                        <div class="slider-nav-thumbnails pl-15 pr-15">
                                                            <div><img src="{{asset('/images/products/'.$pro->image)}}" alt="product image"></div>
                                                            <div><img src="{{asset('/images/products/'.$pro->image)}}" alt="product image"></div>
                                                            <div><img src="{{asset('/images/products/'.$pro->image)}}" alt="product image"></div>
                                                            <div><img src="{{asset('/images/products/'.$pro->image)}}" alt="product image"></div>
                                                            <div><img src="{{asset('/images/products/'.$pro->image)}}" alt="product image"></div>
                                                            <div><img src="{{asset('/images/products/'.$pro->image)}}" alt="product image"></div>
                                                            <div><img src="{{asset('/images/products/'.$pro->image)}}" alt="product image"></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                    <div class="social-icons single-share">
                                                        <ul class="text-grey-5 d-inline-block">
                                                            <li><strong class="mr-10">Share this:</strong></li>
                                                            <li class="social-facebook"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a></li>
                                                            <li class="social-twitter"> <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a></li>
                                                            <li class="social-instagram"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a></li>
                                                            <li class="social-linkedin"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="detail-info">
                                                        <h3 class="title-detail mt-30">{{$pro->name}}</h3>
                                                        <div class="product-detail-rating">
                                                            <div class="pro-details-brand">
                                                                <span> Brands: <a href="shop-grid-right.html">Bootstrap</a></span>
                                                            </div>
                                                            <div class="product-rate-cover text-end">
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width:90%">
                                                                    </div>
                                                                </div>
                                                                <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix product-price-cover">
                                                            <div class="product-price primary-color float-left">
                                                                <ins><span class="text-brand">$120.00</span></ins>
                                                                <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                                                <span class="save-price  font-md color3 ml-15">25% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                                        <div class="short-desc mb-30">
                                                            <p class="font-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi,!</p>
                                                        </div>

                                                        <div class="attr-detail attr-color mb-15">
                                                            <strong class="mr-10">Color</strong>
                                                            <ul class="list-filter color-filter">
                                                                <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                                                <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                                                <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                                                <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                                                <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                                                <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                                                <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="attr-detail attr-size">
                                                            <strong class="mr-10">Size</strong>
                                                            <ul class="list-filter size-filter font-small">
                                                                <li><a href="#">S</a></li>
                                                                <li class="active"><a href="#">M</a></li>
                                                                <li><a href="#">L</a></li>
                                                                <li><a href="#">XL</a></li>
                                                                <li><a href="#">XXL</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                                        <div class="detail-extralink">
                                                            <div class="detail-qty border radius">
                                                                <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                                <span class="qty-val">1</span>
                                                                <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                                            </div>
                                                            <div class="product-extra-link2">
                                                                <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                                <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-meta font-xs color-grey mt-50">
                                                            <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                                            <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
                                                            <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Detail Info -->
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                   

                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">
                            
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('assets/imgs/shop/product-10-1.jpg')}}" alt="">
                                                <img class="hover-img" src="{{ asset('assets/imgs/shop/product-10-2.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Music</a>
                                        </div>
                                        <h2><a href="shop-product-right.html">Sed tincidunt interdum</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$255.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two (Popular)-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                           
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="hover-img" src="{{ asset('assets/imgs/shop/product-8-1.jpg')}}" alt="">
                                                <img class="default-img" src="{{ asset('assets/imgs/shop/product-8-2.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Phone</a>
                                        </div>
                                        <h2><a href="shop-product-right.html">Vivamus sollicitudin</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$1275.85 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>
        <section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                    <img src="{{ asset('assets/imgs/banner/banner-4.png')}}" alt="">
                    <div class="banner-text d-md-block d-none">
                        <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
                        <h1 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h1>
                        <a href="shop-grid-right.html" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                       
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="{{ asset('assets/imgs/shop/category-thumb-8.jpg')}}" alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Hats</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="banners mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{ asset('assets/imgs/banner/banner-1.png')}}" alt="">
                            <div class="banner-text">
                                <span>Smart Offer</span>
                                <h4>Save 20% on <br>Woman Bag</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{ asset('assets/imgs/banner/banner-2.png')}}" alt="">
                            <div class="banner-text">
                                <span>Sale off</span>
                                <h4>Great Summer <br>Collection</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="{{ asset('assets/imgs/banner/banner-3.png')}}" alt="">
                            <div class="banner-text">
                                <span>New Arrivals</span>
                                <h4>Shop Today’s <br>Deals & Offers</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
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
                                    <a href="{{route('product-details',encrypt($recent->id))}}}">
                                        <img class="default-img" src="{{asset('images/products/'.$recent->image)}}" alt="">
                                        <img class="hover-img" src="{{asset('images/products/'.$recent->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                 </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">-25%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="C${{route('product-details',encrypt($recent->id))}}">Curabitur porta</a></h2>
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

                                           
        <section class="section-padding">
            <div class="container">
                <h3 class="section-title mb-20 wow fadeIn animated"><span>Featured</span> Brands</h3>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-1.png')}}" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-2.png')}}" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-3.png')}}" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-4.png')}}" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-5.png')}}" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-6.png')}}" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('assets/imgs/banner/brand-3.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

      
       
{{--      
        <section class="mb-45">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                        <div class="banner-img wow fadeIn animated mb-md-4 mb-lg-0">
                            <img src="{{ asset('assets/imgs/banner/banner-10.jpg')}}" alt="">
                            <div class="banner-text">
                                <span>Shoes Zone</span>
                                <h4>Save 17% on <br>All Items</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                        <h4 class="section-title style-1 mb-30 wow fadeIn animated">Deals & Outlet</h4>
                        <div class="product-list-small wow fadeIn animated">
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="{{ asset('assets/imgs/shop/thumbnail-3.jpg')}}" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Fish Print Patched T-shirt</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="{{ asset('assets/imgs/shop/thumbnail-4.jpg')}}" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Vintage Floral Print Dress</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="{{ asset('assets/imgs/shop/thumbnail-5.jpg')}}" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Multi-color Stripe Circle Print T-Shirt</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                        <h4 class="section-title style-1 mb-30 wow fadeIn animated">Top Selling</h4>
                        <div class="product-list-small wow fadeIn animated">
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="{{ asset('assets/imgs/shop/thumbnail-6.jpg')}}" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Geometric Printed Long Sleeve Blosue</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="{{ asset('assets/imgs/shop/thumbnail-7.jpg')}}" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Print Patchwork Maxi Dress</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="{{ asset('assets/imgs/shop/thumbnail-8.jpg')}}" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Daisy Floral Print Straps Jumpsuit</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title style-1 mb-30 wow fadeIn animated">Hot Releases</h4>
                        <div class="product-list-small wow fadeIn animated">
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="{{ asset('assets/imgs/shop/thumbnail-9.jpg')}}" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Floral Print Casual Cotton Dress</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="{{ asset('assets/imgs/shop/thumbnail-1.jpg')}}" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Ruffled Solid Long Sleeve Blouse</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img src="{{ asset('assets/imgs/shop/thumbnail-2.jpg')}}" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Multi-color Print V-neck T-Shirt</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    </main>

@endsection