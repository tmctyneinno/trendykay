<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li><i class="fi-rs-smartphone"></i> <a href="#">{{$settings->site_phone}}</a></li>
                            <li><i class="fi-rs-marker"></i><a  href="page-contact.html">{{$settings->site_email}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                @foreach ($news as $new)
                                    <li>{{$new->title}} </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>
                            @foreach ($menu as $mnu )
                            @if(strtolower($mnu->slug) != 'home' && strtolower($mnu->slug) != 'products' )
                            <li>
                                <a class=" " href="{{route('pages',$mnu->slug)}}">{{$mnu->name}} </a>
                            </li>
                            @endif
                            @endforeach

                            @guest
                                <li><i class="fi-rs-user"></i><a href="{{route('login')}}">Log In / Sign Up</a></li>
                            @else
                                <li>
                                    <a class="language-dropdown-active" href="{{route('users.account')}}"> <i class="fi-rs-world"></i> Account <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="{{route('users.orders')}}" >Orders</a></li>
                                        <li><a href="{{route('user.account.details')}}" >Settings</a></li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a></li>
                                        
                                    </ul>
                                </li> 
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form> 
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="{{route('index')}}"><img src="{{ asset('/assets/logo.jpeg')}}" alt="logo"></a>
                </div>
                <div class="header-right">
                    <div class="search-style-1">
                        {{ Form::open(['action' => 'HomeController@search', 'method'=>'get']) }}
                        <div class="row">
                            <div class="col-xl-12">
                                <input type="text" value="@if(isset($search)) {{$search}} @endif" name="search" id="searchproduct-item" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
                            </div>
                            <div class=" ">
                                <button type="submit" class="btn btn-fill-out text-color" style="background:#088178; color:#fff; height: 38px;"><i class="fi-rs-search"></i></button>
                            </div>
                        </div>
                        {{ Form::close()}}
                    </div>
                    
                    

                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{route('carts.index')}}">
                                    <img alt="Trendy Kay Collection" src="{{ asset('assets/imgs/theme/icons/icon-cart.svg')}}">
                                    <span class="pro-count blue cartCount"> 
                                        @if(Cart::count() > 0)
                                            {{Cart::count()}}
                                        @else
                                            0
                                        @endif
                                    </span>  
                                   
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        @if (Cart::count() > 0) 
                                            @foreach (Cart::content()->take(4) as $carts)
                                                <li> 
                                                    <div class="shopping-cart-img">
                                                        <a href="{{route('carts.index')}}">
                                                            <img alt="Rrendy" src="{{asset('images/products/' .$carts->model->image)}}">
                                                        </a>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="{{route('carts.index')}}">{{$carts->model->name}}</a></h4>
                                                        <h4><span>{{$carts->qty}} × </span>C${{number_format($carts->model->sale_price)}}</h4>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                    </div>
                                                </li>
                                             @endforeach
                                        @else
                                            <span class="text-danger" style="color: red">No item in cart</span>
                                        @endif
                                    </ul>
                                    @php
                                        $priceTotal = Cart::priceTotal();
                                        $tax = $priceTotal * 0.12; // Calculate the tax amount (12% of the subtotal)
                                        $totalPrice = $priceTotal + $tax; // Add the tax to the subtotal to get the total price
                                    @endphp
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Subtotal <span>C${{ Cart::subTotal()}}</span></h4>
                                        </div>
                                        <div class="shopping-cart-total">
                                            <h4>Total <span >C${{ number_format($totalPrice, 2)  }}</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="{{route('carts.index')}}" class="outline">View cart</a>
                                            <a href="{{route('checkout.index')}}">Checkout</a>
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
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="{{route('index')}}"><img src="{{ asset('assets/logo.png')}}" alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                   
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                @foreach($menu_categories as $cat )
                                <li class="mega-menu-col">
                                    <a href="{{route('user.category', encrypt($cat->id))}}">
                                        {{$cat->name}}
                                    </a>
                                    
                                </li>
                                @endforeach
                               
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                       
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="#">
                                <img alt="Trendy Kay Collection" src="{{ asset('assets/imgs/theme/icons/icon-cart.svg')}}">
                                <span class="pro-count white cartCount"> 
                                    @if(Cart::count() > 0)
                                        {{Cart::count()}}
                                    @else
                                        0
                                    @endif
                                </span> 
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul> 
                                    @if (Cart::count() > 0) 
                                        @foreach (Cart::content()->take(4) as $carts)
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="{{route('carts.index')}}">
                                                <img alt="Trendy Kay Collection" src="{{asset('images/products/' .$carts->model->image)}}">
                                            </a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="{{route('carts.index')}}">{{$carts->model->name}}</a></h4>
                                            <h3><span>{{$carts->qty}} × </span>C${{number_format($carts->model->price)}}</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    @endforeach
                                    @else
                                        <span class="text-danger" style="color: red">No item in cart</span>
                                    @endif
                                </ul>
                                @php
                                $priceTotal = Cart::priceTotal();
                                $tax = $priceTotal * 0.12; // Calculate the tax amount (12% of the subtotal)
                                $totalPrice = $priceTotal + $tax; // Add the tax to the subtotal to get the total price
                                @endphp
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>C${{ number_format($totalPrice, 2)  }}</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="{{route('carts.index')}}">View cart</a>
                                        <a href="{{route('checkout.index')}}">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    function updateCartCount() {
       $.ajax({
           url: '{{ route('cart.getcount') }}',
           type: 'GET',
           dataType: 'json',
           success: function(response) {
               var cartCount = response.cartCount;
               $('.cartCount').text(cartCount); 
               //alert('yes');
           },
           error: function(xhr, status, error) {
               console.error(error); 
               //alert(error);
           }
       });
   }

   setInterval(updateCartCount, 1000);
</script>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="{{route('index')}}"><img src="{{ asset('assets/logo.png')}}" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                {{Form::open(['action' => 'HomeController@search', 'method'=>'get', 'class'=>'js-focus-state'])}}
                <input type="text" value="@if(isset($search)) {{$search}} @endif" name="search" 
                id="searchproduct-item" placeholder="Search for Products" 
                    aria-label="Search for Products" aria-describedby="searchProduct1" required> 
                    <button type="submit" id="searchProduct1"><i class="fi-rs-search"></i></button>
                {{ Form::close()}}
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <div class="main-categori-wrap mobile-header-border">
                    <a class="categori-button-active-2" href="#">
                        <span class="fi-rs-apps"></span> Browse Categories
                    </a>
                    <div class="categori-dropdown-wrap categori-dropdown-active-small">
                        <ul>
                            @foreach($menu_categories as $cat )
                                <li>
                                    <a href="{{route('user.category', encrypt($cat->id))}}">
                                    <i class="evara-font-dress"></i>{{$cat->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        @foreach ($menu as $mnu )
                        <li class="menu-item-has-children">
                            <span class="menu-expand"></span><a href="{{route('pages',$mnu->slug)}}">{{$mnu->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a  href="{{ url('pages/contacts')}}"> Our location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="{{route('login')}}">Log In / Sign Up </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="#">{{$settings->site_phone}} </a>
                    <a href="#">{{$settings->site_email}} </a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="{{ $settings->facebook}}"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                <a href="{{ $settings->instagram }}"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                <a href="{{ $settings->pinterest}}"><img src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                <a href="{{ $settings->tiktok}}"><img src="{{ asset('assets/imgs/theme/icons/icon-tiktok.svg')}}" alt=""></a>
            </div>
        </div>
    </div>
</div>

