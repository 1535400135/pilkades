<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rsa extends AUTH_Controller {
    
	public function __construct() {
		parent::__construct();
		$this->load->model('M_rsa');
	}

	public function index() {
		$data['page'] 			= "Kunci RSA";
		$data['judul'] 			= "Kunci RSA";
		$data['deskripsi'] 		= "Membuat Kunci RSA";
        $getData = $this->M_rsa->getData($this->session->userdata('username'));
        if (!empty($getData)) {
        $data['enk'] = $getData->enkripsi;
        $data['n'] = $getData->n;
        } else {
            $data['enk'] = 'Silahkan Membuat Kunci RSA';
            $data['n'] = 'Silahkan Membuat Kunci RSA';
        }
		$this->template->views('rsa', $data);
	}

    function gen_key($p, $q) {
        $this->p = $p;
        $this->q = $q;
        $this->n = $p * $q;
        $this->m = ($p - 1) * ($q - 1);
        $this->gen_e($this->m);
        $this->gen_d($this->m, $this->e);
    }

    function check_prime($num){ 
    	if ($num == 1) {
    	    return false; 
    	}
    	
    	for ($i = 2; $i <= $num / 2; $i++){ 
    		if ($num % $i == 0) {
    			return false; 
    		}
    	}
    	
    	return true; 
    }

    function gen_e($m) {
        for ($i = 8; $i < $m; $i++) {
            if ( $this->gcd($m, $i) == 1 ) {
                $e[] = $i;
            }
        }
        
        $this->e_arr = $e;
        $this->e = $e[0];
    }

    function gen_d($m, $e, $limit = 100) {
        $j=0;
        for ($i = 7; $i < $limit; $i++) {

            $result = (1 + ( $i * $m )) % $e;
            if ( $result == 0 ) {
                $the_d[] = (1 + ( $i * $m )) / $e;
                $j++;
            }
        }

        $this->d_arr = $the_d; 
        $this->d = $the_d[0];
    }

    // recursive function to calculate the Greatest common divisor from two number
    function gcd($x, $y) {
        return (bcmod($x, $y)) ? $this->gcd($y, bcmod($x, $y)) : $y;
    }

    // getter
    function get_n() {
        return $this->n;
    }

    function get_m() {
        return $this->m;
    }

    function get_p() {
        return $this->p;
    }

    function get_q() {
        return $this->q;
    }
    
    function get_e() {
        return $this->e;
    }
    
    function get_d() {
        return $this->d;
    }

    function get_e_arr() {
        return $this->e_arr;
    }

    function get_d_arr() {
        return $this->d_arr;
    }

    public function simpan()
    {
        $nik = $this->session->userdata('username');
        $p = $this->input->post('p');
        $q = $this->input->post('q');
        if (($p == 1) && ($q == 1)) {
            $this->session->flashdata('Nilai P Harus Bilangan Prima', '20px');
    	    redirect('Rsa');
    	}
    	
    	for ($i = 2; $i <= $p / 2; $i++){ 
    		if ($p % $i == 0) {
                $this->session->flashdata('Nilai P Harus Bilangan Prima', '20px');
    			redirect('Rsa');
    		}
    	}

        for ($i = 2; $i <= $q / 2; $i++){ 
    		if ($q % $i == 0) {
                $this->session->flashdata('Nilai P Harus Bilangan Prima', '20px');
    			redirect('Rsa'); 
    		}
    	}
        $n = $p * $q;
        $m = ($p - 1) * ($q - 1);
        $this->gen_e($m);
        $this->gen_d($m, $this->e);
        $e = $this->get_e();
        $d = $this->get_d();
        $data = array(
            'nik' => $nik,
            'enkripsi' => $e,
            'dekripsi' => $d,
            'n' => $n
        );
        $result = $this->M_rsa->insert($data);
        if ($result > 0) {
			$this->session->set_flashdata('msg', show_succ_msg('Kunci RSA Berhasil ditambahkan', '20px'));
            redirect('Rsa'); 
		} else {
			$this->session->set_flashdata('error_msg', 'Kunci RSA Gagal ditambahkan', '20px');
            redirect('Rsa'); 
		}
    }

    public function delete() {
        $id = $this->session->userdata('username');
		$result = $this->M_rsa->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data RSA Berhasil Direset', '20px');
            redirect('Rsa');
		} else {
			echo show_err_msg('Data RSA Gagal Direset', '20px');
            redirect('Rsa');
		}
	}
}

/* End of file Rsa.php */
/* Location: ./application/controllers/Rsa.php */