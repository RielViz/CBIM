<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Menimpa pesan bawaan CodeIgniter ("The action you have requested is not
 * allowed.") ketika verifikasi CSRF gagal. Verifikasi itu sendiri tetap
 * dikerjakan CI_Security; kelas ini hanya mengganti tampilannya.
 *
 * Catatan: dipanggil dari konstruktor CI_Input, jadi library lain
 * (session, input, output) belum tersedia di sini.
 */
class MY_Security extends CI_Security
{
    public function csrf_show_error()
    {
        $pesan = 'Formulir ini sudah kedaluwarsa atau tidak berasal dari situs ini (verifikasi keamanan CSRF gagal). '
            . 'Kembali ke halaman sebelumnya, muat ulang, lalu kirim ulang formulirnya.';

        $minta_json = (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
            || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== FALSE);

        if ($minta_json) {
            http_response_code(403);
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(['status' => 'error', 'message' => $pesan]);
            exit;
        }

        show_error($pesan, 403, 'Permintaan Ditolak');
    }
}
