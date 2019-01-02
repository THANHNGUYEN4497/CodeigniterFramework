<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('slider_model');
	}

	public function index()
	{
		$dataSlider = $this->slider_model->getDataSlider();
		$dataArray = array(
			'linktemp' => 'home/Homepage',
			'sliderBannner' => $dataSlider
		);
		$this->load->view('home/MainLayout',$dataArray,FALSE);
	}
	public function phone() {
		echo 'heeeelelele';
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */