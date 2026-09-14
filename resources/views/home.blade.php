@extends('layouts.app')
@section('title', 'Home')

@section('content')

<section class="relative min-h-[480px] overflow-hidden bg-cream">

    <div class="absolute inset-0 bg-darkbrown"
         style="clip-path: polygon(0 0, 60% 0, 44% 100%, 0 100%);"></div>

    <div class="relative z-10 grid md:grid-cols-2 min-h-[480px]">

        <div class="flex flex-col justify-center px-8 md:px-16 py-16 text-cream max-w-lg">
            <p class="text-tan font-bold text-xs uppercase tracking-[0.2em] mb-4">Selamat Datang</p>
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-5">
                Institut Teknologi<br>Sepuluh Nopember
            </h1>
            <p class="text-cream/70 mb-8">
                Halo! Saya <strong class="text-cream">Zahran</strong>, mahasiswa Teknik Informatika.
                Portofolio ini menampilkan profil serta ide proyek Agentic AI saya di semester ini.
            </p>
            <a href="{{ route('dashboard.mahasiswa.detail', ['nrp' => '5025241107']) }}"
               class="inline-block border-2 border-cream/60 text-cream text-xs font-bold uppercase tracking-widest
                      px-6 py-3 w-fit hover:bg-cream hover:text-darkbrown transition-colors">
                Lihat Profil
            </a>
        </div>

        <div class="relative flex items-center justify-center py-16">

            {{-- Garis titik dekoratif pakai sage --}}
            <svg class="absolute w-64 h-64 opacity-40" viewBox="0 0 200 200">
                <circle cx="100" cy="100" r="90" fill="none" stroke="#7C8B6C" stroke-width="1.5" stroke-dasharray="4 6"/>
            </svg>

            {{-- Ikon network node: representasi Agentic AI --}}
            <a href="{{ route('dashboard.agent.ide') }}"
               class="relative w-28 h-28 rounded-full bg-cream border border-tan shadow-lg flex items-center justify-center
                      hover:scale-110 transition-transform duration-300">
                <svg viewBox="0 0 100 100" class="w-16 h-16">
                    <line x1="50" y1="50" x2="20" y2="25" stroke="#D8C4A0" stroke-width="2"/>
                    <line x1="50" y1="50" x2="80" y2="25" stroke="#D8C4A0" stroke-width="2"/>
                    <line x1="50" y1="50" x2="20" y2="75" stroke="#D8C4A0" stroke-width="2"/>
                    <line x1="50" y1="50" x2="80" y2="75" stroke="#D8C4A0" stroke-width="2"/>

                    <circle cx="50" cy="50" r="10" fill="#4A3826"/>
                    <circle cx="20" cy="25" r="6" fill="#7C8B6C"/>
                    <circle cx="80" cy="25" r="6" fill="#7C8B6C"/>
                    <circle cx="20" cy="75" r="6" fill="#7C8B6C"/>
                    <circle cx="80" cy="75" r="6" fill="#7C8B6C"/>
                </svg>
            </a>
        </div>

    </div>
</section>

<section class="max-w-4xl mx-auto px-6 py-16 grid md:grid-cols-3 gap-6">

    <div class="bg-beige border border-tan border-t-4 border-t-sage rounded-xl p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
        <p class="text-xs font-bold text-brown uppercase tracking-widest mb-2">Identitas</p>
        <p class="text-ink/70 text-sm">Profil lengkap tersedia di halaman Profil.</p>
    </div>

    <div class="bg-beige border border-tan border-t-4 border-t-sage rounded-xl p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
        <p class="text-xs font-bold text-brown uppercase tracking-widest mb-2">Proyek Semester</p>
        <p class="text-ink/70 text-sm">System Log Anomaly Detection Agent — Agentic AI berbasis Laravel & NativePHP.</p>
    </div>

    <div class="bg-beige border border-tan border-t-4 border-t-sage rounded-xl p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
        <p class="text-xs font-bold text-brown uppercase tracking-widest mb-2">Kalkulator IPK</p>
        <p class="text-ink/70 text-sm">Hitung rata-rata IP dua semester lewat halaman Hitung IPK.</p>
    </div>

</section>

@endsection