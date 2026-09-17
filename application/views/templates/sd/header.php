<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= isset($title) ? $title : 'SD K Citra Bangsa Mandiri - Yayasan CBIM Kupang'; ?></title>
    <meta name="description" content="Website Resmi SD Kristen Citra Bangsa Mandiri Kupang - Lembaga Pendidikan Dasar Unggulan Yayasan Citra Bina Insan Mandiri (YCBIM)" />
    <meta name="keywords" content="SD K Citra Bangsa, SD Citra Bangsa Mandiri, YCBIM, Yayasan Citra Bina Insan Mandiri, UCB, Sekolah Dasar Kupang, PPDB SD Kupang" />
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/templates/media/logos/sd.png" />
    
    <!-- Google Fonts: Poppins, Outfit, Plus Jakarta Sans (Unified with UCB / Yayasan) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        :root {
            /* Base Theme: Universitas Citra Bangsa (UCB) & Yayasan CBIM */
            --cbim-primary: #890C25;       /* UCB Crimson Maroon */
            --cbim-primary-light: #B71A34; /* Vibrant Crimson */
            --cbim-primary-dark: #660519;  /* Deep Maroon */
            --cbim-primary-subtle: #FDF2F4;
            --cbim-secondary: #110C2D;    /* UCB Dark Slate */
            --cbim-gold: #FFD80C;         /* UCB Gold Accent */
            --cbim-gold-dark: #FFB800;
            --cbim-gold-subtle: #FFFDE6;
            --cbim-green: #09A24F;        /* UCB Theme Green */
            --cbim-green-subtle: #E8F8EE;
            --cbim-bg: #FDFBFB;
            --cbim-card-shadow: 0 10px 30px rgba(17, 12, 45, 0.07);
            --cbim-hover-shadow: 0 16px 36px rgba(137, 12, 37, 0.18);
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            background-color: var(--cbim-bg);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6, .brand-font {
            font-family: 'Outfit', sans-serif;
        }

        /* Top Announcement Bar (UCB Crimson & Gold Gradient) */
        .topbar-sd {
            background: linear-gradient(90deg, #660519 0%, #890C25 40%, #B71A34 75%, #FFD80C 100%);
            color: #ffffff;
            font-size: 0.875rem;
            font-weight: 600;
            padding: 0.45rem 1rem;
        }

        /* ============================================================
           SD NAVBAR — Matching TK style (custom, non-Bootstrap)
           ============================================================ */
        .sd-header {
            position: sticky;
            top: 0;
            z-index: 60;
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(12px);
            border-bottom: 3px solid var(--cbim-primary);
            transition: box-shadow .2s ease;
        }
        .sd-header.melayang { box-shadow: 0 6px 24px rgba(17, 12, 45, 0.12); }

        .sd-header__isi {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 10px 0;
            max-width: 1200px;
            margin-inline: auto;
            padding-inline: 22px;
        }
        .sd-header__logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #334155;
        }
        .sd-header__logo img { height: 50px; width: auto; object-fit: contain; transition: transform .3s ease; }
        .sd-header__logo:hover img { transform: scale(1.05); }
        .sd-header__nama {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.05rem;
            line-height: 1.15;
        }
        .sd-header__nama small {
            display: block;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 600;
            font-size: .72rem;
            color: var(--cbim-primary);
            letter-spacing: 0.5px;
        }

        .sd-nav { display: flex; align-items: center; gap: 4px; }
        .sd-nav a {
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            color: #334155;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 8px;
            transition: all 0.25s ease;
            position: relative;
        }
        .sd-nav a:hover {
            color: var(--cbim-primary);
            background-color: var(--cbim-primary-subtle);
        }
        .sd-nav a.aktif {
            color: var(--cbim-primary);
            background-color: var(--cbim-primary-subtle);
        }
        .sd-nav a.aktif::after {
            content: '';
            position: absolute;
            bottom: 2px;
            left: 25%;
            right: 25%;
            height: 3px;
            background-color: var(--cbim-primary);
            border-radius: 4px;
        }

        .sd-header__aksi { display: flex; align-items: center; gap: 10px; }

        .sd-burger {
            display: none;
            background: #fff;
            border: none;
            width: 46px; height: 46px;
            border-radius: 14px;
            box-shadow: 0 4px 0 rgba(17, 12, 45, .12);
            cursor: pointer;
            padding: 0;
            place-items: center;
        }
        .sd-burger span {
            display: block; width: 20px; height: 2.5px;
            background: #334155; border-radius: 2px; margin: 3px auto;
            transition: transform .3s cubic-bezier(.4,0,.2,1), opacity .2s ease;
            transform-origin: center;
        }

        @media (max-width: 900px) {
            .sd-burger { display: grid; }
            .sd-burger[aria-expanded="true"] span:nth-child(1) { transform: translateY(5.5px) rotate(45deg); }
            .sd-burger[aria-expanded="true"] span:nth-child(2) { opacity: 0; transform: scaleX(0); }
            .sd-burger[aria-expanded="true"] span:nth-child(3) { transform: translateY(-5.5px) rotate(-45deg); }
            .sd-nav {
                position: absolute;
                top: 100%; left: 0; right: 0;
                flex-direction: column;
                align-items: stretch;
                background: #ffffff;
                gap: 2px;
                box-shadow: 0 12px 24px rgba(17, 12, 45, .14);
                display: flex;
                max-height: 0;
                overflow: hidden;
                opacity: 0;
                padding: 0 22px;
                transition: max-height .4s cubic-bezier(.4,0,.2,1),
                            opacity .3s ease,
                            padding .35s cubic-bezier(.4,0,.2,1);
                z-index: 100;
            }
            .sd-nav.terbuka {
                max-height: 400px;
                opacity: 1;
                padding: 10px 22px 22px;
            }
            .sd-nav a {
                padding: 13px 16px;
                border-radius: 10px;
                transform: translateY(-10px);
                opacity: 0;
                transition: transform .3s cubic-bezier(.4,0,.2,1),
                            opacity .3s ease,
                            background .12s ease;
            }
            .sd-nav.terbuka a {
                transform: translateY(0);
                opacity: 1;
            }
            .sd-nav.terbuka a:nth-child(1) { transition-delay: .06s; }
            .sd-nav.terbuka a:nth-child(2) { transition-delay: .12s; }
            .sd-nav.terbuka a:nth-child(3) { transition-delay: .18s; }
            .sd-nav.terbuka a:nth-child(4) { transition-delay: .24s; }
            .sd-nav.terbuka a:nth-child(5) { transition-delay: .30s; }
            .sd-header__nama small { display: none; }
            .sd-header__aksi .btn-sd-back { display: none; }
        }

        /* Buttons (UCB Maroon & Gold) */
        .btn-cbim-primary {
            background: linear-gradient(135deg, #890C25 0%, #B71A34 100%);
            color: #ffffff !important;
            font-weight: 700;
            border: none;
            padding: 0.65rem 1.5rem;
            border-radius: 50px;
            box-shadow: 0 4px 14px rgba(137, 12, 37, 0.35);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .btn-cbim-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(137, 12, 37, 0.48);
            background: linear-gradient(135deg, #660519 0%, #890C25 100%);
            color: #ffffff;
        }

        .btn-cbim-gold {
            background: linear-gradient(135deg, #FFD80C 0%, #FFB800 100%);
            color: #110C2D !important;
            font-weight: 800;
            border: none;
            padding: 0.65rem 1.5rem;
            border-radius: 50px;
            box-shadow: 0 4px 14px rgba(255, 216, 12, 0.4);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .btn-cbim-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(255, 216, 12, 0.55);
            color: #110C2D;
        }

        .btn-cbim-outline {
            border: 2px solid var(--cbim-primary);
            color: var(--cbim-primary) !important;
            font-weight: 700;
            padding: 0.6rem 1.4rem;
            border-radius: 50px;
            background: transparent;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .btn-cbim-outline:hover {
            background-color: var(--cbim-primary);
            color: #ffffff !important;
            box-shadow: 0 4px 15px rgba(137, 12, 37, 0.3);
            transform: translateY(-2px);
        }

        .btn-sd-back {
            background: transparent;
            border: 2px solid #334155;
            color: #334155 !important;
            font-weight: 700;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.85rem;
            transition: all 0.25s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            text-decoration: none;
        }
        .btn-sd-back:hover {
            background: #334155;
            color: #ffffff !important;
        }

        /* Banner Hero & Section Backgrounds */
        .bg-sd-hero {
            background: linear-gradient(135deg, rgba(17, 12, 45, 0.94) 0%, rgba(137, 12, 37, 0.90) 50%, rgba(183, 26, 52, 0.85) 100%), 
                        url('<?= base_url(); ?>assets/templates/media/logos/new-crop.png') center/cover no-repeat;
            color: white;
            position: relative;
        }

        .bg-sd-page-header {
            background: linear-gradient(135deg, #110C2D 0%, #890C25 60%, #B71A34 100%);
            color: white;
            position: relative;
        }

        /* Feature Cards */
        .card-sd {
            border: none;
            border-radius: 20px;
            background: white;
            box-shadow: var(--cbim-card-shadow);
            transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
            overflow: hidden;
        }

        .card-sd:hover {
            transform: translateY(-8px);
            box-shadow: var(--cbim-hover-shadow);
        }

        .badge-cbim-red {
            background-color: var(--cbim-primary-subtle);
            color: var(--cbim-primary);
            font-weight: 700;
            padding: 0.45rem 1.2rem;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.85rem;
            border: 1px solid rgba(137, 12, 37, 0.2);
        }

        .badge-cbim-gold {
            background-color: var(--cbim-gold-subtle);
            color: #92400E;
            font-weight: 700;
            padding: 0.45rem 1.2rem;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.85rem;
            border: 1px solid rgba(255, 216, 12, 0.3);
        }

        .badge-cbim-green {
            background-color: var(--cbim-green-subtle);
            color: var(--cbim-green);
            font-weight: 700;
            padding: 0.45rem 1.2rem;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.85rem;
            border: 1px solid rgba(9, 162, 79, 0.2);
        }

        /* Floating Badge */
        .floating-badge {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0px); }
        }

        /* Breadcrumb Bar */
        .breadcrumb-sd {
            background-color: white;
            padding: 0.75rem 0;
            border-bottom: 1px solid #E2E8F0;
        }

        .breadcrumb-sd a {
            color: var(--cbim-primary);
            text-decoration: none;
            font-weight: 600;
        }

        .breadcrumb-sd a:hover {
            text-decoration: underline;
        }
    </style>

    <!-- ==================================================================
         PATCH 2026-09-07: partial bersama subsite
         Berisi shim kelas CSS (fs-7, fw-extrabold, dll), meta og:*,
         canonical, JSON-LD, GA4 dengan Consent Mode, smooth scroll, dan
         perbaikan aksesibilitas. Lihat templates/subsite/head_shared.php
         ================================================================== -->
    <?php $this->load->view('templates/subsite/head_shared'); ?>
</head>
<body>

    <!-- FE-05 (PATCH): skip link untuk pengguna keyboard & pembaca layar -->
    <a class="skip-link" href="#konten-utama">Lompat ke konten utama</a>

    <!-- Top Announcement Bar (UCB Crimson & Gold Theme) -->
    <div class="topbar-sd">
        <div class="container d-flex flex-wrap justify-content-between align-items-center gap-2">
            <div class="d-flex align-items-center gap-2">
                <span class="badge bg-warning text-dark rounded-pill px-2 py-1"><i class="bi bi-bell-fill"></i> INFO PPDB</span>
                <span>Penerimaan Peserta Didik Baru (PPDB) SD K Citra Bangsa Mandiri TA 2026/2027 Telah Dibuka!</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="<?= base_url('sd/ppdb'); ?>" class="text-warning fw-extrabold text-decoration-underline">Daftar Online <i class="bi bi-arrow-right-short"></i></a>
                <span class="text-white opacity-50 d-none d-md-inline">|</span>
                <span class="d-none d-md-inline"><i class="bi bi-geo-alt-fill text-warning me-1"></i> Kota Kupang, NTT</span>
            </div>
        </div>
    </div>

    <!-- Main Navigation SD (TK-style navbar) -->
    <header class="sd-header" id="sdHeader">
        <div class="sd-header__isi">
            <a class="sd-header__logo" href="<?= base_url('sd'); ?>">
                <img src="<?= base_url(); ?>assets/templates/media/logos/sd.png" alt="Logo SD K Citra Bangsa">
                <span class="sd-header__nama">
                    SD K CITRA BANGSA
                    <small>Yayasan Citra Bina Insan Mandiri</small>
                </span>
            </a>

            <nav class="sd-nav" id="sdNav" aria-label="Menu utama SD">
                <a href="<?= base_url('sd'); ?>" <?= (isset($active_menu) && $active_menu == 'home') ? 'class="aktif"' : ''; ?>>
                    <i class="bi bi-house-door-fill me-1 d-lg-none"></i> Beranda
                </a>
                <a href="<?= base_url('sd/profil'); ?>" <?= (isset($active_menu) && $active_menu == 'profil') ? 'class="aktif"' : ''; ?>>
                    <i class="bi bi-info-circle-fill me-1 d-lg-none"></i> Profil & Visi Misi
                </a>
                <a href="<?= base_url('sd/fasilitas'); ?>" <?= (isset($active_menu) && $active_menu == 'fasilitas') ? 'class="aktif"' : ''; ?>>
                    <i class="bi bi-building me-1 d-lg-none"></i> Fasilitas
                </a>
                <a href="<?= base_url('sd/kegiatan'); ?>" <?= (isset($active_menu) && $active_menu == 'kegiatan') ? 'class="aktif"' : ''; ?>>
                    <i class="bi bi-camera-fill me-1 d-lg-none"></i> Kegiatan & Prestasi
                </a>
                <a href="<?= base_url('sd/ppdb'); ?>" <?= (isset($active_menu) && $active_menu == 'ppdb') ? 'class="aktif"' : ''; ?>>
                    <i class="bi bi-pencil-square me-1 d-lg-none"></i> PPDB Online
                </a>
            </nav>

            <div class="sd-header__aksi">
                <a href="<?= base_url('sd/ppdb'); ?>" class="btn-cbim-primary">
                    <i class="bi bi-pencil-square"></i> Daftar PPDB
                </a>
                <a href="<?= base_url(); ?>" class="btn-sd-back" title="Kembali ke Portal Yayasan CBIM">
                    <i class="bi bi-grid-fill"></i> Yayasan
                </a>
                <button class="sd-burger" id="sdBurger" aria-label="Buka menu" aria-expanded="false" aria-controls="sdNav">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Navbar toggle script -->
    <script>
    (function() {
        var burger = document.getElementById('sdBurger');
        var nav = document.getElementById('sdNav');
        var header = document.getElementById('sdHeader');
        if (burger && nav) {
            burger.addEventListener('click', function() {
                var expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !expanded);
                nav.classList.toggle('terbuka');
            });
        }
        // Scroll shadow
        if (header) {
            window.addEventListener('scroll', function() {
                header.classList.toggle('melayang', window.scrollY > 10);
            });
        }
    })();
    </script>

    <!-- FE-05 (PATCH): landmark <main>. Ditutup di templates/sd/footer.php -->
    <main id="konten-utama" tabindex="-1">

