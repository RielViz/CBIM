<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->model('visitors_log');
        $ip_address = $this->input->ip_address();
        $this->visitors_log->log_visitor($ip_address);
    }


    public function index()
    {
        $where_legalitas = "jenis_konten='legalitas'";
        $where_visi = "jenis_konten='visi'";
        $where_misi = "jenis_konten='misi'";
        $where_nilai = "jenis_konten='nilai'";
        $where_operasional = "jenis_konten='operasional'";
        $where_kontak = "jenis_konten='kontak'";
        $where_alamat = "jenis_konten='alamat'";
        $data_struktur = $this->m_data->get_data('struktur_organisasi')->result_array();
        $data_legalitas = $this->m_data->get_data_where($where_legalitas, 'konten')->result_array();
        $data_visi = $this->m_data->get_data_where($where_visi, 'konten')->result_array();
        $data_misi = $this->m_data->get_data_where($where_misi, 'konten')->result_array();
        $data_nilai = $this->m_data->get_data_where($where_nilai, 'konten')->result_array();
        $data_operasional = $this->m_data->get_data_where($where_operasional, 'konten')->result_array();
        $data_kontak = $this->m_data->get_data_where($where_kontak, 'konten')->result_array();
        $data_alamat = $this->m_data->get_data_where($where_alamat, 'konten')->result_array();

        // Berita terbaru (3)
        $data_berita_terbaru = $this->db->select('*')
            ->from('berita')
            ->order_by('id_berita', 'DESC')
            ->limit(3)
            ->get()->result_array();

        // Galeri terbaru (6)
        $data_galeri_terbaru = $this->db->select('*')
            ->from('galeri')
            ->order_by('id_foto', 'DESC')
            ->limit(6)
            ->get()->result_array();

        // Video kegiatan terbaru (3)
        $data_video_terbaru = $this->db->select('*')
            ->from('video_kegiatan')
            ->order_by('id_video', 'DESC')
            ->limit(3)
            ->get()->result_array();

        $data = [
            'data_struktur' => $data_struktur,
            'data_legalitas' => $data_legalitas,
            'data_visi' => $data_visi,
            'data_misi' => $data_misi,
            'data_nilai' => $data_nilai,
            'data_operasional' => $data_operasional,
            'data_kontak' => $data_kontak,
            'data_alamat' => $data_alamat,
            'data_berita_terbaru' => $data_berita_terbaru,
            'data_galeri_terbaru' => $data_galeri_terbaru,
            'data_video_terbaru' => $data_video_terbaru
        ];
        $this->load->view('./templates/pages/header');
        $this->load->view('index', $data);
        $this->load->view('./templates/pages/footer');
    }

    public function kegiatan($params = null)
    {
        $where_kontak = "jenis_konten='kontak'";
        $where_alamat = "jenis_konten='alamat'";
        $data_kontak = $this->m_data->get_data_where($where_kontak, 'konten')->result_array();
        $data_alamat = $this->m_data->get_data_where($where_alamat, 'konten')->result_array();

        if ($params == null) {
            $data_main_video = $this->m_data->get_data_limit('id_video', 'video_kegiatan')->result_array();
        } else {
            $where = "id_video=" . base64_decode(hex2bin($params));
            $data_main_video = $this->m_data->get_data_where($where, 'video_kegiatan')->result_array();
        }
        $data_all_video = $this->m_data->get_data('video_kegiatan')->result_array();

        $data = [

            'data_all_video' => $data_all_video,
            'data_main_video' => $data_main_video,
            'data_kontak' => $data_kontak,
            'data_alamat' => $data_alamat
        ];
        $this->load->view('./templates/pages/header');
        $this->load->view('./pages/kegiatan', $data);
        $this->load->view('./templates/pages/footer');
    }

    public function berita($params = null)
    {
        $where_kontak = "jenis_konten='kontak'";
        $where_alamat = "jenis_konten='alamat'";
        $data_kontak = $this->m_data->get_data_where($where_kontak, 'konten')->result_array();
        $data_alamat = $this->m_data->get_data_where($where_alamat, 'konten')->result_array();

        if ($params == null) {
            $data_main_berita = $this->m_data->get_data_limit('id_berita', 'berita')->result_array();
        } else {
            $where = "id_berita=" . base64_decode(hex2bin($params));
            $data_main_berita = $this->m_data->get_data_where($where, 'berita')->result_array();
        }
        $data_all_berita = $this->m_data->get_data('berita')->result_array();

        $data = [
            'data_all_berita' => $data_all_berita,
            'data_main_berita' => $data_main_berita,
            'data_kontak' => $data_kontak,
            'data_alamat' => $data_alamat
        ];
        $this->load->view('./templates/pages/header');
        $this->load->view('./pages/berita', $data);
        $this->load->view('./templates/pages/footer');
    }

    public function galeri()
    {

        $where_kontak = "jenis_konten='kontak'";
        $where_alamat = "jenis_konten='alamat'";
        $data_kontak = $this->m_data->get_data_where($where_kontak, 'konten')->result_array();
        $data_alamat = $this->m_data->get_data_where($where_alamat, 'konten')->result_array();
        $data_galeri = $this->m_data->get_data('galeri')->result_array();
        $data = [
            'data_kontak' => $data_kontak,
            'data_alamat' => $data_alamat,
            'data_galeri' => $data_galeri
        ];
        $this->load->view('./templates/pages/header');
        $this->load->view('./pages/galeri', $data);
        $this->load->view('./templates/pages/footer');
    }

    public function login()
    {
        $this->load->view('./pages/login');
    }

    public function kebijakan_privasi()
    {
        $where_kontak = "jenis_konten='kontak'";
        $where_alamat = "jenis_konten='alamat'";
        $data_kontak = $this->m_data->get_data_where($where_kontak, 'konten')->result_array();
        $data_alamat = $this->m_data->get_data_where($where_alamat, 'konten')->result_array();

        $data = [
            'data_kontak' => $data_kontak,
            'data_alamat' => $data_alamat
        ];

        $this->load->view('./templates/pages/header');
        $this->load->view('./pages/kebijakan_privasi', $data);
        $this->load->view('./templates/pages/footer');
    }
}
