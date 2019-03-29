@extends('master')
        @section('title', 'Home')
        @section('content')
@include('widgets.slider')
    <!-- A Few Words About Us-->
    <section class="section section-md">
        <div class="section-wave section-wave-white">
            <svg x="0px" y="0px" viewBox="0 0 1920 45" width="1920" height="45px" preserveAspectRatio="none">
                <style type="text/css"></style>
                <path d="M1920,0c-82.8,0-108.8,44.4-192,44.4c-78.8,0-116.5-43.7-192-43.7c-77.1,0-115.9,44.4-192,44.4c-78.2,0-114.6-44.4-192-44.4c-78.4,0-115.3,44.4-192,44.4C883.1,45,841,0.6,768,0.6C691,0.6,652.8,45,576,45C502.4,45,461.9,0.6,385,0.6C306.5,0.6,267.9,45,191,45C115.1,45,78,0.6,0,0.6V45h1920V0z"></path>
            </svg>
        </div>
        <div class="container">
            <div class="row row-50 justify-content-center justify-content-xl-between flex-xl-row-reverse text-center text-xl-left">
                <div class="col-lg-6 col-xl-5">
                    <div class="inset-right-3">
                        <h3 class="wow-outer"><span class="wow slideInDown">Water Purified by Nature	and Delivered with Love</span></h3>
                        <p class="text-op-amaranthine wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">Our pristine water flows from the Penobscot Ridge Mountains. The bountiful “stream” is the wellspring that constantly provides fresh, clean water to our well located just a few steps away from our plant.</span></p>
                        <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="about-us.html">Learn more</a></div>
                    </div>
                </div>
                <div class="col-lg-7"><img src="images/index-01-711x429.png" alt="" width="711" height="429"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Small Features-->
    <section class="section section-lg bg-gray-100">
        <div class="container">
            <div class="row row-30">
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Box Minimal-->
                    <article class="box-minimal">
                        <div class="box-minimal-icon mdi mdi-shield wow fadeIn"></div>
                        <div class="box-minimal-main wow-outer">
                            <h4 class="box-minimal-title wow slideInDown">Protection from Bacteria</h4>
                            <p class="wow fadeInUpSmall">Though spring water is naturally clean, we try our best to make sure that our water is bacteria-free at all production stages.</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Box Minimal-->
                    <article class="box-minimal">
                        <div class="box-minimal-icon mdi mdi-leaf wow fadeIn" data-wow-delay=".1s"></div>
                        <div class="box-minimal-main wow-outer">
                            <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".1s">No Contaminants</h4>
                            <p class="wow fadeInUpSmall" data-wow-delay=".1s">We control the production process of our water to make sure you receive the best product from the company, which you can trust.</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Box Minimal-->
                    <article class="box-minimal">
                        <div class="box-minimal-icon mdi mdi-water wow fadeIn" data-wow-delay=".2s"></div>
                        <div class="box-minimal-main wow-outer">
                            <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".2s">Automated Bottling Lines</h4>
                            <p class="wow fadeInUpSmall" data-wow-delay=".2s">The process of bottling the spring water at our plant is fully automatized. However, we always control it to ensure the high quality.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Woman CTA-->
    <section class="section section-xl bg-gray-700 bg-image bg-image-1" style="background-image: url(images/call-to-action-1-1920x584.jpg);">
        <div class="container">
            <div class="row justify-content-sm-end">
                <div class="col-sm-9 col-md-7 col-lg-6">
                    <div class="box-6">
                        <div class="wow-outer">
                            <div class="wow slideInUp">
                                <h3 class="font-weight-semibold">From an Artesian Well to Home and Office</h3>
                            </div>
                        </div>
                        <div class="wow-outer offset-top-4">
                            <div class="wow slideInDown">
                                <p>For more than 60 years, we have been supplying the American homes and offices with high-quality spring water from a pristine stream near our plant.</p><a class="button button-primary button-winona" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('widgets.products')
@include('widgets.services')
@include('widgets.testimonials')
@include('widgets.blogposts')
@endsection