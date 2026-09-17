<?php require_once __DIR__ . '/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Masuk — TK Kristen Citra Bangsa</title>
    <link rel="shortcut icon" href="assets/templates/media/logos/logo-cbim.png" />
    <meta name="description" content="Halaman masuk untuk orang tua dan guru TK Kristen Citra Bangsa, Kupang." />
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
        color: var(--tinta);
        font-family: var(--font-isi);
        font-size: 17px;
        line-height: 1.65;
        -webkit-font-smoothing: antialiased;

        /* layar penuh — langit pagi */
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: linear-gradient(180deg, var(--langit) 0%, var(--langit-muda) 50%, #F3FBFF 80%, var(--kertas) 100%);
        position: relative;
        overflow-x: hidden;
        padding: 30px 20px;
    }

    h1, h2, h3, h4 {
        font-family: var(--font-judul);
        font-weight: 700;
        line-height: 1.15;
        margin: 0 0 .5em;
        letter-spacing: -.01em;
    }

    p { margin: 0 0 1rem; max-width: 66ch; }
    a { color: var(--biru); }
    img, svg { max-width: 100%; }

    :focus-visible {
        outline: 3px solid var(--ungu);
        outline-offset: 3px;
        border-radius: 6px;
    }

    /* ============================================================
       AWAN DEKORATIF
       ============================================================ */
    .tk-awan { position: fixed; z-index: 0; fill: #fff; opacity: .85; }
    .tk-awan--1 { top: 40px;  left: 4%;  width: 120px; }
    .tk-awan--2 { top: 100px; right: 6%; width: 90px; opacity: .6; }
    .tk-awan--3 { bottom: 180px; left: 12%; width: 70px; opacity: .5; }
    .tk-awan--4 { top: 220px; right: 22%; width: 60px; opacity: .4; }

    @media (max-width: 700px) {
        .tk-awan--2, .tk-awan--3, .tk-awan--4 { display: none; }
        .tk-awan--1 { width: 80px; top: 20px; opacity: .5; }
    }

    /* bukit di bawah layar */
    .tk-bukit-bawah {
        position: fixed;
        bottom: 0; left: 0; right: 0;
        z-index: 0;
        pointer-events: none;
    }

    /* ============================================================
       KARTU LOGIN
       ============================================================ */
    .tk-login {
        position: relative;
        z-index: 2;
        background: #fff;
        border-radius: var(--radius-l);
        padding: clamp(32px, 5vw, 48px);
        box-shadow: 0 14px 0 rgba(59,51,85,.08), 0 28px 60px rgba(59,51,85,.10);
        width: 100%;
        max-width: 440px;
        text-align: center;
    }

    .tk-login__logo {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        color: var(--tinta);
        margin-bottom: 8px;
    }
    .tk-login__logo img {
        height: 62px;
        width: auto;
    }
    .tk-login__nama {
        font-family: var(--font-judul);
        font-weight: 700;
        font-size: 1.15rem;
        line-height: 1.2;
    }
    .tk-login__nama small {
        display: block;
        font-family: var(--font-isi);
        font-weight: 600;
        font-size: .75rem;
        color: var(--tinta-muda);
    }

    .tk-login h2 {
        font-size: 1.6rem;
        margin-top: 18px;
        margin-bottom: 4px;
    }
    .tk-login__sub {
        color: var(--tinta-muda);
        font-size: .98rem;
        margin-bottom: 28px;
    }

    /* garis krayon */
    .tk-coret {
        display: block;
        width: 100px;
        height: 10px;
        margin: 0 auto 18px;
    }

    /* ============================================================
       FORM FIELDS
       ============================================================ */
    .tk-kolom {
        margin-bottom: 18px;
        text-align: left;
    }
    .tk-kolom label {
        display: block;
        font-family: var(--font-judul);
        font-weight: 600;
        font-size: .92rem;
        color: var(--tinta-muda);
        margin-bottom: 7px;
    }
    .tk-kolom input {
        width: 100%;
        padding: 13px 18px;
        font-family: var(--font-isi);
        font-size: 1rem;
        color: var(--tinta);
        background: var(--kertas);
        border: 2.5px solid rgba(59,51,85,.10);
        border-radius: var(--radius-m);
        transition: border-color .15s ease, box-shadow .15s ease;
    }
    .tk-kolom input:focus {
        outline: none;
        border-color: var(--biru);
        box-shadow: 0 0 0 4px rgba(46,155,214,.15);
    }
    .tk-kolom input::placeholder {
        color: rgba(59,51,85,.35);
    }

    /* password toggle wrapper */
    .tk-kolom__sandi {
        position: relative;
    }
    .tk-kolom__sandi input {
        padding-right: 50px;
    }
    .tk-kolom__lihat {
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        color: var(--tinta-muda);
        padding: 4px;
        border-radius: 8px;
        display: grid;
        place-items: center;
    }
    .tk-kolom__lihat:hover { color: var(--biru); }

    /* checkbox ingat saya */
    .tk-ingat {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 24px;
        font-size: .92rem;
    }
    .tk-ingat label {
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        color: var(--tinta-muda);
        font-weight: 600;
    }
    .tk-ingat input[type="checkbox"] {
        width: 20px;
        height: 20px;
        accent-color: var(--biru);
        border-radius: 6px;
        cursor: pointer;
    }
    .tk-ingat a {
        color: var(--biru);
        text-decoration: none;
        font-weight: 600;
        font-size: .9rem;
    }
    .tk-ingat a:hover { text-decoration: underline; }

    /* ============================================================
       TOMBOL
       ============================================================ */
    .tk-tombol {
        display: inline-flex;
        align-items: center;
        justify-content: center;
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
        width: 100%;
    }
    .tk-tombol--utama:hover,
    .tk-tombol--utama:focus-visible {
        transform: translateY(2px);
        box-shadow: 0 4px 0 #C7402F;
    }

    /* ============================================================
       PEMISAH "ATAU"
       ============================================================ */
    .tk-atau {
        display: flex;
        align-items: center;
        gap: 16px;
        margin: 22px 0;
        color: var(--tinta-muda);
        font-size: .88rem;
        font-weight: 600;
    }
    .tk-atau::before,
    .tk-atau::after {
        content: "";
        flex: 1;
        height: 2px;
        background: rgba(59,51,85,.08);
        border-radius: 1px;
    }

    /* tombol daftar sekunder */
    .tk-tombol--daftar {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        font-family: var(--font-judul);
        font-weight: 700;
        font-size: 1.05rem;
        text-decoration: none;
        padding: 13px 30px 15px;
        border-radius: 999px;
        background: #fff;
        color: var(--tinta);
        border: 2.5px solid rgba(59,51,85,.12);
        cursor: pointer;
        transition: transform .12s ease, border-color .12s ease, background .12s ease;
    }
    .tk-tombol--daftar:hover {
        border-color: var(--kuning);
        background: #FFFDF5;
        transform: translateY(-1px);
    }

    /* ============================================================
       LINK KEMBALI
       ============================================================ */
    .tk-kembali {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 24px;
        font-family: var(--font-judul);
        font-weight: 600;
        font-size: .95rem;
        color: var(--tinta-muda);
        text-decoration: none;
        transition: color .12s ease;
    }
    .tk-kembali:hover { color: var(--biru); }

    /* ============================================================
       FOOTER MINI
       ============================================================ */
    .tk-footer-mini {
        position: relative;
        z-index: 2;
        margin-top: 28px;
        text-align: center;
        color: var(--tinta-muda);
        font-size: .82rem;
        opacity: .7;
    }

    /* ============================================================
       HORMATI PREFERENSI GERAK
       ============================================================ */
    @media (prefers-reduced-motion: reduce) {
        html { scroll-behavior: auto; }
        *, *::before, *::after {
            animation-duration: .001ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: .001ms !important;
        }
    }
    </style>
</head>

<body>

<!-- Awan dekoratif -->
<svg class="tk-awan tk-awan--1" viewBox="0 0 120 54" aria-hidden="true"><path d="M22 54c-12 0-22-8-22-19S10 16 22 16c3-9 12-16 22-16 12 0 22 8 25 19 12 1 21 9 21 19 0 9-9 16-21 16H22z"/></svg>
<svg class="tk-awan tk-awan--2" viewBox="0 0 120 54" aria-hidden="true"><path d="M22 54c-12 0-22-8-22-19S10 16 22 16c3-9 12-16 22-16 12 0 22 8 25 19 12 1 21 9 21 19 0 9-9 16-21 16H22z"/></svg>
<svg class="tk-awan tk-awan--3" viewBox="0 0 120 54" aria-hidden="true"><path d="M22 54c-12 0-22-8-22-19S10 16 22 16c3-9 12-16 22-16 12 0 22 8 25 19 12 1 21 9 21 19 0 9-9 16-21 16H22z"/></svg>
<svg class="tk-awan tk-awan--4" viewBox="0 0 120 54" aria-hidden="true"><path d="M22 54c-12 0-22-8-22-19S10 16 22 16c3-9 12-16 22-16 12 0 22 8 25 19 12 1 21 9 21 19 0 9-9 16-21 16H22z"/></svg>

<!-- Bukit di bawah -->
<svg class="tk-bukit-bawah" viewBox="0 0 1200 160" preserveAspectRatio="none" aria-hidden="true">
    <path d="M0 80c150-30 260 14 400 8s210-40 360-34 190 40 290 36 150-18 150-18v88H0z" fill="#8FD3A3"/>
    <g fill="#57B979">
        <circle cx="180" cy="110" r="22"/><rect x="176" y="110" width="8" height="24"/>
        <circle cx="900" cy="116" r="18"/><rect x="897" y="116" width="6" height="20"/>
        <circle cx="550" cy="108" r="15"/><rect x="548" y="108" width="5" height="18"/>
    </g>
    <path d="M0 110c170-20 300 16 470 10s250-28 400-20 180 26 330 20v40H0z" fill="#57B979"/>
</svg>

<!-- ========================== KARTU LOGIN ========================== -->
<div class="tk-login">
    <a href="index.php" class="tk-login__logo">
        <img src="assets/templates/media/logos/logo-cbim.png" alt="Logo TK Kristen Citra Bangsa">
        <span class="tk-login__nama">
            TK Kristen Citra Bangsa
            <small>Yayasan Citra Bina Insan Mandiri</small>
        </span>
    </a>

    <h2>Selamat datang!</h2>
    <svg class="tk-coret" viewBox="0 0 148 12" aria-hidden="true"><path d="M3 8c22-6 44 3 66-2s52 5 76-2" stroke="#FFC53D" stroke-width="7" stroke-linecap="round" fill="none"/></svg>
    <p class="tk-login__sub">Masuk ke akun Anda untuk melanjutkan.</p>

    <form action="#" method="POST" autocomplete="on">
        <div class="tk-kolom">
            <label for="email">Email atau Nomor Telepon</label>
            <input type="text" id="email" name="email" placeholder="contoh@email.com" autocomplete="username" required>
        </div>

        <div class="tk-kolom">
            <label for="sandi">Kata Sandi</label>
            <div class="tk-kolom__sandi">
                <input type="password" id="sandi" name="sandi" placeholder="Masukkan kata sandi" autocomplete="current-password" required>
                <button type="button" class="tk-kolom__lihat" id="toggle-sandi" aria-label="Tampilkan kata sandi">
                    <svg id="ikon-mata" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
                    </svg>
                    <svg id="ikon-mata-tutup" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none">
                        <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/><path d="m1 1 22 22"/><path d="M14.12 14.12a3 3 0 1 1-4.24-4.24"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="tk-ingat">
            <label>
                <input type="checkbox" name="ingat" value="1">
                Ingat saya
            </label>
            <a href="#">Lupa kata sandi?</a>
        </div>

        <button type="submit" class="tk-tombol tk-tombol--utama">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg>
            Masuk
        </button>
    </form>

    <div class="tk-atau">atau</div>

    <a href="pendaftaran.php" class="tk-tombol--daftar">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--kuning)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
        Daftar sebagai siswa baru
    </a>

    <a href="index.php" class="tk-kembali">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
        Kembali ke Beranda
    </a>
</div>

<p class="tk-footer-mini">&copy; <?php echo date('Y'); ?> Yayasan Citra Bina Insan Mandiri — Kupang</p>

<script>
(function () {
    /* Toggle tampil/sembunyikan kata sandi */
    var toggle = document.getElementById('toggle-sandi');
    var sandi = document.getElementById('sandi');
    var ikonMata = document.getElementById('ikon-mata');
    var ikonTutup = document.getElementById('ikon-mata-tutup');

    toggle.addEventListener('click', function () {
        var tampil = sandi.type === 'password';
        sandi.type = tampil ? 'text' : 'password';
        ikonMata.style.display = tampil ? 'none' : 'block';
        ikonTutup.style.display = tampil ? 'block' : 'none';
        toggle.setAttribute('aria-label', tampil ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
    });
})();
</script>
</body>
</html>
