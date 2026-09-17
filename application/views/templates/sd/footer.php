    <!-- Footer SD K Citra Bangsa Mandiri (Unified UCB & Yayasan CBIM Theme) -->
    </main>
    <!-- /FE-05 (PATCH): penutup landmark <main> -->

    <footer class="pt-5 pb-4 mt-5 text-light" style="background-color: var(--cbim-secondary); border-top: 5px solid var(--cbim-primary);">
        <div class="container">
            <div class="row g-4 pb-4 border-bottom border-secondary border-opacity-25">
                <!-- Foundation & School Identity -->
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="<?= base_url(); ?>assets/templates/media/logos/sd.png" alt="Logo SD K Citra Bangsa" height="54" class="bg-white p-1 rounded-circle shadow-sm" loading="lazy" decoding="async">
                        <div>
                            <h5 class="mb-0 text-white brand-font fw-bold">SD K CITRA BANGSA</h5>
                            <small class="fw-bold" style="color: var(--cbim-gold);">Mandiri, Cerdas, Berkarakter Kristiani</small>
                        </div>
                    </div>
                    <p class="fs-7 text-secondary leading-relaxed mb-3">
                        SD Kristen Citra Bangsa Mandiri adalah satuan pendidikan dasar unggulan di bawah naungan <strong>Yayasan Citra Bina Insan Mandiri (YCBIM) Kupang</strong> yang menaungi <strong>Universitas Citra Bangsa (UCB)</strong>. Berkomitmen mencetak lulusan berprestasi akademik tinggi, berwawasan teknologi, dan berakhlak mulia.
                    </p>
                    <div class="d-flex gap-2">
                        <a href="https://www.facebook.com/profile.php?id=100086189573438" target="_blank" class="btn btn-outline-light btn-sm rounded-circle" style="width:36px;height:36px;display:flex;align-items:center;justify-content:center;" title="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.youtube.com/@CBIMYayasan" target="_blank" class="btn btn-outline-light btn-sm rounded-circle" style="width:36px;height:36px;display:flex;align-items:center;justify-content:center;" title="YouTube"><i class="bi bi-youtube"></i></a>
                        <a href="https://www.instagram.com/yayasan_cbim" target="_blank" class="btn btn-outline-light btn-sm rounded-circle" style="width:36px;height:36px;display:flex;align-items:center;justify-content:center;" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=6281234567890" target="_blank" class="btn btn-outline-success btn-sm rounded-circle" style="width:36px;height:36px;display:flex;align-items:center;justify-content:center;" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Navigation Quicklinks -->
                <div class="col-lg-2 col-6">
                    <h5 class="mb-3 fs-6 text-white brand-font fw-bold" style="border-left: 3px solid var(--cbim-primary); padding-left: 8px;">Menu Utama</h5>
                    <ul class="list-unstyled fs-7">
                        <li class="mb-2"><a href="<?= base_url('sd'); ?>" class="text-secondary text-decoration-none hover-red"><i class="bi bi-chevron-right text-danger me-1"></i> Beranda</a></li>
                        <li class="mb-2"><a href="<?= base_url('sd/profil'); ?>" class="text-secondary text-decoration-none hover-red"><i class="bi bi-chevron-right text-danger me-1"></i> Profil & Visi Misi</a></li>
                        <li class="mb-2"><a href="<?= base_url('sd/fasilitas'); ?>" class="text-secondary text-decoration-none hover-red"><i class="bi bi-chevron-right text-danger me-1"></i> Sarana & Fasilitas</a></li>
                        <li class="mb-2"><a href="<?= base_url('sd/kegiatan'); ?>" class="text-secondary text-decoration-none hover-red"><i class="bi bi-chevron-right text-danger me-1"></i> Kegiatan Siswa</a></li>
                        <li class="mb-2"><a href="<?= base_url('sd/ppdb'); ?>" class="text-secondary text-decoration-none hover-red"><i class="bi bi-chevron-right text-warning me-1"></i> PPDB Online SD</a></li>
                    </ul>
                </div>

                <!-- YCBIM Education Network -->
                <div class="col-lg-3 col-6">
                    <h5 class="mb-3 fs-6 text-white brand-font fw-bold" style="border-left: 3px solid var(--cbim-gold); padding-left: 8px;">Jejaring Yayasan CBIM</h5>
                    <ul class="list-unstyled fs-7">
                        <li class="mb-2"><a href="https://ucb.ac.id/" target="_blank" class="text-secondary text-decoration-none hover-gold"><i class="bi bi-mortarboard-fill text-warning me-1"></i> Universitas Citra Bangsa (UCB)</a></li>
                        <li class="mb-2"><a href="https://smakcitrabangsa.sch.id/" target="_blank" class="text-secondary text-decoration-none hover-gold"><i class="bi bi-building text-warning me-1"></i> SMA K Citra Bangsa Mandiri</a></li>
                        <li class="mb-2"><a href="http://smpkcitrabangsa.com/" target="_blank" class="text-secondary text-decoration-none hover-gold"><i class="bi bi-journal-bookmark text-warning me-1"></i> SMP K Citra Bangsa Mandiri</a></li>
                        <li class="mb-2"><a href="<?= base_url('sd'); ?>" class="text-white fw-bold text-decoration-none"><i class="bi bi-check-circle-fill text-danger me-1"></i> SD K Citra Bangsa Mandiri</a></li>
                        <li class="mb-2"><a href="<?= base_url('tk'); ?>" class="text-secondary text-decoration-none hover-gold"><i class="bi bi-balloon-fill text-warning me-1"></i> TK & PAUD K Citra Bangsa</a></li>
                        <li class="mb-2"><a href="<?= base_url(); ?>" class="text-secondary text-decoration-none hover-gold"><i class="bi bi-house-door text-warning me-1"></i> Portal Pusat Yayasan</a></li>
                    </ul>
                </div>

                <!-- Contact & Location -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3 fs-6 text-white brand-font fw-bold" style="border-left: 3px solid var(--cbim-primary); padding-left: 8px;">Sekretariat & Kontak</h5>
                    <p class="fs-7 text-secondary mb-2 d-flex align-items-start gap-2">
                        <i class="bi bi-geo-alt-fill text-danger mt-1"></i>
                        <span>Jl. Manafe No.17, Kel. Kayu Putih, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur 85111</span>
                    </p>
                    <p class="fs-7 text-secondary mb-2 d-flex align-items-center gap-2">
                        <i class="bi bi-telephone-fill text-danger"></i>
                        <span><?= !empty($data_kontak[0]['isi_konten']) ? strip_tags($data_kontak[0]['isi_konten']) : '(0380) 8553978 / 0812-3456-7890'; ?></span>
                    </p>
                    <p class="fs-7 text-secondary mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-envelope-fill text-danger"></i>
                        <span>sd.citrabangsa@cbim.or.id</span>
                    </p>
                    <a href="https://api.whatsapp.com/send?phone=6281234567890&text=Halo%20Panitia%20PPDB%20SD%20K%20Citra%20Bangsa%2C%20saya%20ingin%20bertanya%20informasi%20pendaftaran" target="_blank" class="btn btn-cbim-primary btn-sm rounded-pill w-100 fw-bold py-2">
                        <i class="bi bi-whatsapp me-1"></i> Hubungi WhatsApp Admin
                    </a>
                </div>
            </div>

            <!-- Copyright Bar -->
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center pt-3 fs-7 text-secondary">
                <p class="mb-2 mb-sm-0">&copy; <?= date('Y'); ?> <strong>SD K Citra Bangsa Mandiri</strong> — Yayasan Citra Bina Insan Mandiri (YCBIM).</p>
                <p class="mb-0">Pendidikan Unggul & Berkarakter Kristiani</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 50
        });
    </script>

    <!-- BE-10 (PATCH): banner persetujuan cookie untuk subsite -->
    <?php $this->load->view('templates/subsite/cookie_banner'); ?>

</body>
</html>
