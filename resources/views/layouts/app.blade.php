<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">--}}
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel 11 Task List App</title>
    @yield('styles')
</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="text-2xl mb-4">
        @yield('title')
    </h1>
    @if (session()->has('success'))
        <div>{{ session('success') }}</div>
    @endif
    <div>
        @yield('content')
    </div>
</body>
</html>
