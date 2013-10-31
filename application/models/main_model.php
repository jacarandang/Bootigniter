<?php

class Main_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get_news(){
		$result = $this->db->query("SELECT * FROM News");
		return $result->result_array();
	}
	
	public function get_announcements(){
		$result = $this->db->query("SELECT * FROM Announcements");
		return $result->result_array();
	}
	
	public function get_events(){
		$result = $this->db->query("SELECT * FROM Events");
		return $result->result_array();
	}
}