@extends('layouts.app')
@section('content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                {{-- <span></span> Pages --}}
                <span></span> {{$contact->title}}
            </div>
        </div>
    </div>
    <section class="pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <div class="contact-from-area padding-20-row-col wow FadeInUp">
                        
                        <div class="row">
                            <div class="col-md-6 mb-6 mb-md-0">
                                <h4 class="mb-15 text-brand">Office</h4>
                                {{$contact->address}}
                                <abbr title="Phone">Phone:</abbr> (123) 456-7890<br>
                                <abbr title="Email">Email: </abbr><a href="#" class="__cf_email__" data-cfemail="e98a86879d888a9da9ac9f889b88c78a8684">{{$contact->email}}</a><br>
                                <a class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up">
                                    <i class="fi-rs-marker mr-10"></i>View map</a>
                            </div>
                           <div class="col-lg-6 col-md-6">
                                <h3 class="mb-10 text-center">Leave us a Message</h3>
                                <p class="text-muted mb-30 text-center font-sm">{{$contact->content}}</p>
                                <form class="contact-form-style text-center" novalidate="novalidate" id="contact-form" action="#" method="post">
                                    @csrf
                                    <div class="input-style mb-20">
                                        <input name="name" placeholder="First Name" type="text" required>
                                    </div>
                                
                                    <div class="input-style mb-20">
                                        <input name="email" placeholder="Your Email" type="email" required>
                                    </div>
                               
                                    <div class="input-style mb-20">
                                        <input name="telephone" placeholder="Your Phone" type="tel" required>
                                    </div>
                               
                                    <div class="input-style mb-20">
                                        <input name="subject" placeholder="Subject" type="text" required>
                                    </div>
                                
                                    <div class="textarea-style mb-30">
                                        <textarea name="message" placeholder="Message" required></textarea>
                                    </div>
                                    <button class="submit submit-auto-width" type="submit">Send message</button>
                                </form>
                            </div>
                        </div>
                        <br><br>
                        <div class="row mt-6">
                            <div class="col-lg-12 col-xl-12">
                                <div class="mb-12">
                                    <iframe width="1000" height="428" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82283.15977882537!2d-97.14494342658196!3d49.87347709676307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52ea73fbf91a2b11%3A0x2b2a1afac6b9ca64!2sWinnipeg%2C%20MB%2C%20Canada!5e0!3m2!1sen!2sng!4v1694431305387!5m2!1sen!2sng" 
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                 </div>
                            </div>
                        </div>
                        
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
   
</main>
@endsection