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
                        <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.html"><img src="images/logo-default-132x34.png" alt="" width="132" height="34" srcset="images/logo-default-250x64.png 2x"/></a>
                    </div>
                    <div class="rd-navbar-minimal">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a rel = "alternate" hreflang = "{{$localeCode}}" href = "{{LaravelLocalization::getLocalizedURL($localeCode) }}"> {{ $properties ['native'] }} </a>
                        @endforeach
                    </div>
                    <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="water.html">Water</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                                    <!-- RD Navbar Megamenu-->
                                    <ul class="rd-menu rd-navbar-megamenu">
                                        <li class="rd-megamenu-item">
                                            <ul class="rd-megamenu-list">
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="careers.html">Careers</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">Search results</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="about-us.html">About Us</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="testimonials.html">Testimonials</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="what-we-offer.html">What We Offer</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="team.html">Team</a></li>
                                            </ul>
                                        </li>
                                        <li class="rd-megamenu-item">
                                            <ul class="rd-megamenu-list">
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="404-page.html">404 Page</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="503-page.html">503 Page</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="coming-soon.html">Coming Soon</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="under-construction.html">Under Construction</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Progress bars</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="pricing.html">Pricing</a></li>
                                            </ul>
                                        </li>
                                        <li class="rd-megamenu-item">
                                            <ul class="rd-megamenu-list">
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Typography</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="buttons.html">Buttons</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Forms</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tabs.html">Tabs</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="terms-of-use.html">Terms of Use</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="accordions.html">Accordions</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="blog.html">Blog</a>
                                    <!-- RD Navbar Dropdown-->
                                    <ul class="rd-menu rd-navbar-dropdown">
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-blog-post.html">Single Blog Post</a></li>
                                    </ul>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                                </li>
                            </ul>
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