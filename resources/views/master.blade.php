<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
@include('partials.headscripts')
</head>
<body>
<div class="page">
@include('partials.header')

@yield('content')

@include('partials.footer')
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
@include('partials.footscripts')
</body>
</html>
