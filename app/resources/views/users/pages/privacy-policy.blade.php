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
 
</main>
@endsection