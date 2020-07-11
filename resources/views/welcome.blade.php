<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather App</title>
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/app.js" defer></script>
</head>
<body class="bg-gray-200">
    <div id="app" class="flex justify-center pt-16">
        <weather-app></weather-app>
    </div>
</body>
</html>