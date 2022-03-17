<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemilihan extends CI_Model {

    public function insert($data)
    {
        $this->db->insert('tbl_voting', $data);
        return $this->db->affected_rows();
    }

    public function getDataCalon($id)
    {
        return $this->db->select('*')->from('tbl_calon')
        ->join('tbl_pendidikan','tbl_pendidikan.id_pendidikan=tbl_calon.id_pendidikan', 'left')
		->join('tbl_pekerjaan','tbl_pekerjaan.id_pekerjaan=tbl_calon.id_pekerjaan', 'left')->where('thn_pemilihan', $id)->get()->result();
    }

    public function getData($id)
    {
        return $this->db->select('enkripsi, dekripsi, n')->from('tbl_rsa')->where('nik', $id)->get()->row();
    }

    public function getVoting($id, $tahun)
    {
        return $this->db->select('*')->from('tbl_voting')->where(['nik' => $id, 'tahun' => $tahun])->get()->row();
    }

}