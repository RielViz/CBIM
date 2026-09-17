<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->model('visitors_log');
        $this->load->library('form_validation');
        $ip_address = $this->input->ip_address();
        $this->visitors_log->log_visitor($ip_address);
    }

    public function index()
    {
        $where_kontak = "jenis_konten='kontak'";
        $where_alamat = "jenis_konten='alamat'";
        $data_kontak = $this->m_data->get_data_where($where_kontak, 'konten')->result_array();
        $data_alamat = $this->m_data->get_data_where($where_alamat, 'konten')->result_array();
        $data_galeri = $this->m_data->get_data('galeri')->result_array();

        $data = [
            'title' => 'TK & PAUD K Citra Bangsa Mandiri - Kupang',
            'active_menu' => 'home',
            // PATCH 2026-09-07: dibaca templates/subsite/head_shared.php
            'subsite_meta' => [
                'unit'      => 'tk',
                'nama'      => 'TK & PAUD Kristen Citra Bangsa Mandiri',
                'deskripsi' => 'TK & PAUD Kristen Citra Bangsa Mandiri Kupang di bawah naungan Yayasan CBIM. Pendidikan anak usia dini yang ramah anak, kreatif, dan berlandaskan kasih.',
                'logo'      => 'paud-tk.png',
                'jenjang'   => 'Taman Kanak-Kanak / PAUD',
            ],
            'data_kontak' => $data_kontak,
            'data_alamat' => $data_alamat,
            'data_galeri' => $data_galeri
        ];

        $this->load->view('templates/tk/header', $data);
        $this->load->view('tk/index', $data);
        $this->load->view('templates/tk/footer', $data);
    }

    public function profil()
    {
        $where_kontak = "jenis_konten='kontak'";
        $where_alamat = "jenis_konten='alamat'";
        $data_kontak = $this->m_data->get_data_where($where_kontak, 'konten')->result_array();
        $data_alamat = $this->m_data->get_data_where($where_alamat, 'konten')->result_array();

        $data = [
            'title' => 'Profil & Kurikulum - TK K Citra Bangsa Mandiri',
            'active_menu' => 'profil',
            // PATCH 2026-09-07: dibaca templates/subsite/head_shared.php
            'subsite_meta' => [
                'unit'      => 'tk',
                'nama'      => 'TK & PAUD Kristen Citra Bangsa Mandiri',
                'deskripsi' => 'Sejarah, visi, misi, dan nilai pembiasaan TK & PAUD Kristen Citra Bangsa Mandiri Kupang di bawah naungan Yayasan Citra Bina Insan Mandiri.',
                'logo'      => 'paud-tk.png',
                'jenjang'   => 'Taman Kanak-Kanak / PAUD',
            ],
            'data_kontak' => $data_kontak,
            'data_alamat' => $data_alamat
        ];

        $this->load->view('templates/tk/header', $data);
        $this->load->view('tk/profil', $data);
        $this->load->view('templates/tk/footer', $data);
    }

    public function ppdb()
    {
        $where_kontak = "jenis_konten='kontak'";
        $where_alamat = "jenis_konten='alamat'";
        $data_kontak = $this->m_data->get_data_where($where_kontak, 'konten')->result_array();
        $data_alamat = $this->m_data->get_data_where($where_alamat, 'konten')->result_array();

        $data = [
            'title' => 'Pendaftaran Siswa Baru - TK K Citra Bangsa Mandiri',
            'active_menu' => 'ppdb',
            // PATCH 2026-09-07: dibaca templates/subsite/head_shared.php
            'subsite_meta' => [
                'unit'      => 'tk',
                'nama'      => 'TK & PAUD Kristen Citra Bangsa Mandiri',
                'deskripsi' => 'Pendaftaran Peserta Didik Baru TK & PAUD Kristen Citra Bangsa Mandiri Kupang TA 2026/2027. Formulir online, alur pendaftaran, dan berkas yang dibutuhkan.',
                'logo'      => 'paud-tk.png',
                'jenjang'   => 'Taman Kanak-Kanak / PAUD',
            ],
            'data_kontak' => $data_kontak,
            'data_alamat' => $data_alamat,
            'success_msg' => $this->session->flashdata('success'),
            'error_msg' => $this->session->flashdata('error')
        ];

        $this->load->view('templates/tk/header', $data);
        $this->load->view('tk/ppdb', $data);
        $this->load->view('templates/tk/footer', $data);
    }

    /**
     * =========================================================================
     * PATCH 2026-09-07 -- lihat catatan lengkap di Sd.php
     * Sebelumnya: tanpa validasi, tanpa honeypot, tanpa rate limit, dan hanya
     * menulis ke tabel 'pendaftaran_tk' sehingga pendaftar lewat /tk/ppdb tidak
     * pernah muncul di dashboard Pendaftaran Terpadu.
     * =========================================================================
     */
    public function submit_ppdb()
    {
        if ($this->input->method() !== 'post') {
            redirect('tk/ppdb');
            return;
        }

        // Honeypot anti-bot
        if (!empty($this->input->post('cbim_hp_check'))) {
            $this->session->set_flashdata('success', 'Terima kasih, data pendaftaran sudah kami terima.');
            redirect('tk/ppdb');
            return;
        }

        // Rate limit 5 kiriman per jam
        $count = (int) $this->session->userdata('ppdb_tk_count');
        $start = $this->session->userdata('ppdb_tk_start');
        if (!empty($start) && (time() - $start) <= 3600 && $count >= 5) {
            $this->session->set_flashdata('error', 'Anda sudah mengirim beberapa formulir dalam satu jam terakhir. Silakan tunggu sebentar atau hubungi panitia PPDB.');
            redirect('tk/ppdb');
            return;
        }

        // Validasi sisi server
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap Ananda', 'required|trim|min_length[3]|max_length[200]');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|in_list[Laki-laki,Perempuan]');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('nama_ortu', 'Nama Orang Tua / Wali', 'required|trim|min_length[3]|max_length[200]');
        $this->form_validation->set_rules('no_hp', 'No. WhatsApp / HP', 'required|trim|min_length[8]|max_length[25]');
        $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required|trim|min_length[10]');
        // UU PDP: data anak wajib disertai persetujuan orang tua/wali
        $this->form_validation->set_rules('persetujuan_ortu', 'Persetujuan Orang Tua/Wali', 'required');
        $this->form_validation->set_message('required', '{field} wajib diisi.');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', strip_tags(validation_errors(' ', ' ')));
            redirect('tk/ppdb');
            return;
        }

        $nama          = htmlspecialchars($this->input->post('nama_lengkap', TRUE));
        $kelompok      = htmlspecialchars($this->input->post('kelompok', TRUE));
        $tgl_lahir     = htmlspecialchars($this->input->post('tgl_lahir', TRUE));
        $jenis_kelamin = htmlspecialchars($this->input->post('jenis_kelamin', TRUE));
        $nama_ortu     = htmlspecialchars($this->input->post('nama_ortu', TRUE));
        $no_hp         = htmlspecialchars($this->input->post('no_hp', TRUE));
        $alamat        = htmlspecialchars($this->input->post('alamat', TRUE));
        $waktu         = date('Y-m-d H:i:s');

        $no_registrasi = 'REG-TK-' . date('Ymd') . '-'
            . strtoupper(substr(md5(uniqid(mt_rand(), TRUE)), 0, 4));

        // Tabel terpadu -- inilah yang dibaca dashboard Pendaftaran Terpadu
        $this->db->insert('pendaftaran', [
            'no_registrasi'  => $no_registrasi,
            'jenjang'        => 'TK',
            'nama_lengkap'   => $nama,
            'nik_nisn'       => '',
            'jenis_kelamin'  => $jenis_kelamin,
            'tempat_lahir'   => '',
            'tgl_lahir'      => $tgl_lahir,
            'agama'          => '',
            'nama_ortu'      => $nama_ortu,
            'pekerjaan_ortu' => '',
            'no_hp'          => $no_hp,
            'email'          => '',
            'alamat'         => $alamat,
            'asal_sekolah'   => '',
            'catatan'        => 'Kelompok: ' . $kelompok . ' (dikirim melalui formulir /tk/ppdb)',
            'status'         => 'Baru',
            'tanggal_daftar' => $waktu,
        ]);

        // Tabel lama untuk kompatibilitas dashboard PPDB TK
        $insert = $this->db->insert('pendaftaran_tk', [
            'nama_lengkap'   => $nama,
            'kelompok'       => $kelompok,
            'jenis_kelamin'  => $jenis_kelamin,
            'tgl_lahir'      => $tgl_lahir,
            'nama_ortu'      => $nama_ortu,
            'no_hp'          => $no_hp,
            'alamat'         => $alamat,
            'tanggal_daftar' => $waktu,
            'status'         => 'Baru',
        ]);

        if (empty($start) || (time() - $start) > 3600) {
            $count = 0;
            $start = time();
        }
        $this->session->set_userdata(['ppdb_tk_count' => $count + 1, 'ppdb_tk_start' => $start]);

        if ($insert) {
            $this->session->set_flashdata(
                'success',
                "Selamat! Pendaftaran Ananda ({$nama}) untuk kelas {$kelompok} di TK K Citra Bangsa Mandiri telah tersimpan. "
                . "Nomor registrasi: {$no_registrasi} — mohon disimpan. "
                . "Tim administrasi akan menghubungi Ayah/Bunda via WhatsApp ({$no_hp})."
            );
        } else {
            log_message('error', 'Gagal menyimpan pendaftaran TK: ' . $this->db->error()['message']);
            $this->session->set_flashdata('error', 'Mohon maaf, terjadi kendala saat menyimpan data pendaftaran. Silakan coba kembali atau hubungi panitia PPDB TK kami.');
        }

        redirect('tk/ppdb');
    }

    public function fasilitas()
    {
        $where_kontak = "jenis_konten='kontak'";
        $where_alamat = "jenis_konten='alamat'";
        $data_kontak = $this->m_data->get_data_where($where_kontak, 'konten')->result_array();
        $data_alamat = $this->m_data->get_data_where($where_alamat, 'konten')->result_array();

        $data = [
            'title' => 'Fasilitas Bermain & Belajar - TK K Citra Bangsa Mandiri',
            'active_menu' => 'fasilitas',
            // PATCH 2026-09-07: dibaca templates/subsite/head_shared.php
            'subsite_meta' => [
                'unit'      => 'tk',
                'nama'      => 'TK & PAUD Kristen Citra Bangsa Mandiri',
                'deskripsi' => 'Sarana dan prasarana TK & PAUD Kristen Citra Bangsa Mandiri Kupang: ruang kelas ramah anak, area bermain, sentra belajar, dan lingkungan yang aman.',
                'logo'      => 'paud-tk.png',
                'jenjang'   => 'Taman Kanak-Kanak / PAUD',
            ],
            'data_kontak' => $data_kontak,
            'data_alamat' => $data_alamat
        ];

        $this->load->view('templates/tk/header', $data);
        $this->load->view('tk/fasilitas', $data);
        $this->load->view('templates/tk/footer', $data);
    }

    public function kegiatan()
    {
        $where_kontak = "jenis_konten='kontak'";
        $where_alamat = "jenis_konten='alamat'";
        $data_kontak = $this->m_data->get_data_where($where_kontak, 'konten')->result_array();
        $data_alamat = $this->m_data->get_data_where($where_alamat, 'konten')->result_array();
        $data_galeri = $this->m_data->get_data('galeri')->result_array();

        $data = [
            'title' => 'Kegiatan & Ceria Anak - TK K Citra Bangsa Mandiri',
            'active_menu' => 'kegiatan',
            // PATCH 2026-09-07: dibaca templates/subsite/head_shared.php
            'subsite_meta' => [
                'unit'      => 'tk',
                'nama'      => 'TK & PAUD Kristen Citra Bangsa Mandiri',
                'deskripsi' => 'Dokumentasi kegiatan bermain sambil belajar, pentas seni, dan keseharian anak di TK & PAUD Kristen Citra Bangsa Mandiri Kupang.',
                'logo'      => 'paud-tk.png',
                'jenjang'   => 'Taman Kanak-Kanak / PAUD',
            ],
            'data_kontak' => $data_kontak,
            'data_alamat' => $data_alamat,
            'data_galeri' => $data_galeri
        ];

        $this->load->view('templates/tk/header', $data);
        $this->load->view('tk/kegiatan', $data);
        $this->load->view('templates/tk/footer', $data);
    }
}
