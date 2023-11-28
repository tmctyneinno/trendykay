@extends('layouts.app')
@section('content')

   
<main class="main single-page">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{route('index')}}" rel="nofollow">Home</a>
                <span></span> Pages
                <span></span> Privacy Policy
            </div>
        </div>
    </div>
    <section class="section-padding">
        <div class="container pt-25">
            <div class="row">
                {{-- align-self-center --}}
                <div class="col-lg-6  mb-lg-0 mb-4">
                    <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">About Trendy Kay Collections</h6>
                    {{-- <h1 class="font-heading mb-40">
                        About Trendy Kay Collections
                    </h1> --}}
                    @if ($aboutus )
                    <div class="card-body">
                        <p class="text-justify">
                            {!! $aboutus->content !!}
                        </p>
                    </div>
                    @else
                    <p>No About us found.</p>
                    @endif

                    {{-- <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Terms and Conditions</h6> --}}

                    {{-- @if ($termscondition )
                    <div class="card-body">
                        <p class="text-justify">
                            {!! $termscondition->content !!}
                        </p>
                    </div>
                    @else
                    <p>No About us found.</p>
                    @endif
                    --}}
                </div>
                <div class="col-lg-6">
                    {{-- <img src="assets/imgs/page/about-1.png" alt=""> --}}
                    @if ($privacypolicy )
                    <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">
                       Privacy Policy
                    </h6> 
                    <div class="card-body">
                        <p class="text-justify">
                            {!! $privacypolicy->content !!}
                        </p>
                    </div>
                    @else
                    <p>No Privacy policy found.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
  
    <section id="work" class="mt-40 pt-50 pb-50 section-border">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-12 col-md-12 ">
                    <h6 class="mt-0 mb-5 text-uppercase  text-brand font-sm wow fadeIn animated">Terms and Conditions</h6>
                    @if ($termscondition )
                    <div class="card-body">
                        <p class="text-justify w-50 m-auto text-grey-3 wow fadeIn animated">
                            {!! $termscondition->content !!}
                        </p>
                    </div>
                    @else
                    <p>No About us found.</p>
                    @endif
                  </div>
            </div>
            <div class="row">
               
            </div>
        </div>
    </section>
 
</main>
@endsection