<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanjirController extends Controller
{
    public function index()
    {
        $laporan = [
            [
                'nama' => 'Sila',
                'lokasi' => 'Kecamatan Bojongsoang',
                'tinggi' => 20
            ],
            [
                'nama' => 'Kay',
                'lokasi' => 'Kecamatan Dayeuhkolot',
                'tinggi' => 50
            ],
            [
                'nama' => 'Syita',
                'lokasi' => 'Kecamatan Baleendah',
                'tinggi' => 80
            ],
            [
                'nama' => 'Tri',
                'lokasi' => 'Kecamatan Katapang',
                'tinggi' => 30
            ]
        ];

        return view('laporan', compact('laporan'));
    }

    public function form()
    {
        return view('form');
    }

    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $lokasi = $request->input('lokasi');
        $tinggi = $request->input('tinggi');

        return view('konfirmasi', [
            'nama' => $nama,
            'lokasi' => $lokasi,
            'tinggi' => $tinggi
        ]);
    }
}