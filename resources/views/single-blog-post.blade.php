@extends('master')
@section('title', $post->getTranslatedAttribute('seo_title', 'locale', App::getlocale()))
@section('description', $post->meta_description)
@section('keywords', $post->meta_keywords)
@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <h6 class="breadcrumbs-custom-subtitle title-decorated">{{$post->Category->name}}</h6>
                    <h1 class="breadcrumbs-custom-title">{{$post->getTranslatedAttribute('seo_title', 'locale', App::getlocale())}}</h1>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">@lang('app.home')</a></li>
                    <li><a href="{{route('post.index')}}">@lang('app.blog')</a></li>
                    <li class="active">{{$post->getTranslatedAttribute('seo_title', 'locale', App::getlocale())}}</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section section-lg section-wave-offset">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-8">
                    <article class="post-creative">
                        <h3 class="post-creative-title">{{$post->getTranslatedAttribute('title', 'locale', App::getlocale())}}</h3>
                        <ul class="post-creative-meta">
                            <li><span class="icon mdi mdi-calendar-clock"></span>
                                <time datetime="{{ \Carbon\Carbon::parse($post->updated_at)->format('d/m/Y')}}">{{ \Carbon\Carbon::parse($post->updated_at)->format('d/m/Y')}}</time>
                            </li>
                            <li><span class="icon mdi mdi-tag-multiple"></span><a href="#">{{$post->Category->name}}</a></li>
                        </ul>
                        <h4>{{$post->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</h4><img src="/storage/{{$post->image}}" alt="" width="770"/>
                        {!! $post->getTranslatedAttribute('body', 'locale', App::getlocale()) !!}
                        <ul class="post-creative-footer">
                            <li>@lang('app.share')</li>
                            <li>
                                <div class="group group-xs group-middle"><script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                    <script src="//yastatic.net/share2/share.js"></script>
                                    <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir,twitter,telegram"></div></div>
                            </li>
                        </ul>
                    </article>
{{--                    <div class="section-sm">
                        <h3>Comments</h3>
                        <div class="comment-classic-group">
                            <!-- Comment Classic-->
                            <article class="comment-classic">
                                <figure class="comment-classic-figure"><img class="comment-classic-image" src="images/comment-1-48x48.jpg" alt="" width="48" height="48"/>
                                </figure>
                                <div class="comment-classic-main">
                                    <p class="comment-classic-name">Albert Webb</p>
                                    <div class="comment-classic-text">
                                        <p>Integer eu neque egestas, interdum enim non, scelerisque enim. Sed malesuada tortor eu mi tincidunt, at vehicula dolor bibendum.</p>
                                    </div>
                                    <ul class="comment-classic-meta">
                                        <li>
                                            <time datetime="2018">May, 9 2018 at 9:06 am</time>
                                        </li>
                                        <li><a class="comment-classic-reply" href="#" aria-label="reply"></a></li>
                                    </ul>
                                </div>
                            </article>
                            <div class="comment-classic-group">
                                <!-- Comment Classic-->
                                <article class="comment-classic">
                                    <figure class="comment-classic-figure"><img class="comment-classic-image" src="images/comment-2-48x48.jpg" alt="" width="48" height="48"/>
                                    </figure>
                                    <div class="comment-classic-main">
                                        <p class="comment-classic-name">Theresa Barnes </p>
                                        <div class="comment-classic-text">
                                            <p>Proin vitae nisl blandit, vehicula massa vita, convallis sem. Aliquam tempus varius rhoncus. Aliquam molestie neque non nunc commodo sollicitudin.</p>
                                        </div>
                                        <ul class="comment-classic-meta">
                                            <li>
                                                <time datetime="2018">May, 9 2018 at 9:47 am</time>
                                            </li>
                                            <li><a class="comment-classic-reply" href="#" aria-label="reply"></a></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="comment-classic-group">
                            <!-- Comment Classic-->
                            <article class="comment-classic">
                                <figure class="comment-classic-figure"><img class="comment-classic-image" src="images/comment-3-48x48.jpg" alt="" width="48" height="48"/>
                                </figure>
                                <div class="comment-classic-main">
                                    <p class="comment-classic-name">Jason Hughes</p>
                                    <div class="comment-classic-text">
                                        <p>Ut tincidunt sem quis eros sollicitudin, id pharetra ipsum ultricies. Curabitur vitae risus ac neque sodales mattis quis ac turpis.</p>
                                    </div>
                                    <ul class="comment-classic-meta">
                                        <li>
                                            <time datetime="2018">May, 8 2018 at 12:08 pm</time>
                                        </li>
                                        <li><a class="comment-classic-reply" href="#" aria-label="reply"></a></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>--}}
@include('widgets.askQuestion')
                </div>
                <div class="col-lg-4">
                    <!-- Profile Thin-->
@include('widgets.profile-thin')
                </div>
            </div>
        </div>
    </section>
    @endsection
