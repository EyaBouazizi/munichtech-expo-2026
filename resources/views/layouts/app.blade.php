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

    <!-- Tailwind CSS via Vite (with fallbacks) -->
    @php
        $manifestPath = public_path('build/manifest.json');
        $altManifestPath = public_path('build/.vite/manifest.json');
        $hasStandardManifest = file_exists($manifestPath);
        $hasAltManifest = !$hasStandardManifest && file_exists($altManifestPath);
        $altCssHref = null;
        if ($hasAltManifest) {
            $manifestJson = json_decode(file_get_contents($altManifestPath), true);
            if (isset($manifestJson['resources/css/app.css']['file'])) {
                $altCssHref = asset('build/'.$manifestJson['resources/css/app.css']['file']);
            }
        }
    @endphp
    @if ($hasStandardManifest)
        @vite('resources/css/app.css')
    @elseif ($hasAltManifest && $altCssHref)
        <link rel="stylesheet" href="{{ $altCssHref }}" />
    @else
        <script src="https://cdn.tailwindcss.com"></script>
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

    <!-- Scripts (Vite with fallbacks) -->
    @php
        $altJsSrc = null;
        if (isset($manifestJson['resources/js/app.js']['file'])) {
            $altJsSrc = asset('build/'.$manifestJson['resources/js/app.js']['file']);
        }
    @endphp
    @if ($hasStandardManifest)
        @vite('resources/js/app.js')
    @elseif ($hasAltManifest && $altJsSrc)
        <script type="module" src="{{ $altJsSrc }}"></script>
    @endif
</body>
</html>
