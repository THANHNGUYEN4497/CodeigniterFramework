<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		include 'UploadHandler.php';
	}

	public function index()
	{
		//$this->load->view('/users/list_users');
		$this->load->view('users/login');
		
	}
	//---------------------------------- Login Process ---------------------------------------------------
	public function Login()
	{
		$emailRequest = $this->input->post('emailRequest');
		$passwordRequest = $this->input->post('passwordRequest');
		$this->form_validation->set_rules('emailRequest', 'Email', 'trim|required|min_length[5]|callback_Check_Login');
		$this->form_validation->set_rules('passwordRequest', 'PassWord', 'trim|required|min_length[5]|callback_Check_Login');
		$this->form_validation->set_message('required','Please Input %s');
		$this->form_validation->set_message('Check_Login','%s Not Availabel');
		$this->form_validation->set_message('Check_Login','%s Not Availabel');
		$this->form_validation->set_error_delimiters('<label class="text-danger">','</label>');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('users/login');
		} else {
			echo 'login success';
		} 
	}
	//---------------------------------- Register Process ---------------------------------------------------
	public function Resgister() {
		$this->load->view('users/resgister');
	}
	public function DoResgister() {
		if (isset($_POST['addDataUser'])) {
			// --------------------- set validate for Resgister -------------------------------
			$this->form_validation->set_rules('FullName', 'fullname', 'required|trim|min_length[5]');
			$this->form_validation->set_rules('UserName', 'UserName', array('required', 'min_length[5]','differs[FullName]'));
			$this->form_validation->set_rules('Email', 'Email', array('required', 'min_length[5]','valid_email'));
			$this->form_validation->set_rules('Password', 'Your Password ', array('required', 'min_length[5]'));
			$this->form_validation->set_rules('Address', 'Address', 'required|trim');
			$this->form_validation->set_rules('Birthday', 'Date Of birth', 'required|trim');
			$this->form_validation->set_rules('Phonenumber', 'Phonenumber', 'required|trim|numeric|min_length[10]|max_length[12]');
			$this->form_validation->set_rules('passwordconfirm', 'Password Confirm', 'matches[Password]|trim');
			$this->form_validation->set_message('required','Please input %s !!!');
			$this->form_validation->set_message('matches','%s does not macth Password');
			$this->form_validation->set_error_delimiters('<label class="text-danger">','</label>');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('users/resgister');
			} else {
				uploadImage('avartar');
				// --------------------- get and save data -------------------------------
				$fullName = $this->input->post('FullName');
				$userName = $this->input->post('UserName');
				$email = $this->input->post('Email');
				$password = $this->input->post('Password');
				$address = $this->input->post('Address');
				$phonenumber = $this->input->post('Phonenumber');
				$birthday = $this->input->post('Birthday');
				$gender =$this->input->post('gender');
				$role_id = $this->input->post('role_id');
				$avartar = base_url()."public/uploads/".basename($_FILES["avartar"]["name"]);
				$AddDataUser = $this->UserModel->addUser($fullName,$userName,$email,$password,$address,$phonenumber,$birthday,$gender,$role_id,$avartar);
				if ($AddDataUser) {
					echo '<p class="alert-success text-center"><strong>Resgister Success !!!</strong></p>';
					$this->load->view('users/resgister');
				}
			}
		}
	}
	public function DoResgisterFromHomepage() {
		if (isset($_POST['addDataUser'])) {
			uploadImage('avartar');
			// --------------------- get and save data -------------------------------
			$fullName = $this->input->post('FullName');
			$userName = $this->input->post('UserName');
			$email = $this->input->post('Email');
			$password = $this->input->post('Password');
			$address = $this->input->post('Address');
			$phonenumber = $this->input->post('Phonenumber');
			$birthday = $this->input->post('Birthday');
			$gender =$this->input->post('gender');
			$role_id = $this->input->post('role_id');
			$avartar = base_url()."public/uploads/".basename($_FILES["avartar"]["name"]);
			$AddDataUser = $this->UserModel->addUser($fullName,$userName,$email,$password,$address,$phonenumber,$birthday,$gender,$role_id,$avartar);
			if ($AddDataUser) {
				echo '<p class="alert-success text-center"><strong>Resgister Success !!!</strong></p>';
				$this->load->view('users/resgister');
			}
		}
	}

//---------------------------------- Check_Login Process ---------------------------------------------------
	public function Check_Login($emailRequest,$passwordRequest){
		echo $emailRequest;
			$dataReturn = $this->UserModel->LoginCheck();
			foreach ($dataReturn as $value) {
			if ($emailRequest == $value['email'] || $passwordRequest == $value['password']) {
				echo 'success';
				return TRUE;
			}
			else {
				echo 'failed';
				return FALSE;
			}
		}
	}
	public function ListUsers(){
		$dataUsers = $this->UserModel->GetDataUsers();
		$dataUsers_view = array(
			'temp_link' => 'admin/ListUsers',
			'data_users' => $dataUsers
		);
		//$data = array();
		//$data['temp'] = 'admin/ListUsers';
		$this->load->view('admin/HomeAdmin', $dataUsers_view, FALSE);
	}
	public function DeleteUser($id){
		$dataUsers = $this->UserModel->DeleteUser($id);
		if ($dataUsers) {
			
		}
	}
	public function UpdateInfoUser(){
		$id = $this->input->post('Id');
		$fullname = $this->input->post('Fullname');
		$address = $this->input->post('Address');
		$phonenumber = $this->input->post('Phonenumber');
		$birthday = $this->input->post('Birthday');
		$gender = $this->input->post('Gender');
		$avartar = $this->input->post('avartar');
		$this->UserModel->UpdateDataUser($id,$fullname,$address,$phonenumber,$birthday,$gender,$avartar);
	}
	public function uploadfiles(){
 		$uploadFiles = new UploadHandler;
 	}
}



//---------------------------------- Upload Image Process ---------------------------------------------------
 function uploadImage($avartar)
	{
	// --------------------- process upload image -------------------------------
		$target_dir = "public/uploads/";
		$target_file = $target_dir . basename($_FILES["$avartar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["$avartar"]["tmp_name"]);
		    if($check !== false) {
		        //echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        //echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    //echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["$avartar"]["size"] > 5000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    //echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["$avartar"]["tmp_name"], $target_file)) {
		       // echo "The file ". basename( $_FILES["avartar"]["name"]). " has been uploaded.";
		    } else {
		        //echo "Sorry, there was an error uploading your file.";
		    }
		}
	}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */