<?php

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = "Landing Page";
		$this->load->view('template/header',$data);
		$this->load->view('home');
		$this->load->view('template/aside',$data);
		$this->load->view('template/footer');
	}
}