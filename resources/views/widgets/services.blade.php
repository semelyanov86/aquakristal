<!-- Services-->
<section class="section section-lg bg-gray-100 text-center">
    <div class="container">
        <div class="box-4">
            <h3 class="wow-outer"><span class="wow slideInUp">{{$pages[3]->getTranslatedAttribute('title', 'locale', App::getlocale())}}</span></h3>
        </div>
{!! $pages[3]->getTranslatedAttribute('body', 'locale', App::getlocale()) !!}
    </div>
</section>