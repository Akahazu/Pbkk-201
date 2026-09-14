@extends('layouts.app')
@section('title', 'Kalkulator IPK')

@section('content')
<div class="max-w-md mx-auto px-6 py-14 text-center">

    <h1 class="text-2xl font-bold text-darkbrown mb-6">Kalkulator Portofolio Akademis</h1>

    <div class="bg-beige border border-tan rounded-xl p-6 text-left space-y-4 mb-8">

        @foreach ([['label' => 'IP Semester 1', 'value' => $ip1], ['label' => 'IP Semester 2', 'value' => $ip2]] as $item)
            <div>
                <div class="flex justify-between text-sm mb-1">
                    <span class="text-ink/60">{{ $item['label'] }}</span>
                    <span class="font-medium">{{ $item['value'] }}</span>
                </div>
                <div class="w-full bg-tan/40 rounded-full h-2">
                    <div class="h-2 rounded-full {{ $item['value'] >= 3.5 ? 'bg-sage' : 'bg-brown' }}"
                         style="width: {{ min(100, ($item['value'] / 4) * 100) }}%"></div>
                </div>
            </div>
        @endforeach

        <div class="pt-2 border-t border-tan/50">
            <p class="text-ink/60 text-sm">Rata-rata (IPK)</p>
            <p class="text-2xl font-bold {{ $rata >= 3.5 ? 'text-sage' : 'text-brown' }}">{{ $rata }}</p>
        </div>
    </div>

    <form id="ipkForm" class="bg-cream border border-tan rounded-xl p-6 space-y-4">
        <div class="text-left">
            <label class="text-sm text-ink/60">IP Semester 1</label>
            <input type="number" step="0.01" min="0" max="4" id="ip1_input" value="{{ $ip1 }}"
                   class="w-full mt-1 px-3 py-2 rounded-lg border border-tan bg-beige/40 focus:outline-none focus:border-brown">
        </div>
        <div class="text-left">
            <label class="text-sm text-ink/60">IP Semester 2</label>
            <input type="number" step="0.01" min="0" max="4" id="ip2_input" value="{{ $ip2 }}"
                   class="w-full mt-1 px-3 py-2 rounded-lg border border-tan bg-beige/40 focus:outline-none focus:border-brown">
        </div>
        <button type="submit"
                class="w-full bg-brown text-cream py-2 rounded-lg hover:bg-darkbrown transition-colors">
            Hitung Ulang
        </button>
    </form>

    <a href="{{ route('home') }}" class="inline-block mt-6 text-sm text-sage hover:underline">← Kembali ke Home</a>
</div>

<script>
    document.getElementById('ipkForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const ip1 = document.getElementById('ip1_input').value || '0';
        const ip2 = document.getElementById('ip2_input').value || '0';
        window.location.href = `/dashboard/hitung/${ip1}/${ip2}`;
    });
</script>
@endsection