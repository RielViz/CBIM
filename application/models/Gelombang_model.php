<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Gelombang pendaftaran (PPDB) per unit. Dikelola dari panel admin SD / TK
 * dan ditampilkan di halaman /sd/ppdb dan /tk/ppdb.
 */
class Gelombang_model extends CI_Model
{
    const TABEL = 'gelombang_ppdb';

    public function ensure_table()
    {
        if (!$this->db->table_exists(self::TABEL)) {
            $this->db->query("
                CREATE TABLE `gelombang_ppdb` (
                    `id_gelombang`   INT(11) NOT NULL AUTO_INCREMENT,
                    `jenjang`        VARCHAR(10)  NOT NULL,
                    `nama_gelombang` VARCHAR(150) NOT NULL,
                    `tgl_mulai`      DATE         DEFAULT NULL,
                    `tgl_selesai`    DATE         DEFAULT NULL,
                    `kuota`          INT(11)      DEFAULT NULL,
                    `keterangan`     TEXT         DEFAULT NULL,
                    `link_daftar`    VARCHAR(500) DEFAULT NULL,
                    `aktif`          TINYINT(1)   NOT NULL DEFAULT 1,
                    `urutan`         INT(11)      NOT NULL DEFAULT 0,
                    PRIMARY KEY (`id_gelombang`),
                    KEY `idx_jenjang` (`jenjang`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
            ");
        } elseif (!$this->db->field_exists('link_daftar', self::TABEL)) {
            // Migrasi otomatis untuk tabel lama
            $this->db->query("ALTER TABLE `gelombang_ppdb` ADD `link_daftar` VARCHAR(500) DEFAULT NULL AFTER `keterangan`");
        }
    }

    /** Semua gelombang suatu jenjang (untuk admin) atau hanya yang aktif (publik). */
    public function daftar($jenjang, $hanya_aktif = FALSE)
    {
        $this->ensure_table();
        $this->db->where('jenjang', $jenjang);
        if ($hanya_aktif) {
            $this->db->where('aktif', 1);
        }
        $this->db->order_by('urutan', 'ASC')->order_by('tgl_mulai', 'ASC')->order_by('id_gelombang', 'ASC');
        return $this->db->get(self::TABEL)->result_array();
    }

    /** Membersihkan & memvalidasi input form. Mengembalikan [data, pesan_error]. */
    public function dari_input($input, $jenjang)
    {
        $nama = trim(strip_tags((string) $input->post('nama_gelombang', TRUE)));
        $mulai = trim((string) $input->post('tgl_mulai'));
        $selesai = trim((string) $input->post('tgl_selesai'));
        $kuota = trim((string) $input->post('kuota'));
        $ket = trim(strip_tags((string) $input->post('keterangan', TRUE)));
        $urutan = (int) $input->post('urutan');
        $link = trim((string) $input->post('link_daftar'));

        if ($nama === '') {
            return [NULL, 'Nama gelombang wajib diisi.'];
        }
        $valid = function ($t) {
            $d = DateTime::createFromFormat('Y-m-d', $t);
            return $d && $d->format('Y-m-d') === $t;
        };
        if ($mulai !== '' && !$valid($mulai)) {
            return [NULL, 'Format tanggal mulai tidak valid.'];
        }
        if ($selesai !== '' && !$valid($selesai)) {
            return [NULL, 'Format tanggal selesai tidak valid.'];
        }
        if ($mulai !== '' && $selesai !== '' && $selesai < $mulai) {
            return [NULL, 'Tanggal selesai tidak boleh sebelum tanggal mulai.'];
        }
        if ($kuota !== '' && (!ctype_digit($kuota))) {
            return [NULL, 'Kuota harus berupa angka.'];
        }
        if ($link !== '') {
            // Hanya izinkan URL http(s) atau path internal (mis. /tk/formulir)
            $url_valid = filter_var($link, FILTER_VALIDATE_URL) && preg_match('~^https?://~i', $link);
            if (!$url_valid && !preg_match('~^/[^\s]*$~', $link)) {
                return [NULL, 'Link pendaftaran harus diawali http:// atau https://.'];
            }
            if (strlen($link) > 500) {
                return [NULL, 'Link pendaftaran terlalu panjang (maks 500 karakter).'];
            }
        }

        return [[
            'jenjang'        => $jenjang,
            'nama_gelombang' => mb_substr($nama, 0, 150),
            'tgl_mulai'      => $mulai !== '' ? $mulai : NULL,
            'tgl_selesai'    => $selesai !== '' ? $selesai : NULL,
            'kuota'          => $kuota !== '' ? (int) $kuota : NULL,
            'keterangan'     => $ket !== '' ? $ket : NULL,
            'link_daftar'    => $link !== '' ? $link : NULL,
            'aktif'          => $input->post('aktif') ? 1 : 0,
            'urutan'         => $urutan,
        ], NULL];
    }

    public function tambah($data)
    {
        $this->ensure_table();
        return $this->db->insert(self::TABEL, $data);
    }

    public function ubah($id, $jenjang, $data)
    {
        $this->ensure_table();
        unset($data['jenjang']);
        $this->db->where(['id_gelombang' => (int) $id, 'jenjang' => $jenjang])->update(self::TABEL, $data);
        return $this->db->affected_rows() >= 0;
    }

    public function hapus($id, $jenjang)
    {
        $this->ensure_table();
        return $this->db->where(['id_gelombang' => (int) $id, 'jenjang' => $jenjang])->delete(self::TABEL);
    }

    /** Status tampilan berdasarkan tanggal hari ini: buka | segera | tutup. */
    public static function status($g, $hari_ini = NULL)
    {
        $hari_ini = $hari_ini ?: date('Y-m-d');
        if (!empty($g['tgl_mulai']) && $hari_ini < $g['tgl_mulai']) {
            return 'segera';
        }
        if (!empty($g['tgl_selesai']) && $hari_ini > $g['tgl_selesai']) {
            return 'tutup';
        }
        return 'buka';
    }
}
