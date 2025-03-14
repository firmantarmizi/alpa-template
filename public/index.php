<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

// Tampilkan template landing page
$content = file_get_contents(__DIR__ . '/../resources/views/pages/index.blade.php');

// Ganti tag Blade dengan HTML sederhana
$content = str_replace('@extends(\'layouts.app\')', '', $content);
$content = str_replace('@section(\'title\', \'Beranda\')', '', $content);
$content = str_replace('@section(\'meta_description\', \'Template landing page modern untuk Laravel dengan TailwindCSS, AlpineJS, Livewire, Folio, dan Volt.\')', '', $content);
$content = str_replace('@section(\'content\')', '', $content);
$content = str_replace('@endsection', '', $content);
$content = str_replace('{{ asset(\'img/hero-image.svg\') }}', 'img/hero-image.svg', $content);
$content = str_replace('{{ asset(\'img/client-1.svg\') }}', 'img/client-1.svg', $content);
$content = str_replace('{{ asset(\'img/client-2.svg\') }}', 'img/client-2.svg', $content);
$content = str_replace('{{ asset(\'img/client-3.svg\') }}', 'img/client-3.svg', $content);
$content = str_replace('{{ asset(\'img/client-4.svg\') }}', 'img/client-4.svg', $content);
$content = str_replace('{{ asset(\'img/client-5.svg\') }}', 'img/client-5.svg', $content);
$content = str_replace('{{ asset(\'img/client-6.svg\') }}', 'img/client-6.svg', $content);
$content = str_replace('{{ asset(\'img/about-image.svg\') }}', 'img/about-image.svg', $content);
$content = str_replace('@include(\'components.counter\')', '<!-- Counter Component -->', $content);
$content = str_replace('@include(\'components.team\')', '<!-- Team Component -->', $content);
$content = str_replace('@include(\'components.testimonial-slider\')', '<!-- Testimonial Slider Component -->', $content);
$content = str_replace('@include(\'components.pricing\')', '<!-- Pricing Component -->', $content);
$content = str_replace('@include(\'components.faq\')', '<!-- FAQ Component -->', $content);
$content = str_replace('@include(\'components.header\')', '<!-- Header Component -->', $content);
$content = str_replace('@include(\'components.footer\')', '<!-- Footer Component -->', $content);

// Tambahkan HTML dasar
$html = '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ALPA Template - Landing Page Modern</title>
    <meta name="description" content="Template landing page modern untuk Laravel dengan TailwindCSS, AlpineJS, Livewire, Folio, dan Volt.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            100: "#e0f2fe",
                            600: "#0284c7",
                            700: "#0369a1",
                            900: "#0c4a6e"
                        },
                        secondary: {
                            500: "#f97316"
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .container-custom {
            width: 100%;
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        .section {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }
        .card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
        }
        .btn-secondary {
            background-color: #f97316;
            color: white;
        }
        .btn-secondary:hover {
            background-color: #ea580c;
        }
        .btn-outline {
            background-color: transparent;
            border: 1px solid;
        }
    </style>
</head>
<body class="antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="fixed top-0 left-0 right-0 z-50 bg-white shadow-sm">
            <div class="container-custom">
                <div class="flex items-center justify-between py-4">
                    <a href="#" class="text-2xl font-bold text-primary-600">ALPA</a>
                    <nav class="hidden md:flex space-x-8">
                        <a href="#beranda" class="font-medium text-gray-900 hover:text-primary-600">Beranda</a>
                        <a href="#layanan" class="font-medium text-gray-900 hover:text-primary-600">Layanan</a>
                        <a href="#tentang" class="font-medium text-gray-900 hover:text-primary-600">Tentang</a>
                        <a href="#kontak" class="font-medium text-gray-900 hover:text-primary-600">Kontak</a>
                    </nav>
                    <div class="md:hidden">
                        <button class="text-gray-900">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Main Content -->
        <main class="flex-grow">
            ' . $content . '
        </main>
        
        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12">
            <div class="container-custom">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">ALPA</h3>
                        <p class="text-gray-400 mb-4">Template landing page modern untuk Laravel dengan TailwindCSS, AlpineJS, Livewire, Folio, dan Volt.</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Layanan</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Web Development</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Mobile App Development</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">UI/UX Design</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Perusahaan</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Tentang Kami</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Karir</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-gray-400">Jl. Contoh No. 123, Jakarta, Indonesia</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="text-gray-400">info@example.com</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="text-gray-400">+62 123 4567 890</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-gray-800 mt-12 pt-8">
                    <p class="text-gray-400 text-center">&copy; ' . date('Y') . ' ALPA Template. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>';

echo $html;
