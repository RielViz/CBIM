<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>TK Kristen Citra Bangsa — Bermain, Belajar, Tumbuh Bersama</title>
    <link rel="shortcut icon" href="assets/templates/media/logos/logo-cbim.png" />
    <meta name="description" content="TK Kristen Citra Bangsa, Kupang. Kelas kecil, guru yang hafal nama setiap anak, dan hari-hari yang penuh main. Di bawah naungan Yayasan Citra Bina Insan Mandiri (YCBIM)." />
    <meta name="keywords" content="TK Kristen Citra Bangsa, TK Kupang, PAUD Kupang, pendaftaran TK, Yayasan Citra Bina Insan Mandiri, YCBIM" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
    /* ============================================================
       TOKEN DESAIN
       ============================================================ */
    :root {
        --kertas:      #FFF7EC;   /* kertas gambar */
        --kertas-tua:  #FBEBD6;   /* kertas lebih tua, untuk selang-seling */
        --langit:      #BFE7FF;
        --langit-muda: #E6F5FF;
        --tinta:       #3B3355;   /* warna teks utama, ungu tua */
        --tinta-muda:  #6B6285;
        --kuning:      #FFC53D;
        --merah:       #EE5D4E;
        --biru:        #2E9BD6;
        --hijau:       #57B979;
        --ungu:        #9B7EDE;
        --malam:       #2A2450;   /* footer */

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
       TOMBOL — bentuk permen, bayangan padat seperti stiker tebal
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
       HERO — pemandangan langit, bukit, dan matahari
       ============================================================ */
    .tk-hero {
        position: relative;
        background: linear-gradient(180deg, var(--langit) 0%, var(--langit-muda) 62%, #F3FBFF 100%);
        overflow: hidden;
        padding: clamp(48px, 8vw, 90px) 0 0;
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
    .tk-hero__aksi { display: flex; flex-wrap: wrap; gap: 14px; justify-content: center; }

    .tk-matahari { position: absolute; top: 30px; right: 6%; width: 130px; height: 130px; z-index: 1; }
    .tk-matahari__sinar { transform-origin: 50% 50%; animation: putar 90s linear infinite; }
    @keyframes putar { to { transform: rotate(360deg); } }

    .tk-awan { position: absolute; z-index: 1; fill: #fff; opacity: .9; }
    .tk-awan--1 { top: 60px;  left: 4%;  width: 120px; }
    .tk-awan--2 { top: 150px; left: 26%; width: 78px; opacity: .7; }
    .tk-awan--3 { top: 96px;  right: 30%; width: 96px; opacity: .75; }

    .tk-bukit { display: block; width: 100%; margin-top: -20px; position: relative; z-index: 2; }

    @media (max-width: 700px) {
        .tk-matahari { width: 82px; height: 82px; top: 14px; right: 5%; }
        .tk-awan--2, .tk-awan--3 { display: none; }
        .tk-awan--1 { width: 74px; top: 130px; opacity: .65; }
    }

    /* ============================================================
       TEPI KERTAS BERGUNTING (pengganti kurva korporat)
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

    /* garis krayon di bawah judul */
    .tk-coret { display: block; width: 148px; height: 12px; margin: 6px 0 18px; }
    .tk-judul-bagian--tengah .tk-coret { margin-inline: auto; }

    /* ============================================================
       KEUNGGULAN — tiga kartu kertas
       ============================================================ */
    .tk-grid-3 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
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

    /* ============================================================
       TENTANG — catatan yang ditempel selotip
       ============================================================ */
    .tk-tentang {
        display: grid;
        grid-template-columns: 1.15fr .85fr;
        gap: 52px;
        align-items: center;
    }
    @media (max-width: 860px) { .tk-tentang { grid-template-columns: 1fr; gap: 40px; } }

    .tk-tempel {
        position: relative;
        background: #fff;
        border-radius: 8px;
        padding: 34px 30px 30px;
        transform: rotate(-1.2deg);
        box-shadow: 0 14px 30px rgba(59,51,85,.12);
    }
    .tk-tempel::before {
        content: "";
        position: absolute;
        top: -13px; left: 50%;
        width: 128px; height: 30px;
        transform: translateX(-50%) rotate(-2.5deg);
        background: rgba(255,197,61,.62);
        border-left: 1px dashed rgba(0,0,0,.10);
        border-right: 1px dashed rgba(0,0,0,.10);
    }
    .tk-tempel p:last-child { margin-bottom: 0; }

    .tk-angka {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
        margin-top: 30px;
    }
    .tk-angka div {
        background: var(--kertas);
        border-radius: var(--radius-m);
        padding: 20px 22px;
    }
    .tk-angka strong {
        display: block;
        font-family: var(--font-judul);
        font-size: 2rem;
        line-height: 1.1;
        color: var(--merah);
    }
    .tk-angka span { font-size: .95rem; color: var(--tinta-muda); }

    /* ============================================================
       JADWAL HARIAN — interaktif
       ============================================================ */
    .tk-jam {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        margin-bottom: 34px;
    }
    .tk-jam button {
        font-family: var(--font-judul);
        font-weight: 700;
        font-size: 1.02rem;
        color: var(--tinta);
        background: #fff;
        border: 2.5px solid rgba(59,51,85,.10);
        border-radius: 999px;
        padding: 9px 20px 11px;
        cursor: pointer;
        transition: transform .12s ease, background .12s ease, border-color .12s ease;
    }
    .tk-jam button:hover { transform: translateY(-2px); border-color: var(--biru); }
    .tk-jam button[aria-selected="true"] {
        background: var(--biru);
        border-color: var(--biru);
        color: #fff;
    }

    .tk-panel {
        display: grid;
        grid-template-columns: 130px 1fr;
        gap: 32px;
        align-items: center;
        background: #fff;
        border-radius: var(--radius-l);
        padding: 38px 40px;
        box-shadow: 0 10px 0 rgba(59,51,85,.07);
        max-width: 800px;
        margin-inline: auto;
    }
    .tk-panel[hidden] { display: none; }
    .tk-panel h3 { margin-bottom: .3em; }
    .tk-panel p { margin-bottom: 0; color: var(--tinta-muda); }
    .tk-panel__doodle {
        width: 130px; height: 130px;
        border-radius: 50%;
        display: grid; place-items: center;
        background: var(--kertas);
    }
    @media (max-width: 640px) {
        .tk-panel { grid-template-columns: 1fr; text-align: center; padding: 30px 24px; gap: 20px; }
        .tk-panel__doodle { margin-inline: auto; width: 104px; height: 104px; }
        .tk-panel p { max-width: none; }
    }

    /* ============================================================
       PROGRAM
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
    .tk-program p { color: var(--tinta-muda); margin-bottom: 0; }
    .tk-program ul { margin: 0; padding-left: 20px; color: var(--tinta-muda); }
    .tk-program li { margin-bottom: 6px; }

    /* ============================================================
       PAPAN CORET-CORET
       ============================================================ */
    .tk-coretan { max-width: 720px; margin-inline: auto; text-align: center; }
    .tk-papan {
        background: #fff;
        border-radius: var(--radius-m);
        box-shadow: 0 10px 0 rgba(59,51,85,.07);
        padding: 14px;
        margin-top: 26px;
    }
    .tk-papan canvas {
        display: block;
        width: 100%;
        height: 300px;
        border-radius: 14px;
        background: var(--kertas);
        touch-action: none;
        cursor: crosshair;
    }
    .tk-krayon {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        align-items: center;
        margin-top: 16px;
    }
    .tk-krayon__warna {
        width: 40px; height: 40px;
        border-radius: 50%;
        border: 3px solid transparent;
        cursor: pointer;
        padding: 0;
        transition: transform .12s ease;
    }
    .tk-krayon__warna:hover { transform: scale(1.12); }
    .tk-krayon__warna[aria-pressed="true"] {
        border-color: var(--tinta);
        transform: scale(1.12);
    }
    .tk-hapus {
        font-family: var(--font-judul);
        font-weight: 700;
        background: var(--kertas-tua);
        color: var(--tinta);
        border: none;
        border-radius: 999px;
        padding: 9px 20px 11px;
        cursor: pointer;
        margin-left: 6px;
    }
    .tk-hapus:hover { background: var(--kuning); }

    /* ============================================================
       TESTIMONI
       ============================================================ */
    .tk-testimoni {
        max-width: 640px;
        margin-inline: auto;
        text-align: center;
    }
    .tk-testimoni blockquote {
        margin: 0 0 18px;
        font-family: var(--font-judul);
        font-weight: 500;
        font-size: clamp(1.25rem, 2.6vw, 1.6rem);
        line-height: 1.45;
        color: var(--tinta);
    }
    .tk-testimoni cite { font-style: normal; font-weight: 700; color: var(--tinta-muda); }

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

    /* Staggered delays */
    .tk-tunda-1 { transition-delay: .18s; }
    .tk-tunda-2 { transition-delay: .36s; }
    .tk-tunda-3 { transition-delay: .54s; }
    .tk-tunda-4 { transition-delay: .72s; }
    .tk-tunda-5 { transition-delay: .9s; }
    .tk-tunda-6 { transition-delay: 1.08s; }

    /* Hover glow pada kartu */
    .tk-kartu {
        transition: transform .25s cubic-bezier(.22,1,.36,1),
                    box-shadow .25s ease;
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

    /* Hover pada program cards */
    .tk-program {
        transition: transform .25s cubic-bezier(.22,1,.36,1),
                    box-shadow .25s ease;
    }
    .tk-program:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 32px rgba(59,51,85,.13);
    }

    /* Floating decorations (terinspirasi TK 2 floating-badge) */
    @keyframes tk-melayang {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-14px); }
    }
    @keyframes tk-melayang-lambat {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-10px) rotate(8deg); }
    }
    @keyframes tk-kedip {
        0%, 100% { opacity: 1; }
        50% { opacity: .5; }
    }
    .tk-dekorasi {
        position: absolute;
        pointer-events: none;
        z-index: 1;
        font-size: 2rem;
        filter: drop-shadow(0 4px 8px rgba(0,0,0,.12));
    }
    .tk-dekorasi--1 {
        top: 30px; left: 8%;
        animation: tk-melayang 3.5s ease-in-out infinite;
    }
    .tk-dekorasi--2 {
        top: 80px; right: 10%;
        animation: tk-melayang-lambat 4s ease-in-out .5s infinite;
        font-size: 1.6rem;
    }
    .tk-dekorasi--3 {
        bottom: 160px; left: 15%;
        animation: tk-melayang 3s ease-in-out 1s infinite;
        font-size: 1.4rem;
    }
    .tk-dekorasi--4 {
        top: 40px; right: 25%;
        animation: tk-kedip 2.5s ease-in-out infinite;
        font-size: 1.2rem;
    }
    @media (max-width: 700px) {
        .tk-dekorasi--2, .tk-dekorasi--3, .tk-dekorasi--4 { display: none; }
        .tk-dekorasi--1 { font-size: 1.4rem; top: 120px; }
    }

    /* Tempel hover */
    .tk-tempel {
        transition: transform .3s cubic-bezier(.22,1,.36,1),
                    box-shadow .3s ease;
    }
    .tk-tempel:hover {
        transform: rotate(0deg) translateY(-4px);
        box-shadow: 0 20px 40px rgba(59,51,85,.16);
    }

    /* Ajakan pulse glow */
    .tk-ajakan {
        transition: box-shadow .3s ease;
    }
    .tk-ajakan:hover {
        box-shadow: 0 20px 50px rgba(255,197,61,.35);
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
            <a href="index.php" aria-current="page">Beranda</a>
            <a href="profile.php">Profil</a>
            <a href="program.php">Program</a>
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
<section class="tk-hero" style="position:relative;">
    <!-- matahari -->
    <svg class="tk-matahari" viewBox="0 0 100 100" aria-hidden="true">
        <g class="tk-matahari__sinar" fill="#FFC53D">
            <circle cx="50" cy="50" r="34" opacity=".28"/>
            <g>
                <rect x="47" y="2"  width="6" height="14" rx="3"/>
                <rect x="47" y="84" width="6" height="14" rx="3"/>
                <rect x="2"  y="47" width="14" height="6" rx="3"/>
                <rect x="84" y="47" width="14" height="6" rx="3"/>
                <rect x="14" y="14" width="6" height="14" rx="3" transform="rotate(-45 17 21)"/>
                <rect x="80" y="72" width="6" height="14" rx="3" transform="rotate(-45 83 79)"/>
                <rect x="80" y="14" width="6" height="14" rx="3" transform="rotate(45 83 21)"/>
                <rect x="14" y="72" width="6" height="14" rx="3" transform="rotate(45 17 79)"/>
            </g>
        </g>
        <circle cx="50" cy="50" r="25" fill="#FFC53D"/>
    </svg>

    <!-- awan -->
    <svg class="tk-awan tk-awan--1" viewBox="0 0 120 54" aria-hidden="true"><path d="M22 54c-12 0-22-8-22-19S10 16 22 16c3-9 12-16 22-16 12 0 22 8 25 19 12 1 21 9 21 19 0 9-9 16-21 16H22z"/></svg>
    <svg class="tk-awan tk-awan--2" viewBox="0 0 120 54" aria-hidden="true"><path d="M22 54c-12 0-22-8-22-19S10 16 22 16c3-9 12-16 22-16 12 0 22 8 25 19 12 1 21 9 21 19 0 9-9 16-21 16H22z"/></svg>
    <svg class="tk-awan tk-awan--3" viewBox="0 0 120 54" aria-hidden="true"><path d="M22 54c-12 0-22-8-22-19S10 16 22 16c3-9 12-16 22-16 12 0 22 8 25 19 12 1 21 9 21 19 0 9-9 16-21 16H22z"/></svg>

    <!-- Floating Decorations (Terinspirasi TK 2) -->
    <span class="tk-dekorasi tk-dekorasi--1" aria-hidden="true">🎈</span>
    <span class="tk-dekorasi tk-dekorasi--2" aria-hidden="true">⭐</span>
    <span class="tk-dekorasi tk-dekorasi--3" aria-hidden="true">🎨</span>
    <span class="tk-dekorasi tk-dekorasi--4" aria-hidden="true">✨</span>

    <div class="tk-wadah tk-hero__teks">
        <h1>Sekolah pertama yang bikin anak betah</h1>
        <p class="tk-hero__sub">
            Kelas kecil, guru yang hafal nama setiap anak, dan hari-hari yang penuh main.
            Pendaftaran murid baru sudah dibuka.
        </p>
        <div class="tk-hero__aksi">
            <a href="pendaftaran.php" class="tk-tombol tk-tombol--utama">Daftar sekarang</a>
            <a href="#satu-hari" class="tk-tombol tk-tombol--kedua">Lihat kegiatan sehari</a>
        </div>
    </div>

    <!-- bukit + pohon -->
    <svg class="tk-bukit" viewBox="0 0 1200 210" preserveAspectRatio="none" aria-hidden="true">
        <path d="M0 118c150-34 260 14 400 8s210-46 360-38 190 46 290 40 150-22 150-22v104H0z" fill="#8FD3A3"/>
        <g fill="#57B979">
            <circle cx="150" cy="150" r="30"/><rect x="145" y="150" width="10" height="34"/>
            <circle cx="1010" cy="158" r="24"/><rect x="1006" y="158" width="8" height="28"/>
            <circle cx="640" cy="146" r="20"/><rect x="637" y="146" width="6" height="26"/>
        </g>
        <path d="M0 158c170-24 300 18 470 12s250-32 400-24 180 30 330 24v40H0z" fill="#57B979"/>
    </svg>
</section>

<!-- ============================ KEUNGGULAN ============================ -->
<section class="tk-bagian">
    <div class="tk-wadah">
        <div class="tk-judul-bagian tk-judul-bagian--tengah tk-naik">
            <h2>Yang orang tua tanyakan duluan</h2>
            <svg class="tk-coret" viewBox="0 0 148 12" aria-hidden="true"><path d="M3 8c22-6 44 3 66-2s52 5 76-2" stroke="#FFC53D" stroke-width="7" stroke-linecap="round" fill="none"/></svg>
            <p>Tiga hal yang paling sering ditanya saat orang tua pertama kali datang ke sekolah kami.</p>
        </div>

        <div class="tk-grid-3">
            <article class="tk-kartu tk-muncul tk-tunda-1">
                <div class="tk-kartu__ikon tk-kartu__ikon--hijau">
                    <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="#57B979" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>
                <h3>Anak saya aman di sini?</h3>
                <p>Halaman berpagar, alat main dicek setiap bulan, dan setiap anak hanya dilepas ke penjemput yang sudah terdaftar.</p>
            </article>

            <article class="tk-kartu tk-muncul tk-tunda-2">
                <div class="tk-kartu__ikon tk-kartu__ikon--kuning">
                    <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="#E0A81E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="9" cy="8" r="3.2"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><path d="M17.5 12.5c1.4-1.2 3.5-.4 3.5 1.3 0 1.6-2 3-3.5 4.2-1.5-1.2-3.5-2.6-3.5-4.2 0-1.7 2.1-2.5 3.5-1.3z"/>
                    </svg>
                </div>
                <h3>Gurunya seperti apa?</h3>
                <p>Satu kelas diampu dua guru dengan jumlah anak terbatas, jadi guru tahu siapa yang hari ini butuh dipeluk lebih lama.</p>
            </article>

            <article class="tk-kartu tk-muncul tk-tunda-3">
                <div class="tk-kartu__ikon tk-kartu__ikon--biru">
                    <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="#2E9BD6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="3" y="3" width="8" height="8" rx="2"/><rect x="13" y="13" width="8" height="8" rx="2"/><circle cx="17" cy="7" r="4"/><path d="M7 13v8"/><path d="M3 17h8"/>
                    </svg>
                </div>
                <h3>Belajarnya berat, tidak?</h3>
                <p>Tidak ada pekerjaan rumah. Anak berhitung sambil menyusun balok dan mengenal huruf lewat cerita yang dibacakan.</p>
            </article>
        </div>
    </div>
</section>

<svg class="tk-gunting" viewBox="0 0 1200 34" preserveAspectRatio="none" aria-hidden="true" style="color:var(--kertas-tua)">
    <path d="M0 20q25-18 50 0t50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0V34H0z" fill="currentColor"/>
</svg>

<!-- ============================ TENTANG ============================ -->
<section class="tk-bagian tk-bagian--kertas-tua">
    <div class="tk-wadah tk-tentang">
        <div>
        <div class="tk-kiri">
            <h2>Sekolah kecil, perhatian besar</h2>
            <svg class="tk-coret" viewBox="0 0 148 12" aria-hidden="true"><path d="M3 8c22-6 44 3 66-2s52 5 76-2" stroke="#EE5D4E" stroke-width="7" stroke-linecap="round" fill="none"/></svg>
            <p>
                TK Kristen Citra Bangsa berada di bawah naungan Yayasan Citra Bina Insan Mandiri di Kupang.
                Kami merawat anak usia 4 sampai 6 tahun di masa mereka belajar paling banyak: saat semuanya
                masih terasa seperti main.
            </p>
            <p>
                Setiap anak punya kecepatan sendiri. Karena itu kami menjaga jumlah anak per kelas tetap
                sedikit, supaya guru sempat duduk berdua dengan anak yang belum selesai, dan sempat menantang
                anak yang sudah bisa lebih.
            </p>

            <div class="tk-angka">
                <div><strong>4–6</strong><span>usia anak yang kami terima</span></div>
                <div><strong>2</strong><span>guru pendamping di tiap kelas</span></div>
                <div><strong>07.30</strong><span>gerbang dibuka setiap hari</span></div>
                <div><strong>5</strong><span>hari sekolah, Senin sampai Jumat</span></div>
            </div>
        </div>
        </div>

        <div class="tk-tempel tk-kanan">
            <h3>Ingin lihat langsung?</h3>
            <p>
                Ayah dan Bunda boleh datang saat jam sekolah, melihat kelas, dan bertanya apa saja
                ke guru. Tidak perlu janji lewat surat, cukup kabari kami sehari sebelumnya.
            </p>
            <a href="pendaftaran.php" class="tk-tombol tk-tombol--utama">Atur kunjungan</a>
        </div>
    </div>
</section>

<!-- ============================ SATU HARI DI TK ============================ -->
<section class="tk-bagian" id="satu-hari">
    <div class="tk-wadah">
        <div class="tk-judul-bagian tk-judul-bagian--tengah tk-naik">
            <h2>Satu hari di TK</h2>
            <svg class="tk-coret" viewBox="0 0 148 12" aria-hidden="true"><path d="M3 8c22-6 44 3 66-2s52 5 76-2" stroke="#2E9BD6" stroke-width="7" stroke-linecap="round" fill="none"/></svg>
            <p>Ketuk jamnya untuk melihat apa yang anak lakukan saat itu.</p>
        </div>

        <div class="tk-jam" role="tablist" aria-label="Jadwal harian">
            <button role="tab" id="jam-1" aria-controls="panel-1" aria-selected="true">07.30</button>
            <button role="tab" id="jam-2" aria-controls="panel-2" aria-selected="false" tabindex="-1">08.00</button>
            <button role="tab" id="jam-3" aria-controls="panel-3" aria-selected="false" tabindex="-1">09.00</button>
            <button role="tab" id="jam-4" aria-controls="panel-4" aria-selected="false" tabindex="-1">10.00</button>
            <button role="tab" id="jam-5" aria-controls="panel-5" aria-selected="false" tabindex="-1">10.30</button>
            <button role="tab" id="jam-6" aria-controls="panel-6" aria-selected="false" tabindex="-1">11.30</button>
        </div>

        <div class="tk-panel" role="tabpanel" id="panel-1" aria-labelledby="jam-1" tabindex="0">
            <div class="tk-panel__doodle">
                <svg width="66" height="66" viewBox="0 0 24 24" fill="none" stroke="#FFC53D" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                    <circle cx="12" cy="12" r="4.5"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4"/>
                </svg>
            </div>
            <div>
                <h3>Disambut di gerbang</h3>
                <p>Guru menunggu di depan. Anak bersalaman, melepas sepatu, lalu menaruh tas di lokernya sendiri. Ini latihan mandiri yang pertama setiap hari.</p>
            </div>
        </div>

        <div class="tk-panel" role="tabpanel" id="panel-2" aria-labelledby="jam-2" tabindex="0" hidden>
            <div class="tk-panel__doodle">
                <svg width="66" height="66" viewBox="0 0 24 24" fill="none" stroke="#9B7EDE" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                    <circle cx="7" cy="18" r="3"/><circle cx="18" cy="15" r="3"/><path d="M10 18V5l11-2v12"/>
                </svg>
            </div>
            <div>
                <h3>Lingkaran pagi</h3>
                <p>Duduk melingkar untuk berdoa, menyanyi, dan bercerita. Setiap anak dapat giliran bicara, jadi yang pemalu pun terbiasa didengar.</p>
            </div>
        </div>

        <div class="tk-panel" role="tabpanel" id="panel-3" aria-labelledby="jam-3" tabindex="0" hidden>
            <div class="tk-panel__doodle">
                <svg width="66" height="66" viewBox="0 0 24 24" fill="none" stroke="#2E9BD6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="12" width="8" height="8" rx="1.5"/><rect x="13" y="12" width="8" height="8" rx="1.5"/><rect x="8" y="3" width="8" height="8" rx="1.5"/>
                </svg>
            </div>
            <div>
                <h3>Belajar sambil main</h3>
                <p>Anak memilih sentra hari itu: balok, seni, bahan alam, atau membaca. Tema mingguan diselipkan lewat permainan, bukan lewat lembar tugas.</p>
            </div>
        </div>

        <div class="tk-panel" role="tabpanel" id="panel-4" aria-labelledby="jam-4" tabindex="0" hidden>
            <div class="tk-panel__doodle">
                <svg width="66" height="66" viewBox="0 0 24 24" fill="none" stroke="#EE5D4E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M12 7c-4 0-6 3-6 6.5S8.5 21 12 21s6-4 6-7.5S16 7 12 7z"/><path d="M12 7V4"/><path d="M12 4c2 0 3.5-1 4-3-2.2-.2-3.6.8-4 3z"/>
                </svg>
            </div>
            <div>
                <h3>Makan bekal bersama</h3>
                <p>Cuci tangan, berdoa, lalu makan di meja bersama. Setelah selesai, anak membereskan kotak bekalnya sendiri dan menyapu remah di mejanya.</p>
            </div>
        </div>

        <div class="tk-panel" role="tabpanel" id="panel-5" aria-labelledby="jam-5" tabindex="0" hidden>
            <div class="tk-panel__doodle">
                <svg width="66" height="66" viewBox="0 0 24 24" fill="none" stroke="#57B979" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                    <circle cx="12" cy="12" r="9"/><path d="M3.5 9.5c5 1.5 12 1.5 17 0M12 3c-3 5-3 13 0 18M12 3c3 5 3 13 0 18"/>
                </svg>
            </div>
            <div>
                <h3>Main di halaman</h3>
                <p>Perosotan, ayunan, dan bak pasir. Guru ikut turun mendampingi, sekaligus mengajarkan cara antre dan bergantian tanpa berebut.</p>
            </div>
        </div>

        <div class="tk-panel" role="tabpanel" id="panel-6" aria-labelledby="jam-6" tabindex="0" hidden>
            <div class="tk-panel__doodle">
                <svg width="66" height="66" viewBox="0 0 24 24" fill="none" stroke="#9B7EDE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M3 11 12 3l9 8"/><path d="M5 10v10h14V10"/><rect x="10" y="14" width="4" height="6"/>
                </svg>
            </div>
            <div>
                <h3>Waktunya pulang</h3>
                <p>Anak menceritakan bagian paling seru hari ini, berdoa, lalu dijemput. Guru menyampaikan catatan singkat kalau ada hal yang perlu Ayah dan Bunda tahu.</p>
            </div>
        </div>
    </div>
</section>

<svg class="tk-gunting" viewBox="0 0 1200 34" preserveAspectRatio="none" aria-hidden="true" style="color:#fff">
    <path d="M0 20q25-18 50 0t50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0V34H0z" fill="currentColor"/>
</svg>

<!-- ============================ PROGRAM ============================ -->
<section class="tk-bagian tk-bagian--putih">
    <div class="tk-wadah">
        <div class="tk-judul-bagian tk-judul-bagian--tengah tk-naik">
            <h2>Apa yang anak pelajari</h2>
            <svg class="tk-coret" viewBox="0 0 148 12" aria-hidden="true"><path d="M3 8c22-6 44 3 66-2s52 5 76-2" stroke="#57B979" stroke-width="7" stroke-linecap="round" fill="none"/></svg>
            <p>Tiga bagian yang berjalan berbarengan sepanjang tahun ajaran.</p>
        </div>

        <div class="tk-grid-3">
            <article class="tk-program tk-muncul tk-tunda-1">
                <h3>Kurikulum terpadu</h3>
                <p>Mengikuti kurikulum nasional PAUD, tapi disampaikan lewat main. Anak melatih kemampuan berpikir dan gerak tanpa merasa sedang diuji.</p>
            </article>

            <article class="tk-program tk-program--biru tk-muncul tk-tunda-2">
                <h3>Kegiatan pilihan</h3>
                <ul>
                    <li>Menggambar dan mewarnai</li>
                    <li>Menari dan olah gerak</li>
                    <li>Pengenalan bahasa Inggris dasar</li>
                    <li>Bercocok tanam di kebun sekolah</li>
                </ul>
            </article>

            <article class="tk-program tk-program--hijau tk-muncul tk-tunda-3">
                <h3>Pembiasaan harian</h3>
                <p>Doa pagi, cerita firman singkat, dan kebiasaan kecil seperti berbagi, minta maaf, dan membereskan mainan sendiri sebelum pulang.</p>
            </article>
        </div>
    </div>
</section>

<!-- ============================ PAPAN CORET-CORET ============================ -->
<section class="tk-bagian">
    <div class="tk-wadah tk-coretan">
        <h2>Ajak si kecil coret-coret</h2>
        <svg class="tk-coret" viewBox="0 0 148 12" aria-hidden="true"><path d="M3 8c22-6 44 3 66-2s52 5 76-2" stroke="#9B7EDE" stroke-width="7" stroke-linecap="round" fill="none"/></svg>
        <p style="margin-inline:auto">Sambil Ayah dan Bunda membaca, anak boleh menggambar di sini. Pilih warnanya, lalu gerakkan jari di kertas.</p>

        <div class="tk-papan">
            <canvas id="papan" aria-label="Papan gambar. Gerakkan jari atau tetikus untuk menggambar."></canvas>
        </div>

        <div class="tk-krayon">
            <button class="tk-krayon__warna" style="background:#EE5D4E" data-warna="#EE5D4E" aria-pressed="true"  aria-label="Krayon merah"></button>
            <button class="tk-krayon__warna" style="background:#FFC53D" data-warna="#FFC53D" aria-pressed="false" aria-label="Krayon kuning"></button>
            <button class="tk-krayon__warna" style="background:#2E9BD6" data-warna="#2E9BD6" aria-pressed="false" aria-label="Krayon biru"></button>
            <button class="tk-krayon__warna" style="background:#57B979" data-warna="#57B979" aria-pressed="false" aria-label="Krayon hijau"></button>
            <button class="tk-krayon__warna" style="background:#9B7EDE" data-warna="#9B7EDE" aria-pressed="false" aria-label="Krayon ungu"></button>
            <button class="tk-hapus" id="hapus">Bersihkan</button>
        </div>
    </div>
</section>

<svg class="tk-gunting" viewBox="0 0 1200 34" preserveAspectRatio="none" aria-hidden="true" style="color:var(--kertas-tua)">
    <path d="M0 20q25-18 50 0t50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0 50 0V34H0z" fill="currentColor"/>
</svg>

<!-- ============================ TESTIMONI ============================ -->
<section class="tk-bagian tk-bagian--kertas-tua">
    <div class="tk-wadah tk-testimoni tk-naik">
        <svg width="46" height="46" viewBox="0 0 24 24" fill="#EE5D4E" aria-hidden="true" style="margin-bottom:14px">
            <path d="M9 5c-4 0-7 3-7 7 0 4 3 7 6 7 1 0 2-.3 2-1 0-1.6-3-1-3-4 0-2 1.5-3 3-3h1V5H9zm11 0c-4 0-7 3-7 7 0 4 3 7 6 7 1 0 2-.3 2-1 0-1.6-3-1-3-4 0-2 1.5-3 3-3h1V5h-2z"/>
        </svg>
        <blockquote>
            Anak saya yang tadinya menangis tiap pagi, sekarang malah menagih berangkat waktu hari libur.
            Gurunya sabar, dan kami selalu dikabari kalau ada apa-apa.
        </blockquote>
        <cite>Ibu Siti, orang tua murid Kelompok B</cite>
    </div>
</section>

<!-- ============================ AJAKAN ============================ -->
<section style="background:var(--kertas-tua); padding-bottom:0">
    <div class="tk-wadah">
        <div class="tk-ajakan tk-zoom">
            <h2>Pendaftaran murid baru sudah dibuka</h2>
            <p>Isi formulir dalam beberapa menit, atau hubungi kami dulu kalau masih ada yang ingin ditanyakan.</p>
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
    /* ---------- menu di layar kecil ---------- */
    var burger = document.getElementById('burger');
    var nav = document.getElementById('nav');
    burger.addEventListener('click', function () {
        var buka = nav.classList.toggle('terbuka');
        burger.setAttribute('aria-expanded', buka);
        burger.setAttribute('aria-label', buka ? 'Tutup menu' : 'Buka menu');
    });

    /* ---------- bayangan header saat digulir ---------- */
    var header = document.getElementById('header');
    var keatas = document.getElementById('keatas');
    window.addEventListener('scroll', function () {
        header.classList.toggle('melayang', window.scrollY > 12);
        keatas.classList.toggle('tampil', window.scrollY > 500);
    }, { passive: true });

    keatas.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    /* ---------- jadwal harian ---------- */
    var tabs = Array.prototype.slice.call(document.querySelectorAll('[role="tab"]'));

    function pilih(tab, fokus) {
        tabs.forEach(function (t) {
            var aktif = t === tab;
            t.setAttribute('aria-selected', aktif);
            t.tabIndex = aktif ? 0 : -1;
            document.getElementById(t.getAttribute('aria-controls')).hidden = !aktif;
        });
        if (fokus) tab.focus();
    }

    tabs.forEach(function (tab, i) {
        tab.addEventListener('click', function () { pilih(tab); });
        tab.addEventListener('keydown', function (e) {
            if (e.key === 'ArrowRight') pilih(tabs[(i + 1) % tabs.length], true);
            if (e.key === 'ArrowLeft')  pilih(tabs[(i - 1 + tabs.length) % tabs.length], true);
            if (e.key === 'Home')       pilih(tabs[0], true);
            if (e.key === 'End')        pilih(tabs[tabs.length - 1], true);
        });
    });

    /* ---------- papan coret-coret ---------- */
    var papan = document.getElementById('papan');
    var ctx = papan.getContext('2d');
    var warna = '#EE5D4E';
    var menggambar = false;

    function ukur() {
        var simpan = papan.width ? ctx.getImageData(0, 0, papan.width, papan.height) : null;
        var dpr = window.devicePixelRatio || 1;
        papan.width = papan.clientWidth * dpr;
        papan.height = papan.clientHeight * dpr;
        ctx.scale(dpr, dpr);
        ctx.lineCap = 'round';
        ctx.lineJoin = 'round';
        ctx.lineWidth = 9;
        if (simpan) ctx.putImageData(simpan, 0, 0);
    }
    ukur();
    window.addEventListener('resize', ukur);

    function titik(e) {
        var r = papan.getBoundingClientRect();
        return { x: e.clientX - r.left, y: e.clientY - r.top };
    }

    papan.addEventListener('pointerdown', function (e) {
        menggambar = true;
        papan.setPointerCapture(e.pointerId);
        var p = titik(e);
        ctx.strokeStyle = warna;
        ctx.beginPath();
        ctx.moveTo(p.x, p.y);
        ctx.lineTo(p.x + 0.1, p.y);
        ctx.stroke();
    });

    papan.addEventListener('pointermove', function (e) {
        if (!menggambar) return;
        var p = titik(e);
        ctx.lineTo(p.x, p.y);
        ctx.stroke();
    });

    ['pointerup', 'pointercancel', 'pointerleave'].forEach(function (ev) {
        papan.addEventListener(ev, function () { menggambar = false; });
    });

    document.querySelectorAll('.tk-krayon__warna').forEach(function (b) {
        b.addEventListener('click', function () {
            warna = b.dataset.warna;
            document.querySelectorAll('.tk-krayon__warna').forEach(function (x) {
                x.setAttribute('aria-pressed', x === b);
            });
        });
    });

    document.getElementById('hapus').addEventListener('click', function () {
        ctx.clearRect(0, 0, papan.width, papan.height);
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