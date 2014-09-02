<?php
	class Template extends CI_Controller {

		public function index(){
			echo "FORBIDDEN";
		}

		public function aside(){
			$this->load->view('template/aside');
		}
	
	}