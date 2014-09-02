<?php
	/* TODO :
	Building backbone structure
	*/
	class Forum extends CI_Controller {

		public function index(){
			$data['title'] = "Forum";
			
			$this->load->view('template/header',$data);
			$this->load->view('forum');
			$this->load->view('template/aside',$data);
			$this->load->view('template/footer',$data);
		}
	}