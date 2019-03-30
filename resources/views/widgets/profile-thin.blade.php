<article class="profile-thin">
    <div class="profile-thin-aside"><img class="profile-thin-image" src="/storage/{{$feature->image}}" alt="" width="168" height="168"/><a class="profile-thin-contact-button" href="mailto:#"><span class="icon mdi mdi-email-outline"></span><span class="icon mdi mdi-email-outline"></span></a>
    </div>
    <div class="profile-thin-main">
        <p class="profile-thin-title">{{$feature->title}}</p>
        <p class="profile-thin-subtitle">{{$feature->meta_description}}</p>
        <p>{{$feature->excerpt}}</p>
        {{--<div class="group group-xs group-middle"><a class="icon icon-sm icon-creative mdi mdi-facebook" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-twitter" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-instagram" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-google" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-linkedin" href="#"></a></div>--}}
        <a class="button button-sm button-primary-outline button-winona" href="{{route('post.show', ['slug' => $feature->slug])}}">@lang('app.more')</a>
    </div>
</article>