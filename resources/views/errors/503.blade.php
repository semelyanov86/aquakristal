<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>503 Page</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
@include('partials.headscripts')
    <![endif]-->
</head>
<body>
<div class="page">
    <!-- Page content-->
    <section class="section section-single bg-gray-800" style="background-image: url(/images/bg-image-4.jpg);">
        <div class="section-single-inner">
            <div class="section-single-dummy"></div>
            <div class="section-single-main">
                <div class="container">
                    <div class="row row-30">
                        <div class="col-sm-6 text-center text-sm-left">
                            <p class="text-extra-large">503</p>
                        </div>
                        <div class="col-sm-6">
                            <div class="section-single-main-content">
                                <h6 class="title-decorated title-decorated-lg">Service is temporary unavailable</h6>
                                <p>Sorry, we're offline right now to make our site even better.<br>Please, come back later and check what we've been up to.</p><a class="button button-lg button-primary button-winona" href="{{route('main')}}">Back to home page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-minimal section-single-footer">
                <div class="container">
                    <div class="footer-minimal-inner"><a class="brand" href="index.html"><img src="/images/logo-inverse-132x34.png" alt="" width="132" height="34" srcset="/images/logo-inverse-250x64.png 2x"/></a>
                        <!-- Rights-->
                        <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><br class="d-sm-none"/></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-double-torus"></div>
        </div>
    </div>
</div>
<div class="modal modal-custom fade" id="call-form">
    <div class="modal-dialog modal-dialog-custom" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Request a Callback</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <p>Please leave your phone number in the field below and we will call you back soon.</p>
                <form class="rd-form rd-mailform form-inline form-inline-custom" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                    <div class="form-wrap">
                        <input class="form-input" id="header-phone" type="text" name="phone" data-constraints="@Numeric">
                        <label class="form-label" for="header-phone">Phone</label>
                    </div>
                    <div class="form-button">
                        <button class="button button-primary button-icon button-icon-only button-winona" type="submit" aria-label="submit"><span class="icon mdi mdi-phone-in-talk"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
@include('partials.footscripts')
</body>
</html>