<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
	}
	
	public function index()
	{
		$data["products"] = $this->product_model->getAll();
		$this->load->view('index', $data);
	}

	public function search() {
		$keyword = $this->input->post('keyword');
		$data['products']=$this->product_model->get_product_keyword($keyword);
		$this->load->view('search', $data);
	}
}
