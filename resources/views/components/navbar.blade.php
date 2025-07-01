<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <nav data-aos="fade-down" data-aos-duration="1000">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" onclick="window.location.href='/'">
        
        <!-- Desktop Navigation Links -->
        <div class="nav-links">
            <a class="{{ Request::is('/') ? 'active' : '' }} def" href="/">Beranda</a>
            <a class="{{ Request::is('berita') ? 'active' : '' }} def" href="/berita">Berita</a>
            <a class="{{ Request::is('umkm') ? 'active' : '' }} def" href="/umkm">UMKM</a>
            <a class="{{ Request::is('kepengurusan') ? 'active' : '' }} def" href="/kepengurusan">Kepengurusan</a>
            <a class="{{ Request::is('apbd') ? 'active' : '' }} def" href="/apbd">APBD</a>
            <a class="def" onclick="test()">Lembaga Desa</a>
            <a class="{{ Request::is('kesenian') ? 'active' : '' }} def" href="/kesenian">Kesenian</a>
            <a class="cus" onclick="test()" style="color: #777777">&lt; Kembali</a>
            <a class="{{ Request::is('lembaga/bpd') ? 'active' : '' }} cus" href="/lembaga/bpd">BPD</a>
            <a class="{{ Request::is('lembaga/pkk') ? 'active' : '' }} cus" href="/lembaga/pkk">PKK</a>
            <a class="{{ Request::is('lembaga/karang-taruna') ? 'active' : '' }} cus" href="/lembaga/lpmd">LPMD</a>
            <a class="{{ Request::is('lembaga/poskesdes') ? 'active' : '' }} cus" href="/lembaga/poskesdes">Poskesdes</a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu" id="mobileMenu">
            <a class="{{ Request::is('/') ? 'active' : '' }} def" href="/">Beranda</a>
            <a class="{{ Request::is('berita') ? 'active' : '' }} def" href="/berita">Berita</a>
            <a class="{{ Request::is('umkm') ? 'active' : '' }} def" href="/umkm">UMKM</a>
            <a class="{{ Request::is('kepengurusan') ? 'active' : '' }} def" href="/kepengurusan">Kepengurusan</a>
            <a class="{{ Request::is('apbd') ? 'active' : '' }} def" href="/apbd">APBD</a>
            <a class="def" onclick="test()">Lembaga Desa</a>
            <a class="{{ Request::is('kesenian') ? 'active' : '' }} def" href="/kesenian">Kesenian</a>
            <a class="cus" onclick="test()" style="color: #777777">&lt; Kembali&nbsp;&nbsp;&nbsp;</a>
            <a class="{{ Request::is('lembaga/bpd') ? 'active' : '' }} cus" href="/lembaga/bpd">BPD</a>
            <a class="{{ Request::is('lembaga/pkk') ? 'active' : '' }} cus" href="/lembaga/pkk">PKK</a>
            <a class="{{ Request::is('lembaga/karang-taruna') ? 'active' : '' }} cus" href="/lembaga/lpmd">LPMD</a>
            <a class="{{ Request::is('lembaga/poskesdes') ? 'active' : '' }} cus" href="/lembaga/poskesdes">Poskesdes</a>
    </div>

    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuBtn = document.querySelector('.mobile-menu-btn');
            
            mobileMenu.classList.toggle('active');
            menuBtn.classList.toggle('active');
        }

        function closeMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuBtn = document.querySelector('.mobile-menu-btn');
            
            mobileMenu.classList.remove('active');
            menuBtn.classList.remove('active');
        }

        // Close mobile menu on window resize to desktop size
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                closeMobileMenu();
            }
        });
        

        let lembagaToggled = false;
        function test() {
            let cus = document.querySelectorAll('.cus');
            let def = document.querySelectorAll('.def');
            lembagaToggled = !lembagaToggled;
            if (lembagaToggled) {
            cus.forEach(el => {
                el.style.display = 'inline';
                el.style.opacity = '1';
            });
            def.forEach(el => {
                el.style.opacity = '0';
                el.style.display = 'none';
            });
            } else {
            cus.forEach(el => {
                el.style.opacity = '0';
                el.style.display = 'none';
            });
            def.forEach(el => {
                el.style.display = 'inline';
                el.style.opacity = '1';
            });
            }
        }
    </script>