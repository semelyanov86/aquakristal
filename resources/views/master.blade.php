<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
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
    @include('partials.messages')
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
@include('partials.form-callback')
    </div>
</div>
@include('partials.footscripts')
</body>
</html>
