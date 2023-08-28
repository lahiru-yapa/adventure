<!doctype html>
<html class="no-js" lang="zxx">

@include('Layout.header')

<body>
    @include('Layout.nav')

    @yield('content')

    @include('Layout.footer')

    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
