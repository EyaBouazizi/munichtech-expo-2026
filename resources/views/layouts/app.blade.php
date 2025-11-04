<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />
    <meta name="description" content="MunichTech EXPO 2026 - Europe's Innovation Gateway" />
    <meta name="author" content="MunichTech EXPO" />
    
    <title>@yield('title', 'MunichTech EXPO 2026')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS via Vite -->
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-50">

    <!-- Header -->
    @include('partials.header')

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    @vite('resources/js/app.js')
</body>
</html>
