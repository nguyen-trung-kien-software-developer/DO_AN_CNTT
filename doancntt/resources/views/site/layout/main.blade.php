<!DOCTYPE html>
<html lang="vi">

@include('site.layout.head')

<body>
    @include('site.layout.header')

    <div id="page-content">
        @include('site.layout.menu')
        @yield('content')
    </div>

    @include('site.layout.footer')
</body>

</html>
