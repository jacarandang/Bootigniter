<?php

class Main extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("main_model");
	}
	
	
	public function index(){
		$data['title'] = "Home";
		$data['news'] = $this->main_model->get_news();
		$data['events'] = $this->main_model->get_events();
		$data['announcements'] = $this->main_model->get_announcements();
		$this->load->view("include/head", $data);
		$this->load->view("home", $data);
		$this->load->view("include/foot");
	}
}