<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita | Cepokolimo</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/berita/index.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    @include('components.navbar')
    <section class="newest">
        @if($news->isNotEmpty())
            <div class="newest-item" style="background-image: url('{{ asset('storage/' . $news[0]->gambar) }}')" data-aos="zoom-out" data-aos-duration="1000">
                <div class="layer">
                    <div class="newest-content" data-aos="zoom-out-left" data-aos-duration="1500">
                        <p>{{ $news[0]['tanggal']->translatedFormat('j F Y') }}</p>
                        <h1>{{ $news[0]['judul'] }}</h1>
                        <button onclick="window.location.href = '/berita/{{ $news[0]['slug'] }}'">Baca lebih lanjut</button>
                    </div>
                </div>
            </div>
        @else
            <div class="newest-item empty" data-aos="zoom-out" data-aos-duration="1000">
                <div class="layer">
                    <div class="newest-content" data-aos="zoom-out-left" data-aos-duration="1500">
                        <p>Tidak ada berita terbaru.</p>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <section class="news">
        @if($news->isEmpty())
            <div class="news-empty" data-aos="fade-up" data-aos-duration="1000">
            <p>Tidak ada berita yang tersedia.</p>
            </div>
        @else
            @foreach ($news as $item)
            <div class="news-item" onclick="window.location.href = '/berita/{{ $item['slug'] }}'" data-aos="fade-up" data-aos-duration="1000">
                <div class="image" style="background-image: url('{{ asset('storage/' . $item->gambar) }}')"></div>
                <div class="content">
                <p class="date">{{ $item['tanggal']->translatedFormat('j F Y') }}</p>
                <h3 class="title">{{ $item['judul'] }}</h3>
                <p class="excerpt">{{ \Illuminate\Support\Str::limit(html_entity_decode(strip_tags($item['body'])), 100, '...') }}</p>
                </div>
            </div>    
            @endforeach
        @endif
    </section>
    @include('components.footer')
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
</body>
</html>