<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="container mx-auto">
            <a href="{{ route('home') }}" class="font-bold text-xl">ShopLaravel</a>
            <a href="{{ route('products.index') }}" class="ml-4">Products</a>
            <a href="{{ route('about') }}" class="ml-4">About</a>
        </nav>
    </header>
    <main class="container mx-auto py-8">
        @yield('content')
    </main>
    <footer>
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} ShopLaravel - All rights reserved
        </div>
    </footer>
</body>

</html>