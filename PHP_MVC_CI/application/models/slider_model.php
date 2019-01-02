<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slider_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getDataSlider(){
		$this->db->select('*');
		$dataquery = $this->db->get('slider');
		return $dataquery->result_array();
	}
	public function insertSlider($titlebanner,$img_banner){
		$datainsert = array(
			'titleslider' => $titlebanner,
			'sliderdata' => $img_banner
		);
		$dataquery = $this->db->insert('slider', $datainsert);
		return $dataquery;
	}
	public function deleteInfoSlider($iddelete) {
		$this->db->where('Id', $iddelete);
		$dataquery = $this->db->delete('slider');
		return $dataquery;
	}
	public function updateDataSlider($idEdit,$newTitle,$newBanner) {
		$this->db->where('Id', $idEdit);
		$dataSliderUpdate = array(
			'titleslider' => $newTitle,
			'sliderdata' => $newBanner
		);
		$dataquery = $this->db->update('slider', $dataSliderUpdate);
		return $dataquery;
	}
}

/* End of file slider_model.php */
/* Location: ./application/models/slider_model.php */