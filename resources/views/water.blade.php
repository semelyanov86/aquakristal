@extends('master')
@section('title', $current->getTranslatedAttribute('title', 'locale', App::getlocale()))
@section('description', $current->getTranslatedAttribute('meta_description', 'locale', App::getlocale()))
@section('keywords', $current->meta_keywords)
@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/storage/{{$current->image}})">
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <h6 class="breadcrumbs-custom-subtitle title-decorated">{{$current->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</h6>
                    <h1 class="breadcrumbs-custom-title">{{$current->getTranslatedAttribute('title', 'locale', App::getlocale())}}</h1>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('main')}}">@lang('app.home')</a></li>
                    <li class="active">{{$current->getTranslatedAttribute('title', 'locale', App::getlocale())}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Section Products-->
    <section class="section section-lg section-wave-offset">
        <div class="container">
            {!! $current->getTranslatedAttribute('body', 'locale', App::getlocale()) !!}
            <div class="row row-30 row-md-50">
                @foreach($products as $product)
                <div class="col-md-6">
                    <article class="card-modern wow fadeInUp" data-wow-delay=".05s">
                        <div class="card-modern-left"><img src="/storage/{{$product->image}}" alt="" width="138" height="197"/>
                        </div>
                        <div class="card-modern-body">
                            <h4><a class="card-modern-title">{{$product->size}} {{$product->getTranslatedAttribute('mesaure', 'locale', App::getlocale())}} {{$product->getTranslatedAttribute('name', 'locale', App::getlocale())}}</a></h4>
                            <div class="card-modern-price"><span>{{$product->price}} {{$product->getTranslatedAttribute('currency', 'locale', App::getlocale())}}</span></div>
                            <div class="card-modern-info"><span class="icon icon-sm mdi mdi-information-outline"></span><span class="card-modern-info-text">{{$product->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</span></div>
                            <div class="card-modern-text">
                                <p>{{$product->getTranslatedAttribute('description', 'locale', App::getlocale())}}</p>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center text-center row-offset-custom-1">
                <div class="col-12">
                    <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="{{route('contacts')}}">@lang('app.order')</a></div>
                </div>
            </div>
        </div>
    </section>
@endsection
