<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://free.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />
    <title>My videos</title>
</head>

<body class="bg-black">
    <nav class="flex justify-between p-4 items-center bg-gray-900 bg-opacity-75 fixed w-full top-0 right-0">
        <div class="">
            <a href="/" class="text-red-600 font-bold">
                <span class="text-4xl">M</span><span class="text-xs">y</span>
                <span class="text-4xl" style="margin-left: -0.3em;">V</span>
                <span class="text-xs" style="margin-left: -0.8em;">ideos</span>
            </a>
        </div>
        <div>
            <a href="/" class="text-white">Home</a>
        </div>
        <div>
            <a href="/" class="text-white">Series</a>
        </div>
        <div>
            <a href="/" class="text-white">Movies</a>
        </div>
    </nav>
    <div class="container mx-auto p-4 mt-20">
        @yield('content')
    </div>
</body>

</html>