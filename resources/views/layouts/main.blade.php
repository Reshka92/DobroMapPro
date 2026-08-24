<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('header-title', 'Карта добрых дел Севастополя')</title>
    <script src="https://api-maps.yandex.ru/v3/?apikey={{ config('services.yandex_api.api_yandex_map')}}&lang=ru_RU"></script>
    @vite(['resources/css/app.css', 'resources/js/yandexMap.js','resources/js/marker.js'])
</head>
<body class="overflow-hidden">
    <main>
        <div>
            <div class="fixed top-4 right-4 z-50 group">
   
    <img 
        src="{{ asset('images/userAvatar.png')}}" 
        alt="Avatar" 
        class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-lg cursor-pointer"
    >

    
    <div class="hidden group-hover:block absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl py-2 border border-gray-100">
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Профиль</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Мои дела</a>
        <div class="border-t border-gray-100 my-1"></div>
        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Выйти</a>
    </div>
</div>
        @yield('content')
        </div>
    </main>
</body>
</html>