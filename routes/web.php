<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');


// Dashboard Routes

Route::prefix('dashboard')->name('dashboard.')->group(function () {

    // Profil Mahasiswa
    Route::get('/mahasiswa/{nrp}', function ($nrp) {

        $mahasiswa = [
            '5025241107' => [
                'nama' => 'Zahran',
                'jurusan' => 'Teknik Informatika',
                'angkatan' => '2024',
                'ipk' => '3.6',
                'asal' => 'Tangerang Selatan',
                'hobi' => 'Dengar musik, main game, dan menggambar',
            ],
        ];

        if (!isset($mahasiswa[$nrp])) {
            abort(404, 'Data mahasiswa dengan NRP tersebut tidak ditemukan.');
        }

        return view('mahasiswa', [
            'nrp' => $nrp,
            'data' => $mahasiswa[$nrp],
        ]);
    })->name('mahasiswa.detail')
      ->where('nrp', '^[0-9]{10}$');


    // Ide Proyek Agentic AI
    Route::get('/agent/{tema?}', function ($tema = 'System Log Anomaly Detection Agent') {

        $penjelasanTema = [
            'System Log Anomaly Detection Agent' => 'Agentic AI berbasis Laravel & NativePHP yang memantau system log secara otomatis, mendeteksi pola anomali, menentukan tingkat keparahan, hingga memberi rekomendasi troubleshooting — mengikuti siklus perception, reasoning, decision making, action, evaluation, dan re-planning.',
            'General Assistant Agent' => 'Agen AI serba guna untuk membantu tugas harian secara umum.',
            'Coding Agent' => 'Agen AI yang membantu menulis, membaca, dan memperbaiki kode secara otomatis.',
            'Research Agent' => 'Agen AI yang mencari, merangkum, dan menyusun informasi dari berbagai sumber.',
        ];

        $penjelasan = $penjelasanTema[$tema] ?? 'Tema ini belum memiliki penjelasan khusus.';

        return view('agent', [
            'tema' => $tema,
            'penjelasan' => $penjelasan,
            'daftarTema' => array_keys($penjelasanTema),
        ]);
    })->name('agent.ide');


    // Kalkulator IPK
    Route::get('/hitung/{ip1?}/{ip2?}', function ($ip1 = '3.00', $ip2 = '3.00') {

        $ip1 = (float) $ip1;
        $ip2 = (float) $ip2;

        if ($ip1 < 0 || $ip1 > 4 || $ip2 < 0 || $ip2 > 4) {
            abort(404, 'Nilai IP harus berada di antara 0.00 dan 4.00.');
        }

        $jumlah = $ip1 + $ip2;
        $rata = round($jumlah / 2, 2);

        return view('hitung-ipk', [
            'ip1' => $ip1,
            'ip2' => $ip2,
            'jumlah' => $jumlah,
            'rata' => $rata,
        ]);
    })->name('ipk.hitung');

});


// Fallback

Route::fallback(function () {
    abort(404);
});