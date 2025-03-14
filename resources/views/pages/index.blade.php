@extends('layouts.app')

@section('title', 'Beranda')
@section('meta_description', 'Template landing page modern untuk Laravel dengan TailwindCSS, AlpineJS, Livewire, Folio, dan Volt.')

@section('content')
    <!-- Hero Section -->
    <section id="beranda" class="relative pt-32 pb-20 md:pt-40 md:pb-28 bg-gradient-to-br from-primary-600 to-primary-900 text-white">
        <div class="container-custom relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        Solusi Digital Modern untuk Bisnis Anda
                    </h1>
                    <p class="text-lg md:text-xl text-primary-100 mb-8">
                        Tingkatkan bisnis Anda dengan solusi digital yang inovatif, responsif, dan modern. Kami membantu Anda mencapai tujuan bisnis dengan teknologi terkini.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#kontak" class="btn btn-secondary">Mulai Sekarang</a>
                        <a href="#layanan" class="btn btn-outline border-white text-white hover:bg-white hover:text-primary-600">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <img src="{{ asset('img/hero-image.svg') }}" alt="Hero Image" class="w-full h-auto">
                </div>
            </div>
        </div>
        
        <!-- Background Shapes -->
        <div class="absolute top-0 right-0 w-full h-full overflow-hidden z-0">
            <div class="absolute top-0 right-0 opacity-10">
                <svg width="500" height="500" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="250" cy="250" r="250" fill="white"/>
                </svg>
            </div>
            <div class="absolute bottom-0 left-0 opacity-10">
                <svg width="300" height="300" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="150" cy="150" r="150" fill="white"/>
                </svg>
            </div>
        </div>
    </section>
    
    <!-- Clients Section -->
    <section class="py-10 bg-gray-100">
        <div class="container-custom">
            <div class="text-center mb-8">
                <p class="text-lg text-gray-600">Dipercaya oleh perusahaan terkemuka</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 items-center justify-items-center">
                <img src="{{ asset('img/client-1.svg') }}" alt="Client 1" class="h-12 w-auto grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                <img src="{{ asset('img/client-2.svg') }}" alt="Client 2" class="h-12 w-auto grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                <img src="{{ asset('img/client-3.svg') }}" alt="Client 3" class="h-12 w-auto grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                <img src="{{ asset('img/client-4.svg') }}" alt="Client 4" class="h-12 w-auto grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                <img src="{{ asset('img/client-5.svg') }}" alt="Client 5" class="h-12 w-auto grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                <img src="{{ asset('img/client-6.svg') }}" alt="Client 6" class="h-12 w-auto grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section id="layanan" class="section bg-white">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Layanan Kami</h2>
                <p class="text-lg text-gray-600">
                    Kami menyediakan berbagai layanan digital untuk membantu bisnis Anda tumbuh dan berkembang di era digital.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="card p-8 hover:translate-y-[-8px]">
                    <div class="bg-primary-100 text-primary-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Web Development</h3>
                    <p class="text-gray-600 mb-6">
                        Kami membuat website yang responsif, cepat, dan modern dengan teknologi terkini untuk kebutuhan bisnis Anda.
                    </p>
                    <a href="#" class="text-primary-600 font-medium hover:text-primary-700 inline-flex items-center">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
                
                <!-- Service 2 -->
                <div class="card p-8 hover:translate-y-[-8px]">
                    <div class="bg-primary-100 text-primary-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Mobile App Development</h3>
                    <p class="text-gray-600 mb-6">
                        Kembangkan aplikasi mobile yang intuitif dan berkinerja tinggi untuk platform iOS dan Android.
                    </p>
                    <a href="#" class="text-primary-600 font-medium hover:text-primary-700 inline-flex items-center">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
                
                <!-- Service 3 -->
                <div class="card p-8 hover:translate-y-[-8px]">
                    <div class="bg-primary-100 text-primary-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">UI/UX Design</h3>
                    <p class="text-gray-600 mb-6">
                        Desain antarmuka yang menarik dan pengalaman pengguna yang intuitif untuk aplikasi dan website Anda.
                    </p>
                    <a href="#" class="text-primary-600 font-medium hover:text-primary-700 inline-flex items-center">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section id="tentang" class="section bg-gray-50">
        <div class="container-custom">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Tentang Kami</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Kami adalah tim profesional yang berdedikasi untuk memberikan solusi digital terbaik bagi bisnis Anda. Dengan pengalaman lebih dari 5 tahun di industri teknologi, kami telah membantu ratusan klien mencapai tujuan bisnis mereka.
                    </p>
                    <p class="text-lg text-gray-600 mb-8">
                        Misi kami adalah menyediakan layanan berkualitas tinggi dengan harga yang terjangkau dan memberikan hasil yang melebihi ekspektasi klien kami.
                    </p>
                    
                    <!-- Counter Section -->
                    @include('components.counter')
                </div>
                <div class="order-1 lg:order-2">
                    <img src="{{ asset('img/about-image.svg') }}" alt="About Us" class="w-full h-auto rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Team Section -->
    <section id="tim" class="section bg-white">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Tim Kami</h2>
                <p class="text-lg text-gray-600">
                    Kenali tim profesional kami yang berdedikasi untuk memberikan solusi terbaik bagi bisnis Anda.
                </p>
            </div>
            
            @include('components.team')
        </div>
    </section>
    
    <!-- Testimonial Section -->
    <section id="testimonial" class="section bg-gray-50">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Apa Kata Klien Kami</h2>
                <p class="text-lg text-gray-600">
                    Dengarkan pengalaman langsung dari klien yang telah bekerja sama dengan kami.
                </p>
            </div>
            
            @include('components.testimonial-slider')
        </div>
    </section>
    
    <!-- Pricing Section -->
    <section id="harga" class="section bg-white">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Paket Harga</h2>
                <p class="text-lg text-gray-600">
                    Pilih paket yang sesuai dengan kebutuhan dan anggaran bisnis Anda.
                </p>
            </div>
            
            @include('components.pricing')
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section id="faq" class="section bg-gray-50">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Pertanyaan Umum</h2>
                <p class="text-lg text-gray-600">
                    Temukan jawaban untuk pertanyaan yang sering diajukan tentang layanan kami.
                </p>
            </div>
            
            @include('components.faq')
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="kontak" class="section bg-white">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Hubungi Kami</h2>
                <p class="text-lg text-gray-600">
                    Punya pertanyaan atau siap untuk memulai proyek? Hubungi kami sekarang.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <div class="bg-gray-50 p-8 rounded-lg mb-8">
                        <h3 class="text-xl font-bold mb-6">Informasi Kontak</h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-primary-100 text-primary-600 w-10 h-10 rounded-lg flex items-center justify-center mr-4 shrink-0">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Alamat</h4>
                                    <p class="text-gray-600">Jl. Sudirman No. 123, Jakarta Pusat, 10220</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-primary-100 text-primary-600 w-10 h-10 rounded-lg flex items-center justify-center mr-4 shrink-0">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Telepon</h4>
                                    <p class="text-gray-600">+62 21 1234 5678</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-primary-100 text-primary-600 w-10 h-10 rounded-lg flex items-center justify-center mr-4 shrink-0">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Email</h4>
                                    <p class="text-gray-600">info@alpa.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="rounded-lg overflow-hidden h-80">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4065403209183!2d106.82241931476913!3d-6.208981995505146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3f1e1f1b297%3A0x1e5c3d4b4c8efe1b!2sJl.%20Jend.%20Sudirman%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1647859912028!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                
                <div>
                    <livewire:contact-form />
                </div>
            </div>
        </div>
    </section>
@endsection
