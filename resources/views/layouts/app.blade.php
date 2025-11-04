<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />
    <meta name="description" content="MunichTech EXPO 2026 - Europe's Innovation Gateway" />
    <meta name="author" content="MunichTech EXPO" />
    
    <title>@yield('title', 'MunichTech EXPO 2026')</title>

    <!-- Favicon (force HTTPS to avoid mixed content) -->
    <link rel="shortcut icon" href="{{ secure_asset('favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS via Vite (with fallback if manifest is missing) -->
    @php $hasVite = file_exists(public_path('build/manifest.json')); @endphp
    @if ($hasVite)
        @vite('resources/css/app.css')
    @else
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.13/dist/tailwind.min.css" />
    @endif
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

    <!-- Scripts (Vite with fallback no-op if manifest is missing) -->
    @if ($hasVite)
        @vite('resources/js/app.js')
    @endif
</body>
</html>
