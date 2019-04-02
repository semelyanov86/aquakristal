@extends('master')
@section('title', $current->getTranslatedAttribute('title', 'locale', App::getlocale()))
@section('description', $current->getTranslatedAttribute('meta_description', 'locale', App::getlocale()))
@section('keywords', $current->meta_keywords)
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
                    <li class="active">{{$current->getTranslatedAttribute('title', 'locale', App::getlocale())}}</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section section-sm">
        <div class="container">
            <div class="layout-bordered">
                <div class="layout-bordered-item wow-outer">
                    <div class="layout-bordered-item-inner wow slideInUp">
                        <div class="icon icon-lg mdi mdi-phone text-primary"></div>
                        <ul class="list-0">
                            <li><a class="link-default" href="tel:{{setting('site.phone')}}">{{setting('site.phone')}}</a></li>
                            <li><a class="link-default" href="tel:{{setting('site.phone2')}}">{{setting('site.phone2')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="layout-bordered-item wow-outer">
                    <div class="layout-bordered-item-inner wow slideInUp">
                        <div class="icon icon-lg mdi mdi-email text-primary"></div><a class="link-default" href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a>
                    </div>
                </div>
                <div class="layout-bordered-item wow-outer">
                    <div class="layout-bordered-item-inner wow slideInUp">
                        <div class="icon icon-lg mdi mdi-map-marker text-primary"></div><a class="link-default" href="#">{!! setting('site.address')!!}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-gray-100">
        <div class="range justify-content-xl-between">
            <div class="cell-xl-6 align-self-center container">
                <div class="row">
                    <div class="col-lg-9 cell-inner">
                        <div class="section-lg">
                            <h3 class="wow-outer"><span class="wow slideInDown">Contact Us</span></h3>
                            <!-- RD Mailform-->
                            <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                <div class="row row-10">
                                    <div class="col-md-6 wow-outer">
                                        <div class="form-wrap wow fadeSlideInUp">
                                            <label class="form-label-outside" for="contact-first-name">First Name</label>
                                            <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-6 wow-outer">
                                        <div class="form-wrap wow fadeSlideInUp">
                                            <label class="form-label-outside" for="contact-last-name">Last Name</label>
                                            <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="col-md-6 wow-outer">
                                        <div class="form-wrap wow fadeSlideInUp">
                                            <label class="form-label-outside" for="contact-email">E-mail</label>
                                            <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                        </div>
                                    </div>
                                    <div class="col-md-6 wow-outer">
                                        <div class="form-wrap wow fadeSlideInUp">
                                            <label class="form-label-outside" for="contact-phone">Phone</label>
                                            <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                                        </div>
                                    </div>
                                    <div class="col-12 wow-outer">
                                        <div class="form-wrap wow fadeSlideInUp">
                                            <label class="form-label-outside" for="contact-message">Your Message</label>
                                            <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="group group-middle">
                                    <div class="wow-outer">
                                        <button class="button button-primary button-winona wow slideInRight" type="submit">Send Message</button>
                                    </div>
                                    <p>or use</p>
                                    <div class="wow-outer"><a class="button button-primary-outline button-icon button-icon-left button-winona wow slideInLeft" href="#"><span class="icon text-primary mdi mdi-facebook-messenger"></span>Messenger</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cell-xl-5 height-fill wow fadeIn">
                <div class="google-map-container rd-google-map__model" data-zoom="15" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
                    <div class="google-map"></div>
                    <ul class="google-map-markers">
                        <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection