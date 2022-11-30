<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    @include('admin.layout.head')
</head>

<body>

    @include('admin.layout.preLoader')

    <div id="main-wrapper">

        @include('admin.layout.header')

        @include('admin.layout.sidebar')

        <div class="content-body">
            <div class="container-fluid">
                @include('admin.layout.alert')

                @yield('content')

            </div>
        </div>

        @include('admin.layout.footer')
</body>

</html>
