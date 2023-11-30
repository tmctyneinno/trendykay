<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li><i class="fi-rs-smartphone"></i> 
                                <a href="#">{{$settings->site_phone}} </a>
                                </li>
                            <li><i class="fi-rs-envelope"></i><a href="#">{{$settings->site_email}} </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                @foreach ($news as $new)
                                <li>{{$new->title}} </li>
                                
                                @endforeach
                               {{-- <li>{{$new->title}} <a href="{{route('news.details',encrypt($new->id))}}">View details</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>
                          
                            <li>  <a class="language-dropdown-active" href="{{route('aboutus')}}"> About Us</a></li>
                            <li>  <a class="language-dropdown-active" href="{{ url('pages/contacts')}}"> Contact Us </a></li>
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
                <div class="logo logo-width-1" >
                   <a href="{{route('index')}}"><img style="width:200px"  src="{{asset('/assets/'.$settings->logo)}}" alt="logo"></a>
                </div>
                <div class="header-right">
                    <div class="search-style-2">
                        {{Form::open(['action' => 'HomeController@search', 'method'=>'get', 'class'=>'js-focus-state'])}}
                           
                            <select class="select-active">
                                <option>All Categories</option>
                            </select>
                            <input type="text" name="search" placeholder="Search for items...">
                            {{ Form::close()}}
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{route('carts.index')}}">
                                    <img alt="Trendy Kay Collection" src="{{ asset('assets/imgs/theme/icons/icon-cart.svg')}}">
                                    @if(Cart::count()> 0) 
                                        <span class="pro-count blue cartReload">{{Cart::count()}}</span>  
                                    @else  
                                        <span class="pro-count blue"> 0 </span>
                                    @endif
                                </a>
                                @if(Cart::count()> 0) 
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <div class="shopping-cart-footer">
                                  
                                    <div class="shopping-cart-button">
                                       
                                        <a href="{{route('carts.index')}}" class="outline">View cart</a>
                                        <a href="{{route('checkout.index')}}">Checkout</a>
                                        
                                    </div>
                                    </div>
                                </div>
                                @endif
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
                    <a href="{{route('index')}}"><img src="{{ asset('/assets/'.$settings->logo)}}" alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categori-button-active" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-large">
                            <ul>
                                @foreach($menu_categories as $cat )
                                    
                                <li class="has-children">
                                    <a href="{{route('user.category', encrypt($cat->id))}}"><i class="evara-font-dress"></i>{{$cat->name}}</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            @foreach ($cat->products as $prods )                                                   
                                                            <li> <a class="dropdown-item nav-link nav_item" href="#"> <i class="evara-font-dress"></i>{{ $prods->name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                @foreach ($cat->products->take(1) as $prods )   
                                                <div class="header-banner2">
                                                    <img src="{{ asset('/images/products/'.$prods->image) }}" alt="menu_banner1">
                                                </div>
                                                @endforeach

                                            </li>
                                         
                                        </ul>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                @foreach($menu_categories->take(8) as $cat )
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
                <div class="hotline d-none d-lg-block">
                    <p><i class="fi-rs-headset"></i><span>Hotline</span> {{$settings->site_phone}} </p>
                </div>
                <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="shop-cart.html">
                                <img alt="Trendy Kay Collection" src="{{ asset('assets/imgs/theme/icons/icon-cart.svg')}}">
                                <span class="pro-count white">
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
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="{{route('index')}}"><img src="{{asset('/assets/'.$settings->logo)}}" alt="logo"></a>
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
           
        </div>
    </div>
</div>