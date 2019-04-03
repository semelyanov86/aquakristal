@extends('master')
@section('title', $pages[7]->getTranslatedAttribute('title', 'locale', App::getlocale()))
@section('description', $pages[7]->getTranslatedAttribute('meta_description', 'locale', App::getlocale()))
@section('keywords', $pages[7]->getTranslatedAttribute('meta_keywords', 'locale', App::getlocale()))
@section('content')
<!-- Breadcrumbs -->
<section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/images/breadcrumbs-image-1.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">{{$pages[7]->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</h6>
                <h1 class="breadcrumbs-custom-title">{{$pages[7]->getTranslatedAttribute('title', 'locale', App::getlocale())}}</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{route('main')}}">@lang('app.home')</a></li>
                <li class="active">{{$pages[7]->getTranslatedAttribute('title', 'locale', App::getlocale())}}</li>
            </ul>
        </div>
    </div>
</section>
<!-- Overview-->
<section class="section section-lg-custom">
    <div class="container">
        <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6 column-ethereal">
                <h3>{{$pages[8]->getTranslatedAttribute('title', 'locale', App::getlocale())}}</h3>
                <h4 class="offset-top-3">{{$pages[8]->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</h4>
                {!! $pages[8]->getTranslatedAttribute('body', 'locale', App::getlocale()) !!}
                <div class="group group-middle"><a class="button button-primary button-winona" href="#our-history" data-waypoint-to="#our-history">@lang('app.view-history')</a><a class="button button-primary-outline button-winona" href="{{route('careers')}}">@lang('app.join-team')</a></div>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-5 align-self-end"><img class="img-responsive" src="/storage/{{$pages[8]->image}}" alt="" width="510" height="482"/>
            </div>
        </div>
    </div>
</section>
<section class="section section-lg bg-gray-100 section-wave-offset" id="our-history">
    <div class="container">
        <!-- Timeline Classic-->
        <article class="timeline-classic">
            @foreach($timelines as $timeline)
            <div class="timeline-classic-item">
                <div class="timeline-classic-item-aside"><img class="timeline-classic-item-image" src="/storage/{{$timeline->image}}" alt="" width="390" height="250"/>
                </div>
                <div class="timeline-classic-item-divider"></div>
                <div class="timeline-classic-item-main">
                    <p class="timeline-classic-item-title">{{$timeline->getTranslatedAttribute('title', 'locale', App::getlocale())}}</p>
                    <p class="thumbnail-classic-item-subtitle">{{$timeline->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</p>
                    <p>{!! $timeline->getTranslatedAttribute('body', 'locale', App::getlocale()) !!}</p>
                </div>
            </div>
            @endforeach
        </article>
    </div>
</section>
    @endsection