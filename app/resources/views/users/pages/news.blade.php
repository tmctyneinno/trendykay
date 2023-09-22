@extends('layouts.app')
@section('content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{route('index')}}" rel="nofollow">Home</a>
                <span></span> Blog
            </div>
        </div>
    </div> 
    <section class="mt-50 mb-50">
        <div class="container custom">
            <div class="row">
                <div class="col-lg-9">
                    <div class="single-header mb-50">
                        <h3 class="font-xxl text-brand">Our Blog</h3>
                        <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                        </div>
                    </div>
                    <div class="loop-grid loop-list pr-30">
                        @foreach ($news as $blog )
                        <article class="wow fadeIn animated hover-up mb-30">
                            <div class="post-thumb" style="background-image: url({{asset('/images/news/'.$blog->image)}})">
                                <div class="entry-meta">
                                    <a class="entry-meta meta-2" href="{{route('news.details',encrypt($blog->id))}}">Dresses</a>
                                </div>
                            </div>
                            <div class="entry-content-2">
                                <h3 class="post-title mb-15">
                                    <a href="{{route('news.details',encrypt($blog->id))}}">{{$blog->title}}</a></h3>
                                <p class="post-exerpt mb-30">{!! substr($blog->content,0,500)!!}</p>
                                <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on"> <i class="fi-rs-clock"></i> 
                                            {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}
                                        </span>
                                        {{-- <span class="hit-count has-dot">17k Views</span> --}}
                                    </div>
                                    <a href="{{route('news.details',encrypt($blog->id))}}" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    <!--post-grid-->
                    {{-- <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">16</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>
                            </ul>
                        </nav>
                    </div> --}}
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
                                            <img src="{{asset('/images/news/'.$post->image)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h4 class="post-title mb-10 text-limit-2-row">{{$post->title}} </h4>
                                        <div class="entry-meta meta-13 font-xxs color-grey">
                                            <span class="post-on mr-10">
                                                 {{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}
                                                </span>
                                            {{-- <span class="hit-count has-dot ">126k Views</span> --}}
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