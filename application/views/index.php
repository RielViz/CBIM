<!--begin::Landing hero-->
<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9 cbim-fade-item">
    <!--begin::Heading-->
    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
        <!--begin::Title-->
        <h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-8">
            <span data-i18n="hero_welcome">SELAMAT DATANG DI</span>
            <br />
            <span style="background: linear-gradient(90deg, #FFD80C 0%, #FF6B8B 50%, #FFFFFF 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                <span id="kt_landing_hero_text">YAYASAN CITRA BINA INSAN MANDIRI</span><br>
            </span>
            <div class="mt-3">
                <small class="fs-4 text-white opacity-90"><i class="bi bi-geo-alt fs-3 text-warning me-1"></i> Jl. Manafe No.17 Kel. Kayu Putih, Kec. Oebobo Kota Kupang, NTT</small>
            </div>
        </h1>
        <!--end::Title-->
        
        <!--begin::Action Buttons-->
        <div class="d-flex justify-content-center gap-3 mt-6">
            <a href="#unit-unit" class="btn btn-warning fw-bolder px-6 py-3" data-i18n="hero_btn_explore">
                <i class="bi bi-grid-fill me-1"></i> Jelajahi Unit
            </a>
            <a href="#" target="_blank" rel="noopener" class="btn btn-outline-light fw-bolder px-6 py-3" data-i18n="hero_btn_register">
                <i class="bi bi-pencil-square me-1"></i> Daftar Sekarang
            </a>
        </div>
        <!--end::Action-->
    </div>
    <!--end::Heading-->

    <!--begin::Clients Logos-->
    <div class="d-flex flex-center flex-wrap position-relative px-5">
        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Universitas Citra Bangsa">
            <img src="<?= base_url(); ?>assets/templates/media/logos/logo-ucb-ok.png" class="mh-50px mh-lg-70px" alt="Logo Universitas Citra Bangsa" loading="lazy" decoding="async" />
        </div>
        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Yayasan CBIM">
            <img src="<?= base_url(); ?>assets/templates/media/logos/logo-cbim.png" class="mh-50px mh-lg-70px" alt="Logo Yayasan CBIM Kupang" loading="lazy" decoding="async" />
        </div>
        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Sekolah Kristen Citra Bangsa Mandiri">
            <img src="<?= base_url(); ?>assets/templates/media/logos/logo-sekolah.png" class="mh-50px mh-lg-70px" alt="Logo Sekolah Citra Bangsa" loading="lazy" decoding="async" />
        </div>
    </div>
    <!--end::Clients-->
</div>
<!--end::Landing hero-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Header Section-->

<!-- FE-05: Semantic Main Landmark -->
<main id="main-content" role="main">

