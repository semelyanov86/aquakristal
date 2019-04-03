<!-- Section Products-->
<section class="section section-lg section-wave-offset">
    <div class="container">
        <h3 class="text-center">@lang('app.our-products')</h3>
        <div class="row row-30 row-md-50">
            @foreach($products as $product)
            <div class="col-md-6">
                <article class="card-modern wow fadeInUp" data-wow-delay=".05s">
                    <div class="card-modern-left"><img src="/storage/{{$product->image}}" alt="" width="138" height="197"/>
                    </div>
                    <div class="card-modern-body">
                        <h4><a class="card-modern-title" href="#">{{$product->size}} {{$product->measure}} {{$product->name}}</a></h4>
                        <div class="card-modern-price"><span>{{$product->price}} {{$product->currency}}</span></div>
                        <div class="card-modern-info"><span class="icon icon-sm mdi mdi-information-outline"></span><span class="card-modern-info-text">{{$product->excerpt}}</span></div>
                        <div class="card-modern-text">
                            <p>{{$product->description}}</p>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center text-center row-offset-custom-1">
            <div class="col-12">
                <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="{{route('product.index')}}">@lang('app.view-more')</a></div>
            </div>
        </div>
    </div>
</section>