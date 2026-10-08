@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')

<div class="page-title">
    <h1>Konfirmasi Laporan</h1>
    <p>Berikut adalah data laporan yang telah dikirim.</p>
</div>

<x-alert>
    Laporan berhasil dikirim!
</x-alert>

<div class="card">

    <div class="laporan-data">
        <span class="label">Nama Pelapor:</span>
        {{ $nama }}
    </div>

    <div class="laporan-data">
        <span class="label">Lokasi Kejadian:</span>
        {{ $lokasi }}
    </div>

    <div class="laporan-data">
        <span class="label">Tinggi Genangan:</span>
        {{ $tinggi }} cm
    </div>

    <br>

    <a href="{{ route('laporan.form') }}" class="btn">
        Buat Laporan Baru
    </a>

</div>

@endsection