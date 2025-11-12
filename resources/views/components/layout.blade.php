<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tambahkan slot baru dengan nama $title --}}
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div>
        <nav class="flex pl-5 py-2 bg-gray-800/50">
            <a href="/"
                class="{{ request()->is('/') ? 'bg-gray-950/50' : '' }} rounded-md px-3 py-2 text-sm font-medium text-white">Home</a>
            <a href="/about"
                class="{{ request()->is('about') ? 'bg-gray-950/50' : '' }} rounded-md px-3 py-2 text-sm font-medium text-white">About</a>
            <a href="/blog"
                class="{{ request()->is('blog') ? 'bg-gray-950/50' : '' }} rounded-md px-3 py-2 text-sm font-medium text-white">Blog</a>
            <a href="/posts"
                class="{{ request()->is('posts') ? 'bg-gray-950/50' : '' }} rounded-md px-3 py-2 text-sm font-medium text-white">Posts</a>
            <a href="/contact"
                class="{{ request()->is('contact') ? 'bg-gray-950/50' : '' }} rounded-md px-3 py-2 text-sm font-medium text-white">Contact</a>
        </nav>
    </div>

    <main class="container mx-auto p-8 h-screen">
        {{ $slot }}
    </main>

    <footer class="bg-gray-900 py-8 mt-10 shadow-inner">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-500 text-sm">
                &copy; 2025 Praktikum Web.
            </p>
        </div>
    </footer>
</body>

</html>
