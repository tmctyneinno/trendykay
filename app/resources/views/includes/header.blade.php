<header id="header" class="u-header u-header-left-aligned-nav">
    <div class="u-header__section">
        <!-- Topbar -->
        <div class="u-header-topbar py-2 d-none d-xl-block">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="topbar-left">
                        <a href="#" class="text-white font-size-13 hover-on-dark">Sole distributors of SofarSolar Products in Nigeria </a>
                    </div>
                    <div class="topbar-right ml-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a href="{{route('pages','contacts')}}" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                            </li>
                            @guest
                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a href="{{route('login')}}" class="u-header-topbar__nav-link">  <i class="ec ec-user mr-1"></i> Login </a>
                               </li>
                               <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a href="{{route('register')}}" class="u-header-topbar__nav-link">  <i class="ec ec-user mr-1"></i> Register </a>
                               </li>
                            @else

                            {{-- <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a href="" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track Your Order</a>
                            </li> --}}
                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                             <a href="{{route('users.account')}}" class="u-header-topbar__nav-link">  <i class="ec ec-user mr-1"></i> My Account  </a>
                            </li>
                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();" class="u-header-topbar__nav-link">  <i class="ec ec-logout mr-1"></i> Logout </a>
                              
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
        <div class="py-2 py-xl-5 bg-primary-down-lg">
            <div class="container my-0dot5 my-xl-0">
                <div class="row align-items-center">
                    <!-- Logo-offcanvas-menu -->
                    <div class="col-auto">
                        <!-- Nav -->
                        <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                            <!-- Logo -->
                            <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="{{route('index')}}" aria-label="">
                               
                               <img src="{{asset('/images/logo.png')}}"> 
                            </a>
                            <!-- End Logo -->

                            <!-- Fullscreen Toggle Button -->
                            <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
                                aria-controls="sidebarHeader"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarHeader1"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInLeft"
                                data-unfold-animation-out="fadeOutLeft"
                                data-unfold-duration="500">
                                <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                    <span class="u-hamburger__inner"></span>
                                </span>
                            </button>
                        </nav>
                        <!-- ========== HEADER SIDEBAR ========== -->
                        @include('includes.sidebar')
                        <!-- ========== END HEADER SIDEBAR ========== -->
                    </div>
                    
                    <div class="col d-none d-xl-block">
                        {{Form::open(['action' => 'HomeController@search', 'method'=>'get', 'class'=>'js-focus-state'])}} 
                            <label class="sr-only" for="searchproduct">Search Products</label>
                            <div class="input-group">
                                <input type="text" value="@if(isset($search)) {{$search}} @endif" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 border-defaults" name="search" id="searchproduct-item" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                <div class="input-group-append">
                                    <button   class="btn border-defaults height-40 py-2 px-3 " style="background:#103178" type="submit" id="searchProduct1">
                                        <span class="text-white" style="color:#fff">SEARCH</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                        <div class="d-inline-flex">
                            <ul class="d-flex list-unstyled mb-0 align-items-center">
                                <!-- Search -->
                                <li class="col d-xl-none px-2 px-sm-3 position-static">
                                    <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Search"
                                        aria-controls="searchClassic"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-unfold-target="#searchClassic"
                                        data-unfold-type="css-animation"
                                        data-unfold-duration="300"
                                        data-unfold-delay="300"
                                        data-unfold-hide-on-scroll="true"
                                        data-unfold-animation-in="slideInUp"
                                        data-unfold-animation-out="fadeOut">
                                        <span class="ec ec-search"></span>
                                    </a>

                                    <!-- Input -->
                                    <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                        {{Form::open(['action' => 'HomeController@search', 'method'=>'get', 'class'=>'js-focus-state input-group px-3'])}}    
                                            <input class="form-control" type="text" name="search" placeholder="Search Product" value="@if(isset($search)) {{$search}} @endif ">
                                            <div class="input-group-append">
                                                <button class="btn border- px-3" type="submit"><i class="font-size-18 ec ec-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Input -->
                                </li>
                                <!-- End Search -->
                                <li class="col d-none d-xl-block">
                                    {{-- <a href="../shop/compare.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare"></i></a> --}}
                                </li>
                                <li class="col d-none d-xl-block">
                                    {{-- <a href="../shop/wishlist.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites">
                                        <i class="font-size-22 ec ec-favorites"></i></a> --}}
                                    </li>
                                <li class="col  px-2 px-sm-3">
                                    <a href="{{route('users.account')}}" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account">
                                        <i class="font-size-22 ec ec-user"></i></a>
                                </li> 
                                 <li class="col pr-xl-0 px-2 px-sm-3 d-xl-none">
                                    <a href="{{route('carts.index')}}" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                        <i class="font-size-22 ec ec-shopping-bag" ></i>
                                        <span class="bg-lg-down-black width-22 height-22  cartReload position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12"
                                         style=" color:#fff"> @if(Cart::count()> 0){{Cart::count()}}  @else 0 @endif</span>
                                        <span class="d-none d-xl-block font-weight-bold cartReloads font-size-16 text-gray-90 ml-3">
                                             @if(Cart::count() > 0)₦{{number_format(Cart::priceTotalfloat())}} @endif
                                        </span>
                                    </a>
                                </li>
                                <li class="col pr-xl-0 px-2 px-sm-3 d-none d-xl-block">
                                    <a href="{{route('carts.index')}}" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                        <i class="font-size-22 ec ec-shopping-bag"></i>
                                        <span class="bg-lg-down-black width-22 height-22 cartReload bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12"> @if(Cart::count()> 0){{Cart::count()}}  @else 0 @endif</span>
                                        <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3 cartReloads"> 
                                            @if(Cart::count() > 0)₦{{number_format(Cart::priceTotalfloat())}} @endif</span>
                                   
                                   </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-xl-block container">
            <div class="row">
                <div class="col-md-auto d-none d-xl-block">
                    <div class="max-width-270 min-width-270">
                        <div id="basicsAccordion">
                            <div class="card border-0">
                                <div class="card-header card-collapse border-0" id="basicsHeadingOne">
                                    <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-white"
                                        data-toggle="collapse"
                                        data-target="#basicsCollapseOne"
                                        aria-expanded="true"
                                        aria-controls="basicsCollapseOne">
                                        <span class="ml-0 text-white mr-2">
                                            <span class="fa fa-list-ul"></span>
                                        </span>
                                        <span class="pl-1 text-white">Product Categories</span>
                                    </button>
                                </div>
                                <div id="basicsCollapseOne" class="collapse vertical-menu"
                                    aria-labelledby="basicsHeadingOne"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-0">
                                        <nav class="js-mega-menu navar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                            <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                               
                                                <ul class="navbar-nav u-header__navbar-nav">
                                                @foreach($menu_categories as $cat )
                                                <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                data-toggle="collapse" 
                                                aria-expanded="true"
                                                 aria-controls="sidebarNav1Collapse"
                                                  data-target="#sidebarNav1Collapse">
                                                    <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="{{route('user.category', encrypt($cat->id))}}" aria-haspopup="true" aria-expanded="false">{{$cat->name}}</a>
                                                    <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu">
                                                        <div class="row u-header__mega-menu-wrapper">
                                                          
                                                            <div class="col mb-3 mb-sm-0">
                                                                <span class="u-header__sub-menu-title">{{$cat->name}}</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    @foreach($cat->subCategory as $pro)
                                                                    <li>
                                                                        <a class="nav-link u-header__sub-menu-nav-link" href="{{route('user.category', encrypt($pro->id))}}">
                                                                            {{$pro->name}}
                                                                        </a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </li>
                                  
                                                @endforeach
                                                </ul>
                                               
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                        <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                            <ul class="navbar-nav u-header__navbar-nav">
                               @foreach ($menu as $mnu )
                                <li class="nav-item u-header__nav-item">
                                    <a class="nav-link u-header__nav-link" href="{{route('pages',$mnu->slug)}}" aria-haspopup="true" aria-expanded="false">{{$mnu->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
