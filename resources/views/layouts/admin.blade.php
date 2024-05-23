<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - Online Shop')</title>
    @vite('resources/sass/app.scss')
</head>
<body class="">
    <div class="flex flex-col min-h-screen">
        <div class="flex grow">
            <div class="bg-black text-white px-4 py-6 shrink-0 text-lg space-y-4">
                <h3 class="text-white py-4 border-b font-black text-2xl">Admin Panel</h3>
                <div class="flex flex-col space-y-4">
                    <a href="" class="px-2">Admin - Home</a>
                    <a href="" class="px-2">Admin - Products</a>
                    <a href="/" class="px-2 py-1 bg-blue-500 rounded">Go Back to home page</a>
                </div>
            </div>
            <div class="grow">
                <nav class="p-6 flex max-md:flex-col max-md:gap-4 items-center justify-between text-black bg-slate-200">
                    <span class="text-xl font-bold">Online Store</span>
                    <div class="flex items-center [&>*]:space-x-4 [&>*]:px-4 divide-x divide-gray-200/50 font-semibold">
                        <div>
                            <a href="{{ route('admin.home') }}" class="">Home</a>
                            <a href="{{ route('admin.products.index') }}" class="">Products</a>
                            <a href="/cart" class="">Cart</a>
                            <a href="/" class="">Store</a>
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
                <main class="grow flex flex-col">
                    <div class="bg-green-400 text-center py-8 text-4xl text-white text-semibold">@yield('title', 'Admin - Online Shop')</div>
                    <div class="grow grid place-content-center p-4">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>

        <footer class="bg-slate-800 flex items-center justify-center p-6 space-x-4 text-white">
            <span class="text-gray-200">copyright</span>
            <span class="font-semibold">Daniel Correa - Paola Vallejo</span>
        </footer>
    </div>
</body>
</html>
