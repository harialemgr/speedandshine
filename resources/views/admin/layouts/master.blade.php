<!DOCTYPE html>
<html lang="en">
    <title>{{ config('app_name','SPEED&SINE') }}</title>
<head>
    @yield('page-info')
    @yield('meta-content')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @yield("header-content")
    @yield("side-bar-content")
    @yield("main-content")
    @yield("footer-content")
</div>
    @yield('script-links')
    @yield('scripts')
</body>
</html>