<!-- Page Header-->
<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                        <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="{{route('main')}}"><img src="/images/logo-default-132x34.png" alt="" width="132" height="34" srcset="/images/logo-default-250x64.png 2x"/></a>
                    </div>
                    <div class="rd-navbar-minimal">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a rel = "alternate" hreflang = "{{$localeCode}}" href = "{{LaravelLocalization::getLocalizedURL($localeCode) }}"> {{ $properties ['native'] }} </a>
                        @endforeach
                    </div>
                    <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                            <!-- RD Navbar Nav-->
                            {!! menu('Main', 'partials.main_menu') !!}

                        </div>
                        <!-- Callback link-->
                        <div class="rd-navbar-call">
                            <button class="icon icon-md mdi mdi-phone" data-toggle="modal" data-target="#call-form"></button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>