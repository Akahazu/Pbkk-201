@extends('layouts.app')
@section('title', 'Halaman Tidak Ditemukan')

@section('content')
<div class="max-w-md mx-auto px-6 py-24 text-center">

    <svg viewBox="0 0 120 120" class="w-28 h-28 mx-auto mb-6">
        <circle cx="60" cy="60" r="55" fill="none" stroke="#D8C4A0" stroke-width="4"/>
        <circle cx="60" cy="60" r="4" fill="#9C7B4F"/>
        <path d="M60 60 L85 40" stroke="#4A3826" stroke-width="4" stroke-linecap="round"/>
        <path d="M60 60 L45 80" stroke="#7C8B6C" stroke-width="4" stroke-linecap="round"/>
    </svg>

    <h1 class="text-2xl font-bold text-darkbrown mb-2">404</h1>
    <p class="text-ink/70 mb-8">
        Sepertinya rute ini belum terdaftar di sistem. Coba periksa kembali alamat yang kamu tuju.
    </p>

    <a href="{{ route('home') }}"
       class="inline-block bg-brown text-cream px-6 py-2 rounded-lg hover:bg-darkbrown transition-colors">
        Kembali ke Home
    </a>
</div>
@endsection