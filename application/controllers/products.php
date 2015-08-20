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

	}
	public function edit(){

	}
	public function show(){

	}
	public function create(){

	}
	public function destroy(){

	}
	public function update(){

	}
}

//end of main controller