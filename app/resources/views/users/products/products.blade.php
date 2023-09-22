    @extends('layouts.app')
    @section('content')
    @section('title', $title)
            <main class="main">
                <div class="page-header breadcrumb-wrap">
                    <div class="container">
                        <div class="breadcrumb">
                            <a href="index.html" rel="nofollow">Home</a>
                            <span></span> {{$product->category->name}}
                            <span></span> {{$title}}
                        </div>
                    </div>
                </div>
                <section class="mt-50 mb-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="product-detail accordion-detail">
                                    <div class="row mb-50">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="detail-gallery">
                                              
                                                <!-- MAIN SLIDES -->
                                                <div class="product-image-slider">
                                                    @foreach (json_decode($product->gallery) as $key =>$imag )
                                                        @if($imag !=null)
                                                            <figure class="border-radius-10" style="text-align:center">
                                                                <img src="{{asset('images/products/'.$imag)}}" alt="product image">
                                                            </figure>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <!-- THUMBNAILS -->
                                                <div class="slider-nav-thumbnails pl-15 pr-15">
                                                    @foreach (json_decode($product->gallery) as $key =>$imag )
                                                    @if($imag !=null)
                                                                <div><img src="{{asset('images/products/'.$imag)}}" alt="product image"></div>
                                                          
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- End Gallery -->
                                            <div class="social-icons single-share">
                                                
                                                <ul class="text-grey-5 d-inline-block">
                                                    <li><strong class="mr-10">Share this:</strong></li>
                                                    <li class="social-facebook"><a href="#">
                                                        <img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a></li>
                                                    <li class="social-twitter"> <a href="#">
                                                        <img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a></li>
                                                    <li class="social-instagram"><a href="#">
                                                        <img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a></li>
                                                    <li class="social-linkedin"><a href="#">
                                                        <img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="detail-info">
                                                <h2 class="title-detail">{{$product->name}} </h2>
                                                <div class="product-detail-rating">
                                                    <div class="pro-details-brand">
                                                        <span> Availability <a href="#">&nbsp; In-Stock</a></span>
                                                    </div>
                                                    <div class="product-rate-cover text-end">
                                                        {{-- <div class="product-rate d-inline-block">
                                                            <div class="product-rating" style="width:90%">
                                                            </div>
                                                        </div> --}}
                                                        {{-- <span class="font-small ml-5 text-muted"> (25 reviews)</span> --}}
                                                    </div>
                                                </div>
                                                <div class="clearfix product-price-cover">
                                                    <div class="product-price primary-color float-left">
                                                        <ins><span class="text-brand">C${{number_format($product->sale_price)}} </span></ins>
                                                        <ins><span class="old-price font-md ml-15">C${{number_format($product->price)}}</span></ins>
                                                        <span class="save-price  font-md color3 ml-15">{{$product->discount}}% Off</span>
                                                    </div>
                                                </div>
                                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                                <div class="short-desc mb-30">
                                                    {{-- <p>{!!$product->description!!}</p> --}}
                                                </div> 
                                                <div class="product_sort_info font-xs mb-30">
                                                    <ul>
                                                        <li class="mb-10"><i class="fi-rs-crown mr-5"></i> 1 Year Brand Warranty</li>
                                                        <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy</li>
                                                        <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                                    </ul>
                                                </div>
                                                <div class="attr-detail attr-color mb-15">
                                                    {{-- <strong class="mr-10">Color
                                                        <ul class="list-filter color-filter">
                                                            @foreach ($product->colors as $color)
                                                                <li >{{ Str::ucfirst($color->name)  }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </strong> --}}
                                                    {{-- <br> --}}
                                                    <style>
                                                        /* Style the checkboxes */
                                                        .list-color input[type="checkbox"] {
                                                            width: 16px; /* Adjust the width as needed */
                                                            height: 16px; /* Adjust the height as needed */
                                                            margin-right: 5px; /* Adjust the spacing between checkboxes and labels */
                                                        }
                                                    
                                                        /* Style the labels (color names) */
                                                        .list-color label {
                                                            font-size: 14px; /* Adjust the font size as needed */
                                                        }
                                                        .product-color-wine {
                                                            background-color: #722f37; /* Set the background color to the desired wine color */
                                                        }
                                                        .product-color-blue {
                                                            background-color: rgb(9, 9, 199); /* Set the background color to the desired wine color */
                                                        }
                                                    </style>
                                                    <strong>
                                                        <label>Color</label>
                                                        <ul class="list-color list-filter color-filter">
                                                            @foreach ($product->colors as $color)
                                                                @if($color->name === 'wine')
                                                                    <li>
                                                                        <li><a  data-color="wine"><span class="product-color-wine"></span></a> {{ Str::ucfirst($color->name) }}</li>
                                                                    </li>
                                                                @endif
                                                                @if($color->name === 'green')
                                                                    <li>
                                                                        <li><a  data-color="green"><span class="product-color-green"></span></a> {{ Str::ucfirst($color->name) }}</li>
                                                                    </li>
                                                                @endif
                                                                @if($color->name === 'blue')
                                                                    <li>
                                                                        <li><a  data-color="blue"><span class="product-color-blue"></span></a> {{ Str::ucfirst($color->name) }}</li>
                                                                    </li>
                                                                @endif
                                                                @if($color->name === 'red')
                                                                    <li>
                                                                        <li><a  data-color="Red"><span class="product-color-red"></span></a> {{ Str::ucfirst($color->name) }}</li>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </strong>
                                                    
                                                    {{-- <ul class="list-filter color-filter">
                                                        <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                                        <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                                        <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                                        <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                                        <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                                        <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                                        <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                                    </ul> --}}
                                                </div>
                                                <div class="attr-detail attr-size">
                                                    <strong class="mr-10">Size</strong>
                                                    <ul class="list-size list-filter size-filter font-small">
                                                        @foreach ($product->sizes as $size)
                                                            <li>
                                                                <label>
                                                                    <input type="checkbox" name="selected_colors[]" value="{{ $size->name }}"><br>
                                                                    {{ Str::ucfirst($size->name) }}
                                                                </label>
                                                            </li>
                                                        @endforeach
                                                       {{-- <li><a href="#">S</a></li>
                                                        <li class="active"><a href="#">M</a></li>
                                                        <li><a href="#">L</a></li>
                                                        <li><a href="#">XL</a></li>
                                                        <li><a href="#">XXL</a></li> --}}
                                                    </ul>
                                                </div>
                                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                                <style>
                                                    
                                                    input[type="number"]::-webkit-inner-spin-button,
                                                    input[type="number"]::-webkit-outer-spin-button {
                                                      -webkit-appearance: none;
                                                      margin: 0;
                                                      display: none;
                                                    }
                                                  </style>
                                                <div class="detail-extralink">
                                                    {{-- <div class="col border radius">
                                                        <input class="qty-val" 
                                                        name="qty" id="qty2" type="number" value="1">
                                                    </div> --}}

                                                    <div class="col-auto pr-1">
                                                        <div class="input-group">
                                                            <div class="col  radius " style="margin-right:10px">
                                                            <input style="width: 80px; height: 40px; text-align: center; " type="number" 
                                                            class="qty-val " name="counter product-quantity" value="1" title="Qty" id="myNumberInput">
                                                            </div>
                                                            <div class="input-group-append">
                                                                <button style="padding: 8px 10px;" class="js-plus btn btn-icon btn-xs btn-outline-secondary increment-btn">+</button>
                                                                <button style="padding: 8px 10px;" class="js-minus btn btn-icon btn-xs btn-outline-secondary decrement-btn">-</button>
                                                            </div>
                                                        </div>
                                                    </div>                                                    
                                                    {{-- <div class="detail-qty border radius">
                                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                        <span class="qty-val" id="qty2">1</span>
                                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                                    </div> --}}
                                                    <div class="product-extra-link2" style="height: 40px;">
                                                        <button class="button button-add-to-cart " id="add2cart">Add to cart</button>
                                                    </div>
                                                </div>
                                                <span class="badge-success p-2 border-radius-5" hidden id="alerts"> Item added to cart successfully</span>
                                    
                                                <ul class="product-meta font-xs color-grey mt-50">
                                                    {{-- <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li> --}}
                                                    {{-- <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li> --}}
                                                    <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span></li>
                                                </ul>
                                            </div>
                                            <!-- Detail Info -->
                                        </div> 
                                    </div>
                                    <div class="tab-style3">
                                        <ul class="nav nav-tabs text-uppercase">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Additional info</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews (3)</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content shop_info_tab entry-main-content">
                                            <div class="tab-pane fade show active" id="Description">
                                                <div class="">
                                                    <p>{!!$product->description!!}</p>
                                                    
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="Additional-info">
                                                {{-- @if(isset($product->specification))
                                                <iframe src="{{asset('images/pdf/'.$product->specification)}}" width="800px" height="500px"> </iframe>
                                                @endif --}}
                                                <table class="font-md">
                                                    <tbody>
                                                        <tr class="stand-up">
                                                            <th>Stand Up</th>
                                                            <td>
                                                                <p>35″L x 24″W x 37-45″H(front to back wheel)</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="folded-wo-wheels">
                                                            <th>Folded (w/o wheels)</th>
                                                            <td>
                                                                <p>32.5″L x 18.5″W x 16.5″H</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="folded-w-wheels">
                                                            <th>Folded (w/ wheels)</th>
                                                            <td>
                                                                <p>32.5″L x 24″W x 18.5″H</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="door-pass-through">
                                                            <th>Door Pass Through</th>
                                                            <td>
                                                                <p>24</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="frame">
                                                            <th>Frame</th>
                                                            <td>
                                                                <p>Aluminum</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="weight-wo-wheels">
                                                            <th>Weight (w/o wheels)</th>
                                                            <td>
                                                                <p>20 LBS</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="weight-capacity">
                                                            <th>Weight Capacity</th>
                                                            <td>
                                                                <p>60 LBS</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="width">
                                                            <th>Width</th>
                                                            <td>
                                                                <p>24″</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="handle-height-ground-to-handle">
                                                            <th>Handle height (ground to handle)</th>
                                                            <td>
                                                                <p>37-45″</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wheels">
                                                            <th>Wheels</th>
                                                            <td>
                                                                <p>12″ air / wide track slick tread</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="seat-back-height">
                                                            <th>Seat back height</th>
                                                            <td>
                                                                <p>21.5″</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="head-room-inside-canopy">
                                                            <th>Head room (inside canopy)</th>
                                                            <td>
                                                                <p>25″</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="pa_color">
                                                            <th>Color</th>
                                                            <td>
                                                                <p>Black, Blue, Red, White</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="pa_size">
                                                            <th>Size</th>
                                                            <td>
                                                                <p>M, S</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade active show" id="Reviews">
                                                <!--Comments-->
                                                <div class="comments-area">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <h4 class="mb-30">Customers Review</h4>
                                                            <hr>
                                                            <div class="comment-list">
                                                                @if(count($rating)>0)
                                                                    @foreach($rating as $reviews)
                                                                        <!--single-comment -->
                                                                        <div class="single-comment justify-content-between d-flex">
                                                                            <div class="user justify-content-between d-flex">
                                                                                <div class="thumb text-center">
                                                                                    <img src="assets/imgs/page/avatar-7.jpg" alt="">
                                                                                    <h6><a href="#">{{$reviews->name}}</a></h6>
                                                                                    <p class="font-xxs">{{$reviews->created_at->format('d/m/yy')}}</p>
                                                                                </div>
                                                                                <div class="desc">
                                                                                    
                                                                                    <div class="product-rate d-inline-block">
                                                                                        @if($reviews->rating == 1)
                                                                                            <div class="product-rating" style="width:20%">
                                                                                            </div>
                                                                                        @endif
                                                                                        @if($reviews->rating == 2)
                                                                                            <div class="product-rating" style="width:40%">
                                                                                            </div>
                                                                                        @endif
                                                                                        @if($reviews->rating == 3)
                                                                                            <div class="product-rating" style="width:60%">
                                                                                            </div>
                                                                                        @endif
                                                                                        @if($reviews->rating == 4)
                                                                                            <div class="product-rating" style="width:80%">
                                                                                            </div>
                                                                                        @endif
                                                                                        @if($reviews->rating == 5)
                                                                                            <div class="product-rating" style="width:100%">
                                                                                            </div>
                                                                                        @endif
                                                                                        
                                                                                        {{-- <?php $xx = 0?> 
                                                                                            @while($xx < $reviews->rated)
                                                                                                <small class="fas fa-star"></small>
                                                                                                <?php $xx++ ?>
                                                                                                @endwhile
                                                                                                @if($reviews->rating == 1)
                                                                                                <div class="product-rating" style="width:20%">
                                                                                                </div>
                                                                                                @elseif($reviews->rated == 2)
                                                                                                <div class="product-rating" style="width:40%">
                                                                                                </div>
                                                                                                @elseif($reviews->rated == 3)
                                                                                                <div class="product-rating" style="width:60%">
                                                                                                </div>
                                                                                                @elseif($reviews->rated == 4)
                                                                                                <div class="product-rating" style="width:80%">
                                                                                                </div>
                                                                                                @elseif( $reviews->rated == 5 )
                                                                                                <div class="product-rating" style="width:100%">
                                                                                                </div>
                                                                                        @endif --}}
                                                                                    </div>
                                                                                    <p>{{$reviews->description}}</p>
                                                                                    <div class="d-flex justify-content-between">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <p class="font-xs mr-30">{{$reviews->email}} </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @else
                                                                    <h6 style="color:gray">There is no Review yet for this product, be the first to say a review</h6>
                                                                   
                                                                @endif
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h4 class="mb-30">Add a review</h4>
                                                            <!--comment form-->
                                                            <div class="comment-form">
                                                                {{-- <div class="product-rate d-inline-block mb-30">
                                                                </div> --}}
                                                                <div class="row">
                                                                    <div class="">
                                                                        {{Form::open(['action' => ['HomeController@Addreview',$product->id], 'id'=>'commentForm', 'method'=>'POST', 'class'=>'form-contact comment_form' ])}}
                                                                        
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <label for="rating" class="form-label mb-0">Rate</label>
                                                                                        <select name="rated" id="rating" class="form-control focus-shadow-0">
                                                                                            <option value="5">★★★★★ (5/5)</option>
                                                                                            <option value="4">★★★★☆ (4/5)</option>
                                                                                            <option value="3">★★★☆☆ (3/5)</option>
                                                                                            <option value="2">★★☆☆☆ (2/5)</option>
                                                                                            <option value="1">★☆☆☆☆ (1/5)</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <textarea data-msg="Please enter your message." data-error-class="u-has-error"
                                                                                        data-success-class="u-has-success" class="form-control w-100" name="description" id="comment" cols="30" rows="9" placeholder="Your Review"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <button type="submit" class="button button-contactForm">Submit Review</button>
                                                                            </div>

                                                                        {{Form::close()}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="row mt-10">
                                        <div class="col-12">
                                            <h3 class="section-title style-1 mb-30">Related Products</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="row related-products">
                                                @foreach($related as $related_pro)
                                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                    <div class="pro-details-brand">
                                                        <span> <a href="{{route('user.category', $related_pro->category->id)}}">{{$related_pro->category->name}}</a></span>
                                                    </div>
                                                    <div class="product-cart-wrap small hover-up">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="{{route('user.category', $related_pro->category->id)}}" tabindex="0">
                                                                    <img class="default-img" src="{{asset('images/products/'.$related_pro->image)}}" alt="">
                                                                    <img class="hover-img" src="{{asset('images/products/'.$related_pro->image)}}" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">{{$related_pro->discount}}%</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <h2><a href="{{route('user.category', $related_pro->category->id )}}" tabindex="0">{{$related_pro->name}}</a></h2>
                                                            <div class="rating-result" title="90%">
                                                                <span>
                                                                </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <span>C${{number_format($related_pro->sale_price)}}  </span>
                                                                <span class="old-price">C${{number_format($related_pro->price)}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-3 primary-sidebar sticky-sidebar">
                                <div class="widget-category mb-30">
                                    <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                                    <!-- Menu List -->
                                    @foreach($category as $catt)
                                    <ul class="categories">
                                        <li><a href="#">{{$catt->name}}</a></li>
                                    </ul>
                                    <!-- End Menu List -->
                                    @endforeach
                                    
                                </div>
                                <br>
                                <!-- Product sidebar Widget -->
                                <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                                    <div class="widget-header position-relative mb-20 pb-10">
                                        <h5 class="widget-title mb-10">New products</h5>
                                        <div class="bt-1 border-color-1"></div>
                                    </div>
                                    @foreach($products as $prods)
                                    <div class="single-post clearfix">
                                        <div class="image">
                                            <img src="{{asset('images/products/'.$prods->image)}}" alt="#">
                                        </div>
                                        <div class="content pt-10">
                                            <h5><a href="{{route('product-details', $prods->id )}}">{{$prods->name}}</a></h5>
                                            <p class="price mb-0 mt-5">C${{number_format($prods->price)}}</p>
                                            {{-- <div class="product-rate">
                                                <div class="product-rating" style="width:90%"></div>
                                            </div> --}}
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
    @section('scripts')

    <script>
        $(document).ready(function() {
            var myNumberInput = $('#myNumberInput');
            var incrementBtn = $('.increment-btn');
            var decrementBtn = $('.decrement-btn');
            var addToCartButton = $('#add2cart');
            // var counter = $('.counter');
            incrementBtn.on('click', function() {
                myNumberInput.val(parseInt(myNumberInput.val()) + 1);
            });

            decrementBtn.on('click', function() {
                var currentValue = parseInt(myNumberInput.val());
                if (currentValue > 1) {
                    myNumberInput.val(currentValue - 1);
                }
            });
            

            addToCartButton.on('click', function() {
                cartId = {!! json_encode($product->id) !!}
                $.ajaxSetup({ 
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                //alert('success'+myNumberInput.val());
                $.ajax({
                    url: "{{route('carts.add','')}}"+"/"+cartId,
                    type: "get",
                    data:{ 
                    qty:myNumberInput.val()
                    },
                    dataType: "json",
                    success:function(response){
                        if(response){
                            $('.cartReload').html(response.qty); 
                            console.log(response);
                            $('.cartReloads').html('C$' + thousands_separators(response.subtotal));
                            $('#alerts').attr('hidden', false); 
                            setTimeout(function() {
                                $('#alerts').hide();
                                location.reload();
                            }, 5);
                            toastr.success('Cart item quantity updated successfully');
                            //alert('success');
                        }
                    }
                });
            });
        });
        function thousands_separators(num)
        {
            var num_parts = num.toString().split(".");
            num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return num_parts.join(".");
        }

    </script>
    @if(session('success'))
        <script>
            // Display Toastr success notification
            toastr.success('{{ session('success') }}');
        </script>
    @endif
   
    <script type="text/javascript">
       toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        
    </script>
   


@endsection