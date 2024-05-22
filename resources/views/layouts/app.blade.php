<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Shop</title>
    @vite('resources/css/app.css')
</head>
<body class="">
    <div class="flex flex-col min-h-screen">
        <nav class="p-6 flex items-center justify-between text-white bg-slate-800">
            <span class="text-xl font-bold">Online Store</span>
            <div class="flex items-center [&>*]:space-x-4 [&>*]:px-4 divide-x divide-gray-200/50 font-semibold">
                <div>
                    <a href="" class="">Home</a>
                    <a href="" class="">Products</a>
                    <a href="" class="">Cart</a>
                    <a href="" class="">Store</a>
                </div>
                <div>
                    @auth
                        <a href="" class="">Logut</a>
                    @else
                        <a href="" class="">Login</a>
                        <a href="" class="">Register</a>
                    @endauth
                </div>
            </div>
        </nav>
        <main class="grow">
            <div class="bg-green-400 text-center py-8 text-4xl text-white text-semibold">@yield('title', 'Online Shop')</div>
            @yield('content')
        </main>

        <footer class="bg-slate-800 flex items-center justify-center p-6 space-x-4 text-white">
            <span class="text-gray-200">copyright</span>
            <span class="font-semibold">Daniel Correa - Paola Vallejo</span>
        </footer>
    </div>
</body>
</html>
