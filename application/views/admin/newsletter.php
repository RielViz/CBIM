<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <!-- Header Card -->
            <div class="card mb-6">
                <div class="card-body pt-9 pb-4">
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <h1 class="text-gray-900 fs-2 fw-bolder me-1">Pelanggan Newsletter Yayasan CBIM</h1>
                                <span class="badge badge-light-success fw-bolder ms-2 fs-8 py-1 px-3"><?= count($subscribers); ?> Subscriber</span>
                            </div>
                            <div class="text-muted fs-6">Kelola daftar email masyarakat yang berlangganan informasi warta dan pengumuman CBIM.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Card -->
            <div class="card">
                <div class="card-body py-4">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_newsletter">
                            <thead>
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px">No</th>
                                    <th>Alamat Email</th>
                                    <th>Preferensi Unit</th>
                                    <th>Tanggal Bergabung</th>
                                    <th>Status</th>
                                    <th class="text-end min-w-100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                                <?php if (!empty($subscribers)) : ?>
                                    <?php foreach ($subscribers as $i => $row) : ?>
                                        <tr>
                                            <td><?= $i + 1; ?></td>
                                            <td>
                                                <div class="text-dark fw-bolder"><?= htmlspecialchars($row['email']); ?></div>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-primary"><?= htmlspecialchars($row['preferensi']); ?></span>
                                            </td>
                                            <td><?= date('d/m/Y H:i', strtotime($row['created_at'])); ?></td>
                                            <td>
                                                <span class="badge badge-light-<?= $row['status'] === 'Aktif' ? 'success' : 'secondary'; ?>">
                                                    <?= htmlspecialchars($row['status']); ?>
                                                </span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button" class="btn btn-sm btn-icon btn-light-danger" data-bs-toggle="modal" data-bs-target="#modalHapusSub<?= $row['id_subscriber']; ?>" title="Hapus">
                                                    <i class="bi bi-trash"></i>
                                                </button>

                                                <!-- Modal Hapus Subscriber -->
                                                <div class="modal fade" id="modalHapusSub<?= $row['id_subscriber']; ?>" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered text-start">
                                                        <div class="modal-content">
                                                            <form action="<?= base_url('admin/delete_subscriber'); ?>" method="POST">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Hapus Subscriber</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id_subscriber" value="<?= $row['id_subscriber']; ?>" />
                                                                    <p>Apakah Anda yakin ingin menghapus <strong><?= htmlspecialchars($row['email']); ?></strong> dari daftar newsletter?</p>
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
                                        <td colspan="6" class="text-center py-6 text-muted">Belum ada pelanggan newsletter.</td>
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
