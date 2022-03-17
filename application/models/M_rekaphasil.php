<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rekaphasil extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function select_all($id) {
		$sql = "SELECT count(a.nourut) as hasil from tbl_calon as a join tbl_voting as b on a.id=b.id_pilihan where a.nourut= '{$id}' and b.tahun='{$this->session->userdata('thn_data')}'";
		$data = $this->db->query($sql);
		return $data->row();
	}

}

/* End of file M_rekaphasil.php */
/* Location: ./application/models/M_rekaphasil.php */