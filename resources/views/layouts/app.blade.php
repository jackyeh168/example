<!doctype html>
<html>
<head>
    @include('includes.head')
    @yield('custom_head')
</head>
<body>
<div class="container">
    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">
        @yield('body')
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
@include('includes.foot')
@yield('custom_foot')
</html>
