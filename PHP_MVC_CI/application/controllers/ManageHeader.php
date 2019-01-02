<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManageHeader  extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ManageHeaderModel');
	}

	public function index()
	{
		$dataCategory = $this->ManageHeaderModel->getdataHeader();
		$data = array(
			'linktemp' => 'manageheader/manageheader',
			'header' => $dataCategory
		);
		$this->load->view('manageheader/LayoutHeader', $data, FALSE);
	}
	public function ListCategory(){
		
	}
	public function addHeader() {
		$category = $this->input->post('titlecategory');
		$this->ManageHeaderModel->insertHeader($category);
	}
	public function deteteHeader($iddelete) {
		$this->ManageHeaderModel->deleteHeader($iddelete);
	}
	public function updateHeader($idUpdate)
	{
		$newtitleCat = $this->input->post('newtitle');
		$this->ManageHeaderModel->updateHeader($idUpdate,$newtitleCat);
	}
}

/* End of file product_category_controller.php */
/* Location: ./application/controllers/product_category_controller.php */