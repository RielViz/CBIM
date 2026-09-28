<?php
$files = [
    'application/views/admin/backup.php',
    'application/views/admin/berita.php',
    'application/views/admin/galeri.php',
    'application/views/admin/index.php',
    'application/views/admin/manajemen_konten.php',
    'application/views/admin/newsletter.php',
    'application/views/admin/pendaftaran_sd.php',
    'application/views/admin/pendaftaran_terpadu.php',
    'application/views/admin/pendaftaran_tk.php',
    'application/views/admin/pesan_kontak.php',
    'application/views/admin/struktur_organisasi.php',
    'application/views/admin/video_kegiatan.php',
    'application/views/auth/login.php',
    'application/views/templates/admin/footer.php',
    'application/views/templates/admin/header.php',
    'application/views/templates/admin/modals.php',
    'application/views/templates/pages/footer.php',
    'application/views/templates/pages/header.php'
];

foreach ($files as $file) {
    if (file_exists($file)) {
        exec("php -l " . escapeshellarg($file), $output, $return_var);
        if ($return_var !== 0) {
            echo "Syntax error in $file:\n";
            echo implode("\n", $output) . "\n";
        }
        $output = [];
    } else {
        echo "File not found: $file\n";
    }
}
echo "Syntax check complete.\n";
