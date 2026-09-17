<?php
$files = [
    'application/views/tk/index.php',
    'application/views/tk/profil.php',
    'application/views/tk/program.php',
    'application/views/tk/ppdb.php',
    'application/views/tk/formulir.php',
    'application/views/tk/login.php'
];

foreach ($files as $file) {
    if (!file_exists($file)) continue;
    $content = file_get_contents($file);
    
    $content = str_replace('href="pendaftaran.php"', 'href="<?= base_url(\'tk/ppdb\'); ?>" ', $content);
    $content = str_replace('href="program.php"', 'href="<?= base_url(\'tk/program\'); ?>" ', $content);
    $content = str_replace('href="profile.php"', 'href="<?= base_url(\'tk/profil\'); ?>" ', $content);
    $content = str_replace('href="profil.php"', 'href="<?= base_url(\'tk/profil\'); ?>" ', $content);
    $content = str_replace('href="index.php"', 'href="<?= base_url(\'tk\'); ?>" ', $content);
    $content = str_replace('href="login.php"', 'href="<?= base_url(\'auth\'); ?>" ', $content);
    
    file_put_contents($file, $content);
    echo "Updated $file\n";
}
