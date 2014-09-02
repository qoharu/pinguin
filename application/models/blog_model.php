<?php
	class Blog_model extends CI_Model{

		function __construct(){
			parent::__construct(); 

		}

		function post_blog($data){
			$this->db->insert('blog_posts',$data);
		}

		function getBlog($page=0,$max=5){
			return $this->db->query("SELECT  `post_date` , `blog_posts`.`ID` as id,  `post_content` ,  `post_title` ,  `post_name` ,  `post_modified` ,  `comment_count` ,  `post_view` ,  `user_login` 
				FROM  `blog_posts` ,  `users` 
				WHERE post_author = users.id
				AND post_type =  'blog'
				ORDER BY post_date DESC 
				LIMIT $page , $max ")->result();
		}

		function getArticle($id,$name){
			return $this->db->query("SELECT  `post_date` ,  `post_content` ,  `post_title` ,  `post_name` ,  `post_modified` ,  `comment_count` ,  `post_view` ,  `user_login` 
				FROM  `blog_posts` ,  `users` 
				WHERE post_author = users.id
				AND post_type =  'blog'
				AND post_status =  'publish'
				AND post_name = '$name'
				AND blog_posts.id = '$id'
				")->result();
		}

		function numRows($id,$name){
			return $this->db->query("SELECT  `post_date` ,  `post_content` ,  `post_title` ,  `post_name` ,  `post_modified` ,  `comment_count` ,  `post_view` ,  `user_login` 
				FROM  `blog_posts` ,  `users` 
				WHERE post_author = users.id
				AND post_type =  'blog'
				AND post_status =  'publish'
				AND post_name = '$name'
				AND blog_posts.id = '$id'
				")->num_rows();
		}
	}