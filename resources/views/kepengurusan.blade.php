<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kepengurusan | Cepokolimo</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kepengurusan.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    @include('components.navbar')
    <section class="hero">
        <h1 data-aos="zoom-out-down" data-aos-duration="1000">Struktur Kepengurusan</h1>
        <h1 class="spc" data-aos="zoom-out-down" data-aos-duration="1000">Desa Cepokolimo</h1>
        <img src="{{ asset('images/umkm_hero.png') }}" alt="" class="layer" data-aos="zoom-in" data-aos-duration="1500">
    </section>
    <section class="kepengurusan">
        <img src="{{ asset('assets/kepengurusan.png') }}" alt="kepengurusan" data-aos="fade-up" data-aos-duration="1000">
    </section>
    <section class="transition"></section>
    @include('components.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="module">
      AOS.init();
    </script>
</body>
</html>