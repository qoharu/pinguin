<?php
	/* TODO :
	Building backbone structure
	*/
	class Blog extends CI_Controller {
		function __construct(){
			parent::__construct(); 
			$this->load->model('blog_model');
			$this->load->library('Parsedown');
			$this->load->library('ParsedownExtra');
			$data['blog'] = TRUE;
		}

		public function index($page=1){
			$data['title'] = "Blog";
			$data['blog'] = $this->blog_model->getBlog();
			$data['parsedown'] = new ParsedownExtra;
			

			$this->load->view('template/header',$data);
			$this->load->view('blog');
			$this->load->view('template/aside');
			$this->load->view('template/footer');
		}

		public function article($id,$name){
				if( !($this->blog_model->numRows($id,$name)>0) )(redirect('blog'));

				$artikel = $this->blog_model->getArticle($id,$name);
				$data['parsedown'] = new ParsedownExtra;

				foreach ($artikel as $key) {
					$data['post_title'] = $key->post_title;
					$data['post_date'] = $key->post_date;
					$data['comment_count'] = $key->comment_count;
					$data['post_content'] = $key->post_content;
					$data['user_login'] = $key->user_login;
				}

				$data['title'] = $data['post_title'];

				$this->load->view('template/header',$data);
				$this->load->view('article');
				$this->load->view('template/aside');
				$this->load->view('template/footer');
		}
		public function date($year,$month,$day,$page=1){

		}

		public function search($query,$page=1){

		}

		public function category($cat,$page=1){

		}

	}