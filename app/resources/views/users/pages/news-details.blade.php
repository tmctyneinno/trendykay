@extends('layouts.app')
@section('content')

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{route('index')}}" rel="nofollow">Home</a>
                <span></span> Blog
                <span></span> {{$newss->title}}
            </div>
        </div>
    </div> 
    <section class="mt-50 mb-50">
        <div class="container custom">
            <div class="row">
                <div class="col-lg-9">
                    <div class="single-page pr-30">
                        <div class="single-header style-2">
                            <h1 class="mb-30">{{$newss->title}}</h1>
                            <div class="single-header-meta">
                                <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                    <span class="post-by">By <a href="#">Jonh</a></span>
                                    <span class="post-on has-dot">{{ \Carbon\Carbon::parse($newss->created_at)->format('d M, Y') }}</span>
                                   
                                </div>
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
                        </div>
                        <figure class="single-thumbnail">
                            <img src="{{asset('/images/news/'.$newss->image)}}" alt="">
                        </figure>
                        <div class="single-content">
                            <p>{!! $newss->content !!}</p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="widget-area">
                        <div class="sidebar-widget widget_search mb-50">
                            <div class="search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search…">
                                    <button type="submit"> <i class="fi-rs-search"></i> </button>
                                </form>
                            </div>
                        </div>
                        <!--Widget categories-->
                        <div class="sidebar-widget widget_categories mb-40">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title">Categories</h5>
                            </div>
                            <div class="post-block-list post-module-1 post-module-5">
                                <ul>
                                    <li class="cat-item cat-item-2"><a href="blog-category-list.html">Beauty</a> (3)</li>
                                    <li class="cat-item cat-item-3"><a href="blog-category-list.html">Book</a> (6)</li>
                                    <li class="cat-item cat-item-4"><a href="blog-category-list.html">Design</a> (4)</li>
                                    <li class="cat-item cat-item-5"><a href="blog-category-list.html">Fashion</a> (3)</li>
                                    <li class="cat-item cat-item-6"><a href="blog-category-list.html">Lifestyle</a> (6)</li>
                                    <li class="cat-item cat-item-7"><a href="blog-category-list.html">Travel</a> (2)</li>
                                </ul>
                            </div>
                        </div>
                        <!--Widget latest posts style 1-->
                        <div class="sidebar-widget widget_alitheme_lastpost mb-20">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title">Recent Posts</h5>
                            </div>
                            <div class="row">
                                @foreach ($recent as $post )
                                <div class="col-12 sm-grid-content mb-30">
                                    <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                        <a href="blog-post-fullwidth.html">
                                            <img src="{{asset('/images/newss/'.$post->image)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h4 class="post-title mb-10 text-limit-2-row">{{$post->title}} </h4>
                                        <div class="entry-meta meta-13 font-xxs color-grey">
                                            <span class="post-on mr-10">                     
                                                {{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection