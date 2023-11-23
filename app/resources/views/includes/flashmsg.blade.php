<div class="modal fade custom-modal show" id="onloadModal" tabindex="-1" aria-labelledby="onloadModalLabel" aria-modal="true" role="dialog" style="display: block; padding-left: 0px;">
    <div class="modal-dialog">
    <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="deal" style="background-image: url('{{asset('assets/images/'.$splash->image)}}')">
                    <div class="deal-top">
                        <h2 class="text-brand">{{$splash->title}}</h2>
                        <h5>{{$splash->sub_title}}</h5>
                    </div>
                    <div class="deal-content">
                        <h6 class="product-title"><a href="shop-product-right.html">{{$splash->content}}</a></h6>
                    </div>
                    <div class="deal-bottom">
                        <p>Hurry Up! Offer End In:</p>
                        <div class="deals-countdown" data-countdown="{{$splash->timer->format('yy/m/d h:m:s')}}2025/03/25 00:00:00"><span class="countdown-section">
                            @php 
                            $days = \Carbon::now()->addHours($splash->timer)
                            @endphp
                            <span class="countdown-amount hover-up">4</span>
                            <span class="countdown-period"> days </span></span>
                            <span class="countdown-section"><span class="countdown-amount hover-up">09</span>
                            <span class="countdown-period"> hours </span></span>
                            <span class="countdown-section"><span class="countdown-amount hover-up">27</span>
                            <span class="countdown-period"> mins </span></span><span class="countdown-section">
                                <span class="countdown-amount hover-up">32</span>
                                <span class="countdown-period"> sec </span></span></div>
                        <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>

@section('scripts')



@endsection