<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class forum_model extends CI_Model{	
	function topic(){
		return $this->db->query("select*from forum_category order by id_cat asc")->result();
	}

	function get_thread($id_cat){
		return $this->db->query("select title,user_login,COUNT(forum_comment.id_comment)as total_posting ,MAX(forum_comment.time)as waktu_terakhir,forum_thread.id_thread,forum_thread.id_cat from forum_thread left join forum_comment on forum_thread.id_thread=forum_comment.id_thread left join users on forum_comment.id=users.ID where forum_thread.id_cat='$id_cat' group by id_thread")->result();
	}
	/*
	function get_user_by_id(){
		return $this->db->query("select "); 
	}
*/
	function get_category(){
		return $this->db->query("select deskripsi,MAX(forum_comment.time)as waktu_terakhir,user_login,count(forum_thread.id_thread) as total_thread, COUNT(id_comment) as total_comment,forum_category.id_cat,category from forum_category left join forum_thread on forum_category.id_cat=forum_thread.id_cat left join forum_comment on forum_comment.id_thread=forum_thread.id_thread left join users on forum_comment.id=users.ID group by forum_category.id_cat")->result();
	}

/*	function insert_user($data){
		$this->db->insert('user',$data);
	}

	function cek_username($username){
		return $this->db->query("select username from user where username='$username'")->num_rows();
	}

	function get_user($id_thread){
		return $this->db->query("SELECT `user_login` FROM `forum_thread`,`users` WHERE `forum_thread`.`id_user` = `users`.`ID` AND `id_thread`='$id_thread' ")->row();
	}*/

	function select_category(){
		return $this->db->query("select*from forum_category")->result(); 
	}
	function insert_thread($author,$kategori,$judul,$thread,$date){
		$this->db->query("insert into forum_thread(`id_thread`, `title`, `thread`, `id_cat`, `time`, `id_user`)values(null,'$judul','$thread','$kategori','$date','$author')"); 
	}
	function tampil_thread($id){
		$this->db->query("select * from forum_thread where id='$id'")->result(); 
	}

}
?>