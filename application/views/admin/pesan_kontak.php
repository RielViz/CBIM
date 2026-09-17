<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <!-- Header Card -->
            <div class="card mb-6">
                <div class="card-body pt-9 pb-4">
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <h1 class="text-gray-900 fs-2 fw-bolder me-1">Pesan Masuk Kontak Website</h1>
                                <span class="badge badge-light-danger fw-bolder ms-2 fs-8 py-1 px-3"><?= count($data_pesan); ?> Pesan</span>
                            </div>
                            <div class="text-muted fs-6">Daftar pertanyaan, aspirasi, dan pesan pengunjung dari formulir kontak website.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Card -->
            <div class="card">
                <div class="card-body py-4">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_pesan">
                            <thead>
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px">No</th>
                                    <th>Pengirim</th>
                                    <th>Email</th>
                                    <th>Subjek</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th class="text-end min-w-100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                                <?php if (!empty($data_pesan)) : ?>
                                    <?php foreach ($data_pesan as $i => $row) : ?>
                                        <tr>
                                            <td><?= $i + 1; ?></td>
                                            <td>
                                                <div class="text-dark fw-bolder"><?= htmlspecialchars($row['nama']); ?></div>
                                                <small class="text-muted">IP: <?= htmlspecialchars($row['ip_address']); ?></small>
                                            </td>
                                            <td>
                                                <a href="mailto:<?= htmlspecialchars($row['email']); ?>" class="text-primary">
                                                    <?= htmlspecialchars($row['email']); ?>
                                                </a>
                                            </td>
                                            <td><?= htmlspecialchars($row['subjek']); ?></td>
                                            <td><?= date('d/m/Y H:i', strtotime($row['created_at'])); ?></td>
                                            <td>
                                                <?php
                                                    $badge = 'danger';
                                                    if ($row['status'] === 'Sudah Dibaca') $badge = 'warning';
                                                    elseif ($row['status'] === 'Dibalas') $badge = 'success';
                                                ?>
                                                <span class="badge badge-light-<?= $badge; ?>"><?= htmlspecialchars($row['status']); ?></span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button" class="btn btn-sm btn-icon btn-light-primary me-1" data-bs-toggle="modal" data-bs-target="#modalLihatPesan<?= $row['id_pesan']; ?>" title="Lihat Pesan">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-light-danger" data-bs-toggle="modal" data-bs-target="#modalHapusPesan<?= $row['id_pesan']; ?>" title="Hapus">
                                                    <i class="bi bi-trash"></i>
                                                </button>

                                                <!-- Modal Lihat Pesan -->
                                                <div class="modal fade" id="modalLihatPesan<?= $row['id_pesan']; ?>" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered text-start">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"><?= htmlspecialchars($row['subjek']); ?></h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-4">
                                                                    <div class="text-muted fs-7">Pengirim:</div>
                                                                    <div class="fw-bold fs-6 text-dark"><?= htmlspecialchars($row['nama']); ?> &lt;<?= htmlspecialchars($row['email']); ?>&gt;</div>
                                                                    <small class="text-muted"><?= date('d F Y, H:i', strtotime($row['created_at'])); ?></small>
                                                                </div>
                                                                <div class="p-4 bg-light rounded border text-dark fs-6 lh-base mb-4">
                                                                    <?= nl2br(htmlspecialchars($row['pesan'])); ?>
                                                                </div>

                                                                <form action="<?= base_url('admin/update_status_pesan'); ?>" method="POST">
                                                                    <input type="hidden" name="id_pesan" value="<?= $row['id_pesan']; ?>" />
                                                                    <div class="mb-3">
                                                                        <label class="form-label fw-bold">Ubah Status:</label>
                                                                        <select name="status" class="form-select">
                                                                            <option value="Belum Dibaca" <?= $row['status'] === 'Belum Dibaca' ? 'selected' : ''; ?>>Belum Dibaca</option>
                                                                            <option value="Sudah Dibaca" <?= $row['status'] === 'Sudah Dibaca' ? 'selected' : ''; ?>>Sudah Dibaca</option>
                                                                            <option value="Dibalas" <?= $row['status'] === 'Dibalas' ? 'selected' : ''; ?>>Dibalas</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <a href="mailto:<?= htmlspecialchars($row['email']); ?>?subject=Balasan:%20<?= urlencode($row['subjek']); ?>" class="btn btn-sm btn-primary">
                                                                            <i class="bi bi-reply-fill me-1"></i> Balas via Email
                                                                        </a>
                                                                        <button type="submit" class="btn btn-sm btn-success">Simpan Status</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal Hapus Pesan -->
                                                <div class="modal fade" id="modalHapusPesan<?= $row['id_pesan']; ?>" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered text-start">
                                                        <div class="modal-content">
                                                            <form action="<?= base_url('admin/delete_pesan'); ?>" method="POST">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Hapus Pesan</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id_pesan" value="<?= $row['id_pesan']; ?>" />
                                                                    <p>Apakah Anda yakin ingin menghapus pesan dari <strong><?= htmlspecialchars($row['nama']); ?></strong>?</p>
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
                                        <td colspan="7" class="text-center py-6 text-muted">Belum ada pesan masuk.</td>
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
