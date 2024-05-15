<!doctype html>
<<<<<<< HEAD
<html class="h-screen">
=======
<html>
>>>>>>> parent of ab1bf61 (fix: set width and height for html and body)

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<<<<<<< HEAD
<body class="min-h-full py-[30px] bg-red-500">
    @session('message')
        <div class=" text-center w-full bg-green-500 text-white rounded-2xl">{{ session('message') }}</div>
    @endsession
=======
<body class="my-[30px] w-full h-full ">
>>>>>>> parent of ab1bf61 (fix: set width and height for html and body)
    {{ $slot }}

</body>

</html>
