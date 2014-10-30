<?php
	/* INFO
	dashboard page
	*/

	class Admin extends CI_Controller {

		function __construct(){
			parent::__construct(); 
			$this->load->model('account_model');
			$this->load->model('blog_model');
			$this->load->model('forum_model');

			if( !$this->session->userdata('isLogin') or !($this->session->userdata('level')==='1' or $this->session->userdata('level')==='2') ){
				redirect('account/login');	
			}
		}

		public function index(){
			echo "DASHBOARD";
		}

		public function newpost(){
			$data['title'] = "new post";
			$this->load->view('template/header',$data);
			$this->load->view('editor');
			$this->load->view('template/footer');
		}

		public function tryblog(){
			$data['title'] = "new post";
			$this->load->view('template/header',$data);
			$this->load->view('tryblog');
			$this->load->view('template/footer');
		}		

		public function previewpost(){
			$this->load->library('Parsedown');
			$this->load->library('ParsedownExtra');

			$tulisan = $this->input->post('inilah');
			/*$tulisan = htmlspecialchars($_POST['inilah']);*/

			$Tulis = new ParsedownExtra();
			echo $Tulis->text($tulisan);
		}

		public function post_blog(){
			date_default_timezone_set('Asia/Jakarta');
			$tgl = date("Y-m-d");
			$jam = date("H:i:s");
			$tgljam = $tgl." ".$jam;

			$UID = $this->session->userdata('uid');
			$title = $this->input->post('title');
			$content = $this->input->post('isi');
			$postname = preg_replace("![^a-z0-9]+!i", "-", $title);

			$data = array(
				'post_author'		=> $UID,
				'post_date' 		=> $tgljam,
				'post_content'	=> $content,
				'post_title'		=> $title, 
				'post_status'		=> 'publish',
				'post_name'			=> $postname,
				'comment_status'=> 'open',
				'post_modified'	=> $tgljam,
				'post_type' 		=> 'blog'
			);
			echo $content;
			echo $this->input->post('isi');
			echo $_POST['isi'];
			$this->blog_model->post_blog($data);

		}

	}