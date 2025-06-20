<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita | Cepokolimo</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/berita/show.css') }}">
</head>
<body>
    @include('components.navbar')
    <section class="judul">
        <h1>{{ $news['judul'] }}</h1>
        <p>{{ $news['tanggal']->translatedFormat('j F Y') }} | <b>Cepokolimo</b></p>
    </section>
    <section class="image">
        <div class="news-image" style="background: url('{{ asset('storage/' . $news['gambar']) }}')"></div>
    </section>
    <section class="body">
        <div class="news-body">
            {!! $news['body'] !!}
        </div>
    </section>
    @include('components.footer')
</body>
</html>