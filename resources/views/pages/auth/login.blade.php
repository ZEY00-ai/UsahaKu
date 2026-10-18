<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Login - Field & Form Workspace</title>
    
    <!-- Memanggil Custom CSS (Fluid typography & efek glow) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('assets/js/tailwind-config.js') }}"></script>
</head>
<body class="bg-canvas text-gray-300 font-sans antialiased min-h-screen flex items-center justify-center p-4 md:p-8 selection:bg-champagne selection:text-canvas relative overflow-hidden">

    <!-- Latar belakang glow effect -->
    <div class="absolute inset-0 glow-effect pointer-events-none opacity-50"></div>

    <!-- Login Card -->
    <div class="relative z-10 w-full max-w-md bg-panel border border-hairline rounded-2xl p-6 md:p-8 shadow-2xl">
        
        <!-- Branding Header -->
        <div class="text-center mb-8">
            <h1 class="text-2xl font-light text-champagne tracking-widest uppercase mb-2">Field & Form</h1>
            <p class="text-sm text-gray-500">Sign in to your workspace</p>
        </div>

        <!-- Form Login (Menggunakan standard Laravel auth route) -->
        <form method="POST" action="#" class="space-y-6">
            @csrf
            
            <!-- Email Input -->
            <div>
                <label for="email" class="block text-xs font-medium text-gray-400 mb-2 uppercase tracking-wider">Email Address</label>
                <input type="email" name="email" id="email" required autofocus
                    class="w-full bg-canvas border border-hairline rounded-lg px-4 py-3 text-gray-200 placeholder-gray-600 focus:outline-none focus:border-champagne focus:ring-1 focus:ring-champagne transition-colors"
                    placeholder="nama@umkm.com">
                
                {{-- Error Message (Jika ada) --}}
                @error('email')
                    <p class="mt-2 text-xs text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Input -->
            <div>
                <div class="flex items-center justify-between mb-2">
                    <label for="password" class="block text-xs font-medium text-gray-400 uppercase tracking-wider">Password</label>
                    <a href="#" class="text-xs text-champagne hover:underline focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-champagne rounded transition-all">Forgot?</a>
                </div>
                <input type="password" name="password" id="password" required
                    class="w-full bg-canvas border border-hairline rounded-lg px-4 py-3 text-gray-200 placeholder-gray-600 focus:outline-none focus:border-champagne focus:ring-1 focus:ring-champagne transition-colors"
                    placeholder="••••••••">
                
                {{-- Error Message (Jika ada) --}}
                @error('password')
                    <p class="mt-2 text-xs text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember"
                    class="w-4 h-4 rounded border-hairline bg-canvas text-champagne focus:ring-champagne focus:ring-offset-2 focus:ring-offset-panel cursor-pointer">
                <label for="remember" class="ml-3 text-sm text-gray-400 cursor-pointer">Stay signed in</label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-champagne text-canvas font-medium py-3 rounded-lg hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-panel focus:ring-champagne transition-all">
                Sign In
            </button>
        </form>

        <!-- Catatan Info Pendaftaran Akun -->
        <div class="mt-8 text-center border-t border-hairline pt-6">
            <p class="text-xs text-gray-500 leading-relaxed">
                Belum memiliki akun workspace? <br>
                Pendaftaran akun untuk Owner UMKM baru hanya dapat dilakukan dan dikelola oleh <span class="text-gray-300 font-medium">Super Admin</span>.
            </p>
        </div>
        
    </div>

</body>
</html>