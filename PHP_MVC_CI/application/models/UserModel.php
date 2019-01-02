<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
		
	}
	public function addUser($fullName,$userName,$email,$password,$address,$phonenumber,$birthday,$gender,$role_id,$avartar){
		$data = array(
			'name' => $fullName,
			'username' => $userName,
			'password' => $password,
			'address' => $address,
			'phone' => $phonenumber,
			'email' => $email,
			'birthday' => $birthday,
			'gender' => $gender,
			'role_id' => $role_id,
			'avatar' => $avartar
		);
		$this->db->select('*');
		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}
	public function LoginCheck(){
		$this->db->select('email, password');
		$dataquery = $this->db->get('users');
		$dataquery = $dataquery->result_array();
		return $dataquery;
	}
	public function GetDataUsers(){
		$this->db->select('*');
		$dataquery = $this->db->get('users');
		$dataquery = $dataquery->result_array();
		return $dataquery;
	}
	public function DeleteUser($id){
		$this->db->where('Id', $id);
		$dataquery = $this->db->delete('users');
		return $dataquery;
	}
	public function UpdateDataUser($id,$fullname,$address,$phonenumber,$birthday,$gender,$avartar){
		$dataUpdate = array(
			'name' => $fullname,
			'address' => $address,
			'phone' => $phonenumber,
			'birthday' => $birthday,
			'gender' => $gender,
			'avatar' => $avartar
		);
		$this->db->where('Id', $id);
		$dataquery = $this->db->update('users', $dataUpdate);
		return $dataquery;
	}

}

/* End of file UserModel.php */
/* Location: ./application/models/UserModel.php */