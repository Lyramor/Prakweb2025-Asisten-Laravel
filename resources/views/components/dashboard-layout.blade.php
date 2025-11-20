<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tambahkan slot baru dengan nama $title --}}
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    {{-- flowbite --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</head>

<body>
    <div>
        <nav class="flex pl-5 py-2 bg-gray-800/50">
            <a href="/dashboard"
                class="{{ request()->is('dashboard') ? 'bg-gray-950/50' : '' }} rounded-md px-3 py-2 text-sm font-medium text-white">Home</a>
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
