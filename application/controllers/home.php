<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


    public function __construct()
	{
		parent::__construct();
		$this->load->model('products');		
	}
	public function index()
	{
		$data['var1'] = $this->products->get_products();
		$this->load->view('home',$data);

	}
	
	public function add()
	{
		$data['var1'] = $this->products->get_products();
		$this->load->view('home',$data);

	}
	
}
