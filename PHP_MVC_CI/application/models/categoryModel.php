<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class categoryModel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertCategory($category,$id_parent){
		$dataInsert = array(
			'title_category' => $category,
			'parent_id' => $id_parent
		);
		$dataquery = $this->db->insert('cat', $dataInsert);
		return $dataquery;
	}
	public function getdataCategory()
	{	
		$this->db->select('*');
		$dataquery = $this->db->get('cat');
		$dataquery = $dataquery->result_array();
		return $dataquery;
	}
	public function deleteCategory($iddelete) {
		$this->db->where('Id', $iddelete);
		$dataquery =  $this->db->delete('cat');
		return $dataquery;
	}
	public function updateCategoty($idUpdate,$newtitleCat,$newParent_id){
		$dataUpdate = array(
			'title_category' => $newtitleCat,
			'parent_id' => $newParent_id
		);
		$this->db->where('Id', $idUpdate);
		$dataquery = $this->db->update('cat', $dataUpdate);
		return $dataquery;
	}
	public function checkData() {
		$this->db->select('Title_header');
		$this->db->from('manageheader');
		$this->db->join('cat', 'manageheader.Id = cat.parent_id');
		$dataquery = $this->db->get();
		$dataquery = $dataquery->result_array();
		return $dataquery;
	}
}

/* End of file categoryModel.php */
/* Location: ./application/models/categoryModel.php */