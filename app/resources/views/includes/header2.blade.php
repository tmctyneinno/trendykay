 



<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li><i class="fi-rs-smartphone"></i> <a href="#">(+01) - 2345 - 6789</a></li>
                            <li><i class="fi-rs-marker"></i><a  href="page-contact.html">Our location</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Get great devices up to 50% off <a href="shop-grid-right.html">View details</a></li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today <a href="shop-grid-right.html">Shop now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>

                            @guest
                                <li><i class="fi-rs-user"></i><a href="{{route('login')}}">Log In / Sign Up</a></li>
                            @else
                                <li>
                                    <a class="language-dropdown-active" href="{{route('users.account')}}"> <i class="fi-rs-world"></i> Account <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><i class="fi-rs-user"></i><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit(); ">Log out</a>
                                        </li>
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
                    <a href="index.html"><img src="{{ asset('assets/imgs/theme/logo.svg')}}" alt="logo"></a>
                </div>
                <div class="header-right">
                    <div class="search-style-2">
                        <form action="#">
                            <select class="select-active">
                                <option>All Categories</option>
                                <option>Women's</option>
                                <option>Men's</option>
                                <option>Cellphones</option>
                                <option>Computer</option>
                                <option>Electronics</option>
                                <option> Accessories</option>
                                <option>Home & Garden</option>
                                <option>Luggage</option>
                                <option>Shoes</option>
                                <option>Mother & Kids</option>
                            </select>
                            <input type="text" placeholder="Search for items...">
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.html">
                                    <img class="svgInject" alt="Evara" src="{{ asset('assets/imgs/theme/icons/icon-heart.svg')}}">
                                    <span class="pro-count blue">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="shop-cart.html">
                                    <img alt="Evara" src="{{ asset('assets/imgs/theme/icons/icon-cart.svg')}}">
                                    <span class="pro-count blue">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Evara" src="{{ asset('assets/imgs/shop/thumbnail-3.jpg')}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                                <h4><span>1 × </span>$800.00</h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Evara" src="{{ asset('assets/imgs/shop/thumbnail-2.jpg')}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                                <h4><span>1 × </span>$3200.00</h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$4000.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="shop-cart.html" class="outline">View cart</a>
                                            <a href="shop-checkout.html">Checkout</a>
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
                    <a href="index.html"><img src="{{ asset('assets/imgs/theme/logo.svg')}}" alt="logo"></a>
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
                                    <a href="{{route('user.category', encrypt($cat->id))}}">
                                        {{-- <i class="evara-font-tshirt"></i> --}}
                                        {{$cat->name}}
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu ">
                                            @foreach($cat->subCategory as $pro)
                                                <li>
                                                    <a class="dropdown-item nav-link nav_item" href="{{route('user.category', encrypt($pro->id))}}">
                                                        {{$pro->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                @endforeach
{{--                               
                                <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Dresses</a></li> --}}
                               
                            </ul>
                            <div class="more_categories">Show more...</div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                <li>
                                    <a class="active" href="index.html">Home </a>
                                </li>
                                <li><a href="#">Products </a>
                                    
                                </li>
                                <li><a href="#">Blog </a>
                                   
                                </li>
                                <li><a href="#">Project <i class="fi-rs-angle-down"></i></a>
                                   
                                </li>
                                <li>
                                    <a href="{{route('pages','contacts')}}">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="hotline d-none d-lg-block">
                    <p><i class="fi-rs-headset"></i><span>Hotline</span> 1900 - 888 </p>
                </div>
                <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.html">
                                <img alt="Evara" src="{{ asset('assets/imgs/theme/icons/icon-heart.svg')}}">
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="{{route('carts.index')}}">
                                <img alt="Evara" src="{{ asset('assets/imgs/theme/icons/icon-cart.svg')}}">
                                <span class="pro-count white">
                                    @if(Cart::count() > 0)C${{number_format(Cart::priceTotalfloat())}} @endif
                                </span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right.html"><img alt="Evara" src="{{ asset('assets/imgs/shop/thumbnail-4.jpg')}}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                            <h3><span>1 × </span>$3500.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$383.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="shop-cart.html">View cart</a>
                                        <a href="shop-checkout.html">Checkout</a>
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
                <a href="index.html"><img src="{{ asset('assets/imgs/theme/logo.svg')}}" alt="logo"></a>
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
                <form action="#">
                    <input type="text" placeholder="Search for items…">
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
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
                        <li class="menu-item-has-children">
                            <span class="menu-expand"></span><a href="index.html">Home</a>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span>
                            <a href="shop-grid-right.html">Products</a>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span>
                            <a href="{{route('pages','contacts')}}">Blog</a>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span>
                            <a href="{{route('pages','contacts')}}" >Contact Us</a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a  href="page-contact.html"> Our location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="page-login-register.html">Log In / Sign Up </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="#">(+01) - 2345 - 6789 </a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
            </div>
        </div>
    </div>
</div>