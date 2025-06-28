<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APBD | Cepokolimo</title>
    <link rel="stylesheet" href="{{ asset('css/apbd.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
</head>
<body>
    @include('components.navbar')
    <section class="hero">
        @if(isset($apbd) && count($apbd) > 0)
            <h1>APB <b>Desa Cepokolimo</b> Tahun {{ $apbd[0]['tahun'] }}</h1>
        @else
            <h1>Data APBD tidak tersedia</h1>
        @endif
    </section>
    <section class="apbd">
        @if(isset($apbd) && count($apbd) > 0)
            <div class="inout">
                <div class="in flow">
                    <h3>&uArr; Pendapatan</h3>
                    <div class="amount">
                        @php
                            $diff = count($apbd) > 1 ? $apbd[0]['pendapatan'] - $apbd[1]['pendapatan'] : 0;
                            $percent = (count($apbd) > 1 && $apbd[1]['pendapatan'] != 0) ? ($diff / $apbd[1]['pendapatan']) * 100 : 0;
                            $sign = $diff >= 0 ? '+' : '-';
                        @endphp
                        @if(count($apbd) > 1 && $apbd[1]['pendapatan'] != 0)
                            <p style="color: {{ $diff >= 0 ? 'green' : 'red' }};">
                                {{ $sign }}{{ number_format(abs($percent), 2, ',', '.') }}% dari tahun lalu
                            </p>
                        @endif
                        <strong>Rp{{ number_format($apbd[0]['pendapatan'], 0, ',', '.') }}</strong>
                    </div>
                </div>
                <div class="out flow">
                    <h3>&dArr; Belanja</h3>
                    <div class="amount">
                        @php
                            $diff = count($apbd) > 1 ? $apbd[0]['belanja'] - $apbd[1]['belanja'] : 0;
                            $percent = (count($apbd) > 1 && $apbd[1]['belanja'] != 0) ? ($diff / $apbd[1]['belanja']) * 100 : 0;
                            $sign = $diff >= 0 ? '+' : '-';
                        @endphp
                        @if(count($apbd) > 1 && $apbd[1]['belanja'] != 0)
                            <p style="color: #000">
                                {{ $sign }}{{ number_format(abs($percent), 2, ',', '.') }}% dari tahun lalu
                            </p>
                        @endif
                        <strong>&#40;Rp{{ number_format($apbd[0]['belanja'], 0, ',', '.') }}&#41;</strong>
                    </div>
                </div>
            </div>
            <div class="balance">
                <h3 class="surplus">Keseimbangan Anggaran</h3>
                @if ($apbd[0]['pendapatan'] > $apbd[0]['belanja'])
                    <strong>Surplus sebesar Rp{{ number_format($apbd[0]['pendapatan'] - $apbd[0]['belanja'], 0, ',', '.') }}</strong>
                @else
                    <strong>Defisit sebesar &#40;Rp{{ number_format($apbd[0]['pendapatan'] - $apbd[0]['belanja'], 0, ',', '.') }}&#41;</strong>
                @endif
            </div>
        @else
            <div class="no-data">
                <p>Data APBD tidak tersedia untuk ditampilkan.</p>
            </div>
        @endif
        @if(isset($apbd) && count($apbd) > 1)
        <div class="prevapbd balance">
            <h3>Riwayat APBD</h3>
            <div class="record spc">
            <p>Tahun</p>
            <p>Pendapatan</p>
            <p>Belanja</p>
            </div>
            @for ($i = 1; $i < count($apbd); $i++)
            <div class="record">
                <p class="tahun">{{ $apbd[$i]['tahun'] }}</p>
                <p class="pendapatan">Rp{{ number_format($apbd[$i]['pendapatan'], 0, ',', '.') }}</p>
                <p class="belanja">&#40;Rp{{ number_format($apbd[$i]['belanja'], 0, ',', '.') }}&#41;</p>
            </div>
            @endfor
        </div>
        @else
        <div class="prevapbd balance">
            <h3>Riwayat APBD</h3>
            <div class="no-data">
            <p>Data riwayat APBD tidak tersedia.</p>
            </div>
        </div>
        @endif
        </div>
    </section>
    @include('components.footer')
</body>
</html>