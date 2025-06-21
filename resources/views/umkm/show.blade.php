<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita | Cepokolimo</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/umkm/show.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    @include('components.navbar')
    <section class="content">
        <div class="nama" data-aos="zoom-out-down" data-aos-duration="1000">
            <h1>{{ $umkm['nama'] }}</h1>
        </div>
        <p class="owner" data-aos="zoom-out-down" data-aos-duration="1000">{{ $umkm['owner'] }}</p>
        <div class="desc" data-aos="zoom-out" data-aos-duration="1000">
            <p>{!! $umkm['deskripsi'] !!}</p>
        </div>
        <p class="contact" data-aos="zoom-out-up" data-aos-duration="1000"><img src="{{ asset('assets/contact.svg') }}" alt=""> {{ $umkm['kontak'] }}</p>
    </section>
    <section class="images">
        @foreach ($umkm['gambar'] as $image)
            <div class="gambar" style="background-image: url('{{ asset('storage/' . $image) }}')" data-aos="fade-up" data-aos-duration="1000"></div>
        @endforeach
    </section>
    @include('components.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="module">
      AOS.init();
    </script>
</body>
</html>