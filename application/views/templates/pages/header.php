<!DOCTYPE html>
<html lang="id">
<!--begin::Head-->

<head>
    <base href="<?= base_url(); ?>">
    <title>Yayasan Citra Bina Insan Mandiri (CBIM) - Kupang</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/templates/media/logos/logo-cbim.png" />
    <meta name="description" content="Yayasan Citra Bina Insan Mandiri (YCBIM) Kota Kupang - Mewadahi Universitas Citra Bangsa (UCB), SMA K Citra Bangsa, SMP K Citra Bangsa, SD K Citra Bangsa, dan TK K Citra Bangsa." />
    <meta name="keywords" content="Yayasan CBIM, Citra Bina Insan Mandiri, Universitas Citra Bangsa, UCB Kupang, SMA K Citra Bangsa, SMP K Citra Bangsa, SD K Citra Bangsa, TK K Citra Bangsa, PPDB Kupang" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#890C25" />

    <!-- Open Graph / Facebook -->
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Yayasan Citra Bina Insan Mandiri - YCBIM Kupang" />
    <meta property="og:description" content="Lembaga pendidikan terpadu di Nusa Tenggara Timur mulai dari jenjang PAUD/TK, SD, SMP, SMA, hingga Universitas Citra Bangsa." />
    <meta property="og:url" content="<?= current_url(); ?>" />
    <meta property="og:site_name" content="Yayasan CBIM" />
    <meta property="og:image" content="<?= base_url(); ?>assets/templates/media/logos/logo-cbim.png" />

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Yayasan Citra Bina Insan Mandiri - YCBIM" />
    <meta name="twitter:description" content="Membina generasi unggul, berkarakter, dan mandiri di NTT." />
    <meta name="twitter:image" content="<?= base_url(); ?>assets/templates/media/logos/logo-cbim.png" />

    <link rel="canonical" href="<?= current_url(); ?>" />

    <!-- BE-02: JSON-LD Schema.org EducationalOrganization -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "Yayasan Citra Bina Insan Mandiri",
      "alternateName": "YCBIM",
      "url": "<?= base_url(); ?>",
      "logo": "<?= base_url(); ?>assets/templates/media/logos/logo-cbim.png",
      "foundingDate": "2008",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Jl. Manafe No.17, Kel. Kayu Putih, Kec. Oebobo",
        "addressLocality": "Kota Kupang",
        "addressRegion": "Nusa Tenggara Timur",
        "postalCode": "85111",
        "addressCountry": "ID"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+62-380-8553888",
        "contactType": "admissions",
        "availableLanguage": ["Indonesian", "English"]
      },
      "sameAs": [
        "https://www.facebook.com/profile.php?id=100086189573438",
        "https://www.instagram.com/yayasan_cbim/",
        "https://www.youtube.com/@CBIMYayasan"
      ]
    }
    </script>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <!-- Global Stylesheets Bundle -->
    <link href="<?= base_url(); ?>assets/templates/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/templates/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/templates/css/custom-cbim.css" rel="stylesheet" type="text/css" />

    <!-- AOS & Lightbox2 -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css" />

    <!-- =====================================================================
         BE-04 + BE-10: Google Analytics 4 dengan Google Consent Mode v2
         ---------------------------------------------------------------------
         PERUBAHAN PATCH 2026-09-07
         MASALAH LAMA: gtag.js dimuat dan gtag('config') dijalankan tanpa syarat,
         sehingga GA4 sudah menanam cookie dan mengirim data SEBELUM pengunjung
         menyentuh banner persetujuan. Banner BE-10 hanya kosmetik.
         PERBAIKAN: consent default = DENIED untuk semua kategori. GA4 tetap
         dimuat (agar event tidak hilang) tapi berjalan mode cookieless sampai
         pengunjung menekan "Setujui" -- lalu custom-cbim.js memanggil
         gtag('consent','update',...). Sesuai permintaan dokumen: "Block GA4 dan
         script tracking lain sampai pengguna menyetujui."
         ===================================================================== -->
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}

      // Ganti ID di bawah bila properti GA4 sudah final.
      window.CBIM_GA4_ID = 'G-CBIMGA401';

      // 1. Default: semua penyimpanan DITOLAK sebelum ada persetujuan.
      gtag('consent', 'default', {
        'ad_storage':            'denied',
        'ad_user_data':          'denied',
        'ad_personalization':    'denied',
        'analytics_storage':     'denied',
        'functionality_storage': 'granted',
        'security_storage':      'granted',
        'wait_for_update':       500
      });

      // 2. Bila pengunjung sudah pernah setuju, langsung pulihkan izinnya
      //    agar banner tidak perlu muncul lagi di halaman berikutnya.
      try {
        if (localStorage.getItem('cbim_cookie_consent') === 'accepted') {
          gtag('consent', 'update', {
            'ad_storage':         'granted',
            'ad_user_data':       'granted',
            'ad_personalization': 'granted',
            'analytics_storage':  'granted'
          });
        }
      } catch (e) { /* localStorage diblokir browser -- tetap mode denied */ }

      gtag('js', new Date());
      gtag('config', window.CBIM_GA4_ID, { 'anonymize_ip': true });

      window.base_url = "<?= rtrim(base_url(), '/') . '/'; ?>";
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CBIMGA401"></script>

    <style>
        #home {
            background-image: url("<?= base_url(); ?>assets/templates/media/logos/new-crop.png");
            background-size: cover;
        }

        @media (max-width: 767px) {
            #home {
                background-position: center;
                background-repeat: no-repeat;
            }

            #main-vid {
                height: 250px;
            }

            .gambar-daftar-berita {
                height: 30vh;
            }
        }

        @media (min-width: 767px) {
            #home {
                background-position: center;
                background-repeat: no-repeat;
            }

            #main-vid {
                height: 650px;
            }

            .gambar-daftar-berita {
                height: 20vh;
            }
        }

        .title-video,
        .title-berita {
            color: #110C2D;
            transition: color 0.25s ease;
        }

        .title-video:hover,
        .title-berita:hover {
            text-decoration: none;
            color: #890C25 !important;
        }

        .menu-state-title-primary .menu-item .menu-link:hover,
        .menu-state-title-primary .menu-item .menu-link.active {
            color: #890C25 !important;
        }

        .btn-primary {
            background-color: #890C25 !important;
            border-color: #890C25 !important;
        }

        .btn-primary:hover {
            background-color: #660519 !important;
            border-color: #660519 !important;
        }

        .btn-ucb-primary {
            background: linear-gradient(135deg, #890C25 0%, #B71A34 100%);
            color: #ffffff !important;
            font-weight: 700;
            border: none;
            border-radius: 50px;
            box-shadow: 0 4px 14px rgba(137, 12, 37, 0.35);
            transition: all 0.3s ease;
        }

        .btn-ucb-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(137, 12, 37, 0.48);
            background: linear-gradient(135deg, #660519 0%, #890C25 100%);
        }
    </style>
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="100" class="bg-white position-relative">
    <!-- FE-05: Skip to Main Content Landmark -->
    <a href="#main-content" class="skip-to-content">Menuju ke Konten Utama</a>

    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom">
                <!--begin::Header (FE-03: Sticky Navbar)-->
                <header class="landing-header cbim-sticky-header" role="banner">
                    <!--begin::Container-->
                    <div class="container-fluid px-5 px-lg-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between py-3">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-2 d-flex d-lg-none" id="kt_landing_menu_toggle" aria-label="Buka Navigasi">
                                    <span class="svg-icon svg-icon-2hx">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                            <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                        </svg>
                                    </span>
                                </button>
                                <!--end::Mobile menu toggle-->

                                <!--begin::Logo image (FE-07: Direct CBIM Link)-->
                                <a href="<?= base_url(); ?>" class="d-flex align-items-center">
                                    <img alt="Logo Yayasan CBIM" src="<?= base_url(); ?>assets/templates/media/logos/logo-cbim.png" class="logo-default h-45px h-lg-55px me-3" />
                                    <div class="d-none d-sm-block">
                                        <div class="fw-bolder fs-5 text-dark lh-1">YAYASAN CBIM</div>
                                        <small class="text-muted" style="font-size: 13px;">Citra Bina Insan Mandiri</small>
                                    </div>
                                </a>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Logo-->

                            <!--begin::Menu wrapper-->
                            <nav class="d-lg-block" id="kt_header_nav_wrapper" role="navigation" aria-label="Navigasi Utama">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="260px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-600 menu-state-title-primary nav nav-flush fs-6 fw-bold" id="kt_landing_menu">
                                        <div class="menu-item">
                                            <a class="menu-link nav-link cbim-nav-link py-3 px-4" href="<?= base_url(); ?>#home" data-i18n="nav_home">Beranda</a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link nav-link cbim-nav-link py-3 px-4" href="<?= base_url('page/berita'); ?>" data-i18n="nav_news">Berita</a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link nav-link cbim-nav-link py-3 px-4" href="<?= base_url('page/kegiatan'); ?>" data-i18n="nav_activities">Kegiatan</a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link nav-link cbim-nav-link py-3 px-4" href="<?= base_url('page/galeri'); ?>" data-i18n="nav_gallery">Galeri</a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link nav-link cbim-nav-link py-3 px-4" href="<?= base_url('katalog'); ?>" data-i18n="nav_catalog">
                                                <i class="bi bi-book me-1"></i>Katalog
                                            </a>
                                        </div>
                                        <!-- Pendaftaran (Link External) -->
                                        <div class="menu-item">
                                            <a class="menu-link nav-link cbim-nav-link text-primary py-3 px-4" href="#" target="_blank" rel="noopener" data-i18n="nav_register">
                                                <i class="bi bi-pencil-square me-1 text-primary"></i>Pendaftaran
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </nav>
                            <!--end::Menu wrapper-->

                            <!--begin::Toolbar & Interactive Tools (INT-01 Search + FE-08 i18n)-->
                            <div class="d-flex align-items-center gap-3">
                                <!-- INT-01: Sitewide Search -->
                                <div class="cbim-search-wrapper d-none d-md-block position-relative">
                                    <i class="bi bi-search cbim-search-icon"></i>
                                    <input type="text" id="cbimSitewideSearch" class="cbim-search-input form-control" placeholder="Cari berita, info unit..." autocomplete="off" />
                                    <div id="cbimSearchDropdown" class="cbim-search-dropdown"></div>
                                </div>

                                <!-- FE-08: i18n Language Toggle -->
                                <div class="cbim-lang-switch">
                                    <button type="button" class="cbim-lang-btn active" data-lang="id" aria-label="Pilih Bahasa Indonesia">ID</button>
                                    <button type="button" class="cbim-lang-btn" data-lang="en" aria-label="Switch to English">EN</button>
                                </div>

                                <!-- Login / Dashboard / Logout -->
                                <?php if (!empty($this->session->userdata('username'))) : ?>
                                    <a href="<?= base_url('admin'); ?>" class="btn btn-outline-primary d-none d-sm-inline-flex align-items-center py-2 px-4">
                                        <i class="bi bi-speedometer2 me-1"></i> Admin
                                    </a>
                                    <a href="<?= base_url('logout'); ?>" class="btn btn-ucb-primary py-2 px-4">Logout</a>
                                <?php else : ?>
                                    <a href="<?= base_url('auth'); ?>" class="btn btn-ucb-primary py-2 px-4">
                                        <i class="bi bi-box-arrow-in-right me-1"></i> Login
                                    </a>
                                <?php endif; ?>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </header>
                <!--end::Header-->