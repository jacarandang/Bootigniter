<?php

class News extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("news_model");
	}

	public function index(){
		$data['title'] = "News";
		$data['news'] = $this->news_model->get_news();
		$this->load->view('include/head', $data);
		$this->load->view('news', $data);
		$this->load->view('include/foot');
	}
	
	public function create(){
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('title', 'Title', 'required|max_length[30]');
		$this->form_validation->set_rules('content', 'Content', 'required');
		
		if($this->form_validation->run() === FALSE){
			$data['title'] = "Create News";
			$this->load->view('include/head', $data);
			$this->load->view('createnews');
			$this->load->view('include/foot');
		}
		else{
			$input = $this->input->post();
			$this->news_model->insert_news($input['title'], $input['content']);
			redirect('/news', 'refresh');
		}
		
	}
	
}