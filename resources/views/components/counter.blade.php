<div class="grid grid-cols-2 md:grid-cols-4 gap-8">
    <!-- Counter Item 1 -->
    <div class="text-center" x-data="{ count: 0, target: 250 }" x-init="() => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const duration = 2000;
                    const start = 0;
                    const end = target;
                    const range = end - start;
                    const increment = end > start ? 1 : -1;
                    const stepTime = Math.abs(Math.floor(duration / range));
                    
                    const timer = setInterval(() => {
                        count += increment;
                        if (count === end) {
                            clearInterval(timer);
                        }
                    }, stepTime);
                    
                    observer.disconnect();
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe($el);
    }">
        <div class="text-primary-500 mb-4">
            <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="text-4xl font-bold mb-2" x-text="count">0</div>
        <p class="text-gray-600">Klien Puas</p>
    </div>
    
    <!-- Counter Item 2 -->
    <div class="text-center" x-data="{ count: 0, target: 120 }" x-init="() => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const duration = 2000;
                    const start = 0;
                    const end = target;
                    const range = end - start;
                    const increment = end > start ? 1 : -1;
                    const stepTime = Math.abs(Math.floor(duration / range));
                    
                    const timer = setInterval(() => {
                        count += increment;
                        if (count === end) {
                            clearInterval(timer);
                        }
                    }, stepTime);
                    
                    observer.disconnect();
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe($el);
    }">
        <div class="text-primary-500 mb-4">
            <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="text-4xl font-bold mb-2" x-text="count">0</div>
        <p class="text-gray-600">Proyek Selesai</p>
    </div>
    
    <!-- Counter Item 3 -->
    <div class="text-center" x-data="{ count: 0, target: 15 }" x-init="() => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const duration = 2000;
                    const start = 0;
                    const end = target;
                    const range = end - start;
                    const increment = end > start ? 1 : -1;
                    const stepTime = Math.abs(Math.floor(duration / range));
                    
                    const timer = setInterval(() => {
                        count += increment;
                        if (count === end) {
                            clearInterval(timer);
                        }
                    }, stepTime);
                    
                    observer.disconnect();
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe($el);
    }">
        <div class="text-primary-500 mb-4">
            <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
        </div>
        <div class="text-4xl font-bold mb-2" x-text="count">0</div>
        <p class="text-gray-600">Tahun Pengalaman</p>
    </div>
    
    <!-- Counter Item 4 -->
    <div class="text-center" x-data="{ count: 0, target: 30 }" x-init="() => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const duration = 2000;
                    const start = 0;
                    const end = target;
                    const range = end - start;
                    const increment = end > start ? 1 : -1;
                    const stepTime = Math.abs(Math.floor(duration / range));
                    
                    const timer = setInterval(() => {
                        count += increment;
                        if (count === end) {
                            clearInterval(timer);
                        }
                    }, stepTime);
                    
                    observer.disconnect();
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe($el);
    }">
        <div class="text-primary-500 mb-4">
            <svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="text-4xl font-bold mb-2" x-text="count">0</div>
        <p class="text-gray-600">Penghargaan</p>
    </div>
</div>
