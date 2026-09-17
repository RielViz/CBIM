<?php
/**
 * Konfigurasi Aplikasi
 * TK Kristen Citra Bangsa
 *
 * File ini berisi semua konstanta konfigurasi yang digunakan
 * di seluruh aplikasi (database, path, dll).
 */

// ============================================================
//  KONFIGURASI DATABASE
// ============================================================
define('DB_HOST',     'localhost');
define('DB_USER',     'root');
define('DB_PASS',     '');
define('DB_NAME',     'tk_citra_bangsa');
define('DB_CHARSET',  'utf8mb4');

// ============================================================
//  KONFIGURASI APLIKASI
// ============================================================
define('APP_NAME',    'TK Kristen Citra Bangsa');
define('APP_VERSION', '1.0.0');
define('BASE_URL',    'http://localhost/code/CIMB/TK/');

// Zona waktu
date_default_timezone_set('Asia/Makassar');
