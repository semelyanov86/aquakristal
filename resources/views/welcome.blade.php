@extends('master')
        @section('title', setting('site.title'))
        @section('description', setting('site.description'))
        @section('keywords', $pages[0]->meta_keywords)
        @section('content')
@include('widgets.slider')
    <!-- A Few Words About Us-->
    <section class="section section-md">
        <div class="section-wave section-wave-white">
            <svg x="0px" y="0px" viewBox="0 0 1920 45" width="1920" height="45px" preserveAspectRatio="none">
                <style type="text/css"></style>
                <path d="M1920,0c-82.8,0-108.8,44.4-192,44.4c-78.8,0-116.5-43.7-192-43.7c-77.1,0-115.9,44.4-192,44.4c-78.2,0-114.6-44.4-192-44.4c-78.4,0-115.3,44.4-192,44.4C883.1,45,841,0.6,768,0.6C691,0.6,652.8,45,576,45C502.4,45,461.9,0.6,385,0.6C306.5,0.6,267.9,45,191,45C115.1,45,78,0.6,0,0.6V45h1920V0z"></path>
            </svg>
        </div>
        <div class="container">
            <div class="row row-50 justify-content-center justify-content-xl-between flex-xl-row-reverse text-center text-xl-left">
                <div class="col-lg-6 col-xl-5">
                    <div class="inset-right-3">
                        <h3 class="wow-outer"><span class="wow slideInDown">{{$pages[0]->getTranslatedAttribute('title', 'locale', App::getlocale())}}</span></h3>
                        <p class="text-op-amaranthine wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">{{$pages[0]->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</span></p>
                        <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="{{route('page.show', ['slug' => $pages[0]->slug])}}">@lang('app.learn-more')</a></div>
                    </div>
                </div>
                <div class="col-lg-7"><img src="/storage/{{$pages[0]->image}}" alt="" width="711" height="429"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Small Features-->
    <section class="section section-lg bg-gray-100">
        <div class="container">
            {!! $pages[2]->getTranslatedAttribute('body', 'locale', App::getlocale()) !!}
        </div>
    </section>
    <!-- Woman CTA-->
    <section class="section section-xl bg-gray-700 bg-image bg-image-1" style="background-image: url(/storage/{{$pages[1]->image}});">
        <div class="container">
            <div class="row justify-content-sm-end">
                <div class="col-sm-9 col-md-7 col-lg-6">
                    <div class="box-6">
                        <div class="wow-outer">
                            <div class="wow slideInUp">
                                <h3 class="font-weight-semibold">{{$pages[1]->getTranslatedAttribute('title', 'locale', App::getlocale())}}</h3>
                            </div>
                        </div>
                        <div class="wow-outer offset-top-4">
                            <div class="wow slideInDown">
                                <p>{{$pages[1]->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</p><a class="button button-primary button-winona" href="{{route('page.show', ['slug' => $pages[1]->slug])}}">@lang('app.read-more')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('widgets.products')
@include('widgets.services')
@include('widgets.testimonials')
@include('widgets.blogposts')
@endsection