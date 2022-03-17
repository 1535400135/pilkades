<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekaphasil extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_rekaphasil','rekaphasil');
	}

	public function index() {

		$this->load->helper('url');
		$this->load->helper('form');


		$rekapsatu = $this->rekaphasil->select_all(1);
		$rekapdua = $this->rekaphasil->select_all(2);
		$rekaptiga = $this->rekaphasil->select_all(3);
		$rekapempat = $this->rekaphasil->select_all(4);
		$rekaplima = $this->rekaphasil->select_all(5);
		$rekapenam = $this->rekaphasil->select_all(6);
		$data['rekapsatu'] 		= $rekapsatu->hasil;
		$data['rekapdua'] 		= $rekapdua->hasil;
		$data['rekaptiga'] 		= $rekaptiga->hasil;
		$data['rekapempat'] 	= $rekapempat->hasil;
		$data['rekaplima'] 		= $rekaplima->hasil;
		$data['rekapenam'] 		= $rekapenam->hasil;

		$data['userdata'] 		= $this->userdata;
		$data['page'] 			= "Rekap Hasil";
		$data['judul'] 			= "Rekapitulasi";
		$data['deskripsi'] 		= "Rekapitulasi Hasil Pemilihan Kepala Desa";
		
		$this->template->views('rekaphasil/home', $data);
	}

	
}

/* End of file Rekaphasil.php */
/* Location: ./application/controllers/Rekaphasil.php */