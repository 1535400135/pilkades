<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilihan extends AUTH_Controller {
    
	public function __construct() {
		parent::__construct();
		$this->load->model('M_pemilihan');
	}

	public function index() {
		$data['page'] 			= "E-Voting";
		$data['judul'] 			= "E-Voting";
		$data['deskripsi'] 		= "Silahkan Memilih Kepala Desa";
        $data['calon'] = $this->M_pemilihan->getDataCalon($this->session->userdata('thn_data'));
        $cekData = $this->M_pemilihan->getVoting($this->session->userdata('username'), $this->session->userdata('thn_data'));
        if (empty($cekData)) {
		    $this->template->views('voting', $data);
        } else {
            redirect('home');
        }
	}

    public function simpan()
    {
        $e = $this->input->post('e');
        $n = $this->input->post('n');
        $vote = $this->input->post('vote');
        $getData = $this->M_pemilihan->getData($this->session->userdata('username'));
        if (($e==$getData->enkripsi) && ($n==$getData->n)) {
            $data = array (
                'nik' => $this->session->userdata('username'),
                'id_pilihan' => $vote,
                'tahun' => $this->session->userdata('thn_data')
            );
            $result = $this->M_pemilihan->insert($data);
            if ($result > 0) {
			    $this->session->set_flashdata('msg', show_succ_msg('Voting Berhasi disimpan...', '20px'));
                redirect('pemilihan'); 
		    } else {
			    $this->session->set_flashdata('error_msg', 'Voting Gagal disimpan', '20px');
                redirect('pemilihan'); 
		    }
        } else {
            $this->session->set_flashdata('msg', show_err_msg('Masukan Nilai E dan N Dengan Benar', '20px'));
            redirect ('pemilihan');
        }
    }

}