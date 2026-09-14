@extends('layouts.app')
@section('title', 'Ide Platform Agentic AI')

@section('content')
<div class="max-w-3xl mx-auto px-6 py-14 text-center">

    <h1 class="text-2xl font-bold text-darkbrown mb-6">Ide Platform Agentic AI</h1>

    <div class="bg-beige border-2 border-brown rounded-xl p-8 text-left shadow-sm">
        <p class="text-sage text-sm font-bold uppercase tracking-widest mb-2">Tema Utama</p>
        <h2 class="text-xl font-bold text-darkbrown mb-3">{{ $tema }}</h2>
        <p class="text-ink/80 text-sm leading-relaxed">{{ $penjelasan }}</p>
    </div>

    @if ($tema === 'System Log Anomaly Detection Agent')

        {{-- ============ SIKLUS MELINGKAR ============ --}}
        <div class="mt-14">
            <p class="text-sm text-ink/60 mb-6">Siklus Kerja Agentic AI</p>

            <div class="relative w-80 h-80 mx-auto">

                {{-- Lingkaran dekoratif putus-putus --}}
                <svg class="absolute inset-0 w-full h-full opacity-50" viewBox="0 0 320 320">
                    <circle cx="160" cy="160" r="115" fill="none" stroke="#7C8B6C" stroke-width="1.5" stroke-dasharray="5 7"/>
                </svg>

                @php
                    $steps = [
                        ['label' => 'Perception', 'top' => 50, 'left' => 160],
                        ['label' => 'Reasoning', 'top' => 105, 'left' => 255],
                        ['label' => 'Decision', 'top' => 215, 'left' => 255],
                        ['label' => 'Action', 'top' => 270, 'left' => 160],
                        ['label' => 'Evaluation', 'top' => 215, 'left' => 65],
                        ['label' => 'Re-planning', 'top' => 105, 'left' => 65],
                    ];
                @endphp

                @foreach ($steps as $i => $step)
                    <div class="absolute flex flex-col items-center -translate-x-1/2 -translate-y-1/2"
                         style="top: {{ $step['top'] }}px; left: {{ $step['left'] }}px;">
                        <div class="w-14 h-14 rounded-full bg-darkbrown text-cream flex items-center justify-center font-bold text-sm shadow-md">
                            {{ $i + 1 }}
                        </div>
                        <span class="text-xs font-semibold text-darkbrown mt-2 whitespace-nowrap">{{ $step['label'] }}</span>
                    </div>
                @endforeach

                {{-- Center label --}}
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-xs text-sage font-bold uppercase tracking-widest">↺ Loop</span>
                </div>
            </div>

            <p class="text-xs text-ink/50 mt-4">
                Setelah Re-planning, siklus kembali ke Perception. Proses berjalan otomatis dan berkelanjutan.
            </p>
        </div>

        {{-- ============ CONTOH KASUS ALA TERMINAL ============ --}}
        <div class="mt-14 text-left">
            <p class="text-sm text-ink/60 mb-3 text-center">Contoh Kasus</p>

            <div class="bg-darkbrown rounded-xl p-5 font-mono text-xs text-cream/90 overflow-x-auto shadow-md">
                <p class="text-cream/50 mb-2"># incoming system log</p>
                <p>10:01:12 <span class="text-[#D9827C]">ERROR</span> Database connection failed</p>
                <p>10:01:15 <span class="text-[#D9827C]">ERROR</span> Database connection failed</p>
                <p>10:01:17 <span class="text-[#D9827C]">ERROR</span> Database connection failed</p>
                <p>10:01:20 <span class="text-tan">WARNING</span> Connection pool exhausted</p>
                <p>10:01:25 <span class="text-[#D9827C]">ERROR</span> Application timeout</p>
                <p class="text-cream/50 mt-3 mb-1"># agent analysis result</p>
                <p class="text-sage">→ Anomaly Detected — High Severity</p>
                <p class="text-cream/70">→ Kemungkinan penyebab: database tidak dapat diakses, connection pool habis</p>
                <p class="text-cream/70">→ Rekomendasi: periksa status database service & konfigurasi connection pool</p>
            </div>
        </div>

        {{-- ============ SEVERITY BADGE ============ --}}
        <div class="mt-14">
            <p class="text-sm text-ink/60 mb-4">Klasifikasi Tingkat Keparahan</p>
            <div class="flex flex-wrap justify-center gap-2">
                <span class="text-xs font-semibold px-3 py-1.5 rounded-full border border-sage text-sage bg-sage/10">Info</span>
                <span class="text-xs font-semibold px-3 py-1.5 rounded-full border border-tan text-brown bg-tan/20">Warning</span>
                <span class="text-xs font-semibold px-3 py-1.5 rounded-full border border-brown text-brown bg-brown/10">Medium</span>
                <span class="text-xs font-semibold px-3 py-1.5 rounded-full border border-[#B5651D] text-[#B5651D] bg-[#B5651D]/10">High</span>
                <span class="text-xs font-semibold px-3 py-1.5 rounded-full border border-[#8B3A3A] text-[#8B3A3A] bg-[#8B3A3A]/10">Critical</span>
            </div>
        </div>

    @endif

    <p class="text-sm text-ink/60 mt-14 mb-3">Atau lihat tema lain:</p>
    <div class="flex flex-wrap justify-center gap-2">
        @foreach ($daftarTema as $namaTema)
            @if ($namaTema !== $tema)
                <a href="{{ route('dashboard.agent.ide', ['tema' => $namaTema]) }}"
                   class="text-xs px-3 py-1.5 rounded-full border border-tan text-ink/70 hover:bg-tan/30 transition-colors">
                    {{ $namaTema }}
                </a>
            @endif
        @endforeach
    </div>

    <a href="{{ route('home') }}" class="inline-block mt-8 text-sm text-sage hover:underline">← Kembali ke Home</a>
</div>
@endsection