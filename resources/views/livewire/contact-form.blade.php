<div>
    <form wire:submit.prevent="submit" class="space-y-6">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <input type="text" id="name" wire:model="name" class="form-input" placeholder="Masukkan nama lengkap Anda">
            @error('name') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" id="email" wire:model="email" class="form-input" placeholder="Masukkan alamat email Anda">
            @error('email') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
            <input type="tel" id="phone" wire:model="phone" class="form-input" placeholder="Masukkan nomor telepon Anda">
            @error('phone') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
            <input type="text" id="subject" wire:model="subject" class="form-input" placeholder="Masukkan subjek pesan">
            @error('subject') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
            <textarea id="message" wire:model="message" rows="5" class="form-input" placeholder="Masukkan pesan Anda"></textarea>
            @error('message') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <button type="submit" class="btn btn-primary w-full" wire:loading.attr="disabled">
                <span wire:loading.remove>Kirim Pesan</span>
                <span wire:loading>
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Mengirim...
                </span>
            </button>
        </div>
        
        @if(session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        
        @if(session()->has('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif
    </form>
</div>
