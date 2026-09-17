<?php
// Helper for date formatting
function formatTanggalBerita($tanggal) {
    if (empty($tanggal)) return '';
    $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
    $ts = strtotime($tanggal);
    return date('d', $ts) . ' ' . $bulan[(int)date('m', $ts) - 1] . ' ' . date('Y', $ts);
}
?>

<!--begin::Landing hero spacer-->
<div class="d-flex flex-column flex-center w-100 min-h-1px min-h-lg-1px px-9"></div>
<!--end::Landing hero spacer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Header Section-->

<!--begin::Berita Page-->
<div class="py-12 py-lg-18">
    <div class="container">
        <!--begin::Section Header-->
        <div class="cbim-section-header">
            <h2 class="fs-2hx text-dark" id="berita-page" data-kt-scroll-offset="{default: 125, lg: 150}">
                Berita & Informasi
            </h2>
            <p class="section-subtitle">Kabar terkini seputar Yayasan Citra Bina Insan Mandiri</p>
        </div>
        <!--end::Section Header-->

        <?php if (count($data_all_berita) > 0 && count($data_main_berita) > 0) : ?>

            <!--begin::Featured / Hero Berita-->
            <div class="cbim-fade-item" data-aos="fade-up" data-aos-duration="800">
                <a href="<?= base_url('page/berita/') . bin2hex(base64_encode($data_main_berita[0]['id_berita'])); ?>" class="text-decoration-none">
                    <div class="cbim-news-featured">
                        <img src="<?= base_url('assets/templates/media/news/') . ($data_main_berita[0]['gambar'] ?? ''); ?>"
                             alt="<?= htmlspecialchars($data_main_berita[0]['judul_berita'] ?? 'Berita'); ?>"
                             class="featured-img"
                             style="width:100%;height:420px;object-fit:cover;display:block;"
                             loading="eager" />
                        <div class="featured-overlay">
                            <?php if (!empty($data_main_berita[0]['tanggal_post'])) : ?>
                                <span class="cbim-badge-date badge-light" style="width: fit-content;">
                                    <i class="bi bi-calendar3"></i>
                                    <?= formatTanggalBerita($data_main_berita[0]['tanggal_post']); ?>
                                </span>
                            <?php endif; ?>
                            <h3><?= htmlspecialchars($data_main_berita[0]['judul_berita'] ?? 'Judul Berita'); ?></h3>
                            <p><?= strip_tags($data_main_berita[0]['isi_berita'] ?? ''); ?></p>
                            <span class="btn-read-more">
                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <!--end::Featured Berita-->

            <!--begin::Berita Grid-->
            <?php if (count($data_all_berita) > 0) : ?>
                <div class="row g-6 mt-4">
                    <?php foreach ($data_all_berita as $key => $berita) : ?>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= ($key % 3) * 100; ?>">
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
                                                <?= formatTanggalBerita($berita['tanggal_post']); ?>
                                            </span>
                                        <?php endif; ?>
                                        <h4><?= htmlspecialchars($berita['judul_berita'] ?? 'Berita'); ?></h4>
                                        <div class="excerpt"><?= strip_tags(substr($berita['isi_berita'], 0, 140)); ?>...</div>
                                    </div>
                                    <div class="card-footer-content">
                                        <span class="cbim-badge-date" style="background: var(--cbim-gray-200); color: var(--cbim-gray-600); font-size: 11px;">
                                            <i class="bi bi-clock"></i>
                                            <?= !empty($berita['tanggal_update']) ? date('d/m/Y', strtotime($berita['tanggal_update'])) : ''; ?>
                                        </span>
                                        <span class="read-more-link">
                                            Baca <i class="bi bi-arrow-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <!--end::Berita Grid-->

        <?php else : ?>
            <!--begin::Empty State-->
            <div class="text-center py-20">
                <div class="mb-6">
                    <i class="bi bi-newspaper" style="font-size: 4rem; color: var(--cbim-gray-200);"></i>
                </div>
                <h3 class="text-muted fw-bold fs-3">Belum Ada Berita</h3>
                <p class="text-muted fs-6">Berita dan informasi terbaru akan segera ditampilkan di sini.</p>
            </div>
            <!--end::Empty State-->
        <?php endif; ?>

    </div>
</div>
<!--end::Berita Page-->