@extends('layouts.app')

@section('title', 'Form Laporan Banjir')

@section('content')

<div class="page-title">
    <h1>Form Laporan Banjir</h1>
    <p>Silakan masukkan informasi kejadian banjir.</p>
</div>

<div class="card">

    <form action="{{ route('laporan.proses') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="nama">
                Nama Pelapor
            </label>

            <input
                type="text"
                id="nama"
                name="nama"
                placeholder="Masukkan nama pelapor"
                required
            >
        </div>


        <div class="form-group">
            <label for="lokasi">
                Lokasi Kejadian
            </label>

            <input
                type="text"
                id="lokasi"
                name="lokasi"
                placeholder="Kecamatan / Desa"
                required
            >
        </div>


        <div class="form-group">
            <label for="tinggi">
                Tinggi Genangan Air
            </label>

            <input
                type="number"
                id="tinggi"
                name="tinggi"
                min="1"
                placeholder="Masukkan tinggi dalam cm"
                required
            >
        </div>


        <button type="submit" class="btn">
            Kirim Laporan
        </button>

    </form>

</div>

@endsection