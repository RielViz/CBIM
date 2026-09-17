<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <!-- Header Card -->
            <div class="card mb-6">
                <div class="card-body pt-9 pb-6">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="d-flex flex-column mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <h1 class="text-gray-900 fs-2 fw-bolder me-1">Pencadangan Sistem & Database (Backup)</h1>
                                <span class="badge badge-light-primary fw-bolder ms-2 fs-8 py-1 px-3">Keamanan Data</span>
                            </div>
                            <div class="text-muted fs-6">Lakukan pencadangan database MySQL secara berkala untuk menjaga keutuhan data yayasan.</div>
                        </div>
                        <div>
                            <a href="<?= base_url('backup/database'); ?>" class="btn btn-primary fw-bolder">
                                <i class="bi bi-cloud-arrow-down-fill fs-4 me-1"></i> Unduh Cadangan Database (.sql.gz)
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-6">
                <!-- Backup List -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header border-0 pt-6">
                            <h3 class="card-title fw-bolder text-dark">File Arsip Cadangan di Server</h3>
                        </div>
                        <div class="card-body py-4">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <thead>
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th>Nama File</th>
                                            <th>Ukuran</th>
                                            <th>Waktu Dibuat</th>
                                            <th class="text-end">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 fw-bold">
                                        <?php if (!empty($backup_files)) : ?>
                                            <?php foreach ($backup_files as $file) : ?>
                                                <tr>
                                                    <td>
                                                        <i class="bi bi-file-earmark-zip text-primary fs-3 me-2"></i>
                                                        <span class="text-dark fw-bolder"><?= htmlspecialchars($file['name']); ?></span>
                                                    </td>
                                                    <td><?= htmlspecialchars($file['size']); ?></td>
                                                    <td><?= htmlspecialchars($file['time']); ?></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">Tersimpan</span>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <tr>
                                                <td colspan="4" class="text-center py-6 text-muted">Belum ada file cadangan yang tersimpan di disk. Klik tombol di atas untuk membuat cadangan sekarang.</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Info Cron Card -->
                <div class="col-lg-4">
                    <div class="card bg-light-primary border-primary border border-dashed p-6">
                        <h4 class="text-dark fw-bolder mb-3 d-flex align-items-center">
                            <i class="bi bi-clock-history text-primary fs-2 me-2"></i> Otomatisasi Terjadwal (Cron)
                        </h4>
                        <p class="fs-7 text-gray-700 lh-base mb-4">
                            Untuk menjalankan pencadangan otomatis setiap malam di cPanel atau server Linux / Windows Task Scheduler, jalankan perintah CLI berikut:
                        </p>
                        <div class="bg-dark text-white p-3 rounded font-monospace fs-8 mb-4">
                            php <?= FCPATH; ?>index.php backup run
                        </div>
                        <ul class="fs-7 text-muted ps-4 mb-0">
                            <li>File cadangan disimpan terkompresi di folder <code>uploads/backups/</code>.</li>
                            <li>Sistem secara otomatis menghapus cadangan yang berusia lebih dari 30 hari untuk menghemat ruang disk.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
