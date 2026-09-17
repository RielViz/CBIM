<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program Pendidikan — TK Kristen Citra Bangsa</title>
    <link rel="shortcut icon" href="assets/templates/media/logos/logo-cbim.png" />
    <meta name="description" content="Program pendidikan TK Kristen Citra Bangsa, Kupang. Kurikulum terpadu, kegiatan harian, dan ekstrakurikuler yang menyenangkan." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
    /* ============================================================
       TOKEN DESAIN
       ============================================================ */
    :root {
        --kertas:      #FFF7EC;
        --kertas-tua:  #FBEBD6;
        --langit:      #BFE7FF;
        --langit-muda: #E6F5FF;
        --tinta:       #3B3355;
        --tinta-muda:  #6B6285;
        --kuning:      #FFC53D;
        --merah:       #EE5D4E;
        --biru:        #2E9BD6;
        --hijau:       #57B979;
        --ungu:        #9B7EDE;
        --malam:       #2A2450;

        --lebar: 1120px;
        --radius-l: 34px;
        --radius-m: 22px;

        --font-judul: "Baloo 2", "Trebuchet MS", sans-serif;
        --font-isi:   "Nunito", "Segoe UI", sans-serif;
    }

    /* ============================================================
       DASAR
       ============================================================ */
    *, *::before, *::after { box-sizing: border-box; }

    html { scroll-behavior: smooth; }

    body {
        margin: 0;
        background: var(--kertas);
        color: var(--tinta);
        font-family: var(--font-isi);
        font-size: 17px;
        line-height: 1.65;
        -webkit-font-smoothing: antialiased;
    }

    h1, h2, h3, h4 {
        font-family: var(--font-judul);
        font-weight: 700;
        line-height: 1.15;
        margin: 0 0 .5em;
        letter-spacing: -.01em;
    }
    h1 { font-size: clamp(2.1rem, 6.2vw, 3.9rem); font-weight: 800; }
    h2 { font-size: clamp(1.8rem, 4.4vw, 2.8rem); }
    h3 { font-size: clamp(1.3rem, 2.6vw, 1.7rem); }

    p { margin: 0 0 1rem; max-width: 66ch; }

    a { color: var(--biru); }

    img, svg { max-width: 100%; }

    :focus-visible {
        outline: 3px solid var(--ungu);
        outline-offset: 3px;
        border-radius: 6px;
    }

    .tk-wadah {
        width: 100%;
        max-width: var(--lebar);
        margin-inline: auto;
        padding-inline: 22px;
    }

    .tk-lewati {
        position: absolute; left: -9999px;
        background: var(--tinta); color: #fff;
        padding: 12px 20px; border-radius: 0 0 14px 0; z-index: 999;
    }
    .tk-lewati:focus { left: 0; top: 0; }

    /* ============================================================
       TOMBOL
       ============================================================ */
    .tk-tombol {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-family: var(--font-judul);
        font-weight: 700;
        font-size: 1.12rem;
        text-decoration: none;
        padding: 14px 30px 16px;
        border: none;
        border-radius: 999px;
        cursor: pointer;
        transition: transform .12s ease, box-shadow .12s ease;
    }
    .tk-tombol--utama {
        background: var(--merah);
        color: #fff;
        box-shadow: 0 6px 0 #C7402F;
    }
    .tk-tombol--utama:hover,
    .tk-tombol--utama:focus-visible {
        transform: translateY(2px);
        box-shadow: 0 4px 0 #C7402F;
    }
    .tk-tombol--kedua {
        background: #fff;
        color: var(--tinta);
        box-shadow: 0 6px 0 rgba(59,51,85,.18);
    }
    .tk-tombol--kedua:hover,
    .tk-tombol--kedua:focus-visible {
        transform: translateY(2px);
        box-shadow: 0 4px 0 rgba(59,51,85,.18);
    }

    /* ============================================================
       HEADER
       ============================================================ */
    .tk-header {
        position: sticky;
        top: 0;
        z-index: 60;
        background: rgba(255,247,236,.92);
        backdrop-filter: blur(8px);
        transition: box-shadow .2s ease;
    }
    .tk-header.melayang { box-shadow: 0 6px 24px rgba(59,51,85,.12); }

    .tk-header__isi {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        padding: 12px 0;
    }
    .tk-header__logo { display: flex; align-items: center; gap: 12px; text-decoration: none; color: var(--tinta); }
    .tk-header__logo img { height: 46px; width: auto; }
    .tk-header__nama { font-family: var(--font-judul); font-weight: 700; font-size: 1.05rem; line-height: 1.1; }
    .tk-header__nama small { display: block; font-family: var(--font-isi); font-weight: 600; font-size: .72rem; color: var(--tinta-muda); }

    .tk-nav { display: flex; align-items: center; gap: 4px; }
    .tk-nav a {
        font-family: var(--font-judul);
        font-weight: 600;
        font-size: 1.05rem;
        color: var(--tinta);
        text-decoration: none;
        padding: 8px 15px;
        border-radius: 999px;
    }
    .tk-nav a:hover { background: var(--kuning); }
    .tk-nav a[aria-current="page"] { background: var(--kuning); }

    .tk-header__aksi { display: flex; align-items: center; gap: 10px; }
    .tk-header__aksi .tk-tombol { padding: 10px 22px 12px; font-size: 1rem; }

    .tk-burger {
        display: none;
        background: #fff;
        border: none;
        width: 46px; height: 46px;
        border-radius: 14px;
        box-shadow: 0 4px 0 rgba(59,51,85,.15);
        cursor: pointer;
        padding: 0;
        place-items: center;
    }
    .tk-burger span {
        display: block; width: 20px; height: 2.5px;
        background: var(--tinta); border-radius: 2px; margin: 3px auto;
        transition: transform .3s cubic-bezier(.4,0,.2,1), opacity .2s ease;
        transform-origin: center;
    }

    @media (max-width: 900px) {
        .tk-burger { display: grid; }
        .tk-burger[aria-expanded="true"] span:nth-child(1) { transform: translateY(5.5px) rotate(45deg); }
        .tk-burger[aria-expanded="true"] span:nth-child(2) { opacity: 0; transform: scaleX(0); }
        .tk-burger[aria-expanded="true"] span:nth-child(3) { transform: translateY(-5.5px) rotate(-45deg); }
        .tk-nav {
            position: absolute;
            top: 100%; left: 0; right: 0;
            flex-direction: column;
            align-items: stretch;
            background: var(--kertas);
            gap: 2px;
            box-shadow: 0 12px 24px rgba(59,51,85,.14);
            display: flex;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            padding: 0 22px;
            transition: max-height .4s cubic-bezier(.4,0,.2,1),
                        opacity .3s ease,
                        padding .35s cubic-bezier(.4,0,.2,1);
        }
        .tk-nav.terbuka {
            max-height: 350px;
            opacity: 1;
            padding: 10px 22px 22px;
        }
        .tk-nav a {
            padding: 13px 16px;
            transform: translateY(-10px);
            opacity: 0;
            transition: transform .3s cubic-bezier(.4,0,.2,1),
                        opacity .3s ease,
                        background .12s ease;
        }
        .tk-nav.terbuka a {
            transform: translateY(0);
            opacity: 1;
        }
        .tk-nav.terbuka a:nth-child(1) { transition-delay: .06s; }
        .tk-nav.terbuka a:nth-child(2) { transition-delay: .12s; }
        .tk-nav.terbuka a:nth-child(3) { transition-delay: .18s; }
        .tk-nav.terbuka a:nth-child(4) { transition-delay: .24s; }
        .tk-header__nama small { display: none; }
        .tk-header__aksi .tk-tombol--kedua { display: none; }
    }

    /* ============================================================
       HERO HALAMAN
       ============================================================ */
    .tk-hero {
        position: relative;
        background: linear-gradient(180deg, var(--langit) 0%, var(--langit-muda) 62%, #F3FBFF 100%);
        overflow: hidden;
        padding: clamp(44px, 7vw, 80px) 0 0;
        text-align: center;
    }
    .tk-hero__teks { position: relative; z-index: 3; max-width: 760px; margin-inline: auto; }
    .tk-hero h1 { color: var(--tinta); text-wrap: balance; }
    .tk-hero__sub {
        font-size: clamp(1.05rem, 2.1vw, 1.28rem);
        color: #4C4467;
        margin-inline: auto;
        max-width: 54ch;
        margin-bottom: 30px;
    }

    .tk-awan { position: absolute; z-index: 1; fill: #fff; opacity: .9; }
    .tk-awan--1 { top: 40px;  left: 5%;  width: 100px; }
    .tk-awan--2 { top: 70px;  right: 8%; width: 80px; opacity: .7; }

    .tk-bukit { display: block; width: 100%; margin-top: -20px; position: relative; z-index: 2; }

    @media (max-width: 700px) {
        .tk-awan--2 { display: none; }
        .tk-awan--1 { width: 64px; top: 90px; opacity: .6; }
    }

    /* ============================================================
       TEPI KERTAS
       ============================================================ */
    .tk-gunting { display: block; width: 100%; height: 34px; }

    /* ============================================================
       BAGIAN
       ============================================================ */
    .tk-bagian { padding: clamp(56px, 8vw, 96px) 0; }
    .tk-bagian--kertas-tua { background: var(--kertas-tua); }
    .tk-bagian--putih { background: #fff; }

    .tk-judul-bagian { max-width: 40ch; margin-bottom: 44px; }
    .tk-judul-bagian p { color: var(--tinta-muda); font-size: 1.08rem; margin-bottom: 0; }
    .tk-judul-bagian--tengah { margin-inline: auto; text-align: center; }
    .tk-judul-bagian--tengah p { margin-inline: auto; }

    .tk-coret { display: block; width: 148px; height: 12px; margin: 6px 0 18px; }
    .tk-judul-bagian--tengah .tk-coret { margin-inline: auto; }

    /* ============================================================
       GRID & KARTU
       ============================================================ */
    .tk-grid-3 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 26px;
    }
    .tk-grid-4 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 26px;
    }
    .tk-kartu {
        background: #fff;
        border-radius: var(--radius-l);
        padding: 34px 30px 30px;
        box-shadow: 0 10px 0 rgba(59,51,85,.07);
    }
    .tk-kartu h3 { margin-bottom: .35em; }
    .tk-kartu p { color: var(--tinta-muda); margin-bottom: 0; font-size: 1.02rem; }
    .tk-kartu__ikon {
        width: 74px; height: 74px;
        border-radius: 50%;
        display: grid; place-items: center;
        margin-bottom: 20px;
    }
    .tk-kartu__ikon--kuning { background: #FFF0C9; }
    .tk-kartu__ikon--biru   { background: #D6EDFA; }
    .tk-kartu__ikon--hijau  { background: #DBF0E2; }
    .tk-kartu__ikon--merah  { background: #FDDDD9; }
    .tk-kartu__ikon--ungu   { background: #EDE5F9; }
    .tk-kartu--tengah { text-align: center; }
    .tk-kartu--tengah .tk-kartu__ikon { margin-inline: auto; }

    /* ============================================================
       PROGRAM CARDS
       ============================================================ */
    .tk-program {
        background: #fff;
        border-radius: var(--radius-l);
        padding: 34px 32px 30px;
        border-top: 9px solid var(--kuning);
        box-shadow: 0 10px 0 rgba(59,51,85,.07);
    }
    .tk-program--biru  { border-top-color: var(--biru); }
    .tk-program--hijau { border-top-color: var(--hijau); }
    .tk-program--merah { border-top-color: var(--merah); }
    .tk-program--ungu  { border-top-color: var(--ungu); }
    .tk-program p { color: var(--tinta-muda); margin-bottom: 0; }
    .tk-program ul { margin: 0; padding-left: 20px; color: var(--tinta-muda); }
    .tk-program li { margin-bottom: 6px; }
    .tk-program--tengah { text-align: center; }

    /* Jadwal waktu di dalam kartu program */
    .tk-program__waktu {
        display: inline-block;
        font-family: var(--font-judul);
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 10px;
        padding: 4px 14px 6px;
        border-radius: 999px;
        background: var(--kertas);
    }
    .tk-program--hijau .tk-program__waktu { color: var(--hijau); }
    .tk-program--biru .tk-program__waktu  { color: var(--biru); }
    .tk-program .tk-program__waktu        { color: #D69F1E; }
    .tk-program--merah .tk-program__waktu { color: var(--merah); }

    /* ============================================================
       AJAKAN
       ============================================================ */
    .tk-ajakan {
        background: var(--kuning);
        border-radius: var(--radius-l);
        padding: clamp(34px, 5vw, 56px);
        text-align: center;
        color: #4A3200;
        margin-bottom: -60px;
        position: relative;
        z-index: 3;
        box-shadow: 0 16px 34px rgba(59,51,85,.16);
    }
    .tk-ajakan h2 { color: #4A3200; }
    .tk-ajakan p { color: #6B4B08; margin-inline: auto; margin-bottom: 26px; }

    /* ============================================================
       FOOTER
       ============================================================ */
    .tk-footer {
        background: var(--malam);
        color: #fff;
        padding: 110px 0 0;
    }
    .tk-footer__grid {
        display: grid;
        grid-template-columns: 1.3fr 1fr 1fr;
        gap: 44px;
        padding-bottom: 46px;
    }
    @media (max-width: 820px) { .tk-footer__grid { grid-template-columns: 1fr; gap: 34px; } }

    .tk-footer h4 {
        font-size: 1.05rem;
        color: var(--kuning);
        margin-bottom: 16px;
    }
    .tk-footer p { color: rgba(255,255,255,.7); font-size: .98rem; }
    .tk-footer a {
        color: rgba(255,255,255,.78);
        text-decoration: none;
        font-size: .98rem;
        display: flex;
        align-items: center;
        gap: 9px;
        margin-bottom: 11px;
    }
    .tk-footer a:hover { color: var(--kuning); }
    .tk-footer img.tk-ikon-sosial { height: 19px; width: auto; }

    .tk-footer__bawah {
        border-top: 1px solid rgba(255,255,255,.12);
        padding: 22px 0 26px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 14px;
        color: rgba(255,255,255,.55);
        font-size: .9rem;
    }
    .tk-footer__bawah img { height: 34px; width: auto; }

    /* ============================================================
       TOMBOL KE ATAS
       ============================================================ */
    .tk-keatas {
        position: fixed;
        right: 20px; bottom: 20px;
        width: 50px; height: 50px;
        border-radius: 50%;
        background: var(--merah);
        color: #fff;
        border: none;
        display: grid; place-items: center;
        cursor: pointer;
        box-shadow: 0 6px 0 #C7402F;
        opacity: 0;
        visibility: hidden;
        transition: opacity .2s ease, visibility .2s ease;
        z-index: 50;
    }
    .tk-keatas.tampil { opacity: 1; visibility: visible; }

    /* ============================================================
       ANIMASI SCROLL-TRIGGERED (Terinspirasi TK 2)
       ============================================================ */
    .tk-naik {
        opacity: 0;
        transform: translateY(44px);
        transition: opacity 1.2s cubic-bezier(.22,1,.36,1),
                    transform 1.2s cubic-bezier(.22,1,.36,1);
    }
    .tk-naik.tk-tampil { opacity: 1; transform: translateY(0); }

    .tk-muncul {
        opacity: 0;
        transform: scale(.82);
        transition: opacity 1s cubic-bezier(.22,1,.36,1),
                    transform 1s cubic-bezier(.22,1,.36,1);
    }
    .tk-muncul.tk-tampil { opacity: 1; transform: scale(1); }

    .tk-kiri {
        opacity: 0;
        transform: translateX(-50px);
        transition: opacity 1.2s cubic-bezier(.22,1,.36,1),
                    transform 1.2s cubic-bezier(.22,1,.36,1);
    }
    .tk-kiri.tk-tampil { opacity: 1; transform: translateX(0); }

    .tk-kanan {
        opacity: 0;
        transform: translateX(50px);
        transition: opacity 1.2s cubic-bezier(.22,1,.36,1),
                    transform 1.2s cubic-bezier(.22,1,.36,1);
    }
    .tk-kanan.tk-tampil { opacity: 1; transform: translateX(0); }

    .tk-zoom {
        opacity: 0;
        transform: scale(.88);
        transition: opacity 1s ease, transform 1s cubic-bezier(.22,1,.36,1);
    }
    .tk-zoom.tk-tampil { opacity: 1; transform: scale(1); }

    .tk-tunda-1 { transition-delay: .18s; }
    .tk-tunda-2 { transition-delay: .36s; }
    .tk-tunda-3 { transition-delay: .54s; }
    .tk-tunda-4 { transition-delay: .72s; }

    .tk-kartu {
        transition: transform .25s cubic-bezier(.22,1,.36,1), box-shadow .25s ease;
    }
    .tk-kartu:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 36px rgba(59,51,85,.15);
    }
    .tk-kartu__ikon {
        transition: transform .3s cubic-bezier(.22,1,.36,1);
    }
    .tk-kartu:hover .tk-kartu__ikon {
        transform: scale(1.12) rotate(-6deg);
    }
    .tk-program {
        transition: transform .25s cubic-bezier(.22,1,.36,1), box-shadow .25s ease;
    }
    .tk-program:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 32px rgba(59,51,85,.13);
    }
    .tk-ajakan {
        transition: box-shadow .3s ease;
    }
    .tk-ajakan:hover {
        box-shadow: 0 20px 50px rgba(255,197,61,.35);
    }

    @media (prefers-reduced-motion: reduce) {
        html { scroll-behavior: auto; }
        *, *::before, *::after {
            animation-duration: .001ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: .001ms !important;
        }
        .tk-naik, .tk-muncul, .tk-kiri, .tk-kanan, .tk-zoom {
            opacity: 1 !important;
            transform: none !important;
        }
    }
    </style>
</head>

<body>
<a class="tk-lewati" href="#konten">Lewati ke konten utama</a>

<!-- ============================ HEADER ============================ -->
<header class="tk-header" id="header">
    <div class="tk-wadah tk-header__isi">
        <a class="tk-header__logo" href="index.php">
            <img src="assets/templates/media/logos/logo-cbim.png" alt="Logo TK Kristen Citra Bangsa">
            <span class="tk-header__nama">
                TK Kristen Citra Bangsa
                <small>Yayasan Citra Bina Insan Mandiri</small>
            </span>
        </a>

        <nav class="tk-nav" id="nav" aria-label="Menu utama">
            <a href="index.php">Beranda</a>
            <a href="profile.php">Profil</a>
            <a href="program.php" aria-current="page">Program</a>
            <a href="pendaftaran.php">Pendaftaran</a>
        </nav>

        <div class="tk-header__aksi">
            <a href="login.php" class="tk-tombol tk-tombol--kedua">Masuk</a>
            <button class="tk-burger" id="burger" aria-label="Buka menu" aria-expanded="false" aria-controls="nav">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>

<main id="konten">

<!-- ============================ HERO ============================ -->
<section class="tk-hero">
    <svg class="tk-awan tk-awan--1" viewBox="0 0 120 54" aria-hidden="true"><path d="M22 54c-12 0-22-8-22-19S10 16 22 16c3-9 12-16 22-16 12 0 22 8 25 19 12 1 21 9 21 19 0 9-9 16-21 16H22z"/></svg>
    <svg class="tk-awan tk-awan--2" viewBox="0 0 120 54" aria-hidden="true"><path d="M22 54c-12 0-22-8-22-19S10 16 22 16c3-9 12-16 22-16 12 0 22 8 25 19 12 1 21 9 21 19 0 9-9 16-21 16H22z"/></svg>

    <div class="tk-wadah tk-hero__teks">
        <h1>Program Pendidikan</h1>
        <p class="tk-hero__sub">
            Kurikulum terpadu, kegiatan harian, dan ekstrakurikuler yang membuat anak belajar tanpa merasa belajar.
        </p>
    </div>

    <svg class="tk-bukit" viewBox="0 0 1200 210" preserveAspectRatio="none" aria-hidden="true">
        <path d="M0 118c150-34 260 14 400 8s210-46 360-38 190 46 290 40 150-22 150-22v104H0z" fill="#8FD3A3"/>
        <g fill="#57B979">
            <circle cx="150" cy="150" r="30"/><rect x="145" y="150" width="10" height="34"/>
            <circle cx="1010" cy="158" r="24"/><rect x="1006" y="158" width="8" height="28"/>
        </g>
        <path d="M0 158c170-24 300 18 470 12s250-32 400-24 180 30 330 24v40H0z" fill="#57B979"/>
    </svg>
</section>

<!-- ============================ KURIKULUM ============================ -->
<section class="tk-bagian">
    <div class="tk-wadah" style="max-width:800px">
        <div class="tk-judul-bagian tk-judul-bagian--tengah tk-naik">
            <h2>Kurikulum Terpadu</h2>
            <svg class="tk-coret" viewBox="0 0 148 12" aria-hidden="true"><path d="M3 8c22-6 44 3 66-2s52 5 76-2" stroke="#FFC53D" stroke-width="7" stroke-linecap="round" fill="none"/></svg>
        </div>
        <p style="text-align:center; margin-inline:auto;">
            Kami menerapkan kurikulum nasional yang dipadukan dengan pendekatan belajar melalui bermain.
            Metode ini dirancang untuk menstimulasi perkembangan kognitif, motorik, sosial, dan emosional
            anak secara seimbang.
        </p>
        <p style="text-align:center; margin-inline:auto; margin-bottom:0;">
            Setiap materi pembelajaran disisipi dengan penanaman nilai-nilai karakter dasar agar anak tidak
            hanya cerdas secara akademik, tetapi juga memiliki budi pekerti yang baik.
        </p>
    </div>
</section>

<svg class="tk-gunting" viewBox="0 0 1200 34" preserveAspectRatio="none" aria-hidden="true" style="color:var(--kertas-tua)">
    <path d="M0 20q25-18 50 0t50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0V34H0z" fill="currentColor"/>
</svg>

<!-- ============================ KEGIATAN HARIAN ============================ -->
<section class="tk-bagian tk-bagian--kertas-tua">
    <div class="tk-wadah">
        <div class="tk-judul-bagian tk-judul-bagian--tengah tk-naik">
            <h2>Kegiatan Harian</h2>
            <svg class="tk-coret" viewBox="0 0 148 12" aria-hidden="true"><path d="M3 8c22-6 44 3 66-2s52 5 76-2" stroke="#2E9BD6" stroke-width="7" stroke-linecap="round" fill="none"/></svg>
            <p>Rutinitas menyenangkan dari pagi hingga siang.</p>
        </div>

        <div class="tk-grid-4">
            <article class="tk-program tk-program--hijau tk-program--tengah tk-muncul tk-tunda-1">
                <span class="tk-program__waktu">07.30 – 08.00</span>
                <h3>Penyambutan</h3>
                <p>Bermain bebas dan persiapan baris sebelum masuk kelas.</p>
            </article>

            <article class="tk-program tk-program--biru tk-program--tengah tk-muncul tk-tunda-2">
                <span class="tk-program__waktu">08.00 – 09.30</span>
                <h3>Kegiatan Inti 1</h3>
                <p>Berdoa bersama, bernyanyi, dan pengenalan materi dasar.</p>
            </article>

            <article class="tk-program tk-program--tengah tk-muncul tk-tunda-3">
                <span class="tk-program__waktu">09.30 – 10.00</span>
                <h3>Istirahat</h3>
                <p>Makan bekal bersama dan bermain di taman terbuka.</p>
            </article>

            <article class="tk-program tk-program--merah tk-program--tengah tk-muncul tk-tunda-4">
                <span class="tk-program__waktu">10.00 – 11.30</span>
                <h3>Kegiatan Inti 2</h3>
                <p>Aktivitas motorik halus, ulasan materi, dan persiapan pulang.</p>
            </article>
        </div>
    </div>
</section>

<svg class="tk-gunting" viewBox="0 0 1200 34" preserveAspectRatio="none" aria-hidden="true" style="color:#fff">
    <path d="M0 20q25-18 50 0t50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0V34H0z" fill="currentColor"/>
</svg>

<!-- ============================ EKSTRAKURIKULER ============================ -->
<section class="tk-bagian tk-bagian--putih">
    <div class="tk-wadah">
        <div class="tk-judul-bagian tk-judul-bagian--tengah tk-naik">
            <h2>Ekstrakurikuler</h2>
            <svg class="tk-coret" viewBox="0 0 148 12" aria-hidden="true"><path d="M3 8c22-6 44 3 66-2s52 5 76-2" stroke="#EE5D4E" stroke-width="7" stroke-linecap="round" fill="none"/></svg>
            <p>Kegiatan tambahan yang mengasah bakat dan minat anak.</p>
        </div>

        <div class="tk-grid-3">
            <article class="tk-kartu tk-kartu--tengah tk-muncul tk-tunda-1">
                <div class="tk-kartu__ikon tk-kartu__ikon--hijau">
                    <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="#57B979" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="13.5" cy="6.5" r="2.5"/><path d="M17 13c-2-1-4-1-7 0l-3 8"/><path d="m9 7-4 9 3 1"/><path d="m14 13 5 8"/>
                    </svg>
                </div>
                <h3>Seni Lukis &amp; Kriya</h3>
                <p>Mengembangkan imajinasi dan kreativitas anak melalui warna dan bentuk.</p>
            </article>

            <article class="tk-kartu tk-kartu--tengah tk-muncul tk-tunda-2">
                <div class="tk-kartu__ikon tk-kartu__ikon--kuning">
                    <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="#E0A81E" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                        <circle cx="7" cy="18" r="3"/><circle cx="18" cy="15" r="3"/><path d="M10 18V5l11-2v12"/>
                    </svg>
                </div>
                <h3>Tari &amp; Musik</h3>
                <p>Melatih kepekaan nada, ritme, dan koordinasi gerak tubuh anak.</p>
            </article>

            <article class="tk-kartu tk-kartu--tengah tk-muncul tk-tunda-3">
                <div class="tk-kartu__ikon tk-kartu__ikon--biru">
                    <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="#2E9BD6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="9"/><path d="M3.5 9.5c5 1.5 12 1.5 17 0M12 3c-3 5-3 13 0 18M12 3c3 5 3 13 0 18"/>
                    </svg>
                </div>
                <h3>Bahasa Asing Dasar</h3>
                <p>Pengenalan kosakata bahasa Inggris dengan metode lagu dan permainan.</p>
            </article>
        </div>
    </div>
</section>

<!-- ============================ AJAKAN ============================ -->
<section style="background:var(--kertas); padding-bottom:0">
    <div class="tk-wadah">
        <div class="tk-ajakan tk-zoom">
            <h2>Tertarik mendaftarkan si kecil?</h2>
            <p>Pendaftaran murid baru sudah dibuka. Isi formulir dalam beberapa menit.</p>
            <a href="pendaftaran.php" class="tk-tombol tk-tombol--utama">Daftar sekarang</a>
        </div>
    </div>
</section>

</main>

<!-- ============================ FOOTER ============================ -->
<footer class="tk-footer">
    <div class="tk-wadah">
        <div class="tk-footer__grid">
            <div>
                <h4>Alamat sekolah</h4>
                <p>Kupang, Nusa Tenggara Timur.<br>Alamat lengkap dan nomor telepon menyusul.</p>
                <p style="margin-bottom:0">Jam sekolah: Senin–Jumat, 07.30–11.30 WITA.</p>
            </div>

            <div>
                <h4>Unit lain</h4>
                <a href="https://ucb.ac.id/" target="_blank" rel="noopener">Universitas Citra Bangsa</a>
                <a href="https://smakcitrabangsa.sch.id/" target="_blank" rel="noopener">SMA K Citra Bangsa</a>
                <a href="http://smpkcitrabangsa.com/" target="_blank" rel="noopener">SMP K Citra Bangsa</a>
                <a href="https://citrabangsa.net/web/index.php/profil-tk-paud-kristen-citra-bangsa/" target="_blank" rel="noopener">SD K Citra Bangsa</a>
                <a href="https://citrabangsa.net/web/index.php/profil-tk-paud-kristen-citra-bangsa/" target="_blank" rel="noopener">TK K Citra Bangsa</a>
            </div>

            <div>
                <h4>Ikuti kami</h4>
                <a href="https://www.facebook.com/profile.php?id=100086189573438" target="_blank" rel="noopener">
                    <img class="tk-ikon-sosial" src="assets/templates/media/svg/brand-logos/facebook-4.svg" alt=""> Citra Bina Insan Mandiri
                </a>
                <a href="https://www.youtube.com/@CBIMYayasan" target="_blank" rel="noopener">
                    <img class="tk-ikon-sosial" src="assets/templates/media/svg/brand-logos/youtube-play.svg" alt=""> Yayasan CBIM
                </a>
                <a href="https://www.instagram.com/yayasan_cbim?igsh=MTNwamlmZnl1dmo2" target="_blank" rel="noopener">
                    <img class="tk-ikon-sosial" src="assets/templates/media/svg/brand-logos/instagram-2-1.svg" alt=""> yayasan_cbim
                </a>
            </div>
        </div>

        <div class="tk-footer__bawah">
            <a href="index.php" style="margin:0"><img src="assets/templates/media/logos/logo-cbim.png" alt="Logo Yayasan CBIM"></a>
            <span>&copy; <?php echo date('Y'); ?> Yayasan Citra Bina Insan Mandiri — Kupang. Seluruh hak cipta dilindungi.</span>
        </div>
    </div>
</footer>

<button class="tk-keatas" id="keatas" aria-label="Kembali ke atas">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M12 19V5"/><path d="m5 12 7-7 7 7"/>
    </svg>
</button>

<script>
(function () {
    var burger = document.getElementById('burger');
    var nav = document.getElementById('nav');
    burger.addEventListener('click', function () {
        var buka = nav.classList.toggle('terbuka');
        burger.setAttribute('aria-expanded', buka);
        burger.setAttribute('aria-label', buka ? 'Tutup menu' : 'Buka menu');
    });

    var header = document.getElementById('header');
    var keatas = document.getElementById('keatas');
    window.addEventListener('scroll', function () {
        header.classList.toggle('melayang', window.scrollY > 12);
        keatas.classList.toggle('tampil', window.scrollY > 500);
    }, { passive: true });

    keatas.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    /* ---------- Animasi Scroll (Intersection Observer) ---------- */
    var animasiKelas = '.tk-naik, .tk-muncul, .tk-kiri, .tk-kanan, .tk-zoom';
    var gerakOk = !window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (gerakOk && 'IntersectionObserver' in window) {
        var pengamat = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('tk-tampil');
                    pengamat.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        document.querySelectorAll(animasiKelas).forEach(function (el) {
            pengamat.observe(el);
        });
    } else {
        document.querySelectorAll(animasiKelas).forEach(function (el) {
            el.classList.add('tk-tampil');
        });
    }
})();
</script>
</body>
</html>