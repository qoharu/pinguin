<?php
	class Account extends CI_Controller {
		function __construct(){
			parent::__construct(); 
			$this->load->model('account_model');
		}

		public function index(){

			//if user not logged in
			if( ! $this->session->userdata('isLogin') ){
				//go to login page
				redirect('account/login');
			}else{
				//go to profile page
				redirect('account/profile');
				
			}
		}

		public function login(){
			$data['title'] = "User Login";

			//if user has logged in then
			if($this->session->userdata('isLogin')){
				redirect('account/profile');	
			}
			//show the login form
			$this->load->view('template/header',$data);
			$this->load->view('login_form');
			$this->load->view('template/footer');
		}

		public function login_process($username=NULL,$password=NULL){
			if($username == NULL and $password == NULL){
				$username = $this->input->post('username');
				$password = $this->input->post('password');
			}
			if( $this->account_model->validate($username,$password) == TRUE ){
				echo "true";
			}else{
				echo "false";
			}
		}

		public function logout(){
			$this->session->sess_destroy();
		}

		public function register(){
			$data['title'] = "Register";

			if($this->session->userdata('isLogin')){
				redirect('account/profile');
			}

			$this->load->view('template/header',$data);
			$this->load->view('register_form');
			$this->load->view('template/footer');
		}

		public function register_process(){
			$error = FALSE;
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			$password = sha1($pass);
			$confirm_password = sha1($this->input->post('confirm-password'));

			echo "<ul>";
			if($password != $confirm_password){
				$error = TRUE;
				echo "<li>Password tidak sama </li>";
			}
			if(!$this->check_username($username)){
				$error = TRUE;
				echo "<li>Username tidak dapat digunakan</li>";
			}
			if(!$this->check_email($email)){
				$error = TRUE;
				echo "<li>Email tidak dapat digunakan </li>";
			}
			if(empty($email) or empty($username) or empty($password) ){
				$error = TRUE;
				echo "<li>Semua kolom harus diisi</li>";
			}
			echo "</ul>";

			if($error == FALSE){
				$data = array(
					'user_login' =>$username,
					'user_pass' =>$password,
					'user_email' =>$email,
					'user_level' =>"1"
				);
				$this->account_model->register($data);
				$this->login_process($username,$pass);
			}

		}

		public function check_username($username=""){
			if($username == ""){
				$username = $this->input->post('username');
			}

			if($this->account_model->check('username',$username) != 0){
				echo "Username telah digunakan";
				return FALSE;
			}else{
				return TRUE;
			}
		}

		public function check_email($email=""){
			if($email == ""){
				$email = $this->input->post('email');
			}
			if($this->account_model->check('email',$email) != 0){
				echo "Email telah digunakan";
				return FALSE;
			}else{
				return TRUE;
			}
		}

		public function profile($username=NULL){
			/* TODO
			This page shows profile based on function
			parameter, if $username is empty then it will
			shows profile page using user session
			*/
			echo "HALAMAN PROFILE";
		}

	}