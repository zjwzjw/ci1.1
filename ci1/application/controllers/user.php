<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			//$this->load->database();
			$this->load-model-('user_model');
		}
		public function index(){
			//echo 123;
		}
		public function login(){
			//echo 111;
			$this->load->view('login.php');
		}
		public function do_login(){
			$name=$this->input->post('username');
			$pass=$this->input->post('pass');
			$this->user_model->get_name_by_pass($name,$pass);
			
		}
		public function reg(){
			//加载注册页面
		$this->load->view('reg.php');
		
		}
		public function do_reg(){
			//echo 345;
			$name=$this->input->post('username');
			$pass=$this->input->post('pass');
			//$this->load->model('user_model');
			$result=$this->user_model->insert($name,$pass);
			//echo $name."||".$pass;
			if($result){
				redirect('user/login');
			}else{
				redirect('user/reg');
			}
		}
			
	}

?>