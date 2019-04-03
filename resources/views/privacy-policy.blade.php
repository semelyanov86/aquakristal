@extends('master')
@section('title', $current->getTranslatedAttribute('title', 'locale', App::getlocale()))
@section('description', $current->getTranslatedAttribute('meta_description', 'locale', App::getlocale()))
@section('keywords', $current->getTranslatedAttribute('meta_keywords', 'locale', App::getlocale()))
@section('content')
<!-- Breadcrumbs -->
<section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/storage/{{$current->image}});">
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">{{$current->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</h6>
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
<!-- Privacy Policy-->
<section class="section section-lg section-wave-offset">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <!-- Terms list -->
{!! $current->getTranslatedAttribute('body', 'locale', App::getlocale()) !!}
            </div>
        </div>
    </div>
</section>
    @endsection