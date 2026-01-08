<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        {{-- SEO Meta Tags --}}
        <meta name="description" content="Qassa.id - Software akuntansi & manajemen bisnis modern untuk UMKM dan Enterprise. Kelola keuangan, inventory, dan laporan bisnis dalam satu platform terintegrasi.">
        <meta name="keywords" content="qassa, software akuntansi, aplikasi bisnis, manajemen keuangan, inventory management, laporan keuangan, UMKM, enterprise software, pembukuan online">
        <meta name="author" content="Qassa.id">
        <meta name="robots" content="index, follow">
        
        {{-- Open Graph / Social Media --}}
        <meta property="og:type" content="website">
        <meta property="og:title" content="Qassa.id - Software Akuntansi & Bisnis Modern">
        <meta property="og:description" content="Kelola keuangan bisnis Anda dengan mudah. Dashboard real-time, laporan otomatis, dan integrasi lengkap.">
        <meta property="og:image" content="/og-image.jpg">
        <meta property="og:url" content="https://qassa.id">
        <meta property="og:site_name" content="Qassa.id">
        
        {{-- Twitter Card --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Qassa.id - Software Akuntansi & Bisnis Modern">
        <meta name="twitter:description" content="Kelola keuangan bisnis Anda dengan mudah. Dashboard real-time, laporan otomatis, dan integrasi lengkap.">

        {{-- Theme Color --}}
        <meta name="theme-color" content="#1f897f">
        <meta name="msapplication-TileColor" content="#1f897f">

        {{-- Inline script to detect system dark mode preference and apply it immediately --}}
        <script>
            (function() {
                const appearance = '{{ $appearance ?? "system" }}';

                if (appearance === 'system') {
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                    if (prefersDark) {
                        document.documentElement.classList.add('dark');
                    }
                }
            })();
        </script>

        {{-- Inline style to set the HTML background color based on our theme --}}
        <style>
            html {
                background-color: #ffffff;
            }

            html.dark {
                background-color: #0a1413;
            }
        </style>

        <title inertia>{{ config('app.name', 'Qassa.id') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        {{-- Google Fonts - Inter (Modern, Professional) --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        @vite(['resources/js/app.ts', "resources/js/pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
