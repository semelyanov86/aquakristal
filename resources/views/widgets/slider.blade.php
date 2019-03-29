<!-- Slider-->
<section class="section swiper-container swiper-slider swiper-slider-business bg-gray-700" data-loop="true" data-slide-effect="fade" data-autoplay="5000" data-simulate-touch="false" data-custom-slide-effect="inter-leave-effect">
    <div class="swiper-wrapper context-dark">
        @foreach ($posts as $post)
        <div class="swiper-slide" data-slide-bg="/storage/{{$post->image}}">
            <div class="slide-inner">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <h1 class="wow-outer"><span class="wow" data-caption-animate="slideInDown"><span class="big">{{$post->title}}</span></span></h1>
                        <h2 class="wow-outer"><span class="wow" data-caption-animate="slideInDown"><span class="compressed fown-weight-light">{{$post->excerpt}}</span></span></h2>
                        <div class="swiper-caption-text-sm swiper-caption-wrap">
                            <div class="swiper-caption-text-inner">
                                <p class="text-op-gentle wow" data-caption-animate="slideInLeft">{{$post->meta_description}}</p>
                            </div>
                        </div>
                        <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow" href="about-us.html" data-caption-animate="slideInUp">@lang('app.learn-more')</a></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{--<div class="swiper-slide" data-slide-bg="images/slider-business-slide-2-1920x800.jpg">
            <div class="slide-inner">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <h1 class="wow-outer"><span class="wow" data-caption-animate="slideInDown"><span class="big">Drink</span></span></h1>
                        <h2 class="wow-outer"><span class="wow" data-caption-animate="slideInDown"><span class="compressed fown-weight-light">Healthy Water</span></span></h2>
                        <div class="swiper-caption-text-sm swiper-caption-wrap">
                            <div class="swiper-caption-text-inner">
                                <p class="text-op-gentle wow" data-caption-animate="slideInLeft">We provide spring water that positively influences your health and is safe to drink.</p>
                            </div>
                        </div>
                        <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow" href="about-us.html" data-caption-animate="slideInUp">Learn more</a></div>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
    <div class="swiper-slider-nav container">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>