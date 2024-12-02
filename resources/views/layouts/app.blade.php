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

    {{--blade-formatter-disable--}}
    <style type="text/tailwindcss">
    .btn {
        @apply rounded-md px-2 py-1 text-center text-slate-700 font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-500
    }

    .link {
        @apply font-medium text-gray-700 underline decoration-pink-500
    }

    label {
        @apply block uppercase text-slate-700 mb-2
    }

    input, textarea{
        @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }

    .error {
        @apply text-red-500 text-sm
    }

    </style>
    {{--    blade-formatter-enable--}}

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
