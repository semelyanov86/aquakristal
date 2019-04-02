<!-- Latest Blog Posts-->
<section class="section section-lg bg-gray-100 section-wave-offset">
    <div class="container">
        <h3 class="wow-outer text-center"><span class="wow slideInDown">@lang('app.latest-blog')</span></h3>
        <div class="row row-50 justify-content-center justify-content-lg-start">
            <div class="col-md-10 col-lg-7 wow-outer">
                <!-- Post Block-->
                <article class="post-block bg-gray-700"><img class="post-block-image" src="/storage/{{$latests[0]->image}}" alt="" width="637" height="456"/>
                    <div class="post-block-caption">
                        <ul class="post-block-meta">
{{--                            <li class="wow-outer"><span class="wow slideInLeft">by Theresa Barnes</span></li>--}}
                            <li class="wow-outer"><a class="button-winona wow slideInLeft" href="#">{{$latests[0]->category->name}}</a></li>
                            <li class="wow-outer">
                                <time class="wow slideInLeft" datetime="{{$latests[0]->created_at}}">{{ \Carbon\Carbon::parse($latests[0]->created_at)->format('d/m/Y')}}</time>
                            </li>
                        </ul>
                        <h4 class="post-block-title"><a href="{{route('post.show', ['slug'=>$latests[0]->slug])}}">{{$latests[0]->getTranslatedAttribute('title', 'locale', App::getlocale())}}</a></h4>
                    </div>
                    <div class="post-block-dummy"></div>
                </article>
            </div>
            <div class="col-md-10 col-lg-5">
                <div class="post-light-group wow-outer">
                @for ($i = 1; $i < count($latests); $i++)
                    <!-- Post Light-->
                    <article class="post-light wow slideInLeft">
                        <time class="post-light-time" datetime="{{$latests[$i]->created_at}}"><span class="post-light-time-big">{{$latests[$i]->created_at->format('d')}}</span><span class="post-light-time-small">{{$latests[$i]->created_at->format('M')}}</span></time>
                        <div class="post-light-main">
                            <h4 class="post-light-title"><a href="{{route('post.show', ['slug'=>$latests[$i]->slug])}}">{{$latests[$i]->getTranslatedAttribute('title', 'locale', App::getlocale())}}</a></h4>
                            <ul class="post-light-meta">
{{--                                <li>by Theresa Barnes</li>--}}
                                <li><a class="button-winona" href="#">{{$latests[$i]->category->name}}</a></li>
                            </ul>
                        </div>
                    </article>
                    @endfor
                    <!-- Post Light-->
                </div>
                <div class="wow-outer button-outer"><a class="button button-primary button-winona wow slideInDown" href="{{route('post.index')}}">@lang('app.view-all')</a></div>
            </div>
        </div>
    </div>
</section>