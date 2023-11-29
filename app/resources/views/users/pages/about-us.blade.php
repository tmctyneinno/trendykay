@extends('layouts.app')
@section('content')

   
<main class="main single-page">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{route('index')}}" rel="nofollow">Home</a>
                <span></span> Pages
                <span></span> About us
            </div>
        </div>
    </div>
    <section class="section-padding">
        <div class="container pt-25">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-lg-0 mb-4">
                    <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">About Trendy Kay Collections</h6>
                    {{-- <h1 class="font-heading mb-40">
                        About Trendy Kay Collections
                    </h1> --}}
                    <p>
                        Welcome to Trendy Kay Collections, where fashion meets passion!
                        At Trendy Kay, we believe that fashion is an expression of individuality and a reflection of personality.
                        Our collections are curated with care, embracing the latest trends while staying true to timeless style.
                        We understand that every wardrobe tells a unique story, and we're here to help you tell yours. 
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="assets/imgs/page/about-1.png" alt="">
                </div>
            </div>
        </div>
    </section>
  
    <section id="work" class="mt-40 pt-50 pb-50 section-border">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center mb-md-0 mb-4">
                    <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="assets/imgs/page/company-1.jpg" alt="">
                    <h4 class="mt-30 mb-15 wow fadeIn animated">Our Vision</h4>
                    <p class="text-grey-3 wow fadeIn animated">
                        To inspire confidence and empower individuals through stylish and affordable fashion. We envision a world where everyone 
                        can effortlessly express their identity through their clothing, making a statement without saying a word.
                    </p>
                </div>
                <div class="col-md-4 text-center mb-md-0 mb-4">
                    <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="assets/imgs/page/company-2.jpg" alt="">
                    <h4 class="mt-30 mb-15 wow fadeIn animated">Our Collections</h4>
                    <p class="text-grey-3 wow fadeIn animated">
                        Discover a world of possibilities with our diverse collections. From casual chic to sophisticated elegance, Trendy Kay Collections offers a wide range of 
                        clothing and accessories for every occasion. Our pieces are thoughtfully designed to blend comfort and style seamlessly.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="assets/imgs/page/company-3.jpg" alt="">
                    <h4 class="mt-30 mb-15 wow fadeIn animated">Quality Matters</h4>
                    <p class="text-grey-3 wow fadeIn animated">
                        We are committed to delivering quality that exceeds expectations. Each garment in our collections undergoes rigorous quality checks to ensure durability, comfort, and a perfect fit. 
                        We believe that true style is built on a foundation of quality craftsmanship.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="assets/imgs/page/company-3.jpg" alt="">
                    <h4 class="mt-30 mb-15 wow fadeIn animated">Sustainability</h4>
                    <p class="text-grey-3 wow fadeIn animated">
                        Trendy Kay Collections is dedicated to making fashion more sustainable. We strive to minimize our environmental footprint by embracing eco-friendly practices in our production processes. 
                        Our commitment to sustainability is a testament to our responsibility towards the planet and future generations.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="assets/imgs/page/company-3.jpg" alt="">
                    <h4 class="mt-30 mb-15 wow fadeIn animated">Customer Experience</h4>
                    <p class="text-grey-3 wow fadeIn animated">
                        Your satisfaction is our priority. Our customer service team is here to assist you at every step, from finding the perfect outfit to ensuring a smooth shopping experience. We value your feedback and continuously work to enhance our services.
                        Join us on this fashion journey, where every piece is a statement and every outfit tells a story. Welcome to Trendy Kay Collections – where style knows no limits!
                    </p>
                </div>
            </div>
        </div>
    </section>
 
</main>
@endsection