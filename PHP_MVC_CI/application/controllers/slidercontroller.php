<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slidercontroller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slider_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		include 'UploadHandler.php';
	}
	public function index()
	{
		$dataDB = $this->slider_model->getDataSlider();
		$dataView = array(
			'linktemp' => 'sliders/sliderAction',
			'dataslider' => $dataDB
		);
		$this->load->view('sliders/layoutSlider',$dataView,FALSE);
	}
	public function testData() {
		$arrayLISTInfoSlider = $this->slider_model->getDataSlider();
		/*$arrayLISTInfoSlider = json_decode($arrayLISTInfoSlider,true);*/
		if ($arrayLISTInfoSlider == NULL) {
			$arrayLISTInfoSlider = array();
		}
		      echo "<pre>";
		      var_dump($arrayLISTInfoSlider);
		      echo "</pre>";
	}
	public function InsertBanner() {
		$titlebanner = $this->input->post('titlebanner');
		$img_banner = $this->input->post('img_banner');
		$this->slider_model->insertSlider($titlebanner,$img_banner);
	}
	public function listDataSlider() {
		
	}
	public function deleteSlider($iddelete) {
		$sliderdelete = $this->slider_model->deleteInfoSlider($iddelete);
	}
	public function updateSlider() {
		$idEdit = $this->input->post('idedit');
		$newTitle = $this->input->post('newtitleslider');
		$newBanner = $this->input->post('newbanner');
		$this->slider_model->updateDataSlider($idEdit,$newTitle,$newBanner);
	}
	public function uploadfiles() {
 		$uploadFiles = new UploadHandler;
 	}
}

/* End of file sliders_controller.php */
/* Location: ./application/controllers/sliders_controller.php */