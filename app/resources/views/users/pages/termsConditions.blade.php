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
                    <p>Not found.</p>
                    @endif
                  </div>
            </div>
            <div class="row">
               
            </div>
        </div>
    </section>
 
</main>
@endsection