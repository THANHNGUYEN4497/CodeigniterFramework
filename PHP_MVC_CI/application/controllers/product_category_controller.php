<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_category_controller  extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('categoryModel');
		$this->load->model('ManageHeaderModel');
	}
	public function index()
	{
		$dataHeader = $this->ManageHeaderModel->getdataHeader();
		$dataCategory = $this->categoryModel->getdataCategory();
		$data = array(
			'linktemp' => 'products/listCategory',
			'dataheader' => $dataHeader,
			'category' => $dataCategory
		);
		$this->load->view('products/LayoutlistCategory', $data, FALSE);
	}
	public function ListCategory(){
		
	}
	public function addCategory() {
		$category = $this->input->post('titlecategory');
		$id_parent = $this->input->post('id_parent2');
		$this->categoryModel->insertCategory($category,$id_parent);
	}
	public function deteteCategory($iddelete) {
		$this->categoryModel->deleteCategory($iddelete);
	}
	public function updateCategory($idUpdate)
	{
		$newtitleCat = $this->input->post('newtitle');
		$newParent_id = $this->input->post('newParent_id2');
		$this->categoryModel->updateCategoty($idUpdate,$newtitleCat,$newParent_id);
	}
	public function testData(){
		$data = $this->categoryModel->checkData();
		      echo "<pre>";
		      var_dump($data);
		      echo "</pre>";
	}
}

/* End of file product_category_controller.php */
/* Location: ./application/controllers/product_category_controller.php */