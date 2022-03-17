<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rsa extends CI_Model {

    public function insert($data)
    {
        $this->db->insert('tbl_rsa', $data);
        return $this->db->affected_rows();
    }

    public function delete($id) {
		$sql = "DELETE FROM tbl_rsa WHERE nik='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

    public function getData($id)
    {
        return $this->db->select('enkripsi, dekripsi, n')->from('tbl_rsa')->where('nik', $id)->get()->row();
    }
}