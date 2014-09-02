<?php
	/* TODO :
	Building backbone structure
	*/
	class Download extends CI_Controller {

		public function index(){
			$data['title'] = "Download";
			
			$this->load->view('template/header',$data);
			$this->load->view('download');
			$this->load->view('template/aside',$data);
			$this->load->view('template/footer',$data);
		}
	}