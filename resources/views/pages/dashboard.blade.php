@extends('layouts.app')

@section('header_title', 'Store Performance')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 max-w-7xl mx-auto">
    
    <!-- Hero Section: Revenue & Chart -->
    <section class="lg:col-span-12 relative rounded-2xl border border-hairline bg-panel overflow-hidden">
        <div class="absolute inset-0 glow-effect pointer-events-none"></div>
        <div class="relative p-6 md:p-8 flex flex-col md:flex-row items-end justify-between gap-8">
            
            <!-- Revenue Angka -->
            <div class="flex-shrink-0 z-10 w-full md:w-auto">
                <p class="text-sm font-medium text-gray-400 mb-1">Revenue</p>
                <h2 class="text-4xl md:text-5xl font-light text-champagne tracking-tight">$48,210</h2>
            </div>

            <!-- Ilustrasi 30-Day Line Chart -->
            <div id="revenue-chart" class="flex-1 h-24 md:h-32 w-full relative z-10 transition-opacity duration-300" aria-label="30-day revenue chart">
                <!-- SVG Garis Bulan Lalu (Lebih redup) -->
                <svg class="absolute inset-0 w-full h-full" preserveAspectRatio="none" viewBox="0 0 100 100">
                    <path d="M0 80 Q 20 60, 40 70 T 80 50 T 100 60" fill="none" stroke="rgba(255, 255, 255, 0.1)" stroke-width="1.5" stroke-dasharray="4 2"/>
                </svg>
                <!-- SVG Garis Bulan Ini (Champagne) -->
                <svg class="absolute inset-0 w-full h-full" preserveAspectRatio="none" viewBox="0 0 100 100">
                    <path d="M0 70 Q 20 50, 40 40 T 70 30 T 100 10" fill="none" stroke="#E5D3B3" stroke-width="2.5" stroke-linecap="round" />
                </svg>
            </div>
        </div>
    </section>

    <!-- Product Rows Section (Sesuai Role Owner UMKM) -->
    <section class="lg:col-span-12 space-y-4">
        <div class="flex items-center justify-between mb-2">
            <h3 class="text-lg font-medium text-gray-200">Top Products</h3>
            <a href="#" class="text-sm text-champagne hover:underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne rounded">View All</a>
        </div>

        <div class="grid grid-cols-1 gap-4">
            <!-- Product Row 1 -->
            <a href="#" class="group flex items-center justify-between p-4 rounded-xl border border-hairline bg-panel hover:bg-white/5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne transition-colors">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded bg-canvas border border-hairline flex items-center justify-center text-xs text-gray-500">Img</div>
                    <div>
                        <h4 class="text-sm font-medium text-gray-200 group-hover:text-champagne transition-colors">Alder Lounge Chair</h4>
                        <p class="text-xs text-gray-500">Walnut / Leather</p>
                    </div>
                </div>
                <div class="text-right">
                    <span class="block text-sm text-gray-300">142 sold</span>
                </div>
            </a>

            <!-- Product Row 2 -->
            <a href="#" class="group flex items-center justify-between p-4 rounded-xl border border-hairline bg-panel hover:bg-white/5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne transition-colors">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded bg-canvas border border-hairline flex items-center justify-center text-xs text-gray-500">Img</div>
                    <div>
                        <h4 class="text-sm font-medium text-gray-200 group-hover:text-champagne transition-colors">Alder Lounge Chair</h4>
                        <p class="text-xs text-gray-500">Oak / Canvas</p>
                    </div>
                </div>
                <div class="text-right">
                    <span class="block text-sm text-gray-300">89 sold</span>
                </div>
            </a>

            <!-- Product Row 3 -->
            <a href="#" class="group flex items-center justify-between p-4 rounded-xl border border-hairline bg-panel hover:bg-white/5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne transition-colors">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded bg-canvas border border-hairline flex items-center justify-center text-xs text-gray-500">Img</div>
                    <div>
                        <h4 class="text-sm font-medium text-gray-200 group-hover:text-champagne transition-colors">Alder Lounge Chair</h4>
                        <p class="text-xs text-gray-500">Ash / Boucle</p>
                    </div>
                </div>
                <div class="text-right">
                    <span class="block text-sm text-gray-300">76 sold</span>
                </div>
            </a>

            <!-- Product Row 4 -->
            <a href="#" class="group flex items-center justify-between p-4 rounded-xl border border-hairline bg-panel hover:bg-white/5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne transition-colors">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded bg-canvas border border-hairline flex items-center justify-center text-xs text-gray-500">Img</div>
                    <div>
                        <h4 class="text-sm font-medium text-gray-200 group-hover:text-champagne transition-colors">Alder Lounge Chair</h4>
                        <p class="text-xs text-gray-500">Ebonized / Velvet</p>
                    </div>
                </div>
                <div class="text-right">
                    <span class="block text-sm text-gray-300">45 sold</span>
                </div>
            </a>
        </div>
    </section>
</div>
@endsection