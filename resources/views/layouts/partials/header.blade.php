<header class="h-16 border-b border-hairline bg-canvas/80 backdrop-blur-md sticky top-0 z-40 flex items-center justify-between px-4 lg:px-8">
    <div class="flex items-center">
        <button id="menu-btn" class="lg:hidden mr-4 text-gray-400 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne rounded" aria-label="Buka Menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
        <h1 class="text-sm font-medium text-gray-200 truncate">
            @yield('header_title', 'Overview')
        </h1>
    </div>
    <div class="flex items-center">
        <button class="w-8 h-8 rounded-full bg-panel border border-hairline flex items-center justify-center text-xs hover:border-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne transition-colors">
            {{ substr(auth()->user()->name ?? 'U', 0, 1) }}
        </button>
    </div>
</header>