<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMKM | Cepokolimo</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/umkm/index.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    @include('components.navbar')
    <section class="hero">
        <h1 class="green" data-aos="zoom-out-left" data-aos-duration="1000">Produk Otentik Berkualitas</h1>
        <h1 data-aos="zoom-out-left" data-aos-duration="1000">Langsung dari Warga <b>Cepokolimo</b><br> ke Tangan Anda.</h1>
    </section>
    <section class="transition">
        <h3 data-aos="zoom-out-down" data-aos-duration="1000">
            Setiap produk UMKM Desa Cepokolimo dibuat dengan teliti dan sepenuh hati, menghasilkan produk yang berkualitas dan berdaya saing tinggi
        </h3>
    </section>
    <section class="umkm">
        <div class="container">
            @if ($umkm->isEmpty())
                <div class="no-data">
                    <p>Tidak ada data UMKM yang tersedia.</p>
                </div>
            @else
                @foreach ($umkm as $umkm)
                    <div class="product-card" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('storage/' . $umkm['gambar'][0]) }}" alt="{{ $umkm['nama'] }}" class="product-image">
                        <div class="product-content">
                            <h3 class="product-title">{{ $umkm['nama'] }}<br><b class="product-owner">{{ $umkm['owner'] }}</b></h3>
                            <p class="product-description">{{ \Illuminate\Support\Str::limit(html_entity_decode(strip_tags($umkm['deskripsi'])), 200, '...') }}</p>
                            <button class="btn-more" onclick="window.location.href = '/umkm/{{ $umkm['id'] }}'">Selengkapnya</button>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
    <section class="blank"></section>
    @include('components.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
</body>
</html>