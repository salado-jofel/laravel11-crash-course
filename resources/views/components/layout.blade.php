<!doctype html>
<html class="h-screen">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="min-h-full py-[30px] bg-red-500">
    @session('message')
        <div class=" text-center w-full bg-green-500 text-white rounded-2xl">{{ session('message') }}</div>
    @endsession
    {{ $slot }}

</body>

</html>
