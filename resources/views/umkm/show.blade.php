<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita | Cepokolimo</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/umkm/show.css') }}">
</head>
<body>
    @include('components.navbar')
    <section class="content">
        <div class="nama">
            <h1>{{ $umkm['nama'] }}</h1>
        </div>
        <p class="owner">{{ $umkm['owner'] }}</p>
        <div class="desc">
            <p>{!! $umkm['deskripsi'] !!}</p>
        </div>
        <p class="contact"><img src="{{ asset('assets/contact.svg') }}" alt=""> {{ $umkm['kontak'] }}</p>
    </section>
    <section class="images">
        @foreach ($umkm['gambar'] as $image)
            <div class="gambar" style="background-image: url('{{ asset('storage/' . $image) }}')"></div>
        @endforeach
    </section>
    @include('components.footer')
</body>
</html>