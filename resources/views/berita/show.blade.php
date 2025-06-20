<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita | Cepokolimo</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/berita/show.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    @include('components.navbar')
    <section class="judul">
        <h1 data-aos="zoom-out-down" data-aos-duration="1000">{{ $news['judul'] }}</h1>
        <p data-aos="zoom-out" data-aos-duration="1000">{{ $news['tanggal']->translatedFormat('j F Y') }} | <b>Cepokolimo</b></p>
    </section>
    <section class="image">
        <div class="news-image" style="background: url('{{ asset('storage/' . $news['gambar']) }}')" data-aos="fade-up" data-aos-duration="1500"></div>
    </section>
    <section class="body">
        <div class="news-body" data-aos="fade-up" data-aos-duration="1000">
            {!! $news['body'] !!}
        </div>
    </section>
    @include('components.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
</body>
</html>