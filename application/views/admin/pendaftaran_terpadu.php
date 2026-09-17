<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <!-- Header Card -->
            <div class="card mb-6">
                <div class="card-body pt-9 pb-4">
                    <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1 class="text-gray-900 fs-2 fw-bolder me-1">Pendaftaran PPDB Terpadu</h1>
                                        <span class="badge badge-light-primary fw-bolder ms-2 fs-8 py-1 px-3">Semua Jenjang</span>
                                    </div>
                                    <div class="text-muted fs-6">Kelola seluruh data calon siswa/mahasiswa baru Yayasan CBIM (TK, SD, SMP, SMA, UCB).</div>
                                </div>
                                <div class="d-flex my-4">
                                    <a href="<?= base_url('admin/export_pendaftaran_csv'); ?>" class="btn btn-sm btn-success me-3">
                                        <i class="bi bi-file-earmark-excel fs-4 me-1"></i> Ekspor CSV
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Filter Bar -->
                    <form method="GET" action="<?= base_url('admin/pendaftaran_terpadu'); ?>" class="row g-3 align-items-end pt-3 border-top">
                        <div class="col-md-3">
                            <label class="form-label fs-7 fw-bold text-gray-700">Filter Jenjang:</label>
                            <select name="jenjang" class="form-select form-select-sm form-select-solid">
                                <option value="">Semua Jenjang</option>
                                <option value="TK" <?= (!empty($filter_jenjang) && $filter_jenjang === 'TK') ? 'selected' : ''; ?>>PAUD / TK</option>
                                <option value="SD" <?= (!empty($filter_jenjang) && $filter_jenjang === 'SD') ? 'selected' : ''; ?>>SD Kristen</option>
                                <option value="SMP" <?= (!empty($filter_jenjang) && $filter_jenjang === 'SMP') ? 'selected' : ''; ?>>SMP Kristen</option>
                                <option value="SMA" <?= (!empty($filter_jenjang) && $filter_jenjang === 'SMA') ? 'selected' : ''; ?>>SMA Kristen</option>
                                <option value="UCB" <?= (!empty($filter_jenjang) && $filter_jenjang === 'UCB') ? 'selected' : ''; ?>>UCB (Universitas)</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fs-7 fw-bold text-gray-700">Filter Status:</label>
                            <select name="status" class="form-select form-select-sm form-select-solid">
                                <option value="">Semua Status</option>
                                <option value="Baru" <?= (!empty($filter_status) && $filter_status === 'Baru') ? 'selected' : ''; ?>>Baru</option>
                                <option value="Dihubungi" <?= (!empty($filter_status) && $filter_status === 'Dihubungi') ? 'selected' : ''; ?>>Dihubungi</option>
                                <option value="Diterima" <?= (!empty($filter_status) && $filter_status === 'Diterima') ? 'selected' : ''; ?>>Diterima</option>
                                <option value="Ditolak" <?= (!empty($filter_status) && $filter_status === 'Ditolak') ? 'selected' : ''; ?>>Ditolak</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-sm btn-primary w-100">
                                <i class="bi bi-funnel me-1"></i> Filter
                            </button>
                        </div>
                        <div class="col-md-2">
                            <a href="<?= base_url('admin/pendaftaran_terpadu'); ?>" class="btn btn-sm btn-light w-100">Reset</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Table Card -->
            <div class="card">
                <div class="card-body py-4">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_pendaftaran">
                            <thead>
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px">No</th>
                                    <th>No Registrasi</th>
                                    <th>Jenjang</th>
                                    <th>Nama Siswa</th>
                                    <th>Orang Tua</th>
                                    <th>Kontak (WA)</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Status</th>
                                    <th class="text-end min-w-100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                                <?php if (!empty($data_pendaftaran)) : ?>
                                    <?php foreach ($data_pendaftaran as $i => $row) : ?>
                                        <tr>
                                            <td><?= $i + 1; ?></td>
                                            <td><span class="badge badge-light-primary fw-bolder"><?= htmlspecialchars($row['no_registrasi']); ?></span></td>
                                            <td><span class="badge badge-light-info fw-bolder"><?= htmlspecialchars($row['jenjang']); ?></span></td>
                                            <td>
                                                <div class="text-dark fw-bolder"><?= htmlspecialchars($row['nama_lengkap']); ?></div>
                                                <small class="text-muted"><?= htmlspecialchars($row['jenis_kelamin']); ?></small>
                                            </td>
                                            <td><?= htmlspecialchars($row['nama_ortu']); ?></td>
                                            <td>
                                                <a href="https://wa.me/<?= preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', $row['no_hp'])); ?>" target="_blank" class="btn btn-sm btn-light-success py-1 px-2">
                                                    <i class="bi bi-whatsapp"></i> <?= htmlspecialchars($row['no_hp']); ?>
                                                </a>
                                            </td>
                                            <td><?= date('d/m/Y H:i', strtotime($row['tanggal_daftar'])); ?></td>
                                            <td>
                                                <?php
                                                    $badge = 'secondary';
                                                    if ($row['status'] === 'Baru') $badge = 'primary';
                                                    elseif ($row['status'] === 'Dihubungi') $badge = 'warning';
                                                    elseif ($row['status'] === 'Diterima') $badge = 'success';
                                                    elseif ($row['status'] === 'Ditolak') $badge = 'danger';
                                                ?>
                                                <span class="badge badge-light-<?= $badge; ?>"><?= htmlspecialchars($row['status']); ?></span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button" class="btn btn-sm btn-icon btn-light-primary me-1" data-bs-toggle="modal" data-bs-target="#modalStatus<?= $row['id_pendaftaran']; ?>" title="Ubah Status">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <?php if ($this->session->userdata('role') === 'administrator' || $this->session->userdata('role') === 'default') : ?>
                                                    <button type="button" class="btn btn-sm btn-icon btn-light-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $row['id_pendaftaran']; ?>" title="Hapus">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                <?php endif; ?>

                                                <!-- Modal Ubah Status -->
                                                <div class="modal fade" id="modalStatus<?= $row['id_pendaftaran']; ?>" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered text-start">
                                                        <div class="modal-content">
                                                            <form action="<?= base_url('admin/update_status_pendaftaran'); ?>" method="POST">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Ubah Status Pendaftaran</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id_pendaftaran" value="<?= $row['id_pendaftaran']; ?>" />
                                                                    <p><strong>Nama:</strong> <?= htmlspecialchars($row['nama_lengkap']); ?> (<?= htmlspecialchars($row['no_registrasi']); ?>)</p>
                                                                    <div class="mb-3">
                                                                        <label class="form-label fw-bold">Pilih Status Baru:</label>
                                                                        <select name="status" class="form-select">
                                                                            <option value="Baru" <?= $row['status'] === 'Baru' ? 'selected' : ''; ?>>Baru</option>
                                                                            <option value="Dihubungi" <?= $row['status'] === 'Dihubungi' ? 'selected' : ''; ?>>Dihubungi</option>
                                                                            <option value="Diterima" <?= $row['status'] === 'Diterima' ? 'selected' : ''; ?>>Diterima</option>
                                                                            <option value="Ditolak" <?= $row['status'] === 'Ditolak' ? 'selected' : ''; ?>>Ditolak</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-primary">Simpan Status</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal Hapus -->
                                                <div class="modal fade" id="modalHapus<?= $row['id_pendaftaran']; ?>" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered text-start">
                                                        <div class="modal-content">
                                                            <form action="<?= base_url('admin/delete_pendaftaran'); ?>" method="POST">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Hapus Data Pendaftaran</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id_pendaftaran" value="<?= $row['id_pendaftaran']; ?>" />
                                                                    <p>Apakah Anda yakin ingin menghapus data pendaftaran <strong><?= htmlspecialchars($row['nama_lengkap']); ?></strong>?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="9" class="text-center py-6 text-muted">Belum ada data pendaftaran yang sesuai.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
