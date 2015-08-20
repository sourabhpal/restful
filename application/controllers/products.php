<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->model('Product');
		$products = array("products" => $this->Product->get_all_products());
		$id = array();
		$name = array();
		$description = array();
		$price = array();
		foreach($products as $rkey => $rvalue){
			foreach($rvalue as $v){
				array_push($id, $v['id']);
				array_push($name, $v['name']);
				array_push($description, $v['description']);
				array_push($price, $v['price']);
			}
		}
		$p = array(
			"id" => $id,
			"name" => $name,
			"description" => $description,
			"price" => $price
			);
		$this->load->view('index', $p);
	}
	public function new_product(){
		$this->load->view('new_product');
	}
	public function edit($id){
		$this->load->model('Product');
		$p = $this->Product->get_product_by_id($id);
		$this->load->view('edit_product', $p);
	}
	public function show($id){
		$this->load->model('Product');
		$p = $this->Product->get_product_by_id($id);
		$this->load->view('show_product', $p);
	}
	public function create(){
		$name = $this->input->post('name');
        $description = $this->input->post('description');
        $price = $this->input->post('price');
        if(!is_numeric($price)){
        	$this->session->set_userdata('error', 'Price must be numeric!');
        	$this->new_product();
        }
        else{
        	$this->load->model("Product");
	        $product_details = array(
	            "name" => $name,
	            "description" => $description,
	            "price" => $price
	        ); 
	        $add_product = $this->Product->add_product($product_details);
	        if($add_product === TRUE)
	        {
	            redirect('/');
	        }	
        }
    	
	}
	public function destroy($id){
		$this->load->model("Product");
    	$delete_product = $this->Product->delete_product_by_id($id);
    	if($delete_product === TRUE)
        {
            redirect('/');
        }
	}
	public function update($id){
		$name = $this->input->post('name');
        $description = $this->input->post('description');
        $price = $this->input->post('price');
        if(!is_numeric($price)){
        	$this->session->set_userdata('error', 'Price must be numeric!');
        	$this->edit($id);
        }
        else{
        	$this->load->model("Product");
	        $product_details = array(
	            "id" => $id,
	            "name" => $name,
	            "description" => $description,
	            "price" => $price
	        ); 
	        $update_product = $this->Product->update_product($product_details);
	        if($update_product === TRUE)
	        {
	            redirect('/');
	        }	
        }
	}
}

//end of main controller