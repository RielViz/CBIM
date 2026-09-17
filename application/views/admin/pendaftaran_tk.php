<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="g-5 gx-xxl-8">
                <!--begin::Card-->
                <div class="card shadow-sm">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Data Pendaftaran Siswa Baru - TK & PAUD K Citra Bangsa Mandiri</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Total <?= count($data_pendaftaran); ?> pendaftar calon murid TK/PAUD</span>
                        </h3>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="tablePendaftaranTk">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted bg-light">
                                        <th class="ps-4 min-w-30px rounded-start">No</th>
                                        <th class="min-w-120px">Tgl Daftar</th>
                                        <th class="min-w-180px">Nama Calon Murid</th>
                                        <th class="min-w-140px">Kelompok Belajar</th>
                                        <th class="min-w-120px">JK / Tgl Lahir</th>
                                        <th class="min-w-160px">Orang Tua / WhatsApp</th>
                                        <th class="min-w-160px">Alamat</th>
                                        <th class="min-w-100px">Status</th>
                                        <th class="min-w-120px text-end pe-4 rounded-end">Aksi</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <?php if (!empty($data_pendaftaran)) : ?>
                                        <?php $no = 1; foreach ($data_pendaftaran as $row) : ?>
                                            <tr>
                                                <td class="ps-4 font-bold"><?= $no++; ?></td>
                                                <td>
                                                    <span class="text-dark fw-bold d-block fs-7"><?= date('d M Y', strtotime($row['tanggal_daftar'])); ?></span>
                                                    <span class="text-muted fs-8"><?= date('H:i', strtotime($row['tanggal_daftar'])); ?> WITA</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px me-3">
                                                            <span class="symbol-label bg-light-success text-success fw-bolder">
                                                                <?= strtoupper(substr($row['nama_lengkap'], 0, 1)); ?>
                                                            </span>
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <span class="text-dark fw-bolder fs-6"><?= htmlspecialchars($row['nama_lengkap']); ?></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge badge-light-primary fw-bolder fs-8"><?= htmlspecialchars($row['kelompok']); ?></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-light-<?= $row['jenis_kelamin'] == 'Laki-laki' ? 'primary' : 'danger'; ?> fw-bold mb-1">
                                                        <?= $row['jenis_kelamin']; ?>
                                                    </span>
                                                    <div class="text-muted fs-8"><?= date('d/m/Y', strtotime($row['tgl_lahir'])); ?></div>
                                                </td>
                                                <td>
                                                    <div class="text-dark fw-bold fs-7"><?= htmlspecialchars($row['nama_ortu']); ?></div>
                                                    <?php 
                                                        $clean_hp = preg_replace('/[^0-9]/', '', $row['no_hp']);
                                                        if (substr($clean_hp, 0, 1) === '0') {
                                                            $wa_num = '62' . substr($clean_hp, 1);
                                                        } else {
                                                            $wa_num = $clean_hp;
                                                        }
                                                        $wa_text = urlencode("Shalom Ayah/Bunda {$row['nama_ortu']}, kami dari Bunda Guru TK K Citra Bangsa Mandiri Kupang menyapa terkait pendaftaran ananda {$row['nama_lengkap']}.");
                                                    ?>
                                                    <a href="https://api.whatsapp.com/send?phone=<?= $wa_num; ?>&text=<?= $wa_text; ?>" target="_blank" class="badge badge-light-success text-success fw-bolder mt-1 d-inline-flex align-items-center gap-1">
                                                        <i class="bi bi-whatsapp fs-7"></i> <?= htmlspecialchars($row['no_hp']); ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="text-dark fs-7 text-truncate d-inline-block" style="max-width: 180px;" title="<?= htmlspecialchars($row['alamat']); ?>">
                                                        <?= htmlspecialchars($row['alamat']); ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <?php 
                                                        $badge_class = 'badge-light-warning';
                                                        if ($row['status'] == 'Dihubungi') $badge_class = 'badge-light-info';
                                                        if ($row['status'] == 'Diterima') $badge_class = 'badge-light-success';
                                                        if ($row['status'] == 'Ditolak') $badge_class = 'badge-light-danger';
                                                    ?>
                                                    <span class="badge <?= $badge_class; ?> fs-7 fw-bold"><?= $row['status']; ?></span>
                                                </td>
                                                <td class="text-end pe-4">
                                                    <!-- Edit Status Button -->
                                                    <button type="button" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#modalStatusTk<?= $row['id_pendaftaran']; ?>" title="Ubah Status">
                                                        <i class="bi bi-pencil-square fs-5"></i>
                                                    </button>
                                                    <!-- Delete Button -->
                                                    <button type="button" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDeleteTk<?= $row['id_pendaftaran']; ?>" title="Hapus Data">
                                                        <i class="bi bi-trash fs-5"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Modal Ubah Status TK -->
                                            <div class="modal fade" id="modalStatusTk<?= $row['id_pendaftaran']; ?>" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form action="<?= base_url('admin/update_status_tk'); ?>" method="POST">
                                                            <input type="hidden" name="id_pendaftaran" value="<?= $row['id_pendaftaran']; ?>">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title fw-bolder">Ubah Status Pendaftaran TK</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-bold">Nama Calon Murid</label>
                                                                    <input type="text" class="form-control" value="<?= htmlspecialchars($row['nama_lengkap']); ?>" readonly>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-bold">Status Pendaftaran</label>
                                                                    <select name="status" class="form-select" required>
                                                                        <option value="Baru" <?= $row['status'] == 'Baru' ? 'selected' : ''; ?>>Baru (Belum diproses)</option>
                                                                        <option value="Dihubungi" <?= $row['status'] == 'Dihubungi' ? 'selected' : ''; ?>>Dihubungi (Trial Class/Verifikasi)</option>
                                                                        <option value="Diterima" <?= $row['status'] == 'Diterima' ? 'selected' : ''; ?>>Diterima (Resmi Terdaftar)</option>
                                                                        <option value="Ditolak" <?= $row['status'] == 'Ditolak' ? 'selected' : ''; ?>>Ditolak / Dibatalkan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Hapus TK -->
                                            <div class="modal fade" id="modalDeleteTk<?= $row['id_pendaftaran']; ?>" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form action="<?= base_url('admin/delete_pendaftaran_tk'); ?>" method="POST">
                                                            <input type="hidden" name="id_pendaftaran" value="<?= $row['id_pendaftaran']; ?>">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title fw-bolder text-danger">Konfirmasi Hapus Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apakah Anda yakin ingin menghapus data pendaftaran atas nama <strong><?= htmlspecialchars($row['nama_lengkap']); ?></strong>?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-danger">Ya, Hapus Data</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="9" class="text-center py-5 text-muted">Belum ada data pendaftaran PPDB TK yang masuk.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Root-->
