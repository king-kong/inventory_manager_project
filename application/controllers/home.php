<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('products');
		$this -> load -> helper('form');
		$this -> load -> helper('url');
	}

	public function index() {
		$data['var1'] = $this -> products -> get_products();
		$this -> load -> view('home', $data);

	}
	
	public function xml(){
		$this->output->set_header("Content-Type: text/xml");
		$this->load->helper('xml');
		$data['var1'] = $this->products->get_products();
		$this->load->view('xml', $data);
	}

	public function delete() {

		$errorMessage = "";
		if ($input = $this -> input -> post('id')) {
			try {
				$this -> products -> delete_product($input);
			} catch (InvalidInputException $e) {
				$errorMessage = $e->getMessage();
			}
		}
		$data['error'] = $errorMessage;
		$data['var1'] = $this->products->get_products();
		$this -> load -> view('delete', $data);

	}

	public function add() {
		#$data['var1'] = $this->products->get_products();``
		#$this->load->view('home',$data);

	}

}
