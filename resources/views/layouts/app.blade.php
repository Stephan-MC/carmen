<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Shop</title>
    @vite('resources/css/app.css')
</head>
<body>
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
    @yield('content')
</body>
</html>