<!--begin::How It Works Section (Unit-Unit)-->
<div class="mb-n10 mb-lg-n20 z-index-2 cbim-fade-item">
    <!--begin::Curve bottom-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve bottom-->

    <!--begin::Container-->
    <div class="container">
        <!--begin::Heading-->
        <div class="text-center mb-12">
            <h2 class="fs-2hx text-dark mb-3 mt-10" id="unit-unit" data-kt-scroll-offset="{default: 100, lg: 150}" data-i18n="unit_title">
                UNIT-UNIT PENDIDIKAN
            </h2>
            <p class="fs-5 text-muted fw-bold mb-md-15" data-i18n="unit_desc">
                Layanan pendidikan terpadu dari jenjang usia dini hingga perguruan tinggi
            </p>

            <!--begin::Clients Cards (FE-01: Responsive Grid)-->
            <div class="row g-6 justify-content-center">
                <!-- UCB -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 shadow-sm border p-4 text-center hover-elevate-up">
                        <img src="<?= base_url(); ?>assets/templates/media/logos/logo-ucb-ok.png" class="mh-80px mh-lg-90px mx-auto rounded mb-3" alt="Universitas Citra Bangsa" loading="lazy" decoding="async" />
                        <h4 class="fs-7 fw-bolder mb-2">Universitas Citra Bangsa</h4>
                        <a target="_blank" rel="noopener" href="https://ucb.ac.id/" class="btn btn-sm btn-cbim-primary mt-auto" data-i18n="btn_explore">Telusuri</a>
                    </div>
                </div>
                <!-- SMA -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 shadow-sm border p-4 text-center hover-elevate-up">
                        <img src="<?= base_url(); ?>assets/templates/media/logos/sma.png" class="mh-80px mh-lg-90px mx-auto rounded mb-3" alt="SMA Kristen Citra Bangsa" loading="lazy" decoding="async" />
                        <h4 class="fs-7 fw-bolder mb-2">SMA K Citra Bangsa</h4>
                        <a target="_blank" rel="noopener" href="https://smakcitrabangsa.sch.id/" class="btn btn-sm btn-cbim-primary mt-auto" data-i18n="btn_explore">Telusuri</a>
                    </div>
                </div>
                <!-- SMP -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 shadow-sm border p-4 text-center hover-elevate-up">
                        <img src="<?= base_url(); ?>assets/templates/media/logos/smp.png" class="mh-80px mh-lg-90px mx-auto rounded mb-3" alt="SMP Kristen Citra Bangsa" loading="lazy" decoding="async" />
                        <h4 class="fs-7 fw-bolder mb-2">SMP K Citra Bangsa</h4>
                        <a target="_blank" rel="noopener" href="http://smpkcitrabangsa.com/" class="btn btn-sm btn-cbim-primary mt-auto" data-i18n="btn_explore">Telusuri</a>
                    </div>
                </div>
                <!-- SD -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 shadow-sm border p-4 text-center hover-elevate-up">
                        <img src="<?= base_url(); ?>assets/templates/media/logos/sd.png" class="mh-80px mh-lg-90px mx-auto rounded mb-3" alt="SD Kristen Citra Bangsa" loading="lazy" decoding="async" />
                        <h4 class="fs-7 fw-bolder mb-2">SD K Citra Bangsa</h4>
                        <a href="<?= base_url('sd'); ?>" class="btn btn-sm btn-cbim-primary mt-auto" data-i18n="btn_explore">Telusuri</a>
                    </div>
                </div>
                <!-- TK -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 shadow-sm border p-4 text-center hover-elevate-up">
                        <img src="<?= base_url(); ?>assets/templates/media/logos/paud-tk.png" class="mh-80px mh-lg-90px mx-auto rounded mb-3" alt="TK Kristen Citra Bangsa" loading="lazy" decoding="async" />
                        <h4 class="fs-7 fw-bolder mb-2">TK K Citra Bangsa</h4>
                        <a href="<?= base_url('tk'); ?>" class="btn btn-sm btn-cbim-primary mt-auto" data-i18n="btn_explore">Telusuri</a>
                    </div>
                </div>
            </div>
            <!--end::Clients Cards-->
        </div>
        <!--end::Heading-->
    </div>
    <!--end::Container-->
</div>
<!--end::How It Works Section-->

<!--begin::Statistics / Legalitas Section-->
<div class="mt-sm-n10 cbim-fade-item">
    <!--begin::Curve top-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve top-->

    <!--begin::Wrapper-->
    <div class="pb-15 pt-18 landing-dark-bg">
        <!--begin::Container-->
        <div class="container">
            <div class="text-center mt-10 mb-12" id="legalitas" data-kt-scroll-offset="{default: 100, lg: 150}">
                <h2 class="fs-2hx text-white fw-bolder mb-3">LEGALITAS</h2>
                <div class="fs-4 text-warning fw-bold">
                    <?= !empty($data_legalitas[0]['sub_judul_konten']) ? $data_legalitas[0]['sub_judul_konten'] : "Yayasan Citra Bina Insan Mandiri"; ?>
                </div>
            </div>
            <div class="fs-5 text-gray-300 text-center max-w-800px mx-auto lh-lg">
                <?= !empty($data_legalitas[0]['isi_konten']) ? $data_legalitas[0]['isi_konten'] : ''; ?>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Wrapper-->

    <!--begin::Curve bottom-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve bottom-->
</div>
<!--end::Statistics Section-->

