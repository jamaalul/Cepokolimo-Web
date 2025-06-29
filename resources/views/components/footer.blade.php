<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <!-- Demo content to show the footer in context -->
    {{-- <main>
        <div class="demo-content">
            <h1>Your Website Content</h1>
            <p>This is demo content to show the footer below. Scroll down to see the footer template.</p>
        </div>
    </main> --}}

    <!-- Footer Template -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <!-- Logo Section -->
                <div class="footer-logo">
                    <!-- Replace this placeholder with your actual logo -->
                    <div class="logo-placeholder"><img src="{{ asset('assets/logo_monochrome.png') }}" alt=""></div>
                    <p class="footer-description">
                        Website resmi Desa Cepokolimo. Menyajikan informasi, berita, dan layanan untuk masyarakat desa dengan transparansi dan dedikasi.
                    </p>
                </div>

                <!-- Links Section -->
                <div class="footer-links">
                    <div class="footer-column">
                        <h3>Tentang Desa</h3>
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/berita">Berita</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Pemerintahan</h3>
                        <ul>
                            <li><a href="/kepengurusan">Kepengurusan</a></li>
                            {{-- <li><a href="/lembaga">Lembaga Desa</a></li> --}}
                            <li><a href="/apbd">APBD</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Ekonomi & Budaya</h3>
                        <ul>
                            <li><a href="/umkm">UMKM</a></li>
                            <li><a href="/kesenian">Kesenian</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Social & Newsletter Section -->
                <div class="footer-social">
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="Facebook">f</a>
                        <a href="#" class="social-link" aria-label="Twitter">t</a>
                        <a href="#" class="social-link" aria-label="LinkedIn">in</a>
                        <a href="#" class="social-link" aria-label="Instagram">ig</a>
                    </div>
                    <div class="newsletter">
                        <h3>Kontak</h3>
                        <p>+62 858–5291-6826</p>
                        <h3>Alamat</h3>
                        <p>Jalan Panji Demung Nomor 53,<br>Desa Cepokolimo, Kecamatan Pacet, Kabupaten Mojokerto</p>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="footer-copyright">
                    © 2025 Desa Cepokolimo. All rights reserved.
                </div>
                {{-- <div class="footer-legal">
                    <a href="#privacy">Privacy Policy</a>
                    <a href="#terms">Terms of Service</a>
                    <a href="#cookies">Cookie Policy</a>
                </div> --}}
            </div>
        </div>
    </footer>