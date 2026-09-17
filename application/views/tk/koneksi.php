<?php
/**
 * Koneksi Database
 * TK Kristen Citra Bangsa
 *
 * File ini membuat koneksi ke database MySQL menggunakan MySQLi.
 * Membutuhkan kofigurasi.php untuk konstanta database.
 */

// Muat konfigurasi jika belum dimuat
require_once __DIR__ . '/kofigurasi.php';

// ============================================================
//  BUAT KONEKSI DATABASE
// ============================================================
$koneksi = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Periksa koneksi
if ($koneksi->connect_error) {
    // Tampilkan pesan ramah di production, detail di development
    error_log('Koneksi database gagal: ' . $koneksi->connect_error);
    die('<div style="font-family:sans-serif;text-align:center;margin-top:80px;">
            <h2 style="color:#EE5D4E;">⚠ Koneksi Database Gagal</h2>
            <p style="color:#6B6285;">Silakan hubungi administrator sistem.</p>
         </div>');
}

// Set charset agar mendukung emoji dan karakter khusus
$koneksi->set_charset(DB_CHARSET);