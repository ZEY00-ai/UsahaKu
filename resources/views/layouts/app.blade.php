<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Field & Form Dashboard</title>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('assets/js/tailwind-config.js') }}"></script>
</head>
<body class="bg-canvas text-gray-300 font-sans antialiased min-h-screen flex flex-col lg:flex-row selection:bg-champagne selection:text-canvas">

    <!-- Sidebar Layout -->
    @include('layouts.partials.sidebar')

    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col min-h-screen lg:ml-[240px] transition-all duration-300">
        @include('layouts.partials.header')
        
        <main class="flex-1 p-4 md:p-6 lg:p-8 focus-visible:outline-none" id="main-content" tabindex="-1">
            @yield('content')
        </main>

        @include('layouts.partials.footer')
    </div>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>