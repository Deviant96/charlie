<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "products"; //nama tabel

    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $product_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],
            
            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],

            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function  getAll()
    {
        return $this->db->get($this->_table)->result(); // Sama seperti SELECT * FROM products // method ini akan mengembalikan sebuah array yg berisi objek dari row
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row(); // Sama seperti SELECT * FROM products WHERE product_id=$id // method ini akan mengembalikan sebuah objek
    }

    public function save()
    {
        $post = $this->input->post();                   // Ambil data dari form
        $this->product_id = uniqid();                   // Membuat id unik
        $this->name = $post["name"];                    // Isi field name
        $this->price = $post["price"];                  // Isi field price
        $this->description = $post["description"];      // Isi field description
        $this->db->insert($this->_table, $this);        // Simpan ke database
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}