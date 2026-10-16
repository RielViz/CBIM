<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $where_kontak = "jenis_konten='kontak'";
        $where_alamat = "jenis_konten='alamat'";
        $data_kontak = $this->m_data->get_data_where($where_kontak, 'konten')->result_array();
        $data_alamat = $this->m_data->get_data_where($where_alamat, 'konten')->result_array();

        $unit = [
            'logo' => 'logo-cbim.png',
            'nama' => 'Yayasan Citra Bina Insan Mandiri',
            'deskripsi' => 'Lembaga pendidikan terpadu di Nusa Tenggara Timur',
            'telepon' => !empty($data_kontak) ? strip_tags($data_kontak[0]['isi_konten']) : '(0380) 8553888',
            'email' => 'info@cbim.or.id',
            'alamat' => !empty($data_alamat) ? strip_tags($data_alamat[0]['isi_konten']) : 'Jl. Manafe No.17, Kel. Kayu Putih, Kec. Oebobo, Kota Kupang, NTT',
        ];

        $pengaturan = [
            'facebook' => 'https://www.facebook.com/profile.php?id=100086189573438',
            'instagram' => 'https://www.instagram.com/yayasan_cbim/',
            'youtube' => 'https://www.youtube.com/@CBIMYayasan',
            'teks_footer' => 'Maju Bersama Generasi Unggul Nusa Tenggara Timur'
        ];
        
        $pendidikan = [
            ['internal' => true, 'slug_unit' => 'tk', 'jenjang' => 'TK', 'nama' => 'TK K Citra Bangsa', 'deskripsi' => 'Pendidikan anak usia dini.', 'tautan' => ''],
            ['internal' => true, 'slug_unit' => 'sd', 'jenjang' => 'SD', 'nama' => 'SD K Citra Bangsa', 'deskripsi' => 'Pendidikan dasar.', 'tautan' => ''],
            ['internal' => false, 'slug_unit' => 'smp', 'jenjang' => 'SMP', 'nama' => 'SMP K Citra Bangsa', 'deskripsi' => 'Pendidikan menengah pertama.', 'tautan' => 'http://smpkcitrabangsa.com/'],
            ['internal' => false, 'slug_unit' => 'sma', 'jenjang' => 'SMA', 'nama' => 'SMA K Citra Bangsa', 'deskripsi' => 'Pendidikan menengah atas.', 'tautan' => 'https://smakcitrabangsa.sch.id/'],
            ['internal' => false, 'slug_unit' => 'ucb', 'jenjang' => 'Universitas', 'nama' => 'Universitas Citra Bangsa', 'deskripsi' => 'Pendidikan tinggi unggul.', 'tautan' => 'https://ucb.ac.id/']
        ];

        $data = [
            'unit' => $unit,
            'pengaturan' => $pengaturan,
            'pendidikan' => $pendidikan,
            'judul_hal' => 'Hubungi Kami - Yayasan CBIM',
            'deskripsi' => 'Kontak dan Alamat Yayasan Citra Bina Insan Mandiri',
            'halaman' => 'kontak',
            'data_kontak' => $data_kontak,
            'data_alamat' => $data_alamat
        ];

        $this->load->view('./templates/pages/header', $data);
        $this->load->view('./pages/kontak', $data);
        $this->load->view('./templates/pages/footer', $data);
    }
}
