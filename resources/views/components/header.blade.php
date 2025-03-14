<header x-data="navbar" :class="{ 'bg-white shadow-md': scrolled, 'bg-transparent': !scrolled }" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="container-custom">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <img class="h-10 w-auto" src="{{ asset('img/logo.svg') }}" alt="{{ config('app.name', 'ALPA Template') }}">
                    <span :class="{ 'text-primary-700': scrolled, 'text-white': !scrolled }" class="ml-3 text-xl font-bold transition-colors duration-300">ALPA</span>
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-10">
                <a href="#beranda" :class="{ 'text-gray-800 hover:text-primary-600': scrolled, 'text-white hover:text-primary-200': !scrolled }" class="text-base font-medium transition-colors duration-300">Beranda</a>
                <a href="#layanan" :class="{ 'text-gray-800 hover:text-primary-600': scrolled, 'text-white hover:text-primary-200': !scrolled }" class="text-base font-medium transition-colors duration-300">Layanan</a>
                <a href="#tentang" :class="{ 'text-gray-800 hover:text-primary-600': scrolled, 'text-white hover:text-primary-200': !scrolled }" class="text-base font-medium transition-colors duration-300">Tentang</a>
                <a href="#portofolio" :class="{ 'text-gray-800 hover:text-primary-600': scrolled, 'text-white hover:text-primary-200': !scrolled }" class="text-base font-medium transition-colors duration-300">Portofolio</a>
                <a href="#testimonial" :class="{ 'text-gray-800 hover:text-primary-600': scrolled, 'text-white hover:text-primary-200': !scrolled }" class="text-base font-medium transition-colors duration-300">Testimonial</a>
                <a href="#kontak" :class="{ 'text-gray-800 hover:text-primary-600': scrolled, 'text-white hover:text-primary-200': !scrolled }" class="text-base font-medium transition-colors duration-300">Kontak</a>
            </nav>
            
            <!-- CTA Button -->
            <div class="hidden md:flex items-center">
                <a href="#kontak" class="btn btn-primary">Hubungi Kami</a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="toggle" type="button" :class="{ 'text-gray-800': scrolled, 'text-white': !scrolled }" class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
                    <span class="sr-only">Buka menu</span>
                    <svg x-show="!open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div x-show="open" class="md:hidden bg-white" style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#beranda" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 hover:bg-primary-50 hover:text-primary-600">Beranda</a>
            <a href="#layanan" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 hover:bg-primary-50 hover:text-primary-600">Layanan</a>
            <a href="#tentang" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 hover:bg-primary-50 hover:text-primary-600">Tentang</a>
            <a href="#portofolio" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 hover:bg-primary-50 hover:text-primary-600">Portofolio</a>
            <a href="#testimonial" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 hover:bg-primary-50 hover:text-primary-600">Testimonial</a>
            <a href="#kontak" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 hover:bg-primary-50 hover:text-primary-600">Kontak</a>
        </div>
        <div class="pt-4 pb-3 border-t border-gray-200">
            <div class="px-2">
                <a href="#kontak" class="block w-full text-center px-4 py-2 text-base font-medium text-white bg-primary-600 hover:bg-primary-700 rounded-md">Hubungi Kami</a>
            </div>
        </div>
    </div>
</header>
