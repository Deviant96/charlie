<?php

defined('BASEPATH') OR exit('No direct script acess allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["products"] = $this->product_model->getAll();
        $this->load->view("admin/product/product_list", $data);
    }

    public function add()
    {
        $product = $this->product_model;                // Objek model
        $validation = $this->form_validation;           // Objek form validation
        $validation->set_rules($product->rules());      // Terapkan rules

        if($validation->run()) {                        // Melakukan validasi
            $product->save();                           // Menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan');      // Menampilkan pesan berhasil
        }

        $this->load->view("admin/product/product_add");        // Menampilkan form add
    }

    public function edit($id = null)
    {
        if(!isset($id)) redirect('admin/products');     // Redirect jika tidak ada $id atau $id berisi null

        $product = $this->product_model;                // Objek model
        $validation = $this->form_validation;           // Objek validation
        $validation->set_rules($product->rules());      // Menerapkan rules

        if($validation->run()) {                        // Melakukan validasi
            $product->update();                         // Menyimpan data
            $this->session->set_flashdata('success', 'Berhasil diupdate'); 
        }

        $data["product"] = $product->getById($id);      // Mengambil data untuk ditampilkan pada form
        if(!$data["product"]) show_404();                // Jika tidak ada data, akan menampilkan error 404

        $this->load->view("admin/product/product_edit", $data);    // Menampilkan form edit
    }

    public function delete($id=null)
    {
        if(!isset($id)) show_404();

        if($this->product_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }
}