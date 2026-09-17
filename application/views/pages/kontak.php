<div class="container py-12 py-lg-18">
    <!-- Header -->
    <div class="text-center mb-12">
        <span class="badge badge-light-primary fw-bolder px-4 py-2 mb-3">LAYANAN INFORMASI</span>
        <h1 class="fs-2hx fw-bolder text-dark mb-4">Hubungi Yayasan CBIM</h1>
        <p class="fs-5 text-muted max-w-700px mx-auto">
            Silakan kirimkan pertanyaan, kritik, atau saran Anda melalui formulir di bawah ini. Tim kami siap membantu Anda.
        </p>
    </div>

    <!-- Alert Messages -->
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success d-flex align-items-center p-5 mb-8">
            <i class="bi bi-check-circle fs-2x text-success me-4"></i>
            <div class="d-flex flex-column">
                <h4 class="mb-1 text-dark">Sukses!</h4>
                <span><?= $this->session->flashdata('success'); ?></span>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')) : ?>
        <div class="alert alert-danger d-flex align-items-center p-5 mb-8">
            <i class="bi bi-exclamation-triangle fs-2x text-danger me-4"></i>
            <div class="d-flex flex-column">
                <h4 class="mb-1 text-dark">Perhatian!</h4>
                <span><?= $this->session->flashdata('error'); ?></span>
            </div>
        </div>
    <?php endif; ?>

    <div class="row g-8">
        <!-- Form Section -->
        <div class="col-lg-7">
            <div class="card shadow-sm border p-8 bg-white rounded-3">
                <h3 class="fw-bolder text-dark mb-6">Kirim Pesan Online</h3>
                <form action="<?= base_url('kontak/kirim'); ?>" method="POST" id="kontakForm">
                    <!-- Anti-spam Honeypot (Hidden) -->
                    <div style="display:none !important; visibility:hidden !important;">
                        <input type="text" name="cbim_hp_check" value="" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark required">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control form-control-solid" placeholder="Contoh: Maria Fernandes" required />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark required">Alamat Email</label>
                            <input type="email" name="email" class="form-control form-control-solid" placeholder="nama@email.com" required />
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="form-label fw-bold text-dark required">Subjek</label>
                        <input type="text" name="subjek" class="form-control form-control-solid" placeholder="Contoh: Informasi Pendaftaran Siswa Baru" required />
                    </div>

                    <div class="mb-6">
                        <label class="form-label fw-bold text-dark required">Pesan</label>
                        <textarea name="pesan" rows="5" class="form-control form-control-solid" placeholder="Tuliskan pertanyaan atau pesan Anda secara lengkap..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-cbim-primary px-8 py-3">
                        <i class="bi bi-send-fill me-2"></i> Kirim Pesan
                    </button>
                </form>
            </div>
        </div>

        <!-- Info & WhatsApp Section -->
        <div class="col-lg-5">
            <div class="card shadow-sm border p-8 bg-white rounded-3 mb-6">
                <h3 class="fw-bolder text-dark mb-6">Informasi Kontak</h3>
                
                <div class="d-flex align-items-start mb-6">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary me-4">
                        <i class="bi bi-geo-alt-fill text-cbim-primary fs-3 p-3"></i>
                    </div>
                    <div>
                        <h5 class="fw-bolder mb-1">Alamat Kantor</h5>
                        <p class="text-muted fs-6 mb-0">
                            <?= !empty($data_alamat[0]['isi_konten']) ? $data_alamat[0]['isi_konten'] : "Jl. Manafe No.17, Kel. Kayu Putih, Kec. Oebobo, Kota Kupang, NTT"; ?>
                        </p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-6">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary me-4">
                        <i class="bi bi-telephone-fill text-cbim-primary fs-3 p-3"></i>
                    </div>
                    <div>
                        <h5 class="fw-bolder mb-1">Telepon & Email</h5>
                        <p class="text-muted fs-6 mb-0">
                            <?= !empty($data_kontak[0]['isi_konten']) ? $data_kontak[0]['isi_konten'] : "Telepon: (0380) 8553888<br>Email: info@cbim.or.id"; ?>
                        </p>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary me-4">
                        <i class="bi bi-clock-fill text-cbim-primary fs-3 p-3"></i>
                    </div>
                    <div>
                        <h5 class="fw-bolder mb-1">Jam Layanan Kantor</h5>
                        <p class="text-muted fs-6 mb-0">
                            Senin - Jumat: 08.00 - 16.00 WITA<br>
                            Sabtu: 08.00 - 13.00 WITA
                        </p>
                    </div>
                </div>
            </div>

            <!-- Direct WhatsApp Help Card -->
            <div class="card shadow-sm border p-6 bg-light-success rounded-3 border-success">
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-whatsapp fs-2x text-success me-3"></i>
                    <h4 class="fw-bolder text-dark mb-0">Layanan Cepat WhatsApp</h4>
                </div>
                <p class="fs-7 text-muted mb-4">
                    Butuh tanggapan cepat? Hubungi langsung layanan WhatsApp resmi sekretariat kami.
                </p>
                <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Yayasan%20CBIM,%20saya%20ingin%20bertanya%20informasi..." target="_blank" rel="noopener" class="btn btn-success fw-bold">
                    <i class="bi bi-whatsapp me-2"></i> Chat WhatsApp Sekarang
                </a>
            </div>
        </div>
    </div>
</div>
