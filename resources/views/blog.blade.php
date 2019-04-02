@extends('master')
@section('title', $pages[6]->title)
@section('description', $pages[6]->meta_description)
@section('keywords', $pages[6]->meta_keywords)
@section('content')
<section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/images/breadcrumbs-image-1.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">{{$pages[6]->excerpt}}</h6>
                <h1 class="breadcrumbs-custom-title">{{$pages[6]->title}}</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">@lang('app.home')</a></li>
                <li class="active">@lang('app.blog')</li>
            </ul>
        </div>
    </div>
</section>
<section class="section section-lg section-wave-offset">
    <div class="container">
        <div class="row row-50 row-xxl-70">
            @foreach($posts as $post)
            <div class="col-md-6 scaleFadeInWrap">
                <!-- Post Modern-->
                <div class="wow scaleFadeIn">
                    <article class="post-modern"><a class="post-modern-media" href="single-blog-post.html"><img src="/storage/{{$post->image}}" alt="" width="571" height="353"/></a>
                        <h4 class="post-modern-title"><a href="{{route('post.show', ['slug'=>$post->slug])}}">{{$post->getTranslatedAttribute('title', 'locale', App::getlocale())}}</a></h4>
                        <ul class="post-modern-meta">
{{--                            <li>by Theresa Barnes</li>--}}
                            <li>
                                <time datetime="{{$post->created_at}}">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</time>
                            </li>
                            <li><a class="button-winona" href="#">{{$post->category->name}}</a></li>
                        </ul>
                        <p>{{$post->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</p>
                    </article>
                </div>
            </div>
            @endforeach
            {{--<div class="col-md-6 scaleFadeInWrap">
                <!-- Post Modern-->
                <div class="wow scaleFadeIn" data-wow-delay=".1s">
                    <article class="post-modern"><a class="post-modern-media" href="single-blog-post.html"><img src="/images/grid-blog-2-571x353.jpg" alt="" width="571" height="353"/></a>
                        <h4 class="post-modern-title"><a href="single-blog-post.html">Top 10 Facts About Our Bottled Water</a></h4>
                        <ul class="post-modern-meta">
                            <li>by Theresa Barnes</li>
                            <li>
                                <time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
                            </li>
                            <li><a class="button-winona" href="#">News</a></li>
                        </ul>
                        <p>Integer aliquet eleifend pulvinar. Nulla eget maximus tortor. Praesent vehicula metus sollicitudin, dictum libero vel, efficitur sem. Proin et convallis eros. Sed convallis ac mi non rutrum. Sed vehicula blandit tellus eget blandit.</p>
                    </article>
                </div>
            </div>
            <div class="col-md-6 scaleFadeInWrap">
                <!-- Post Modern-->
                <div class="wow scaleFadeIn">
                    <article class="post-modern"><a class="post-modern-media" href="single-blog-post.html"><img src="/images/grid-blog-3-571x353.jpg" alt="" width="571" height="353"/></a>
                        <h4 class="post-modern-title"><a href="single-blog-post.html">The Secrets of Modern Spring Water</a></h4>
                        <ul class="post-modern-meta">
                            <li>by Theresa Barnes</li>
                            <li>
                                <time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
                            </li>
                            <li><a class="button-winona" href="#">News</a></li>
                        </ul>
                        <p>Integer aliquet eleifend pulvinar. Nulla eget maximus tortor. Praesent vehicula metus sollicitudin, dictum libero vel, efficitur sem. Proin et convallis eros. Sed convallis ac mi non rutrum. Sed vehicula blandit tellus eget blandit.</p>
                    </article>
                </div>
            </div>
            <div class="col-md-6 scaleFadeInWrap">
                <!-- Post Modern-->
                <div class="wow scaleFadeIn" data-wow-delay=".1s">
                    <article class="post-modern"><a class="post-modern-media" href="single-blog-post.html"><img src="/images/grid-blog-4-571x353.jpg" alt="" width="571" height="353"/></a>
                        <h4 class="post-modern-title"><a href="single-blog-post.html">Spring Water vs. Sparkling Water</a></h4>
                        <ul class="post-modern-meta">
                            <li>by Theresa Barnes</li>
                            <li>
                                <time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
                            </li>
                            <li><a class="button-winona" href="#">News</a></li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget facilisis lacus. Aenean semper tincidunt rhoncus. Vestibulum semper in neque eget pellentesque. Phasellus quis porta nisl, ac ultrices mauris.</p>
                    </article>
                </div>
            </div>--}}
        </div>
        <div class="pagination">
            {{$posts->links()}}
            {{--<div class="page-item active"><a class="page-link button-winona" href="#">1</a></div>
            <div class="page-item"><a class="page-link button-winona" href="#">2</a></div>
            <div class="page-item"><a class="page-link button-winona" href="#">3</a></div>
            <div class="page-item"><a class="page-link button-winona" href="#">4</a></div>--}}
        </div>
    </div>
</section>
    @endsection