<!--begin::Team Section (Struktur Organisasi)-->
<div class="py-10 py-lg-18 cbim-fade-item">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Heading-->
        <div class="text-center mb-12">
            <h2 class="fs-2hx text-dark mb-3" id="struktur" data-kt-scroll-offset="{default: 100, lg: 150}">
                Struktur Organisasi Yayasan CBIM
            </h2>
            <p class="text-muted fs-6">Pimpinan dan Pengurus Yayasan Citra Bina Insan Mandiri</p>
        </div>
        <!--end::Heading-->

        <!--begin::Slider-->
        <div class="tns tns-default position-relative px-10">
            <!--begin::Wrapper-->
            <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 4}, 992: {items: 3}, 576: {items: 2}}">
                <?php foreach ($data_struktur as $key => $struktur_organisasi) : ?>
                    <!--begin::Item-->
                    <div class="text-center p-3">
                        <div class="card h-100 border p-4 shadow-sm rounded-3">
                            <div class="mx-auto mb-4 overflow-hidden rounded-circle border border-3 border-warning shadow-sm" style="width: 150px; height: 150px; min-width: 150px; min-height: 150px;">
                                <img src="<?= base_url() ?>assets/templates/media/avatars/<?= !empty($struktur_organisasi['foto']) ? $struktur_organisasi['foto'] : '150-2.jpg'; ?>" 
                                     alt="<?= !empty($struktur_organisasi['nama']) ? htmlspecialchars($struktur_organisasi['nama']) : 'Pimpinan Yayasan'; ?>" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover; object-position: center;"
                                     loading="lazy" />
                            </div>
                            <div class="fw-bolder text-dark fs-5 mb-1"><?= !empty($struktur_organisasi['nama']) ? $struktur_organisasi['nama'] : '-'; ?></div>
                            <div class="text-muted fs-7 fw-bold"><?= !empty($struktur_organisasi['jabatan']) ? $struktur_organisasi['jabatan'] : '-'; ?></div>
                        </div>
                    </div>
                    <!--end::Item-->
                <?php endforeach; ?>
            </div>
            <!--end::Wrapper-->

            <!--begin::Controls-->
            <button class="btn btn-icon btn-active-color-primary position-absolute start-0 top-50 translate-middle-y z-index-2 shadow" id="kt_team_slider_prev" aria-label="Sebelumnya">
                <span class="svg-icon svg-icon-2x">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
                    </svg>
                </span>
            </button>
            <button class="btn btn-icon btn-active-color-primary position-absolute end-0 top-50 translate-middle-y z-index-2 shadow" id="kt_team_slider_next" aria-label="Berikutnya">
                <span class="svg-icon svg-icon-2x">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black" />
                    </svg>
                </span>
            </button>
            <!--end::Controls-->
        </div>
        <!--end::Slider-->
    </div>
    <!--end::Container-->
</div>
<!--end::Team Section-->

<?php
// Helper function for YouTube thumbnail (used in homepage)
if (!function_exists('getYouTubeId')) {
    function getYouTubeId($url) {
        $parts = parse_url($url);
        if (isset($parts['host']) && ($parts['host'] === 'www.youtube.com' || $parts['host'] === 'youtube.com')) {
            parse_str($parts['query'] ?? '', $q);
            return isset($q['v']) ? $q['v'] : '';
        } elseif (isset($parts['host']) && $parts['host'] === 'youtu.be') {
            return ltrim($parts['path'] ?? '', '/');
        }
        return '';
    }
}
?>

<!--begin::Berita Terbaru Section-->
<?php if (!empty($data_berita_terbaru)) : ?>
<div class="py-10 py-lg-18 cbim-fade-item">
    <div class="container">
        <div class="cbim-section-header">
            <h2 class="fs-2hx text-dark" id="berita-terbaru" data-kt-scroll-offset="{default: 100, lg: 150}">
                Berita Terbaru
            </h2>
            <p class="section-subtitle">Informasi dan kabar terkini dari Yayasan CBIM</p>
        </div>

        <div class="row g-6">
            <?php foreach ($data_berita_terbaru as $idx => $berita) : ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $idx * 100; ?>">
                    <a href="<?= base_url('page/berita/') . bin2hex(base64_encode($berita['id_berita'])); ?>" class="text-decoration-none">
                        <div class="cbim-news-card">
                            <div class="card-img-wrapper">
                                <img src="<?= base_url('assets/templates/media/news/') . $berita['gambar']; ?>"
                                     alt="<?= htmlspecialchars($berita['judul_berita']); ?>"
                                     style="width:100%;height:100%;object-fit:cover;display:block;"
                                     loading="lazy" decoding="async" />
                                <div class="img-overlay"></div>
                            </div>
                            <div class="card-body-content">
                                <?php if (!empty($berita['tanggal_post'])) : ?>
                                    <span class="cbim-badge-date mb-2">
                                        <i class="bi bi-calendar3"></i>
                                        <?= date('d M Y', strtotime($berita['tanggal_post'])); ?>
                                    </span>
                                <?php endif; ?>
                                <h4><?= htmlspecialchars($berita['judul_berita']); ?></h4>
                                <div class="excerpt"><?= strip_tags(substr($berita['isi_berita'], 0, 120)); ?>...</div>
                            </div>
                            <div class="card-footer-content">
                                <span class="read-more-link">
                                    Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-10">
            <a href="<?= base_url('page/berita'); ?>" class="cbim-view-all-link">
                <i class="bi bi-newspaper"></i> Lihat Semua Berita <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<?php endif; ?>
