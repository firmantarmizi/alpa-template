<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;
    
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required|min:10',
        'subject' => 'required|min:5',
        'message' => 'required|min:10',
    ];
    
    protected $messages = [
        'name.required' => 'Nama lengkap wajib diisi.',
        'name.min' => 'Nama lengkap minimal 3 karakter.',
        'email.required' => 'Alamat email wajib diisi.',
        'email.email' => 'Format email tidak valid.',
        'phone.required' => 'Nomor telepon wajib diisi.',
        'phone.min' => 'Nomor telepon minimal 10 digit.',
        'subject.required' => 'Subjek wajib diisi.',
        'subject.min' => 'Subjek minimal 5 karakter.',
        'message.required' => 'Pesan wajib diisi.',
        'message.min' => 'Pesan minimal 10 karakter.',
    ];
    
    public function submit()
    {
        $this->validate();
        
        try {
            // Di sini Anda dapat menambahkan logika untuk mengirim email
            // Contoh:
            // Mail::to('admin@example.com')->send(new \App\Mail\ContactFormMail($this->name, $this->email, $this->phone, $this->subject, $this->message));
            
            // Untuk saat ini, kita hanya akan menampilkan pesan sukses
            session()->flash('success', 'Pesan Anda berhasil dikirim. Kami akan menghubungi Anda segera.');
            
            // Reset form
            $this->reset(['name', 'email', 'phone', 'subject', 'message']);
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.');
        }
    }
    
    public function render()
    {
        return view('livewire.contact-form');
    }
}
