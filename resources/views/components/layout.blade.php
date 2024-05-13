<!doctype html>
<html class="w-screen h-screen bg-gray-100 overflow-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="h-full w-full bg-red-500 overflow-auto py-[30px]">

    {{ $slot }}
</body>

</html>
