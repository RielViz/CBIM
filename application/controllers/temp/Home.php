<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->view('./templates/header');
		$this->load->view('index');
		$this->load->view('./templates/footer');
	}

	public function daftar($paket = null)
	{
		if ($paket == null) {
			$paket = '';
		}
		$data = [
			'paket' => $paket
		];
		$this->load->view('pendaftaran', $data);
	}
}
