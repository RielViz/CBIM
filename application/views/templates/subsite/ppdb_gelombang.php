<?php
defined('BASEPATH') or exit('No direct script access allowed');

/* ============================================================================
   HALAMAN PPDB (SD & TK): hanya tombol daftar + gelombang pendaftaran.
   Gelombang dikelola dari panel admin SD / admin TK (tabel gelombang_ppdb).
   Variabel: $jenjang ('SD'|'TK'), $nama_unit, $data_gelombang
   ========================================================================== */

$bln = [1=>'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
$fmt = function ($t) use ($bln) {
    $d = !empty($t) ? DateTime::createFromFormat('Y-m-d', $t) : FALSE;
    return $d ? $d->format('j') . ' ' . $bln[(int) $d->format('n')] . ' ' . $d->format('Y') : '';
};
$rentang = function ($g) use ($fmt) {
    $a = $fmt($g['tgl_mulai']); $b = $fmt($g['tgl_selesai']);
    if ($a && $b) { return $a . ' – ' . $b; }
    if ($a) { return 'Mulai ' . $a; }
    if ($b) { return 'Sampai ' . $b; }
    return 'Jadwal menyusul';
};
$url_daftar = base_url('pendaftaran?jenjang=' . urlencode($jenjang));
$ada_buka = FALSE;
foreach ($data_gelombang as $g) { if (Gelombang_model::status($g) === 'buka') { $ada_buka = TRUE; } }
?>
<style>
    .ppdb-label { display:inline-block; padding:4px 12px; border-radius:999px; font-weight:700; font-size:.85rem; margin-bottom:10px; }
    .ppdb-label--hijau  { background:#e6f6ec; color:#2d6b43; }
    .ppdb-label--kuning { background:#fff4d6; color:#8a6a00; }
    .ppdb-label--merah  { background:#fcecec; color:#a12f25; }
    .ppdb-baris { display:flex; justify-content:space-between; gap:12px; padding:10px 0; border-top:1px dashed rgba(59,51,85,.15); font-size:.95rem; }
    .ppdb-baris span:first-child { color:var(--tinta-muda); }
    .ppdb-baris span:last-child { font-weight:700; text-align:right; }
    .ppdb-redup { opacity:.78; }
    .ppdb-nonaktif { opacity:.5; cursor:not-allowed; width:100%; justify-content:center; }
</style>

<section class="tk-hero">
    <svg class="tk-awan tk-awan--1" viewBox="0 0 120 54" aria-hidden="true"><path d="M22 54c-12 0-22-8-22-19S10 16 22 16c3-9 12-16 22-16 12 0 22 8 25 19 12 1 21 9 21 19 0 9-9 16-21 16H22z"/></svg>
    <svg class="tk-awan tk-awan--2" viewBox="0 0 120 54" aria-hidden="true"><path d="M22 54c-12 0-22-8-22-19S10 16 22 16c3-9 12-16 22-16 12 0 22 8 25 19 12 1 21 9 21 19 0 9-9 16-21 16H22z"/></svg>

    <div class="tk-wadah tk-hero__teks">
        <h1>Penerimaan Siswa Baru</h1>
        <p class="tk-hero__sub">
            <?= html_escape($nama_unit); ?> — <?= $ada_buka ? 'pendaftaran sedang dibuka. Yuk, daftarkan putra-putri Anda!' : 'lihat jadwal gelombang pendaftaran di bawah ini.'; ?>
        </p>
        <div class="tk-hero__aksi">
            <a href="<?= $url_daftar; ?>" class="tk-tombol tk-tombol--utama">Daftar Sekarang</a>
        </div>
    </div>

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

<section class="tk-bagian">
    <div class="tk-wadah">
        <div class="tk-judul-bagian tk-judul-bagian--tengah tk-naik">
            <h2>Gelombang Pendaftaran</h2>
            <svg class="tk-coret" viewBox="0 0 148 12" aria-hidden="true"><path d="M3 8c22-6 44 3 66-2s52 5 76-2" stroke="#FFC53D" stroke-width="7" stroke-linecap="round" fill="none"/></svg>
            <p>Pilih gelombang pendaftaran yang sedang dibuka.</p>
        </div>

        <?php if (empty($data_gelombang)): ?>
            <p style="text-align:center;color:var(--tinta-muda)">Jadwal gelombang pendaftaran belum diumumkan. Silakan hubungi sekolah untuk informasi lebih lanjut.</p>
        <?php else: ?>
        <div class="tk-grid-2">
            <?php $no = 0; $warna = ['hijau', 'biru', 'merah', 'ungu'];
            foreach ($data_gelombang as $g):
                $no++;
                $st = Gelombang_model::status($g);
                if ($st === 'buka')       { $lbl = ['hijau',  '✦ Dibuka'];       $kls = ''; }
                elseif ($st === 'segera') { $lbl = ['kuning', '⏳ Segera Dibuka']; $kls = ' ppdb-redup'; }
                else                      { $lbl = ['merah',  'Ditutup'];        $kls = ' ppdb-redup'; }
            ?>
            <article class="tk-program tk-program--<?= $st === 'buka' ? 'hijau' : $warna[$no % 4]; ?> tk-muncul tk-tunda-<?= min($no, 4); ?><?= $kls; ?>">
                <span class="ppdb-label ppdb-label--<?= $lbl[0]; ?>"><?= $lbl[1]; ?></span>
                <h3><?= html_escape($g['nama_gelombang']); ?></h3>
                <?php if (!empty($g['keterangan'])): ?>
                    <p><?= nl2br(html_escape($g['keterangan'])); ?></p>
                <?php endif; ?>
                <div style="margin:14px 0 18px">
                    <div class="ppdb-baris"><span>Pendaftaran</span><span><?= html_escape($rentang($g)); ?></span></div>
                    <?php if ($g['kuota'] !== NULL && $g['kuota'] !== ''): ?>
                        <div class="ppdb-baris"><span>Kuota</span><span><?= (int) $g['kuota']; ?> siswa</span></div>
                    <?php endif; ?>
                </div>
                <?php if ($st === 'buka'): ?>
                    <a href="<?= $url_daftar; ?>" class="tk-tombol tk-tombol--utama" style="width:100%; justify-content:center;">Daftar di Gelombang Ini</a>
                <?php elseif ($st === 'segera'): ?>
                    <span class="tk-tombol tk-tombol--kedua ppdb-nonaktif">Belum Dibuka</span>
                <?php else: ?>
                    <span class="tk-tombol tk-tombol--kedua ppdb-nonaktif">Pendaftaran Ditutup</span>
                <?php endif; ?>
            </article>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<section style="background:var(--kertas-tua); padding-bottom:0">
    <div class="tk-wadah">
        <div class="tk-ajakan tk-zoom">
            <h2>Siap mendaftar?</h2>
            <p>Isi formulir pendaftaran online, atau hubungi kami dulu kalau masih ada yang ingin ditanyakan.</p>
            <a href="<?= $url_daftar; ?>" class="tk-tombol tk-tombol--utama">Daftar Sekarang</a>
        </div>
    </div>
</section>
