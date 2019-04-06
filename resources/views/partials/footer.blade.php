<!-- Page Footer-->
<footer class="section footer-standard bg-gray-modern">
    <div class="section-wave">
        <svg x="0px" y="0px" viewBox="0 0 1920 45" width="1920" height="45px" preserveAspectRatio="none">
            <style type="text/css"></style>
            <path d="M1920,0c-82.8,0-108.8,44.4-192,44.4c-78.8,0-116.5-43.7-192-43.7c-77.1,0-115.9,44.4-192,44.4c-78.2,0-114.6-44.4-192-44.4c-78.4,0-115.3,44.4-192,44.4C883.1,45,841,0.6,768,0.6C691,0.6,652.8,45,576,45C502.4,45,461.9,0.6,385,0.6C306.5,0.6,267.9,45,191,45C115.1,45,78,0.6,0,0.6V45h1920V0z"></path>
        </svg>
    </div>
    <div class="footer-standard-main">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-4">
                    <div class="inset-right-1">
                        <h4>{{$pages[4]->getTranslatedAttribute('title', 'locale', App::getlocale())}}</h4>
                        <p>{!! $pages[4]->getTranslatedAttribute('body', 'locale', App::getlocale()) !!}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4">
                    <div class="box-1">
                        <h4>Contact Information</h4>
                        <ul class="list-sm list-footer">
                            <li class="object-inline"><span class="icon icon-sm mdi mdi-map-marker text-gray-700"></span>{!! setting('site.address') !!}</li>
                            <li class="object-inline"><span class="icon icon-sm mdi mdi-phone text-gray-700"></span><a>{{setting('site.phone')}}</a></li>
                            <li class="object-inline"><span class="icon icon-sm mdi mdi-email text-gray-700"></span><a class="link-default" href="mailto:#">{{setting('site.email')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-7 col-lg-4">
                    <h4>{{$pages[5]->getTranslatedAttribute('title', 'locale', App::getlocale())}}</h4>
                    {!! $pages[5]->getTranslatedAttribute('body', 'locale', App::getlocale()) !!}
@include('.partials.form-mail')
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-standard-aside justify-content-center">
            <!-- Rights-->
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><br class="d-sm-none"/>Our<span> </span><span>&nbsp;</span><a href="privacy-policy">Privacy Policy</a></p>
        </div>
    </div>
</footer>