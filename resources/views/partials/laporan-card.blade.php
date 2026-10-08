<div class="laporan-card">

    <h3>{{ $laporan['nama'] }}</h3>

    <div class="laporan-data">
        <span class="label">Lokasi:</span>
        {{ $laporan['lokasi'] }}
    </div>

    <div class="laporan-data">
        <span class="label">Tinggi Genangan:</span>
        {{ $laporan['tinggi'] }} cm
    </div>

    @if ($laporan['tinggi'] < 30)

        <span class="status waspada">
            Waspada
        </span>

    @elseif ($laporan['tinggi'] <= 70)

        <span class="status siaga">
            Siaga
        </span>

    @else

        <span class="status awas">
            Awas
        </span>

    @endif

</div>