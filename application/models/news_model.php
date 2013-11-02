<?php

class News_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function get_news(){
		$result = $this->db->query('SELECT * FROM News');
		return $result->result_array();
	}
	
	public function insert_news($title, $content){
		$data = array('title' => $title, 'content' => $content);
		$this->db->insert('News', $data);
	}
}