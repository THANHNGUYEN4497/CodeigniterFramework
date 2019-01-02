<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManageHeaderModel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertHeader($category){
		$dataInsert = array(
			'Title_header' => $category
		);
		$dataquery = $this->db->insert('manageheader', $dataInsert);
		return $dataquery;
	}
	public function getdataHeader()
	{	
		$this->db->select('*');
		$dataquery = $this->db->get('manageheader');
		$dataquery = $dataquery->result_array();
		return $dataquery;
	}
	public function deleteHeader($iddelete) {
		$this->db->where('Id', $iddelete);
		$dataquery =  $this->db->delete('manageheader');
		return $dataquery;
	}
	public function updateHeader($idUpdate,$newtitleCat){
		$dataUpdate = array(
			'Title_header' => $newtitleCat
		);
		$this->db->where('Id', $idUpdate);
		$dataquery = $this->db->update('manageheader', $dataUpdate);
		return $dataquery;
	}
}

/* End of file categoryModel.php */
/* Location: ./application/models/categoryModel.php */