<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/ef55713c5a.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>
