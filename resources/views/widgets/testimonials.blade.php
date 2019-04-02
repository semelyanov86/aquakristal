<!-- Testimonials-->
<section class="section section-lg text-center">
    <div class="container">
        <h3>@lang('app.testimonials')</h3>
        <div class="owl-carousel" data-items="1" data-md-items="2" data-dots="true" data-nav="false" data-loop="true" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
            @foreach($testimonials as $testimonial)
            <div class="wow-outer">
                <blockquote class="quote-modern quote-modern-big wow slideInLeft">
                    <svg class="quote-modern-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                        <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
                    </svg>
                    <div class="quote-modern-text">
                        <p>{!! $testimonial->getTranslatedAttribute('body', 'locale', App::getlocale()) !!}</p>
                    </div>
                    <div class="quote-modern-meta">
                        <div class="quote-modern-avatar"><img src="/storage/{{$testimonial->image}}" alt="" width="96" height="96"/>
                        </div>
                        <div class="quote-modern-info">
                            <cite class="quote-modern-cite">{{$testimonial->getTranslatedAttribute('title', 'locale', App::getlocale())}}</cite>
                            <p class="quote-modern-caption">{{$testimonial->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</p>
                        </div>
                    </div>
                </blockquote>
            </div>
            @endforeach
        </div>
    </div>
</section>