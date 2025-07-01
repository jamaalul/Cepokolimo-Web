<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Cepokolimo</title>
   <link rel="stylesheet" href="{{ asset('css/global.css') }}">
   <link rel="stylesheet" href="{{ asset('css/home.css') }}">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
   @include('components.navbar')
   <section class="hero">
      <div class="header">
         <div class="newest" data-aos="fade-left" data-aos-duration="1500">
    <br>
    <h3 style="font-size: 3vw; width: 100%; text-align: center; font-family: 'Inknut Antiqua', serif; margin: 0; line-height: 5vw; color: #fff;">Selamat Datang di<br>Desa Cepokolimo</h3>
    <br>
</div>
         {{-- @if ($newest)
            <div class="newest" data-aos="fade-left" data-aos-duration="1500">
               <p>{{ $newest['tanggal']->translatedFormat('j F Y') }}</p>
               <h3>{{ $newest['judul'] }}</h3>
               <button onclick="window.location.href='berita/{{ $newest['slug'] }}'">Baca lebih lanjut</button>
            </div>
         @else
            <div class="newest no-news" data-aos="fade-left" data-aos-duration="1500">
               <p>Tidak ada berita terbaru saat ini.</p>
            </div>
         @endif --}}
         
      </div>
      <div class="stats">
         <div class="stat-nums">
            <div>
               <h3 style="color: #FE982A;" class="count1">3708</h3>
               <b>Total<br>Penduduk</b>
            </div>
            <span style="height: auto; width: 2px; background-color: #b9b9b9;"></span>
            <div>
               <h3 style="color: #FE982A;"><b class="count2"></b>%</h3>
               <b>Penduduk<br>Usia Produktif</b>
            </div>
            <span style="height: auto; width: 2px; background-color: #b9b9b9;"></span>
            <div>
               <h3 style="color: #005236;"><b class="count3"></b>%</h3>
               <b>Penduduk<br>Laki-laki</b>
            </div>
            <span style="height: auto; width: 2px; background-color: #b9b9b9;"></span>
            <div>
               <h3 style="color: #005236;"><b class="count4"></b>%</h3>
               <b>Penduduk<br>Perempuan</b>
            </div>
         </div>
      </div>
   </section>
   <div class="gap"></div>
   <section class="profil-visi-misi">
      <div class="profil">
         <iframe 
            data-aos="fade-right" 
            data-aos-duration="1000" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31633.60238651077!2d112.53026026276898!3d-7.661601977803246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78776ad0e0bcc1%3A0x10814658772ba012!2sCepokolimo%2C%20Kec.%20Pacet%2C%20Kabupaten%20Mojokerto%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1748794190510!5m2!1sid!2sid" 
            allowfullscreen 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
         </iframe>
         <div class="isi-profil" data-aos="fade-left" data-aos-duration="1000">
            <h3>Profil Desa</h3>
            <p>
               Desa Cepokolimo merupakan salah satu desa yang terletak di lereng Gunung Welirang, Kecamatan Pacet, Kabupaten Mojokerto. Secara geografis, desa ini dikelilingi oleh lanskap alam yang subur dan berhawa sejuk, dengan dominasi area pertanian aktif dan ekosistem pedesaan yang masih lestari. Masyarakat Desa Cepokolimo dikenal memiliki kehidupan sosial yang kuat serta budaya lokal yang terus diwariskan dan dijaga dalam keseharian.
            </p>
            <p>
               Selain sektor pertanian yang menjadi tulang punggung ekonomi warga, Desa Cepokolimo juga memiliki unit-unit peternakan rakyat yang menghasilkan produk susu segar, serta beberapa potensi wisata berbasis alam dan budaya. Produk-produk lokal yang dihasilkan sebagian besar memanfaatkan sumber daya alam sekitar dengan pendekatan ramah lingkungan. Berbagai potensi ini menjadikan Desa Cepokolimo sebagai salah satu contoh desa dengan karakter agraris yang dinamis dan adaptif terhadap perkembangan zaman.
            </p>
         </div>
      </div>
      <div class="visi-misi">
         <div class="visi" data-aos="fade-up" data-aos-duration="1000">
            <h3>Visi</h3>
            <p>Menjadikan Desa Cepokolimo sebagai desa yang maju, mandiri, dan sejahtera dengan memanfaatkan potensi lokal secara optimal dan berkelanjutan.</p>
         </div>
         <span class="divider" data-aos="fade-up" data-aos-duration="1000"></span>
         <div class="misi" data-aos="fade-up" data-aos-duration="1000">
            <h3>Misi</h3>
            <ul>
               <li>Meningkatkan kualitas pendidikan dan kesehatan masyarakat desa.</li>
               <li>Mengembangkan potensi pertanian dan peternakan dengan teknologi ramah lingkungan.</li>
               <li>Mendorong partisipasi aktif masyarakat dalam pembangunan desa.</li>
               <li>Memperkuat kearifan lokal dan menjaga kelestarian budaya desa.</li>
               <li>Meningkatkan akses dan kualitas infrastruktur desa.</li>
            </ul>
         </div>
      </div>
   </section>
   <section class="agenda">
      <h2 data-aos="zoom-out-down" data-aos-duration="1000">Agenda Mendatang</h2>
      <div class="agenda-box">
         @if ($agendas && count($agendas) > 0)
            @foreach ($agendas as $agenda)
               <div class="agenda-item" data-aos="zoom-out-up" data-aos-duration="1000">
                  <div class="date">
                     <b>{{ $agenda['waktu']->format('j') }}</b>
                     <p>{{ $agenda['waktu']->translatedFormat('F') }}</p>
                  </div>
                  <div class="content">
                     <h3>{{ $agenda['judul'] }}</h3>
                     <p>{{ \Illuminate\Support\Str::limit($agenda['deskripsi'], 160, '...') }}</p>
                     <span class="time">{{ $agenda['waktu']->format('H:i') }} WIB</span>
                    </div>
                </div>
                <span style="width: 100%; height: 2px; background-color: #b9b9b9;" data-aos="zoom-out-up" data-aos-duration="1000"></span>
            @endforeach
         @else
            <script>document.querySelector(".agenda").style.display = "none"</script>
         @endif
      </div>
   </section>
   <section class="cta" data-aos="fade-up" data-aos-duration="1000">
        <div class="content">
            <h1>Ingin berkolaborasi dengan<br><b>Desa Cepokolimo</b> ?</h1>
            <p>Kami selalu terbuka untuk kerjasama positif dari luar. Baik untuk riset, kegiatan sosial, pelatihan, atau event lainnya. Mari bersama berdayakan desa dan masyarakat.</p>
            <button onclick="alert('Contact functionality would be implemented here')">Hubungi Kami Sekarang</button>
        </div>
        <div class="image"></div>
    </section>
   @include('components.footer')

   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script type="module">
      AOS.init();

      import { animate } from "https://cdn.jsdelivr.net/npm/motion@12.15.0/+esm"

      // Error handler for missing stats data
      @if (!isset($stats) || !$stats['total_penduduk'] || !$stats['produktif'] || !$stats['laki_laki'] || !$stats['perempuan'])
         document.querySelectorAll('.stat-nums h3').forEach(el => el.innerHTML = 'N/A');
      @else
         const count = document.querySelector(".count1")
         animate(0, {{ $stats['total_penduduk'] }}, {
         duration: 2,
         ease: "circOut",
         onUpdate: (latest) => (count.innerHTML = Math.round(latest)),
         })

         const count2 = document.querySelector(".count2")
         animate(0, {{ $stats['produktif']/$stats['total_penduduk']*100 }}, {
         duration: 2,
         ease: "circOut",
         onUpdate: (latest) => (count2.innerHTML = Math.round(latest)),
         })

         const count3 = document.querySelector(".count3")
         animate(0, {{ $stats['laki_laki']/$stats['total_penduduk']*100 }}, {
         duration: 2,
         ease: "circOut",
         onUpdate: (latest) => (count3.innerHTML = Math.round(latest)),
         })

         const count4 = document.querySelector(".count4")
         animate(0, {{ $stats['perempuan']/$stats['total_penduduk']*100 }}, {
         duration: 2,
         ease: "circOut",
         onUpdate: (latest) => (count4.innerHTML = Math.round(latest)),
         })
      @endif
   </script>
</body>
</html>