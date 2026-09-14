@extends('layouts.app')
@section('title', 'Profil Mahasiswa')

@section('content')
<div class="max-w-5xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-16 items-center">

    {{-- Bagian kiri --}}
    <div class="relative mx-auto max-w-sm">
        <div class="absolute -top-5 -left-5 w-full h-full bg-tan/50 rounded-2xl"></div>

        <div class="relative bg-cream border border-tan rounded-2xl shadow-md p-8 text-center">

            <div class="relative inline-block group">
                <img src="{{ asset('images/Zaran_Jahim_close.jpeg') }}"
                     alt="Foto profil"
                     class="w-40 h-40 rounded-full object-cover border-4 border-brown mx-auto
                            transition-transform duration-300 group-hover:scale-105">

                <img src="{{ asset('images/friend.jpg') }}"
                     alt="Friend"
                     class="w-12 h-12 rounded-full object-cover border-4 border-cream
                            absolute -bottom-1 -right-1 bg-beige shadow">
            </div>

            <h2 class="font-bold text-xl text-darkbrown mt-5">{{ $data['nama'] }}</h2>

            <div class="w-10 h-0.5 bg-sage mx-auto my-3"></div>

            <p class="uppercase text-xs tracking-widest text-ink/60">{{ $data['jurusan'] }}</p>

            <div class="flex justify-center gap-4 mt-6 text-brown/70 text-sm">
                <span class="hover:text-sage transition-colors cursor-pointer">NRP {{ $nrp }}</span>
                <span>·</span>
                <span class="hover:text-sage transition-colors cursor-pointer">Angkatan {{ $data['angkatan'] }}</span>
            </div>
        </div>
    </div>

    {{-- Bagian kanan --}}
    <div>
        <p class="text-sage font-medium mb-2"><i>Pagi!!</i></p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-darkbrown mb-4">Oh hi!</h1>
        <p class="text-ink/70 mb-6 leading-relaxed">
            Saya Muhammad Zahran Rizki Primanda, mahasiswa jurusan {{ $data['jurusan'] }} dengan NRP {{ $nrp }}.
            Halaman ini menampilkan profil akademis saya secara singkat.
        </p>

        <div class="flex flex-wrap gap-3 mb-8">
            <a href="{{ route('dashboard.agent.ide') }}"
               class="bg-brown text-cream px-5 py-2 rounded-lg hover:bg-darkbrown transition-colors">
                Lihat Proyek Agent
            </a>
            <a href="{{ route('home') }}"
               class="border border-brown text-brown px-5 py-2 rounded-lg hover:bg-brown/10 transition-colors">
                Kembali ke Home
            </a>
        </div>

        <div class="bg-beige border border-tan rounded-xl p-6 grid grid-cols-2 gap-x-6 gap-y-2">

            <div class="space-y-2">
                <p><span class="text-ink/60 text-sm">Jurusan</span><br><span class="font-medium">{{ $data['jurusan'] }}</span></p>
                <p><span class="text-ink/60 text-sm">Angkatan</span><br><span class="font-medium">{{ $data['angkatan'] }}</span></p>
                <p><span class="text-ink/60 text-sm">IPK</span><br><span class="font-medium">{{ $data['ipk'] }}</span></p>
            </div>

            <div class="space-y-2">
                <p><span class="text-ink/60 text-sm">Asal</span><br><span class="font-medium">{{ $data['asal'] }}</span></p>
                <p><span class="text-ink/60 text-sm">Hobi</span><br><span class="font-medium">{{ $data['hobi'] }}</span></p>
            </div>

        </div>
    </div>

</div>
@endsection