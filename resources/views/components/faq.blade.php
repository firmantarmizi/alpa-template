<div x-data="faq" class="space-y-4">
    <!-- FAQ Item 1 -->
    <div class="border border-gray-200 rounded-lg overflow-hidden">
        <button @click="toggle(0)" class="flex justify-between items-center w-full px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none">
            <span class="font-medium text-gray-900">Apa saja layanan yang ditawarkan oleh ALPA?</span>
            <svg :class="{ 'rotate-180': isOpen(0) }" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div x-show="isOpen(0)" x-collapse class="px-6 py-4 bg-gray-50 border-t border-gray-200">
            <p class="text-gray-600">
                ALPA menawarkan berbagai layanan digital, termasuk Web Development, Mobile App Development, UI/UX Design, Digital Marketing, dan SEO Optimization. Kami menyediakan solusi lengkap untuk kebutuhan digital bisnis Anda.
            </p>
        </div>
    </div>
    
    <!-- FAQ Item 2 -->
    <div class="border border-gray-200 rounded-lg overflow-hidden">
        <button @click="toggle(1)" class="flex justify-between items-center w-full px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none">
            <span class="font-medium text-gray-900">Berapa lama waktu yang dibutuhkan untuk mengembangkan sebuah website?</span>
            <svg :class="{ 'rotate-180': isOpen(1) }" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div x-show="isOpen(1)" x-collapse class="px-6 py-4 bg-gray-50 border-t border-gray-200">
            <p class="text-gray-600">
                Waktu pengembangan website bervariasi tergantung pada kompleksitas proyek. Untuk website sederhana, kami biasanya membutuhkan waktu 2-4 minggu. Untuk website yang lebih kompleks dengan fitur kustom, waktu pengembangan bisa mencapai 2-3 bulan. Kami selalu berusaha memberikan estimasi waktu yang akurat setelah memahami kebutuhan spesifik Anda.
            </p>
        </div>
    </div>
    
    <!-- FAQ Item 3 -->
    <div class="border border-gray-200 rounded-lg overflow-hidden">
        <button @click="toggle(2)" class="flex justify-between items-center w-full px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none">
            <span class="font-medium text-gray-900">Apakah ALPA menyediakan layanan maintenance setelah proyek selesai?</span>
            <svg :class="{ 'rotate-180': isOpen(2) }" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div x-show="isOpen(2)" x-collapse class="px-6 py-4 bg-gray-50 border-t border-gray-200">
            <p class="text-gray-600">
                Ya, kami menyediakan layanan maintenance dan support untuk semua proyek yang kami kerjakan. Kami menawarkan berbagai paket maintenance bulanan yang mencakup pembaruan konten, pembaruan keamanan, backup rutin, dan dukungan teknis. Kami juga menyediakan layanan on-demand untuk kebutuhan spesifik.
            </p>
        </div>
    </div>
    
    <!-- FAQ Item 4 -->
    <div class="border border-gray-200 rounded-lg overflow-hidden">
        <button @click="toggle(3)" class="flex justify-between items-center w-full px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none">
            <span class="font-medium text-gray-900">Berapa biaya untuk mengembangkan sebuah aplikasi mobile?</span>
            <svg :class="{ 'rotate-180': isOpen(3) }" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div x-show="isOpen(3)" x-collapse class="px-6 py-4 bg-gray-50 border-t border-gray-200">
            <p class="text-gray-600">
                Biaya pengembangan aplikasi mobile bervariasi tergantung pada kompleksitas, fitur, dan platform yang ditargetkan. Aplikasi sederhana bisa dimulai dari puluhan juta rupiah, sementara aplikasi yang lebih kompleks dengan backend yang kuat, integrasi API, dan fitur canggih bisa mencapai ratusan juta rupiah. Kami menawarkan konsultasi gratis untuk memberikan estimasi biaya yang akurat berdasarkan kebutuhan spesifik Anda.
            </p>
        </div>
    </div>
    
    <!-- FAQ Item 5 -->
    <div class="border border-gray-200 rounded-lg overflow-hidden">
        <button @click="toggle(4)" class="flex justify-between items-center w-full px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none">
            <span class="font-medium text-gray-900">Apakah ALPA mengerjakan proyek untuk klien internasional?</span>
            <svg :class="{ 'rotate-180': isOpen(4) }" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div x-show="isOpen(4)" x-collapse class="px-6 py-4 bg-gray-50 border-t border-gray-200">
            <p class="text-gray-600">
                Ya, kami telah mengerjakan proyek untuk klien dari berbagai negara. Kami memiliki tim yang berpengalaman dalam bekerja dengan klien internasional dan memahami standar global dalam pengembangan digital. Kami menggunakan alat komunikasi dan manajemen proyek modern untuk memastikan kolaborasi yang efektif meskipun berada di zona waktu yang berbeda.
            </p>
        </div>
    </div>
</div>
