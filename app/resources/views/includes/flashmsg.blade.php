<div class="modal fade custom-modal show" id="onloadModal" tabindex="-1" aria-labelledby="onloadModalLabel" aria-modal="true" role="dialog" style="display: block; padding-left: 0px;">
    <div class="modal-dialog">
    <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="deal" style="background-image: url('{{ asset('assets/'.$splash->image) }}'); ">
                    <div class="deal-top">
                        <h2 class="text-brand">{{$splash->title}}</h2>
                        <h5>{{$splash->sub_title}}</h5>
                    </div>
                    <div class="deal-content">
                        <h6 class="product-title"><a href="">{{$splash->content}}</a></h6>
                    </div>
                    <div class="deal-bottom">
                        <p>Hurry Up! Offer End In:</p>
                        <div class="deals-countdown" data-countdown="2023/11/27 22:2:3"><span class="countdown-section">
                           
                            <span class="countdown-amount hover-up">4</span>
                            <span class="countdown-period"> days </span></span>
                            <span class="countdown-section"><span class="countdown-amount hover-up">09</span>
                            <span class="countdown-period"> hours </span></span>
                            <span class="countdown-section"><span class="countdown-amount hover-up">27</span>
                            <span class="countdown-period"> mins </span></span><span class="countdown-section">
                                <span class="countdown-amount hover-up">32</span>
                                <span class="countdown-period"> sec </span></span></div>
                        <a href="{{route('user.category', encrypt(1))}}" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>

@section('scripts')



@endsection