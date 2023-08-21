<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventnie</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.subviews.navbar')
    <main class="bg-gray-100 py-8 px-40 min-h-screen">
        <div class="bg-white h-full w-full rounded-xl border-4 border-black shadow-xl">
            @yield('content')
        </div>
    </main>
    @include('layouts.subviews.footer')

</body>

</html>