<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Illmiyst</title>
    @include('includes.head')
</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<div class="m-grid m-grid--hor m-grid--root m-page">
    @include('includes/header')
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        @include('cms/partials/sidebar')
        @yield('content')
    </div>
    <!-- end:: Body -->
    @include('cms.partials.footer')
</div>
<!-- end:: Page -->
@include('includes/footerScripts');
@yield('extra-footer')
</body>
</html>
