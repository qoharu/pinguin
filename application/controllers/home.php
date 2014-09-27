<?php

class Home extends CI_Controller {
	function __construct(){
		parent::__construct(); 
		$this->load->model('account_model');
		$this->load->model('blog_model');
		$this->load->library('Parsedown');
		$this->load->library('ParsedownExtra');
	}

	public function index()
	{

		$data['title'] = "Blog";
		$data['blog'] = $this->blog_model->getPinnedBlog();
		$data['parsedown'] = new ParsedownExtra;
		
		$data['title'] = "Landing Page";
		$this->load->view('template/header',$data);
		$this->load->view('home');
		$this->load->view('template/aside',$data);
		$this->load->view('template/footer');
	}
}