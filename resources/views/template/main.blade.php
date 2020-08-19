<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cash/8.0.0/cash.min.js"></script>
    <script src="/js/main.js"></script>
    <title>My videos</title>
</head>

<body class="bg-black">
    <nav class="flex justify-between p-4 items-center bg-gray-900 bg-opacity-75 fixed w-full top-0 right-0 z-10">
        <div class="whitespace-no-wrap">
            <a href="/" class="text-red-600 font-bold">
                <span class="text-4xl">M</span><span class="text-xs">y</span>
                <span class="text-4xl" style="margin-left: -0.3em;">V</span>
                <span class="text-xs" style="margin-left: -0.8em;">ideos</span>
            </a>
        </div>
        <div class="ml-4">
            <input id="searchField" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal h-6" type="text" placeholder="Pesquise...">
        </div>
    </nav>
    <div class="container mx-auto p-4 mt-20">
        @yield('content')
    </div>
</body>

</html>