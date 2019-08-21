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
}