<!--end::Berita Terbaru Section-->

<!--begin::Video Kegiatan Section-->
<?php if (!empty($data_video_terbaru)) : ?>
<div class="mt-sm-n10 cbim-fade-item">
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
        </svg>
    </div>

    <div class="py-18 landing-dark-bg">
        <div class="container">
            <div class="cbim-section-header mb-12">
                <h2 class="fs-2hx text-white" id="video-kegiatan" data-kt-scroll-offset="{default: 100, lg: 150}">
                    Video Kegiatan
                </h2>
                <p class="section-subtitle" style="color: rgba(255,255,255,0.6);">Dokumentasi kegiatan Yayasan CBIM dalam bentuk video</p>
            </div>

            <div class="row g-6 justify-content-center">
                <?php foreach ($data_video_terbaru as $idx => $vid) :
                    $ytId = getYouTubeId($vid['link']);
                    $thumb = $ytId ? "https://img.youtube.com/vi/{$ytId}/hqdefault.jpg" : '';
                ?>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $idx * 100; ?>">
                        <a href="<?= base_url('page/kegiatan/') . bin2hex(base64_encode($vid['id_video'])); ?>" class="text-decoration-none">
                            <div class="cbim-video-card">
                                <div class="video-thumbnail">
                                    <?php if ($thumb) : ?>
                                        <img src="<?= $thumb; ?>" alt="<?= htmlspecialchars($vid['judul_video']); ?>" loading="lazy" decoding="async" />
                                    <?php endif; ?>
                                    <div class="play-overlay">
                                        <div class="play-btn-circle">
                                            <i class="bi bi-play-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="video-card-body">
                                    <h5><?= htmlspecialchars($vid['judul_video']); ?></h5>
                                    <div class="video-desc"><?= strip_tags(substr($vid['deskripsi'], 0, 80)); ?>...</div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-10">
                <a href="<?= base_url('page/kegiatan'); ?>" class="cbim-view-all-link" style="border-color: var(--cbim-gold); color: var(--cbim-gold);">
                    <i class="bi bi-play-circle"></i> Lihat Semua Video <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<?php endif; ?>
<!--end::Video Kegiatan Section-->

<!--begin::Galeri Foto Section-->
<?php if (!empty($data_galeri_terbaru)) : ?>
<div class="py-10 py-lg-18 cbim-fade-item">
    <div class="container">
        <div class="cbim-section-header">
            <h2 class="fs-2hx text-dark" id="galeri-terbaru" data-kt-scroll-offset="{default: 100, lg: 150}">
                Galeri Foto
            </h2>
            <p class="section-subtitle">Momen-momen penting Yayasan Citra Bina Insan Mandiri</p>
        </div>

        <div class="cbim-gallery-grid">
            <?php foreach ($data_galeri_terbaru as $idx => $foto) : ?>
                <a href="<?= base_url('assets/templates/media/galeri/') . $foto['foto']; ?>"
                   data-lightbox="gallery-home"
                   data-title="<?= htmlspecialchars($foto['judul_foto']); ?>"
                   data-aos="fade-up" data-aos-delay="<?= $idx * 80; ?>">
                    <div class="cbim-gallery-item">
                        <img src="<?= base_url('assets/templates/media/galeri/') . $foto['foto']; ?>"
                             alt="<?= htmlspecialchars($foto['judul_foto']); ?>"
                             style="width:100%;height:100%;object-fit:cover;display:block;"
                             loading="lazy" decoding="async" />
                        <div class="gallery-overlay">
                            <div class="gallery-icon">
                                <i class="bi bi-zoom-in"></i>
                            </div>
                            <span class="gallery-title"><?= htmlspecialchars($foto['judul_foto']); ?></span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-10">
            <a href="<?= base_url('page/galeri'); ?>" class="cbim-view-all-link">
                <i class="bi bi-images"></i> Lihat Semua Galeri <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<?php endif; ?>
