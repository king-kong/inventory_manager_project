<?php

class Products extends CI_Model {

    var $id   = '';
    var $name = '';
	
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
	
	function get_products()
	{
		$query = $this->db->get('products');
		return $query->result_array();

	}
	
	
}

?>