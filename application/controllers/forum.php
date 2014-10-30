<?php
	/* TODO :
	Building backbone structure
	*/
	class Forum extends CI_Controller {
	
		function __construct(){
			parent::__construct();
				$this->load->model('account_model');
				$this->load->model('forum_model');		
		}

		public function index(){
			$data['title'] = "Forum";
			
			$data['topic'] = $this->forum_model->topic();
			$data['category'] = $this->forum_model->get_category();
			

			$this->load->view('template/header',$data);
			$this->load->view('forum');
			$this->load->view('template/aside');
			$this->load->view('template/footer');
		}

		function thread($id_cat){
			$data['topic'] = $this->forum_model->topic();
			$data['thread'] = $this->forum_model->get_thread($id_cat);
			
			$this->load->view('template/header',$data);
			$this->load->view('thread');
			$this->load->view('template/aside');
			$this->load->view('template/footer');
		}

		function write_thread(){
			$session = $this->session->userdata('isLogin');
			if($session==FALSE){
				redirect('account/login'); 
			}else{
				$data['cat']=$this->forum_model->select_category(); 
				$this->load->view('form_thread',$data);
				$this->load->view('template/footer');
			}
		}

	//input thread
		function posting(){
			$session=$this->session->userdata('isLogin');
			if($session=FALSE){
				redirect('dashboard/signin'); 
			}else{
				$author=$this->session->userdata('user_id'); 
				$kategori=$this->input->post('select_category'); 
				$judul=$this->input->post('title');
				$thread=$this->input->post('thread'); 
				$date=date('y-m-d'); 
				$insert_thread=$this->forum_model->insert_thread($author,$kategori,$judul,$thread,$date);
				
				if($insert_thread=TRUE){
					echo "<script>
						
					</script>"; 
				}else{
					echo "gagal posting"; 
				}
				//end posting controller
			}
		}

		function post(){
			$session=$this->session->userdate('isLogin');
			if($session=FALSE){
				redirect('dashboard/signin'); 
			}else{
				$id=$this->session->userdata('user_id');
				$data['tampil']=$this->db_forum->tampil_thread($id); 
				if($tampil_thread){
					$this->load->view('user/view_thread'); 
				}

			}
		}
	}