<!--begin::Landing hero spacer-->
<div class="d-flex flex-column flex-center w-100 min-h-1px min-h-lg-1px px-9"></div>
<!--end::Landing hero spacer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Header Section-->

<!--begin::Galeri Page-->
<div class="py-12 py-lg-18">
    <div class="container">
        <!--begin::Section Header-->
        <div class="cbim-section-header">
            <h2 class="fs-2hx text-dark" id="galeri-page" data-kt-scroll-offset="{default: 125, lg: 150}">
                Galeri Foto
            </h2>
            <p class="section-subtitle">Dokumentasi momen-momen penting Yayasan Citra Bina Insan Mandiri</p>
        </div>
        <!--end::Section Header-->

        <?php if (count($data_galeri) > 0) : ?>
            <!--begin::Gallery Grid-->
            <div class="cbim-gallery-grid" style="grid-template-columns: repeat(3, 1fr);">
                <?php foreach ($data_galeri as $key => $foto) : ?>
                    <a href="<?= base_url('assets/templates/media/galeri/') . $foto['foto']; ?>"
                       data-lightbox="galeri-cbim"
                       data-title="<?= htmlspecialchars($foto['judul_foto']); ?>"
                       data-aos="fade-up"
                       data-aos-delay="<?= ($key % 6) * 60; ?>"
                       data-aos-duration="600">
                        <div class="cbim-gallery-item">
                            <img src="<?= base_url('assets/templates/media/galeri/') . $foto['foto']; ?>"
                                 alt="<?= htmlspecialchars($foto['judul_foto']); ?>"
                                 style="width:100%;height:100%;object-fit:cover;display:block;"
                                 loading="lazy"
                                 decoding="async" />
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
            <!--end::Gallery Grid-->

            <!--begin::Gallery Stats-->
            <div class="text-center mt-10">
                <span class="badge badge-light-primary fs-6 fw-bold px-4 py-2">
                    <i class="bi bi-images me-1"></i> Total: <?= count($data_galeri); ?> Foto
                </span>
            </div>
            <!--end::Gallery Stats-->

        <?php else : ?>
            <!--begin::Empty State-->
            <div class="text-center py-20">
                <div class="mb-6">
                    <i class="bi bi-images" style="font-size: 4rem; color: var(--cbim-gray-200);"></i>
                </div>
                <h3 class="text-muted fw-bold fs-3">Belum Ada Foto</h3>
                <p class="text-muted fs-6">Galeri foto akan segera ditampilkan di sini.</p>
            </div>
            <!--end::Empty State-->
        <?php endif; ?>

    </div>
</div>
<!--end::Galeri Page-->