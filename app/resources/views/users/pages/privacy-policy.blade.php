@extends('layouts.app')
@section('content')

   
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    {{-- <span></span> Pages --}}
                    <span></span>Privacy Policy
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="single-page pr-30">
                            <div class="single-header style-2">
                                <h2>Privacy Policy</h2>
                                
                            </div>
                            <div class="single-content">
                                <h4>Welcome to Trendy Kay Collections Privacy Policy</h4>
                                <p> write up is needed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-area">
                            <div class="sidebar-widget widget_search mb-50">
                                {{-- <div class="search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Search…">
                                        <button type="submit"> <i class="fi-rs-search"></i> </button>
                                    </form>
                                </div> --}}
                            </div>
                            <!--Widget categories-->
                            <div class="sidebar-widget widget_categories mb-40">
                                <div class="widget-header position-relative mb-20 pb-10">
                                    <h5 class="widget-title">Categories</h5>
                                </div>
                                <div class="post-block-list post-module-1 post-module-5">
                                    <ul>
                                        @foreach($categories as $catt)
                                        <ul class="categories">
                                            <li class="cat-item cat-item-2">
                                                <a href="{{route('user.category', encrypt($catt->id))}}">{{$catt->name}}</a>
                                            </li>
                                        </ul>
                                        <!-- End Menu List -->
                                        @endforeach
                                       
                                    </ul>
                                </div>
                            </div>
                            
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection