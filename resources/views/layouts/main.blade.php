<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/logo.svg" rel="shortcut icon">
    <title>SmartCashier | @yield('title')</title>
    @include('style.css')
</head>

<body>
    <script src="{{ asset('dist/assets/static/js/initTheme.js') }}"></script>
    <div id="app">
        @include('layouts.navbar')

        @include('layouts.sidebar')

        <div id="main">

            @yield('content')

            @include('layouts.footer')
        </div>
    </div>

    @include('style.js')
</body>

</html>