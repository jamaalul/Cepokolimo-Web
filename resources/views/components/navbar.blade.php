<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <nav data-aos="fade-down" data-aos-duration="1000">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" onclick="window.location.href='/'">
        
        <!-- Desktop Navigation Links -->
        <div class="nav-links">
            <a class="{{ Request::is('berita') ? 'active' : '' }}" href="/berita">Berita</a>
            <a class="{{ Request::is('umkm') ? 'active' : '' }}" href="/umkm">UMKM</a>
            <a class="{{ Request::is('kepengurusan') ? 'active' : '' }}" href="/kepengurusan">Kepengurusan</a>
            <a class="{{ Request::is('lembaga') ? 'active' : '' }}" href="/lembaga">Lembaga Desa</a>
            <a class="{{ Request::is('kesenian') ? 'active' : '' }}" href="/kesenian">Kesenian</a>
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
        <a class="{{ Request::is('berita') ? 'active' : '' }}" href="/berita" onclick="closeMobileMenu()">Berita</a>
        <a class="{{ Request::is('umkm') ? 'active' : '' }}" href="/umkm" onclick="closeMobileMenu()">UMKM</a>
        <a class="{{ Request::is('kepengurusan') ? 'active' : '' }}" href="/kepengurusan" onclick="closeMobileMenu()">Kepengurusan</a>
        <a class="{{ Request::is('lembaga') ? 'active' : '' }}" href="/lembaga" onclick="closeMobileMenu()">Lembaga Desa</a>
        <a class="{{ Request::is('kesenian') ? 'active' : '' }}" href="/kesenian" onclick="closeMobileMenu()">Kesenian</a>
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

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuBtn = document.querySelector('.mobile-menu-btn');
            const nav = document.querySelector('nav');
            
            if (!nav.contains(event.target) && mobileMenu.classList.contains('active')) {
                closeMobileMenu();
            }
        });

        // Close mobile menu on window resize to desktop size
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                closeMobileMenu();
            }
        });
    </script>