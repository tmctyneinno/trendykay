@extends('layouts.app')
@section('content')
        <!-- ========== END HEADER ========== -->
        <main class="main">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{route('index')}}" rel="nofollow">Home</a>
                        <span></span> Shop
                    </div>
                </div>
            </div>
            <section class="mt-50 mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9"> 
                            <div class="shop-product-fillter">
                                <div class="totall-product">
                                    <p> We found <strong class="text-brand">
                                        @if($productCount > 0)
                                            {{ $productCount }}
                                        @else
                                            0
                                        @endif
                                    </strong> items for you!</p>
                                </div>
                                <div class="sort-by-product-area">
                                    <div class="sort-by-cover mr-10">
                                        <div class="sort-by-product-wrap">
                                            <div class="sort-by">
                                                <span><i class="fi-rs-apps"></i>Show:</span>
                                            </div>
                                            <div class="sort-by-dropdown-wrap">
                                                <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="sort-by-dropdown">
                                            <ul>
                                                <li><a class="active" href="#">50</a></li>
                                                <li><a href="#">100</a></li>
                                                <li><a href="#">150</a></li>
                                                <li><a href="#">200</a></li>
                                                <li><a href="#">All</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- <div class="sort-by-cover">
                                        <div class="sort-by-product-wrap">
                                            <div class="sort-by">
                                                <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                            </div>
                                            <div class="sort-by-dropdown-wrap">
                                                <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="sort-by-dropdown">
                                            <ul>
                                                <li><a class="active" href="#">Featured</a></li>
                                                <li><a href="#">Price: Low to High</a></li>
                                                <li><a href="#">Price: High to Low</a></li>
                                                <li><a href="#">Release Date</a></li>
                                                <li><a href="#">Avg. Rating</a></li>
                                            </ul>
                                        </div>
                                    </div> --}} 
                                </div>
                            </div>
                            <div class="row product-grid-3">
                                
                                @forelse ($products as $product ) 
                                <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{route('product-details', $product->id )}}">
                                                    <img class="default-img" src="{{asset('/images/products/'.$product->image)}}" alt="">
                                                    <img class="hover-img" src="{{asset('/images/products/'.$product->image)}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" >
                                                <i class="fi-rs-search"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="best">{{number_format($product->discount,0)}}% </span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="{{route('product-details', $product->id)}}">{{$product->category->name}}</a>
                                            </div>
                                            <h2><a href="{{route('product-details', $product->id)}}">{{$product->name}}</a></h2>
                                            <div class="" title="90%">
                                                <span>
                                                    <br>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>C${{number_format($product->sale_price)}}</span>
                                                <span class="old-price">C${{number_format($product->price)}}</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="{{route('product-details', $product->id)}}"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <h4>No product found</h4>
                                @endforelse
                            </div>
                            <!--pagination-->
                            <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                                <nav aria-label="Page navigation example">
                                    
                                    <ul class="pagination justify-content-start">
                                        {{$products->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 primary-sidebar sticky-sidebar">
                            <div class="row">
                                <div class="col-lg-12 col-mg-6"></div>
                                <div class="col-lg-12 col-mg-6"></div>
                            </div>
                            <div class="widget-category mb-30">
                                <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                                <ul class="categories">
                                    @foreach($menu_categories as $catt)
                                        <li><a href="{{route('user.category',encrypt($catt->id))}}">{{$catt->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                               
                            <!-- Product sidebar Widget -->
                            <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                                <div class="widget-header position-relative mb-20 pb-10">
                                    <h5 class="widget-title mb-10">New products</h5>
                                    <div class="bt-1 border-color-1"></div>
                                </div>
                                @foreach($prod as $prods)
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{asset('images/products/'.$prods->image)}}" alt="#">
                                    </div>
                                    <div class="content pt-10">
                                        <h5><a href="{{route('product-details', $prods->id )}}">{{$prods->name}}</a></h5>
                                        <p class="price mb-0 mt-5">C${{number_format($prods->price)}}</p>
                                       
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </main>

@endsection