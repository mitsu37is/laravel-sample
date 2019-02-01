<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title', 'Laracasts')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
</head>
<body style="padding-top: 40px;">

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
