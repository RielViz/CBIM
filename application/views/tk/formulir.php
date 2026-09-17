<?php require_once __DIR__ . '/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Pendaftaran — TK Kristen Citra Bangsa</title>
    <link rel="shortcut icon" href="assets/templates/media/logos/logo-cbim.png" />
    <meta name="description" content="Formulir pendaftaran siswa baru TK Kristen Citra Bangsa, Kupang." />
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
    .tk-tombol--kuning {
        background: var(--kuning);
        color: #4A3200;
        box-shadow: 0 6px 0 #D69F1E;
    }
    .tk-tombol--kuning:hover,
    .tk-tombol--kuning:focus-visible {
        transform: translateY(2px);
        box-shadow: 0 4px 0 #D69F1E;
    }
    .tk-tombol--biru {
        background: var(--biru);
        color: #fff;
        box-shadow: 0 6px 0 #1D7BAF;
    }
    .tk-tombol--biru:hover,
    .tk-tombol--biru:focus-visible {
        transform: translateY(2px);
        box-shadow: 0 4px 0 #1D7BAF;
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
       BAGIAN
       ============================================================ */
    .tk-bagian { padding: clamp(56px, 8vw, 96px) 0; }

    /* ============================================================
       FORMULIR
       ============================================================ */
    .tk-formulir {
        background: #fff;
        border-radius: var(--radius-l);
        padding: clamp(28px, 5vw, 50px);
        box-shadow: 0 10px 0 rgba(59,51,85,.07);
        max-width: 860px;
        margin-inline: auto;
    }

    .tk-formulir__judul {
        font-family: var(--font-judul);
        font-weight: 700;
        font-size: 1.2rem;
        color: var(--tinta);
        padding-bottom: 12px;
        margin-bottom: 24px;
        border-bottom: 3px dashed rgba(59,51,85,.08);
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .tk-formulir__judul svg { flex-shrink: 0; }

    .tk-formulir__grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 20px;
        margin-bottom: 36px;
    }
    .tk-formulir__grid--lebar { grid-template-columns: 1fr; }

    .tk-kolom label {
        display: block;
        font-family: var(--font-judul);
        font-weight: 600;
        font-size: .92rem;
        color: var(--tinta-muda);
        margin-bottom: 7px;
    }

    .tk-kolom input[type="text"],
    .tk-kolom input[type="date"],
    .tk-kolom input[type="tel"],
    .tk-kolom select,
    .tk-kolom textarea {
        width: 100%;
        padding: 12px 16px;
        font-family: var(--font-isi);
        font-size: 1rem;
        color: var(--tinta);
        background: var(--kertas);
        border: 2.5px solid rgba(59,51,85,.10);
        border-radius: var(--radius-m);
        transition: border-color .15s ease, box-shadow .15s ease;
    }
    .tk-kolom input:focus,
    .tk-kolom select:focus,
    .tk-kolom textarea:focus {
        outline: none;
        border-color: var(--biru);
        box-shadow: 0 0 0 4px rgba(46,155,214,.15);
    }
    .tk-kolom input::placeholder,
    .tk-kolom textarea::placeholder {
        color: rgba(59,51,85,.35);
    }
    .tk-kolom textarea { resize: vertical; min-height: 90px; }
    .tk-kolom select { cursor: pointer; }

    /* Upload file */
    .tk-kolom input[type="file"] {
        width: 100%;
        padding: 12px 16px;
        font-family: var(--font-isi);
        font-size: .95rem;
        color: var(--tinta-muda);
        background: var(--kertas);
        border: 2.5px dashed rgba(59,51,85,.14);
        border-radius: var(--radius-m);
        cursor: pointer;
    }
    .tk-kolom input[type="file"]::file-selector-button {
        font-family: var(--font-judul);
        font-weight: 700;
        font-size: .88rem;
        color: var(--biru);
        background: #D6EDFA;
        border: none;
        padding: 8px 18px 9px;
        border-radius: 999px;
        cursor: pointer;
        margin-right: 12px;
        transition: background .12s ease;
    }
    .tk-kolom input[type="file"]::file-selector-button:hover {
        background: #B8DFFA;
    }

    /* Aksi formulir */
    .tk-formulir__aksi {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        gap: 14px;
        padding-top: 28px;
        border-top: 3px dashed rgba(59,51,85,.08);
    }
    .tk-formulir__aksi-kanan {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
    }

    @media (max-width: 640px) {
        .tk-formulir__aksi { flex-direction: column; }
        .tk-formulir__aksi > * { width: 100%; }
        .tk-formulir__aksi .tk-tombol { width: 100%; justify-content: center; }
        .tk-formulir__aksi-kanan { width: 100%; flex-direction: column; }
    }

    /* ============================================================
       FOOTER
       ============================================================ */
    .tk-footer {
        background: var(--malam);
        color: #fff;
        padding: 60px 0 0;
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

    .tk-zoom {
        opacity: 0;
        transform: scale(.88);
        transition: opacity 1s ease, transform 1s cubic-bezier(.22,1,.36,1);
    }
    .tk-zoom.tk-tampil { opacity: 1; transform: scale(1); }

    .tk-tunda-1 { transition-delay: .25s; }
    .tk-tunda-2 { transition-delay: .5s; }
    .tk-tunda-3 { transition-delay: .75s; }

    /* Form section hover */
    .tk-formulir__judul {
        transition: transform .2s ease;
    }
    .tk-formulir__judul:hover {
        transform: translateX(4px);
    }

    @media (prefers-reduced-motion: reduce) {
        html { scroll-behavior: auto; }
        *, *::before, *::after {
            animation-duration: .001ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: .001ms !important;
        }
        .tk-naik, .tk-muncul, .tk-zoom {
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
            <a href="program.php">Program</a>
            <a href="pendaftaran.php" aria-current="page">Pendaftaran</a>
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
        <h1>Formulir Pendaftaran</h1>
        <p class="tk-hero__sub">
            Silakan lengkapi data calon siswa dengan benar. Semua data dijaga kerahasiaannya.
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

<!-- ============================ FORMULIR ============================ -->
<section class="tk-bagian">
    <div class="tk-wadah">
        <form action="#" method="POST" enctype="multipart/form-data" class="tk-formulir tk-naik">

            <!-- Data Calon Siswa -->
            <div class="tk-formulir__judul tk-naik tk-tunda-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--biru)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 4-7 8-7s8 3 8 7"/>
                </svg>
                Data Calon Siswa
            </div>
            <div class="tk-formulir__grid">
                <div class="tk-kolom">
                    <label for="nama-lengkap">Nama Lengkap</label>
                    <input type="text" id="nama-lengkap" name="nama_lengkap" placeholder="Sesuai Akte Kelahiran">
                </div>
                <div class="tk-kolom">
                    <label for="nama-panggilan">Nama Panggilan</label>
                    <input type="text" id="nama-panggilan" name="nama_panggilan" placeholder="Contoh: Budi">
                </div>
                <div class="tk-kolom">
                    <label for="tempat-lahir">Tempat Lahir</label>
                    <input type="text" id="tempat-lahir" name="tempat_lahir" placeholder="Kota kelahiran">
                </div>
                <div class="tk-kolom">
                    <label for="tanggal-lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal-lahir" name="tanggal_lahir">
                </div>
                <div class="tk-kolom">
                    <label for="jenis-kelamin">Jenis Kelamin</label>
                    <select id="jenis-kelamin" name="jenis_kelamin">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="tk-kolom">
                    <label for="kelompok">Pilihan Kelompok</label>
                    <select id="kelompok" name="kelompok">
                        <option value="">Pilih Kelompok</option>
                        <option value="A">Kelompok A (Usia 4–5 Tahun)</option>
                        <option value="B">Kelompok B (Usia 5–6 Tahun)</option>
                    </select>
                </div>
            </div>

            <!-- Data Orang Tua -->
            <div class="tk-formulir__judul tk-naik tk-tunda-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--kuning)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M17.5 12.5c1.4-1.2 3.5-.4 3.5 1.3 0 1.6-2 3-3.5 4.2-1.5-1.2-3.5-2.6-3.5-4.2 0-1.7 2.1-2.5 3.5-1.3z"/>
                    <circle cx="9" cy="8" r="3.2"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/>
                </svg>
                Data Orang Tua / Wali
            </div>
            <div class="tk-formulir__grid">
                <div class="tk-kolom">
                    <label for="nama-ayah">Nama Ayah</label>
                    <input type="text" id="nama-ayah" name="nama_ayah">
                </div>
                <div class="tk-kolom">
                    <label for="nama-ibu">Nama Ibu</label>
                    <input type="text" id="nama-ibu" name="nama_ibu">
                </div>
                <div class="tk-kolom">
                    <label for="telepon">Nomor Telepon / WhatsApp</label>
                    <input type="tel" id="telepon" name="telepon" placeholder="081234567890">
                </div>
            </div>
            <div class="tk-formulir__grid tk-formulir__grid--lebar" style="margin-bottom:36px">
                <div class="tk-kolom">
                    <label for="alamat">Alamat Lengkap Tempat Tinggal</label>
                    <textarea id="alamat" name="alamat" rows="3"></textarea>
                </div>
            </div>

            <!-- Unggah Dokumen -->
            <div class="tk-formulir__judul tk-naik tk-tunda-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--hijau)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6"/><path d="m9 15 3-3 3 3"/>
                </svg>
                Unggah Persyaratan Dokumen
            </div>
            <div class="tk-formulir__grid">
                <div class="tk-kolom">
                    <label for="akte">Akte Kelahiran (PDF / JPG)</label>
                    <input type="file" id="akte" name="akte" accept=".pdf,.jpg,.jpeg,.png">
                </div>
                <div class="tk-kolom">
                    <label for="kk">Kartu Keluarga (PDF / JPG)</label>
                    <input type="file" id="kk" name="kk" accept=".pdf,.jpg,.jpeg,.png">
                </div>
            </div>

            <!-- Aksi -->
            <div class="tk-formulir__aksi">
                <a href="pendaftaran.php" class="tk-tombol tk-tombol--kedua">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
                    Kembali
                </a>
                <div class="tk-formulir__aksi-kanan">
                    <button type="button" class="tk-tombol tk-tombol--kuning">Simpan Draf</button>
                    <button type="submit" class="tk-tombol tk-tombol--utama">Kirim Pendaftaran</button>
                </div>
            </div>

        </form>
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
    var animasiKelas = '.tk-naik, .tk-muncul, .tk-zoom';
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