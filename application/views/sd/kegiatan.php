<!-- Page Banner Kegiatan SD (Unified UCB Maroon & Gold Theme) -->
<section class="bg-sd-page-header py-5 text-white">
    <div class="container py-4 text-center" data-aos="fade-up">
        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-semibold mb-2 fs-7">
            <i class="bi bi-trophy-fill me-1"></i> Prestasi & Momentum
        </span>
        <h1 class="fw-extrabold display-5 brand-font mb-2">Kegiatan & Prestasi Siswa SD</h1>
        <p class="lead opacity-90 mx-auto" style="max-width: 680px;">
            Dokumentasi ragam aktivitas belajar seru, pembinaan kepemimpinan, perlombaan akademik & non-akademik, serta keceriaan siswa SD K Citra Bangsa Mandiri.
        </p>
    </div>
</section>

<!-- Breadcrumb -->
<div class="breadcrumb-sd">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 fs-7">
                <li class="breadcrumb-item"><a href="<?= base_url('sd'); ?>"><i class="bi bi-house-door"></i> Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kegiatan & Prestasi</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Highlight Kegiatan & Prestasi -->
<section class="py-5 bg-white">
    <div class="container py-3">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge-cbim-red mb-2">Aktivitas Berkala</span>
            <h2 class="fw-extrabold text-dark brand-font">Program Rutin & Momentum Tahunan</h2>
            <p class="text-muted">Ajang pembentukan karakter mandiri, kerjasama, dan keberanian tampil di depan publik.</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card card-sd h-100 p-4 border-top border-4 border-danger">
                    <div class="rounded-3 bg-danger bg-opacity-10 text-danger p-3 mb-3 d-inline-block" style="width: max-content;">
                        <i class="bi bi-tree-fill fs-2"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2 brand-font">Outbound & Field Trip Edukatif</h5>
                    <p class="text-muted fs-7 mb-0">Kunjungan belajar luar kelas ke museum, sentra pertanian hidroponik, dan observasi alam untuk memperluas wawasan kontekstual murid.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card card-sd h-100 p-4 border-top border-4 border-warning">
                    <div class="rounded-3 bg-warning bg-opacity-10 text-warning p-3 d-inline-block" style="width: max-content;">
                        <i class="bi bi-music-note-list fs-2"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2 brand-font">Pentas Seni & Gelar Budaya NTT</h5>
                    <p class="text-muted fs-7 mb-0">Pertunjukan tari tradisional khas NTT, ansambel musik daerah (sasando, suling, gitar), paduan suara, serta pameran karya seni rupa siswa.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card card-sd h-100 p-4 border-top border-4 border-danger">
                    <div class="rounded-3 bg-danger bg-opacity-10 text-danger p-3 d-inline-block" style="width: max-content;">
                        <i class="bi bi-heart-fill fs-2"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2 brand-font">Retret Rohani & Bakti Sosial</h5>
                    <p class="text-muted fs-7 mb-0">Penguatan iman dan rasa syukur melalui retreat kerohanian bersama pendeta serta aksi berbagi kasih kepada sesama yang membutuhkan.</p>
                </div>
            </div>
        </div>

        <!-- Galeri Foto Aktivitas -->
        <div class="text-center mb-4 pt-4 border-top" data-aos="fade-up">
            <span class="badge-cbim-gold mb-2">Dokumentasi Visual</span>
            <h3 class="fw-extrabold text-dark brand-font">Galeri Foto Sekolah</h3>
        </div>

        <?php if (!empty($data_galeri)): ?>
            <div class="row g-4 mb-5">
                <?php foreach ($data_galeri as $galeri): ?>
                    <div class="col-md-4 col-lg-3" data-aos="fade-up">
                        <div class="card card-sd overflow-hidden h-100">
                            <img src="<?= base_url(); ?>assets/templates/media/galeri/<?= !empty($galeri['foto']) ? $galeri['foto'] : '150-2.jpg'; ?>" class="card-img-top object-fit-cover" style="height: 200px;" alt="<?= $galeri['judul_foto']; ?>" loading="lazy" decoding="async">
                            <div class="card-body p-3">
                                <h6 class="fw-bold text-dark mb-0 fs-7 brand-font"><?= $galeri['judul_foto']; ?></h6>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- =====================================================================
                 PATCH 2026-09-07
                 Blok ini SEBELUMNYA menampilkan tiga prestasi spesifik sebagai
                 fallback saat tabel galeri kosong: "Juara 1 Olimpiade Sains Kota
                 Kupang", "Juara Paduan Suara Anak", dan "Juara Lomba Menulis
                 Cerita & Puisi" -- lengkap dengan nama tim dan tingkat lomba.
                 Berbeda dengan nomor telepon dummy yang jelas terlihat sebagai
                 placeholder, klaim seperti ini terbaca sebagai fakta oleh orang
                 tua calon siswa. Menampilkan prestasi yang belum tentu diraih
                 adalah risiko reputasi bagi yayasan.

                 Diganti dengan empty state netral. Begitu tim editorial mengisi
                 galeri lewat panel admin, blok ini otomatis tidak muncul lagi.
                 ===================================================================== -->
            <div class="row justify-content-center mb-5" data-aos="fade-up">
                <div class="col-lg-7">
                    <div class="card card-sd p-5 text-center border-top border-4 border-warning">
                        <i class="bi bi-images fs-1 mb-3" style="color: var(--cbim-primary); opacity: .55;" aria-hidden="true"></i>
                        <h5 class="fw-bold text-dark brand-font mb-2">Dokumentasi Sedang Kami Siapkan</h5>
                        <p class="text-muted fs-7 mb-4">
                            Foto-foto kegiatan dan prestasi siswa SD K Citra Bangsa Mandiri
                            akan segera ditampilkan di halaman ini. Sementara itu, kegiatan
                            terbaru sekolah dapat diikuti melalui kanal media sosial resmi
                            Yayasan CBIM.
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <a href="https://www.instagram.com/yayasan_cbim" target="_blank" rel="noopener" class="btn btn-cbim-outline btn-sm">
                                <i class="bi bi-instagram" aria-hidden="true"></i> Instagram Yayasan
                            </a>
                            <a href="<?= base_url('sd/ppdb'); ?>" class="btn btn-cbim-primary btn-sm">
                                <i class="bi bi-pencil-square" aria-hidden="true"></i> Informasi PPDB
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Berita & Informasi Sekolah -->
        <?php if (!empty($data_berita)): ?>
            <div class="pt-4 border-top" data-aos="fade-up">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <span class="badge-cbim-red mb-1">Warta & Kabar</span>
                        <h3 class="fw-extrabold text-dark brand-font mb-0">Berita Terkini Yayasan & Sekolah</h3>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($data_berita as $berita): ?>
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="card card-sd p-3 d-flex flex-row gap-3 align-items-center h-100">
                                <img src="<?= base_url(); ?>assets/templates/media/news/<?= !empty($berita['gambar']) ? $berita['gambar'] : '150-2.jpg'; ?>" class="rounded-3 object-fit-cover flex-shrink-0" style="width: 120px; height: 120px;" alt="Berita" loading="lazy" decoding="async">
                                <div>
                                    <small class="text-danger fw-bold"><i class="bi bi-calendar-event me-1"></i> <?= date('d M Y', strtotime($berita['tanggal_post'])); ?></small>
                                    <h6 class="fw-bold text-dark mt-1 mb-2 brand-font"><?= $berita['judul_berita']; ?></h6>
                                    <p class="text-muted fs-7 mb-0 text-truncate" style="max-width: 320px;"><?= strip_tags($berita['isi_berita']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