<!--end::Galeri Foto Section-->

<!--begin::Visi Misi Section-->
<div class="mt-sm-n10 cbim-fade-item">
    <!--begin::Curve top-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve top-->

    <!--begin::Wrapper-->
    <div class="py-18 landing-dark-bg">
        <div class="container">
            <div class="mb-12 text-center">
                <h2 class="fs-2hx fw-bolder text-white mb-3" id="visi-misi" data-kt-scroll-offset="{default: 100, lg: 150}">
                    VISI & MISI
                </h2>
                <div class="text-gray-400 fw-bold fs-5">Arah dan Landasan Yayasan Citra Bina Insan Mandiri</div>
            </div>

            <div class="row g-8 justify-content-center">
                <!-- Visi -->
                <div class="col-lg-5">
                    <div class="h-100 rounded-3 bg-body p-8 shadow">
                        <div class="text-center mb-6">
                            <span class="badge badge-light-primary p-3 mb-3"><i class="bi bi-eye-fill fs-2x text-cbim-primary"></i></span>
                            <h3 class="text-dark fw-bolder mb-0">VISI</h3>
                        </div>
                        <div class="fs-5 text-gray-700 lh-lg text-center">
                            <?= !empty($data_visi[0]['isi_konten']) ? $data_visi[0]['isi_konten'] : ''; ?>
                        </div>
                    </div>
                </div>

                <!-- Misi -->
                <div class="col-lg-5">
                    <div class="h-100 rounded-3 bg-body p-8 shadow">
                        <div class="text-center mb-6">
                            <span class="badge badge-light-primary p-3 mb-3"><i class="bi bi-compass-fill fs-2x text-cbim-primary"></i></span>
                            <h3 class="text-dark fw-bolder mb-0">MISI</h3>
                        </div>
                        <div class="fs-5 text-gray-700 lh-lg">
                            <?= !empty($data_misi[0]['isi_konten']) ? $data_misi[0]['isi_konten'] : ''; ?>
                        </div>
                    </div>
                </div>

                <!-- Nilai-Nilai -->
                <div class="col-lg-10">
                    <div class="rounded-3 bg-body p-8 shadow">
                        <div class="text-center mb-6">
                            <span class="badge badge-light-warning p-3 mb-3"><i class="bi bi-gem fs-2x text-warning"></i></span>
                            <h3 class="text-dark fw-bolder mb-0">NILAI-NILAI YAYASAN</h3>
                        </div>
                        <div class="fs-5 text-gray-700 lh-lg">
                            <?= !empty($data_nilai[0]['isi_konten']) ? $data_nilai[0]['isi_konten'] : ""; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Wrapper-->

    <!--begin::Curve bottom-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve bottom-->
</div>
<!--end::Visi Misi Section-->

<!--begin::Operasional Section (FE-01: Table Responsive Wrapper)-->
<div class="mt-16 mb-10 cbim-fade-item">
    <div class="container">
        <div class="text-center mb-8">
            <h2 class="fs-2hx text-dark mb-3" id="operasional" data-kt-scroll-offset="{default: 125, lg: 150}">
                Operasional Yayasan CBIM
            </h2>
            <div class="fs-4 fw-bolder text-muted">
                <?= !empty($data_operasional[0]['sub_judul_konten']) ? $data_operasional[0]['sub_judul_konten'] : 'Jadwal & Standar Operasional'; ?>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-11">
                <!-- FE-01: Responsive Table Container to prevent mobile overflow on 360px-430px -->
                <div class="cbim-table-responsive p-4 p-lg-6 bg-white shadow-sm">
                    <div class="text-gray-700 fs-5 lh-lg">
                        <?= !empty($data_operasional[0]['isi_konten']) ? $data_operasional[0]['isi_konten'] : 'Informasi operasional akan segera diperbarui.'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Operasional Section-->

</main>
<!--end::Semantic Main Landmark-->