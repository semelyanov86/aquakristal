@extends('master')
@section('title', $current->getTranslatedAttribute('title', 'locale', App::getlocale()))
@section('description', $current->getTranslatedAttribute('meta_description', 'locale', App::getlocale()))
@section('keywords', $current->getTranslatedAttribute('meta_keywords', 'locale', App::getlocale()))
@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/storage/{{$current->getTranslatedAttribute('image', 'locale', App::getlocale())}});">
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <h6 class="breadcrumbs-custom-subtitle title-decorated">@lang('app.blog')</h6>
                    <h1 class="breadcrumbs-custom-title">{{$current->getTranslatedAttribute('title', 'locale', App::getlocale())}}</h1>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('main')}}">@lang('app.home')</a></li>
                    <li><a href="{{route('post.index')}}">@lang('app.blog')</a></li>
                    <li class="active">{{$current->getTranslatedAttribute('title', 'locale', App::getlocale())}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Working at CaseCraft-->
    <section class="section section-lg">
        <div class="container">
            <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
                <div class="col-md-10 col-lg-6 col-xl-5">
                    <h3>{{$post->getTranslatedAttribute('title', 'locale', App::getlocale())}}</h3>
                    <p>{{$post->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</p><a class="button button-lg button-primary button-winona" href="{{route('post.show', ['slug'=>$post->slug])}}">@lang('app.learn-more')</a>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-6"><img class="img-responsive" src="/storage/{{$post->image}}" alt="" width="570" height="368"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Available Vacancies-->
    <section class="section section-lg bg-gray-100 text-center section-wave-offset">
        <div class="container">
            <h3>{{$current->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</h3>
            <div class="row row-45">
                {!! $current->getTranslatedAttribute('body', 'locale', App::getlocale()) !!}
            </div><a class="button button-lg button-primary button-winona" href="{{route('contacts')}}">@lang('app.join-us')</a>
        </div>
    </section>
@endsection