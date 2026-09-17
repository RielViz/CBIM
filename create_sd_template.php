<?php
$tk_header = file_get_contents('application/views/templates/tk/header.php');
$tk_footer = file_get_contents('application/views/templates/tk/footer.php');

// SD Header adjustments
$sd_header = $tk_header;
$sd_header = str_replace('TK Kristen Citra Bangsa', 'SD K Citra Bangsa', $sd_header);
$sd_header = str_replace("href=\"<?= base_url('tk'); ?>\"", "href=\"<?= base_url('sd'); ?>\"", $sd_header);
$sd_header = str_replace("href=\"<?= base_url('tk/profil'); ?>\"", "href=\"<?= base_url('sd/profil'); ?>\"", $sd_header);
$sd_header = str_replace("href=\"<?= base_url('tk/program'); ?>\"", "href=\"<?= base_url('sd/fasilitas'); ?>\"", $sd_header); // Map program to fasilitas
$sd_header = str_replace("href=\"<?= base_url('tk/ppdb'); ?>\"", "href=\"<?= base_url('sd/ppdb'); ?>\"", $sd_header);

$sd_header = str_replace("Program</a>", "Fasilitas</a>", $sd_header);
// Also SD has kegiatan
$sd_header = str_replace(
    '<a href="<?= base_url(\'sd/fasilitas\'); ?>" <?= (isset($active_menu) && $active_menu == \'program\') ? \'aria-current="page"\' : \'\'; ?>>Fasilitas</a>',
    '<a href="<?= base_url(\'sd/fasilitas\'); ?>" <?= (isset($active_menu) && $active_menu == \'fasilitas\') ? \'aria-current="page"\' : \'\'; ?>>Fasilitas</a>'."\n".'            <a href="<?= base_url(\'sd/kegiatan\'); ?>" <?= (isset($active_menu) && $active_menu == \'kegiatan\') ? \'aria-current="page"\' : \'\'; ?>>Kegiatan</a>',
    $sd_header
);
// Fix active_menu logic for fasilitas instead of program
$sd_header = str_replace("active_menu == 'program'", "active_menu == 'fasilitas'", $sd_header);
// Fix title
$sd_header = str_replace("TK Kristen Citra Bangsa — Yayasan CBIM", "SD K Citra Bangsa — Yayasan CBIM", $sd_header);
$sd_header = str_replace("TK & PAUD", "SD", $sd_header);

// SD Footer adjustments
$sd_footer = $tk_footer;

file_put_contents('application/views/templates/sd/header.php', $sd_header);
file_put_contents('application/views/templates/sd/footer.php', $sd_footer);

echo "SD templates created.\n";
