<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kesenian</title>
    <link rel="stylesheet" href="{{ asset('css/kesenian.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    @include('components.navbar')
    <section class="hero">
        <h3 data-aos="zoom-out-down" data-aos-duration="1000">Grup Kesenian</h3>
        <h1 data-aos="zoom-out-down" data-aos-duration="1000">Suro Nogo</h1>
        <div class="images">
            <div class="img" style="background-image: url('{{ asset('images/kesenian/1.png') }}')" data-aos="fade-up" data-aos-duration="1000"></div>
            <div class="img" style="background-image: url('{{ asset('images/kesenian/2.png') }}')" data-aos="fade-up" data-aos-duration="1500"></div>
            <div class="img" style="background-image: url('{{ asset('images/kesenian/3.png') }}')" data-aos="fade-up" data-aos-duration="2000"></div>
            <div class="img" style="background-image: url('{{ asset('images/kesenian/4.png') }}')" data-aos="fade-up" data-aos-duration="2500"></div>
        </div>
    </section>
    <section class="content">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <h3>Sejarah Grup Kesenian Suro Nogo</h3>
            <p>Desa Cepokolimo memiliki kekayaan budaya yang patut dibanggakan, salah satunya adalah Paguyuban Kesenian Suro Nogo. Kesenian ini telah lama menjadi bagian dari identitas dusun, namun sempat vakum selama kurang lebih 4–5 tahun akibat wafatnya pendiri utama. Meski seluruh peralatan kesenian masih lengkap, tidak ada yang menggerakkan kembali karena alasan penghormatan dan tidak adanya pengelola aktif.</p>
            <p>Namun, sejak tahun 2022, kesenian Suro Nogo dibangkitkan kembali oleh Karang Taruna bersama para pemuda dusun, dengan dukungan Bapak Wantono yang menjadi ketua paguyuban saat ini. Kini, kesenian Suronogo kembali hidup dan aktif tampil di berbagai acara, baik di tingkat desa maupun luar desa. Eksistensi digitalnya pun bisa ditemukan di YouTube dan Instagram, dengan berbagai dokumentasi pertunjukan.</p>
        </div>
        <div class="orgs">
            <div data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('assets/kesenian/ketua.png') }}" alt="">
                <h3>Ketua</h3>
                <h4>Kuswantono</h4>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ asset('assets/kesenian/wakil.png') }}" alt="">
                <h3>Wakil Ketua</h3>
                <h4>Arip Wahyudi</h4>
            </div>
            <div data-aos="fade-up" data-aos-duration="2000">
                <img src="{{ asset('assets/kesenian/sekben.png') }}" alt="">
                <h3>Sekretaris &<br>Bendahara</h3>
                <h4>Iswantono</h4>
            </div>
        </div>
    </section>
    <section class="gallery">
        <h3 data-aos="zoom-out-down" data-aos-duration="1000">Galeri Kesenian Suro Nogo</h3>
        <div class="images">
            <div class="img" style="background-image: url('{{ asset('images/kesenian/img1.png') }}')" data-aos="fade-up" data-aos-duration="1000"></div>
            <div class="img" style="background-image: url('{{ asset('images/kesenian/img2.png') }}')" data-aos="fade-up" data-aos-duration="1500"></div>
            <div class="img" style="background-image: url('{{ asset('images/kesenian/img3.png') }}')" data-aos="fade-up" data-aos-duration="1000"></div>
            <div class="img" style="background-image: url('{{ asset('images/kesenian/img4.png') }}')" data-aos="fade-up" data-aos-duration="1500"></div>
            <div class="img" style="background-image: url('{{ asset('images/kesenian/img5.png') }}')" data-aos="fade-up" data-aos-duration="1000"></div>
            <div class="img" style="background-image: url('{{ asset('images/kesenian/img6.png') }}')" data-aos="fade-up" data-aos-duration="1500"></div>
            <div class="img" style="background-image: url('{{ asset('images/kesenian/img7.png') }}')" data-aos="fade-up" data-aos-duration="1000"></div>
            <div class="img" style="background-image: url('{{ asset('images/kesenian/img8.png') }}')" data-aos="fade-up" data-aos-duration="1500"></div>
        </div>
    </section>
    @include('components.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="module">
      AOS.init();
    </script>
</body>
</html>