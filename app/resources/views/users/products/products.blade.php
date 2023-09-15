    @extends('layouts.app2')
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
                                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                                <!-- MAIN SLIDES -->
                                                <div class="product-image-slider">
                                                    @foreach (json_decode($product->gallery) as $key =>$imag )
                                                        @if($imag !=null)
                                                            <figure class="border-radius-10">
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
                                                    
                                                    <div><img src="assets/imgs/shop/thumbnail-4.jpg" alt="product image"></div>
                                                    <div><img src="assets/imgs/shop/thumbnail-5.jpg" alt="product image"></div>
                                                    <div><img src="assets/imgs/shop/thumbnail-6.jpg" alt="product image"></div>
                                                    <div><img src="assets/imgs/shop/thumbnail-7.jpg" alt="product image"></div>
                                                    <div><img src="assets/imgs/shop/thumbnail-8.jpg" alt="product image"></div>
                                                    <div><img src="assets/imgs/shop/thumbnail-9.jpg" alt="product image"></div>
                                                </div>
                                            </div>
                                            <!-- End Gallery -->
                                            <div class="social-icons single-share">
                                                
                                                <ul class="text-grey-5 d-inline-block">
                                                    <li><strong class="mr-10">Share this:</strong></li>
                                                    <li class="social-facebook"><a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a></li>
                                                    <li class="social-twitter"> <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a></li>
                                                    <li class="social-instagram"><a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a></li>
                                                    <li class="social-linkedin"><a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="detail-info">
                                                <h2 class="title-detail">{{$product->name}} </h2>
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
                                                        <ins><span class="text-brand">C${{number_format($product->sale_price)}} </span></ins>
                                                        <ins><span class="old-price font-md ml-15">C${{number_format($product->price)}}</span></ins>
                                                        <span class="save-price  font-md color3 ml-15">{{$product->discount}}% Off</span>
                                                    </div>
                                                </div>
                                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                                <div class="short-desc mb-30">
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi? Officia doloremque facere quia. Voluptatum, accusantium!</p>
                                                </div>
                                                <div class="product_sort_info font-xs mb-30">
                                                    <ul>
                                                        <li class="mb-10"><i class="fi-rs-crown mr-5"></i> 1 Year AL Jazeera Brand Warranty</li>
                                                        <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy</li>
                                                        <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                                    </ul>
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
                                                @if(isset($product->specification))
                                                <iframe src="{{asset('images/pdf/'.$product->specification)}}" width="800px" height="500px"> </iframe>
                                                @endif
                                                {{-- <table class="font-md">
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
                                                </table> --}}
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="row mt-60">
                                        <div class="col-12">
                                            <h3 class="section-title style-1 mb-30">Related Products</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="row related-products">
                                                @foreach($related as $related_pro)
                                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                    <div class="pro-details-brand">
                                                        <span> <a href="{{route('user.category',encrypt($related_pro->category->id))}}">{{$related_pro->category->name}}</a></span>
                                                    </div>
                                                    <div class="product-cart-wrap small hover-up">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="{{route('user.category',encrypt($related_pro->category->id))}}" tabindex="0">
                                                                    <img class="default-img" src="{{asset('images/products/'.$related_pro->image)}}" alt="">
                                                                    <img class="hover-img" src="{{asset('images/products/'.$related_pro->image)}}" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">{{$related_pro->discount}}%</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <h2><a href="{{route('user.category',encrypt($related_pro->category->id))}}" tabindex="0">{{$related_pro->name}}</a></h2>
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
                                    <div class="banner-img banner-big wow fadeIn f-none animated mt-50">
                                        <img class="border-radius-10" src="assets/imgs/banner/banner-4.png" alt="">
                                        <div class="banner-text">
                                            <h4 class="mb-15 mt-40">Repair Services</h4>
                                            <h2 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h2>
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
                                <!-- Fillter By Price -->
                                <div class="sidebar-widget price_range range mb-30">
                                    <div class="widget-header position-relative mb-20 pb-10">
                                        <h5 class="widget-title mb-10">Fill by price</h5>
                                        <div class="bt-1 border-color-1"></div>
                                    </div>
                                    <div class="price-filter">
                                        <div class="price-filter-inner">
                                            <div id="slider-range"></div>
                                            <div class="price_slider_amount">
                                                <div class="label-input">
                                                    <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group">
                                        <div class="list-group-item mb-10 mt-10">
                                            <label class="fw-900">Color</label>
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                                <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                                                <br>
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                                <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                                                <br>
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                                <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                                            </div>
                                            <label class="fw-900 mt-15">Item Condition</label>
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">
                                                <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                                                <br>
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="">
                                                <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                                                <br>
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="">
                                                <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="shop-grid-right.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                                </div>
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
                                            <h5><a href="{{route('product-details',encrypt($prods->id))}}">{{$prods->name}}</a></h5>
                                            <p class="price mb-0 mt-5">C${{number_format($prods->price)}}</p>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width:90%"></div>
                                            </div>
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

   
<script type="text/javascript">
var $button = document.querySelector('.increment-btn');
var $counter = document.querySelector('.counter');

$button.addEventListener('click', function(){
$counter.value = parseInt($counter.value) + 1; // `parseInt` converts the `value` from a string to a number
}, false);

   var $bu = document.querySelector('.decrement-btn');
var $counter = document.querySelector('.counter');

$bu.addEventListener('click', function(){
$counter.value = parseInt($counter.value) - 1; // `parseInt` converts the `value` from a string to a number
}, false);
</script>

<script>	
	$('#add2cart').on('click', function(){	
	  cartId = {!! json_encode($product->id) !!}
	  qty = $('#qty2').val();
		  $.ajaxSetup({
			headers: {
			  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
			  });
	  $.ajax({
		url: "{{route('carts.add','')}}"+"/"+cartId,
		type: "get",
		data:{ 
		  qty:qty
		},
		 dataType: "json",
		success:function(response){
		  if(response){
			 $('.cartReload').html(response.qty); 
             console.log(response);
             $('.cartReloads').html('₦' + thousands_separators(response.subtotal));
             $('#alerts').attr('hidden', false); 
             setTimeout(function() {
                $('#alerts').hide();
             }, 3000);
		   }
		}
	  });
	});

function thousands_separators(num)
  {
    var num_parts = num.toString().split(".");
    num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return num_parts.join(".");
  }
</script>
@endsection