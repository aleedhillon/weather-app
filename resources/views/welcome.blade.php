<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather App</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0" defer></script>
    <script src="/js/app.js" defer></script>
</head>
<body class="bg-gray-200">
    <div id="app" class="flex justify-center pt-4">
        <weather-app></weather-app>
    </div>
    <footer class='w-full flex justify-center items-center border-t border-grey-100 p-4'>
        <span>Developed by <a class="hover:text-green-500" href="https://github.com/aliadhillon">Ali A. Dhillon</a>.</span>
        <a class="hover:text-blue-500" href="https://github.com/aliadhillon/weather-app">
            <span class="ml-2">Source Code <img class="w-4 h-4 inline" src="/img/github.png" alt="Github Logo"></span>
        </a>
    </footer>
</body>
</html>