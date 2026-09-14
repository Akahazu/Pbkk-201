<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Profil Akademis')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css'])
</head>
<body class="bg-cream text-ink min-h-screen flex flex-col">

    <nav class="bg-cream/95 backdrop-blur border-b border-tan px-6 md:px-10 py-5 flex justify-between items-center sticky top-0 z-50">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <span class="w-3 h-3 bg-brown rounded-sm"></span>
            <span class="font-bold text-darkbrown tracking-tight">Portofolio Akademis</span>
        </a>

        <div class="flex items-center gap-8 text-xs font-semibold uppercase tracking-widest">
            @php
                $navItems = [
                    ['route' => 'home', 'pattern' => 'home', 'label' => 'Home', 'params' => []],
                    ['route' => 'dashboard.mahasiswa.detail', 'pattern' => 'dashboard.mahasiswa.*', 'label' => 'Profil', 'params' => ['nrp' => '5025241107']],
                    ['route' => 'dashboard.agent.ide', 'pattern' => 'dashboard.agent.*', 'label' => 'Agent', 'params' => []],
                    ['route' => 'dashboard.ipk.hitung', 'pattern' => 'dashboard.ipk.*', 'label' => 'Hitung IPK', 'params' => []],
                ];
            @endphp

            @foreach ($navItems as $item)
                @php $isActive = request()->routeIs($item['pattern']); @endphp
                <a href="{{ route($item['route'], $item['params']) }}"
                   class="flex items-center gap-1.5 pb-1 border-b-2 transition-colors {{ $isActive ? 'border-brown text-darkbrown' : 'border-transparent text-ink/60 hover:text-darkbrown hover:border-tan' }}">
                    @if ($isActive)
                        <span class="w-1.5 h-1.5 rounded-full bg-sage"></span>
                    @endif
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </nav>

    <main class="flex-1">
        @yield('content')
    </main>

    <footer class="bg-beige border-t border-tan px-6 md:px-10 py-6 flex flex-wrap justify-between items-center gap-2">
        <p class="text-xs text-ink/60">&copy; {{ date('Y') }} Tugas Routing Laravel</p>
        <p class="text-xs text-ink/50">Dibangun dengan Laravel & Tailwind CSS</p>
    </footer>

</body>
</html>