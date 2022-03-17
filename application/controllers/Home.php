<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_calon','calon');
		$this->load->model('M_hasil','hasil');
		$this->load->model('M_rekaphasil','rekaphasil');
	}

	public function index() {

		$this->load->helper('url');
		$this->load->helper('form');

		//Grafik
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
		
		//Data
		$jmlcalon				= $this->calon->select_jml_calon($this->session->userdata('thn_data'));
		$jmlwarga				= $this->hasil->getWarga();
		$jmlvote				= $this->hasil->getVote($this->session->userdata('thn_data'));
		$data['jmlcalon']		= $jmlcalon;
		$data['warga']			= $jmlwarga;
		$data['jmlvote']		= $jmlvote;
		$data['userdata'] 		= $this->userdata;
		$data['page'] 			= "Dashboard";
		$data['judul'] 			= "Dashboard";
		$data['deskripsi'] 		= "";
		$this->template->views('home', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */