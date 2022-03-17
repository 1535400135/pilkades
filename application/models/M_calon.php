<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_calon extends CI_Model {

	var $table = 'tbl_calon';
	var $column_order = array('tbl_calon.nourut','tbl_calon.nama','tbl_calon.tgl_lahir','tbl_calon.agama','tbl_calon.kelamin','tbl_pendidikan.nama_pendidikan','tbl_pekerjaan.nama_pekerjaan',null,null); //set column field database for datatable orderable
	var $column_search = array('tbl_calon.nama','tbl_pendidikan.nama_pendidikan','tbl_wdesa.nama_desa'); 
	var $order = array('tbl_calon.id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		
		$this->db->from($this->table);
		$this->db->join('tbl_pendidikan','tbl_pendidikan.id_pendidikan=tbl_calon.id_pendidikan', 'left');
		$this->db->join('tbl_pekerjaan','tbl_pekerjaan.id_pekerjaan=tbl_calon.id_pekerjaan', 'left');
		$this->db->where('tbl_calon.thn_pemilihan',$this->session->userdata('thn_data'));


		//add custom filter here
		
		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();

		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_calon');
		$this->db->join('tbl_pendidikan', 'tbl_calon.id_pendidikan = tbl_pendidikan.id_pendidikan', 'left');
		$this->db->join('tbl_pekerjaan','tbl_pekerjaan.id_pekerjaan=tbl_calon.id_pekerjaan', 'left');
		$this->db->where('tbl_calon.id',$id);

		$query = $this->db->get();

		return $query->row();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	public function select_jml_calon($id) {
		$this->db->from('tbl_calon');
		$this->db->where('thn_pemilihan', $id);
		return $this->db->count_all_results();
	}
	
	public function select_all() {
		$this->db->select('*');
		$this->db->from('tbl_calon');

		$this->db->where('tbl_calon.thn_pemilihan',$this->session->userdata('thn_data'));
		//$this->db->where('tbl_calon.kdkec',$this->session->userdata('id_kec'));

		$data = $this->db->get();

		return $data->result();
	}

	function load_data()
	{
		$this->db->order_by('nourut', 'ASC');
		$this->db->where('tbl_calon.thn_pemilihan',$this->session->userdata('thn_data'));
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	function update_hasil($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
		return $this->db->affected_rows();
	}

}

/* End of file M_calon.php */
/* Location: ./application/models/M_calon.php */