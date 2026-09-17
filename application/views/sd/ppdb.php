<!-- Page Banner PPDB SD (Unified UCB Maroon & Gold Theme) -->
<section class="bg-sd-page-header py-5 text-white">
    <div class="container py-4 text-center" data-aos="fade-up">
        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-semibold mb-2 fs-7">
            <i class="bi bi-star-fill me-1"></i> TA 2026/2027
        </span>
        <h1 class="fw-extrabold display-5 brand-font mb-2">Pendaftaran Peserta Didik Baru (PPDB) Online</h1>
        <p class="lead opacity-90 mx-auto" style="max-width: 680px;">
            Bergabunglah bersama keluarga besar SD K Citra Bangsa Mandiri Kupang. Daftarkan putra-putri tercinta dengan mudah melalui formulir resmi di bawah ini.
        </p>
    </div>
</section>

<!-- Breadcrumb -->
<div class="breadcrumb-sd">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 fs-7">
                <li class="breadcrumb-item"><a href="<?= base_url('sd'); ?>"><i class="bi bi-house-door"></i> Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">PPDB Online SD</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Form & Informasi Pendaftaran PPDB SD -->
<section class="py-5" style="background-color: var(--cbim-bg);">
    <div class="container py-3">
        <div class="row g-5">
            <!-- Kolom Kiri: Formulir Pendaftaran Online -->
            <div class="col-lg-7" data-aos="fade-right">
                <div class="card card-sd p-4 p-md-5 border-top border-4 border-danger">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded-3 bg-danger text-white p-3 d-flex align-items-center justify-content-center" style="width: 52px; height: 52px;">
                            <i class="bi bi-pencil-square fs-3"></i>
                        </div>
                        <div>
                            <h3 class="fw-extrabold text-dark mb-0 brand-font">Formulir Calon Siswa Baru</h3>
                            <small class="text-muted">Isilah data ananda dan kontak orang tua dengan benar dan lengkap.</small>
                        </div>
                    </div>

                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show rounded-4 border-0 shadow-sm p-4 mb-4" role="alert">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-check-circle-fill fs-1 text-success"></i>
                                <div>
                                    <h5 class="fw-bold mb-1 brand-font">Pendaftaran Berhasil Terkirim!</h5>
                                    <p class="mb-0 fs-7"><?= $this->session->flashdata('success'); ?></p>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show rounded-4 border-0 shadow-sm p-4 mb-4" role="alert">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-exclamation-triangle-fill fs-1 text-danger"></i>
                                <div>
                                    <h5 class="fw-bold mb-1 brand-font">Mohon Maaf!</h5>
                                    <p class="mb-0 fs-7"><?= $this->session->flashdata('error'); ?></p>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('sd/submit_ppdb'); ?>" method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-bold fs-7 text-dark">Nama Lengkap Calon Siswa <span class="text-danger">*</span></label>
                            <input type="text" name="nama_lengkap" class="form-control form-control-lg rounded-3 fs-7" placeholder="Contoh: Gracia Aurelia Manafe" required>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold fs-7 text-dark">NISN / NIK (Jika Ada)</label>
                                <input type="text" name="nisn" class="form-control form-control-lg rounded-3 fs-7" placeholder="Nomor NISN atau NIK Akta">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold fs-7 text-dark">Jenis Kelamin <span class="text-danger">*</span></label>
                                <select name="jenis_kelamin" class="form-select form-select-lg rounded-3 fs-7" required>
                                    <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold fs-7 text-dark">Tempat Lahir <span class="text-danger">*</span></label>
                                <input type="text" name="tempat_lahir" class="form-control form-control-lg rounded-3 fs-7" placeholder="Contoh: Kupang" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold fs-7 text-dark">Tanggal Lahir <span class="text-danger">*</span></label>
                                <input type="date" name="tgl_lahir" class="form-control form-control-lg rounded-3 fs-7" required>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold fs-7 text-dark">Nama Orang Tua / Wali <span class="text-danger">*</span></label>
                                <input type="text" name="nama_ortu" class="form-control form-control-lg rounded-3 fs-7" placeholder="Contoh: Bapak Daniel Manafe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold fs-7 text-dark">No. WhatsApp / HP Aktif <span class="text-danger">*</span></label>
                                <input type="tel" name="no_hp" class="form-control form-control-lg rounded-3 fs-7" placeholder="Contoh: 081234567890" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold fs-7 text-dark">Alamat Lengkap Tempat Tinggal <span class="text-danger">*</span></label>
                            <textarea name="alamat" class="form-control rounded-3 fs-7" rows="3" placeholder="Nama Jalan, RT/RW, Kelurahan, Kecamatan, Kota Kupang" required></textarea>
                        </div>


                        <!-- =============================================================
                             PATCH 2026-09-07
                             1. Honeypot anti-bot: kolom tersembunyi. Manusia tidak akan
                                pernah mengisinya; bot pengisi-otomatis hampir selalu iya.
                             2. Persetujuan orang tua/wali. Formulir ini mengumpulkan data
                                pribadi anak di bawah umur (nama, tanggal lahir, NISN/NIK,
                                alamat rumah). UU 27/2022 tentang Pelindungan Data Pribadi
                                mensyaratkan persetujuan orang tua/wali untuk data anak.
                                Divalidasi juga di sisi server, bukan hanya di HTML.
                             ============================================================= -->
                        <div class="d-none" aria-hidden="true">
                            <label>Jangan isi kolom ini</label>
                            <input type="text" name="cbim_hp_check" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="form-check mb-4 p-3 rounded-3" style="background-color: var(--cbim-primary-subtle); border: 1px solid rgba(137,12,37,.15); padding-left: 2.5rem !important;">
                            <input class="form-check-input" type="checkbox" name="persetujuan_ortu" id="persetujuanOrtu" value="1" required>
                            <label class="form-check-label fs-7 text-dark" for="persetujuanOrtu">
                                Saya adalah orang tua/wali sah dari calon siswa dan menyetujui
                                data di atas dikumpulkan serta diproses oleh SD K Citra Bangsa Mandiri
                                untuk keperluan penerimaan peserta didik baru, sesuai
                                <a href="<?= base_url('kebijakan-privasi'); ?>" target="_blank" style="color: var(--cbim-primary); font-weight: 600;">Kebijakan Privasi</a>.
                                <span class="text-danger">*</span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-cbim-primary btn-lg w-100 py-3 rounded-3 shadow">
                            <i class="bi bi-send-fill me-2"></i> Kirim Formulir Pendaftaran Sekarang
                        </button>
                    </form>
                </div>
            </div>

            <!-- Kolom Kanan: Panduan, Syarat & Alur Pendaftaran -->
            <div class="col-lg-5" data-aos="fade-left">
                <!-- Alur Pendaftaran -->
                <div class="card card-sd p-4 mb-4 border-top border-4 border-warning">
                    <h5 class="fw-bold text-dark mb-3 brand-font"><i class="bi bi-diagram-3-fill text-warning me-2"></i> Alur Pendaftaran PPDB</h5>
                    <ol class="list-unstyled fs-7 mb-0">
                        <li class="d-flex gap-3 mb-3">
                            <span class="badge bg-danger rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;">1</span>
                            <div>
                                <strong class="text-dark">Isi Formulir Online</strong>
                                <p class="text-muted mb-0">Lengkapi biodata calon murid pada formulir di samping.</p>
                            </div>
                        </li>
                        <li class="d-flex gap-3 mb-3">
                            <span class="badge bg-danger rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;">2</span>
                            <div>
                                <strong class="text-dark">Konfirmasi Panitia via WhatsApp</strong>
                                <p class="text-muted mb-0">Panitia PPDB akan menghubungi Anda untuk konfirmasi jadwal observasi anak.</p>
                            </div>
                        </li>
                        <li class="d-flex gap-3 mb-3">
                            <span class="badge bg-danger rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;">3</span>
                            <div>
                                <strong class="text-dark">Observasi Kesiapan & Wawancara</strong>
                                <p class="text-muted mb-0">Pengenalan sekolah yang ramah dan menyenangkan bagi calon siswa.</p>
                            </div>
                        </li>
                        <li class="d-flex gap-3">
                            <span class="badge bg-warning text-dark rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;">4</span>
                            <div>
                                <strong class="text-dark">Daftar Ulang & Pembagian Seragam</strong>
                                <p class="text-muted mb-0">Pemberian kelengkapan atribut sekolah dan selamat bergabung!</p>
                            </div>
                        </li>
                    </ol>
                </div>

                <!-- Dokumen Persyaratan -->
                <div class="card card-sd p-4 mb-4 border-top border-4 border-danger">
                    <h5 class="fw-bold text-dark mb-3 brand-font"><i class="bi bi-file-earmark-check-fill text-danger me-2"></i> Dokumen Berkas Pendaftaran</h5>
                    <ul class="list-unstyled text-muted fs-7 mb-0">
                        <li class="mb-2 d-flex align-items-center gap-2">
                            <i class="bi bi-check2-circle text-danger"></i> Fotokopi Akta Kelahiran Anak (2 Lembar)
                        </li>
                        <li class="mb-2 d-flex align-items-center gap-2">
                            <i class="bi bi-check2-circle text-danger"></i> Fotokopi Kartu Keluarga (KK) (2 Lembar)
                        </li>
                        <li class="mb-2 d-flex align-items-center gap-2">
                            <i class="bi bi-check2-circle text-danger"></i> Fotokopi KTP Kedua Orang Tua / Wali
                        </li>
                        <li class="mb-2 d-flex align-items-center gap-2">
                            <i class="bi bi-check2-circle text-danger"></i> Pas Foto Berwarna Ukuran 3x4 (3 Lembar)
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-check2-circle text-danger"></i> Ijazah / Surat Keterangan Lulus TK (Menyusul)
                        </li>
                    </ul>
                </div>

                <!-- Bantuan Layanan PPDB -->
                <div class="card card-sd p-4 bg-light border-0">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-headset fs-1 text-danger"></i>
                        <div>
                            <h6 class="fw-bold text-dark mb-1 brand-font">Butuh Bantuan PPDB?</h6>
                            <p class="text-muted fs-7 mb-2">Tim sekretariat kami siap membantu proses pendaftaran ananda.</p>
                            <a href="https://api.whatsapp.com/send?phone=6281234567890&text=Halo%20Admin%20PPDB%20SD%20K%20Citra%20Bangsa%2C%20saya%20ingin%20bertanya%20mengenai%20pendaftaran" target="_blank" class="btn btn-cbim-primary btn-sm rounded-pill fw-bold">
                                <i class="bi bi-whatsapp me-1"></i> Chat WhatsApp Panitia
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
