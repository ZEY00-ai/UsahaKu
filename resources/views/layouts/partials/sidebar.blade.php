<aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-[240px] bg-panel border-r border-hairline transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out flex flex-col">
    <div class="h-16 flex items-center justify-between px-6 border-b border-hairline">
        <span class="text-champagne font-semibold tracking-wide uppercase">Field & Form</span>
        <button id="close-sidebar" class="lg:hidden text-gray-400 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne rounded" aria-label="Tutup Menu">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
    </div>

    <nav class="flex-1 overflow-y-auto px-4 py-6 space-y-8">
        
        <!-- Field & Form Customer Links -->
        <div>
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Browse</h3>
            <ul class="space-y-1">
                <li><a href="#" class="block px-3 py-2 rounded-md text-sm hover:bg-white/5 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne transition-colors">Shop</a></li>
                <li><a href="#" class="block px-3 py-2 rounded-md text-sm hover:bg-white/5 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne transition-colors">Rooms</a></li>
                <li><a href="#" class="block px-3 py-2 rounded-md text-sm hover:bg-white/5 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne transition-colors">Saved</a></li>
                <li><a href="#" class="block px-3 py-2 rounded-md text-sm hover:bg-white/5 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne transition-colors">Bag</a></li>
            </ul>
        </div>

        <!-- Sistem Manajemen (2 Role: Super Admin & Owner) -->
        <div>
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Workspace</h3>
            <ul class="space-y-1">
                {{-- Super Admin --}}
       
                    <li><a href="#" class="block px-3 py-2 rounded-md text-sm hover:bg-white/5 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne">Dashboard Super Admin</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded-md text-sm hover:bg-white/5 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne">Kelola Semua UMKM</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded-md text-sm hover:bg-white/5 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne">Statistik & Laporan Pusat</a></li>
                
                {{-- Owner UMKM (Gabungan Owner + Kasir) --}}
            
                    <li><a href="#" class="block px-3 py-2 rounded-md text-sm bg-white/5 text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne">Dashboard Toko</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded-md text-sm hover:bg-white/5 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne">Point of Sale (Kasir)</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded-md text-sm hover:bg-white/5 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne">Riwayat Transaksi</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded-md text-sm hover:bg-white/5 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne">Kelola Produk & Kategori</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded-md text-sm hover:bg-white/5 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne">Manajemen Stok</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded-md text-sm hover:bg-white/5 hover:text-champagne focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-champagne">Keuangan & Laporan</a></li>
       
            </ul>
        </div>
    </nav>
</aside>