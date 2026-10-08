@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')

<div class="page-title">
    <h1>Daftar Laporan Banjir</h1>
    <p>Contoh laporan banjir yang diterima oleh sistem.</p>
</div>

<div class="laporan-grid">

    @forelse ($laporan as $data)

        @include('partials.laporan-card', [
            'laporan' => $data
        ])

    @empty

        <div class="card">
            <p>Belum terdapat laporan banjir.</p>
        </div>

    @endforelse

</div>

@endsection